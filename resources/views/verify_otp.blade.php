<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - تأكيد الرمز</title>
    <link rel="stylesheet" href="{{ asset('css/captain.css') }}">
</head>
<body class="auth-body">
    <div class="auth-container">
        <h2>تأكيد رقم الهاتف 🔑</h2>
        <p class="subtitle">أدخل رمز التحقق المكون من 4 أرقام المرسل إليك</p>

        <form id="otpForm">
            <div class="otp-inputs">
                <input type="text" maxlength="1" class="otp-input" inputmode="numeric" required autofocus>
                <input type="text" maxlength="1" class="otp-input" inputmode="numeric" required>
                <input type="text" maxlength="1" class="otp-input" inputmode="numeric" required>
                <input type="text" maxlength="1" class="otp-input" inputmode="numeric" required>
            </div>
            
            <a href="captain_profile_setup.html" class="btn-primary otp-btn">تأكيد الحساب</a>
        </form>
    </div>

    <!-- كود الجافاسكريبت للتنقل التلقائي بين الخانات -->
    <script>
        const inputs = document.querySelectorAll('.otp-input');

        inputs.forEach((input, index) => {
            // الانتقال للخانة التالية فور الكتابة
            input.addEventListener('input', (e) => {
                if (e.target.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            // الرجوع للخانة السابقة عند المسح (Backspace)
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !e.target.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    </script>
    <script src="captain.js"></script>
</body>
</html>