<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - تسجيل الدخول</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpeg') }}">

    <!-- Google Fonts & Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- ربط ملف CSS الرئيسي الموحد -->
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>

<body>

    <!-- Header / Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.jpeg') }}" class="logo-img" alt="سوقني">
                </a>
            </div>

            <ul class="nav-links">
                <li><a href="{{ url('/') }}">الرئيسية</a></li>
                <li><a href="{{ url('/') }}#about-section">عن المنصة</a></li>
                <li><a href="{{ url('/') }}#schools-section">تصفح المدارس</a></li>
                <li><a href="{{ url('/') }}#packages-section">الباقات</a></li>

                <!-- إنشاء حساب المنسدلة -->
                <li class="dropdown-container">
                    <a href="#" class="signup" id="signupToggle">إنشاء حساب <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown-menu" id="signupDropdown">
                        <li><a href="{{ url('/register_student') }}"><i class="fa-solid fa-user-graduate"></i> متدرب</a></li>
                        <li><a href="{{ url('/captain_profile_setup') }}"><i class="fa-solid fa-id-card"></i> كابتن</a></li>
                        <li><a href="{{ url('/register_school') }}"><i class="fa-solid fa-school"></i> مدرسة</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- محتوى صفحة تسجيل الدخول -->
    <main class="login-page-wrapper">
        <div class="login-container">
            <div class="login-header">
                <a href="{{ url('/') }}" class="logo-link">
                    <img src="{{ asset('images/logo.jpeg') }}" class="logo-img" alt="سوقني">
                </a>
                <h2>مرحباً بعودتك!</h2>
                <p>سجّل دخولك للوصول إلى حسابك في سَوَّقْنِي</p>
            </div>

            <form id="loginForm" class="login-form" action="{{ url('/index') }}" method="GET">
                <div class="input-group">
                    <label for="usernameInput"><i class="fa-solid fa-envelope"></i> البريد الإلكتروني أو اسم المستخدم</label>
                    <input type="text" id="usernameInput" placeholder="أدخل البريد أو اسم المستخدم" required value="admin@souqny.com">
                </div>

                <div class="input-group">
                    <label for="passwordInput"><i class="fa-solid fa-lock"></i> كلمة المرور</label>
                    <input type="password" id="passwordInput" placeholder="••••••••" required value="12345678">
                </div>

                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox"> تذكرني
                    </label>
                    <a href="#" id="forgotPassBtn" class="forgot-pass">نسيت كلمة المرور؟</a>
                </div>

                <button type="submit" class="btn-login">تسجيل الدخول</button>

                <p class="register-redirect">
                    ليس لديك حساب؟ <a href="{{ url('/register_student') }}">أنشئ حسابك الآن</a>
                </p>
            </form>
        </div>
    </main>

    <!-- ================= Modal نسيت كلمة المرور ================= -->
    <div id="forgotModal" class="forgot-modal-overlay">
        <div class="forgot-modal-card">
            <button class="close-modal-btn" id="closeModalBtn">&times;</button>
            <div class="modal-header">
                <i class="fa-solid fa-key modal-icon"></i>
                <h3>استعادة كلمة المرور</h3>
                <p>أدخل بريدك الإلكتروني المسجل وسنرسل لك رابطاً لإعادة تعيين كلمة المرور.</p>
            </div>
            <form id="forgotForm" onsubmit="handleForgotSubmit(event)">
                <div class="input-group">
                    <label for="forgotEmail"><i class="fa-solid fa-envelope"></i> البريد الإلكتروني</label>
                    <input type="email" id="forgotEmail" placeholder="example@mail.com" required>
                </div>
                <button type="submit" class="btn-login" style="margin-top: 15px;">إرسال رابط التعيين</button>
            </form>
            <div id="forgotSuccessMsg" class="forgot-success-msg">
                <i class="fa-solid fa-circle-check"></i> تم إرسال رابط استعادة كلمة المرور إلى بريدك بنجاح!
            </div>
        </div>
    </div>

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

    <!-- أكشن نافذة نسيت كلمة المرور (Front-end Only) -->
    <script>
        const forgotModal = document.getElementById('forgotModal');
        const forgotPassBtn = document.getElementById('forgotPassBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const forgotSuccessMsg = document.getElementById('forgotSuccessMsg');
        const forgotForm = document.getElementById('forgotForm');

        // فتح النافذة
        forgotPassBtn.addEventListener('click', function(e) {
            e.preventDefault();
            forgotModal.style.display = 'flex';
            forgotSuccessMsg.style.display = 'none';
            forgotForm.reset();
            forgotForm.style.display = 'block';
        });

        // إغلاق النافذة
        closeModalBtn.addEventListener('click', function() {
            forgotModal.style.display = 'none';
        });

        // إغلاق النافذة عند الضغط خارجها
        window.addEventListener('click', function(e) {
            if (e.target === forgotModal) {
                forgotModal.style.display = 'none';
            }
        });

        // أكشن الإرسال الشكلي (فرونت إند)
        function handleForgotSubmit(e) {
            e.preventDefault();
            forgotForm.style.display = 'none';
            forgotSuccessMsg.style.display = 'block';
            setTimeout(() => {
                forgotModal.style.display = 'none';
            }, 3000);
        }
    </script>
</body>

</html>