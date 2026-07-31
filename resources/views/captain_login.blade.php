<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - انضم ككابتن</title>
    <link rel="icon" type="image/jpeg" href="logo.jpeg"> 

    <!-- Font Awesome للأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/captain.css') }}">
    
    <!-- Google Fonts (Cairo) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- ملف التنسيق الخاص بالكابتن -->
    
</head>
<body class="auth-body">

    <div class="auth-container">
        <a href="HomePageCase1.html" class="logo-link">
            <img src="{{ asset('css/logo.png') }}" alt="Logo">
        </a>
        <h2>انضم إلى كباتن سَوَّقْنِي </h2>
        <p class="subtitle">قم بتسجيل بياناتك للبدء في تقديم حصص القيادة</p>

        <form id="registerForm">
            <div class="form-group">
                <label for="contactInfo"><i class="fa-solid fa-phone"></i> رقم الهاتف أو البريد الإلكتروني</label>
                <input type="text" id="contactInfo" placeholder="01xxxxxxxxx أو example@mail.com" required>
            </div>

            <div class="form-group">
                <label for="password"><i class="fa-solid fa-lock"></i> كلمة المرور</label>
                <input type="password" id="password" placeholder="••••••••" required>
            </div>

            <!-- خيارات تذكرني و نسيت كلمة المرور -->
            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox"> تذكرني
                </label>
                <a href="#" id="forgotPassBtn" class="forgot-pass">نسيت كلمة المرور؟</a>
            </div>
            <a href="verify_otp.html" class="btn-primary">التالي إرسال رمز التحقق</a>
        </form>
    </div>

    <!-- ================= Modal نسيت كلمة المرور ================= -->
    <div id="forgotModal" class="forgot-modal-overlay">
        <div class="forgot-modal-card">
            <button class="close-modal-btn" id="closeModalBtn">&times;</button>
            <div class="modal-header">
                <i class="fa-solid fa-key modal-icon"></i>
                <h3>استعادة كلمة المرور</h3>
                <p>أدخل بريدك الإلكتروني أو رقم هاتفك لإرسال رمز إعادة التعيين.</p>
            </div>
            <form id="forgotForm" onsubmit="handleForgotSubmit(event)">
                <div class="form-group">
                    <label for="forgotEmail"><i class="fa-solid fa-envelope"></i> البريد أو الهاتف</label>
                    <input type="text" id="forgotEmail" placeholder="أدخل بياناتك المسجلة" required>
                </div>
                <button type="submit" class="btn-primary" style="margin-top: 15px;">إرسال الرمز</button>
            </form>
            <div id="forgotSuccessMsg" class="forgot-success-msg">
                <i class="fa-solid fa-circle-check"></i> تم إرسال رمز الاستعادة بنجاح!
            </div>
        </div>
    </div>

    <!-- Floating AI Chatbot Button -->
    <a href="chatbot.html" class="ai-chatbot-btn" title="تحدث مع مساعد سوقني الذكي">
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

    <script src="captain.js"></script>

    <!-- أكشن نافذة نسيت كلمة المرور -->
    <script>
        const forgotModal = document.getElementById('forgotModal');
        const forgotPassBtn = document.getElementById('forgotPassBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const forgotSuccessMsg = document.getElementById('forgotSuccessMsg');
        const forgotForm = document.getElementById('forgotForm');

        forgotPassBtn.addEventListener('click', function(e) {
            e.preventDefault();
            forgotModal.style.display = 'flex';
            forgotSuccessMsg.style.display = 'none';
            forgotForm.reset();
            forgotForm.style.display = 'block';
        });

        closeModalBtn.addEventListener('click', function() {
            forgotModal.style.display = 'none';
        });

        window.addEventListener('click', function(e) {
            if (e.target === forgotModal) {
                forgotModal.style.display = 'none';
            }
        });

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