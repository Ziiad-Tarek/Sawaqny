<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - تأكيد الرمز</title>
    <link rel="stylesheet" href="captain.css">
</head>
<body class="auth-body">
    <div class="auth-container">
        <h2>تأكيد رقم الهاتف 🔑</h2>
        <p class="subtitle">أدخل رمز التحقق المكون من 4 أرقام المرسل إليك</p>

        <form id="otpForm">
            <div class="otp-inputs">
                <input type="text" maxlength="1" class="otp-input" required>
                <input type="text" maxlength="1" class="otp-input" required>
                <input type="text" maxlength="1" class="otp-input" required>
                <input type="text" maxlength="1" class="otp-input" required>
            </div>
            <button type="submit" class="btn-primary" style="margin-top: 1.5rem;">تأكيد الحساب</button>
        </form>
    </div>
    <script src="captain.js"></script>
</body>
</html>