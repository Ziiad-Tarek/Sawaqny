document.addEventListener("DOMContentLoaded", () => {
    const popup = document.getElementById("popup");
    const title = document.getElementById("title");
    const address = document.getElementById("address");
    const time = document.getElementById("time");
    const phone = document.getElementById("phone");
    const closeBtn = document.getElementById("close");
    const detailsButtons = document.querySelectorAll(".details-btn");
    const sendBtn = document.getElementById("sendInquiryBtn");

    // فتح Popup وعرض التفاصيل
    detailsButtons.forEach(button => {
        button.addEventListener("click", () => {
            title.textContent = button.dataset.name || "تفاصيل المعرض";
            address.textContent = button.dataset.address || "غير محدد";
            time.textContent = button.dataset.time || "غير محددة";
            phone.textContent = button.dataset.phone || "غير محدد";

            popup.style.display = "flex";
        });
    });

    // إغلاق النافذة
    const closePopup = () => {
        popup.style.display = "none";
    };

    if (closeBtn) closeBtn.addEventListener("click", closePopup);

    window.addEventListener("click", (e) => {
        if (e.target === popup) closePopup();
    });

    // إرسال الطلب الذكي
    if (sendBtn) {
        sendBtn.addEventListener("click", () => {
            const name = document.getElementById("visitorName").value.trim();
            const phoneNum = document.getElementById("visitorPhone").value.trim();

            if (!name || !phoneNum) {
                alert("⚠️ يرجى كتابة الاسم ورقم الموبايل لتأكيد التواصل.");
                return;
            }

            alert(`✅ شكراً لك يا ${name}! تم إرسال استفسارك بنجاح إلى (${title.textContent}). سيتواصلون معك عبر الرقم ${phoneNum}.`);
            
            // تفريغ المدخلات وإغلاق النافذة
            document.getElementById("visitorName").value = "";
            document.getElementById("visitorPhone").value = "";
            closePopup();
        });
    }
});