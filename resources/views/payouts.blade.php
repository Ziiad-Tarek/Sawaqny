<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سُوقْنِي - الأرباح والمسحوبات المالية</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- أيقونة التاب (Favicon) -->
<link rel="icon" type="image/png" href="logo.png">
</head>
<body>

    <div class="sidebar">
 <div class="logo">
                <a href="HomePageCase1.html">
                    <img src="logo.jpeg" alt="لوجو سَوَّقْنِي" class="logo-imgadmin">
                </a>
            </div>

        <nav>
            <a href="index.html"><i class="fa-solid fa-chart-pie"></i> الرئيسية والإحصائيات</a>
            <a href="captains.html"><i class="fa-solid fa-user-gear"></i> توثيق الكباتن</a>
            <a href="packages.html"><i class="fa-solid fa-box-archive"></i> الباقات والأسعار</a>
            <a href="bookings.html"><i class="fa-regular fa-calendar-check"></i> الحجوزات والمواعيد</a>
            <a href="complaints.html"><i class="fa-regular fa-clipboard"></i> الشكاوى والدعم</a>
            <a href="payouts.html" class="active"><i class="fa-solid fa-wallet"></i> المالية والسحب</a>
            <a href="login.html" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> تسجيل الخروج</a>
        </nav>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>الأرباح والمسحوبات المالية</h1>
            <p>متابعة مستحقات الكباتن المنسحبة والنسبة الخاصة بالمنصة</p>
        </div>

        <div class="cards">
            <div class="card">
                <h3>إجمالي الأرباح</h3>
                <span>154,000 ج.م</span>
            </div>
            <div class="card">
                <h3>طلبات السحب المعلقة</h3>
                <span>8,500 ج.م</span>
            </div>
        </div>

        <div class="section-box">
            <h2>طلبات سحب الرصيد</h2>
            <table>
                <thead>
                    <tr>
                        <th>الكابتن</th>
                        <th>المبلغ المطلوب</th>
                        <th>وسيلة تحويل الرصيد</th>
                        <th>التاريخ</th>
                        <th>الحالة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>أحمد محمود علي</td>
                        <td>2,500 ج.م</td>
                        <td>فودافون كاش (01012345678)</td>
                        <td>25 يوليو 2026</td>
                        <td><span class="badge badge-pending">معلق</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn btn-approve btn-sm" onclick="alert('تم تحويل المبلغ بنجاح!')">تحويل الآن</button>
                                <button class="btn btn-reject btn-sm" onclick="openModal('rejectPayoutModal')">رفض</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- نافذة رفض طلب السحب -->
    <div id="rejectPayoutModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('rejectPayoutModal')">&times;</span>
            <h3>رفض طلب السحب</h3>
            <p style="font-size: 13px; color: #868D96; margin-top: 5px;">يرجى كتابة سبب رفض طلب السحب:</p>
            <textarea style="width: 100%; padding: 10px; margin-top: 15px; border-radius: 6px;" rows="4" placeholder="مثال: رقم المحفظة غير صحيح أو الرصيد المتاح غير كافٍ..."></textarea>
            <button class="btn btn-reject" style="width: 100%; margin-top: 15px; padding: 10px;" onclick="closeModal('rejectPayoutModal'); alert('تم رفض طلب السحب وتنبيه الكابتن!');">
                تأكيد الرفض
            </button>
        </div>
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