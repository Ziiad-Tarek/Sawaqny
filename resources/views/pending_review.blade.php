<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - قيد المراجعة</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('logo.jpeg') }}">
    <link rel="stylesheet" href="{{ asset('css/captain.css') }}">

    <style>
        .badge-pending {
            background-color: #FFF4E5;
            color: #B45309;
            padding: 4px 12px;
            border-radius: 6px;
            font-weight: bold;
            display: inline-block;
        }
    </style>
</head>
<body class="auth-body">
    <div class="auth-container" style="text-align: center; padding: 2.5rem 2rem;">
        <h2 style="font-size: 1.8rem; margin-bottom: 1rem;">أوراقك قيد المراجعة ⏳</h2>
        <p class="subtitle" style="line-height: 1.6; margin-bottom: 2rem;">
            يقوم فريق **سَوَّقْنِي** بمراجعة المستندات الخاصة بك حالياً. سيتم تفعيل حسابك فور التأكد منها.
        </p>

        <div style="margin-top: 2rem; background: #f8f9fa; padding: 1.5rem; border-radius: 8px;">
            <p style="font-size: 0.9rem; color: #6c757d; margin-bottom: 1rem;">(زر للمحاكاة لتجربة تفعيل الأدمن):</p>
            <button class="btn-primary" onclick="window.location.href='/captain_dashboard'" style="max-width: 250px; margin: 0 auto;">
                ✅ محاكاة موافقة الأدمن
            </button>
        </div>
    </div>

    <!-- Floating AI Chatbot Button -->
    <a href="/chatbot" class="ai-chatbot-btn" title="تحدث مع مساعد سوقني الذكي">
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
</body>
</html>
