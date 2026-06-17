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
      font-family: 'Kalpurush','Times New Roman', 'Noto Serif Bengali', serif;
      background: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .biodata-container {
      width: 800px;
      min-height: auto;
      background: #ffffff;
      padding: 40px 45px;
      border: 2px solid #1a1a2e;
      position: relative;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
    }

    /* Decorative border lines */
    .biodata-container::before {
      content: '';
      position: absolute;
      top: 8px;
      left: 8px;
      right: 8px;
      bottom: 8px;
      border: 1px solid #d4af37;
      pointer-events: none;
    }

    .gold-text {
      color: #d4af37;
    }

    .gold-divider {
      background: linear-gradient(to right, transparent, #d4af37, transparent);
      height: 2px;
      margin: 8px 0;
    }

    /* Header */
    .header-arabic {
      font-size: 28px;
      color: #1a1a2e;
      text-align: center;
      font-weight: bold;
      letter-spacing: 2px;
      margin-bottom: 2px;
    }

    .header-translation {
      text-align: center;
      font-size: 11px;
      color: #666;
      letter-spacing: 1px;
      margin-bottom: 4px;
    }

    /* Main content layout */
    .main-row {
      display: flex;
      gap: 30px;
      margin: 10px 0 15px 0;
    }

    .left-column {
      flex: 1;
    }

    .right-column {
      flex-shrink: 0;
      width: 180px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* Section title */
    .section-title {
      font-size: 13px;
      font-weight: bold;
      color: #1a1a2e;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      border-bottom: 2px solid #d4af37;
      padding-bottom: 4px;
      margin-top: 14px;
      margin-bottom: 8px;
    }

    .section-title:first-of-type {
      margin-top: 0;
    }

    /* Info table */
    .info-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13px;
    }

    .info-table tr {
      border-bottom: 1px solid #f0f0f0;
    }

    .info-table tr:last-child {
      border-bottom: none;
    }

    .info-table td {
      padding: 5px 3px;
      vertical-align: top;
      line-height: 1.5;
    }

    .label-cell {
      color: #555;
      width: 140px;
      font-weight: 600;
      letter-spacing: 0.3px;
    }

    .separator-cell {
      color: #d4af37;
      font-weight: bold;
      text-align: center;
      width: 20px;
    }

    .value-cell {
      color: #1a1a2e;
      font-weight: 500;
    }

    .value-cell.gold {
      color: #d4af37;
      font-weight: 600;
    }

    /* Photo container */
    .photo-container {
      width: 200px;
      height: 250px;
      background: #f5f0eb;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 30px;
      border-radius: 10px;
      border: 2px solid #d4af37;
      overflow: hidden;
    }

    .photo-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .photo-placeholder {
      color: #999;
      font-size: 12px;
      text-align: center;
      padding: 10px;
    }

    /* Footer */
    .footer {
      text-align: center;
      margin-top: 25px;
      padding-top: 15px;
      border-top: 2px solid #d4af37;
    }

    .footer .arabic {
      font-size: 16px;
      color: #1a1a2e;
      margin-bottom: 4px;
    }

    .footer .translation {
      font-size: 10px;
      color: #777;
      font-style: italic;
    }

    /* ========== BILINGUAL TEXT HANDLING ========== */
    .bn-text {
      display: inline;
    }

    .en-text {
      display: none;
    }

    body.lang-en .bn-text {
      display: none !important;
    }

    body.lang-en .en-text {
      display: inline !important;
    }

    @media print {
      body {
        background: white;
        padding: 0;
      }

      .biodata-container {
        box-shadow: none;
        border: 2px solid #1a1a2e;
      }
    }
  </style>
</head>

<body class="{{ isset($lang) && $lang == 'en' ? 'lang-en' : '' }}">

  <div class="biodata-container">

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
    @if($biodata->phone || $biodata->email || $biodata->present_address || $biodata->permanent_address || $biodata->contact_person)
      <div class="section-title">
        <span class="bn-text">যোগাযোগের তথ্য</span>
        <span class="en-text">Contact Information</span>
      </div>

      <table class="info-table">
        @if($biodata->contact_person)
          <tr>
            <td class="label-cell">
              <span class="bn-text">যোগাযোগের ব্যক্তি</span>
              <span class="en-text">Contact Person</span>
            </td>
            <td class="separator-cell">:</td>
            <td class="value-cell">{{ $biodata->contact_person }}</td>
          </tr>
        @endif

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
          <td class="value-cell" style="color: #555; font-style: italic;">{{ $biodata->partner_expectation }}</td>
        </tr>
      </table>
    @endif

    <!-- ============ CUSTOM FIELDS (Extra Information) ============ -->
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
        // If there's a leftover label without a value, ignore it (or show empty)
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