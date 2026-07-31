<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سُوقْنِي - دخول / إنشاء حساب المسؤول</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- ملف الـ CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- أيقونة التاب (Favicon) -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
</head>
<body class="login-page">

    <div class="login-card">
        <div class="brand-header">
            <a href="{{ url('/') }}">
                <img src="{{ asset('logo.png') }}" alt="لوجو سَوَّقْنِي" class="login-logo">
            </a>
        </div>

        <!-- أزرار التنقل بين تسجيل الدخول وإنشاء الحساب -->
        <div class="tab-buttons mb-4">
            <button type="button" class="tab-btn" id="registerTab" onclick="switchForm('register')">إنشاء حساب</button>
            <button type="button" class="tab-btn active" id="loginTab" onclick="switchForm('login')">تسجيل الدخول</button>
        </div>

        <!-- 2️⃣ نموذج إنشاء حساب مسؤول جديد (مخفي افتراضياً) -->
        <form id="registerForm" style="display: none;" action="{{ url('/index') }}" method="GET">
            <div class="form-group">
                <label>الاسم الكامل</label>
                <input type="text" id="regNameInput" placeholder="أدخل اسمك" required>
            </div>

            <div class="form-group">
                <label>البريد الإلكتروني</label>
                <input type="email" id="regEmailInput" placeholder="admin@souqny.com" required>
            </div>

            <div class="form-group">
                <label>كلمة المرور </label>
                <input type="password" id="regPasswordInput" placeholder="••••••••" required>
            </div>

            <!-- 🔑 حقل كود التحقق الثابت الخاص بالأدمن -->
            <div class="form-group admin-key-box">
                <label class="admin-label">
                    <i class="fa-solid fa-key"></i> كود التحقق الخاص بالأدمن (Admin Key)
                </label>
                <input type="password" id="adminSecretKeyInput" class="admin-input" placeholder="أدخل كود الأدمن الثابت" required>
                <small class="hint-text">هذا الحقل مطلوب للتحقق من صلاحية التسجيل كمسؤول.</small>
            </div>

            <button type="submit" class="login-btn">
                <i class="fa-solid fa-user-plus"></i> إنشاء الحساب
            </button>
        </form>

        <!-- 1️⃣ نموذج تسجيل الدخول -->
        <form id="loginForm" action="{{ url('/index') }}" method="GET">
    <!-- حقول الإدخال -->
            <div class="form-group">
                <label>اسم المستخدم أو البريد الإلكتروني</label>
                <input type="text" id="usernameInput" placeholder="admin@souqny.com" required value="admin@souqny.com">
            </div>

            <div class="form-group">
                <label>تأكيد كلمة المرور</label>
                <input type="password" id="passwordInput" placeholder="••••••••" required value="12345678">
            </div>

            <button type="submit" class="login-btn">
                <i class="fa-solid fa-right-to-bracket"></i> تسجيل الدخول
            </button>
        </form>

        <p class="footer-text">لوحة التحكم والتنسيق ©️ منصة سُوقْنِي</p>
    </div>

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

    <!-- سكربت بسيط للتنقل بين النماذج -->
    <script>
        function switchForm(type) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const loginTab = document.getElementById('loginTab');
            const registerTab = document.getElementById('registerTab');

            if (type === 'register') {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
                loginTab.classList.remove('active');
                registerTab.classList.add('active');
            } else {
                registerForm.style.display = 'none';
                loginForm.style.display = 'block';
                registerTab.classList.remove('active');
                loginTab.classList.add('active');
            }
        }
    </script>

    <!-- ملف الـ JavaScript الرئيسي -->
    <script src="{{ asset('Script.js') }}"></script>
</body>
</html>