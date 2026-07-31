<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - إنشاء حساب مدرسة جديدة</title>
    <!-- استخدام Tailwind CSS للتصميم -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts (Cairo) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans text-gray-900" style="font-family: 'Cairo', sans-serif;">

    <!-- ================= شاشة تسجيل حساب مدرسة جديد ================= -->
    <div class="fixed inset-0 bg-slate-900 z-50 flex items-center justify-center p-4 overflow-y-auto">

        <!-- كارت التسجيل الأزرق -->
        <div class="max-w-lg w-full bg-[#0E216C] rounded-3xl shadow-2xl overflow-hidden border border-white/10 my-8">

            <!-- الهيدر واللوجو -->
            <div class="border-b border-white/10 p-6 text-center flex flex-col items-center justify-center relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-32 h-32 bg-[#FE8511]/20 rounded-full blur-2xl pointer-events-none"></div>
                
                <!-- صندوق اللوجو -->
                <div class="logo-box mb-3 shadow-md flex items-center justify-center bg-white p-2.5 rounded-2xl border border-gray-100">
                    <a href="{{ url('/school-dashboard') }}">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="سُوقْنِي" class="h-14 w-14 object-contain" onerror="this.src='https://via.placeholder.com/150?text=Sawaqny'">
                    </a>
                </div>

                <h1 class="text-xl font-black tracking-wide text-white mt-1">انضم إلينا كمنظومة تعليمية</h1>
                <p class="text-white/80 text-xs mt-1.5 font-semibold">سجل بيانات مدرسة القيادة الخاصة بك وابدأ في إدارة طلابك وأسطولك</p>
            </div>

            <!-- الفورم -->
            <div class="p-6 sm:p-8">
                <form action="#" method="POST">
                    @csrf

                    <!-- اسم المدرسة -->
                    <div class="mb-4 text-right">
                        <label class="block text-xs font-bold mb-1.5 text-white">اسم مدرسة القيادة</label>
                        <div class="relative flex items-center">
                            <input type="text" required placeholder="مثال: مدرسة النور للقيادة" dir="rtl"
                                class="w-full pr-11 pl-4 py-3 border border-white/20 rounded-xl focus:outline-none focus:border-[#FE8511] text-sm bg-white/10 text-white placeholder-white/60 font-medium transition">
                            <span style="color: #FE8511;" class="absolute right-4 pointer-events-none flex items-center justify-center">
                                <i class="fa-solid fa-school text-sm"></i>
                            </span>
                        </div>
                    </div>

                    <!-- البريد الإلكتروني للمدرسة -->
                    <div class="mb-4 text-right">
                        <label class="block text-xs font-bold mb-1.5 text-white">البريد الإلكتروني الرسمي</label>
                        <div class="relative flex items-center">
                            <input type="email" required placeholder="school@sawaqny.com" dir="rtl"
                                class="w-full pr-11 pl-4 py-3 border border-white/20 rounded-2xl focus:outline-none focus:border-[#FE8511] text-sm bg-white/10 text-white placeholder-white/60 font-medium transition">
                            <span style="color: #FE8511;" class="absolute right-4 pointer-events-none flex items-center justify-center">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </span>
                        </div>
                    </div>

                    <!-- رقم الهاتف -->
                    <div class="mb-4 text-right">
                        <label class="block text-xs font-bold mb-1.5 text-white">رقم الهاتف أو الخط الساخن</label>
                        <div class="relative flex items-center">
                            <input type="tel" required placeholder="01012345678" dir="rtl"
                                class="w-full pr-11 pl-4 py-3 border border-white/20 rounded-2xl focus:outline-none focus:border-[#FE8511] text-sm bg-white/10 text-white placeholder-white/60 font-medium transition">
                            <span style="color: #FE8511;" class="absolute right-4 pointer-events-none flex items-center justify-center">
                                <i class="fa-solid fa-phone text-sm"></i>
                            </span>
                        </div>
                    </div>

                    <!-- كلمة المرور -->
                    <div class="mb-5 text-right">
                        <label class="block text-xs font-bold mb-1.5 text-white">كلمة المرور</label>
                        <div class="relative flex items-center">
                            <input type="password" required placeholder="••••••••" dir="rtl"
                                class="w-full pr-11 pl-4 py-3 border border-white/20 rounded-2xl focus:outline-none focus:border-[#FE8511] text-sm bg-white/10 text-white placeholder-white/60 font-medium transition">
                            <span style="color: #FE8511;" class="absolute right-4 pointer-events-none flex items-center justify-center">
                                <i class="fa-solid fa-lock text-sm"></i>
                            </span>
                        </div>
                    </div>

                    <!-- زر التسجيل -->
                    <button type="submit" style="background-color: #FE8511;" class="w-full text-white py-3.5 rounded-2xl font-bold hover:opacity-95 transition shadow-lg shadow-orange-500/25 text-sm flex items-center justify-center gap-2 mb-4">
                        <span>إتمام تسجيل المدرسة</span>
                        <i class="fa-solid fa-check"></i>
                    </button>

                    <!-- العودة لتسجيل الدخول -->
                    <div class="text-center pt-2 border-t border-white/10">
                        <p class="text-xs text-white/80 font-medium">لديك حساب بالفعل؟ 
                            <a href="{{ url('/school-dashboard') }}" class="text-[#FE8511] font-bold hover:underline mr-1">تسجيل الدخول</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>