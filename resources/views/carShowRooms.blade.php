<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>معارض السيارات | سَوَقْنِي</title>
    <link rel="icon" type="image/jpeg" href="logo.jpeg">

    <!-- Google Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

</head>

<body>

    <!-- ================= Header ================= -->

    <header>

        <nav class="navbar">

           <!-- قسم اللوجو -->
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

    <section class="hero">

        <div class="overlay"></div>

        <div class="hero-content">

            <h1>

                اعثر على أفضل معارض السيارات بالقرب منك

            </h1>

            <p>

                سيارات جديدة ومستعملة معتمدة، عروض تقسيط، وضمان الجودة في مكان واحد.

            </p>

        </div>

    </section>

    <!-- ================= Search ================= -->

    <section class="search-section">

        <h2>

            ابحث عن المعرض المناسب

        </h2>

        <div class="search-box">

            <!-- المنطقة -->

            <div class="input-box">

                <label>

                    <i class="fa-solid fa-location-dot"></i>

                    المنطقة

                </label>

                <select>

                    <option>اختر المنطقة</option>

                    <option>القاهرة</option>

                    <option>الجيزة</option>

                    <option>الإسكندرية</option>

                    <option>المنصورة</option>

                    <option>طنطا</option>

                </select>

            </div>

            <!-- نوع السيارة -->

            <div class="input-box">

                <label>

                    <i class="fa-solid fa-car"></i>

                    نوع السيارة

                </label>

                <select>

                    <option>جميع السيارات</option>

                    <option>جديدة</option>

                    <option>مستعملة</option>

                </select>

            </div>

            <!-- الميزانية -->

            <div class="input-box">

                <label>

                    <i class="fa-solid fa-money-bill-wave"></i>

                    الميزانية

                </label>

                <select>

                    <option>اختر الميزانية</option>

                    <option>أقل من 250 ألف</option>

                    <option>250 ألف - 500 ألف</option>

                    <option>أكثر من 500 ألف</option>

                </select>

            </div>

            <button class="search-btn">

                <i class="fa-solid fa-magnifying-glass"></i>

                ابحث الآن

            </button>

        </div>

    </section>
    <!-- ================= Showrooms ================= -->

<section class="showrooms">

    <h2>المعارض المتاحة</h2>

    <div class="cards">

        <!-- Card 1 -->

        <div class="card">

            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70" alt="">

            <div class="card-content">

                <h3>معرض النخبة للسيارات</h3>

                <p><i class="fa-solid fa-location-dot"></i> مدينة نصر</p>

                <p> سيارات اقتصادية أوتوماتيك</p>

                <p> عروض تقسيط حتى 7 سنوات</p>

                <button class="details-btn"
                    data-name="معرض النخبة للسيارات"
                    data-address="مدينة نصر - القاهرة"
                    data-time="9 صباحاً - 10 مساءً"
                    data-phone="01012345678">

                    عرض التفاصيل

                </button>

            </div>

        </div>


        <!-- Card 2 -->

        <div class="card">

            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7" alt="">

            <div class="card-content">

                <h3>أوتو كار</h3>

                <p><i class="fa-solid fa-location-dot"></i> المعادي</p>

                <p> سيارات مستعملة معتمدة</p>

                <p> فحص مجاني قبل الشراء</p>

                <button class="details-btn"
                    data-name="أوتو كار"
                    data-address="المعادي - القاهرة"
                    data-time="10 صباحاً - 9 مساءً"
                    data-phone="01198765432">

                    عرض التفاصيل

                </button>

            </div>

        </div>


        <!-- Card 3 -->

        <div class="card">

            <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d" alt="">

            <div class="card-content">

                <h3>Drive Motors</h3>

                <p><i class="fa-solid fa-location-dot"></i> الإسكندرية</p>

                <p> سيارات جديدة</p>

                <p> خصومات على أول عملية شراء</p>

                <button class="details-btn"
                    data-name="Drive Motors"
                    data-address="سموحة - الإسكندرية"
                    data-time="9 صباحاً - 8 مساءً"
                    data-phone="01234567890">

                    عرض التفاصيل

                </button>

            </div>

        </div>

    </div>

</section>

<!-- ================= Features ================= -->


<footer>

    <div class="footer-container">

        <div>
            <h3>سَوَقْنِي</h3>
            <p>منصتك الأولى لتعلم القيادة وشراء أول سيارة بكل سهولة.</p>
        </div>
         <div>
            <h3>روابط سريعة</h3>
            <a href="HomePageCase1.html">الرئيسية</a>
            <a href="#schools-section">تصفح المدارس</a>
            <a href="carShowRooms.html">معارض السيارات</a>
            <a href="#packages-section">الباقات</a>
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

<!-- ================= Popup ================= -->

<!-- ================= Smart Popup ================= -->
<div class="popup" id="popup">
    <div class="popup-content">
        <button class="close-btn" id="close">&times;</button>

        <div class="popup-header">
            <span class="badge-showroom"><i class="fa-solid fa-store"></i> معرض معتمد</span>
            <h2 id="title">اسم المعرض</h2>
        </div>

        <div class="popup-info-grid">
            <div class="info-item">
                <i class="fa-solid fa-location-dot icon-box"></i>
                <div>
                    <small>العنوان</small>
                    <p id="address">القاهرة</p>
                </div>
            </div>

            <div class="info-item">
                <i class="fa-solid fa-clock icon-box"></i>
                <div>
                    <small>مواعيد العمل</small>
                    <p id="time">9 am - 10 pm</p>
                </div>
            </div>

            <div class="info-item">
                <i class="fa-solid fa-phone icon-box"></i>
                <div>
                    <small>رقم التواصل</small>
                    <p id="phone">01000000000</p>
                </div>
            </div>
        </div>

        <!-- Form ذكي للتواصل السريع -->
        <div class="popup-form">
            <h4><i class="fa-solid fa-paper-plane"></i> أرسل استفساراً سريعاً للمعرض</h4>
            <div class="form-group">
                <input type="text" id="visitorName" placeholder="الاسم بالكامل" required>
                <input type="tel" id="visitorPhone" placeholder="رقم الموبايل" required>
            </div>
            <button class="contact-btn" id="sendInquiryBtn">
                <span>إرسال الطلب الآن</span>
                <i class="fa-solid fa-arrow-left"></i>
            </button>
        </div>
    </div>
</div>
<a href="chatbot.html" class="ai-chatbot-btn" title="تحدث مع مساعد سوقني الذكي">
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

    <script src="carShowRooms.js"></script>

</body>
</html>
