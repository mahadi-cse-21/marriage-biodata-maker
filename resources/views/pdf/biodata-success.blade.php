<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Created Successfully</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@400;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Serif Bengali', 'Segoe UI', serif;
            background: #0a0a1a;
        }

        .gold-text {
            color: #c8a84b;
        }

        .gold-border {
            border: 1px solid #c8a84b;
        }

        .bg-dark-gradient {
            background: linear-gradient(160deg, #0d1b2a 0%, #0a1628 40%, #0d1b2a 100%);
        }

        .toggle-btn {
            background: #1e2f47;
            border: 1px solid #c8a84b66;
            color: #e0d6b0;
            padding: 6px 18px;
            border-radius: 40px;
            font-weight: 600;
            transition: 0.25s;
            cursor: pointer;
        }

        .toggle-btn:hover {
            background: #c8a84b;
            color: #0a0a1a;
        }

        .toggle-btn.active {
            background: #c8a84b;
            color: #0a0a1a;
        }

        .custom-field-row {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            border-bottom: 1px solid #1e2f47;
        }

        .custom-field-label {
            color: #9aaec9;
            font-weight: 600;
        }

        .custom-field-value {
            color: #e0d6b0;
        }
    </style>
</head>

<body class="py-10">
    <div class="max-w-2xl mx-auto px-4">
        <div class="bg-dark-gradient gold-border p-8 rounded-xl shadow-2xl">

            <!-- Language Toggle -->
            <div class="flex justify-end mb-6">
                <button id="langToggle" class="toggle-btn flex items-center gap-2">
                    <span id="langIcon">🇧🇩</span>
                    <span id="langLabel">বাংলা</span>
                </button>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>

                <h1 class="text-3xl gold-text font-bold mb-4">
                    <span class="bn-text">বায়োডাটা সফলভাবে তৈরি হয়েছে!</span>
                    <span class="en-text hidden">Biodata Created Successfully!</span>
                </h1>

                <p class="text-gray-300 mb-6">
                    <span class="bn-text">আপনার বায়োডাটা সফলভাবে তৈরি এবং সংরক্ষণ করা হয়েছে।</span>
                    <span class="en-text hidden">Your biodata has been created and saved successfully.</span>
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    @if($biodata->pdf_path)
                        <a href="{{ asset($biodata->pdf_path) }}" target="_blank"
                            class="bg-[#c8a84b] hover:bg-[#b8973a] px-6 py-3 rounded text-[#0a0a1a] font-semibold transition">
                            <span class="bn-text">পিডিএফ দেখুন</span>
                            <span class="en-text hidden">View PDF</span>
                        </a>

                        <a href="{{ route('biodata.download', $biodata->id) }}"
                            class="bg-green-600 hover:bg-green-700 px-6 py-3 rounded text-white font-semibold transition">
                            <span class="bn-text">পিডিএফ ডাউনলোড</span>
                            <span class="en-text hidden">Download PDF</span>
                        </a>
                    @endif

                    <a href="{{ route('biodata.create') }}"
                        class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded text-white font-semibold transition">
                        <span class="bn-text">নতুন বায়োডাটা তৈরি</span>
                        <span class="en-text hidden">Create New Biodata</span>
                    </a>
                </div>

                @if($biodata->pdf_path)
                    <div class="mt-6 p-4 bg-[#12243d] rounded border border-[#c8a84b44]">
                        <p class="text-gray-400 text-sm">
                            <span class="bn-text">পিডিএফ সংরক্ষণ করা হয়েছে:</span>
                            <span class="en-text hidden">PDF saved at:</span>
                            <br>
                            <a href="{{ asset($biodata->pdf_path) }}" target="_blank" class="gold-text hover:underline">
                                {{ asset($biodata->pdf_path) }}
                            </a>
                        </p>
                    </div>
                @endif

                <!-- ========== CUSTOM FIELDS SECTION ========== -->
                @php
                    $customFields = null;
                    if (!empty($biodata->custom_fields)) {
                        if (is_string($biodata->custom_fields)) {
                            $customFields = json_decode($biodata->custom_fields, true);
                        } elseif (is_array($biodata->custom_fields)) {
                            $customFields = $biodata->custom_fields;
                        }
                    }

                    // Normalize the structure: combine label/value pairs
                    $normalizedFields = [];
                    if ($customFields && count($customFields) > 0) {
                        $lastLabel = null;
                        foreach ($customFields as $item) {
                            if (isset($item['label'])) {
                                $lastLabel = $item['label'];
                            }
                            if (isset($item['value']) && $lastLabel !== null) {
                                $normalizedFields[] = ['label' => $lastLabel, 'value' => $item['value']];
                                $lastLabel = null; // reset after pairing
                            }
                        }
                    }
                @endphp
                @if(count($normalizedFields) > 0)
                    <div class="mt-6 p-4 bg-[#12243d] rounded border border-[#c8a84b44] text-left">
                        <h3 class="gold-text font-bold text-sm uppercase mb-3 border-b border-[#c8a84b44] pb-2">
                            <span class="bn-text">অতিরিক্ত তথ্য</span>
                            <span class="en-text hidden">Extra Information</span>
                        </h3>
                        @foreach($normalizedFields as $field)
                            <div class="custom-field-row">
                                <span class="custom-field-label">{{ $field['label'] }}</span>
                                <span class="custom-field-value">{{ $field['value'] }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        // Language toggle for success page
        (function () {
            const toggle = document.getElementById('langToggle');
            const icon = document.getElementById('langIcon');
            const label = document.getElementById('langLabel');
            const bnElements = document.querySelectorAll('.bn-text');
            const enElements = document.querySelectorAll('.en-text');

            let lang = 'bn';

            toggle.addEventListener('click', function () {
                if (lang === 'bn') {
                    bnElements.forEach(el => el.classList.add('hidden'));
                    enElements.forEach(el => el.classList.remove('hidden'));
                    icon.textContent = '🇬🇧';
                    label.textContent = 'English';
                    toggle.classList.add('active');
                    lang = 'en';
                } else {
                    bnElements.forEach(el => el.classList.remove('hidden'));
                    enElements.forEach(el => el.classList.add('hidden'));
                    icon.textContent = '🇧🇩';
                    label.textContent = 'বাংলা';
                    toggle.classList.remove('active');
                    lang = 'bn';
                }
            });
        })();
    </script>
</body>

</html>