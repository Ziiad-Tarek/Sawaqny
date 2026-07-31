<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي | تعلم القيادة بسهولة</title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('logo.jpeg') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header>
        <nav class="navbar">
           <div class="logo">
    <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo.jpeg') }}" class="logo-img" alt="سوقني">
    </a>
</div>

            <ul class="nav-links">
                <li><a href="{{ url('/') }}">الرئيسية</a></li>
                <li><a href="#about-section">عن المنصة</a></li>
                <li><a href="#schools-section">تصفح المدارس</a></li>
                <li><a href="#packages-section">الباقات</a></li>
                 <li><a href="{{ url('/carShowRooms') }}">معارض السيارات</a></li>
                <li><a href="{{ url('/maintenance') }}">خدمة الصيانة</a></li>

                <li><a href="{{ url('/Home_page_login') }}" id="loginBtn" class="login-link">تسجيل الدخول</a></li>
                <!-- القائمة المنسدلة لإنشاء حساب -->
                <li class="dropdown-container">
                    <a href="#" class="signup" id="signupToggle">إنشاء حساب <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown-menu" id="signupDropdown">
                        <li><a href="{{ url('/register/trainee') }}"><i class="fa-solid fa-user-graduate"></i> متدرب</a></li>
                        <li><a href="{{ url('/register/captain') }}"><i class="fa-solid fa-id-card"></i> كابتن</a></li>
                        <li><a href="{{ url('/school-dashboard') }}"><i class="fa-solid fa-user-shield"></i> مدرسة</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- ================= HERO ================= -->
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>تعلم القيادة بسهولة مع أفضل المدربين والمدارس المعتمدين بالقرب منك</h1>
            <p>ابحث، قارن، واحجز حصتك بكل سهولة وأمان.</p>

            <div class="search-box">
                <div class="input-box">
                    <label><i class="fa-solid fa-location-dot"></i> المنطقة</label>
                    <select id="areaSelect">
                        <option>اختر المنطقة</option>
                        <option>القاهرة</option>
                        <option>الجيزة</option>
                        <option>الإسكندرية</option>
                        <option>طنطا</option>
                        <option>المنصورة</option>
                        <option>أسيوط</option>
                    </select>
                </div>

                <div class="gps">
                    <button type="button" id="gpsBtn">
                        <i class="fa-solid fa-location-crosshairs"></i> تحديد موقعي
                    </button>
                </div>

                <div class="input-box">
                    <label><i class="fa-solid fa-user-tie"></i> نوع التدريب</label>
                    <select id="trainingType">
                        <option>اختر نوع التدريب</option>
                        <option>كابتن خاص</option>
                        <option>مدرسة قيادة</option>
                    </select>
                </div>

                <div class="input-box">
                    <label><i class="fa-solid fa-car"></i> نوع السيارة</label>
                    <select id="carType">
                        <option>اختر نوع السيارة</option>
                        <option>أوتوماتيك</option>
                        <option>مانوال</option>
                    </select>
                </div>

                <button class="search-btn" id="searchBtn">
                    <i class="fa-solid fa-magnifying-glass"></i> ابحث الآن
                </button>
            </div>
        </div>
    </section>

    <!-- ================= FEATURES ================= -->
    <section class="features" id="about-section">
        <h2>لماذا تختار منصة سَوَقْنِي؟</h2>
        <div class="features-container">
            <div class="feature-card">
                <i class="fa-solid fa-circle-check"></i>
                <h3>معارض معتمدة</h3>
                <p>جميع المعارض موثقة لضمان جودة الخدمة.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-car"></i>
                <h3>سيارات جديدة ومستعملة</h3>
                <p>اختر السيارة المناسبة حسب احتياجاتك.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-calendar-check"></i>
                <h3>حجز أونلاين سريع</h3>
                <p>احجز حصصك ومواعيدك بضغطة زر واحدة.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>فحص مجاني</h3>
                <p>تأكد من حالة السيارة قبل الشراء.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-location-dot"></i>
                <h3>أقرب معرض إليك</h3>
                <p>اعثر على أقرب المعارض حسب موقعك.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-headset"></i>
                <h3>دعم بعد البيع</h3>
                <p>فريق دعم جاهز لمساعدتك في أي وقت.</p>
            </div>
        </div>
    </section>

    <!-- ================= PACKAGES SECTION ================= -->
    <section id="packages-section" class="content-section">
        <div class="section-header">
            <h2> الباقات الأكثر مبيعاً</h2>
            <p>اختر الباقة المناسبة لك وابدأ رحلتك في تعلم القيادة بأسعار موفرة</p>
        </div>
        <div class="packages-grid">
            <div class="package-card featured">
                <span class="badge-hot">الأكثر مبيعاً </span>
                <h3>باقة الاحتراف الشاملة</h3>
                <p class="price">1,500 ج.م</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i> 10 ساعات تدريب عملي</li>
                    <li><i class="fa-solid fa-check"></i> اختيار الكابتن أو المدرسة المفضلين</li>
                    <li><i class="fa-solid fa-check"></i> تدريب كامل على الطرق السريعة والركنات</li>
                    <li><i class="fa-solid fa-check"></i> تجهيز شامل لاختبار المرور</li>
                </ul>
            </div>

            <div class="package-card">
                <h3>باقة المبتدئين السريعة</h3>
                <p class="price">900 ج.م</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i> 5 ساعات تدريب أساسيات</li>
                    <li><i class="fa-solid fa-check"></i> تدريب على سيارات مانوال أو أوتوماتيك</li>
                    <li><i class="fa-solid fa-check"></i> مرونة كاملة في اختيار المواعيد</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= SCHOOLS SECTION ================= -->
    <section id="schools-section" class="content-section">
        <div class="section-header">
            <h2> المدارس المتاحة</h2>
            <p>تصفح أكاديميات ومدارس القيادة المعتمدة في منطقتك</p>
        </div>
        <div class="schools-grid">
            <div class="card school-card">
                <i class="fa-solid fa-school"></i>
                <h3>مدرسة الأمان لتعليم القيادة</h3>
                <p>فرع مدينة نصر - أسطول سيارات حديث ومعتمد</p>
            </div>
            <div class="card school-card">
                <i class="fa-solid fa-school"></i>
                <h3>أكاديمية السواقة الذكية</h3>
                <p>فرع المعادي والمهندسين - مدربون ومدربات خبرة</p>
            </div>
            <div class="card school-card">
                <i class="fa-solid fa-school"></i>
                <h3>مدرسة الأهرام لتعليم القيادة</h3>
                <p> فرع الدقي - تدريب احترافي مع مدربين معتمدين وأحدث السيارات</p>
            </div>
        </div>
    </section>

    <!-- Floating AI Chatbot Button -->
    <a href="{{ url('/chatbot') }}" class="ai-chatbot-btn" title="تحدث مع مساعد سوقني الذكي">
        <div class="chatbot-icon">
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

    <!-- ================= FOOTER ================= -->
    <footer>
        <div class="footer-container">
            <div>
                <h3>سَوَّقْنِي</h3>
                <p>منصتك الأولى لتعلم القيادة وشراء أول سيارة بكل سهولة.</p>
            </div>

            <div>
                <h3>روابط سريعة</h3>
                <a href="{{ url('/') }}">الرئيسية</a>
                <a href="#schools-section">تصفح المدارس</a>
                <a href="{{ url('/car-showrooms') }}">معارض السيارات</a>
                <a href="#packages-section">الباقات</a>
            </div>

            <div>
                <h3>تواصل معنا</h3>
                <p>📞 01012345678</p>
                <p>📧 info@sawaqny.com</p>
            </div>
        </div>

        <hr style="border: 0; border-top: 1px solid rgba(255, 255, 255, 0.15); margin: 20px 0;">

        <div class="footer-bottom" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px; padding: 10px 0;">
            <p class="copyright" style="margin: 0; color: #ffffff; font-size: 14px;">
                © 2026 سَوَّقْنِي | جميع الحقوق محفوظة
            </p>

            <a href="{{ url('/admin/login') }}" class="admin-link" style="color: #cbd5e1; font-size: 13px; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: color 0.3s;">
                <i class="fa-solid fa-user-shield"></i>
            </a>
        </div>
    </footer>

    <!-- Main Script -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
