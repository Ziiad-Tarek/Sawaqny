<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - لوحة تحكم المدرسة</title>
    <!-- استخدام Tailwind CSS للتصميم السريع والاحترافي -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts (Cairo) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="bg-[#0E216C] font-sans text-gray-900 min-h-screen m-0 overflow-x-hidden" style="font-family: 'Cairo', sans-serif;">

    <!-- ================= شاشة تسجيل الدخول ================= -->
    <div id="loginScreen" class="min-h-screen w-full flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-[#0E216C] rounded-3xl shadow-2xl overflow-hidden border border-white/15 relative z-10">
            <div class="p-6 pb-4 text-center flex flex-col items-center justify-center relative">
                <div class="logo-box mb-3 shadow-lg flex items-center justify-center bg-white p-3 rounded-2xl border border-gray-100 transform hover:scale-105 transition duration-300">
                    <a href="#">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="سُوقْنِي" class="logo-img-square h-14 w-14 object-contain" onerror="this.src='https://via.placeholder.com/150?text=Sawaqny'">
                    </a>
                </div>
                <h1 class="text-xl font-black tracking-wide text-white mt-1">بوابة تسجيل دخول مدارس القيادة</h1>
                <p class="text-gray-300 text-xs mt-1.5 font-medium">أدخل بيانات حساب المدرسة لمتابعة الطلبات والأسطول بذكاء</p>
            </div>

            <div class="p-6 sm:p-8 pt-2">
                <form id="loginForm" onsubmit="redirectToDashboard(event)">
                    <div class="mb-4 text-right">
                        <label class="block text-xs font-bold mb-2 text-white/90">البريد الإلكتروني للمدرسة</label>
                        <div class="relative flex items-center">
                            <input type="email" id="schoolEmail" required placeholder="school@sawaqny.com" dir="rtl"
                                   class="w-full pr-11 pl-4 py-3.5 border border-white/20 rounded-2xl focus:outline-none focus:border-[#FE8511] focus:ring-2 focus:ring-[#FE8511]/30 text-sm bg-white/10 text-white placeholder-white/40 font-medium transition shadow-inner">
                            <span style="color: #FE8511;" class="absolute right-4 pointer-events-none flex items-center justify-center">
                                <i class="fa-solid fa-envelope text-base"></i>
                            </span>
                        </div>
                    </div>

                    <div class="mb-4 text-right">
                        <label class="block text-xs font-bold mb-2 text-white/90">كلمة المرور</label>
                        <div class="relative flex items-center">
                            <input type="password" id="schoolPassword" required placeholder="••••••••" dir="rtl"
                                   class="w-full pr-11 pl-4 py-3.5 border border-white/20 rounded-2xl focus:outline-none focus:border-[#FE8511] focus:ring-2 focus:ring-[#FE8511]/30 text-sm bg-white/10 text-white placeholder-white/40 font-medium transition shadow-inner">
                            <span style="color: #FE8511;" class="absolute right-4 pointer-events-none flex items-center justify-center">
                                <i class="fa-solid fa-lock text-base"></i>
                            </span>
                        </div>
                    </div>

                    <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3.5 rounded-2xl font-bold hover:opacity-95 transition duration-300 shadow-xl shadow-orange-600/20 text-sm flex items-center justify-center gap-2 mb-4 transform active:scale-95">
                        <span>تسجيل الدخول للنظام</span>
                        <i class="fa-solid fa-arrow-left text-xs"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- ================= لوحة التحكم التفاعلية الشاملة ================= -->
    <div id="dashboardApp" class="hidden min-h-screen bg-gray-100 flex flex-row-reverse w-full">
        
        <!-- المحتوى الرئيسي (يسار الشاشة) -->
        <main class="flex-1 p-6 md:p-8 overflow-y-auto">
            <!-- شريط العنوان العلوي -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 bg-white p-4 px-6 rounded-2xl shadow-sm border border-gray-100 gap-4">
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-orange-500"></span>
                    <h2 id="pageTitle" style="color: #0E216C;" class="text-lg font-black tracking-wide">الرئيسية والإحصائيات</h2>
                </div>
                <div class="bg-emerald-50 text-emerald-700 border border-emerald-200 px-4 py-1.5 rounded-full text-xs font-extrabold flex items-center gap-2 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    حالة الحساب: مفعل
                </div>
            </div>

            <!-- حاوية المحتوى المتغير -->
            <div id="tabContentContainer">

                <!-- 1. الرئيسية والإحصائيات (داتا وتفاصيل أكثر موسعة) -->
                <div class="tab-pane" id="content-home">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-gray-400 text-xs font-bold mb-1">إجمالي الكباتن</p>
                                <h3 style="color: #0E216C;" class="text-3xl font-black mb-1">24</h3>
                                <p class="text-emerald-600 text-[11px] font-bold">18 نشط الآن</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-50 text-[#0E216C] rounded-2xl flex items-center justify-center text-xl"><i class="fa-solid fa-users"></i></div>
                        </div>
                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-gray-400 text-xs font-bold mb-1">السيارات المتاحة للأسطول</p>
                                <h3 style="color: #0E216C;" class="text-3xl font-black mb-1">14</h3>
                                <p class="text-[#FE8511] text-[11px] font-bold">12 جاهزة للتدريب</p>
                            </div>
                            <div class="w-12 h-12 bg-orange-50 text-[#FE8511] rounded-2xl flex items-center justify-center text-xl"><i class="fa-solid fa-car-side"></i></div>
                        </div>
                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-gray-400 text-xs font-bold mb-1">الحصص المنجزة هذا الشهر</p>
                                <h3 style="color: #0E216C;" class="text-3xl font-black mb-1">156</h3>
                                <p class="text-purple-600 text-[11px] font-bold">بمعدل 98% نجاح</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center text-xl"><i class="fa-solid fa-graduation-cap"></i></div>
                        </div>
                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-gray-400 text-xs font-bold mb-1">تقييم المدرسة العام</p>
                                <h3 style="color: #0E216C;" class="text-3xl font-black mb-1">4.9</h3>
                                <p class="text-amber-500 text-[11px] font-bold"><i class="fa-solid fa-star"></i> من 5 نجوم</p>
                            </div>
                            <div class="w-12 h-12 bg-amber-50 text-amber-500 rounded-2xl flex items-center justify-center text-xl"><i class="fa-solid fa-award"></i></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-2 bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                            <h3 style="color: #0E216C;" class="text-xl font-black mb-2">أحدث نشاط الأسطول والطلبات</h3>
                            <p class="text-gray-400 text-xs mb-6">متابعة لحظية لحركة الكباتن والمتدربين اليوم</p>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl border border-gray-100 text-xs">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center"><i class="fa-solid fa-check"></i></div>
                                        <div>
                                            <h4 class="font-bold text-[#0E216C]">تم اجتياز اختبار الرخصة بنجاح</h4>
                                            <p class="text-gray-400 text-[11px]">المتدرب: أحمد حسن • الكابتن: محمد إبراهيم</p>
                                        </div>
                                    </div>
                                    <span class="text-gray-400 text-[11px]">منذ 10 دقائق</span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl border border-gray-100 text-xs">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 bg-orange-100 text-[#FE8511] rounded-xl flex items-center justify-center"><i class="fa-solid fa-user-plus"></i></div>
                                        <div>
                                            <h4 class="font-bold text-[#0E216C]">تسجيل متدرب جديد</h4>
                                            <p class="text-gray-400 text-[11px]">باقة الاحتراف (10 ساعات تدريب)</p>
                                        </div>
                                    </div>
                                    <span class="text-gray-400 text-[11px]">منذ ساعة</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between">
                            <div>
                                <h3 style="color: #0E216C;" class="text-xl font-black mb-2">إجراءات سريعة</h3>
                                <p class="text-gray-400 text-xs mb-6">الوصول السريع لخدمات المدرسة</p>
                                <div class="space-y-3">
                                    <button onclick="switchTabByTarget('captains')" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold text-xs shadow-md hover:opacity-90 transition">إدارة وتوثيق الكباتن</button>
                                    <button onclick="switchTabByTarget('packages')" class="w-full bg-gray-100 text-[#0E216C] border border-gray-200 py-3 rounded-2xl font-bold text-xs hover:bg-gray-200 transition">استعراض الباقات والدفع</button>
                                </div>
                            </div>
                            <div class="mt-6 pt-4 border-t border-gray-100 text-center">
                                <span class="text-[11px] text-gray-400 font-bold">دعم فني متاح على مدار الساعة</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. توثيق الكباتن (داتا أكثر تفصيلاً: تقييم، رحلات، تاريخ انضمام) -->
                <div class="tab-pane hidden" id="content-captains">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-6">
                        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
                            <div>
                                <h3 style="color: #0E216C;" class="text-xl font-black">قائمة الكباتن وتوثيق الحسابات (بيانات موسعة)</h3>
                                <p class="text-gray-400 text-xs mt-1">إدارة واعتماد طلبات ومتابعة أداء الأسطول بدقة عالية</p>
                            </div>
                            <button onclick="openActionModal('addCaptain')" style="background-color: #FE8511;" class="text-white px-5 py-3 rounded-2xl font-extrabold text-xs shadow-lg shadow-orange-500/20 hover:opacity-90 transition flex items-center gap-2">
                                <i class="fa-solid fa-user-plus text-sm"></i> إضافة كابتن جديد
                            </button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-right text-xs" id="captainsTable">
                                <thead class="bg-gray-50 text-gray-500 border-b border-gray-100">
                                    <tr>
                                        <th class="p-3 font-bold">اسم الكابتن</th>
                                        <th class="p-3 font-bold">رقم الهاتف</th>
                                        <th class="p-3 font-bold">السيارة المعينة</th>
                                        <th class="p-3 font-bold">التقييم</th>
                                        <th class="p-3 font-bold">إجمالي الحصص</th>
                                        <th class="p-3 font-bold">تاريخ الانضمام</th>
                                        <th class="p-3 font-bold">حالة التوثيق</th>
                                        <th class="p-3 font-bold text-center">الإجراءات والتحكم</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 font-medium">
                                    <tr id="cap-1">
                                        <td class="p-3 font-bold text-[#0E216C]">محمد أحمد إبراهيم</td>
                                        <td class="p-3 text-gray-600">01012345678</td>
                                        <td class="p-3 text-gray-600">هيونداي النترا (أبيض)</td>
                                        <td class="p-3 text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.9</td>
                                        <td class="p-3 text-gray-600">142 حصة</td>
                                        <td class="p-3 text-gray-400">12/01/2025</td>
                                        <td class="p-3"><span class="bg-emerald-50 text-emerald-600 px-3 py-1 rounded-xl font-bold status-badge">موثق</span></td>
                                        <td class="p-3 text-center flex items-center justify-center gap-2">
                                            <button onclick="openActionModal('toggleVerify', 'cap-1')" class="bg-blue-50 text-blue-600 px-3 py-2 rounded-xl font-bold hover:bg-blue-100 transition shadow-sm">تبديل</button>
                                            <button onclick="openActionModal('deleteCaptain', 'cap-1')" class="bg-red-50 text-red-600 px-3 py-2 rounded-xl font-bold hover:bg-red-100 transition shadow-sm">حذف</button>
                                        </td>
                                    </tr>
                                    <tr id="cap-2">
                                        <td class="p-3 font-bold text-[#0E216C]">محمود خالد حسن</td>
                                        <td class="p-3 text-gray-600">01198765432</td>
                                        <td class="p-3 text-gray-600">شيفروليه أوبترا</td>
                                        <td class="p-3 text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.7</td>
                                        <td class="p-3 text-gray-600">85 حصة</td>
                                        <td class="p-3 text-gray-400">05/03/2025</td>
                                        <td class="p-3"><span class="bg-amber-50 text-amber-600 px-3 py-1 rounded-xl font-bold status-badge">قيد المراجعة</span></td>
                                        <td class="p-3 text-center flex items-center justify-center gap-2">
                                            <button onclick="openActionModal('toggleVerify', 'cap-2')" class="bg-blue-50 text-blue-600 px-3 py-2 rounded-xl font-bold hover:bg-blue-100 transition shadow-sm">تبديل</button>
                                            <button onclick="openActionModal('deleteCaptain', 'cap-2')" class="bg-red-50 text-red-600 px-3 py-2 rounded-xl font-bold hover:bg-red-100 transition shadow-sm">حذف</button>
                                        </td>
                                    </tr>
                                    <tr id="cap-3">
                                        <td class="p-3 font-bold text-[#0E216C]">سامح السيد مرسي</td>
                                        <td class="p-3 text-gray-600">01234567890</td>
                                        <td class="p-3 text-gray-600">نيسان صني (فضي)</td>
                                        <td class="p-3 text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.8</td>
                                        <td class="p-3 text-gray-600">210 حصة</td>
                                        <td class="p-3 text-gray-400">20/11/2024</td>
                                        <td class="p-3"><span class="bg-emerald-50 text-emerald-600 px-3 py-1 rounded-xl font-bold status-badge">موثق</span></td>
                                        <td class="p-3 text-center flex items-center justify-center gap-2">
                                            <button onclick="openActionModal('toggleVerify', 'cap-3')" class="bg-blue-50 text-blue-600 px-3 py-2 rounded-xl font-bold hover:bg-blue-100 transition shadow-sm">تبديل</button>
                                            <button onclick="openActionModal('deleteCaptain', 'cap-3')" class="bg-red-50 text-red-600 px-3 py-2 rounded-xl font-bold hover:bg-red-100 transition shadow-sm">حذف</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- 3. الباقات والأسعار (داتا أكثر وبشكل حلو + اختيارها يفتح فورم الدفع ف الكارد) -->
                <div class="tab-pane hidden" id="content-packages">
                    <div class="mb-6 text-center max-w-xl mx-auto">
                        <h3 style="color: #0E216C;" class="text-2xl font-black mb-1">باقات التدريب المتاحة</h3>
                        <p class="text-gray-400 text-xs">اختر الباقة المناسبة لك للاشتراك الفوري والدفع الآمن عبر الكارد المنبثق</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 text-center flex flex-col justify-between transform hover:scale-102 transition duration-300">
                            <div>
                                <span class="bg-blue-50 text-[#0E216C] px-3 py-1 rounded-full text-[11px] font-bold">باقة المبتدئين السريعة</span>
                                <div class="my-4">
                                    <span class="text-3xl font-black text-[#0E216C]">1,200</span>
                                    <span class="text-xs text-gray-400"> ج.م</span>
                                </div>
                                <ul class="text-gray-500 text-xs space-y-2 mb-6 text-right px-4">
                                    <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> 5 ساعات تدريب أساسية</li>
                                    <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> تدريب على أساسيات القيادة</li>
                                    <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> اختبار تقييمي مبدئي</li>
                                </ul>
                            </div>
                            <button onclick="openActionModal('payPackage', 'الباقة الأساسية', '1200')" class="w-full bg-[#0E216C] text-white py-3.5 rounded-2xl font-extrabold text-xs hover:opacity-90 transition shadow-md">اختر واشترك الآن</button>
                        </div>

                        <div class="bg-white p-6 rounded-3xl shadow-xl border-2 border-[#FE8511] text-center flex flex-col justify-between relative transform hover:scale-102 transition duration-300">
                            <span class="absolute top-3 left-3 bg-[#FE8511] text-white text-[10px] font-bold px-3 py-1 rounded-full shadow">الأكثر طلباً</span>
                            <div>
                                <span class="bg-orange-50 text-[#FE8511] px-3 py-1 rounded-full text-[11px] font-bold">الباقة الاحترافية الشاملة</span>
                                <div class="my-4">
                                    <span class="text-3xl font-black text-[#FE8511]">2,200</span>
                                    <span class="text-xs text-gray-400"> ج.م</span>
                                </div>
                                <ul class="text-gray-500 text-xs space-y-2 mb-6 text-right px-4">
                                    <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> 10 ساعات تدريب مكثفة</li>
                                    <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> تدريب على الركنات والشارع</li>
                                    <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> ضمان الاستعداد لاختبار المرور</li>
                                </ul>
                            </div>
                            <button onclick="openActionModal('payPackage', 'الباقة الاحترافية', '2200')" style="background-color: #FE8511;" class="w-full text-white py-3.5 rounded-2xl font-extrabold text-xs shadow-lg shadow-orange-500/20 hover:opacity-90 transition">اختر واشترك الآن</button>
                        </div>

                        <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 text-center flex flex-col justify-between transform hover:scale-102 transition duration-300">
                            <div>
                                <span class="bg-purple-50 text-purple-600 px-3 py-1 rounded-full text-[11px] font-bold">باقة التميز الملكية</span>
                                <div class="my-4">
                                    <span class="text-3xl font-black text-purple-600">3,500</span>
                                    <span class="text-xs text-gray-400"> ج.م</span>
                                </div>
                                <ul class="text-gray-500 text-xs space-y-2 mb-6 text-right px-4">
                                    <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> 15 ساعة تدريب فاخرة</li>
                                    <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> استخراج رخصة بدون تعقيد</li>
                                    <li><i class="fa-solid fa-check text-emerald-500 ml-2"></i> كابتن خاص ومتابعة VIP</li>
                                </ul>
                            </div>
                            <button onclick="openActionModal('payPackage', 'باقة التميز الملكية', '3500')" class="w-full bg-[#0E216C] text-white py-3.5 rounded-2xl font-extrabold text-xs hover:opacity-90 transition shadow-md">اختر واشترك الآن</button>
                        </div>
                    </div>
                </div>

                <!-- 4. الحجوزات والمواعيد (جدول حصص، أسماء الكباتن، أسماء المتدربين، وقت الحصة) -->
                <div class="tab-pane hidden" id="content-bookings">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h3 style="color: #0E216C;" class="text-xl font-black">جدول مواعيد الحصص التدريبية</h3>
                                <p class="text-gray-400 text-xs mt-1">تفاصيل ومواعيد الحصص الحالية بين المتدربين والكباتن</p>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-right text-xs">
                                <thead class="bg-gray-50 text-gray-500 border-b border-gray-100">
                                    <tr>
                                        <th class="p-3 font-bold">اسم المتدرب</th>
                                        <th class="p-3 font-bold">اسم الكابتن</th>
                                        <th class="p-3 font-bold">نوع الحصة / الباقة</th>
                                        <th class="p-3 font-bold">وقت وتاريخ الحصة</th>
                                        <th class="p-3 font-bold text-center">الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 font-medium">
                                    <tr id="book-1">
                                        <td class="p-3 font-bold text-[#0E216C]">كريم عبد العزيز</td>
                                        <td class="p-3 text-gray-600">محمد أحمد إبراهيم</td>
                                        <td class="p-3 text-gray-600">الحصة الثالثة (ركنات)</td>
                                        <td class="p-3 text-[#FE8511] font-bold">اليوم - 04:00 عصراً</td>
                                        <td class="p-3 text-center flex items-center justify-center gap-2">
                                            <button onclick="openActionModal('completeBooking', 'book-1')" class="bg-emerald-50 text-emerald-600 px-3 py-1.5 rounded-xl font-bold hover:bg-emerald-100 transition shadow-sm">إتمام</button>
                                            <button onclick="openActionModal('cancelBooking', 'book-1')" class="bg-red-50 text-red-600 px-3 py-1.5 rounded-xl font-bold hover:bg-red-100 transition shadow-sm">إلغاء</button>
                                        </td>
                                    </tr>
                                    <tr id="book-2">
                                        <td class="p-3 font-bold text-[#0E216C]">يوسف مصطفى</td>
                                        <td class="p-3 text-gray-600">محمود خالد حسن</td>
                                        <td class="p-3 text-gray-600">الحصة الأولى (أساسيات)</td>
                                        <td class="p-3 text-[#FE8511] font-bold">غداً - 10:00 صباحاً</td>
                                        <td class="p-3 text-center flex items-center justify-center gap-2">
                                            <button onclick="openActionModal('completeBooking', 'book-2')" class="bg-emerald-50 text-emerald-600 px-3 py-1.5 rounded-xl font-bold hover:bg-emerald-100 transition shadow-sm">إتمام</button>
                                            <button onclick="openActionModal('cancelBooking', 'book-2')" class="bg-red-50 text-red-600 px-3 py-1.5 rounded-xl font-bold hover:bg-red-100 transition shadow-sm">إلغاء</button>
                                        </td>
                                    </tr>
                                    <tr id="book-3">
                                        <td class="p-3 font-bold text-[#0E216C]">نوران السيد</td>
                                        <td class="p-3 text-gray-600">سامح السيد مرسي</td>
                                        <td class="p-3 text-gray-600">الحصة الأخيرة (شارع زحمة)</td>
                                        <td class="p-3 text-[#FE8511] font-bold">بعد غد - 02:00 ظهراً</td>
                                        <td class="p-3 text-center flex items-center justify-center gap-2">
                                            <button onclick="openActionModal('completeBooking', 'book-3')" class="bg-emerald-50 text-emerald-600 px-3 py-1.5 rounded-xl font-bold hover:bg-emerald-100 transition shadow-sm">إتمام</button>
                                            <button onclick="openActionModal('cancelBooking', 'book-3')" class="bg-red-50 text-red-600 px-3 py-1.5 rounded-xl font-bold hover:bg-red-100 transition shadow-sm">إلغاء</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- 5. الشكاوي والدعم (بوكسات صغيرة للشكاوي وعند النقر تفتح التفاصيل وتتيح الرد واتخاذ الإجراءات) -->
                <div class="tab-pane hidden" id="content-support">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-6">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h3 style="color: #0E216C;" class="text-xl font-black">بوكسات الشكاوي واستفسارات الدعم</h3>
                                <p class="text-gray-400 text-xs mt-1">انقر على أي شكوى لعرض التفاصيل الكاملة، الرد عليها، واتخاذ الإجراء المناسب</p>
                            </div>
                            <button onclick="openActionModal('newTicket')" style="background-color: #FE8511;" class="text-white px-5 py-3 rounded-2xl font-extrabold text-xs shadow-lg shadow-orange-500/20 hover:opacity-90 transition">إرسال شكوى جديدة</button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- بوكس شكوى 1 -->
                            <div onclick="openActionModal('viewTicket', '1')" class="p-5 bg-gray-50 rounded-2xl border border-gray-200 hover:border-[#FE8511] cursor-pointer transition shadow-sm flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="bg-amber-100 text-amber-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">قيد المعالجة</span>
                                        <span class="text-gray-400 text-[11px]">منذ ساعتين</span>
                                    </div>
                                    <h4 class="font-bold text-[#0E216C] text-sm mb-1">مشكلة في تحويل الأرباح المالية أسبوعياً</h4>
                                    <p class="text-gray-500 text-xs line-clamp-2">لم يتم وصول الأرباح الخاصة بالأسطول حتى الآن رغم انتهاء الموعد المحدد...</p>
                                </div>
                                <div class="mt-4 pt-3 border-t border-gray-200 flex justify-between items-center text-[11px] text-[#FE8511] font-bold">
                                    <span>عرض التفاصيل والرد واتخاذ إجراء</span>
                                    <i class="fa-solid fa-arrow-left"></i>
                                </div>
                            </div>

                            <!-- بوكس شكوى 2 -->
                            <div onclick="openActionModal('viewTicket', '2')" class="p-5 bg-gray-50 rounded-2xl border border-gray-200 hover:border-[#FE8511] cursor-pointer transition shadow-sm flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="bg-emerald-100 text-emerald-700 px-2.5 py-0.5 rounded-full text-[10px] font-bold">تم الحل</span>
                                        <span class="text-gray-400 text-[11px]">منذ يوم</span>
                                    </div>
                                    <h4 class="font-bold text-[#0E216C] text-sm mb-1">تغيير موعد حصة تدريبية للمتدرب</h4>
                                    <p class="text-gray-500 text-xs line-clamp-2">أرغب في تعديل موعد الحصة الخاصة بالمتدرب بسبب ظرف طارئ للكابتن...</p>
                                </div>
                                <div class="mt-4 pt-3 border-t border-gray-200 flex justify-between items-center text-[11px] text-[#FE8511] font-bold">
                                    <span>عرض التفاصيل والرد واتخاذ إجراء</span>
                                    <i class="fa-solid fa-arrow-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. المالية والدفع (داتا أكثر وسجل المعاملات) -->
                <div class="tab-pane hidden" id="content-finance">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 mb-6">
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-6">
                            <div>
                                <h3 style="color: #0E216C;" class="text-xl font-black">المالية والمدفوعات (بيانات موسعة)</h3>
                                <p class="text-gray-400 text-xs">سجل الأرباح، سحب الرصيد، وسجل الحركات المالية السابقة</p>
                            </div>
                            <button onclick="openActionModal('requestWithdrawal')" style="background-color: #FE8511;" class="text-white px-6 py-3.5 rounded-2xl font-extrabold text-xs shadow-lg shadow-orange-500/20 hover:opacity-90 transition flex items-center gap-2">
                                <i class="fa-solid fa-money-bill-transfer"></i> طلب سحب رصيد فوري
                            </button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                            <div class="p-5 bg-gray-50 rounded-2xl border border-gray-100">
                                <p class="text-gray-400 text-xs font-bold mb-1">الرصيد القابل للسحب</p>
                                <h4 style="color: #0E216C;" class="text-2xl font-black" id="withdrawBalance">14,200 ج.م</h4>
                            </div>
                            <div class="p-5 bg-gray-50 rounded-2xl border border-gray-100">
                                <p class="text-gray-400 text-xs font-bold mb-1">المبالغ المعلقة قيد التحصيل</p>
                                <h4 style="color: #0E216C;" class="text-2xl font-black">4,300 ج.م</h4>
                            </div>
                            <div class="p-5 bg-gray-50 rounded-2xl border border-gray-100">
                                <p class="text-gray-400 text-xs font-bold mb-1">أرباح هذا الشهر</p>
                                <h4 style="color: #0E216C;" class="text-2xl font-black">22,800 ج.م</h4>
                            </div>
                            <div class="p-5 bg-gray-50 rounded-2xl border border-gray-100">
                                <p class="text-gray-400 text-xs font-bold mb-1">إجمالي المسحوبات التاريخية</p>
                                <h4 style="color: #0E216C;" class="text-2xl font-black">68,000 ج.م</h4>
                            </div>
                        </div>

                        <h4 style="color: #0E216C;" class="text-sm font-bold mb-4">سجل الحركات المالية الأخيرة</h4>
                        <div class="overflow-x-auto">
                            <table class="w-full text-right text-xs">
                                <thead class="bg-gray-50 text-gray-500 border-b border-gray-100">
                                    <tr>
                                        <th class="p-3 font-bold">رقم العملية</th>
                                        <th class="p-3 font-bold">نوع المعاملة</th>
                                        <th class="p-3 font-bold">المبلغ</th>
                                        <th class="p-3 font-bold">التاريخ</th>
                                        <th class="p-3 font-bold">الحالة</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 font-medium text-gray-600">
                                    <tr>
                                        <td class="p-3 font-bold text-[#0E216C]">#TXN-9842</td>
                                        <td class="p-3">سحب أرباح لحساب بنكي</td>
                                        <td class="p-3 font-bold text-red-500">- 10,000 ج.م</td>
                                        <td class="p-3">25/07/2026</td>
                                        <td class="p-3"><span class="bg-emerald-50 text-emerald-600 px-2.5 py-0.5 rounded-full font-bold">مكتمل</span></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 font-bold text-[#0E216C]">#TXN-9811</td>
                                        <td class="p-3">اشتراك باقة تدريبية (متدرب)</td>
                                        <td class="p-3 font-bold text-emerald-600">+ 2,200 ج.م</td>
                                        <td class="p-3">24/07/2026</td>
                                        <td class="p-3"><span class="bg-emerald-50 text-emerald-600 px-2.5 py-0.5 rounded-full font-bold">مكتمل</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <!-- القائمة الجانبية (يمين الشاشة) -->
        <aside class="w-72 bg-[#0E216C] text-white flex flex-col justify-between border-l border-white/10 shrink-0 select-none">
            <div>
                <div class="p-6 border-b border-white/10 flex items-center justify-center">
                    <div class="bg-white p-3 rounded-2xl shadow-md w-24 h-24 flex items-center justify-center">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="سُوقْنِي" class="h-16 w-16 object-contain" onerror="this.src='https://via.placeholder.com/150?text=Sawaqny'">
                    </div>
                </div>

                <nav class="p-4 space-y-1 text-sm font-semibold">
                    <a href="#" onclick="switchTab(this, 'الرئيسية والإحصائيات', 'content-home')" class="nav-link flex items-center gap-3 px-4 py-3.5 rounded-2xl bg-[#FE8511] text-white shadow-md transition">
                        <i class="fa-solid fa-chart-pie w-5 text-center"></i>
                        <span>الرئيسية والإحصائيات</span>
                    </a>
                    <a href="#" onclick="switchTab(this, 'توثيق الكباتن', 'content-captains')" class="nav-link flex items-center gap-3 px-4 py-3.5 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-user-shield w-5 text-center"></i>
                        <span>توثيق الكباتن</span>
                    </a>
                    <a href="#" onclick="switchTab(this, 'الباقات والأسعار', 'content-packages')" class="nav-link flex items-center gap-3 px-4 py-3.5 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-tags w-5 text-center"></i>
                        <span>الباقات والأسعار والدفع</span>
                    </a>
                    <a href="#" onclick="switchTab(this, 'الحجوزات والمواعيد', 'content-bookings')" class="nav-link flex items-center gap-3 px-4 py-3.5 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-calendar-days w-5 text-center"></i>
                        <span>الحجوزات والمواعيد</span>
                    </a>
                    <a href="#" onclick="switchTab(this, 'الشكاوي والدعم', 'content-support')" class="nav-link flex items-center gap-3 px-4 py-3.5 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-headset w-5 text-center"></i>
                        <span>الشكاوي والدعم</span>
                    </a>
                    <a href="#" onclick="switchTab(this, 'المالية والدفع', 'content-finance')" class="nav-link flex items-center gap-3 px-4 py-3.5 rounded-2xl text-gray-300 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-wallet w-5 text-center"></i>
                        <span>المالية والدفع</span>
                    </a>
                </nav>
            </div>

            <div class="p-4 border-t border-white/10">
                <button onclick="openActionModal('logout')" class="w-full flex items-center justify-center gap-2 px-4 py-3.5 rounded-2xl text-red-400 hover:bg-red-500/10 hover:text-red-300 font-bold transition text-sm">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>تسجيل الخروج</span>
                </button>
            </div>
        </aside>

    </div>

    <!-- ================= الكارد الموحد (النافذة المنبثقة في منتصف الشاشة لأي أكشن) ================= -->
    <div id="actionModal" class="fixed inset-0 bg-black/70 backdrop-blur-md z-50 items-center justify-center p-4 hidden">
        <div class="max-w-md w-full bg-white rounded-3xl p-6 shadow-2xl relative text-right animate-in fade-in zoom-in duration-200">
            <button onclick="closeActionModal()" class="absolute top-4 left-4 text-gray-400 hover:text-gray-600 text-2xl font-bold">&times;</button>
            
            <div id="modalBody">
                <!-- محتوى الكارد يتغير ديناميكياً حسب الأكشن -->
            </div>
        </div>
    </div>

    <!-- جافاسكريبت للتحكم بالواجهة والكارد المنتصف -->
    <script>
        let currentActionData = { type: null, targetId: null };

        function redirectToDashboard(event) {
            event.preventDefault();
            document.getElementById('loginScreen').style.display = 'none';
            document.getElementById('dashboardApp').classList.remove('hidden');
        }

        function switchTab(element, tabName, contentId) {
            const links = document.querySelectorAll('aside nav a');
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

        function switchTabByTarget(target) {
            const navLinks = document.querySelectorAll('aside nav a');
            if (target === 'captains') {
                switchTab(navLinks[1], 'توثيق الكباتن', 'content-captains');
            } else if (target === 'packages') {
                switchTab(navLinks[2], 'الباقات والأسعار', 'content-packages');
            }
        }

        // إظهار الكارد في منتصف الشاشة بناءً على الأكشن المطلوب
        function openActionModal(actionType, param1 = null, param2 = null) {
            currentActionData = { type: actionType, targetId: param1 };
            const modal = document.getElementById('actionModal');
            const body = document.getElementById('modalBody');
            
            let htmlContent = '';

            if (actionType === 'addCaptain') {
                htmlContent = `
                    <div class="text-center mb-4">
                        <div class="w-12 h-12 bg-orange-50 text-[#FE8511] rounded-2xl mx-auto flex items-center justify-center text-xl mb-2"><i class="fa-solid fa-user-plus"></i></div>
                        <h3 style="color: #0E216C;" class="text-lg font-black">إضافة كابتن جديد للأسطول</h3>
                        <p class="text-gray-400 text-xs">أدخل بيانات الكابتن الجديد بدقة</p>
                    </div>
                    <form onsubmit="executeAction(event)" class="space-y-3">
                        <input type="text" id="modalCapName" placeholder="اسم الكابتن الرباعي" required class="w-full p-3.5 border rounded-2xl text-xs bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                        <input type="text" id="modalCapPhone" placeholder="رقم الهاتف (مثال: 010xxxxxxxx)" required class="w-full p-3.5 border rounded-2xl text-xs bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                        <input type="text" id="modalCapCar" placeholder="نوع ولون السيارة" required class="w-full p-3.5 border rounded-2xl text-xs bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3.5 rounded-2xl font-bold text-xs shadow-md mt-2">تأكيد وإضافة الكابتن</button>
                    </form>
                `;
            } else if (actionType === 'deleteCaptain') {
                htmlContent = `
                    <div class="text-center mb-5">
                        <div class="w-12 h-12 bg-red-50 text-red-500 rounded-2xl mx-auto flex items-center justify-center text-xl mb-2"><i class="fa-solid fa-triangle-exclamation"></i></div>
                        <h3 style="color: #0E216C;" class="text-lg font-black">تأكيد الحذف</h3>
                        <p class="text-gray-500 text-xs mt-1">هل أنت متأكد من رغبتك في حذف هذا الكابتن نهائياً من الأسطول؟</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="executeAction()" class="w-full bg-red-500 text-white py-3 rounded-2xl font-bold text-xs shadow-md hover:bg-red-600">نعم، حذف</button>
                        <button onclick="closeActionModal()" class="w-full bg-gray-100 text-gray-700 py-3 rounded-2xl font-bold text-xs hover:bg-gray-200">إلغاء</button>
                    </div>
                `;
            } else if (actionType === 'toggleVerify') {
                htmlContent = `
                    <div class="text-center mb-5">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl mx-auto flex items-center justify-center text-xl mb-2"><i class="fa-solid fa-user-shield"></i></div>
                        <h3 style="color: #0E216C;" class="text-lg font-black">تغيير حالة توثيق الكابتن</h3>
                        <p class="text-gray-500 text-xs mt-1">هل تريد بالتأكيد تبديل حالة التوثيق لهذا الكابتن؟</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="executeAction()" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold text-xs shadow-md">تأكيد التبديل</button>
                        <button onclick="closeActionModal()" class="w-full bg-gray-100 text-gray-700 py-3 rounded-2xl font-bold text-xs">إلغاء</button>
                    </div>
                `;
            } else if (actionType === 'payPackage') {
                // فورم الدفع الذي يظهر بعد اختيار الباقة
                const packageName = param1;
                const packagePrice = param2;
                htmlContent = `
                    <div class="text-center mb-4">
                        <div class="w-12 h-12 bg-orange-50 text-[#FE8511] rounded-2xl mx-auto flex items-center justify-center text-xl mb-2"><i class="fa-solid fa-credit-card"></i></div>
                        <h3 style="color: #0E216C;" class="text-lg font-black">إتمام الدفع لـ (${packageName})</h3>
                        <p class="text-gray-400 text-xs mt-1">المطلوب سداده: <span class="font-bold text-[#FE8511]">${packagePrice} ج.م</span></p>
                    </div>
                    <form onsubmit="executeAction(event)" class="space-y-3 text-xs">
                        <div>
                            <label class="block font-bold text-gray-700 mb-1">اسم حامل البطاقة</label>
                            <input type="text" placeholder="الاسم مكتوب على البطاقة" required class="w-full p-3 border rounded-2xl bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                        </div>
                        <div>
                            <label class="block font-bold text-gray-700 mb-1">رقم البطاقة الائتمانية</label>
                            <input type="text" placeholder="4242 •••• •••• ••••" required class="w-full p-3 border rounded-2xl bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <input type="text" placeholder="MM/YY" required class="p-3 border rounded-2xl bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                            <input type="password" placeholder="CVV" required class="p-3 border rounded-2xl bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                        </div>
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3.5 rounded-2xl font-bold shadow-md mt-2">دفع ${packagePrice} ج.م وتأكيد الاشتراك</button>
                    </form>
                `;
            } else if (actionType === 'completeBooking') {
                htmlContent = `
                    <div class="text-center mb-5">
                        <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl mx-auto flex items-center justify-center text-xl mb-2"><i class="fa-solid fa-check-circle"></i></div>
                        <h3 style="color: #0E216C;" class="text-lg font-black">إتمام الحصة التدريبية</h3>
                        <p class="text-gray-500 text-xs mt-1">هل تم الانتهاء من تنفيذ الحصة بنجاح لتسجيلها كمكتملة؟</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="executeAction()" class="w-full bg-emerald-600 text-white py-3 rounded-2xl font-bold text-xs shadow-md hover:bg-emerald-700">تأكيد الإتمام</button>
                        <button onclick="closeActionModal()" class="w-full bg-gray-100 text-gray-700 py-3 rounded-2xl font-bold text-xs">إلغاء</button>
                    </div>
                `;
            } else if (actionType === 'cancelBooking') {
                htmlContent = `
                    <div class="text-center mb-5">
                        <div class="w-12 h-12 bg-red-50 text-red-500 rounded-2xl mx-auto flex items-center justify-center text-xl mb-2"><i class="fa-solid fa-ban"></i></div>
                        <h3 style="color: #0E216C;" class="text-lg font-black">إلغاء الحجز</h3>
                        <p class="text-gray-500 text-xs mt-1">هل أنت متأكد من رغبتك في إلغاء هذا الحجز المجدول؟</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="executeAction()" class="w-full bg-red-500 text-white py-3 rounded-2xl font-bold text-xs shadow-md hover:bg-red-600">نعم، إلغاء الحجز</button>
                        <button onclick="closeActionModal()" class="w-full bg-gray-100 text-gray-700 py-3 rounded-2xl font-bold text-xs">تراجع</button>
                    </div>
                `;
            } else if (actionType === 'viewTicket') {
                // عرض تفاصيل الشكوى والقدرة على الرد واتخاذ إجراء
                const ticketId = param1;
                htmlContent = `
                    <div class="mb-4">
                        <div class="flex justify-between items-center mb-3">
                            <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[11px] font-bold">شكوى رقم #${ticketId}</span>
                            <span class="text-gray-400 text-xs">منذ ساعتين</span>
                        </div>
                        <h3 style="color: #0E216C;" class="text-base font-black mb-1">مشكلة في تحويل الأرباح المالية أسبوعياً</h3>
                        <p class="text-gray-500 text-xs bg-gray-50 p-3 rounded-2xl mb-4 border border-gray-100">تفاصيل الشكوى الواردة: "لم يتم وصول الأرباح الخاصة بالأسطول حتى الآن رغم انتهاء الموعد المحدد، برجاء المتابعة السريعة وحل المشكلة."</p>
                        
                        <div class="space-y-3">
                            <label class="block text-xs font-bold text-[#0E216C]">الرد على الشكوى أو اتخاذ إجراء:</label>
                            <textarea id="replyText" rows="3" placeholder="اكتب ردك هنا..." class="w-full p-3 border rounded-2xl text-xs bg-gray-50 focus:outline-none focus:border-[#FE8511]"></textarea>
                            
                            <div class="grid grid-cols-2 gap-2">
                                <button onclick="executeAction()" style="background-color: #FE8511;" class="text-white py-3 rounded-2xl font-bold text-xs shadow-md">إرسال الرد وإغلاق الشكوى</button>
                                <button onclick="closeActionModal()" class="bg-gray-100 text-gray-700 py-3 rounded-2xl font-bold text-xs">إلغاء</button>
                            </div>
                        </div>
                    </div>
                `;
            } else if (actionType === 'newTicket') {
                htmlContent = `
                    <div class="text-center mb-4">
                        <h3 style="color: #0E216C;" class="text-lg font-black">إرسال شكوى أو استفسار جديد</h3>
                    </div>
                    <form onsubmit="executeAction(event)" class="space-y-3 text-xs">
                        <input type="text" id="newTicketTitle" placeholder="عنوان المشكلة" required class="w-full p-3 border rounded-2xl bg-gray-50 focus:outline-none focus:border-[#FE8511]">
                        <textarea id="newTicketDesc" placeholder="تفاصيل المشكلة..." required rows="3" class="w-full p-3 border rounded-2xl bg-gray-50 focus:outline-none focus:border-[#FE8511]"></textarea>
                        <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3.5 rounded-2xl font-bold shadow-md">إرسال التذكرة</button>
                    </form>
                `;
            } else if (actionType === 'requestWithdrawal') {
                htmlContent = `
                    <div class="text-center mb-5">
                        <div class="w-12 h-12 bg-orange-50 text-[#FE8511] rounded-2xl mx-auto flex items-center justify-center text-xl mb-2"><i class="fa-solid fa-money-bill-transfer"></i></div>
                        <h3 style="color: #0E216C;" class="text-lg font-black">طلب سحب رصيد فوري</h3>
                        <p class="text-gray-500 text-xs mt-1">هل تريد تحويل الرصيد القابل للسحب (14,200 ج.م) لحسابك البنكي؟</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="executeAction()" style="background-color: #FE8511;" class="w-full text-white py-3 rounded-2xl font-bold text-xs shadow-md">تأكيد طلب السحب</button>
                        <button onclick="closeActionModal()" class="w-full bg-gray-100 text-gray-700 py-3 rounded-2xl font-bold text-xs">إلغاء</button>
                    </div>
                `;
            } else if (actionType === 'logout') {
                htmlContent = `
                    <div class="text-center mb-5">
                        <div class="w-12 h-12 bg-red-50 text-red-500 rounded-2xl mx-auto flex items-center justify-center text-xl mb-2"><i class="fa-solid fa-right-from-bracket"></i></div>
                        <h3 style="color: #0E216C;" class="text-lg font-black">تسجيل الخروج</h3>
                        <p class="text-gray-500 text-xs mt-1">هل أنت متأكد أنك تريد الخروج من لوحة التحكم؟</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="executeAction()" class="w-full bg-red-500 text-white py-3 rounded-2xl font-bold text-xs shadow-md hover:bg-red-600">نعم، خروج</button>
                        <button onclick="closeActionModal()" class="w-full bg-gray-100 text-gray-700 py-3 rounded-2xl font-bold text-xs">إلغاء</button>
                    </div>
                `;
            }

            body.innerHTML = htmlContent;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeActionModal() {
            const modal = document.getElementById('actionModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // تنفيذ الأكشن المختار بناءً على تأكيد الكارد
        function executeAction(e) {
            if(e) e.preventDefault();
            const { type, targetId } = currentActionData;

            if (type === 'addCaptain') {
                const name = document.getElementById('modalCapName').value;
                const phone = document.getElementById('modalCapPhone').value;
                const car = document.getElementById('modalCapCar').value;
                const tableBody = document.querySelector('#captainsTable tbody');
                
                const newId = 'cap-' + Date.now();
                const newRow = document.createElement('tr');
                newRow.id = newId;
                newRow.innerHTML = `
                    <td class="p-3 font-bold text-[#0E216C]">${name}</td>
                    <td class="p-3 text-gray-600">${phone}</td>
                    <td class="p-3 text-gray-600">${car}</td>
                    <td class="p-3 text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 5.0</td>
                    <td class="p-3 text-gray-600">0 حصة</td>
                    <td class="p-3 text-gray-400">اليوم</td>
                    <td class="p-3"><span class="bg-amber-50 text-amber-600 px-3 py-1 rounded-xl font-bold status-badge">قيد المراجعة</span></td>
                    <td class="p-3 text-center flex items-center justify-center gap-2">
                        <button onclick="openActionModal('toggleVerify', '${newId}')" class="bg-blue-50 text-blue-600 px-3 py-2 rounded-xl font-bold hover:bg-blue-100 transition shadow-sm">تبديل</button>
                        <button onclick="openActionModal('deleteCaptain', '${newId}')" class="bg-red-50 text-red-600 px-3 py-2 rounded-xl font-bold hover:bg-red-100 transition shadow-sm">حذف</button>
                    </td>
                `;
                tableBody.appendChild(newRow);
                alert('تم إضافة الكابتن بنجاح!');
            } else if (type === 'deleteCaptain') {
                const row = document.getElementById(targetId);
                if(row) row.remove();
                alert('تم حذف الكابتن بنجاح.');
            } else if (type === 'toggleVerify') {
                const row = document.getElementById(targetId);
                const badge = row.querySelector('.status-badge');
                if(badge.innerText === 'موثق') {
                    badge.innerText = 'قيد المراجعة';
                    badge.className = 'bg-amber-50 text-amber-600 px-3 py-1 rounded-xl font-bold status-badge';
                } else {
                    badge.innerText = 'موثق';
                    badge.className = 'bg-emerald-50 text-emerald-600 px-3 py-1 rounded-xl font-bold status-badge';
                }
                alert('تم تغيير حالة التوثيق بنجاح.');
            } else if (type === 'payPackage') {
                alert('تم عملية الدفع بنجاح واشتراكك في الباقة أصبح مفَعلاً!');
            } else if (type === 'completeBooking') {
                const item = document.getElementById(targetId);
                if(item) item.remove();
                alert('تم إتمام الحصة وتسجيلها بنجاح.');
            } else if (type === 'cancelBooking') {
                const item = document.getElementById(targetId);
                if(item) item.remove();
                alert('تم إلغاء الحجز بنجاح.');
            } else if (type === 'viewToken' || type === 'viewTicket') {
                alert('تم إرسال الرد واتخاذ الإجراء بنجاح!');
            } else if (type === 'newTicket') {
                alert('تم إرسال الشكوى لفريق الدعم بنجاح!');
            } else if (type === 'requestWithdrawal') {
                document.getElementById('withdrawBalance').innerText = '0 ج.م';
                alert('تم تقديم طلب السحب بنجاح وسيتم إيداع المبلغ خلال 48 ساعة.');
            } else if (type === 'logout') {
                document.getElementById('dashboardApp').classList.add('hidden');
                document.getElementById('loginScreen').style.display = 'flex';
                document.getElementById('loginForm').reset();
                const navLinks = document.querySelectorAll('aside nav a');
                switchTab(navLinks[0], 'الرئيسية والإحصائيات', 'content-home');
            }

            closeActionModal();
        }
    </script>
</body>
</html>