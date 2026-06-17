<!DOCTYPE html>
<html lang="{{ $lang ?? 'bn' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Marriage Biodata</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            margin: 0;
            padding: 20px;
            font-family: 'Kalpurush','Noto Serif Bengali', 'Times New Roman', serif;
            background: #0a0a1a;
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }
        
        .biodata-container {
            width: 900px;
            min-height: auto;
            background: linear-gradient(160deg, #0d1b2a 0%, #0a1628 40%, #0d1b2a 100%);
            position: relative;
            overflow: hidden;
            padding: 40px 44px 50px;
            border: 1px solid #c8a84b;
        }
        
        /* Decorative corner elements */
        .corner-decoration {
            position: absolute;
            width: 80px;
            height: 80px;
            border-color: #c8a84b;
            opacity: 0.3;
        }
        
        .corner-tl {
            top: 10px;
            left: 10px;
            border-top: 2px solid #c8a84b;
            border-left: 2px solid #c8a84b;
            border-radius: 8px 0 0 0;
        }
        
        .corner-br {
            bottom: 10px;
            right: 10px;
            border-bottom: 2px solid #c8a84b;
            border-right: 2px solid #c8a84b;
            border-radius: 0 0 8px 0;
        }
        
        .gold-text {
            color: #c8a84b;
        }
        
        .gold-divider {
            width: 100%;
            height: 1px;
            background: linear-gradient(to right, transparent, #c8a84b, transparent);
            margin: 10px 0;
        }
        
        /* Header */
        .header-arabic {
            font-size: 26px;
            color: #c8a84b;
            font-family: 'Georgia', serif;
            text-align: center;
            margin-bottom: 6px;
        }
        
        .header-translation {
            font-size: 10px;
            color: #a89060;
            letter-spacing: 1px;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        
        /* Main content layout */
        .main-row {
            display: flex;
            gap: 30px;
            margin: 10px 0 15px 0;
            position: relative;
            z-index: 1;
        }
        
        .left-column {
            flex: 1;
        }
        
        .right-column {
            flex-shrink: 0;
            width: 200px;
        }
        
        /* Section title */
        .section-title {
            color: #c8a84b;
            font-size: 12.5px;
            font-weight: 700;
            letter-spacing: 1px;
            margin: 18px 0 8px;
            padding-bottom: 4px;
            border-bottom: 1px solid #c8a84b44;
            position: relative;
            z-index: 1;
        }
        
        .section-title:first-of-type {
            margin-top: 0;
        }
        
        /* Info table */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            position: relative;
            z-index: 1;
            font-size: 16px;
        }
        
        .info-table td {
            padding: 4px 2px;
            vertical-align: top;
            line-height: 1.55;
        }
        
        .label-cell {
            color: #b0af9a;
            width: 160px;
        }
        
        .separator-cell {
            color: #c8a84b;
            font-weight: bold;
            text-align: center;
            width: 18px;
        }
        
        .value-cell {
            color: #e8e6de;
        }
        
        .value-cell.gold {
            color: #c8a84b;
            font-weight: 600;
        }
        
        /* Photo container */
        .photo-container {
            width: 200px;
            height: 250px;
            background: #0d2040;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 30px;
        }
        
        .photo-container img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
        
        .photo-placeholder {
            color: #c8a84b;
            font-size: 10px;
            text-align: center;
            padding: 10px;
        }
        
        /* Footer */
        .footer {
            text-align: center;
            margin-top: 22px;
            padding-top: 12px;
            border-top: 1px solid #c8a84b44;
            position: relative;
            z-index: 1;
        }
        
        .footer .arabic {
            font-size: 14px;
            color: #c8a84b;
            font-family: 'Georgia', serif;
            margin-bottom: 4px;
        }
        
        .footer .translation {
            font-size: 10px;
            color: #888;
            font-style: italic;
        }
        
        /* Bilingual text handling */
        .bn-text {
            display: inline;
        }
        .en-text {
            display: none;
        }
        
        .lang-en .bn-text {
            display: none;
        }
        .lang-en .en-text {
            display: inline;
        }
        
        @media print {
            body {
                background: white;
                padding: 0;
            }
            .biodata-container {
                box-shadow: none;
                border: 1px solid #c8a84b;
            }
        }
    </style>
</head>

<body class="{{ isset($lang) && $lang == 'en' ? 'lang-en' : '' }}">

    <div class="biodata-container">
        
        <!-- Decorative corner elements -->
        <div class="corner-decoration corner-tl"></div>
        <div class="corner-decoration corner-br"></div>

        <!-- ============ HEADER ============ -->
        <div class="header-arabic">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</div>
        <div class="header-translation">
            <span class="bn-text">আসসালামু আলাইকুম ওয়া রাহমাতুল্লাহি ওয়া বারাকাতুহু</span>
            <span class="en-text">Assalamu Alaikum Wa Rahmatullahi Wa Barakatuh</span>
        </div>
        <div class="gold-divider"></div>

        <!-- ============ MAIN ROW: Personal Info + Photo ============ -->
        <div class="main-row">

            <!-- LEFT COLUMN: Personal Information -->
            <div class="left-column">
                <div class="section-title">
                    <span class="bn-text">ব্যক্তিগত তথ্য</span>
                    <span class="en-text">Personal Information</span>
                </div>

                <table class="info-table">
                    @if($biodata->full_name)
                        <tr>
                            <td class="label-cell">
                                <span class="bn-text">নাম</span>
                                <span class="en-text">Name</span>
                            </td>
                            <td class="separator-cell">:</td>
                            <td class="value-cell gold">{{ $biodata->full_name }}</td>
                        </tr>
                    @endif

                    @if($biodata->date_of_birth)
                        <tr>
                            <td class="label-cell">
                                <span class="bn-text">জন্ম তারিখ</span>
                                <span class="en-text">Date of Birth</span>
                            </td>
                            <td class="separator-cell">:</td>
                            <td class="value-cell">{{ \Carbon\Carbon::parse($biodata->date_of_birth)->format('d M Y') }}</td>
                        </tr>
                    @endif

                    @if($biodata->birth_time)
                        <tr>
                            <td class="label-cell">
                                <span class="bn-text">জন্ম সময়</span>
                                <span class="en-text">Birth Time</span>
                            </td>
                            <td class="separator-cell">:</td>
                            <td class="value-cell">{{ $biodata->birth_time }}</td>
                        </tr>
                    @endif

                    @if($biodata->birth_place)
                        <tr>
                            <td class="label-cell">
                                <span class="bn-text">জন্মস্থান</span>
                                <span class="en-text">Birth Place</span>
                            </td>
                            <td class="separator-cell">:</td>
                            <td class="value-cell">{{ $biodata->birth_place }}</td>
                        </tr>
                    @endif

                    @if($biodata->height)
                        <tr>
                            <td class="label-cell">
                                <span class="bn-text">উচ্চতা</span>
                                <span class="en-text">Height</span>
                            </td>
                            <td class="separator-cell">:</td>
                            <td class="value-cell">{{ $biodata->height }}</td>
                        </tr>
                    @endif

                    @if($biodata->religion)
                        <tr>
                            <td class="label-cell">
                                <span class="bn-text">ধর্ম</span>
                                <span class="en-text">Religion</span>
                            </td>
                            <td class="separator-cell">:</td>
                            <td class="value-cell">{{ $biodata->religion }}</td>
                        </tr>
                    @endif

                    @if($biodata->blood_group)
                        <tr>
                            <td class="label-cell">
                                <span class="bn-text">রক্তের গ্রুপ</span>
                                <span class="en-text">Blood Group</span>
                            </td>
                            <td class="separator-cell">:</td>
                            <td class="value-cell gold">{{ $biodata->blood_group }}</td>
                        </tr>
                    @endif

                    @if($biodata->marital_status)
                        <tr>
                            <td class="label-cell">
                                <span class="bn-text">বৈবাহিক অবস্থা</span>
                                <span class="en-text">Marital Status</span>
                            </td>
                            <td class="separator-cell">:</td>
                            <td class="value-cell">{{ $biodata->marital_status }}</td>
                        </tr>
                    @endif

                    @if($biodata->physical_status)
                        <tr>
                            <td class="label-cell">
                                <span class="bn-text">শারীরিক অবস্থা</span>
                                <span class="en-text">Physical Status</span>
                            </td>
                            <td class="separator-cell">:</td>
                            <td class="value-cell">{{ $biodata->physical_status }}</td>
                        </tr>
                    @endif
                </table>
            </div>

            <!-- RIGHT COLUMN: Photo -->
            <div class="right-column">
                <div class="photo-container">
                    @if(isset($photoData) && $photoData)
                        <img src="{{ $photoData }}" alt="Photo" />
                    @else
                        <div class="photo-placeholder">
                            <span class="bn-text">📸<br>ছবি নেই</span>
                            <span class="en-text">📸<br>No Photo</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- ============ ADDITIONAL INFORMATION ============ -->
        @php
            $hasAdditionalInfo = $biodata->hobbies || $biodata->education || $biodata->occupation || 
                                 $biodata->workplace || $biodata->monthly_income || $biodata->institution;
        @endphp

        @if($hasAdditionalInfo)
            <div class="section-title">
                <span class="bn-text">শিক্ষা ও পেশা</span>
                <span class="en-text">Education & Occupation</span>
            </div> 

            <table class="info-table">
               

                @if($biodata->education)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">শিক্ষাগত যোগ্যতা</span>
                            <span class="en-text">Education</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->education }}</td>
                    </tr>
                @endif

                @if($biodata->institution)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">প্রতিষ্ঠান</span>
                            <span class="en-text">Institution</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->institution }}</td>
                    </tr>
                @endif

                @if($biodata->occupation)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">পেশা</span>
                            <span class="en-text">Occupation</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->occupation }}</td>
                    </tr>
                @endif

                @if($biodata->workplace)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">কর্মস্থল</span>
                            <span class="en-text">Workplace</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->workplace }}</td>
                    </tr>
                @endif

                @if($biodata->monthly_income)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">মাসিক আয়</span>
                            <span class="en-text">Monthly Income</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell gold">BDT {{ number_format($biodata->monthly_income) }}</td>
                    </tr>
                @endif
                 @if($biodata->hobbies)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">শখ/আগ্রহ</span>
                            <span class="en-text">Hobbies</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->hobbies }}</td>
                    </tr>
                @endif
            </table>
        @endif

        <!-- ============ FAMILY INFORMATION ============ -->
        @php
            $hasFamilyInfo = $biodata->father_name || $biodata->father_occupation || $biodata->mother_name || 
                             $biodata->mother_occupation || $biodata->brothers || $biodata->sisters;
        @endphp

        @if($hasFamilyInfo)
            <div class="section-title">
                <span class="bn-text">পারিবারিক তথ্য</span>
                <span class="en-text">Family Information</span>
            </div>

            <table class="info-table">
                @if($biodata->father_name)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">পিতার নাম</span>
                            <span class="en-text">Father's Name</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->father_name }}</td>
                    </tr>
                @endif

                @if($biodata->father_occupation)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">পিতার পেশা</span>
                            <span class="en-text">Father's Occupation</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->father_occupation }}</td>
                    </tr>
                @endif

                @if($biodata->mother_name)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">মাতার নাম</span>
                            <span class="en-text">Mother's Name</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->mother_name }}</td>
                    </tr>
                @endif

                @if($biodata->mother_occupation)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">মাতার পেশা</span>
                            <span class="en-text">Mother's Occupation</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->mother_occupation }}</td>
                    </tr>
                @endif

                @if($biodata->brothers !== null)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">ভাই</span>
                            <span class="en-text">Brothers</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">
                            {{ $biodata->brothers }} 
                            @if($biodata->married_brothers)
                                <span class="gold-text">
                                    <span class="bn-text">({{ $biodata->married_brothers }} জন বিবাহিত)</span>
                                    <span class="en-text">({{ $biodata->married_brothers }} Married)</span>
                                </span>
                            @endif
                        </td>
                    </tr>
                @endif

                @if($biodata->sisters !== null)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">বোন</span>
                            <span class="en-text">Sisters</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">
                            {{ $biodata->sisters }}
                            @if($biodata->married_sisters)
                                <span class="gold-text">
                                    <span class="bn-text">({{ $biodata->married_sisters }} জন বিবাহিত)</span>
                                    <span class="en-text">({{ $biodata->married_sisters }} Married)</span>
                                </span>
                            @endif
                        </td>
                    </tr>
                @endif
            </table>
        @endif

        <!-- ============ CONTACT INFORMATION ============ -->
        @if($biodata->phone || $biodata->email || $biodata->present_address || $biodata->permanent_address)
            <div class="section-title">
                <span class="bn-text">যোগাযোগের তথ্য</span>
                <span class="en-text">Contact Information</span>
            </div>

            <table class="info-table">
                @if($biodata->phone)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">মোবাইল নম্বর</span>
                            <span class="en-text">Mobile Number</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell gold">{{ $biodata->phone }}</td>
                    </tr>
                @endif

                @if($biodata->email)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">ইমেইল</span>
                            <span class="en-text">Email</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->email }}</td>
                    </tr>
                @endif

                @if($biodata->present_address)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">বর্তমান ঠিকানা</span>
                            <span class="en-text">Present Address</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->present_address }}</td>
                    </tr>
                @endif

                @if($biodata->permanent_address)
                    <tr>
                        <td class="label-cell">
                            <span class="bn-text">স্থায়ী ঠিকানা</span>
                            <span class="en-text">Permanent Address</span>
                        </td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $biodata->permanent_address }}</td>
                    </tr>
                @endif
            </table>
        @endif

        <!-- ============ PARTNER EXPECTATION ============ -->
        @if($biodata->partner_expectation)
            <div class="section-title">
                <span class="bn-text">জীবনসঙ্গী সম্পর্কে প্রত্যাশা</span>
                <span class="en-text">Partner Expectation</span>
            </div>

            <table class="info-table">
                <tr>
                    <td class="label-cell">
                        <span class="bn-text">প্রত্যাশা</span>
                        <span class="en-text">Expectation</span>
                    </td>
                    <td class="separator-cell">:</td>
                    <td class="value-cell" style="color: #d0cfc8; font-style: italic;">{{ $biodata->partner_expectation }}</td>
                </tr>
            </table>
        @endif

        <!-- ============ CUSTOM FIELDS (Extra Information) ============ -->
        @php
            // Decode and normalize custom fields
            $customFields = null;
            if (!empty($biodata->custom_fields)) {
                if (is_string($biodata->custom_fields)) {
                    $customFields = json_decode($biodata->custom_fields, true);
                } elseif (is_array($biodata->custom_fields)) {
                    $customFields = $biodata->custom_fields;
                }
            }

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
            <div class="section-title">
                <span class="bn-text">অতিরিক্ত তথ্য</span>
                <span class="en-text">Extra Information</span>
            </div>

            <table class="info-table">
                @foreach($normalizedFields as $field)
                    <tr>
                        <td class="label-cell">{{ $field['label'] }}</td>
                        <td class="separator-cell">:</td>
                        <td class="value-cell">{{ $field['value'] }}</td>
                    </tr>
                @endforeach
            </table>
        @endif

       

    </div>

</body>
</html>