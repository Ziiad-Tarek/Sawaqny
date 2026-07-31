<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - لوحة تحكم الكابتن المتكاملة</title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo_re.png') }}">
    <link rel="stylesheet" href="{{ asset('css/captain.css') }}">

    <!-- FontAwesome Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .app-section { display: none; }
        .app-section.active-section { display: block; }

        .center-modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .center-modal-card {
            background: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            width: 450px;
            max-width: 90%;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Floating AI Button Style */
        .ai-chatbot-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #FE8511;
            color: #fff;
            padding: 10px 16px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            z-index: 999;
            transition: transform 0.2s ease;
        }

        .ai-chatbot-btn:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <!-- السايد بار الموحد -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <a href="/">
                    <img src="{{ asset('images/logo_re.png') }}" alt="Sawaqny Logo" onerror="this.src='{{ asset('logo.jpeg') }}'">
                </a>
            </div>
            <nav class="sidebar-nav">
                <a href="#" class="nav-item active" onclick="switchSection('dashboard', event)"><span class="nav-icon"><i class="fa-solid fa-chart-pie"></i></span> الرئيسية والإحصائيات</a>
                <a href="#" class="nav-item" onclick="switchSection('bookings', event)"><span class="nav-icon"><i class="fa-solid fa-bell"></i></span> طلبات الحجز</a>
                <a href="#" class="nav-item" onclick="switchSection('calendar', event)"><span class="nav-icon"><i class="fa-solid fa-calendar-days"></i></span> تقويم المواعيد والتفرغ</a>
                <a href="#" class="nav-item" onclick="switchSection('monthly', event)"><span class="nav-icon"><i class="fa-solid fa-calendar-check"></i></span> حصص الشهر</a>
                <a href="#" class="nav-item" onclick="switchSection('students', event)"><span class="nav-icon"><i class="fa-solid fa-car"></i></span> متابعة المتدربين</a>
                <a href="#" class="nav-item" onclick="switchSection('finance', event)"><span class="nav-icon"><i class="fa-solid fa-wallet"></i></span> المالية والسحب</a>
                <a href="#" class="nav-item" onclick="switchSection('support', event)"><span class="nav-icon"><i class="fa-solid fa-clipboard-list"></i></span> الشكاوى والتقييمات</a>
                <a href="/" class="nav-item logout-item"><span class="nav-icon"><i class="fa-solid fa-right-from-bracket"></i></span> تسجيل الخروج</a>
            </nav>
        </aside>

        <!-- المحتوى الرئيسي -->
        <main class="main-content">

            <!-- 1️⃣ قسم الرئيسية والإحصائيات -->
            <section id="dashboard" class="app-section active-section">
                <header class="content-header">
                    <h1 class="page-title">أهلاً بك يا كابتن <i class="fa-solid fa-hands-clapping" style="color: #FE8511;"></i></h1>
                    <p class="subtitle">نظرة عامة على نشاطك الحصص والأرباح هذا اليوم</p>
                </header>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div style="color: #6C757D; font-size: 0.9rem;"><i class="fa-solid fa-sack-dollar" style="margin-left: 5px; color: #FE8511;"></i>إجمالي أرباح الشهر</div>
                        <div class="stat-value">2,450 ج.م</div>
                    </div>
                    <div class="stat-card">
                        <div style="color: #6C757D; font-size: 0.9rem;"><i class="fa-solid fa-circle-check" style="margin-left: 5px; color: #137333;"></i>الحصص المكتملة</div>
                        <div class="stat-value">18 حصة</div>
                    </div>
                    <div class="stat-card">
                        <div style="color: #6C757D; font-size: 0.9rem;"><i class="fa-solid fa-star" style="margin-left: 5px; color: #FE8511;"></i>التقييم العام</div>
                        <div class="stat-value" style="color: #FE8511;">⭐ 4.9</div>
                    </div>
                </div>

                <div class="otp-card">
                    <h3 class="card-title"><i class="fa-solid fa-thumbtack" style="margin-left: 8px; color: #FE8511;"></i>الحصص القادمة اليوم</h3>
                    <div class="booking-card">
                        <div>
                            <strong style="color: #0E216C; font-size: 1.1rem;"><i class="fa-solid fa-user-graduate" style="margin-left: 6px; color: #666;"></i>متدرب: أحمد محمود</strong>
                            <p style="color: #6C757D; font-size: 0.85rem; margin-top: 4px;"><i class="fa-regular fa-clock" style="margin-left: 4px;"></i>الموعد: اليوم، الساعة 04:00 عصراً | تدريب ركنات</p>
                        </div>
                        <span class="badge badge-success">مؤكد</span>
                    </div>
                </div>
            </section>

            <!-- 2️⃣ قسم طلبات الحجز -->
            <section id="bookings" class="app-section">
                <header class="content-header">
                    <h1 class="page-title">طلبات الحجز الواردة <i class="fa-solid fa-bell" style="color: #FE8511;"></i></h1>
                    <p class="subtitle">قم بقبول أو رفض طلبات الحجز الجديدة من المتدربين</p>
                </header>
                <div class="otp-card">
                    <div class="booking-card" id="bookingCard-101">
                        <div>
                            <strong style="color: #0E216C; font-size: 1.1rem;"><i class="fa-solid fa-user" style="margin-left: 6px; color: #666;"></i>المتدرب: محمود سعيد</strong>
                            <p style="color: #6C757D; font-size: 0.85rem; margin-top: 4px;"><i class="fa-regular fa-calendar" style="margin-left: 4px;"></i>الموعد المقترح: الإثنين - 04:00 عصراً</p>
                        </div>
                        <div class="action-btns">
                            <button class="btn-success" onclick="handleBookingAction(101, 'accept')"><i class="fa-solid fa-check" style="margin-left: 4px;"></i>قبول</button>
                            <button class="btn-danger" onclick="handleBookingAction(101, 'reject')"><i class="fa-solid fa-xmark" style="margin-left: 4px;"></i>رفض</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 3️⃣ قسم تقويم المواعيد والتفرغ -->
            <section id="calendar" class="app-section">
                <header class="content-header">
                    <h1 class="page-title">تقويم المواعيد وتحديد التفرغ الأسبوعي <i class="fa-solid fa-calendar-days" style="color: #FE8511;"></i></h1>
                    <p class="subtitle">حدد الأوقات التي تكون فيها فاضياً هذا الأسبوع باستخدام القوائم المنسدلة</p>
                </header>

                <div class="otp-card">
                    <h3 class="card-title"><i class="fa-regular fa-clock" style="margin-left: 8px; color: #FE8511;"></i>تحديد الأوقات والأيام المتاحة أسبوعياً</h3>
                    <form id="scheduleForm" onsubmit="addScheduleItem(event)">
                        <div class="form-grid-2">
                            <div class="form-group">
                                <label for="workDay">اختر اليوم:</label>
                                <select id="workDay" required>
                                    <option value="">-- اختر اليوم --</option>
                                    <option value="السبت">السبت</option>
                                    <option value="الأحد">الأحد</option>
                                    <option value="الإثنين">الإثنين</option>
                                    <option value="الثلاثاء">الثلاثاء</option>
                                    <option value="الأربعاء">الأربعاء</option>
                                    <option value="الخميس">الخميس</option>
                                    <option value="الجمعة">الجمعة</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="startTime">من الفترة:</label>
                                <select id="startTime" required>
                                    <option value="">-- من ساعة --</option>
                                    <option value="08:00 صباحاً">08:00 صباحاً</option>
                                    <option value="10:00 صباحاً">10:00 صباحاً</option>
                                    <option value="12:00 ظهراً">12:00 ظهراً</option>
                                    <option value="02:00 ظهراً">02:00 ظهراً</option>
                                    <option value="04:00 عصراً">04:00 عصراً</option>
                                    <option value="06:00 مساءً">06:00 مساءً</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="endTime">إلى الفترة:</label>
                                <select id="endTime" required>
                                    <option value="">-- إلى ساعة --</option>
                                    <option value="10:00 صباحاً">10:00 صباحاً</option>
                                    <option value="12:00 ظهراً">12:00 ظهراً</option>
                                    <option value="02:00 ظهراً">02:00 ظهراً</option>
                                    <option value="04:00 عصراً">04:00 عصراً</option>
                                    <option value="06:00 مساءً">06:00 مساءً</option>
                                    <option value="08:00 مساءً">08:00 مساءً</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary" style="margin-top: 1rem;"><i class="fa-solid fa-plus" style="margin-left: 6px;"></i>إضافة الموعد لقائمة الأوقات المتاحة</button>
                    </form>

                    <div style="margin-top: 1.5rem;">
                        <h4 style="color: #0E216C; margin-bottom: 0.8rem; font-size: 1rem;">الأوقات المتاحة الحالية خلال الأسبوع:</h4>
                        <div id="scheduleList">
                            <div style="background: #F8F9FA; padding: 0.8rem; border-radius: 6px; border-right: 4px solid #0E216C; display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                                <span><i class="fa-solid fa-circle-dot" style="color: #137333; margin-left: 8px;"></i>متاح يوم الأحد (من 02:00 ظهراً إلى 06:00 مساءً)</span>
                                <button style="background:none; border:none; color:#E74C3C; cursor:pointer;" onclick="this.parentElement.remove()"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4️⃣ قسم حصص الشهر -->
            <section id="monthly" class="app-section">
                <header class="content-header">
                    <h1 class="page-title">حصص الشهر <i class="fa-solid fa-calendar-check" style="color: #FE8511;"></i></h1>
                    <p class="subtitle">قائمة بجميع الحصص المجدولة والمكتملة خلال الشهر الحالي</p>
                </header>

                <div class="otp-card">
                    <h3 class="card-title"><i class="fa-solid fa-list-check" style="margin-left: 8px; color: #FE8511;"></i>سجل الحصص الشهرية</h3>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>التاريخ</th>
                                <th>اسم المتدرب</th>
                                <th>الوقت</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2026-07-06</td>
                                <td>أحمد محمود</td>
                                <td>04:00 عصراً</td>
                                <td><span class="badge badge-success"><i class="fa-solid fa-check" style="margin-left: 4px;"></i>تمت بنجاح</span></td>
                            </tr>
                            <tr>
                                <td>2026-07-10</td>
                                <td>محمد إبراهيم</td>
                                <td>02:00 ظهراً</td>
                                <td><span class="badge badge-info"><i class="fa-regular fa-clock" style="margin-left: 4px;"></i>مجدولة</span></td>
                            </tr>
                            <tr>
                                <td>2026-07-15</td>
                                <td>سارة خالد</td>
                                <td>06:00 مساءً</td>
                                <td><span class="badge badge-info"><i class="fa-regular fa-clock" style="margin-left: 4px;"></i>مجدولة</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- 5️⃣ قسم متابعة المتدربين -->
            <section id="students" class="app-section">
                <header class="content-header">
                    <h1 class="page-title">متابعة المتدربين <i class="fa-solid fa-car" style="color: #FE8511;"></i></h1>
                    <p class="subtitle">تقييم مستوى المتدربين وإنهاء الحصص</p>
                </header>
                <div class="otp-card">
                    <div class="booking-card" id="studentCard-1">
                        <div>
                            <strong><i class="fa-solid fa-user-graduate" style="margin-left: 6px; color: #666;"></i>أحمد محمود</strong>
                            <p style="color: #6C757D; font-size: 0.85rem;">المستوى الحالي: جيد جداً في التحكم</p>
                        </div>
                        <div class="session-action-area">
                            <button class="btn-primary" style="width: auto;" onclick="openSessionModal('أحمد محمود', 'studentCard-1')"><i class="fa-solid fa-flag-checkered" style="margin-left: 6px;"></i>إنهاء الحصة وتحديث المهارات</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 6️⃣ قسم المالية والسحب -->
            <section id="finance" class="app-section">
                <header class="content-header">
                    <h1 class="page-title">المالية والأرباح <i class="fa-solid fa-wallet" style="color: #FE8511;"></i></h1>
                    <p class="subtitle">إدارة رصيدك وطلب سحب الأرباح</p>
                </header>
                <div class="otp-card">
                    <h3 class="card-title"><i class="fa-solid fa-coins" style="margin-left: 8px; color: #FE8511;"></i>الرصيد المتاح: 2,450 ج.م</h3>
                    <button class="btn-primary" style="width: auto;" onclick="openPayoutModal(2450)"><i class="fa-solid fa-arrow-up-right-dots" style="margin-left: 6px;"></i>طلب سحب الأرباح</button>
                </div>
            </section>

            <!-- 7️⃣ قسم الشكاوى والتقييمات -->
            <section id="support" class="app-section">
                <header class="content-header">
                    <h1 class="page-title">الشكاوى والدعم <i class="fa-solid fa-clipboard-list" style="color: #FE8511;"></i></h1>
                    <p class="subtitle">التواصل مع الإدارة أو رفع تقرير عن مشكلة</p>
                </header>
                <div class="otp-card">
                    <button class="btn-primary" style="width: auto; background-color: #D93025;" onclick="openSupportModal()"><i class="fa-solid fa-triangle-exclamation" style="margin-left: 6px;"></i>تقديم شكوى ضد متدرب</button>
                    <!-- مكان عرض تفاصيل الشكوى التي تم إرسالها -->
                    <div id="supportCardContainer" style="margin-top: 15px;"></div>
                </div>
            </section>

        </main>
    </div>

    <!-- نافذة عامة في منتصف الصفحة (Modal Overlay) لكافة التفاعلات -->
    <div id="universalModal" class="center-modal-overlay">
        <div class="center-modal-card" id="universalModalContent">
            <!-- سيتم تعبئة محتوى الكارد ديناميكياً عبر الجافاسكريبت -->
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

    <script>
        // التنقل بين الأقسام
        function switchSection(sectionId, event) {
            event.preventDefault();
            document.querySelectorAll('.app-section').forEach(sec => sec.classList.remove('active-section'));
            document.querySelectorAll('.sidebar-nav .nav-item').forEach(item => item.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active-section');
            event.currentTarget.classList.add('active');
        }

        // التحكم بالنافذة المنبثقة (Modal)
        function showModal(htmlContent) {
            const modal = document.getElementById('universalModal');
            const content = document.getElementById('universalModalContent');
            content.innerHTML = htmlContent;
            modal.style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('universalModal').style.display = 'none';
        }

        // 1. التعامل مع طلبات الحجز (قبول/رفض)
        function handleBookingAction(id, action) {
            const card = document.getElementById(`bookingCard-${id}`);
            if (action === 'accept') {
                card.innerHTML = `<div style="color: #137333; font-weight: bold;"><i class="fa-solid fa-circle-check"></i> تم قبول طلب الحجز بنجاح!</div>`;
            } else {
                card.innerHTML = `<div style="color: #D93025; font-weight: bold;"><i class="fa-solid fa-circle-xmark"></i> تم رفض الطلب.</div>`;
            }
        }

        // 2. إضافة جدول التفرغ
        function addScheduleItem(e) {
            e.preventDefault();
            const day = document.getElementById('workDay').value;
            const start = document.getElementById('startTime').value;
            const end = document.getElementById('endTime').value;

            const list = document.getElementById('scheduleList');
            const newItem = document.createElement('div');
            newItem.style.cssText = "background: #F8F9FA; padding: 0.8rem; border-radius: 6px; border-right: 4px solid #0E216C; display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;";
            newItem.innerHTML = `
                <span><i class="fa-solid fa-circle-dot" style="color: #137333; margin-left: 8px;"></i>متاح يوم ${day} (من ${start} إلى ${end})</span>
                <button style="background:none; border:none; color:#E74C3C; cursor:pointer;" onclick="this.parentElement.remove()"><i class="fa-solid fa-trash-can"></i></button>
            `;
            list.appendChild(newItem);
            document.getElementById('scheduleForm').reset();
        }

        // 3. إنهاء الحصة
        function openSessionModal(studentName, cardId) {
            const html = `
                <h3 style="color: #0E216C; margin-bottom: 1rem;">إنهاء حصة المتدرب: ${studentName}</h3>
                <div class="form-group" style="margin-bottom: 1rem;">
                    <label>تقييم الأداء:</label>
                    <select id="sessionRating" style="width:100%; padding: 8px; border-radius:6px; border:1px solid #ccc;">
                        <option value="ممتاز">ممتاز</option>
                        <option value="جيد جداً">جيد جداً</option>
                        <option value="يحتاج ممارسة أكثر">يحتاج ممارسة أكثر</option>
                    </select>
                </div>
                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                    <button class="btn-primary" onclick="confirmEndSession('${cardId}')">تأكيد الإنهاء</button>
                    <button onclick="closeModal()" style="padding: 8px 15px; border:none; border-radius:6px; cursor:pointer;">إلغاء</button>
                </div>
            `;
            showModal(html);
        }

        function confirmEndSession(cardId) {
            closeModal();
            document.getElementById(cardId).innerHTML = `<div style="color: #137333; font-weight: bold;"><i class="fa-solid fa-circle-check"></i> تم إنهاء الحصة وتحديث التقييم بنجاح.</div>`;
        }

        // 4. طلب سحب الأرباح
        function openPayoutModal(amount) {
            const html = `
                <h3 style="color: #0E216C; margin-bottom: 1rem;">طلب سحب الأرباح</h3>
                <p>الرصيد المتاح للسحب: <strong>${amount} ج.م</strong></p>
                <div class="form-group" style="margin: 1rem 0;">
                    <label>طريقة السحب:</label>
                    <select style="width:100%; padding: 8px; border-radius:6px; border:1px solid #ccc;">
                        <option>محفظة إلكترونية (فودافون كاش / أورنج / اتصالات)</option>
                        <option>حساب بنكي</option>
                    </select>
                </div>
                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                    <button class="btn-primary" onclick="confirmPayout()">إرسال الطلب</button>
                    <button onclick="closeModal()" style="padding: 8px 15px; border:none; border-radius:6px; cursor:pointer;">إلغاء</button>
                </div>
            `;
            showModal(html);
        }

        function confirmPayout() {
            closeModal();
            alert('تم تقديم طلب سحب الأرباح بنجاح، وسيتم تحويل المبلغ خلال 24 ساعة.');
        }

        // 5. تقديم شكوى
        function openSupportModal() {
            const html = `
                <h3 style="color: #D93025; margin-bottom: 1rem;">تقديم شكوى / تقرير</h3>
                <div class="form-group" style="margin-bottom: 1rem;">
                    <label>تفاصيل المشكلة:</label>
                    <textarea id="complaintText" rows="4" style="width:100%; padding:8px; border-radius:6px; border:1px solid #ccc;" placeholder="اكتب تفاصيل الشكوى هنا..."></textarea>
                </div>
                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                    <button class="btn-primary" style="background-color:#D93025;" onclick="submitComplaint()">إرسال الشكوى</button>
                    <button onclick="closeModal()" style="padding: 8px 15px; border:none; border-radius:6px; cursor:pointer;">إلغاء</button>
                </div>
            `;
            showModal(html);
        }

        function submitComplaint() {
            const text = document.getElementById('complaintText').value;
            if(!text) return;
            closeModal();
            document.getElementById('supportCardContainer').innerHTML = `
                <div style="background: #FDEDEC; border-right: 4px solid #D93025; padding: 1rem; border-radius: 6px; margin-top: 10px;">
                    <strong style="color: #D93025;">تم إرسال الشكوى للادارة:</strong>
                    <p style="margin: 5px 0 0 0; font-size: 0.9rem;">${text}</p>
                </div>
            `;
        }
    </script>
    <script src="{{ asset('js/captain.js') }}"></script>
</body>
</html>
