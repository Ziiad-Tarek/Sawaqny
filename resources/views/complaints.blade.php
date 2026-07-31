<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سُوقْنِي - الشكاوى والدعم</title>
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
            <a href="complaints.html" class="active"><i class="fa-regular fa-clipboard"></i> الشكاوى والدعم</a>
            <a href="payouts.html"><i class="fa-solid fa-wallet"></i> المالية والسحب</a>
            <a href="login.html" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> تسجيل الخروج</a>
        </nav>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>إدارة الشكاوى والدعم الفني</h1>
            <p>متابعة بلاغات المستخدمين والحلول المقدمة</p>
        </div>

        <div class="section-box">
            <table>
                <thead>
                    <tr>
                        <th>رقم التذكرة</th>
                        <th>صاحب الشكوى</th>
                        <!-- 👈 1. تم إضافة العمود هنا -->
                        <th>صفة المُرسل</th> 
                        <th>نوع الشكوى</th>
                        <th>التاريخ</th>
                        <th>الحالة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
            
                  <tr>
    <td>#TK-901</td>
    <td>ندى إبراهيم (متدرب)</td>
    <td><span class="badge badge-trainee">متدرب</span></td>
    <td>شكوى ضد الكابتن: حسام علي</td>
    <td>24 يوليو 2026</td>
    <td><span class="badge badge-pending">قيد المراجعة</span></td>
    <td style="white-space: nowrap;">
    <div style="display: flex; gap: 8px; align-items: center; justify-content: center;">
        <!-- زرار الرد العادي -->
        <button class="btn btn-view btn-sm" onclick="openModal('replyModal')">
            <i class="fa-regular fa-comment-dots"></i> رد
        </button>
        
        <!-- زرار تحويل عبارة عن أيقونة بنفسجي شيك -->
        <button class="btn btn-sm" style="background-color: #f3e5f5; color: #7b1fa2; border: 1px solid #7b1fa2; padding: 6px 10px; border-radius: 6px; cursor: pointer;" onclick="alert('تم تحويل الشكوى إلى المدرسة!')" title="تحويل للمدرسة">
            <i class="fa-solid fa-share-from-square"></i>
        </button>
    </div>
</td>
</tr>
                        <td>#TK-880</td>
                        <td>محمد شريف</td>
                        <!-- 👈 2. أضيف هذا السطر الخاص بالكابتن كمثال -->
                        <td><span class="badge badge-captain"><i class="fa-solid fa-id-card"></i> كابتن</span></td>
                        <td>مشكلة في الدفع الإلكتروني</td>
                        <td>20 يوليو 2026</td>
                        <td><span class="badge badge-approved">تم الحل</span></td>
                        <td>
                            <button class="btn btn-view btn-sm" onclick="openModal('viewModal')">
                                <i class="fa-regular fa-eye"></i> عرض
                            </button>
                        </td>
                    </tr>

                    <!-- صف جديد لشكوى من مدرسة -->
<tr>
    <td>#TK-750</td>
    <td>مدرسة النور لتعليم القيادة</td>
    <!-- 👈 شارة المدرسة (School Badge) -->
    <td><span class="badge badge-school"><i class="fa-solid fa-school"></i> مدرسة</span></td>
    <td>طلب تعديل أسعار الباقات</td>
    <td>18 يوليو 2026</td>
    <td><span class="badge badge-pending">قيد المراجعة</span></td>
    <td>
        <button class="btn btn-view btn-sm" onclick="openModal('schoolModal')">
            <i class="fa-regular fa-comment-dots"></i> رد ومتابعة
        </button>
    </td>
</tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- نافذة الرد على الشكوى -->
    <div id="replyModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('replyModal')">&times;</span>
            <h3>الرد على التذكرة #TK-901</h3>
            <!-- أضفنا صفة المُرسل داخل المودال أيضاً لزيادة التوضيح -->
            <p style="font-size: 13px; color: #868D96; margin-top: 5px;">
                <strong>مقدم الشكوى:</strong> ندى إبراهيم (متدرب) <br>
                <strong>تفاصيل الشكوى:</strong> الكابتن تأخر عن الحصة لمدة 20 دقيقة.
            </p>
            <textarea style="width: 100%; padding: 10px; margin-top: 15px; border-radius: 6px;" rows="4" placeholder="اكتبي كتابة الرد هنا للإرسال للمستخدم..."></textarea>
            <button class="btn btn-approve" style="width: 100%; margin-top: 15px; padding: 10px;" onclick="closeModal('replyModal'); alert('تم إرسال الرد وإغلاق التذكرة بنجاح!');">
                إرسال الرد
            </button>
        </div>
    </div>
    <!-- نافذة عرض الشكوى الخاصة بالمدرسة -->
<div id="schoolModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('schoolModal')">&times;</span>
        <h3>تفاصيل التذكرة #TK-750</h3>
        <div style="margin-top: 15px; display: flex; flex-direction: column; gap: 10px; font-size: 14px;">
            <p><strong>صاحب الشكوى:</strong> مدرسة النور لتعليم القيادة</p>
            <p><strong>صفة المُرسل:</strong> <span class="badge badge-school"><i class="fa-solid fa-school"></i> مدرسة</span></p>
            <p><strong>السبب:</strong> نرجو تحديث لوحة التحكم لتسمح لنا بتعديل أسعار باقات التدريب العملي مباشرة.</p>
        </div>
        <textarea style="width: 100%; padding: 10px; margin-top: 15px; border-radius: 6px;" rows="4" placeholder="اكتبي كتابة الرد هنا للمدرسة..."></textarea>
        <button class="btn btn-approve" style="width: 100%; margin-top: 15px; padding: 10px;" onclick="closeModal('schoolModal'); alert('تم إرسال الرد للمدرسة بنجاح!');">
            إرسال الرد
        </button>
    </div>
</div>

    <!-- نافذة عرض الشكوى المحلولة -->
    <div id="viewModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('viewModal')">&times;</span>
            <h3>تفاصيل التذكرة #TK-880</h3>
            <div style="margin-top: 15px; display: flex; flex-direction: column; gap: 10px; font-size: 14px;">
                <p><strong>صاحب الشكوى:</strong> محمد شريف</p>
                <p><strong>صفة المُرسل:</strong> كابتن</p>
                <p><strong>السبب:</strong> خصم المبلغ مرتين أثناء الشراء.</p>
                <p><strong>الإجراء المتخذ:</strong> تم التواصل مع البنك وإعادة المبلغ للحساب.</p>
                <p><strong>حالة التذكرة:</strong> مغلقة (تم الحل)</p>
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