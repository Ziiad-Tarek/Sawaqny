<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مراكز الصيانة | سَوَّقْنِي</title>
    <link rel="icon" type="image/jpeg" href="logo.jpeg">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- ملف الـ CSS الموحد المباشر -->
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>

<body>

    <!-- ================= Header ================= -->
    <header>
        <nav class="navbar">
            <div class="logo">
            <a href="HomePageCase1.html">
        <img src="{{ asset('images/logo.jpeg') }}" class="logo-img" alt="سوقني">
            </a>
        </div>

            <ul class="nav-links">
               <li><a href="HomePageCase1.html">الرئيسية</a></li>
               <li><a href="#about-section">عن المنصة</a></li>
            <li><a href="#schools-section">تصفح المدارس</a></li>
            <li><a href="#packages-section">الباقات</a></li>
            <li><a href="carShowRooms.html">معارض السيارات</a></li>
            <li><a href="maintenance.html">خدمة الصيانة</a></li>
                <!-- تسجيل الدخول (عنصر واحد فقط صحيح) -->
            <li><a href="Home_page_login.html" id="loginBtn" class="login-link">تسجيل الدخول</a></li>

            <!-- إنشاء حساب المنسدلة -->
            <li class="dropdown-container">
                <a href="#" class="signup" id="signupToggle">إنشاء حساب <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu" id="signupDropdown">
                    <li><a href="register_student.html"><i class="fa-solid fa-user-graduate"></i> متدرب</a></li>
                    <li><a href="captain_profile_setup.html"><i class="fa-solid fa-id-card"></i> كابتن</a></li>
                    <li><a href="register_school.html"><i class="fa-solid fa-school"></i> مدرسة</a></li>
                    <!-- <li><a href="register_admin.html"><i class="fa-solid fa-user-shield"></i> مسؤول (أدمن)</a></li> -->
                </ul>
            </li>
            </ul>
        </nav>
    </header>

    <!-- ================= Hero ================= -->
  <section class="hero maintenance-hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>مراكز صيانات ومعاينات السيارات</h1>
        <p>اختر من قائمة الورش ومراكز الصيانة المعتمدة</p>
    </div>
</section>

   <!-- ================= Maintenance Main Content ================= -->
    <main class="maintenance-container">

        <!-- 👈 قسم عروض الصيانة الحصرية (جديد) -->
        <section class="offers-section">
            <h2 class="offers-title">خصومات وعروض الصيانة الحصرية</h2>
            <div class="offers-grid">

                <!-- عرض المتدربين -->
                <div class="offer-card trainee">
                    <div class="offer-header">
                        <i class="fa-solid fa-user-graduate"></i>
                        <h3>عروض المتدربين</h3>
                    </div>
                    <span class="offer-tag">خصم 15%</span>
                    <p>فحص مجاني شامل للسيارة قبل أول تجربة قيادة + خصم على الفحوصات الدورية.</p>
                </div>

                <!-- عرض الكباتن -->
                <div class="offer-card captain">
                    <div class="offer-header">
                        <i class="fa-solid fa-id-card"></i>
                        <h3>عروض الكباتن</h3>
                    </div>
                    <span class="offer-tag">خصم 25%</span>
                    <p>عروض خاصة على تغيير الزيوت والفرامل مع خدمة الصيانة السريعة والأولوية في الحجز.</p>
                </div>

                <!-- عرض المدارس -->
                <div class="offer-card school">
                    <div class="offer-header">
                        <i class="fa-solid fa-school"></i>
                        <h3>عروض أسطول المدارس</h3>
                    </div>
                    <span class="offer-tag">خصم يصل لـ 35%</span>
                    <p>عقود صيانة دورية شاملة لجميع سيارات أسطول المدرسة وبأسعار خاصة جداً.</p>
                </div>

            </div>
        </section>

        <!-- فلتر البحث -->
        <form id="filterForm" class="filter-card">
            <div class="filter-group">
                <label><i class="fa-solid fa-location-dot"></i> المنطقة</label>
                <input type="text" id="searchInput" placeholder="مثلاً: المعادي، مدينة نصر...">
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-wrench"></i> نوع الخدمة</label>
                <select id="serviceSelect">
                    <option value="">كل أنواع الخدمات</option>
                    <option value="صيانة دورية">صيانة دورية</option>
                    <option value="فحص شامل">فحص شامل</option>
                    <option value="كهرباء">كهرباء سيارات</option>
                    <option value="تغيير زيت وفرامل">تغيير زيت وفرامل</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-car"></i> ماركة السيارة</label>
                <select id="brandSelect">
                    <option value="">كل الماركات</option>
                    <option value="تويوتا">تويوتا</option>
                    <option value="هيونداي">هيونداي</option>
                    <option value="كيا">كيا</option>
                    <option value="نيسان">نيسان</option>
                </select>
            </div>

            <button type="submit" class="btn-search search-btn">
                <i class="fa-solid fa-magnifying-glass"></i> بحث
            </button>
        </form>

        <div id="centersGrid" class="centers-grid">
            <!-- الكروت سيتم عرضها هنا مباشرة عن طريق Script.js -->
        </div>

    </main><a href="chatbot.html" class="ai-chatbot-btn" title="تحدث مع مساعد سوقني الذكي">
    <div class="chatbot-icon">
        <!-- SVG Icon للذكاء الاصطناعي / البوت -->
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 8V4H8"></path>
            <rect width="16" height="12" x="4" y="8" rx="2"></rect>
            <path d="M2 14h2"></path>
            <path d="M20 14h2"></path>
            <path d="M15 13v2"></path>
            <path d="M9 13v2"></path>
        </svg>
    </div>
    <span class="chatbot-text">المساعد الذكي</span>
</a>


    <!-- ================= Footer ================= -->
    <footer>
        <div class="footer-container">
            <div>
                <h3>سَوَّقْنِي</h3>
                <p>منصتك الأولى لتعلم القيادة وشراء أول سيارة وصيانتها بكل سهولة.</p>
            </div>
            <div>
                <h3>روابط سريعة</h3>
                <a href="HomePageCase1.html">الرئيسية</a>
                <a href="ShowRoom/carShowRooms.html">معارض السيارات</a>
                <a href="maintenance.html">خدمة الصيانة</a>
                <a href="HomePageCase1.html#packages-section">الباقات</a>
            </div>
            <div>
                <h3>تواصل معنا</h3>
                <p>📞 01012345678</p>
                <p>📧 info@sawaqny.com</p>
            </div>
        </div>
        <hr>
        <p class="copyright" style="margin: 0; color: #ffffff; font-size: 14px;">
            © 2026 سَوَّقْنِي | جميع الحقوق محفوظة
        </p>
    </footer>

    <!-- ملف الـ JS الموحد المباشر -->
    <script src="Script.js"></script>
</body>
</html>
