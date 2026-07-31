<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سُوقْنِي - توثيق الكباتن</title>
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
            <a href="captains.html" class="active"><i class="fa-solid fa-user-gear"></i> توثيق الكباتن</a>
            <a href="packages.html"><i class="fa-solid fa-box-archive"></i> الباقات والأسعار</a>
            <a href="bookings.html"><i class="fa-regular fa-calendar-check"></i> الحجوزات والمواعيد</a>
            <a href="complaints.html"><i class="fa-regular fa-clipboard"></i> الشكاوى والدعم</a>
            <a href="payouts.html"><i class="fa-solid fa-wallet"></i> المالية والسحب</a>
            <a href="login.html" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> تسجيل الخروج</a>
        </nav>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>مراجعة واعتماد الكباتن </h1>
            <p>راجع بيانات الكباتن الجدد والمستندات الرسمية لاتخاذ القرار</p>
        </div>

        <div class="section-box">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم الكامل</th>
                        <th>طبيعة العمل</th>
                        <th>الملف الشخصي</th>
                        <th>المستندات (4)</th>
                        <th>الحالة</th>
                        <th style="min-width: 180px;">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>أحمد محمود علي</td>
                        <td>مدرب حر</td>
                        <td>
                            <button class="btn btn-view btn-sm" onclick="openModal('detailsModal')">
                                <i class="fa-regular fa-id-card"></i> الـبيانات
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-view btn-sm" onclick="openModal('docsModal')">
                                <i class="fa-regular fa-folder-open"></i> المعاينة
                            </button>
                        </td>
                        <td><span class="badge badge-pending">قيد الانتظار</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn btn-approve btn-sm" onclick="alert('تم قبول الكابتن بنجاح!')">
                                    <i class="fa-solid fa-check"></i> قبول
                                </button>
                                <button class="btn btn-reject btn-sm" onclick="openModal('rejectModal')">
                                    <i class="fa-solid fa-xmark"></i> رفض
                                </button>
                                <button class="btn btn-outline-danger btn-sm" onclick="alert('تم حظر الكابتن')">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modals -->
    <div id="detailsModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('detailsModal')">&times;</span>
            <h3>تفاصيل بيانات الكابتن</h3>
            <div style="margin-top: 15px; display: flex; flex-direction: column; gap: 8px;">
                <p><strong>1. الاسم الكامل:</strong> أحمد محمود علي</p>
                <p><strong>2. الرقم القومي:</strong> 29801011234567</p>
                <p><strong>3. طبيعة العمل:</strong> مدرب حر</p>
                <p><strong>4. ID المدرسة:</strong> غير محدد</p>
                <p><strong>5. رقم الهاتف:</strong> 01012345678</p>
                <p><strong>6. البريد الإلكتروني:</strong> ahmed@example.com</p>
                <p><strong>7. المحافظة / المنطقة:</strong> القاهرة - التجمع الخامس</p>
                <p><strong>8. نوع السيارة:</strong> تويوتا كورولا 2020</p>
                <p><strong>9. ناقل الحركة:</strong> أوتوماتيك</p>
                <p><strong>10. سنوات الخبرة:</strong> 5 سنوات</p>
                <p><strong>11. حالة التوثيق:</strong> pending</p>
            </div>
        </div>
    </div>

    <div id="docsModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('docsModal')">&times;</span>
            <h3>المستندات والأوراق المرفقة</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 15px;">
                <div><strong>بطاقة الرقم القومي</strong><img src="https://via.placeholder.com/200x100?text=National+ID" style="width:100%; border-radius:6px; margin-top:5px;"></div>
                <div><strong>رخصة القيادة</strong><img src="https://via.placeholder.com/200x100?text=Driver+License" style="width:100%; border-radius:6px; margin-top:5px;"></div>
                <div><strong>رخصة السيارة</strong><img src="https://via.placeholder.com/200x100?text=Car+License" style="width:100%; border-radius:6px; margin-top:5px;"></div>
                <div><strong>الفيش والتشبيه</strong><img src="https://via.placeholder.com/200x100?text=Criminal+Record" style="width:100%; border-radius:6px; margin-top:5px;"></div>
            </div>
        </div>
    </div>

    <div id="rejectModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('rejectModal')">&times;</span>
            <h3>تحديد سبب الرفض</h3>
            <p style="font-size: 13px; color: #838C91; margin-top: 5px;">سيتم إرسال هذا السبب للكابتن لتعديله:</p>
            <textarea style="width: 100%; padding: 10px; margin-top: 10px; border-radius: 6px;" rows="4" placeholder="مثال: صورة الفيش والتشبيه غير واضحة..."></textarea>
            <button class="btn btn-reject" style="width: 100%; margin-top: 15px; padding: 10px;" onclick="closeModal('rejectModal'); alert('تم تسجيل سبب الرفض!');">تأكيد الرفض</button>
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
        function openModal(id) { document.getElementById(id).style.display = 'flex'; }
        function closeModal(id) { document.getElementById(id).style.display = 'none'; }
    </script>
</body>
</html>