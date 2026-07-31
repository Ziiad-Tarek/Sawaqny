<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - توثيق بيانات الكابتن</title>
    <link rel="icon" type="image/jpeg" href="logo.jpeg">
    <link rel="stylesheet" href="{{ asset('css/captain.css') }}">
    <style>
        /* كلاس مساعد لإخفاء العنصر */
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="auth-body">
    <div class="auth-container wide">
        <h2>استكمال بيانات وتوثيق الحساب 📋</h2>
        <p class="subtitle">يرجى ملء البيانات الشخصية والمهنية ورفع المستندات المطلوبة كاملة</p>

        <!-- تم تحديد الوجهة لتكون صفحة المراجعة pending_review -->
        <form id="profileSetupForm" action="/pending_review" method="GET">
            <!-- 1. نوع التبعية -->
            <div class="form-group">
                <label for="employmentType">جهة العمل / التبعية *</label>
                <select id="employmentType" onchange="toggleSchoolIdInput()" required>
                    <option value="freelance">كابتن حر (Freelance)</option>
                    <option value="school">مدرسة قيادة معتمدة</option>
                </select>
            </div>

            <!-- حقل كود المدرسة (يظهر فقط عند اختيار مدرسة) -->
            <div class="form-group hidden" id="schoolIdGroup">
                <label for="schoolId">كود مدرسة القيادة المعلم بها *</label>
                <input type="text" id="schoolId" placeholder="أدخل كود المدرسة">
            </div>

            <!-- 2. البيانات الشخصية النصية -->
            <div class="form-grid-2">
                <div class="form-group">
                    <label for="fullName">الاسم بالكامل (كما في الرقم القومي) *</label>
                    <input type="text" id="fullName" placeholder="أدخل اسمك الرباعي" required>
                </div>
                <div class="form-group">
                    <label for="nationalId">الرقم القومي (14 رقم) *</label>
                    <input type="text" id="nationalId" maxlength="14" placeholder="2990101xxxxxxx" required>
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label for="address">عنوان السكن الحالي *</label>
                    <input type="text" id="address" placeholder="المحافظة - المنطقة - الشارع" required>
                </div>
                <div class="form-group">
                    <label for="licenseNumber">رقم رخصة القيادة *</label>
                    <input type="text" id="licenseNumber" placeholder="رقم الرخصة المهنية/الخاصة" required>
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label for="carModel">نوع وموديل السيارة *</label>
                    <input type="text" id="carModel" placeholder="مثلاً: نيسان صني 2022" required>
                </div>
                <div class="form-group">
                    <label for="carPlate">رقم لوحة السيارة *</label>
                    <input type="text" id="carPlate" placeholder="مثلاً: أ ب ج 1 2 3" required>
                </div>
            </div>

            <hr style="margin: 1.2rem 0; border: 0; border-top: 1px solid #E9ECEF;">
            <h3 style="color: #0E216C; font-size: 1.1rem; margin-bottom: 0.8rem;">📂 المرفقات والمستندات الرسمية:</h3>

            <!-- 3. المرفقات (ملفات) -->
            <div class="form-grid-2">
                <div class="form-group">
                    <label>صورة الرقم القومي (وجهين) *</label>
                    <input type="file" id="docNationalId" accept="image/*,.pdf" required>
                </div>
                <div class="form-group">
                    <label>صورة رخصة القيادة *</label>
                    <input type="file" id="docLicense" accept="image/*,.pdf" required>
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label>صورة رخصة السيارة *</label>
                    <input type="file" id="docCarLicense" accept="image/*,.pdf" required>
                </div>
                <div class="form-group">
                    <label>صحيفة الحالة الجنائية (فيش وتشبيه) *</label>
                    <input type="file" id="docCriminalRecord" accept="image/*,.pdf" required>
                </div>
            </div>

            <div class="form-group">
                <label>صورة شخصية خلفية بيضاء (للبروفايل) *</label>
                <input type="file" id="docPersonalPhoto" accept="image/*" required>
            </div>
            <button type="submit" class="btn-primary" style="margin-top: 1rem;">إرسال البيانات والمستندات للمراجعة ⏳</button>
        </form>
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

    <!-- كود الجافاسكريبت للتحكم في ظواهر الصفحة والتوجيه -->
    <script>
        function toggleSchoolIdInput() {
            const employmentType = document.getElementById('employmentType').value;
            const schoolIdGroup = document.getElementById('schoolIdGroup');
            const schoolIdInput = document.getElementById('schoolId');

            if (employmentType === 'school') {
                schoolIdGroup.classList.remove('hidden');
                schoolIdInput.setAttribute('required', 'true');
            } else {
                schoolIdGroup.classList.add('hidden');
                schoolIdInput.removeAttribute('required');
                schoolIdInput.value = '';
            }
        }

        // التوجيه لصفحة pending_review عند الضغط على إرسال
        document.getElementById('profileSetupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            window.location.href = '/pending_review';
        });
    </script>
    <script src="captain.js"></script>
</body>
</html>
