<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - إعداد البروفايل والباقات</title>
    <link rel="icon" type="image/jpeg" href="logo.jpeg">
    <link rel="stylesheet" href="{{ asset('css/captain.css') }}">
    <!-- Font Awesome للأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body class="auth-body">
    <div class="auth-container wide">
        <h2>إعداد البروفايل 👤</h2>
        <p class="subtitle">حدد سعرك ونبذة عنك</p>

        <form id="profileManageForm">
            <div class="form-group">
                <label for="hourlyRate">سعر الحصة الفردية (ج.م)</label>
                <input type="number" id="hourlyRate" placeholder="200" required>
            </div>
            <div class="form-group">
                <label for="bio">نبذة عن خبرتك (Bio)</label>
                <textarea id="bio" rows="3" placeholder="خبرة 5 سنوات في تعليم القيادة المانيوال والأتوماتيك..."></textarea>
            </div>
            <button type="submit" class="btn-primary">حفظ بيانات البروفايل</button>
        </form>

        <!-- 👈 رسالة نجاح الحفظ -->
        <div id="saveSuccessMsg" class="success-alert" style="display: none;">
            <i class="fa-solid fa-circle-check"></i> تم حفظ بيانات البروفايل بنجاح!
        </div>

        <div id="packagesList" class="packages-list"></div>

        <a href="captain_dashboard.html" id="btnGoToSchedule" class="btn-primary btn-next">
            التالي  
        </a>
    </div>

    <!-- Floating AI Chatbot Button -->
    <a href="chatbot.html" class="ai-chatbot-btn" title="تحدث مع مساعد سوقني الذكي">
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

    <!-- كود الجافاسكريبت لحفظ البيانات وإظهار الرسالة -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const profileForm = document.getElementById('profileManageForm');
            const successMsg = document.getElementById('saveSuccessMsg');

            // استرجاع البيانات إن كانت محفوظة سابقاً
            const savedRate = localStorage.getItem('hourlyRate');
            const savedBio = localStorage.getItem('bio');
            if (savedRate) document.getElementById('hourlyRate').value = savedRate;
            if (savedBio) document.getElementById('bio').value = savedBio;

            profileForm.addEventListener('submit', (e) => {
                e.preventDefault();

                // حفظ البيانات في LocalStorage
                const hourlyRate = document.getElementById('hourlyRate').value;
                const bio = document.getElementById('bio').value;

                localStorage.setItem('hourlyRate', hourlyRate);
                localStorage.setItem('bio', bio);

                // إظهار رسالة النجاح
                successMsg.style.display = 'flex';

                // إخفاء الرسالة تلقائياً بعد 3 ثوانٍ
                setTimeout(() => {
                    successMsg.style.display = 'none';
                }, 3000);
            });
        });
    </script>
    <script src="captain.js"></script>
</body>
</html>