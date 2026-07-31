<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سُوقْنِي - الحجوزات والمواعيد</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- أيقونة التاب (Favicon) -->
<link rel="icon" type="image/png" href="logo.png">
</head>
<body>
    <style>
    .ai-chatbot-btn {
    position: fixed;
    bottom: 30px;
    left: 30px; /* ليكون في الزاوية اليسرى من الأسفل متناسباً مع الاتجاه العربي RTL */
    z-index: 9999;
    display: flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #0e216c, #1a3abb);
    color: #ffffff !important;
    padding: 12px 20px;
    border-radius: 50px;
    box-shadow: 0 8px 25px rgba(14, 33, 108, 0.4);
    text-decoration: none !important;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.ai-chatbot-btn .chatbot-icon {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* تأثير الحركة عند مرور الماوس عليه */
.ai-chatbot-btn:hover {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 12px 30px rgba(26, 58, 187, 0.5);
    background: linear-gradient(135deg, #1a3abb, #0e216c);
}

/* تأثير النبض الخفيف للفت الانتباه */
@keyframes pulse-glow {
    0% { box-shadow: 0 0 0 0 rgba(26, 58, 187, 0.6); }
    70% { box-shadow: 0 0 0 15px rgba(26, 58, 187, 0); }
    100% { box-shadow: 0 0 0 0 rgba(26, 58, 187, 0); }
}

.ai-chatbot-btn {
    animation: pulse-glow 2.5s infinite;
}
</style>
    <div class="sidebar">
  <div class="logo">
                <a href="HomePageCase1.html">
                    <img src="{{ asset('css/logo.jpeg') }}" alt="لوجو سوقني">
                </a>
            </div>

        <nav>
            <a href="index.html"><i class="fa-solid fa-chart-pie"></i> الرئيسية والإحصائيات</a>
            <a href="captains.html"><i class="fa-solid fa-user-gear"></i> توثيق الكباتن</a>
            <a href="packages.html"><i class="fa-solid fa-box-archive"></i> الباقات والأسعار</a>
            <a href="bookings.html" class="active"><i class="fa-regular fa-calendar-check"></i> الحجوزات والمواعيد</a>
            <a href="complaints.html"><i class="fa-regular fa-clipboard"></i> الشكاوى والدعم</a>
            <a href="payouts.html"><i class="fa-solid fa-wallet"></i> المالية والسحب</a>
            <a href="HomePageCase1.html" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> تسجيل الخروج</a>
        </nav>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>إدارة الطلبات والحجوزات</h1>
            <p>متابعة جداول المواعيد وموافقات الطلبات بين المتدربين والكباتن</p>
        </div>

        <div class="section-box">
            <table>
                <thead>
                    <tr>
                        <th>رقم الحجز</th>
                        <th>اسم المتدرب</th>
                        <th>الكابتن</th>
                        <th>الموعد</th>
                        <th>الحالة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#BK-501</td>
                        <td>مريم علي</td>
                        <td>أحمد محمود</td>
                        <td>الأحد 26 يوليو - 04:00 م</td>
                        <td><span class="badge badge-approved">مؤكد</span></td>
                        <td>
                            <button class="btn btn-view btn-sm" onclick="openModal('bookingModal1')">
                                <i class="fa-regular fa-eye"></i> تفاصيل
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>#BK-502</td>
                        <td>خالد حسن</td>
                        <td>سارّة الكابتن</td>
                        <td>الإثنين 27 يوليو - 02:00 م</td>
                        <td><span class="badge badge-pending">قيد الانتظار</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn btn-approve btn-sm" onclick="alert('تم قبول الحجز وتأكيده بنجاح!')">
                                    <i class="fa-solid fa-check"></i> قبول
                                </button>
                                <button class="btn btn-reject btn-sm" onclick="alert('تم إلغاء الحجز بنجاح.')">
                                    <i class="fa-solid fa-xmark"></i> إلغاء
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- نافذة تفاصيل الحجز (Modal) -->
    <div id="bookingModal1" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('bookingModal1')">&times;</span>
            <h3>تفاصيل الحجز #BK-501</h3>
            <div style="margin-top: 15px; display: flex; flex-direction: column; gap: 10px; font-size: 14px;">
                <p><strong>اسم المتدرب:</strong> مريم علي</p>
                <p><strong>اسم الكابتن:</strong> أحمد محمود</p>
                <p><strong>نوع الباقة:</strong> باقة 10 حصص (أوتوماتيك)</p>
                <p><strong>الموعد المحدد:</strong> الأحد 26 يوليو - 04:00 م</p>
                <p><strong>مكان الانطلاق:</strong> التجمع الخامس - بجوار مسجد الفتاح العليم</p>
                <p><strong>حالة الدفع:</strong> مدفوع بالكامل (1,500 ج.م)</p>
            </div>
        </div>
    </div>
 <!-- Floating AI Chatbot Button -->
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

    <script>
        function openModal(id) { 
            document.getElementById(id).style.display = 'flex'; 
        }
        function closeModal(id) { 
            document.getElementById(id).style.display = 'none'; 
        }
    </script>
</body>
</html>