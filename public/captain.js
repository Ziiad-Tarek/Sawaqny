// ==========================================
// 1️⃣ التسجيل وإدخال الكود (OTP)
// ==========================================
const registerForm = document.getElementById('registerForm');
if (registerForm) {
    registerForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const contactInfo = document.getElementById('contactInfo').value.trim();
        const password = document.getElementById('password').value.trim();
        
        if (contactInfo && password) {
            localStorage.setItem('captain_contact', contactInfo);
            showModal(`
                <h3 style="color: #0E216C; margin-bottom: 1rem;"><i class="fa-solid fa-key" style="margin-left: 8px; color: #FE8511;"></i>تأكيد الحساب</h3>
                <p style="margin-bottom: 1rem;">تم إرسال كود التأكيد (OTP) بنجاح.</p>
                <button class="btn-primary" onclick="closeModal(); window.location.href='verify_otp.html';">الانتقال لصفحة التحقق</button>
            `);
        }
    });
}
function handleForgotSubmit(e) {
    e.preventDefault();
    
    // إخفاء الفورم وإظهار رسالة النجاح
    forgotForm.style.display = 'none';
    forgotSuccessMsg.style.display = 'block';
    
    // التوجيه إلى صفحة تأكيد الرمز بعد 2 ثانية
    setTimeout(() => {
        window.location.href = 'verify_otp.html'; // 👈 غيري otp.html باسم ملف الصفحة الثانية لديكِ
    }, 2000);
}
// ==========================================
// 2️⃣ قبول ورفض طلبات الحجز (عبر كارد المنتصف)
// ==========================================
window.handleBookingAction = function (bookingId, action) {
    const targetCard = document.getElementById(`bookingCard-${bookingId}`);
    if (action === 'accept') {
        showModal(`
            <h3 style="color: #137333; margin-bottom: 1rem;"><i class="fa-solid fa-circle-check" style="margin-left: 8px;"></i>تم قبول الطلب #${bookingId}</h3>
            <p style="margin-bottom: 1.5rem; color: #555;">تمت مزامنة الموعد بنجاح مع جدولك اليومي.</p>
            <div style="text-align: left;"><button class="btn-primary" onclick="closeModal()">حسناً</button></div>
        `);
        if (targetCard) {
            targetCard.style.borderRightColor = "#137333";
            const actionBtnsDiv = targetCard.querySelector('.action-btns');
            if (actionBtnsDiv) {
                actionBtnsDiv.innerHTML = `<span style="color: #137333; font-weight: bold; font-size: 1rem;"><i class="fa-solid fa-check" style="margin-left: 5px;"></i>تم قبول الحجز</span>`;
            }
        }
    } else if (action === 'reject') {
        showModal(`
            <h3 style="color: #D93025; margin-bottom: 1rem;"><i class="fa-solid fa-circle-xmark" style="margin-left: 8px;"></i>رفض الطلب #${bookingId}</h3>
            <div class="form-group" style="margin-bottom: 1rem; text-align: right;">
                <label style="display: block; margin-bottom: 0.5rem; color: #333;">سبب الرفض (اختياري):</label>
                <input type="text" id="rejectReasonInput" placeholder="أدخل سبب الرفض هنا..." style="width: 100%; padding: 0.6rem; border: 1px solid #ccc; border-radius: 6px;">
            </div>
            <div style="display: flex; gap: 10px; justify-content: flex-end;">
                <button onclick="closeModal()" style="background: #6C757D; color: white; border: none; padding: 0.6rem 1.2rem; border-radius: 6px; cursor: pointer;">إلغاء</button>
                <button onclick="confirmReject(${bookingId})" class="btn-primary" style="background: #D93025; margin: 0; width: auto;">تأكيد الرفض</button>
            </div>
        `);
    }
};

window.confirmReject = function(bookingId) {
    const reason = document.getElementById('rejectReasonInput').value;
    closeModal();
    const targetCard = document.getElementById(`bookingCard-${bookingId}`);
    if (targetCard) {
        targetCard.style.borderRightColor = "#D93025";
        const actionBtnsDiv = targetCard.querySelector('.action-btns');
        if (actionBtnsDiv) {
            actionBtnsDiv.innerHTML = `<span style="color: #D93025; font-weight: bold; font-size: 1rem;"><i class="fa-solid fa-xmark" style="margin-left: 5px;"></i>تم رفض الحجز</span>`;
        }
    }
    showModal(`
        <h3 style="color: #0E216C; margin-bottom: 1rem;">تم بنجاح</h3>
        <p style="margin-bottom: 1.5rem;">تم إرسال سبب الرفض وتحديث حالة الطلب.</p>
        <div style="text-align: left;"><button class="btn-primary" onclick="closeModal()">حسناً</button></div>
    `);
};

// ==========================================
// 3️⃣ تقويم المواعيد وتحديد التفرغ
// ==========================================
window.addScheduleItem = function(e) {
    e.preventDefault();
    const day = document.getElementById('workDay').value;
    const startTime = document.getElementById('startTime').value;
    const endTime = document.getElementById('endTime').value;

    const scheduleList = document.getElementById('scheduleList');
    const scheduleCard = document.createElement('div');
    scheduleCard.style.cssText = "background: #F8F9FA; padding: 0.8rem; border-radius: 6px; border-right: 4px solid #0E216C; display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;";
    scheduleCard.innerHTML = `<span><i class="fa-solid fa-circle-dot" style="color: #137333; margin-left: 8px;"></i>متاح يوم ${day} (من ${startTime} إلى ${endTime})</span> <button style="background:none; border:none; color:#E74C3C; cursor:pointer;" onclick="this.parentElement.remove()"><i class="fa-solid fa-trash-can"></i></button>`;
    scheduleList.appendChild(scheduleCard);

    document.getElementById('scheduleForm').reset();
    
    showModal(`
        <h3 style="color: #137333; margin-bottom: 1rem;"><i class="fa-solid fa-clock-rotate-left" style="margin-left: 8px;"></i>تم الحفظ بنجاح</h3>
        <p style="margin-bottom: 1.5rem;">تمت إضافة وقت التفرغ (${day} من ${startTime} إلى ${endTime}) إلى جدولك.</p>
        <div style="text-align: left;"><button class="btn-primary" onclick="closeModal()">تم</button></div>
    `);
};

// ==========================================
// 4️⃣ متابعة المتدربين وإنهاء الحصة (داخل كارد المنتصف)
// ==========================================
let activeStudent = "";

window.openSessionModal = function(studentName, cardId) {
    activeStudent = studentName;
    showModal(`
        <h3 style="color: #0E216C; margin-bottom: 1rem;"><i class="fa-solid fa-car-side" style="margin-left: 8px; color: #FE8511;"></i>إنهاء حصة المتدرب: ${studentName}</h3>
        <div class="form-group" style="margin-bottom: 1rem; text-align: right;">
            <label style="display: block; margin-bottom: 0.5rem; color: #333;">ما تعلمه المتدرب اليوم:</label>
            <input type="text" id="modalLearned" placeholder="مثال: الركن الموازي، التحكم بالدبرياج" style="width: 100%; padding: 0.6rem; border: 1px solid #ccc; border-radius: 6px;">
        </div>
        <div class="form-group" style="margin-bottom: 1.5rem; text-align: right;">
            <label style="display: block; margin-bottom: 0.5rem; color: #333;">ما يحتاج إلى التركيز عليه:</label>
            <input type="text" id="modalFocus" placeholder="مثال: التعامل مع المطبات، الدوران للخلف" style="width: 100%; padding: 0.6rem; border: 1px solid #ccc; border-radius: 6px;">
        </div>
        <div style="display: flex; gap: 10px; justify-content: flex-end;">
            <button onclick="closeModal()" style="background: #6C757D; color: white; border: none; padding: 0.6rem 1.2rem; border-radius: 6px; cursor: pointer;">إلغاء</button>
            <button onclick="submitSessionResult('${cardId}')" class="btn-primary" style="margin: 0; width: auto;">حفظ وإنهاء الحصة</button>
        </div>
    `);
};

window.submitSessionResult = function(cardId) {
    const learned = document.getElementById('modalLearned').value.trim();
    const focus = document.getElementById('modalFocus').value.trim();

    if (!learned) {
        alert("يرجى إدخال المهارات التي تعلمها المتدرب.");
        return;
    }

    closeModal();

    const targetCard = document.getElementById(cardId);
    if (targetCard) {
        targetCard.style.borderRightColor = "#34A853";
        const actionArea = targetCard.querySelector('.session-action-area');
        if (actionArea) {
            actionArea.innerHTML = `
                <div style="background: #E6F4EA; padding: 0.6rem 1rem; border-radius: 8px; text-align: right; font-size: 0.85rem;">
                    <strong style="color: #137333; display: block; margin-bottom: 2px;"><i class="fa-solid fa-circle-check" style="margin-left: 5px;"></i>تم إنهاء الحصة</strong>
                    <span style="color: #333;"><strong>ما تعلمه:</strong> ${learned}</span><br>
                    <span style="color: #333;"><strong>للتركيز:</strong> ${focus || 'لا توجد ملاحظات'}</span>
                </div>
            `;
        }
    }

    showModal(`
        <div style="border-right: 5px solid #34A853; padding-right: 10px; text-align: right;">
            <h3 style="color: #137333; margin-bottom: 0.8rem;"><i class="fa-solid fa-circle-check" style="margin-left: 8px;"></i>تم إنهاء الحصة بنجاح</h3>
            <p style="margin: 4px 0; color: #333;"><i class="fa-solid fa-user" style="margin-left: 6px; color: #666;"></i><strong>👤 المتدرب:</strong> ${activeStudent}</p>
            <p style="margin: 4px 0; color: #333;"><i class="fa-solid fa-bullseye" style="margin-left: 6px; color: #666;"></i><strong>🎯 ما تعلمه:</strong> ${learned}</p>
            <p style="margin: 4px 0; color: #333;"><i class="fa-solid fa-triangle-exclamation" style="margin-left: 6px; color: #666;"></i><strong>⚠️ يحتاج للتركيز على:</strong> ${focus || 'لا توجد ملاحظات إضافية'}</p>
        </div>
        <div style="text-align: left; margin-top: 1.5rem;"><button class="btn-primary" onclick="closeModal()">إغلاق</button></div>
    `);
};

// ==========================================
// 5️⃣ طلب سحب الأرباح (عبر كارد المنتصف)
// ==========================================
window.openPayoutModal = function(amount) {
    showModal(`
        <h3 style="color: #0E216C; margin-bottom: 1rem;"><i class="fa-solid fa-wallet" style="margin-left: 8px; color: #FE8511;"></i>طلب سحب الأرباح</h3>
        <p style="margin-bottom: 1rem; color: #555;">المبلغ المتاح للسحب: <strong>${amount} ج.م</strong></p>
        <div class="form-group" style="margin-bottom: 1rem; text-align: right;">
            <label style="display: block; margin-bottom: 0.5rem; color: #333;">طريقة السحب:</label>
            <select id="payoutMethod" style="width: 100%; padding: 0.6rem; border: 1px solid #ccc; border-radius: 6px;">
                <option value="فودافون كاش">فودافون كاش</option>
                <option value="حساب بنكي">حساب بنكي</option>
                <option value="أورانج كاش">أورانج كاش</option>
            </select>
        </div>
        <div class="form-group" style="margin-bottom: 1.5rem; text-align: right;">
            <label style="display: block; margin-bottom: 0.5rem; color: #333;">رقم الحساب / المحفظة:</label>
            <input type="text" id="payoutAccount" placeholder="أدخل الرقم هنا..." style="width: 100%; padding: 0.6rem; border: 1px solid #ccc; border-radius: 6px;">
        </div>
        <div style="display: flex; gap: 10px; justify-content: flex-end;">
            <button onclick="closeModal()" style="background: #6C757D; color: white; border: none; padding: 0.6rem 1.2rem; border-radius: 6px; cursor: pointer;">إلغاء</button>
            <button onclick="confirmPayout(${amount})" class="btn-primary" style="margin: 0; width: auto;">تأكيد السحب</button>
        </div>
    `);
};

window.confirmPayout = function(amount) {
    const method = document.getElementById('payoutMethod').value;
    const account = document.getElementById('payoutAccount').value.trim();

    if (!account) {
        alert("يرجى إدخال رقم الحساب أو المحفظة.");
        return;
    }

    showModal(`
        <h3 style="color: #137333; margin-bottom: 1rem;"><i class="fa-solid fa-money-bill-transfer" style="margin-left: 8px;"></i>تم تقديم الطلب بنجاح</h3>
        <p style="margin-bottom: 1.5rem; color: #555;">طلب سحب مبلغ ${amount} ج.م عبر (${method} - ${account}) قيد المعالجة وسيصلك خلال 24 ساعة.</p>
        <div style="text-align: left;"><button class="btn-primary" onclick="closeModal()">حسناً</button></div>
    `);
};

// ==========================================
// 6️⃣ الشكاوى والدعم (عبر كارد المنتصف)
// ==========================================
window.openSupportModal = function() {
    showModal(`
        <h3 style="color: #D93025; margin-bottom: 1rem;"><i class="fa-solid fa-triangle-exclamation" style="margin-left: 8px;"></i>تقديم شكوى ضد متدرب</h3>
        <div class="form-group" style="margin-bottom: 1rem; text-align: right;">
            <label style="display: block; margin-bottom: 0.5rem; color: #333;">اسم المتدرب:</label>
            <input type="text" id="supportStudentName" placeholder="أدخل اسم المتدرب..." style="width: 100%; padding: 0.6rem; border: 1px solid #ccc; border-radius: 6px;">
        </div>
        <div class="form-group" style="margin-bottom: 1.5rem; text-align: right;">
            <label style="display: block; margin-bottom: 0.5rem; color: #333;">سبب الشكوى:</label>
            <textarea id="supportReason" placeholder="وضح المشكلة (عدم حضور، سلوك غير لائق...)" style="width: 100%; padding: 0.6rem; border: 1px solid #ccc; border-radius: 6px; height: 80px;"></textarea>
        </div>
        <div style="display: flex; gap: 10px; justify-content: flex-end;">
            <button onclick="closeModal()" style="background: #6C757D; color: white; border: none; padding: 0.6rem 1.2rem; border-radius: 6px; cursor: pointer;">إلغاء</button>
            <button onclick="submitSupport()" class="btn-primary" style="background: #D93025; margin: 0; width: auto;">إرسال الشكوى</button>
        </div>
    `);
};

window.submitSupport = function() {
    const student = document.getElementById('supportStudentName').value.trim();
    const reason = document.getElementById('supportReason').value.trim();

    if (!student || !reason) {
        alert("يرجى ملء جميع الحقول المطلوبة.");
        return;
    }

    closeModal();

    const supportCardContainer = document.getElementById('supportCardContainer');
    if (supportCardContainer) {
        supportCardContainer.innerHTML = `
            <div style="border: 1px solid #F5C6CB; background: #F8D7DA; padding: 1rem; border-radius: 8px; margin-top: 1rem; text-align: right;">
                <h4 style="color: #721C24; margin-bottom: 0.5rem;"><i class="fa-solid fa-circle-exclamation" style="margin-left: 5px;"></i>تفاصيل الشكوى المقدمة</h4>
                <p style="margin: 3px 0; color: #721C24;"><strong>المتدرب:</strong> ${student}</p>
                <p style="margin: 3px 0; color: #721C24;"><strong>السبب:</strong> ${reason}</p>
                <span style="font-size: 0.75rem; color: #856404; display: block; margin-top: 5px;">تم رفع التذكرة بنجاح إلى الإدارة</span>
            </div>
        `;
    }

    showModal(`
        <h3 style="color: #0E216C; margin-bottom: 1rem;"><i class="fa-solid fa-paper-plane" style="margin-left: 8px; color: #FE8511;"></i>تم إرسال الشكوى</h3>
        <p style="margin-bottom: 1.5rem; color: #555;">تم رفع تذكرة الشكوى بنجاح ضد المتدرب (${student})، وسيتواصل معك فريق الدعم قريباً.</p>
        <div style="text-align: left;"><button class="btn-primary" onclick="closeModal()">تم</button></div>
    `);
};

// ==========================================
// 7️⃣ تسجيل الخروج
// ==========================================
document.addEventListener('DOMContentLoaded', () => {
    const logoutBtns = document.querySelectorAll('.logout-item');
    logoutBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            showModal(`
                <h3 style="color: #D93025; margin-bottom: 1rem;"><i class="fa-solid fa-triangle-exclamation" style="margin-left: 8px;"></i>تسجيل الخروج</h3>
                <p style="margin-bottom: 1.5rem; color: #555;">هل أنت متأكد من رغبتك في تسجيل الخروج من لوحة التحكم؟</p>
                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                    <button onclick="closeModal()" style="background: #6C757D; color: white; border: none; padding: 0.6rem 1.2rem; border-radius: 6px; cursor: pointer;">إلغاء</button>
                    <button onclick="window.location.href='captain_login.html'" class="btn-primary" style="background: #D93025; margin: 0; width: auto;">تأكيد الخروج</button>
                </div>
            `);
        });
    });
});
document.getElementById('profileSetupForm').addEventListener('submit', function(e) {
    e.preventDefault(); // منع إعادة تحميل الصفحة
    
    // التوجيه لصفحة إدارة البروفايل والباقات
    window.location.href = 'captain_profile_manage.html';
});