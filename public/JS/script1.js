// بيانات الـ 15 كابتن
const captainsData = [
  { name: "أحمد علي", rating: 4.9, car: "سيراتو (أوتوماتيك)", type: "فريلانس" },
  { name: "سارة محمود", rating: 4.8, car: "كورولا (مانيوال)", type: "مدرسة مصر الجديدة" },
  { name: "محمود حسن", rating: 4.7, car: "لانسـر (أوتوماتيك)", type: "فريلانس" },
  { name: "محمد إبراهيم", rating: 4.6, car: "إلنترا (مانيوال)", type: "مدرسة الأهرام" },
  { name: "منى ذكي", rating: 4.9, car: "نيسان صني (أوتوماتيك)", type: "فريلانس" },
  { name: "خالد يوسف", rating: 4.5, car: "أكسنت (مانيوال)", type: "مدرسة التجمع" },
  { name: "كابتن طارق", rating: 4.8, car: "تويوتا (أوتوماتيك)", type: "فريلانس" },
  { name: "هدى جابر", rating: 4.7, car: "شيفروليه (مانيوال)", type: "مدرسة المنسي" },
  { name: "عمر فاروق", rating: 4.9, car: "كيا سبورتاج (أوتوماتيك)", type: "فريلانس" },
  { name: "ياسر جلال", rating: 4.4, car: "فيات (مانيوال)", type: "مدرسة مصر الجديدة" },
  { name: "رانيا السيد", rating: 4.8, car: "هيونداي i10 (أوتوماتيك)", type: "فريلانس" },
  { name: "ماجد توفيق", rating: 4.6, car: "رينو لوجان (مانيوال)", type: "مدرسة الكابتن" },
  { name: "مصطفى فهمي", rating: 4.7, car: "إم جي 5 (أوتوماتيك)", type: "فريلانس" },
  { name: "نهى خطاب", rating: 4.9, car: "سوزوكي (مانيوال)", type: "فريلانس" },
  { name: "كريم سامي", rating: 4.5, car: "بيجو 301 (أوتوماتيك)", type: "مدرسة الأهرام" }
];

document.addEventListener("DOMContentLoaded", () => {
  // كود يعود للصفحة الرئيسية ورسم الكروت
  const container = document.getElementById('captains-container');
  if (container) {
    container.innerHTML = captainsData.map(c => `
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 captain-card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h5 class="card-title fw-bold mb-0">${c.name}</h5>
              <span class="badge bg-warning text-dark">⭐ ${c.rating}</span>
            </div>
            <p class="card-text text-muted mb-1"><i class="fa-solid fa-car me-1"></i> ${c.car}</p>
            <p class="card-text small text-secondary mb-3"><i class="fa-solid fa-circle-info me-1"></i> ${c.type}</p>
            <a href="booking.html" class="btn btn-primary btn-sm w-100">احجز الآن</a>
          </div>
        </div>
      </div>
    `).join('');
  }

  // كود تعبئة القائمة في صفحة الحجز
  const captainSelect = document.getElementById('captain-select-page');
  if (captainSelect) {
    captainsData.forEach(c => {
      const opt = document.createElement('option');
      opt.value = c.name;
      opt.textContent = `${c.name} (${c.type})`;
      captainSelect.appendChild(opt);
    });
  }
});

// التبديل بين طرق الدفع
function togglePayment() {
  const isVisa = document.getElementById('payVisa').checked;
  document.getElementById('visa-inputs').classList.toggle('d-none', !isVisa);
  document.getElementById('wallet-inputs').classList.toggle('d-none', isVisa);
}

// تأكيد الحجز والتحويل لصفحة حجوزاتي
function submitBooking(e) {
  e.preventDefault();
  alert('تم تأكيد الطلب والدفع بنجاح!');
  window.location.href = 'my-bookings.html';
}