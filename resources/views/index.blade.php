<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سُوقْنِي - لوحة التحكم الشاملة</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
</head>
<body class="bg-gray-100 font-sans text-gray-900 m-0 overflow-x-hidden" style="font-family: 'Cairo', sans-serif;">

    <!-- القائمة الجانبية (Sidebar) -->
    <div class="sidebar fixed top-0 right-0 h-full w-72 bg-[#0E216C] text-white flex flex-col justify-between border-l border-white/10 z-30 select-none">
        <div>
            <div class="logo p-6 border-b border-white/10 flex items-center justify-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('logo.jpeg') }}" alt="لوجو سَوَّقْنِي" class="logo-imgadmin h-16 w-16 object-contain bg-white p-2 rounded-2xl shadow-md">
                </a>
            </div>

            <nav class="p-4 space-y-1.5 text-sm font-semibold">
                <a href="#" onclick="switchTab(this, 'الرئيسية والإحصائيات', 'content-home')" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-2xl bg-[#FE8511] text-white shadow-md transition"><i class="fa-solid fa-chart-pie w-5 text-center"></i> الرئيسية والإحصائيات</a>
                <a href="#" onclick="switchTab(this, 'توثيق الكباتن', 'content-captains')" class="nav-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition"><i class="fa-solid fa-user-gear w-5 text-center"></i> توثيق الكباتن</a>
                <a href="#" onclick="switchTab(this, 'الباقات والأسعار', 'content-packages')" class="nav-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition"><i class="fa-solid fa-box-archive w-5 text-center"></i> الباقات والأسعار</a>
                <a href="#" onclick="switchTab(this, 'الحجوزات والمواعيد', 'content-bookings')" class="nav-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition"><i class="fa-regular fa-calendar-check w-5 text-center"></i> الحجوزات والمواعيد</a>
                <a href="#" onclick="switchTab(this, 'الشكاوى والدعم', 'content-support')" class="nav-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition"><i class="fa-regular fa-clipboard w-5 text-center"></i> الشكاوى والدعم</a>
                <a href="#" onclick="switchTab(this, 'المالية والسحب', 'content-finance')" class="nav-link flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition"><i class="fa-solid fa-wallet w-5 text-center"></i> المالية والسحب</a>
            </nav>
        </div>

        <div class="p-4 border-t border-white/10">
            <a href="#" onclick="openActionModal('logout'); return false;" class="logout-btn flex items-center justify-center gap-2 px-4 py-3 rounded-2xl text-red-400 hover:bg-red-500/10 hover:text-red-300 font-bold transition text-sm">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> تسجيل الخروج
            </a>
        </div>
    </div>

    <!-- المحتوى الرئيسي (Main Content) -->
    <div class="main-content mr-72 p-6 md:p-8 min-h-screen flex flex-col justify-between">
        <div>
            <!-- الهيدر -->
            <div class="flex justify-between items-center mb-8 bg-white p-5 px-8 rounded-3xl shadow-sm border border-gray-100">
                <div>
                    <h1 id="pageTitle" class="text-xl font-black text-[#0E216C]">لوحة التحكم والإحصائيات</h1>
                    <p class="text-gray-400 text-xs mt-1">نظرة عامة مفصلة على نشاط المنصة والحجوزات اليومية والأسطول</p>
                </div>
                <div class="bg-emerald-50 text-emerald-700 border border-emerald-200 px-4 py-2 rounded-full text-xs font-extrabold flex items-center gap-2 shadow-sm">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span> النظام يعمل بكفاءة
                </div>
            </div>

            <!-- محتويات التبويبات المتغيرة -->
            <div id="tabContentContainer">

                <!-- 1. الرئيسية والإحصائيات -->
                <div class="tab-pane" id="content-home">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex justify-between items-center">
                            <div>
                                <h3 class="text-gray-400 text-xs font-bold mb-1">إجمالي الكباتن</h3>
                                <span id="stat-captains-count" class="text-3xl font-black text-[#0E216C]">128</span>
                                <p class="text-emerald-600 text-[11px] font-bold mt-1">+12 هذا الشهر</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-50 text-[#0E216C] rounded-2xl flex items-center justify-center text-xl"><i class="fa-solid fa-users"></i></div>
                        </div>
                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex justify-between items-center">
                            <div>
                                <h3 class="text-gray-400 text-xs font-bold mb-1">الحجوزات النشطة</h3>
                                <span class="text-3xl font-black text-[#0E216C]">45</span>
                                <p class="text-[#FE8511] text-[11px] font-bold mt-1">تجري حالياً</p>
                            </div>
                            <div class="w-12 h-12 bg-orange-50 text-[#FE8511] rounded-2xl flex items-center justify-center text-xl"><i class="fa-solid fa-calendar-check"></i></div>
                        </div>
                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex justify-between items-center">
                            <div>
                                <h3 class="text-gray-400 text-xs font-bold mb-1">طلبات التوثيق المعلقة</h3>
                                <span id="stat-pending-count" class="text-3xl font-black text-[#0E216C]">2</span>
                                <p class="text-amber-500 text-[11px] font-bold mt-1">تتطلب مراجعة</p>
                            </div>
                            <div class="w-12 h-12 bg-amber-50 text-amber-500 rounded-2xl flex items-center justify-center text-xl"><i class="fa-solid fa-user-clock"></i></div>
                        </div>
                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex justify-between items-center">
                            <div>
                                <h3 class="text-gray-400 text-xs font-bold mb-1">أرباح الشهر</h3>
                                <span class="text-3xl font-black text-[#0E216C]">24,500</span>
                                <p class="text-purple-600 text-[11px] font-bold mt-1">ج.م (نمو 15%)</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center text-xl"><i class="fa-solid fa-wallet"></i></div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-lg font-black text-[#0E216C]">أحدث الحجوزات التفصيلية</h2>
                                <p class="text-gray-400 text-xs mt-0.5">متابعة فورية لأحدث طلبات التدريب والعملاء</p>
                            </div>
                            <button onclick="openActionModal('newBooking')" style="background-color: #FE8511;" class="text-white px-4 py-2.5 rounded-2xl font-bold text-xs shadow-md hover:opacity-90 transition flex items-center gap-2">
                                <i class="fa-solid fa-plus"></i> إضافة حجز جديد
                            </button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-right text-xs">
                                <thead class="bg-gray-50 text-gray-500 border-b border-gray-100">
                                    <tr>
                                        <th class="p-3.5 font-bold">رقم الطلب</th>
                                        <th class="p-3.5 font-bold">اسم العميل</th>
                                        <th class="p-3.5 font-bold">الكابتن المسؤول</th>
                                        <th class="p-3.5 font-bold">الباقة المختارة</th>
                                        <th class="p-3.5 font-bold">الحالة</th>
                                        <th class="p-3.5 font-bold text-center">الإجراءات التفاعلية</th>
                                    </tr>
                                </thead>
                                <tbody id="home-bookings-table" class="divide-y divide-gray-100 font-medium text-gray-700">
                                    <tr id="row-ORD-1024">
                                        <td class="p-3.5 font-bold text-[#0E216C]">#ORD-1024</td>
                                        <td class="p-3.5">سارة أحمد</td>
                                        <td class="p-3.5">محمود علي</td>
                                        <td class="p-3.5">باقة 10 حصص (أوتوماتيك)</td>
                                        <td class="p-3.5"><span class="bg-emerald-50 text-emerald-600 px-3 py-1 rounded-xl font-bold">مؤكد</span></td>
                                        <td class="p-3.5 text-center flex items-center justify-center gap-2">
                                            <button onclick="openActionModal('viewDetails', '#ORD-1024')" class="bg-blue-50 text-blue-600 px-3 py-1.5 rounded-xl font-bold hover:bg-blue-100 transition">عرض</button>
                                            <button onclick="openActionModal('editBooking', '#ORD-1024')" class="bg-amber-50 text-amber-600 px-3 py-1.5 rounded-xl font-bold hover:bg-amber-100 transition">تعديل</button>
                                        </td>
                                    </tr>
                                    <tr id="row-ORD-1025">
                                        <td class="p-3.5 font-bold text-[#0E216C]">#ORD-1025</td>
                                        <td class="p-3.5">عمر خالد</td>
                                        <td class="p-3.5 text-orange-500 captain-cell">كابتن قيد التعيين</td>
                                        <td class="p-3.5">باقة 5 حصص (مانيوال)</td>
                                        <td class="p-3.5 status-cell"><span class="bg-amber-50 text-amber-600 px-3 py-1 rounded-xl font-bold">قيد الانتظار</span></td>
                                        <td class="p-3.5 text-center flex items-center justify-center gap-2 actions-cell">
                                            <button onclick="openActionModal('assignCaptain', '#ORD-1025')" class="bg-[#FE8511] text-white px-3 py-1.5 rounded-xl font-bold hover:opacity-90 transition">تعيين كابتن</button>
                                            <button onclick="openActionModal('cancelOrder', '#ORD-1025')" class="bg-red-50 text-red-600 px-3 py-1.5 rounded-xl font-bold hover:bg-red-100 transition">إلغاء</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- 2. توثيق الكباتن -->
                <div class="tab-pane hidden" id="content-captains">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-lg font-black text-[#0E216C]">إدارة وتوثيق الكباتن والأسطول</h2>
                                <p class="text-gray-400 text-xs mt-0.5">مراجعة المستندات والبطاقات الشخصية ورخص القيادة</p>
                            </div>
                            <button onclick="openActionModal('addCaptain')" style="background-color: #FE8511;" class="text-white px-4 py-2.5 rounded-2xl font-bold text-xs shadow-md hover:opacity-90 transition flex items-center gap-2">
                                <i class="fa-solid fa-user-plus"></i> إضافة كابتن جديد
                            </button>
                        </div>
                        <div id="captains-list-container" class="space-y-4">
                            <div id="captain-card-1" class="p-5 bg-gray-50 rounded-2xl border border-gray-200 flex flex-col sm:flex-row justify-between items-center gap-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-blue-100 text-[#0E216C] rounded-2xl flex items-center justify-center font-bold text-lg">م ع</div>
                                    <div>
                                        <h4 class="font-bold text-[#0E216C] text-sm">محمد عبد الله السيد</h4>
                                        <p class="text-gray-400 text-xs">رخصة قيادة مهنية • سيارة هيونداي النترا 2023 • تقييم (4.9)</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 captain-actions">
                                    <button onclick="verifyCaptainAction('captain-card-1', 'محمد عبد الله')" class="bg-emerald-600 text-white px-4 py-2 rounded-xl font-bold text-xs shadow hover:bg-emerald-700 transition">قبول وتوثيق</button>
                                    <button onclick="rejectCaptainAction('captain-card-1', 'محمد عبد الله')" class="bg-red-50 text-red-600 px-4 py-2 rounded-xl font-bold text-xs hover:bg-red-100 transition">رفض الطلب</button>
                                </div>
                            </div>
                            <div id="captain-card-2" class="p-5 bg-gray-50 rounded-2xl border border-gray-200 flex flex-col sm:flex-row justify-between items-center gap-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-purple-100 text-purple-700 rounded-2xl flex items-center justify-center font-bold text-lg">أ ح</div>
                                    <div>
                                        <h4 class="font-bold text-[#0E216C] text-sm">أحمد حسن إبراهيم</h4>
                                        <p class="text-gray-400 text-xs">رخصة قيادة خاصة • سيارة شيفروليه أوبترا 2022 • تقييم (4.7)</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 captain-actions">
                                    <button onclick="verifyCaptainAction('captain-card-2', 'أحمد حسن')" class="bg-emerald-600 text-white px-4 py-2 rounded-xl font-bold text-xs shadow hover:bg-emerald-700 transition">قبول وتوثيق</button>
                                    <button onclick="rejectCaptainAction('captain-card-2', 'أحمد حسن')" class="bg-red-50 text-red-600 px-4 py-2 rounded-xl font-bold text-xs hover:bg-red-100 transition">رفض الطلب</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. الباقات والأسعار -->
                <div class="tab-pane hidden" id="content-packages">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-lg font-black text-[#0E216C]">إدارة الباقات والأسعار التدريبية</h2>
                                <p class="text-gray-400 text-xs mt-0.5">تعديل أسعار الحصص والباقات المتاحة للمستخدمين مع إمكانية إضافة باقات مخصصة بالكامل</p>
                            </div>
                            <button onclick="openActionModal('newPackage')" style="background-color: #FE8511;" class="text-white px-4 py-2.5 rounded-2xl font-bold text-xs shadow-md hover:opacity-90 transition flex items-center gap-2">
                                <i class="fa-solid fa-plus"></i> إضافة باقة جديدة مخصصة
                            </button>
                        </div>
                        <div id="packages-grid" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="p-6 bg-gray-50 rounded-3xl border border-gray-200 flex flex-col justify-between" id="pkg-1">
                                <div>
                                    <span class="bg-blue-100 text-[#0E216C] text-xs font-bold px-3 py-1 rounded-full">باقة المبتدئين</span>
                                    <h3 class="text-2xl font-black text-[#0E216C] mt-3 mb-1"><span class="pkg-name">5 حصص تدريبية</span></h3>
                                    <p class="text-[#FE8511] font-bold text-lg mb-4"><span class="pkg-price">1,200</span> ج.م</p>
                                    <ul class="text-gray-500 text-xs space-y-2 mb-6">
                                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> تعلم أساسيات القيادة والتحكم</li>
                                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> اختيار الكابتن المناسب</li>
                                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> دعم فني ومتابعة مستمرة</li>
                                    </ul>
                                </div>
                                <button onclick="openActionModal('editPackage', 'باقة المبتدئين', '1,200', 'pkg-1')" class="w-full bg-[#0E216C] text-white py-3 rounded-2xl font-bold text-xs shadow hover:opacity-90 transition">تعديل الباقة</button>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-3xl border-2 border-[#FE8511] flex flex-col justify-between relative shadow-sm" id="pkg-2">
                                <span class="absolute top-4 left-4 bg-[#FE8511] text-white text-[10px] font-bold px-3 py-1 rounded-full">الأكثر طلباً</span>
                                <div>
                                    <span class="bg-orange-100 text-[#FE8511] text-xs font-bold px-3 py-1 rounded-full">باقة الاحتراف</span>
                                    <h3 class="text-2xl font-black text-[#0E216C] mt-3 mb-1"><span class="pkg-name">10 حصص تدريبية</span></h3>
                                    <p class="text-[#FE8511] font-bold text-lg mb-4"><span class="pkg-price">2,200</span> ج.م</p>
                                    <ul class="text-gray-500 text-xs space-y-2 mb-6">
                                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> احتراف الركنات والشارع المزدحم</li>
                                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> ضمان اجتياز اختبار المرور بنجاح</li>
                                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> مرونة كاملة في اختيار المواعيد</li>
                                    </ul>
                                </div>
                                <button onclick="openActionModal('editPackage', 'باقة الاحتراف', '2,200', 'pkg-2')" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold text-xs shadow hover:opacity-90 transition">تعديل الباقة</button>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-3xl border border-gray-200 flex flex-col justify-between" id="pkg-3">
                                <div>
                                    <span class="bg-purple-100 text-purple-700 text-xs font-bold px-3 py-1 rounded-full">الباقة الملكية</span>
                                    <h3 class="text-2xl font-black text-[#0E216C] mt-3 mb-1"><span class="pkg-name">15 حصة VIP</span></h3>
                                    <p class="text-[#FE8511] font-bold text-lg mb-4"><span class="pkg-price">3,500</span> ج.م</p>
                                    <ul class="text-gray-500 text-xs space-y-2 mb-6">
                                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> تدريب مكثف حتى الاستخراج الشامل</li>
                                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> أولوية الحجز والمتابعة الخاصة</li>
                                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> سيارة حديثة أوتوماتيك أو مانيوال</li>
                                    </ul>
                                </div>
                                <button onclick="openActionModal('editPackage', 'الباقة الملكية', '3,500', 'pkg-3')" class="w-full bg-[#0E216C] text-white py-3 rounded-2xl font-bold text-xs shadow hover:opacity-90 transition">تعديل الباقة</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. الحجوزات والمواعيد -->
                <div class="tab-pane hidden" id="content-bookings">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-lg font-black text-[#0E216C]">جدول الحجوزات والمواعيد اليومية الشاملة</h2>
                                <p class="text-gray-400 text-xs mt-0.5">عرض مواعيد الكباتن والمتدربين مع توضيح تبعية الكابتن (مدرسة / فري لانس)</p>
                            </div>
                            <button onclick="openActionModal('newSchedule')" style="background-color: #FE8511;" class="text-white px-4 py-2.5 rounded-2xl font-bold text-xs shadow-md hover:opacity-90 transition flex items-center gap-2">
                                <i class="fa-solid fa-calendar-plus"></i> جدولة حصة جديدة
                            </button>
                        </div>
                        <div class="space-y-3" id="schedules-container">
                            <div class="p-4 bg-gray-50 rounded-2xl border border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <h4 class="font-bold text-[#0E216C] text-sm">الحصة رقم 3 للمتدرب: كريم محمود</h4>
                                        <span class="bg-emerald-100 text-emerald-700 text-[10px] font-extrabold px-2.5 py-0.5 rounded-full">تابعة للمدرسة</span>
                                    </div>
                                    <p class="text-gray-400 text-xs">الكابتن: سامح مرسي • موعد الحصة: اليوم الساعة 04:00 عصراً</p>
                                </div>
                                <button onclick="openActionModal('reschedule', 'كريم محمود')" class="bg-blue-50 text-blue-600 px-4 py-2 rounded-xl font-bold text-xs hover:bg-blue-100 transition">تعديل الموعد</button>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-2xl border border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <h4 class="font-bold text-[#0E216C] text-sm">الحصة رقم 1 للمتدربة: مريم الشريف</h4>
                                        <span class="bg-purple-100 text-purple-700 text-[10px] font-extrabold px-2.5 py-0.5 rounded-full">كابتن فري لانس</span>
                                    </div>
                                    <p class="text-gray-400 text-xs">الكابتن: محمود علي • موعد الحصة: غداً الساعة 10:00 صباحاً</p>
                                </div>
                                <button onclick="openActionModal('reschedule', 'مريم الشريف')" class="bg-blue-50 text-blue-600 px-4 py-2 rounded-xl font-bold text-xs hover:bg-blue-100 transition">تعديل الموعد</button>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-2xl border border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <h4 class="font-bold text-[#0E216C] text-sm">الحصة رقم 5 للمتدرب: إبراهيم ناصر</h4>
                                        <span class="bg-emerald-100 text-emerald-700 text-[10px] font-extrabold px-2.5 py-0.5 rounded-full">تابعة للمدرسة</span>
                                    </div>
                                    <p class="text-gray-400 text-xs">الكابتن: سعيد صالح • موعد الحصة: غداً الساعة 02:00 ظهراً</p>
                                </div>
                                <button onclick="openActionModal('reschedule', 'إبراهيم ناصر')" class="bg-blue-50 text-blue-600 px-4 py-2 rounded-xl font-bold text-xs hover:bg-blue-100 transition">تعديل الموعد</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. الشكاوى والدعم -->
                <div class="tab-pane hidden" id="content-support">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-lg font-black text-[#0E216C]">شكاوى العملاء وطلبات الدعم الفني الشاملة</h2>
                                <p class="text-gray-400 text-xs mt-0.5">سجل كامل ومتجدد لجميع استفسارات وشكاوى العملاء والكباتن لضمان جودة الخدمة</p>
                            </div>
                            <button onclick="openActionModal('newTicket')" style="background-color: #FE8511;" class="text-white px-4 py-2.5 rounded-2xl font-bold text-xs shadow-md hover:opacity-90 transition flex items-center gap-2">
                                <i class="fa-solid fa-headset"></i> إضافة تذكرة دعم
                            </button>
                        </div>
                        <div class="space-y-3" id="support-tickets-container">
                            <div class="p-4 bg-gray-50 rounded-2xl border border-gray-200 flex justify-between items-center">
                                <div>
                                    <span class="bg-amber-100 text-amber-700 text-[10px] font-bold px-2.5 py-0.5 rounded-full">قيد المعالجة</span>
                                    <h4 class="font-bold text-[#0E216C] text-sm mt-1">مشكلة في استلام الأرباح الأسبوعية للكابتن</h4>
                                    <p class="text-gray-400 text-xs">المشتكي: كابتن أحمد حسن (فري لانس) • منذ ساعتين</p>
                                </div>
                                <button onclick="openActionModal('replyTicket', 'مشكلة الأرباح')" class="bg-[#FE8511] text-white px-4 py-2 rounded-xl font-bold text-xs shadow hover:opacity-90 transition">الرد والحل</button>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-2xl border border-gray-200 flex justify-between items-center">
                                <div>
                                    <span class="bg-emerald-100 text-emerald-700 text-[10px] font-bold px-2.5 py-0.5 rounded-full">تم الحل</span>
                                    <h4 class="font-bold text-[#0E216C] text-sm mt-1">تغيير موعد الحصة التدريبية بسبب ظرف طارئ</h4>
                                    <p class="text-gray-400 text-xs">المشتكي: العميل رامي علام • منذ 5 ساعات</p>
                                </div>
                                <button onclick="openActionModal('replyTicket', 'تغيير الموعد')" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-xl font-bold text-xs hover:bg-gray-300 transition">عرض التفاصيل</button>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-2xl border border-gray-200 flex justify-between items-center">
                                <div>
                                    <span class="bg-amber-100 text-amber-700 text-[10px] font-bold px-2.5 py-0.5 rounded-full">قيد المعالجة</span>
                                    <h4 class="font-bold text-[#0E216C] text-sm mt-1">استفسار حول خصومات باقة الاحتراف وسداد الرسوم</h4>
                                    <p class="text-gray-400 text-xs">المشتكي: العميل ندى فؤاد • منذ يوم أمس</p>
                                </div>
                                <button onclick="openActionModal('replyTicket', 'استفسار الرسوم')" class="bg-[#FE8511] text-white px-4 py-2 rounded-xl font-bold text-xs shadow hover:opacity-90 transition">الرد والحل</button>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-2xl border border-gray-200 flex justify-between items-center">
                                <div>
                                    <span class="bg-emerald-100 text-emerald-700 text-[10px] font-bold px-2.5 py-0.5 rounded-full">تم الحل</span>
                                    <h4 class="font-bold text-[#0E216C] text-sm mt-1">تحديث بيانات السيارة ورخصة القيادة المهنية</h4>
                                    <p class="text-gray-400 text-xs">المشتكي: كابتن سامح مرسي (مدرسة) • منذ يومين</p>
                                </div>
                                <button onclick="openActionModal('replyTicket', 'تحديث البيانات')" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-xl font-bold text-xs hover:bg-gray-300 transition">عرض التفاصيل</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. المالية والسحب -->
                <div class="tab-pane hidden" id="content-finance">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-8">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                            <div>
                                <h2 class="text-lg font-black text-[#0E216C]">المالية وعمليات السحب وإيرادات الكباتن والمدارس</h2>
                                <p class="text-gray-400 text-xs mt-0.5">فلترة الأرباح حسب الفترة الزمنية (يوم، أسبوع، شهر) وتتبع إيرادات الأسطول بالكامل</p>
                            </div>
                            <div class="flex items-center gap-2 bg-gray-100 p-1.5 rounded-2xl">
                                <button onclick="filterFinance('day', this)" class="finance-filter-btn px-4 py-2 rounded-xl text-xs font-bold bg-white text-[#0E216C] shadow-sm transition">اليوم</button>
                                <button onclick="filterFinance('week', this)" class="finance-filter-btn px-4 py-2 rounded-xl text-xs font-bold text-gray-500 hover:text-[#0E216C] transition">الأسبوع</button>
                                <button onclick="filterFinance('month', this)" class="finance-filter-btn px-4 py-2 rounded-xl text-xs font-bold text-gray-500 hover:text-[#0E216C] transition">الشهر</button>
                            </div>
                        </div>

                        <!-- كروت الإحصاءات المالية المحدثة ديناميكياً -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                            <div class="p-6 bg-gray-50 rounded-2xl border border-gray-200">
                                <h3 class="text-gray-400 text-xs font-bold mb-1">إجمالي إيرادات الكباتن والمدارس</h3>
                                <span id="fin-total-revenue" class="text-2xl font-black text-[#0E216C]">24,500 ج.م</span>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-2xl border border-gray-200">
                                <h3 class="text-gray-400 text-xs font-bold mb-1">الرصيد المتاح للسحب</h3>
                                <span id="fin-available" class="text-2xl font-black text-emerald-600">18,400 ج.م</span>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-2xl border border-gray-200">
                                <h3 class="text-gray-400 text-xs font-bold mb-1">المبالغ المعلقة</h3>
                                <span id="fin-pending" class="text-2xl font-black text-amber-500">6,100 ج.م</span>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-2xl border border-gray-200 flex flex-col justify-between">
                                <h3 class="text-gray-400 text-xs font-bold mb-1">طلب سحب رصيد</h3>
                                <button onclick="openActionModal('requestPayout')" style="background-color: #FE8511;" class="w-full text-white py-2 rounded-xl font-bold text-xs shadow hover:opacity-90 transition mt-2">سحب الأرباح الآن</button>
                            </div>
                        </div>

                        <!-- جدول تفصيلي لإيرادات الكباتن والمدارس -->
                        <div class="bg-gray-50 p-6 rounded-3xl border border-gray-200">
                            <h3 class="text-base font-black text-[#0E216C] mb-4">تفاصيل إيرادات الكباتن والمدارس المسجلة</h3>
                            <div class="overflow-x-auto">
                                <table class="w-full text-right text-xs">
                                    <thead class="bg-white text-gray-500 border-b border-gray-200">
                                        <tr>
                                            <th class="p-3 font-bold">اسم الكابتن / الجهة</th>
                                            <th class="p-3 font-bold">نوع التبعية</th>
                                            <th class="p-3 font-bold">عدد الحصص المنفذة</th>
                                            <th class="p-3 font-bold">إجمالي الإيراد المحقق</th>
                                            <th class="p-3 font-bold">حالة الأرباح</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 font-medium text-gray-700 bg-white">
                                        <tr>
                                            <td class="p-3 font-bold text-[#0E216C]">كابتن/ سامح مرسي</td>
                                            <td class="p-3"><span class="bg-emerald-100 text-emerald-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">تابعة للمدرسة</span></td>
                                            <td class="p-3">18 حصة</td>
                                            <td class="p-3 font-bold text-emerald-600">4,500 ج.م</td>
                                            <td class="p-3">تم التحويل</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3 font-bold text-[#0E216C]">كابتن/ محمود علي</td>
                                            <td class="p-3"><span class="bg-purple-100 text-purple-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">فري لانس</span></td>
                                            <td class="p-3">22 حصة</td>
                                            <td class="p-3 font-bold text-emerald-600">5,800 ج.م</td>
                                            <td class="p-3">متاح للسحب</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3 font-bold text-[#0E216C]">كابتن/ سعيد صالح</td>
                                            <td class="p-3"><span class="bg-emerald-100 text-emerald-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">تابعة للمدرسة</span></td>
                                            <td class="p-3">14 حصة</td>
                                            <td class="p-3 font-bold text-emerald-600">3,600 ج.م</td>
                                            <td class="p-3">قيد المعالجة</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- الفوتر -->
        <div class="text-center py-6 text-gray-400 text-xs border-t border-gray-200 mt-12">
            جميع الحقوق المحفوظة لمنصة سُوقْنِي للقيادة الذكية © 2026
        </div>
    </div>

    <!-- زر المساعد الذكي (AI Chatbot Button) -->
    <a href="#" onclick="openActionModal('chatbotModal'); return false;" class="ai-chatbot-btn fixed bottom-6 left-6 bg-[#FE8511] text-white p-4 rounded-full shadow-2xl flex items-center gap-3 z-45 hover:scale-105 transition duration-300 select-none" title="تحدث مع مساعد سوقني الذكي">
        <div class="chatbot-icon flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 8V4H8"></path>
                <rect width="16" height="12" x="4" y="8" rx="2"></rect>
                <path d="M2 14h2"></path>
                <path d="M20 14h2"></path>
                <path d="M15 13v2"></path>
                <path d="M9 13v2"></path>
            </svg>
        </div>
        <span class="chatbot-text font-bold text-xs pr-1">المساعد الذكي</span>
    </a>

    <!-- نافذة منبثقة تفاعلية موحدة (Modal) لجميع أزرار الموقع -->
    <div id="actionModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 items-center justify-center p-4 hidden">
        <div class="max-w-md w-full bg-white rounded-3xl p-6 shadow-2xl relative text-right">
            <button onclick="closeActionModal()" class="absolute top-4 left-4 text-gray-400 hover:text-gray-600 text-2xl font-bold">&times;</button>
            <div id="modalBody">
                <!-- المحتوى الديناميكي -->
            </div>
        </div>
    </div>

    <script src="{{ asset('Script.js') }}"></script>
    <script>
        // دالة التنقل بين التبويبات في لوحة التحكم
        function switchTab(element, tabName, contentId) {
            const links = document.querySelectorAll('.sidebar nav a');
            links.forEach(link => {
                link.classList.remove('bg-[#FE8511]', 'text-white', 'shadow-md');
                link.classList.add('text-gray-300');
            });
            element.classList.add('bg-[#FE8511]', 'text-white', 'shadow-md');
            element.classList.remove('text-gray-300');

            document.getElementById('pageTitle').innerText = tabName;

            const panes = document.querySelectorAll('.tab-pane');
            panes.forEach(pane => pane.classList.add('hidden'));
            
            const targetPane = document.getElementById(contentId);
            if (targetPane) {
                targetPane.classList.remove('hidden');
            }
        }

        // توثيق كابتن من صفحة توثيق الكباتن وتحديث الصفحة فوراً
        function verifyCaptainAction(cardId, captainName) {
            const card = document.getElementById(cardId);
            if(card) {
                const actionsDiv = card.querySelector('.captain-actions');
                actionsDiv.innerHTML = '<span class="bg-emerald-50 text-emerald-600 px-3 py-1.5 rounded-xl font-bold text-xs"><i class="fa-solid fa-check ml-1"></i> تم التوثيق بنجاح</span>';
                card.classList.remove('border-gray-200', 'bg-gray-50');
                card.classList.add('border-emerald-200', 'bg-emerald-50/30');
            }
            // تحديث عداد التوثيقات المعلقة في الهوم فوراً
            let pendingBadge = document.getElementById('stat-pending-count');
            if(pendingBadge) {
                let currentVal = parseInt(pendingBadge.innerText) || 0;
                if(currentVal > 0) pendingBadge.innerText = currentVal - 1;
            }
            // تحديث عدد الكباتن الإجمالي فوراً
            let captainsBadge = document.getElementById('stat-captains-count');
            if(captainsBadge) {
                let currentCaptains = parseInt(captainsBadge.innerText) || 128;
                captainsBadge.innerText = currentCaptains + 1;
            }
            alert('تم اعتماد وتوثيق الكابتن (' + captainName + ') بنجاح وظهرت التحديثات على الصفحة!');
        }

        // رفض توثيق كابتن
        function rejectCaptainAction(cardId, captainName) {
            const card = document.getElementById(cardId);
            if(card) {
                card.remove(); // إزالة الكارت من الصفحة فوراً بناءً على الطلب
            }
            let pendingBadge = document.getElementById('stat-pending-count');
            if(pendingBadge) {
                let currentVal = parseInt(pendingBadge.innerText) || 0;
                if(currentVal > 0) pendingBadge.innerText = currentVal - 1;
            }
            alert('تم رفض طلب الكابتن (' + captainName + ') وحذفه من قائمة الانتظار بنجاح!');
        }

        // فلترة المالية (يوم، أسبوع، شهر) وتحديث الأرقام على الشاشة فوراً
        function filterFinance(period, btnElement) {
            const buttons = document.querySelectorAll('.finance-filter-btn');
            buttons.forEach(b => {
                b.classList.remove('bg-white', 'text-[#0E216C]', 'shadow-sm');
                b.classList.add('text-gray-500');
            });
            btnElement.classList.add('bg-white', 'text-[#0E216C]', 'shadow-sm');
            btnElement.classList.remove('text-gray-500');

            const revEl = document.getElementById('fin-total-revenue');
            const availEl = document.getElementById('fin-available');
            const pendingEl = document.getElementById('fin-pending');

            if(period === 'day') {
                revEl.innerText = '3,200 ج.م';
                availEl.innerText = '2,400 ج.م';
                pendingEl.innerText = '800 ج.م';
            } else if(period === 'week') {
                revEl.innerText = '11,800 ج.م';
                availEl.innerText = '8,900 ج.م';
                pendingEl.innerText = '2,900 ج.م';
            } else if(period === 'month') {
                revEl.innerText = '24,500 ج.م';
                availEl.innerText = '18,400 ج.م';
                pendingEl.innerText = '6,100 ج.م';
            }
        }

        // تشغيل النافذة المنبثقة لأي زر يتم الضغط عليه
        function openActionModal(actionType, param1 = null, param2 = null, param3 = null) {
            const modal = document.getElementById('actionModal');
            const body = document.getElementById('modalBody');
            let html = '';

            if (actionType === 'newBooking') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-3">إضافة حجز تدريب جديد</h3>
                    <form onsubmit="handleNewBookingSubmit(event)" class="space-y-3 text-xs">
                        <input type="text" id="new-client-name" placeholder="اسم العميل الرباعي" required class="w-full p-3 border rounded-2xl bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                        <input type="text" id="new-client-phone" placeholder="رقم الهاتف" required class="w-full p-3 border rounded-2xl bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                        <select id="new-booking-package" class="w-full p-3 border rounded-2xl bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                            <option>باقة 5 حصص (مانيوال)</option>
                            <option>باقة 10 حصص (أوتوماتيك)</option>
                            <option>الباقة الملكية VIP</option>
                        </select>
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold shadow mt-2">حفظ وعرض الحجز فوراً</button>
                    </form>
                `;
            } else if (actionType === 'viewDetails') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-2">تفاصيل الطلب: ${param1}</h3>
                    <p class="text-gray-500 text-xs mb-4">العميل: سارة أحمد • الكابتن: محمود علي • الباقة: 10 حصص</p>
                    <div class="bg-gray-50 p-3 rounded-2xl text-xs space-y-1 mb-4 border">
                        <p><strong>حالة الدفع:</strong> تم الدفع إلكترونياً (مؤكد)</p>
                        <p><strong>تاريخ الحجز:</strong> اليوم، 02:30 ظهراً</p>
                    </div>
                    <button onclick="closeActionModal()" class="w-full bg-[#0E216C] text-white py-2.5 rounded-xl font-bold text-xs">إغلاق النافذة</button>
                `;
            } else if (actionType === 'editBooking') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-3">تعديل بيانات الحجز: ${param1}</h3>
                    <form onsubmit="executeModalAction(event)" class="space-y-3 text-xs">
                        <input type="text" value="سارة أحمد" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <select class="w-full p-3 border rounded-2xl bg-gray-50">
                            <option>مؤكد</option>
                            <option>قيد الانتظار</option>
                            <option>ملغي</option>
                        </select>
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold shadow">حفظ التعديلات</button>
                    </form>
                `;
            } else if (actionType === 'assignCaptain') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-3">تعيين كابتن للطلب: ${param1}</h3>
                    <form onsubmit="handleAssignCaptainSubmit(event, '${param1}')" class="space-y-3 text-xs">
                        <select id="selected-captain-name" class="w-full p-3 border rounded-2xl bg-gray-50">
                            <option>كابتن/ محمود علي</option>
                            <option>كابتن/ سامح مرسي</option>
                            <option>كابتن/ أحمد حسن</option>
                        </select>
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold shadow">تأكيد التعيين وتحديث الجدول</button>
                    </form>
                `;
            } else if (actionType === 'cancelOrder') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-2">تأكيد إلغاء الطلب: ${param1}</h3>
                    <p class="text-gray-500 text-xs mb-4">هل أنت متأكد من رغبتك في إلغاء هذا الطلب وإزالته من الجدول؟</p>
                    <div class="flex gap-2">
                        <button onclick="handleCancelOrder('${param1}')" class="w-full bg-red-500 text-white py-2.5 rounded-xl font-bold text-xs">نعم، إلغاء الطلب</button>
                        <button onclick="closeActionModal()" class="w-full bg-gray-200 text-gray-700 py-2.5 rounded-xl font-bold text-xs">تراجع</button>
                    </div>
                `;
            } else if (actionType === 'addCaptain') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-3">إضافة كابتن جديد للأسطول</h3>
                    <form onsubmit="handleAddNewCaptain(event)" class="space-y-3 text-xs">
                        <input type="text" id="new-cap-name" placeholder="اسم الكابتن الثلاثي" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <input type="text" id="new-cap-car" placeholder="نوع السيارة ورقم الهيكل" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <select id="new-cap-type" class="w-full p-3 border rounded-2xl bg-gray-50">
                            <option value="تابعة للمدرسة">كابتن تابع للمدرسة</option>
                            <option value="فري لانس">كابتن فري لانس</option>
                        </select>
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold shadow">حفظ وإضافة الكابتن فوراً</button>
                    </form>
                `;
            } else if (actionType === 'newPackage') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-3">إنشاء باقة تدريبية جديدة مخصصة</h3>
                    <form onsubmit="handleCreateNewPackage(event)" class="space-y-3 text-xs">
                        <input type="text" id="custom-pkg-title" placeholder="اسم الباقة (مثلاً: باقة المتميزين)" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <input type="text" id="custom-pkg-sessions" placeholder="عدد الحصص (مثلاً: 12 حصة تدريبية)" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <input type="text" id="custom-pkg-price" placeholder="السعر بالجنيه (مثلاً: 2,800)" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <textarea id="custom-pkg-features" placeholder="المميزات (اكتب كل ميزة في سطر)..." rows="3" class="w-full p-3 border rounded-2xl bg-gray-50"></textarea>
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold shadow">إضافة الباقة وعرضها فورا</button>
                    </form>
                `;
            } else if (actionType === 'editPackage') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-3">تعديل تفاصيل ${param1}</h3>
                    <form onsubmit="handleEditPackageSubmit(event, '${param4}')" class="space-y-3 text-xs">
                        <input type="text" id="edit-pkg-name-input" value="${param1}" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <input type="text" id="edit-pkg-price-input" value="${param2}" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold shadow">حفظ التعديلات وعرضها فوراً</button>
                    </form>
                `;
            } else if (actionType === 'newSchedule') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-3">جدولة حصة تدريبية جديدة</h3>
                    <form onsubmit="handleNewScheduleSubmit(event)" class="space-y-3 text-xs">
                        <input type="text" id="sched-trainee" placeholder="اسم المتدرب" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <input type="text" id="sched-captain" placeholder="اسم الكابتن" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <select id="sched-affiliation" class="w-full p-3 border rounded-2xl bg-gray-50">
                            <option value="تابعة للمدرسة">تابعة للمدرسة</option>
                            <option value="فري لانس">كابتن فري لانس</option>
                        </select>
                        <input type="text" id="sched-time" placeholder="الموعد (مثلاً: غداً الساعة 5 العصر)" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold shadow">إضافة الموعد للجدول فوراً</button>
                    </form>
                `;
            } else if (actionType === 'reschedule') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-3">تعديل موعد الحصة لـ: ${param1}</h3>
                    <input type="text" id="new-time-val" placeholder="أدخل الموعد الجديد..." class="w-full p-3 border rounded-2xl text-xs bg-gray-50 mb-3">
                    <button onclick="alert('تم تحديث موعد الحصة لـ ${param1} بنجاح!'); closeActionModal();" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold text-xs shadow">تحديث الموعد</button>
                `;
            } else if (actionType === 'newTicket') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-3">إضافة تذكرة دعم فني جديدة</h3>
                    <form onsubmit="handleNewTicketSubmit(event)" class="space-y-3 text-xs">
                        <input type="text" id="ticket-title" placeholder="عنوان المشكلة أو الشكوى" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <input type="text" id="ticket-user" placeholder="اسم العميل أو الكابتن مع التبعية" required class="w-full p-3 border rounded-2xl bg-gray-50">
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold shadow">إرسال التذكرة للقائمة</button>
                    </form>
                `;
            } else if (actionType === 'replyTicket') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-2">الرد على تذكرة: ${param1}</h3>
                    <textarea placeholder="اكتب ردك هنا لحل المشكلة..." rows="4" class="w-full p-3 border rounded-2xl text-xs bg-gray-50 mb-3"></textarea>
                    <button onclick="alert('تم إرسال الرد وحل التذكرة بنجاح!'); closeActionModal();" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold text-xs shadow">إرسال الرد وإغلاق التذكرة</button>
                `;
            } else if (actionType === 'requestPayout') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-2">طلب سحب رصيد الأرباح</h3>
                    <p class="text-gray-500 text-xs mb-3">الرصيد المتاح حالياً: <strong>18,400 ج.م</strong></p>
                    <input type="number" placeholder="المبلغ المراد سحبه..." class="w-full p-3 border rounded-2xl text-xs bg-gray-50 mb-3">
                    <button onclick="alert('تم تقديم طلب السحب البنكي بنجاح وسيتم التحويل خلال 24 ساعة!'); closeActionModal();" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold text-xs shadow">تأكيد طلب السحب البنكي</button>
                `;
            } else if (actionType === 'chatbotModal') {
                html = `
                    <div class="text-center">
                        <div class="w-12 h-12 bg-orange-100 text-[#FE8511] rounded-2xl mx-auto flex items-center justify-center text-xl mb-2"><i class="fa-solid fa-robot"></i></div>
                        <h3 class="text-base font-black text-[#0E216C] mb-1">المساعد الذكي لسوقني</h3>
                        <p class="text-gray-400 text-xs mb-4">كيف يمكنني مساعدتك في إدارة المنصة اليوم؟</p>
                        <input type="text" placeholder="اسأل المساعد الذكي أي شيء..." class="w-full p-3 border rounded-2xl text-xs bg-gray-50 mb-3">
                        <button onclick="closeActionModal(); alert('تم استلام سؤالك وجاري معالجته بواسطة المساعد الذكي!');" style="background-color: #FE8511;" class="w-full text-white py-2.5 rounded-xl font-bold text-xs">إرسال السؤال</button>
                    </div>
                `;
            } else if (actionType === 'logout') {
                html = `
                    <h3 class="text-base font-black text-[#0E216C] mb-2">تسجيل الخروج</h3>
                    <p class="text-gray-500 text-xs mb-4">هل أنت متأكد من رغبتك في تسجيل الخروج من لوحة التحكم؟</p>
                    <div class="flex gap-2">
                        <button onclick="alert('تم تسجيل الخروج بنجاح'); window.location.reload();" class="w-full bg-red-500 text-white py-2.5 rounded-xl font-bold text-xs">نعم، خروج</button>
                        <button onclick="closeActionModal()" class="w-full bg-gray-200 text-gray-700 py-2.5 rounded-xl font-bold text-xs">تراجع</button>
                    </div>
                `;
            }

            body.innerHTML = html;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeActionModal() {
            const modal = document.getElementById('actionModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // معالجة إضافة حجز جديد وعرضه في الجدول فوراً
        function handleNewBookingSubmit(e) {
            e.preventDefault();
            const clientName = document.getElementById('new-client-name').value;
            const pkgName = document.getElementById('new-booking-package').value;
            const tableBody = document.getElementById('home-bookings-table');
            
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td class="p-3.5 font-bold text-[#0E216C]">#ORD-1026</td>
                <td class="p-3.5">${clientName}</td>
                <td class="p-3.5 text-orange-500">كابتن قيد التعيين</td>
                <td class="p-3.5">${pkgName}</td>
                <td class="p-3.5"><span class="bg-amber-50 text-amber-600 px-3 py-1 rounded-xl font-bold">قيد الانتظار</span></td>
                <td class="p-3.5 text-center flex items-center justify-center gap-2">
                    <button onclick="openActionModal('assignCaptain', '#ORD-1026')" class="bg-[#FE8511] text-white px-3 py-1.5 rounded-xl font-bold hover:opacity-95 transition">تعيين كابتن</button>
                    <button onclick="openActionModal('cancelOrder', '#ORD-1026')" class="bg-red-50 text-red-600 px-3 py-1.5 rounded-xl font-bold hover:bg-red-100 transition">إلغاء</button>
                </td>
            `;
            tableBody.prepend(newRow);
            closeActionModal();
            alert('تم إضافة الحجز الجديد وعرضه في الجدول بنجاح!');
        }

        // تعيين كابتن وتحديث الصف فوراً
        function handleAssignCaptainSubmit(e, orderId) {
            e.preventDefault();
            const selectedCap = document.getElementById('selected-captain-name').value;
            const row = document.getElementById('row-' + orderId.replace('#', ''));
            if(row) {
                const captainCell = row.querySelector('.captain-cell');
                const statusCell = row.querySelector('.status-cell');
                const actionsCell = row.querySelector('.actions-cell');

                if(captainCell) captainCell.innerText = selectedCap;
                if(statusCell) statusCell.innerHTML = '<span class="bg-emerald-50 text-emerald-600 px-3 py-1 rounded-xl font-bold">مؤكد</span>';
                if(actionsCell) {
                    actionsCell.innerHTML = `
                        <button onclick="openActionModal('viewDetails', '${orderId}')" class="bg-blue-50 text-blue-600 px-3 py-1.5 rounded-xl font-bold hover:bg-blue-100 transition">عرض</button>
                        <button onclick="openActionModal('editBooking', '${orderId}')" class="bg-amber-50 text-amber-600 px-3 py-1.5 rounded-xl font-bold hover:bg-amber-100 transition">تعديل</button>
                    `;
                }
            }
            closeActionModal();
            alert('تم تعيين الكابتن بنجاح وتحديث حالة الطلب في الجدول!');
        }

        // إلغاء الطلب وحذفه من الجدول
        function handleCancelOrder(orderId) {
            const row = document.getElementById('row-' + orderId.replace('#', ''));
            if(row) row.remove();
            closeActionModal();
            alert('تم إلغاء الطلب وحذفه من الجدول بنجاح!');
        }

        // إضافة كابتن جديد لقائمة التوثيق والأسطول
        function handleAddNewCaptain(e) {
            e.preventDefault();
            const name = document.getElementById('new-cap-name').value;
            const car = document.getElementById('new-cap-car').value;
            const type = document.getElementById('new-cap-type').value;
            const container = document.getElementById('captains-list-container');

            const newCardId = 'captain-card-' + Date.now();
            const newDiv = document.createElement('div');
            newDiv.id = newCardId;
            newDiv.className = 'p-5 bg-gray-50 rounded-2xl border border-gray-200 flex flex-col sm:flex-row justify-between items-center gap-4';
            newDiv.innerHTML = `
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-orange-100 text-[#FE8511] rounded-2xl flex items-center justify-center font-bold text-lg">جديد</div>
                    <div>
                        <h4 class="font-bold text-[#0E216C] text-sm">${name} (${type})</h4>
                        <p class="text-gray-400 text-xs">سيارة: ${car} • قيد المراجعة والتوثيق</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 captain-actions">
                    <button onclick="verifyCaptainAction('${newCardId}', '${name}')" class="bg-emerald-600 text-white px-4 py-2 rounded-xl font-bold text-xs shadow hover:bg-emerald-700 transition">قبول وتوثيق</button>
                    <button onclick="rejectCaptainAction('${newCardId}', '${name}')" class="bg-red-50 text-red-600 px-4 py-2 rounded-xl font-bold text-xs hover:bg-red-100 transition">رفض الطلب</button>
                </div>
            `;
            container.prepend(newDiv);
            
            let pendingBadge = document.getElementById('stat-pending-count');
            if(pendingBadge) pendingBadge.innerText = parseInt(pendingBadge.innerText || 0) + 1;

            closeActionModal();
            alert('تم إضافة الكابتن الجديد لقائمة التوثيق بنجاح!');
        }

        // إنشاء باقة جديدة بالكامل وعرضها فوراً
        function handleCreateNewPackage(e) {
            e.preventDefault();
            const title = document.getElementById('custom-pkg-title').value;
            const sessions = document.getElementById('custom-pkg-sessions').value;
            const price = document.getElementById('custom-pkg-price').value;
            const grid = document.getElementById('packages-grid');

            const pkgId = 'pkg-' + Date.now();
            const newPkgCard = document.createElement('div');
            newPkgCard.id = pkgId;
            newPkgCard.className = 'p-6 bg-gray-50 rounded-3xl border border-gray-200 flex flex-col justify-between';
            newPkgCard.innerHTML = `
                <div>
                    <span class="bg-orange-100 text-[#FE8511] text-xs font-bold px-3 py-1 rounded-full">${title}</span>
                    <h3 class="text-2xl font-black text-[#0E216C] mt-3 mb-1"><span class="pkg-name">${sessions}</span></h3>
                    <p class="text-[#FE8511] font-bold text-lg mb-4"><span class="pkg-price">${price}</span> ج.م</p>
                    <ul class="text-gray-500 text-xs space-y-2 mb-6">
                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> مميزات مخصصة ومصممة حسب الطلب</li>
                        <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> دعم فني وتدريب احترافي</li>
                    </ul>
                </div>
                <button onclick="openActionModal('editPackage', '${title}', '${price}', '${pkgId}')" class="w-full bg-[#0E216C] text-white py-3 rounded-2xl font-bold text-xs shadow hover:opacity-90 transition">تعديل الباقة</button>
            `;
            grid.appendChild(newPkgCard);
            closeActionModal();
            alert('تم إنشاء الباقة الجديدة وعرضها في الصفحة بنجاح!');
        }

        // تعديل تفاصيل الباقة وعرضها فوراً
        function handleEditPackageSubmit(e, pkgId) {
            e.preventDefault();
            const newName = document.getElementById('edit-pkg-name-input').value;
            const newPrice = document.getElementById('edit-pkg-price-input').value;
            const pkgCard = document.getElementById(pkgId);
            if(pkgCard) {
                const nameSpan = pkgCard.querySelector('.pkg-name');
                const priceSpan = pkgCard.querySelector('.pkg-price');
                if(nameSpan) nameSpan.innerText = newName;
                if(priceSpan) priceSpan.innerText = newPrice;
            }
            closeActionModal();
            alert('تم تحديث بيانات الباقة وعرضها على الصفحة بنجاح!');
        }

        // جدولة حصة جديدة وعرضها في جدول الحجوزات والمواعيد فوراً
        function handleNewScheduleSubmit(e) {
            e.preventDefault();
            const trainee = document.getElementById('sched-trainee').value;
            const captain = document.getElementById('sched-captain').value;
            const affiliation = document.getElementById('sched-affiliation').value;
            const time = document.getElementById('sched-time').value;
            const container = document.getElementById('schedules-container');

            const badgeClass = affiliation === 'تابعة للمدرسة' ? 'bg-emerald-100 text-emerald-700' : 'bg-purple-100 text-purple-700';

            const newDiv = document.createElement('div');
            newDiv.className = 'p-4 bg-gray-50 rounded-2xl border border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4';
            newDiv.innerHTML = `
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <h4 class="font-bold text-[#0E216C] text-sm">حصة تدريبية للمتدرب: ${trainee}</h4>
                        <span class="${badgeClass} text-[10px] font-extrabold px-2.5 py-0.5 rounded-full">${affiliation}</span>
                    </div>
                    <p class="text-gray-400 text-xs">الكابتن: ${captain} • موعد الحصة: ${time}</p>
                </div>
                <button onclick="openActionModal('reschedule', '${trainee}')" class="bg-blue-50 text-blue-600 px-4 py-2 rounded-xl font-bold text-xs hover:bg-blue-100 transition">تعديل الموعد</button>
            `;
            container.prepend(newDiv);
            closeActionModal();
            alert('تمت جدولة الحصة الجديدة وإضافتها لجدول المواعيد بنجاح!');
        }

        // إضافة تذكرة دعم فني جديدة لقائمة الشكاوى والدعم
        function handleNewTicketSubmit(e) {
            e.preventDefault();
            const title = document.getElementById('ticket-title').value;
            const user = document.getElementById('ticket-user').value;
            const container = document.getElementById('support-tickets-container');

            const newDiv = document.createElement('div');
            newDiv.className = 'p-4 bg-gray-50 rounded-2xl border border-gray-200 flex justify-between items-center';
            newDiv.innerHTML = `
                <div>
                    <span class="bg-amber-100 text-amber-700 text-[10px] font-bold px-2.5 py-0.5 rounded-full">قيد المعالجة</span>
                    <h4 class="font-bold text-[#0E216C] text-sm mt-1">${title}</h4>
                    <p class="text-gray-400 text-xs">المشتكي: ${user} • الآن</p>
                </div>
                <button onclick="openActionModal('replyTicket', '${title}')" class="bg-[#FE8511] text-white px-4 py-2 rounded-xl font-bold text-xs shadow hover:opacity-90 transition">الرد والحل</button>
            `;
            container.prepend(newDiv);
            closeActionModal();
            alert('تم إضافة تذكرة الدعم والشكوى للقائمة بنجاح!');
        }
    </script>
</body>
</html>