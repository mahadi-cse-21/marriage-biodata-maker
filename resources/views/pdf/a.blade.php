<!DOCTYPE html>
<html lang="bn">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ইসলামিক বিবাহ জীবনবৃত্তান্ত - ডার্ক</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@400;600;700&display=swap"
    rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Noto Serif Bengali', serif;
      background: #0a0a1a;
      display: flex;
      justify-content: center;
      padding: 20px;
    }

    .page {
      width: 900px;
      min-height: 900px;
      background: linear-gradient(160deg, #0d1b2a 0%, #0a1628 40%, #0d1b2a 100%);
      position: relative;
      overflow: hidden;
      padding: 40px 44px 50px;
      border: 1px solid #c8a84b;
    }

    /* Gold corner decorations */
    .corner {
      position: absolute;
      width: 120px;
      height: 120px;
      opacity: 0.85;
    }

    .c-tl {
      top: 0;
      left: 0;
    }

    .c-tr {
      top: 0;
      right: 0;
      transform: scaleX(-1);
    }

    .c-bl {
      bottom: 0;
      left: 0;
      transform: scaleY(-1);
    }

    .c-br {
      bottom: 0;
      right: 0;
      transform: scale(-1);
    }

    /* Mosque watermark */
    .mosque-wm {
      position: absolute;
      bottom: 0;
      right: 0;
      width: 55%;
      opacity: 0.06;
    }

    .header {
      text-align: center;
      margin-bottom: 18px;
      position: relative;
      z-index: 1;
    }

    .bismillah-ar {
      font-size: 26px;
      color: #c8a84b;
      font-family: 'Georgia', serif;
      margin-bottom: 6px;
    }

    .assalamu {
      font-size: 10px;
      color: #a89060;
      letter-spacing: 1px;
      font-family: Arial, sans-serif;
    }

    .gold-line {
      width: 100%;
      height: 1px;
      background: linear-gradient(to right, transparent, #c8a84b, transparent);
      margin: 10px 0;
    }

    .section-heading {
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

    .info-table {
      width: 100%;
      border-collapse: collapse;
      position: relative;
      z-index: 1;
      font-size: 14px;
    }

    .info-table tr td {
      padding: 4px 2px;
      vertical-align: top;
      line-height: 1.55;
      color: #d0cfc8;
    }

    .info-table tr td:first-child {
      width: 160px;
      color: #b0af9a;
    }

    .info-table tr td:nth-child(2) {
      width: 18px;
      color: #c8a84b;
      font-weight: bold;
      text-align: center;
    }

    .info-table tr td:last-child {
      color: #e8e6de;
    }

    .photo-box {
      position: absolute;
      top: 170px;
      right: 80px;
      width: 100px;
      height: 120px;
      border: 1.5px solid #c8a84b;
      background: #0d2040;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #c8a84b;
      font-size: 10px;
      text-align: center;
      z-index: 2;
    }

    .footer {
      text-align: center;
      margin-top: 22px;
      padding-top: 12px;
      border-top: 1px solid #c8a84b44;
      position: relative;
      z-index: 1;
    }

    .footer .ar {
      font-size: 14px;
      color: #c8a84b;
      font-family: 'Georgia', serif;
      margin-bottom: 4px;
    }

    .footer .bn {
      font-size: 10px;
      color: #888;
      font-style: italic;
    }
  </style>
</head>

<body>
  <div class="page">

    <!-- Gold corner SVG ornaments -->
    {{-- <svg class="corner c-tl" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
      <g stroke="#c8a84b" stroke-width="1" fill="none" opacity="0.9">
        <path d="M0,0 L120,0 L120,6 L6,6 L6,120 L0,120 Z" fill="#c8a84b" opacity="0.7" />
        <path d="M15,0 L0,15 M30,0 L0,30 M50,0 L0,50 M70,0 L0,70 M90,0 L0,90 M110,0 L0,110" stroke-width="0.5" />
        <circle cx="0" cy="0" r="40" stroke-width="0.7" />
        <circle cx="0" cy="0" r="60" stroke-width="0.5" />
        <circle cx="0" cy="0" r="80" stroke-width="0.4" />
        <path d="M0,0 Q30,15 0,30 Q30,45 0,60" stroke-width="0.6" />
        <path d="M0,0 Q15,30 30,0 Q45,30 60,0" stroke-width="0.6" />
        <polygon points="0,0 25,0 0,25" fill="#c8a84b" opacity="0.5" />
      </g>
    </svg>
    <svg class="corner c-tr" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
      <g stroke="#c8a84b" stroke-width="1" fill="none" opacity="0.9">
        <path d="M0,0 L120,0 L120,6 L6,6 L6,120 L0,120 Z" fill="#c8a84b" opacity="0.7" />
        <path d="M15,0 L0,15 M30,0 L0,30 M50,0 L0,50 M70,0 L0,70 M90,0 L0,90 M110,0 L0,110" stroke-width="0.5" />
        <circle cx="0" cy="0" r="40" stroke-width="0.7" />
        <circle cx="0" cy="0" r="60" stroke-width="0.5" />
        <polygon points="0,0 25,0 0,25" fill="#c8a84b" opacity="0.5" />
      </g>
    </svg>
    <svg class="corner c-bl" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
      <g stroke="#c8a84b" stroke-width="1" fill="none" opacity="0.9">
        <path d="M0,0 L120,0 L120,6 L6,6 L6,120 L0,120 Z" fill="#c8a84b" opacity="0.7" />
        <circle cx="0" cy="0" r="40" stroke-width="0.7" />
        <circle cx="0" cy="0" r="60" stroke-width="0.5" />
        <polygon points="0,0 25,0 0,25" fill="#c8a84b" opacity="0.5" />
      </g>
    </svg>
    <svg class="corner c-br" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
      <g stroke="#c8a84b" stroke-width="1" fill="none" opacity="0.9">
        <path d="M0,0 L120,0 L120,6 L6,6 L6,120 L0,120 Z" fill="#c8a84b" opacity="0.7" />
        <circle cx="0" cy="0" r="40" stroke-width="0.7" />
        <polygon points="0,0 25,0 0,25" fill="#c8a84b" opacity="0.5" />
      </g>
    </svg> --}}

    {{-- <!-- Mosque watermark -->
    <svg class="mosque-wm" viewBox="0 0 400 200" xmlns="http://www.w3.org/2000/svg">
      <g fill="#c8a84b">
        <ellipse cx="200" cy="80" rx="50" ry="48" />
        <rect x="150" y="80" width="100" height="120" />
        <ellipse cx="100" cy="110" rx="32" ry="30" />
        <rect x="68" y="110" width="64" height="90" />
        <ellipse cx="300" cy="110" rx="32" ry="30" />
        <rect x="268" y="110" width="64" height="90" />
        <ellipse cx="30" cy="135" rx="20" ry="18" />
        <rect x="10" y="135" width="40" height="65" />
        <ellipse cx="370" cy="135" rx="20" ry="18" />
        <rect x="350" y="135" width="40" height="65" />
        <rect x="193" y="25" width="5" height="60" />
        <polygon points="195.5,15 192,25 199,25" />
        <rect x="207" y="25" width="5" height="60" />
        <polygon points="209.5,15 206,25 213,25" />
        <rect x="82" y="68" width="4" height="48" />
        <polygon points="84,60 81,68 87,68" />
        <rect x="113" y="68" width="4" height="48" />
        <polygon points="115,60 112,68 118,68" />
        <rect x="0" y="195" width="400" height="5" />
      </g>
    </svg> --}}

    <!-- Header -->
    <div class="header">
      <div class="bismillah-ar">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</div>
      {{-- <div class="assalamu">আস-সালামু আলাইকুম ওয়া রাহমাতুল্লাহি ওয়া বারাকাতুহ</div> --}}
      <div class="gold-line"></div>
    </div>

    <!-- Photo -->
    <div class="photo-box">
      <img width="250px" height="250px" src="{{ asset('image.png') }}" alt="">
    </div>

    <!-- Personal Information -->
    <div class="section-heading">Personal Information</div>
    <table class="info-table" style="width: calc(100% - 115px);">
      <tr>
        <td>Full Name</td>
        <td>:</td>
        <td>Md. Mubarak Hossan Sagor</td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td>:</td>
        <td>7 May 2003</td>
      </tr>
      {{-- <tr>
        <td>Birth Time</td>
        <td>:</td>
        <td>[Morning / Afternoon]</td>
      </tr> --}}
      {{-- <tr>
        <td>Birth Place</td>
        <td>:</td>
        <td>[District, Bangladesh]</td>
      </tr> --}}
      <tr>
        <td>Height</td>
        <td>:</td>
        <td>5 ft 9 inch</td>
      </tr>
      <tr>
        <td>Physical Status</td>
        <td>:</td>
        <td>Fit</td>
      </tr>

      <tr>
        <td>Religion</td>
        <td>:</td>
        <td>Islam</td>
      </tr>
    </table>

    <table class="info-table">
      {{-- <tr>
        <td>Hobbies</td>
        <td>:</td>
        <td>[Cooking, Reading Books, Traveling]</td>
      </tr> --}}
      <tr>
        <td>Education</td>
        <td>:</td>
        <td>B.A ( Honor’s ) in English <br>
          4th year , Kishoreganj University
        </td>
      </tr>
      <tr>
        <td>Occupation</td>
        <td>:</td>
        <td>House Tutor</td>
      </tr>
      <tr>
        <td>Workplace</td>
        <td>:</td>
        <td>Kishoreganj University</td>
      </tr>
      {{-- <tr>
        <td>Monthly Income</td>
        <td>:</td>
        <td>[BDT ___ - ___ Thousand]</td>
      </tr> --}}
    </table>

    <!-- Family Information -->
    <div class="section-heading">Family Information</div>
    <table class="info-table">
      <tr>
        <td>Father's Name</td>
        <td>:</td>
        <td>Md. Ashraf Uddin</td>
      </tr>
      <tr>
        <td>Father's Occupation</td>
        <td>:</td>
        <td>Farmer</td>
      </tr>
      <tr>
        <td>Mother's Name</td>
        <td>:</td>
        <td>Mosammat Rokeya Begum</td>
      </tr>
      <tr>
        <td>Mother's Occupation</td>
        <td>:</td>
        <td>Homemaker</td>
      </tr>
      <tr>
        <td>Brothers</td>
        <td>:</td>
        <td>[2 Total / 0 Married]</td>
      </tr>
      <tr>
        <td>Sisters</td>
        <td>:</td>
        <td>[1 Total / 1 Married]</td>
      </tr>
    </table>

    <!-- Contact Information -->
    <div class="section-heading">Contact Information</div>
    <table class="info-table">
      {{-- <tr>
        <td>Contact </td>
        <td>:</td>
        <td>[Name & Relationship]</td>
      </tr> --}}
      <tr>
        <td>Mobile Number</td>
        <td>:</td>
        <td>01860380386</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td>sagormh871@gmail.com</td>
      </tr>
      <tr>
        <td>Permanent Address</td>
        <td>:</td>
        <td>Kahetertaki, Katiadi, Kishoreganj</td>
      </tr>
      <tr>
        <td>Present Address</td>
        <td>:</td>
        <td> Kishoreganj University Student Hall, Nagua, Kishoreganj Sadar</td>
      </tr>
    </table>

    <!-- Footer -->
    {{-- <div class="footer">
      <div class="ar">رَبَّنَا هَبْ لَنَا مِنْ أَزْوَاجِنَا وَذُرِّيَّاتِنَا قُرَّةَ أَعْيُنٍ</div>
      <div class="bn">"হে আমাদের রব, আমাদের স্ত্রী ও সন্তানদের মধ্য থেকে আমাদের চোখের শীতলতা দান করো।" — সূরা ফুরকান: ৭৪
      </div>
    </div> --}}

  </div>
</body>

</html>