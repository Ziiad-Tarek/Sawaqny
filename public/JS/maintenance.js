document.addEventListener('DOMContentLoaded', () => {
    fetchCenters();

    const filterForm = document.getElementById('filterForm');
    if (filterForm) {
        filterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const search = document.getElementById('searchInput').value;
            const service = document.getElementById('serviceSelect').value;
            const brand = document.getElementById('brandSelect').value;
            fetchCenters(search, service, brand);
        });
    }
});

function fetchCenters(search = '', service = '', brand = '') {
    const url = `api_get_centers.php?search=${encodeURIComponent(search)}&service=${encodeURIComponent(service)}&brand=${encodeURIComponent(brand)}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.status === 'error') {
                console.error('Server Error:', data.message);
                return;
            }
            renderCenters(data);
        })
        .catch(error => console.error('Error fetching data:', error));
}

function renderCenters(centers) {
    const grid = document.getElementById('centersGrid');
    if (!grid) return;
    
    grid.innerHTML = '';

    if (!centers || centers.length === 0) {
        grid.innerHTML = `
            <div style="text-align:center; background:#fff; padding:30px; border-radius:10px; width: 100%;">
                <p style="color:#6c757d; font-size:18px;">لا توجد مراكز صيانة مطابقة لخيارات البحث حالياً.</p>
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