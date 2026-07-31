<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - الشكاوى والتقييمات</title>
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
                <a href="captain_finance.html" class="nav-item"><span class="nav-icon">💳</span> المالية والسحب</a>
                <a href="captain_support.html" class="nav-item active"><span class="nav-icon">📋</span> الشكاوى والتقييمات</a>
                <a href="captain.html" class="nav-item logout-item"><span class="nav-icon">➡️</span> تسجيل الخروج</a>
            </nav>
        </aside>

        <main class="main-content">
            <header class="content-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <div>
                    <h1 class="page-title">التقييمات والدعم الفني ⭐</h1>
                    <p class="subtitle" style="margin: 0;">شاهد آراء المتدربين أو أبلغ عن أي مشكلة</p>
                </div>
                <button class="btn-danger" style="width: auto; padding: 0.7rem 1.2rem;" onclick="submitSupportTicket()">رفع شكوى ضد متدرب 🚨</button>
            </header>

            <section class="otp-card" style="text-align: right;">
                <h2 class="card-title">آراء وتقييمات المتدربين ⭐</h2>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>المتدرب</th>
                            <th>التقييم</th>
                            <th>التعليق</th>
                            <th>الحالة</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>محمود علي</td>
                            <td>⭐⭐⭐⭐⭐ (5/5)</td>
                            <td>كابتن ممتاز وصبور جداً وشرحه واضح.</td>
                            <td><span class="badge badge-success">منشور</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
    <script src="captain.js"></script>
</body>
</html>