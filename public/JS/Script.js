document.addEventListener("DOMContentLoaded", () => {

    // 1. Dropdown Menu for Signup
    const signupToggle = document.getElementById("signupToggle");
    const signupDropdown = document.getElementById("signupDropdown");

    if (signupToggle && signupDropdown) {
        signupToggle.addEventListener("click", (e) => {
            e.preventDefault();
            signupDropdown.classList.toggle("show");
        });

        window.addEventListener("click", (e) => {
            if (!e.target.closest(".dropdown-container")) {
                signupDropdown.classList.remove("show");
            }
        });
    }

    // 2. GPS Location Button
    const gpsBtn = document.getElementById("gpsBtn");
    if (gpsBtn) {
        gpsBtn.addEventListener("click", () => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        alert("✅ تم تحديد موقعك بنجاح!");
                    },
                    () => {
                        alert("❌ لم يتم السماح بالوصول للموقع.");
                    }
                );
            } else {
                alert("المتصفح لا يدعم تحديد الموقع.");
            }
        });
    }

    // 3. Search Form Handler
    const searchBtn = document.getElementById("searchBtn");
    if (searchBtn) {
        searchBtn.addEventListener("click", () => {
            const area = document.getElementById("areaSelect").value;
            const training = document.getElementById("trainingType").value;
            const car = document.getElementById("carType").value;

            if (area === "اختر المنطقة") {
                alert("من فضلك اختر المنطقة أولاً.");
                return;
            }

            alert(`🔍 جاري البحث...\n\n📍 المنطقة: ${area}\n👨‍🏫 نوع التدريب: ${training}\n🚗 نوع السيارة: ${car}`);
        });
    }

    // 4. Login Form Submission Handler (الربط وتوجيه الأدمن)
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function (e) {
            e.preventDefault(); // منع إعادة تحميل الصفحة

            const usernameInput = document.getElementById('usernameInput');
            const username = usernameInput ? usernameInput.value.trim() : '';

            alert("✅ تم تسجيل الدخول بنجاح لحساب: " + username);

            // التحقق والتوجيه (يمكنك تغيير اسم الصفحة المستهدفة للأدمن هنا)
            if (username.includes('admin')) {
                window.location.href = 'index.html'; // غيريها لصفحة الداشبورد لو عندك
            } else if (username.includes('school')) {
                window.location.href = 'HomePageCase1.html';
            } else {
                window.location.href = 'HomePageCase1.html';
            }
        });
    }



// 5. Logout Button Handler (تسجيل الخروج والتوجيه لصفحة دخول الأدمن)
    const logoutBtn = document.getElementById('logoutBtn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function (e) {
            e.preventDefault(); // منع السلوك الافتراضي للرابط

            alert("👋 تم تسجيل الخروج بنجاح!");

            // التوجيه لصفحة تسجيل دخول الأدمن
            window.location.href = 'admin_login.html';
        });
    }

     // 5. Maintenance Page Logic
    const centersGrid = document.getElementById('centersGrid');
    if (centersGrid) {
        renderCenters(maintenanceCentersData);

        const filterForm = document.getElementById('filterForm');
        if (filterForm) {
            filterForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const search = document.getElementById('searchInput').value.trim().toLowerCase();
                const service = document.getElementById('serviceSelect').value;
                const brand = document.getElementById('brandSelect').value;

                const filteredData = maintenanceCentersData.filter(center => {
                    const matchCity = search === '' || center.city.toLowerCase().includes(search) || center.name.toLowerCase().includes(search);
                    const matchService = service === '' || center.service_type === service;
                    const matchBrand = brand === '' || center.car_brands.includes(brand) || center.car_brands === "كل الماركات";

                    return matchCity && matchService && matchBrand;
                });

                renderCenters(filteredData);
            });
        }
    }
});


// بيانات مراكز الصيانة الثابتة
const maintenanceCentersData = [
    {
        id: 1,
        name: "مركز الأهرام للصيانة المعتمدة",
        city: "المعادي - القاهرة",
        working_hours: "9 صباحاً - 10 مساءً",
        rating: 4.8,
        service_type: "صيانة دورية",
        car_brands: "تويوتا، هيونداي، كيا",
        phone: "01012345678",
        discount_percentage: 15,
        map_link: "https://maps.google.com"
    },
    {
        id: 2,
        name: "المركز الألماني لفحص وصيانة السيارات",
        city: "مدينة نصر - القاهرة",
        working_hours: "10 صباحاً - 8 مساءً",
        rating: 4.9,
        service_type: "فحص شامل",
        car_brands: "كل الماركات",
        phone: "01198765432",
        discount_percentage: 10,
        map_link: "https://maps.google.com"
    },
    {
        id: 3,
        name: "مركز الرواد لكهرباء وميكانيكا السيارات",
        city: "سموحة - الإسكندرية",
        working_hours: "9 صباحاً - 9 مساءً",
        rating: 4.6,
        service_type: "كهرباء",
        car_brands: "نيسان، هيونداي",
        phone: "01234567890",
        discount_percentage: null,
        map_link: "https://maps.google.com"
    },
    {
        id: 4,
        name: "الأسطى شريف لتغيير الزيوت والفرامل",
        city: "الدقي - الجيزة",
        working_hours: "8 صباحاً - 11 مساءً",
        rating: 4.7,
        service_type: "تغيير زيت وفرامل",
        car_brands: "تويوتا، كيا",
        phone: "01099887766",
        discount_percentage: 20,
        map_link: "https://maps.google.com"
    }
];

function renderCenters(centers) {
    const grid = document.getElementById('centersGrid');
    if (!grid) return;

    grid.innerHTML = '';

    if (!centers || centers.length === 0) {
        grid.innerHTML = `
            <div style="text-align:center; background:#fff; padding:40px; border-radius:15px; width: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <p style="color:#6c757d; font-size:18px; font-weight:bold;">لا توجد مراكز صيانة مطابقة لخيارات البحث حالياً.</p>
            </div>`;
        return;
    }

    centers.forEach(center => {
        const card = document.createElement('div');
        card.className = 'center-card';

        let discountHTML = center.discount_percentage ?
            `<div class="discount-badge">خصم ${center.discount_percentage}% لطلاب المنصة 🎓</div>` : '';

        let mapHTML = center.map_link ?
            `<a href="${center.map_link}" target="_blank" class="btn-map">🗺️ فتح الخريطة المباشرة</a>` : '';

        card.innerHTML = `
            ${discountHTML}
            <div class="center-info">
                <h2>${center.name}</h2>
                <p class="center-meta">📍 ${center.city} | 🕒 ${center.working_hours}</p>
                <div class="rating">
                    <span class="stars">⭐⭐⭐⭐⭐</span>
                    <span class="rating-text">${center.rating} / 5.0 (مراجعات العملاء)</span>
                </div>
                <div class="services-tags">
                    <span>الخدمة: ${center.service_type}</span>
                    <span>الماركات: ${center.car_brands}</span>
                </div>
                <button class="btn-details" onclick="toggleDetails('details-${center.id}')">عرض بيانات التواصل والموقع</button>
                <div id="details-${center.id}" class="contact-details hidden">
                    <p><strong>📞 رقم الهاتف:</strong> ${center.phone}</p>
                    <p><strong>🕒 مواعيد العمل:</strong> ${center.working_hours}</p>
                    ${mapHTML}
                </div>
            </div>
        `;
        grid.appendChild(card);
    });
}

function toggleDetails(id) {
    const el = document.getElementById(id);
    if (el) {
        el.classList.toggle('hidden');
    }
}
