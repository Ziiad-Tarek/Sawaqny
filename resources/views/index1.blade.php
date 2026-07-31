<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>سَوَّقْنِي - منصة تعليم القيادة الاحترافية</title>
  <link rel="icon" type="image/jpeg" href="logo.jpeg">

  <!-- Bootstrap RTL & FontAwesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800;900&display=swap');

    :root {
      --primary-navy: #0E216C;    /* الكحلي الغامق الرئيسي */
      --accent-orange: #FE8511;   /* البرتقالي للتفاعل والتنبيه */
      --neutral-grey: #838C91;    /* النصوص الفرعية والحدود */
      --text-dark: #000000;       /* النصوص الأساسية والعناوين */
      --bg-light-gray: #F4F6F8;   /* خلفية السيكشن الأول لتمييز الكروت */
      --card-white: #FFFFFF;      /* خلفيات الكروت */
      --sidebar-width: 280px;
    }

    body {
      font-family: 'Tajawal', sans-serif;
      background-color: #FFFFFF;
      color: var(--text-dark);
      line-height: 1.6;
    }

    /* Sidebar Right Design (Desktop) */
    @media (min-width: 992px) {
      .sidebar-nav {
        position: fixed;
        top: 0;
        right: 0;
        width: var(--sidebar-width);
        height: 100vh;
        background-color: var(--primary-navy);
        z-index: 1030;
        padding: 2rem 1.2rem;
        box-shadow: -4px 0 20px rgba(14, 33, 108, 0.15);
        display: flex;
        flex-direction: column;
      }

      .main-wrapper {
        margin-right: var(--sidebar-width);
      }

      .sidebar-nav .navbar-nav {
        flex-direction: column;
        width: 100%;
        gap: 8px;
      }

      .sidebar-nav .nav-link {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px !important;
        font-size: 1rem;
        width: 100%;
      }

      .sidebar-nav .brand-container {
        margin-bottom: 2.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
      }

      .brand-wrapper {
        background: #ffffff;
        padding: 8px 18px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        transition: transform 0.3s ease;
      }

      .brand-wrapper:hover {
        transform: scale(1.03);
      }

      .brand-wrapper img {
        height: 48px;
        width: auto;
        object-fit: contain;
      }
    }

    /* Mobile Design */
    @media (max-width: 991.98px) {
      .sidebar-nav {
        background-color: var(--primary-navy);
        padding: 0.9rem 1rem;
      }
      .main-wrapper {
        margin-right: 0;
      }
      .brand-wrapper {
        background: #ffffff;
        padding: 6px 14px;
        border-radius: 40px;
      }
      .brand-wrapper img {
        height: 38px;
      }
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.85) !important;
      font-weight: 500;
      transition: all 0.25s ease;
      border-radius: 12px;
    }

    .nav-link:hover {
      color: #FFFFFF !important;
      background-color: rgba(255, 255, 255, 0.08);
      transform: translateX(-4px);
    }

    .nav-link.active {
      color: var(--accent-orange) !important;
      background-color: rgba(254, 133, 17, 0.12);
      font-weight: 700;
    }

    /* Hero Section */
    .hero-section {
      background: linear-gradient(180deg, var(--primary-navy) 0%, #152d8a 100%);
      padding: 60px 0 80px 0;
      color: #FFFFFF;
    }

    .search-card {
      background: var(--card-white);
      border-radius: 20px;
      padding: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
      border: 1px solid rgba(131, 140, 145, 0.2);
      margin-top: -40px;
    }

    .search-input-group {
      border: 1px solid var(--neutral-grey);
      border-radius: 12px;
      overflow: hidden;
    }

    /* Section 1: Captains */
    .section-captains {
      background-color: var(--bg-light-gray);
      padding: 70px 0;
      border-bottom: 1px solid rgba(131, 140, 145, 0.15);
    }

    .captain-card {
      border: 1px solid rgba(131, 140, 145, 0.2);
      border-radius: 20px;
      background: var(--card-white);
      transition: all 0.3s ease;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    }

    .captain-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(14, 33, 108, 0.1);
      border-color: var(--primary-navy);
    }

    .avatar-wrapper {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: #E8ECF8;
      color: var(--primary-navy);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      margin: 0 auto 12px auto;
      border: 3px solid #FFFFFF;
    }

    .rating-badge {
      background-color: #FFF8F0;
      color: var(--accent-orange);
      font-weight: 800;
      padding: 4px 12px;
      border-radius: 50rem;
      font-size: 0.88rem;
      border: 1px solid rgba(254, 133, 17, 0.2);
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .bio-text {
      font-size: 0.88rem;
      color: var(--neutral-grey);
      line-height: 1.5;
      background: #F8F9FA;
      padding: 12px;
      border-radius: 12px;
      margin: 12px 0;
      min-height: 58px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    /* Section 2: Packages */
    .section-packages {
      background-color: #FFFFFF;
      padding: 80px 0;
    }

    .pkg-card {
      border-radius: 20px;
      border: 1px solid rgba(131, 140, 145, 0.25);
      background: #FFFFFF;
      transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
      position: relative;
    }

    .pkg-card:hover {
      transform: translateY(-12px) scale(1.02);
      border-color: var(--accent-orange) !important;
      box-shadow: 0 20px 40px rgba(14, 33, 108, 0.12);
    }

    .pkg-card.featured {
      background: linear-gradient(145deg, var(--primary-navy) 0%, #172a78 100%);
      color: #FFFFFF;
      border: none;
      box-shadow: 0 12px 30px rgba(14, 33, 108, 0.25);
    }

    .pkg-card.featured:hover {
      transform: translateY(-12px) scale(1.03);
      box-shadow: 0 22px 45px rgba(254, 133, 17, 0.35);
    }

    /* Buttons */
    .btn-cta {
      background-color: var(--accent-orange);
      color: #FFFFFF;
      border: none;
      border-radius: 12px;
      padding: 10px 16px;
      font-weight: 700;
      transition: all 0.25s ease;
    }

    .btn-cta:hover {
      background-color: #e07208;
      color: #FFFFFF;
      box-shadow: 0 4px 12px rgba(254, 133, 17, 0.3);
    }

    .btn-outline-navy {
      background-color: transparent;
      color: var(--primary-navy);
      border: 1.5px solid var(--primary-navy);
      border-radius: 12px;
      font-weight: 700;
      transition: all 0.25s ease;
    }

    .btn-outline-navy:hover {
      background-color: var(--primary-navy);
      color: #FFFFFF;
    }

    .section-title {
      color: var(--primary-navy);
      font-weight: 800;
    }
   .ai-chatbot-btn {
    position: fixed;
    bottom: 30px;
    left: 30px; /* ليكون في الزاوية اليسرى من الأسفل متناسباً مع الاتجاه العربي RTL */
    z-index: 9999;
    display: flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #0e216c, #1a3abb);
    color: #ffffff !important;
    padding: 12px 20px;
    border-radius: 50px;
    box-shadow: 0 8px 25px rgba(14, 33, 108, 0.4);
    text-decoration: none !important;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.ai-chatbot-btn .chatbot-icon {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* تأثير الحركة عند مرور الماوس عليه */
.ai-chatbot-btn:hover {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 12px 30px rgba(26, 58, 187, 0.5);
    background: linear-gradient(135deg, #1a3abb, #0e216c);
}

/* تأثير النبض الخفيف للفت الانتباه */
@keyframes pulse-glow {
    0% { box-shadow: 0 0 0 0 rgba(26, 58, 187, 0.6); }
    70% { box-shadow: 0 0 0 15px rgba(26, 58, 187, 0); }
    100% { box-shadow: 0 0 0 0 rgba(26, 58, 187, 0); }
}

.ai-chatbot-btn {
    animation: pulse-glow 2.5s infinite;
}


/* النافذة المنبثقة فوق الزرار */
.chatbot-popup {
    position: fixed;
    bottom: 85px; /* يظهر مباشرة فوق الزرار العائم */
    right: 20px;
    width: 340px;
    height: 450px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    display: flex;
    flex-direction: column;
    z-index: 10000;
    overflow: hidden;
    font-family: inherit;
    border: 1px solid #e2e8f0;
}

.chatbot-popup.hidden {
    display: none !important;
}

.chatbot-header {
    background: #0d6efd; /* غيري لون الهيدر ليتماشى مع لون موقع سواقني */
    color: white;
    padding: 12px 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.close-btn {
    background: transparent;
    border: none;
    color: white;
    font-size: 22px;
    cursor: pointer;
    line-height: 1;
}

.chat-messages {
    flex: 1;
    padding: 12px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 10px;
    background: #f8f9fa;
}

.message {
    max-width: 80%;
    padding: 8px 12px;
    border-radius: 10px;
    font-size: 13px;
    line-height: 1.4;
}

.user-message {
    align-self: flex-end;
    background: #0d6efd;
    color: white;
    border-bottom-right-radius: 2px;
}

.bot-message {
    align-self: flex-start;
    background: #e9ecef;
    color: #212529;
    border-bottom-left-radius: 2px;
}

.chat-input-area {
    display: flex;
    padding: 10px;
    background: #fff;
    border-top: 1px solid #eee;
    gap: 6px;
}

.chat-input-area input {
    flex: 1;
    border: 1px solid #ced4da;
    border-radius: 6px;
    padding: 8px 10px;
    font-size: 13px;
    outline: none;
}

.send-btn {
    background: #0d6efd;
    color: white;
    border: none;
    padding: 8px 14px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 13px;
}

  </style>
</head>
<body>

  <!-- 🧭 Sidebar Navigation -->
  <nav class="navbar navbar-expand-lg sidebar-nav">
    <div class="container-fluid p-0 flex-lg-column align-items-lg-start">

      <!-- Logo -->
      <a class="brand-container text-decoration-none" href="index1.html">
        <div class="brand-wrapper">
          <img src="{{ asset('css/logo.jpeg') }}" alt="لوجو سوقني">
        </div>
      </a>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler border-0 text-white ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
        <i class="fa-solid fa-bars"></i>
      </button>

      <!-- Navigation Links -->
      <div class="collapse navbar-collapse w-100 mt-lg-3" id="sidebarMenu">
        <ul class="navbar-nav fw-medium">
          <li class="nav-item">
            <a class="nav-link active" href="index1.html">
              <i class="fa-solid fa-house me-1"></i> الرئيسية
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.html">
              <i class="fa-solid fa-car me-1"></i> حجز الباقة
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="my-bookings.html">
              <i class="fa-solid fa-calendar-check me-1"></i> حجوزاتي
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="support.html">
              <i class="fa-solid fa-headset me-1"></i> الدعم والشكاوى
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html">
              <i class="fa-regular fa-user me-1"></i> حسابي
            </a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- 📦 Main Wrapper -->
  <div class="main-wrapper">

    <!-- Hero Section -->
    <div class="hero-section text-center">
      <div class="container">
        <h1 class="fw-black mb-2" style="font-size: 2.2rem;">ابحث عن أفضل كابتن أو مدرسة قيادة</h1>
        <p class="opacity-75 mb-0 fs-6">اختر المدرب المناسب لمدينتك وابدأ رحلة تعلم القيادة بأمان واحترافية</p>
      </div>
    </div>

    <!-- Search Card -->
    <div class="container">
      <div class="search-card mb-4">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="search-input-group input-group input-group-lg bg-white">
              <span class="input-group-text bg-transparent border-0 pe-0 text-muted ps-3">
                <i class="fa-solid fa-magnifying-glass"></i>
              </span>
              <input type="text" id="searchInput" class="form-control border-0 px-3 fs-6" placeholder="ابحث باسم الكابتن، المدرسة، أو المنطقة..." onkeyup="filterCaptains()">
              <button class="btn btn-cta px-4 m-1" type="button" onclick="filterCaptains()">بحث</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 1: Captains -->
    <section class="section-captains">
      <div class="container">
        <div class="text-center mb-4">
          <h3 class="fw-bold section-title">
            <i class="fa-solid fa-user-check me-2" style="color: var(--accent-orange);"></i>الكباتن المتاحين
          </h3>
          <p style="color: var(--neutral-grey);" class="small">نخبة من أفضل مدربي القيادة المعتمدين</p>
        </div>

        <div class="row g-4 justify-content-center" id="captains-container"></div>

        <div class="text-center mt-4">
          <button id="toggle-captains-btn" class="btn btn-outline-navy px-4 py-2">
            <i class="fa-solid fa-chevron-down me-2"></i>عرض المزيد من الكباتن
          </button>
        </div>
      </div>
    </section>

    <!-- Section 2: Packages -->
    <section class="section-packages">
      <div class="container">
        <div class="text-center mb-5">
          <h3 class="fw-bold section-title"><i class="fa-solid fa-box-open me-2" style="color: var(--accent-orange);"></i>الباقات المتاحة</h3>
          <p style="color: var(--neutral-grey);" class="small">اختر الباقة الأكثر ملاءمة لاحتياجك ومستواك الحالي</p>
        </div>

        <div class="row g-4">
          <!-- Basic Package -->
          <div class="col-md-4">
            <div class="card h-100 p-4 pkg-card text-center">
              <div class="card-body d-flex flex-column p-0">
                <span class="badge bg-light text-dark fw-bold mb-3 py-2 border align-self-center px-3">للمبتدئين</span>
                <h4 class="fw-bold mb-1" style="color: var(--text-dark);">باقة الأساسيات</h4>
                <p style="color: var(--neutral-grey);" class="small mb-3">6 حصص عملي</p>
                <h2 class="fw-black my-2" style="color: var(--primary-navy);">1,200 <small class="fs-6 text-muted">ج.م</small></h2>
                <ul class="list-unstyled text-start my-4 lh-lg flex-grow-1 fs-6" style="color: var(--text-dark);">
                  <li><i class="fa-solid fa-circle-check text-success me-2"></i>تعلم أساسيات الحركة والتحكم</li>
                  <li><i class="fa-solid fa-circle-check text-success me-2"></i>مهارات الركن والرجوع للوراء</li>
                </ul>
                <a href="booking.html?pkg=1" class="btn btn-outline-navy w-100 py-2">احجز الباقة</a>
              </div>
            </div>
          </div>

          <!-- Featured Package -->
          <div class="col-md-4">
            <div class="card h-100 p-4 pkg-card featured text-center position-relative">
              <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill px-3 py-2 fs-6" style="background-color: var(--accent-orange);">الأكثر طلباً 🔥</span>
              <div class="card-body d-flex flex-column p-0 pt-2">
                <span class="badge bg-white text-dark fw-bold mb-3 py-2 align-self-center px-3">متوسط</span>
                <h4 class="fw-bold mb-1 text-white">الباقة المتوسطة</h4>
                <p class="text-white-50 small mb-3">10 حصص عملي</p>
                <h2 class="fw-black my-2 text-white">1,800 <small class="fs-6 text-white-50">ج.م</small></h2>
                <ul class="list-unstyled text-start my-4 lh-lg flex-grow-1 fs-6 text-white">
                  <li><i class="fa-solid fa-circle-check me-2" style="color: var(--accent-orange);"></i>القيادة بالشوارع المزدحمة</li>
                  <li><i class="fa-solid fa-circle-check me-2" style="color: var(--accent-orange);"></i>تدريب مانيوال وأوتوماتيك</li>
                </ul>
                <a href="booking.html?pkg=2" class="btn btn-cta w-100 py-2">احجز الباقة الآن</a>
              </div>
            </div>
          </div>

          <!-- Advanced Package -->
          <div class="col-md-4">
            <div class="card h-100 p-4 pkg-card text-center">
              <div class="card-body d-flex flex-column p-0">
                <span class="badge bg-light text-dark fw-bold mb-3 py-2 border align-self-center px-3">احترافي</span>
                <h4 class="fw-bold mb-1" style="color: var(--text-dark);">الباقة الشاملة</h4>
                <p style="color: var(--neutral-grey);" class="small mb-3">12 حصة عملي</p>
                <h2 class="fw-black my-2" style="color: var(--primary-navy);">2,200 <small class="fs-6 text-muted">ج.م</small></h2>
                <ul class="list-unstyled text-start my-4 lh-lg flex-grow-1 fs-6" style="color: var(--text-dark);">
                  <li><i class="fa-solid fa-circle-check text-success me-2"></i>القيادة على الطرق السريعة والدائرية</li>
                  <li><i class="fa-solid fa-circle-check text-success me-2"></i>تأهيل كامل لاجتياز اختبار المرور</li>
                </ul>
                <a href="booking.html?pkg=3" class="btn btn-outline-navy w-100 py-2">احجز الباقة</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
<!-- Floating AI Chatbot Button (على الشمال) -->
<button id="chatbot-toggle-btn" class="ai-chatbot-btn" title="تحدث مع مساعد سواقني الذكي">
    <div class="chatbot-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 8V4H8"></path>
            <rect width="16" height="12" x="4" y="8" rx="2"></rect>
            <path d="M2 14h2"></path>
            <path d="M20 14h2"></path>
            <path d="M15 13v2"></path>
            <path d="M9 13v2"></path>
        </svg>
    </div>
    <span class="chatbot-text">المساعد الذكي</span>
</button>

<!-- Chatbot Popup Window -->
<div id="chatbot-popup" class="chatbot-popup hidden">
    <div class="chatbot-header">
        <div class="header-info">
            <span class="status-dot"></span>
            <strong>مساعد سواقني الذكي</strong>
        </div>
        <button id="close-chatbot-btn" class="close-btn">&times;</button>
    </div>

    <div id="chat-messages" class="chat-messages">
        <div class="message bot-message">أهلاً بك 👋 كيف يمكنني مساعدتك في خدمات سواقني اليوم؟</div>
    </div>

    <div class="chat-input-area">
        <input type="text" id="chat-input" placeholder="اكتب سؤالك هنا..." onkeydown="if(event.key === 'Enter') sendChatMessage()">
        <button onclick="sendChatMessage()" class="send-btn">إرسال</button>
    </div>
</div>
  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const captainsData = [
      { id: 1, name: "أحمد علي", rating: 4.9, car: "سيراتو (أوتوماتيك)", type: "فريلانس", bio: "خبير تدريب القيادة الآمنة واستخراج الرخص للقيادة في المناطق المزدحمة." },
      { id: 2, name: "سارة محمود", rating: 4.8, car: "كورولا (مانيوال)", type: "مدرسة مصر الجديدة", bio: "متخصصة في تعليم المبتدئين وتجاوز رهبة الطريق بكل هدوء وصبر." },
      { id: 3, name: "محمود حسن", rating: 4.7, car: "لانسـر (أوتوماتيك)", type: "فريلانس", bio: "مدرب معتمد للسيارات الأوتوماتيك مع التركيز على مهارات الركن الاحترافي." },
      { id: 4, name: "محمد إبراهيم", rating: 4.6, car: "إلنترا (مانيوال)", type: "مدرسة الأهرام", bio: "خبرة أكثر من 10 سنوات في تدريب مهارات التحكم والتعامل مع المحرك." },
      { id: 5, name: "منى ذكي", rating: 4.9, car: "نيسان صني (أوتوماتيك)", type: "فريلانس", bio: "أسلوب سلس ومبسط مخصص للسيدات لتعلم القيادة واجتياز اختبارات المرور." },
      { id: 6, name: "خالد يوسف", rating: 4.5, car: "أكسنت (مانيوال)", type: "مدرسة التجمع", bio: "تدريب مكثف على الطرق السريعة والدائرية والتعامل مع المواقف الحرجة." },
      { id: 7, name: "كابتن طارق", rating: 4.8, car: "تويوتا (أوتوماتيك)", type: "فريلانس", bio: "متخصص في تعديل سلوكيات القيادة وتأهيل السائقين للقيادة الليلية." },
      { id: 8, name: "هدى جابر", rating: 4.7, car: "شيفروليه (مانيوال)", type: "مدرسة المنسي", bio: "تركيز كامل على التفاصيل الفنية وتفادي أخطاء المبتدئين الشائعة." },
      { id: 9, name: "عمر فاروق", rating: 4.9, car: "كيا سبورتاج (أوتوماتيك)", type: "فريلانس", bio: "تدريب على سيارات النقل العالي والسيارات الرياضية بأسلوب احترافي." },
      { id: 10, name: "ياسر جلال", rating: 4.4, car: "فيات (مانيوال)", type: "مدرسة مصر الجديدة", bio: "خبير صيانة أساسية وقواعد المرور والسلامة أثناء قيادة السيارات المانيوال." },
      { id: 11, name: "رانيا السيد", rating: 4.8, car: "هيونداي i10 (أوتوماتيك)", type: "فريلانس", bio: "تدريب مريح على السيارات الصغيرة المناسبة للشوارع الضيقة والمرور." },
      { id: 12, name: "ماجد توفيق", rating: 4.6, car: "رينو لوجان (مانيوال)", type: "مدرسة الكابتن", bio: "تأهيل كامل لاجتياز اختبارات القيادة وإتقان التمريرات الصعبة." },
      { id: 13, name: "مصطفى فهمي", rating: 4.7, car: "إم جي 5 (أوتوماتيك)", type: "فريلانس", bio: "تدريب حديث يعتمد على التكنولوجيا وأنظمة الأمان الذكية بالسيارات." },
      { id: 14, name: "نهى خطاب", rating: 4.9, car: "سوزوكي (مانيوال)", type: "فريلانس", bio: "التركيز على الركن بجميع أنواعه العمودي والموازي والرجوع في المتاهات." },
      { id: 15, name: "كريم سامي", rating: 4.5, car: "بيجو 301 (أوتوماتيك)", type: "مدرسة الأهرام", bio: "تدريب شامل يدمج بين القواعد النظرية والتطبيق العملي السريع." }
    ];

    let isExpanded = false;
    const initialCount = 6;

    function renderCaptains(data = captainsData) {
      const container = document.getElementById('captains-container');
      const toggleBtn = document.getElementById('toggle-captains-btn');

      if (!container) return;

      const itemsToShow = isExpanded ? data : data.slice(0, initialCount);

      container.innerHTML = itemsToShow.map(c => `
        <div class="col-md-6 col-lg-4">
          <div class="card captain-card h-100 p-3 text-center">

            <div class="avatar-wrapper">
              <i class="fa-solid fa-user-tie"></i>
            </div>

            <h5 class="fw-bold mb-1" style="color: var(--primary-navy);">الكابتن ${c.name}</h5>

            <div class="mb-2">
              <span class="rating-badge">
                <i class="fa-solid fa-star"></i>${c.rating}
              </span>
            </div>

            <div class="small mb-2" style="color: var(--neutral-grey);">
              <div><i class="fa-solid fa-car text-primary me-1"></i> ${c.car}</div>
              <div><i class="fa-solid fa-building me-1"></i> ${c.type}</div>
            </div>

            <div class="bio-text">
              <span>${c.bio}</span>
            </div>

            <div class="mt-auto d-flex gap-2 pt-2">
              <a href="booking.html?captain=${c.id}" class="btn btn-cta btn-sm flex-grow-1 py-2">
                <i class="fa-solid fa-calendar-check me-1"></i> احجز الآن
              </a>

              <button class="btn btn-outline-navy btn-sm px-3" data-bs-toggle="modal" data-bs-target="#captainModal${c.id}">
                المزيد
              </button>
            </div>

          </div>
        </div>

        <div class="modal fade" id="captainModal${c.id}" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px;">
              <div class="modal-header border-0 pb-0 d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold" style="color: var(--primary-navy);">تفاصيل الكابتن ${c.name}</h5>
                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-center p-4">
                <div class="avatar-wrapper mb-3" style="width: 85px; height: 85px; font-size: 2.3rem;">
                  <i class="fa-solid fa-user-tie"></i>
                </div>
                <h4 class="fw-bold mb-1">${c.name}</h4>
                <p class="rating-badge fs-6 mb-3"><i class="fa-solid fa-star"></i>${c.rating} تقييم عام</p>

                <div class="text-start bg-light p-3 rounded-3 mb-3">
                  <p class="mb-2"><strong><i class="fa-solid fa-car text-primary me-2"></i>السيارة المستخدمة:</strong> ${c.car}</p>
                  <p class="mb-2"><strong><i class="fa-solid fa-building text-primary me-2"></i>الجهة/المدرسة:</strong> ${c.type}</p>
                  <p class="mb-0"><strong><i class="fa-solid fa-circle-info text-primary me-2"></i>السيرة الذاتية:</strong> ${c.bio}</p>
                </div>
              </div>
              <div class="modal-footer border-0 pt-0">
                <a href="booking.html?captain=${c.id}" class="btn btn-cta w-100 py-2">متابعة لحجز حصة</a>
              </div>
            </div>
          </div>
        </div>
      `).join('');

      if (toggleBtn) {
        toggleBtn.innerHTML = isExpanded
          ? '<i class="fa-solid fa-chevron-up me-2"></i>عرض أقل'
          : '<i class="fa-solid fa-chevron-down me-2"></i>عرض المزيد من الكباتن';
      }
    }

    function filterCaptains() {
      const input = document.getElementById('searchInput');
      if (!input) return;
      const query = input.value.toLowerCase().trim();
      const filtered = captainsData.filter(c =>
        c.name.toLowerCase().includes(query) ||
        c.car.toLowerCase().includes(query) ||
        c.type.toLowerCase().includes(query) ||
        c.bio.toLowerCase().includes(query)
      );
      renderCaptains(filtered);
    }

    document.addEventListener("DOMContentLoaded", () => {
      renderCaptains();

      const toggleBtn = document.getElementById('toggle-captains-btn');
      if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
          isExpanded = !isExpanded;
          renderCaptains();
        });
      }
    });
// فتح وإغلاق النافذة
const toggleBtn = document.getElementById('chatbot-toggle-btn');
const closeBtn = document.getElementById('close-chatbot-btn');
const popup = document.getElementById('chatbot-popup');

toggleBtn.addEventListener('click', (e) => {
    e.preventDefault();
    popup.classList.toggle('hidden');
});

closeBtn.addEventListener('click', () => {
    popup.classList.add('hidden');
});

// دالة الربط مع Laravel
async function sendChatMessage() {
    const inputElement = document.getElementById('chat-input');
    const messageText = inputElement.value.trim();

    if (!messageText) return;

    appendMessageToChat('user', messageText);
    inputElement.value = '';

    try {
        const response = await fetch('/send-message', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
            },
            body: JSON.stringify({
                user_id: 1,
                user: "مستخدم سواقني",
                message: messageText
            })
        });

        const result = await response.json();

        if (result.status === 'success') {
            const botReply = result.data.reply || result.data.response || result.data.message || JSON.stringify(result.data);
            appendMessageToChat('bot', botReply);
        } else {
            appendMessageToChat('bot', 'حدث خطأ في الاستجابة.');
        }

    } catch (error) {
        console.error('Error:', error);
        appendMessageToChat('bot', 'تعذر الاتصال بالخادم.');
    }
}

function appendMessageToChat(sender, text) {
    const chatContainer = document.getElementById('chat-messages');
    const messageDiv = document.createElement('div');
    messageDiv.className = sender === 'user' ? 'message user-message' : 'message bot-message';
    messageDiv.innerText = text;

    chatContainer.appendChild(messageDiv);
    chatContainer.scrollTop = chatContainer.scrollHeight;
}
  </script>
</body>
</html>
