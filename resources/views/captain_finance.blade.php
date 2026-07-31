<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - المالية والسحب</title>
    <link rel="icon" type="image/jpeg" href="logo.jpeg">
    <link rel="stylesheet" href="captain.css">
</head>
<body>
    <div class="page-wrapper">
        <aside class="sidebar">
            <div class="sidebar-header">
                 <a href="HomePageCase1.html">
                <img src="logo.jpeg" alt="سُوقْنِي" class="logo-img">
            </a>
            </div>
            <nav class="sidebar-nav">
                <a href="captain_dashboard.html" class="nav-item"><span class="nav-icon">📊</span> الرئيسية والإحصائيات</a>
                <a href="captain_bookings.html" class="nav-item"><span class="nav-icon">🔔</span> طلبات الحجز</a>
                <a href="captain_students.html" class="nav-item"><span class="nav-icon">🚗</span> متابعة المتدربين</a>
                <a href="captain_finance.html" class="nav-item active"><span class="nav-icon">💳</span> المالية والسحب</a>
                <a href="captain_support.html" class="nav-item"><span class="nav-icon">📋</span> الشكاوى والتقييمات</a>
                <a href="captain.html" class="nav-item logout-item"><span class="nav-icon">➡️</span> تسجيل الخروج</a>
            </nav>
        </aside>

        <main class="main-content">
            <header class="content-header">
                <h1 class="page-title">الأرباح والمسحوبات المالية 💰</h1>
                <p class="subtitle">تابع أرباحك الصافية والعمولات المخصومة وقم بطلب سحب أرباحك</p>
            </header>

            <div class="stats-grid">
                <div class="stat-card">
                    <p style="color: #838C91; font-size: 0.85rem;">إجمالي الأرباح الكلية</p>
                    <div class="stat-value">4,800 ج.م</div>
                </div>
                <div class="stat-card">
                    <p style="color: #838C91; font-size: 0.85rem;">المبالغ المتاحة للسحب</p>
                    <div class="stat-value" style="color: #137333;">3,430 ج.م</div>
                </div>
                <div class="stat-card">
                    <p style="color: #838C91; font-size: 0.85rem;">عمولة المنصة المخصومة (15%)</p>
                    <div class="stat-value" style="color: #D93025;">720 ج.م</div>
                </div>
            </div>

            <section class="otp-card" style="text-align: right;">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                    <div>
                        <h2 class="card-title" style="margin-bottom: 0.3rem;">طلب سحب المستحقات 💳</h2>
                        <p class="subtitle" style="margin: 0;">يمكنك التحويل لحسابك البنكي أو المحفظة الإلكترونية</p>
                    </div>
                    <button class="btn-primary" style="width: auto; padding: 0.8rem 1.8rem;" onclick="requestPayout(3430)">طلب سحب الأرباح الآن 💸</button>
                </div>
            </section>
        </main>
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
    <script src="captain.js"></script>
</body>
</html>