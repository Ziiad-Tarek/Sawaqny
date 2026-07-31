<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سُوقْنِي - إدارة الباقات والأسعار</title>
    
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
            <a href="packages.html" class="active"><i class="fa-solid fa-box-archive"></i> الباقات والأسعار</a>
            <a href="bookings.html"><i class="fa-regular fa-calendar-check"></i> الحجوزات والمواعيد</a>
            <a href="complaints.html"><i class="fa-regular fa-clipboard"></i> الشكاوى والدعم</a>
            <a href="payouts.html"><i class="fa-solid fa-wallet"></i> المالية والسحب</a>
            <a href="login.html" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> تسجيل الخروج</a>
        </nav>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>إدارة الباقات والأسعار</h1>
            <p>التحكم في باقات التعليم المتاحة للمتدربين ورسومها</p>
        </div>

        <div class="section-box">
            <button class="btn btn-approve" style="margin-bottom: 15px;" onclick="openModal('addPackageModal')">
                <i class="fa-solid fa-plus"></i> إضافة باقة جديدة
            </button>
            <table>
                <thead>
                    <tr>
                        <th>اسم الباقة</th>
                        <th>عدد الحصص</th>
                        <th>نوع ناقل الحركة</th>
                        <th>السعر</th>
                        <th>الحالة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>الباقة المبتدئة</td>
                        <td>5 حصص</td>
                        <td>أوتوماتيك</td>
                        <td>1,500 ج.م</td>
                        <td><span class="badge badge-approved">نشط</span></td>
                        <td>
                            <button class="btn btn-view btn-sm" onclick="openModal('editPackageModal')">
                                <i class="fa-solid fa-pen"></i> تعديل
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>الباقة الاحترافية</td>
                        <td>10 حصص</td>
                        <td>مانيوال</td>
                        <td>2,800 ج.م</td>
                        <td><span class="badge badge-approved">نشط</span></td>
                        <td>
                            <button class="btn btn-view btn-sm" onclick="openModal('editPackageModal')">
                                <i class="fa-solid fa-pen"></i> تعديل
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- نافذة إضافة باقة جديدة -->
    <div id="addPackageModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('addPackageModal')">&times;</span>
            <h3>إضافة باقة تعليمية جديدة</h3>
            <div style="margin-top: 15px; display: flex; flex-direction: column; gap: 12px;">
                <div>
                    <label style="font-size: 13px; font-weight: 700; color: #838C91;">اسم الباقة</label>
                    <input type="text" placeholder="مثال: الباقة الذهبية" style="width: 100%; padding: 8px; margin-top: 4px; border-radius: 6px;">
                </div>
                <div>
                    <label style="font-size: 13px; font-weight: 700; color: #838C91;">عدد الحصص</label>
                    <input type="number" placeholder="مثال: 8" style="width: 100%; padding: 8px; margin-top: 4px; border-radius: 6px;">
                </div>
                <div>
                    <label style="font-size: 13px; font-weight: 700; color: #838C91;">السعر (ج.م)</label>
                    <input type="text" placeholder="2000" style="width: 100%; padding: 8px; margin-top: 4px; border-radius: 6px;">
                </div>
                <button class="btn btn-approve" style="width: 100%; margin-top: 10px; padding: 10px;" onclick="closeModal('addPackageModal'); alert('تمت إضافة الباقة بنجاح!');">
                    حفظ الباقة
                </button>
            </div>
        </div>
    </div>

    <!-- نافذة تعديل الباقة -->
    <div id="editPackageModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('editPackageModal')">&times;</span>
            <h3>تعديل تفاصيل الباقة</h3>
            <div style="margin-top: 15px; display: flex; flex-direction: column; gap: 12px;">
                <div>
                    <label style="font-size: 13px; font-weight: 700; color: #838C91;">اسم الباقة</label>
                    <input type="text" value="الباقة المبتدئة" style="width: 100%; padding: 8px; margin-top: 4px; border-radius: 6px;">
                </div>
                <div>
                    <label style="font-size: 13px; font-weight: 700; color: #838C91;">السعر الحالي (ج.م)</label>
                    <input type="text" value="1500" style="width: 100%; padding: 8px; margin-top: 4px; border-radius: 6px;">
                </div>
                <button class="btn btn-approve" style="width: 100%; margin-top: 10px; padding: 10px;" onclick="closeModal('editPackageModal'); alert('تم حفظ التعديلات بنجاح!');">
                    تحديث البيانات
                </button>
            </div>
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