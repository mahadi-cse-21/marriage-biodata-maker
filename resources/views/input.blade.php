<!DOCTYPE html>
<html lang="bn">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marriage Biodata · ইসলামিক জীবনবৃত্তান্ত</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@400;600;700&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: 'Noto Serif Bengali', 'Segoe UI', serif;
    }

    body {
      background: #0a0a1a;
    }

    input,
    textarea,
    select {
      border: 1px solid rgba(200, 168, 75, 0.3);
      background: #12243d;
      color: #f0f0f0;
    }

    input:focus,
    textarea:focus,
    select:focus {
      outline: 2px solid #c8a84b;
      outline-offset: 0;
      color: #f0f0f0
    }

    input {
      color: #f0f0f0;
    }

    .lang-en * {
      font-family: 'Segoe UI', 'Noto Serif Bengali', sans-serif;
    }

    .toggle-btn,
    .theme-btn {
      background: #1e2f47;
      border: 1px solid #c8a84b66;
      color: #e0d6b0;
      padding: 6px 18px;
      border-radius: 40px;
      font-weight: 600;
      transition: 0.25s;
      cursor: pointer;
    }

    .toggle-btn:hover,
    .theme-btn:hover {
      background: #c8a84b;
      color: #0a0a1a;
    }

    .toggle-btn.active,
    .theme-btn.active {
      background: #c8a84b;
      color: #0a0a1a;
    }

    .bilingual-label {
      display: flex;
      flex-wrap: wrap;
      align-items: baseline;
      gap: 6px;
    }

    .label-bn {
      color: #c8a84b;
      font-weight: 600;
    }

    .label-en {
      color: #9aaec9;
      font-size: 0.8rem;
      font-weight: 400;
      margin-left: 6px;
    }

    .preview-img {
      border: 1px solid #c8a84b66;
      border-radius: 6px;
    }

    .field-hint {
      font-size: 0.75rem;
      color: #7e8ea8;
      margin-top: 2px;
    }

    .error-box {
      background: rgba(220, 38, 38, 0.1);
      border-left: 4px solid #dc2626;
      padding: 10px 15px;
      border-radius: 4px;
      margin-bottom: 10px;
      color: #fca5a5;
    }

    .success-box {
      background: rgba(34, 197, 94, 0.1);
      border-left: 4px solid #22c55e;
      padding: 10px 15px;
      border-radius: 4px;
      margin-bottom: 10px;
      color: #86efac;
    }

    .theme-group {
      display: flex;
      gap: 8px;
      align-items: center;
    }

    .theme-label {
      color: #9aaec9;
      font-size: 0.8rem;
      font-weight: 400;
      margin-right: 4px;
    }
  </style>
</head>

<body class="py-6 md:py-10">

  <div class="max-w-4xl mx-auto px-4">

    {{-- language toggle + theme toggle --}}
    <div class="flex justify-end mb-4 gap-4 flex-wrap">
      <!-- Language Toggle -->
      <button id="langToggle" class="toggle-btn flex items-center gap-2">
        <span id="langLabel">বাংলা</span>
        <span id="langIcon">→ EN</span>
      </button>

      <!-- Theme Toggle -->
      <div class="theme-group">
        <span class="theme-label">
          <span class="bn-text">থিম</span>
          <span class="en-text hidden">Theme</span>
        </span>
        <button type="button" id="themeDarkBlue" class="theme-btn active" data-theme="dark-blue">
          <span class="bn-text">গাঢ় নীল</span>
          <span class="en-text hidden">Dark Blue</span>
        </button>
        <button type="button" id="themeGoldenWhite" class="theme-btn" data-theme="golden-white">
          <span class="bn-text">সোনালি সাদা</span>
          <span class="en-text hidden">Golden White</span>
        </button>
      </div>
    </div>

    @if(session('error'))
      <div class="error-box">
        {{ session('error') }}
      </div>
    @endif

    @if($errors->any())
      <div class="error-box">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if(session('success'))
      <div class="success-box">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('biodata.store') }}" method="POST" enctype="multipart/form-data"
      class="bg-gradient-to-br from-[#0d1b2a] via-[#0a1628] to-[#0d1b2a] border border-[#c8a84b] p-6 md:p-8 rounded-xl shadow-2xl">

      @csrf

      {{-- header --}}
      <div class="text-center mb-8">
        <h1 class="text-3xl text-[#c8a84b] font-bold">
          <span class="bn-text">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</span>
          <span class="en-text hidden">In the name of Allah</span>
        </h1>
        <p class="text-gray-300 mt-2">
          <span class="bn-text">ইসলামিক বিবাহ জীবনবৃত্তান্ত</span>
          <span class="en-text hidden">Islamic Marriage Biodata</span>
        </p>
        <p class="text-gray-500 text-sm mt-1">
          <span class="bn-text">* ডুপ্লিকেট এন্ট্রি এড়াতে পিতা ও মাতার নাম সহ সম্পূর্ণ নাম ব্যবহার করুন</span>
          <span class="en-text hidden">* Use full name with father & mother name to avoid duplicate entries</span>
        </p>
      </div>

      {{-- PHOTO --}}
      <div class="mb-6">
        <div class="bilingual-label">
          <span class="label-bn bn-text">ছবি</span>
          <span class="label-en en-text hidden">Photo</span>
        </div>
        <input type="file" name="photo" id="photo" accept="image/*" class="block w-full text-white mt-1" required>
        <img id="preview" class="mt-3 w-32 h-40 object-cover border border-[#c8a84b] rounded hidden preview-img">
      </div>

      {{-- PERSONAL --}}
      <h2 class="text-[#c8a84b] text-xl border-b border-[#c8a84b44] pb-2 mb-4">
        <span class="bn-text">ব্যক্তিগত তথ্য</span>
        <span class="en-text hidden">Personal Information</span>
      </h2>
      <div class="grid md:grid-cols-2 gap-4">
        <!-- Full Name -->
        <div>
          <input type="text" name="full_name" placeholder="পূর্ণ নাম *" data-placeholder-bn="পূর্ণ নাম *"
            data-placeholder-en="Full Name *" value="{{ old('full_name') }}" class="p-3 rounded w-full text-[#f0f0f0]"
            required>

          <div class="field-hint">
            <span class="bn-text">* ডুপ্লিকেট চেকের জন্য প্রয়োজন</span>
            <span class="en-text hidden">* Required for duplicate check</span>
          </div>
        </div>

        <div>
          <!-- Date of Birth -->
          <input type="date" name="date_of_birth" placeholder="জন্ম তারিখ" data-placeholder-bn="জন্ম তারিখ"
            data-placeholder-en="Date of Birth" value="{{ old('date_of_birth') }}" class="p-3 rounded text-[#f0f0f0] w-full"
            required>

        </div>

        <!-- Birth Place -->
        <input type="text" name="birth_place" placeholder="জন্মস্থান" data-placeholder-bn="জন্মস্থান"
          data-placeholder-en="Birth Place" value="{{ old('birth_place') }}" class="p-3 rounded  text-[#f0f0f0]"
          required>

        <!-- Height -->
        <input type="text" name="height" placeholder="উচ্চতা" data-placeholder-bn="উচ্চতা" data-placeholder-en="Height"
          value="{{ old('height') }}" class="p-3 rounded text-[#f0f0f0]" required>

        <!-- Religion -->
        <input type="text" name="religion" placeholder="ইসলাম" data-placeholder-bn="ইসলাম" data-placeholder-en="Islam"
          class="p-3 rounded text-[#f0f0f0]" required>

        <!-- Blood Group -->
        <input type="text" name="blood_group" placeholder="রক্তের গ্রুপ" data-placeholder-bn="রক্তের গ্রুপ"
          data-placeholder-en="Blood Group" value="{{ old('blood_group') }}" class="p-3 rounded text-[#f0f0f0]"
          required>

        <!-- Physical Status -->
        <input type="text" name="physical_status" placeholder="শারীরিক অবস্থা" data-placeholder-bn="শারীরিক অবস্থা"
          data-placeholder-en="Physical Status" value="{{ old('physical_status') }}" class="p-3 rounded text-[#f0f0f0]"
          required>

        <!-- Marital Status -->
        <input type="text" name="marital_status" placeholder="বৈবাহিক অবস্থা" data-placeholder-bn="বৈবাহিক অবস্থা"
          data-placeholder-en="Marital Status" value="{{ old('marital_status') }}" class="p-3 rounded text-[#f0f0f0]"
          required>
      </div>

      {{-- FAMILY INFORMATION --}}
      <h2 class="text-[#c8a84b] text-xl mt-8 border-b border-[#c8a84b44] pb-2 mb-4">
        <span class="bn-text">পারিবারিক তথ্য</span>
        <span class="en-text hidden">Family Information</span>
      </h2>
      <div class="grid md:grid-cols-2 gap-4">
        <!-- Father's Name -->
        <div>
          <input type="text" name="father_name" placeholder="পিতার নাম *" data-placeholder-bn="পিতার নাম *"
            data-placeholder-en="Father's Name *" value="{{ old('father_name') }}"
            class="p-3 rounded w-full text-[#f0f0f0]" required>
          <div class="field-hint">
            <span class="bn-text">* ডুপ্লিকেট চেকের জন্য প্রয়োজন</span>
            <span class="en-text hidden">* Required for duplicate check</span>
          </div>
        </div>

        <!-- Father's Occupation -->

        <div class="w-full">
          <input type="text" name="father_occupation" placeholder="পিতার পেশা" data-placeholder-bn="পিতার পেশা"
            data-placeholder-en="Father's Occupation" value="{{ old('father_occupation') }}"
            class="p-3 rounded text-[#f0f0f0] w-full" required>
        </div>

        <!-- Mother's Name -->
        <div>
          <input type="text" name="mother_name" placeholder="মাতার নাম *" data-placeholder-bn="মাতার নাম *"
            data-placeholder-en="Mother's Name *" value="{{ old('mother_name') }}"
            class="p-3 rounded w-full text-[#f0f0f0]" required>
          <div class="field-hint">
            <span class="bn-text">* ডুপ্লিকেট চেকের জন্য প্রয়োজন</span>
            <span class="en-text hidden">* Required for duplicate check</span>
          </div>
        </div>

        <div>
          <!-- Mother's Occupation -->
          <input type="text" name="mother_occupation" placeholder="মাতার পেশা" data-placeholder-bn="মাতার পেশা"
            data-placeholder-en="Mother's Occupation" value="{{ old('mother_occupation') }}"
            class="p-3 rounded text-[#f0f0f0] w-full" required>
        </div>


        <!-- Brothers -->
        <input type="number" name="brothers" placeholder="ভাই" data-placeholder-bn="ভাই" data-placeholder-en="Brothers"
          value="{{ old('brothers') }}" class="p-3 rounded text-[#f0f0f0]" required>

        <!-- Married Brothers -->
        <input type="number" name="married_brothers" placeholder="বিবাহিত ভাই" data-placeholder-bn="বিবাহিত ভাই"
          data-placeholder-en="Married Brothers" value="{{ old('married_brothers') }}"
          class="p-3 rounded text-[#f0f0f0]" required>

        <!-- Sisters -->
        <input type="number" name="sisters" placeholder="বোন" data-placeholder-bn="বোন" data-placeholder-en="Sisters"
          value="{{ old('sisters') }}" class="p-3 rounded text-[#f0f0f0]" required>

        <!-- Married Sisters -->
        <input type="number" name="married_sisters" placeholder="বিবাহিত বোন" data-placeholder-bn="বিবাহিত বোন"
          data-placeholder-en="Married Sisters" value="{{ old('married_sisters') }}" class="p-3 rounded text-[#f0f0f0]"
          required>
      </div>

      {{-- EDUCATION --}}
      <h2 class="text-[#c8a84b] text-xl mt-8 border-b border-[#c8a84b44] pb-2 mb-4">
        <span class="bn-text">শিক্ষাগত তথ্য</span>
        <span class="en-text hidden">Education</span>
      </h2>
      <div class="grid md:grid-cols-2 gap-4">
        <input type="text" name="education" placeholder="সর্বোচ্চ শিক্ষাগত যোগ্যতা"
          data-placeholder-bn="সর্বোচ্চ শিক্ষাগত যোগ্যতা" data-placeholder-en="Highest Education"
          value="{{ old('education') }}" class="p-3 rounded text-[#f0f0f0]" required>
        <input type="text" name="institution" placeholder="প্রতিষ্ঠান" data-placeholder-bn="প্রতিষ্ঠান"
          data-placeholder-en="Institution" value="{{ old('institution') }}" class="p-3 rounded text-[#f0f0f0]"
          required>
      </div>

      {{-- PROFESSION --}}
      <h2 class="text-[#c8a84b] text-xl mt-8 border-b border-[#c8a84b44] pb-2 mb-4">
        <span class="bn-text">পেশাগত তথ্য</span>
        <span class="en-text hidden">Professional Information</span>
      </h2>
      <div class="grid md:grid-cols-2 gap-4">
        <input type="text" name="occupation" placeholder="পেশা" data-placeholder-bn="পেশা"
          data-placeholder-en="Occupation" value="{{ old('occupation') }}" class="p-3 rounded text-[#f0f0f0]" required>
        <input type="text" name="workplace" placeholder="কর্মস্থল" data-placeholder-bn="কর্মস্থল"
          data-placeholder-en="Workplace" value="{{ old('workplace') }}" class="p-3 rounded text-[#f0f0f0]" required>
        <input type="number" name="monthly_income" placeholder="মাসিক আয়" data-placeholder-bn="মাসিক আয়"
          data-placeholder-en="Monthly Income" value="{{ old('monthly_income') }}" class="p-3 rounded text-[#f0f0f0]">
      </div>

      {{-- CONTACT --}}
      <h2 class="text-[#c8a84b] text-xl mt-8 border-b border-[#c8a84b44] pb-2 mb-4" required>
        <span class="bn-text">যোগাযোগ</span>
        <span class="en-text hidden">Contact</span>
      </h2>
      <div class="grid md:grid-cols-2 gap-4">
        <input type="text" name="phone" placeholder="মোবাইল নম্বর" data-placeholder-bn="মোবাইল নম্বর"
          data-placeholder-en="Phone Number" value="{{ old('phone') }}" class="p-3 rounded text-[#f0f0f0]" required>
        <input type="email" name="email" placeholder="ইমেইল" data-placeholder-bn="ইমেইল" data-placeholder-en="Email"
          value="{{ old('email') }}" class="p-3 rounded text-[#f0f0f0]" required>
      </div>
      <div class="mt-4">
        <textarea name="present_address" rows="3" placeholder="বর্তমান ঠিকানা" data-placeholder-bn="বর্তমান ঠিকানা"
          data-placeholder-en="Present Address" class="w-full p-3 rounded text-[#f0f0f0]"
          required>{{ old('present_address') }}</textarea>
        <textarea name="permanent_address" rows="3" placeholder="স্থায়ী ঠিকানা" data-placeholder-bn="স্থায়ী ঠিকানা"
          data-placeholder-en="Permanent Address" class="w-full p-3 rounded mt-3 text-[#f0f0f0]"
          required>{{ old('permanent_address') }}</textarea>
      </div>

      {{-- HOBBIES --}}
      <h2 class="text-[#c8a84b] text-xl mt-8 border-b border-[#c8a84b44] pb-2 mb-4">
        <span class="bn-text">অন্যান্য তথ্য</span>
        <span class="en-text hidden">Other Information</span>
      </h2>
      <input type="text" name="hobbies" placeholder="শখ / আগ্রহ" data-placeholder-bn="শখ / আগ্রহ"
        data-placeholder-en="Hobbies / Interests" value="{{ old('hobbies') }}"
        class="w-full p-3 rounded text-[#f0f0f0]">

      {{-- PARTNER EXPECTATION --}}
      <h2 class="text-[#c8a84b] text-xl mt-8 border-b border-[#c8a84b44] pb-2 mb-4">
        <span class="bn-text">জীবনসঙ্গী সম্পর্কে প্রত্যাশা</span>
        <span class="en-text hidden">Partner Expectation</span>
      </h2>
      <textarea name="partner_expectation" rows="5" placeholder="জীবনসঙ্গীর গুণাবলী, বয়স, শিক্ষা ইত্যাদি"
        data-placeholder-bn="জীবনসঙ্গীর গুণাবলী, বয়স, শিক্ষা ইত্যাদি"
        data-placeholder-en="Partner qualities, age, education, etc."
        class="w-full p-3 rounded text-[#f0f0f0]">{{ old('partner_expectation') }}</textarea>

      {{-- DYNAMIC FIELDS --}}
      <h2 class="text-[#c8a84b] text-xl mt-8 border-b border-[#c8a84b44] pb-2 mb-4">
        <span class="bn-text">অতিরিক্ত তথ্য</span>
        <span class="en-text hidden">Extra Fields</span>
      </h2>
      <div id="extra-fields"></div>
      <button type="button" onclick="addField()"
        class="bg-yellow-600 hover:bg-yellow-700 px-5 py-2 rounded text-white transition">
        <span class="bn-text">+ নতুন ফিল্ড</span>
        <span class="en-text hidden">+ Add Field</span>
      </button>

      {{-- Hidden fields for language and theme --}}
      <input type="hidden" name="language_preference" id="language_preference" value="bn">
      <input type="hidden" name="theme" id="theme" value="dark-blue">

      {{-- SUBMIT --}}
      <div class="mt-10 text-center">
        <button type="submit"
          class="bg-green-600 hover:bg-green-700 px-10 py-3 rounded text-white font-semibold transition">
          <span class="bn-text">Biodata সংরক্ষণ</span>
          <span class="en-text hidden">Save Biodata</span>
        </button>
      </div>
    </form>
  </div>

  <script>
    // ===== PHOTO PREVIEW =====
    document.getElementById('photo').addEventListener('change', function (e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (ev) {
          const preview = document.getElementById('preview');
          preview.src = ev.target.result;
          preview.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
      }
    });

    // ===== DYNAMIC FIELDS =====
    function addField() {
      const container = document.getElementById('extra-fields');
      const row = document.createElement('div');
      row.className = 'grid grid-cols-2 gap-3 mb-3';
      row.innerHTML = `
      <input type="text" name="custom_fields[][label]" placeholder="ফিল্ডের নাম" data-placeholder-bn="ফিল্ডের নাম" data-placeholder-en="Field Name" class="p-3 rounded text-[#f0f0f0]">
      <input type="text" name="custom_fields[][value]" placeholder="ফিল্ডের মান" data-placeholder-bn="ফিল্ডের মান" data-placeholder-en="Field Value" class="p-3 rounded text-[#f0f0f0]">
    `;
      container.appendChild(row);

      // If currently in English mode, set English placeholders
      if (document.body.classList.contains('lang-en')) {
        const inputs = row.querySelectorAll('input');
        inputs.forEach(inp => {
          const enPlaceholder = inp.getAttribute('data-placeholder-en');
          if (enPlaceholder) inp.placeholder = enPlaceholder;
        });
      }
    }

    // ===== LANGUAGE TOGGLE =====
    (function () {
      const toggle = document.getElementById('langToggle');
      const icon = document.getElementById('langIcon');
      const label = document.getElementById('langLabel');

      const bnElements = document.querySelectorAll('.bn-text');
      const enElements = document.querySelectorAll('.en-text');

      // Get all elements that have placeholders
      const allPlaceholderElements = document.querySelectorAll('input, textarea');

      let lang = 'bn';

      function setPlaceholders(langCode) {
        allPlaceholderElements.forEach(el => {
          if (langCode === 'en') {
            const enPlaceholder = el.getAttribute('data-placeholder-en');
            if (enPlaceholder) {
              el.placeholder = enPlaceholder;
            }
          } else {
            const bnPlaceholder = el.getAttribute('data-placeholder-bn');
            if (bnPlaceholder) {
              el.placeholder = bnPlaceholder;
            }
          }
        });
      }

      function setLanguage(langCode) {
        if (langCode === 'en') {
          // Show English text, hide Bengali
          bnElements.forEach(el => el.classList.add('hidden'));
          enElements.forEach(el => el.classList.remove('hidden'));

          // Update toggle button
          icon.textContent = '→ BN';
          label.textContent = 'English';
          toggle.classList.add('active');

          // Update HTML lang and body class
          document.querySelector('html').lang = 'en';
          document.body.classList.add('lang-en');

          // Set English placeholders
          setPlaceholders('en');

          // Update hidden field
          document.getElementById('language_preference').value = 'en';

        } else {
          // Show Bengali text, hide English
          bnElements.forEach(el => el.classList.remove('hidden'));
          enElements.forEach(el => el.classList.add('hidden'));

          // Update toggle button
          icon.textContent = '→ EN';
          label.textContent = 'বাংলা';
          toggle.classList.remove('active');

          // Update HTML lang and body class
          document.querySelector('html').lang = 'bn';
          document.body.classList.remove('lang-en');

          // Set Bengali placeholders
          setPlaceholders('bn');

          // Update hidden field
          document.getElementById('language_preference').value = 'bn';
        }
        lang = langCode;
      }

      // Click handler
      toggle.addEventListener('click', function () {
        setLanguage(lang === 'bn' ? 'en' : 'bn');
      });

      // Initialize with Bengali
      setLanguage('bn');
    })();

    // ===== THEME TOGGLE =====
    (function () {
      const darkBlueBtn = document.getElementById('themeDarkBlue');
      const goldenWhiteBtn = document.getElementById('themeGoldenWhite');
      const themeInput = document.getElementById('theme');

      // Set initial active based on old input or default
      const oldTheme = '{{ old('theme') }}';
      if (oldTheme === 'golden-white') {
        darkBlueBtn.classList.remove('active');
        goldenWhiteBtn.classList.add('active');
        themeInput.value = 'golden-white';
      } else {
        darkBlueBtn.classList.add('active');
        goldenWhiteBtn.classList.remove('active');
        themeInput.value = 'dark-blue';
      }

      function setTheme(theme) {
        if (theme === 'golden-white') {
          darkBlueBtn.classList.remove('active');
          goldenWhiteBtn.classList.add('active');
          themeInput.value = 'golden-white';
        } else {
          darkBlueBtn.classList.add('active');
          goldenWhiteBtn.classList.remove('active');
          themeInput.value = 'dark-blue';
        }
      }

      darkBlueBtn.addEventListener('click', function () {
        setTheme('dark-blue');
      });

      goldenWhiteBtn.addEventListener('click', function () {
        setTheme('golden-white');
      });
    })();
  </script>

  <style>
    ::placeholder {
      color: #7e8ea8;
      opacity: 0.7;
    }

    .lang-en ::placeholder {
      color: #a0b3cc;
    }
  </style>
</body>

</html>