<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Str;
use function Spatie\LaravelPdf\Support\pdf;

class BiodataController extends Controller
{
    /**
     * Show the biodata input form.
     */
    public function create()
    {
        return view('input');
    }

    /**
     * Store a newly created biodata.
     */
    public function store(Request $request)
    {
        set_time_limit(180);

        try {
            // 1. Validate input
            $validated = $request->validate([
                'full_name'           => 'required|string|max:255',
                'email'               => 'required|email|max:255',
                'photo'               => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'date_of_birth'       => 'required|date',
                'birth_place'         => 'required|string|max:255',
                'height'              => 'required|string|max:50',
                'blood_group'         => 'required|string|max:10',
                'marital_status'      => 'required|string|max:50',
                'physical_status'     => 'required|string|max:50',
                'education'           => 'required|string|max:255',
                'institution'         => 'required|string|max:255',
                'occupation'          => 'required|string|max:255',
                'workplace'           => 'required|string|max:255',
                'monthly_income'      => 'nullable|numeric|min:0',
                'hobbies'             => 'nullable|string|max:500',
                'father_name'         => 'required|string|max:255',
                'father_occupation'   => 'required|string|max:255',
                'mother_name'         => 'required|string|max:255',
                'mother_occupation'   => 'required|string|max:255',
                'brothers'            => 'required|integer|min:0',
                'married_brothers'    => 'required|integer|min:0',
                'sisters'             => 'required|integer|min:0',
                'married_sisters'     => 'required|integer|min:0',
                'phone'               => 'required|string|max:20',
                'present_address'     => 'required|string|max:500',
                'permanent_address'   => 'required|string|max:500',
                'partner_expectation' => 'nullable|string|max:500',
                'custom_fields'       => 'nullable|array', // Changed from 'nullable|json'
                'language_preference' => 'nullable|in:bn,en',
                'theme'               => 'nullable|in:dark-blue,golden-white'
            ]);

            // 2. Check for duplicates
            $duplicateCheck = $this->checkDuplicates($request);
            if ($duplicateCheck['has_duplicate']) {
                $biodata = Biodata::where('full_name', $request->full_name)->first();
                return redirect()
                    ->route('biodata.success', $biodata ? $biodata->id : 0)
                    ->with('error', $duplicateCheck['message'])
                    ->with('biodata', $biodata)
                    ->with('is_duplicate', true);
            }

            // 3. Handle photo upload and generate base64 for PDF
            $photoPath = null;
            $photoData = null;
            if ($request->hasFile('photo')) {
                $photoid = Biodata::count()+1;
                $photo = $request->file('photo');
                $fileName = 'photo-'.$photoid.'.' . $photo->getClientOriginalExtension();
                $photo->move(public_path('biodata-photos'), $fileName);
                $photoPath = 'biodata-photos/' . $fileName;

                $fullPhotoPath = public_path($photoPath);
                if (file_exists($fullPhotoPath)) {
                    $extension = pathinfo($fullPhotoPath, PATHINFO_EXTENSION);
                    $photoData = 'data:image/' . $extension . ';base64,' . base64_encode(file_get_contents($fullPhotoPath));
                }
            }

            // 4. Prepare data for storage
            $theme = $request->theme ?? 'dark-blue';
            $biodataData = [
                'photo'               => $photoPath,
                'full_name'           => $request->full_name,
                'date_of_birth'       => $request->date_of_birth,
                'birth_place'         => $request->birth_place,
                'height'              => $request->height,
                'religion'            => 'Islam',
                'blood_group'         => $request->blood_group,
                'marital_status'      => $request->marital_status,
                'physical_status'     => $request->physical_status,
                'education'           => $request->education,
                'institution'         => $request->institution,
                'occupation'          => $request->occupation,
                'workplace'           => $request->workplace,
                'monthly_income'      => $request->monthly_income,
                'hobbies'             => $request->hobbies,
                'father_name'         => $request->father_name,
                'father_occupation'   => $request->father_occupation,
                'mother_name'         => $request->mother_name,
                'mother_occupation'   => $request->mother_occupation,
                'brothers'            => $request->brothers,
                'married_brothers'    => $request->married_brothers,
                'sisters'             => $request->sisters,
                'married_sisters'     => $request->married_sisters,
                'phone'               => $request->phone,
                'email'               => $request->email,
                'present_address'     => $request->present_address,
                'permanent_address'   => $request->permanent_address,
                'partner_expectation' => $request->partner_expectation,
                'custom_fields'       => $request->custom_fields ? json_encode($request->custom_fields) : null,
                'language_preference' => $request->language_preference ?? 'bn',
                'theme'               => $theme
            ];

            // 5. Save biodata
            $biodata = Biodata::create($biodataData);

            // 6. Generate and save PDF using the selected theme
            $lang = $request->language_preference ?? 'bn';
            $pdfPath = $this->generateAndSavePdf($biodata, $lang, $photoData, $theme);

            // 7. Send email (optional – uncomment if needed)
            // if ($request->filled('email')) {
            //     $this->sendBiodataEmail($biodata, $lang, $pdfPath);
            // }

            // 8. Redirect to success page
            return redirect()
                ->route('biodata.success', $biodata->id)
                ->with('success', 'Biodata created successfully!')
                ->with('biodata', $biodata);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            Log::error('Biodata creation error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());

            return back()
                ->withInput()
                ->with('error', 'Error: ' . $e->getMessage());
        }
    }

    /**
     * Helper method to generate and save the PDF.
     */
    private function generateAndSavePdf(Biodata $biodata, string $lang, ?string $photoData, string $theme = 'dark-blue'): string
    {
        $pdfDir = public_path('pdfs');
        if (!file_exists($pdfDir)) {
            mkdir($pdfDir, 0777, true);
        }

        $pdfFileName = 'biodata-' . $biodata->id . '.pdf';
        $pdfPath = 'pdfs/' . $pdfFileName;
        $fullPdfPath = public_path($pdfPath);

        // Choose the correct view based on theme
        $view = $theme === 'golden-white' ? 'pdf.biodata' : 'pdf.biodata-dark-navy-blue';

        pdf()
            ->view($view, [
                'biodata'   => $biodata,
                'lang'      => $lang,
                'photoData' => $photoData
            ])
            ->format('a4')
            ->withBrowsershot(function (Browsershot $browsershot) {
                $browsershot
                    ->noSandbox()
                    ->timeout(180)
                    ->setOption('args', [
                        '--disable-gpu',
                        '--disable-dev-shm-usage',
                        '--no-sandbox',
                        '--disable-setuid-sandbox',
                        '--disable-web-security',
                        '--disable-features=IsolateOrigins,site-per-process',
                    ]);
            })
            ->save($fullPdfPath);

        $biodata->pdf_path = $pdfPath;
        $biodata->save();

        return $fullPdfPath;
    }

    /**
     * Check for duplicate entries using father, mother, and full name.
     */
    private function checkDuplicates(Request $request): array
    {
        // Full name + father name + mother name
        if ($request->filled('full_name') && $request->filled('father_name') && $request->filled('mother_name')) {
            $existing = Biodata::where('full_name', $request->full_name)
                ->where('father_name', $request->father_name)
                ->where('mother_name', $request->mother_name)
                ->first();

            if ($existing) {
                return [
                    'has_duplicate' => true,
                    'message' => 'এই নাম, পিতার নাম ও মাতার নামে একটি জীবনবৃত্তান্ত ইতিমধ্যে বিদ্যমান। / A biodata with this name, father\'s name, and mother\'s name already exists.'
                ];
            }
        }

        // Full name + father name
        if ($request->filled('full_name') && $request->filled('father_name')) {
            $existing = Biodata::where('full_name', $request->full_name)
                ->where('father_name', $request->father_name)
                ->first();

            if ($existing) {
                return [
                    'has_duplicate' => true,
                    'message' => 'এই নাম ও পিতার নামে একটি জীবনবৃত্তান্ত ইতিমধ্যে বিদ্যমান। / A biodata with this name and father\'s name already exists.'
                ];
            }
        }

        // Full name + mother name
        if ($request->filled('full_name') && $request->filled('mother_name')) {
            $existing = Biodata::where('full_name', $request->full_name)
                ->where('mother_name', $request->mother_name)
                ->first();

            if ($existing) {
                return [
                    'has_duplicate' => true,
                    'message' => 'এই নাম ও মাতার নামে একটি জীবনবৃত্তান্ত ইতিমধ্যে বিদ্যমান। / A biodata with this name and mother\'s name already exists.'
                ];
            }
        }

        // Phone number
        if ($request->filled('phone')) {
            $existingByPhone = Biodata::where('phone', $request->phone)->first();
            if ($existingByPhone) {
                return [
                    'has_duplicate' => true,
                    'message' => 'এই ফোন নম্বরে একটি জীবনবৃত্তান্ত ইতিমধ্যে বিদ্যমান। / A biodata with this phone number already exists.'
                ];
            }
        }

        // Email
        if ($request->filled('email')) {
            $existingByEmail = Biodata::where('email', $request->email)->first();
            if ($existingByEmail) {
                return [
                    'has_duplicate' => true,
                    'message' => 'এই ইমেইলে একটি জীবনবৃত্তান্ত ইতিমধ্যে বিদ্যমান। / A biodata with this email already exists.'
                ];
            }
        }

        return ['has_duplicate' => false, 'message' => ''];
    }

    /**
     * Send email with PDF attachment.
     */
    private function sendBiodataEmail(Biodata $biodata, string $lang, string $pdfPath): void
    {
        try {
            Mail::send(
                'emails.biodata',
                ['biodata' => $biodata, 'lang' => $lang],
                function ($message) use ($biodata, $pdfPath) {
                    $message->to($biodata->email)
                        ->subject('Your Marriage Biodata - ' . ($biodata->full_name ?? 'User'))
                        ->attach($pdfPath);
                }
            );
        } catch (\Exception $e) {
            Log::error('Failed to send biodata email: ' . $e->getMessage());
        }
    }

    /**
     * Show success page.
     */
    public function success(int $id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('pdf.biodata-success', compact('biodata'));
    }

    /**
     * Download the PDF.
     */
    public function downloadPdf(int $id)
    {
        $biodata = Biodata::findOrFail($id);
        $lang = request()->get('lang', $biodata->language_preference ?? 'bn');
        $theme = $biodata->theme ?? 'dark-blue';

        // Prepare photo data if needed for regeneration
        $photoData = null;
        if ($biodata->photo && file_exists(public_path($biodata->photo))) {
            $fullPhotoPath = public_path($biodata->photo);
            $extension = pathinfo($fullPhotoPath, PATHINFO_EXTENSION);
            $photoData = 'data:image/' . $extension . ';base64,' . base64_encode(file_get_contents($fullPhotoPath));
        }

        // If PDF exists, serve it
        if ($biodata->pdf_path && file_exists(public_path($biodata->pdf_path))) {
            return response()->download(public_path($biodata->pdf_path), 'biodata-' . $biodata->id . '.pdf');
        }

        // Otherwise generate and download
        $this->generateAndSavePdf($biodata, $lang, $photoData, $theme);
        return response()->download(public_path($biodata->pdf_path), 'biodata-' . $biodata->id . '.pdf');
    }

    /**
     * View the PDF in the browser.
     */
    public function viewPdf(int $id)
    {
        $biodata = Biodata::findOrFail($id);
        $lang = request()->get('lang', $biodata->language_preference ?? 'bn');
        $theme = $biodata->theme ?? 'dark-blue';

        $photoData = null;
        if ($biodata->photo && file_exists(public_path($biodata->photo))) {
            $fullPhotoPath = public_path($biodata->photo);
            $extension = pathinfo($fullPhotoPath, PATHINFO_EXTENSION);
            $photoData = 'data:image/' . $extension . ';base64,' . base64_encode(file_get_contents($fullPhotoPath));
        }

        if ($biodata->pdf_path && file_exists(public_path($biodata->pdf_path))) {
            return response()->file(public_path($biodata->pdf_path));
        }

        $this->generateAndSavePdf($biodata, $lang, $photoData, $theme);
        return response()->file(public_path($biodata->pdf_path));
    }
}