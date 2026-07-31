<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>حجوزاتي ومتابعة المهارات - سَوَّقْنِي</title>

  <!-- 🖼️ اللوجو في علامة التبويب (Favicon) -->
  <link rel="icon" type="image/jpeg" href="logo.jpeg">

  <!-- Bootstrap RTL & FontAwesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800;900&display=swap');

    :root {
      --primary-navy: #0E216C;    /* الكحلي الغامق */
      --accent-orange: #FE8511;   /* البرتقالي للتفاعل */
      --neutral-grey: #838C91;    /* الرمادي للحدود */
      --text-dark: #000000;
      --bg-light: #F4F6F8;
      --card-white: #FFFFFF;
      --sidebar-width: 280px;
    }

    body {
      font-family: 'Tajawal', sans-serif;
      background-color: var(--bg-light);
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
        margin-bottom: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
      }

      .brand-wrapper {
        background: #ffffff;
        padding: 10px 20px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        width: 85%;
        transition: transform 0.3s ease;
      }

      .brand-wrapper:hover {
        transform: scale(1.03);
      }

      .brand-wrapper img {
        height: 55px;
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
        height: 40px;
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

    .nav-link.logout-link {
      color: #ff6b6b !important;
    }

    .nav-link.logout-link:hover {
      background-color: rgba(255, 107, 107, 0.15);
      color: #ff4d4d !important;
    }

  /* 2. الزرار العائم مع التأثيرات والتدرج والنبض (الخاص بك) */
        .ai-chatbot-btn {
            position: fixed;
            bottom: 30px;
            left: 30px; /* ليكون في الزاوية اليسرى من الأسفل متناسباً مع الاتجاه العربي RTL */
            z-index: 9999;
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--primary-gradient);
            color: #ffffff !important;
            padding: 12px 20px;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(14, 33, 108, 0.4);
            text-decoration: none !important;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255, 255, 255, 0.2);
            cursor: pointer;
            animation: pulse-glow 2.5s infinite;
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
            background: var(--hover-gradient);
        }

        /* تأثير النبض الخفيف للفت الانتباه */
        @keyframes pulse-glow {
            0% { box-shadow: 0 0 0 0 rgba(26, 58, 187, 0.6); }
            70% { box-shadow: 0 0 0 15px rgba(26, 58, 187, 0); }
            100% { box-shadow: 0 0 0 0 rgba(26, 58, 187, 0); }
        }

        /* 3. نافذة الشات المنبثقة فوق الزرار تماماً */
        .chatbot-popup {
            position: fixed;
            bottom: 95px;
            left: 30px;
            width: 360px;
            height: 490px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
            z-index: 10000;
            overflow: hidden;
            font-family: inherit;
            border: 1px solid var(--border-color);

            /* أنيميشن الظهور الناعم من جهة اليسار */
            opacity: 1;
            transform: translateY(0) scale(1);
            transform-origin: bottom left;
            transition: opacity 0.25s ease, transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .chatbot-popup.hidden {
            opacity: 0;
            transform: translateY(15px) scale(0.95);
            pointer-events: none;
        }

        /* هيدر النافذة متناسق مع لون الزرار */
        .chatbot-header {
            background: var(--primary-gradient);
            color: white;
            padding: 16px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-info {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background-color: #2ea44f;
            border-radius: 50%;
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.4);
        }

        .close-btn {
            background: rgba(255, 255, 255, 0.15);
            border: none;
            color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .close-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* منطقة الرسائل والتصاميم */
        .chat-messages {
            flex: 1;
            padding: 16px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 12px;
            background: var(--bg-light);
            scroll-behavior: smooth;
        }

        .chat-messages::-webkit-scrollbar {
            width: 5px;
        }
        .chat-messages::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 10px;
        }

        .message {
            max-width: 82%;
            padding: 10px 14px;
            border-radius: 16px;
            font-size: 13.5px;
            line-height: 1.5;
            word-break: break-word;
            animation: fadeIn 0.2s ease-out forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(4px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .user-message {
            align-self: flex-end;
            background: var(--primary-blue);
            color: white;
            border-bottom-left-radius: 4px;
            box-shadow: 0 2px 8px rgba(26, 58, 187, 0.2);
        }

        .bot-message {
            align-self: flex-start;
            background: #ffffff;
            color: var(--text-color);
            border-bottom-right-radius: 4px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        /* مؤشر جاري الكتابة للـ AI */
        .typing-indicator {
            display: flex;
            gap: 4px;
            align-items: center;
            padding: 10px 14px;
        }

        .typing-dot {
            width: 6px;
            height: 6px;
            background: var(--primary-blue);
            border-radius: 50%;
            animation: blink 1.4s infinite ease-in-out both;
        }

        .typing-dot:nth-child(1) { animation-delay: -0.32s; }
        .typing-dot:nth-child(2) { animation-delay: -0.16s; }

        @keyframes blink {
            0%, 80%, 100% { transform: scale(0.6); opacity: 0.4; }
            40% { transform: scale(1); opacity: 1; }
        }

        /* منطقة الإدخال وزرار الإرسال */
        .chat-input-area {
            display: flex;
            align-items: center;
            padding: 12px;
            background: #ffffff;
            border-top: 1px solid #f1f5f9;
            gap: 8px;
        }

        .chat-input-area input {
            flex: 1;
            border: 1px solid var(--border-color);
            background: var(--bg-light);
            border-radius: 12px;
            padding: 10px 14px;
            font-size: 13.5px;
            outline: none;
            transition: border-color 0.2s, background-color 0.2s;
        }

        .chat-input-area input:focus {
            border-color: var(--primary-blue);
            background: #fff;
        }

        .send-btn {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 12px;
            cursor: pointer;
            font-size: 13.5px;
            font-weight: 600;
            transition: background 0.2s;
        }

        .send-btn:hover {
            background: #0e216c;
        }

    .dashboard-header {
      background: linear-gradient(135deg, var(--primary-navy) 0%, #152d8a 100%);
      color: #FFFFFF;
      border-radius: 20px;
      padding: 30px;
      margin-bottom: 30px;
      box-shadow: 0 10px 30px rgba(14, 33, 108, 0.1);
    }

    .stat-box {
      background: #FFFFFF;
      border-radius: 16px;
      padding: 20px;
      border: 1px solid rgba(131, 140, 145, 0.15);
      box-shadow: 0 4px 15px rgba(0,0,0,0.03);
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .stat-icon {
      width: 50px;
      height: 50px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
    }

    .custom-nav-pills .nav-link {
      color: var(--primary-navy) !important;
      background-color: #FFFFFF;
      border: 1px solid rgba(131, 140, 145, 0.2);
      border-radius: 12px;
      padding: 10px 22px;
      font-weight: 700;
      margin-left: 8px;
      transition: all 0.3s ease;
    }

    .custom-nav-pills .nav-link.active {
      background-color: var(--accent-orange) !important;
      color: #FFFFFF !important;
      border-color: var(--accent-orange);
      box-shadow: 0 5px 15px rgba(254, 133, 17, 0.25);
    }

    .booking-card-item {
      background: var(--card-white);
      border-radius: 20px;
      border: 1px solid rgba(131, 140, 145, 0.18);
      box-shadow: 0 8px 25px rgba(0,0,0,0.04);
      transition: all 0.3s ease;
      overflow: hidden;
    }

    .badge-status-pending {
      background-color: #FFF3CD;
      color: #856404;
      font-weight: 700;
      padding: 6px 14px;
      border-radius: 30px;
    }

    .badge-status-completed {
      background-color: #D4EDDA;
      color: #155724;
      font-weight: 700;
      padding: 6px 14px;
      border-radius: 30px;
    }

    .captain-avatar {
      width: 55px;
      height: 55px;
      border-radius: 50%;
      background-color: #EBF0FF;
      color: var(--primary-navy);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      font-weight: 800;
    }

    .progress {
      height: 8px;
      border-radius: 10px;
      background-color: #E9ECEF;
    }

    .progress-bar {
      background-color: var(--accent-orange);
      transition: width 0.4s ease;
    }

    .skill-card-item {
      background-color: #F8FAFC;
      border: 1.5px solid rgba(131, 140, 145, 0.2);
      border-radius: 12px;
      padding: 12px 16px;
    }

    .skill-card-item.completed-skill {
      background-color: #F0FDF4;
      border-color: #86EFAC;
    }

    .skill-note-alert {
      font-size: 0.85rem;
      background-color: #e0f2fe;
      color: #0369a1;
      padding: 8px 12px;
      border-radius: 8px;
      margin-top: 8px;
    }

    .instructor-note-box {
      background-color: #F8FAFC;
      border-right: 4px solid var(--accent-orange);
      border-radius: 10px;
      padding: 12px 15px;
    }

    .btn-rate {
      background-color: var(--accent-orange);
      color: #FFFFFF;
      font-weight: 700;
      border-radius: 10px;
      padding: 8px 16px;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-rate:hover {
      background-color: #e07208;
      color: #FFFFFF;
    }

    .btn-nav-action {
      background-color: var(--accent-orange);
      color: #FFFFFF !important;
      font-weight: 700;
      border-radius: 10px;
      padding: 8px 20px;
      border: none;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .calendar-event-card {
      background: #FFFFFF;
      border-radius: 14px;
      border: 1px solid #E2E8F0;
      padding: 15px;
      margin-bottom: 12px;
      transition: all 0.3s ease;
    }

    .maintenance-banner {
      background: linear-gradient(135deg, #10B981 0%, #047857 100%);
      color: white;
      border-radius: 16px;
      padding: 20px;
      margin-bottom: 25px;
    }

    .max-w-75 {
      max-width: 75%;
    }

    .star-rating i {
      cursor: pointer;
      transition: transform 0.2s ease, color 0.2s ease;
    }

    .star-rating i:hover {
      transform: scale(1.2);
    }
  </style>
</head>
<body>

  <!-- 🧭 Sidebar Right Navigation -->
  <nav class="navbar navbar-expand-lg sidebar-nav">
    <div class="container-fluid p-0 flex-lg-column align-items-lg-start h-100">

      <a class="brand-container text-decoration-none" href="index1.html">
        <div class="brand-wrapper">
          <img src="{{ asset('css/logo.jpeg') }}" alt="لوجو سوقني">
        </div>
      </a>

      <button class="navbar-toggler border-0 text-white ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
        <i class="fa-solid fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse w-100 mt-lg-2 flex-column justify-content-between h-100" id="sidebarMenu">
        <ul class="navbar-nav fw-medium w-100">
          <li class="nav-item">
            <a class="nav-link" href="index1.html"><i class="fa-solid fa-house me-1"></i> الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.html"><i class="fa-solid fa-car me-1"></i> حجز الباقة</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="my-bookings.html"><i class="fa-solid fa-calendar-check me-1"></i> حجوزاتي</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="support.html"><i class="fa-solid fa-headset me-1"></i> الدعم والشكاوى</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html"><i class="fa-regular fa-user me-1"></i> حسابي</a>
          </li>
        </ul>

        <ul class="navbar-nav fw-medium w-100 mt-auto pt-3 border-top border-white-10">
          <li class="nav-item">
            <a class="nav-link logout-link" href="Home_page_login.html"><i class="fa-solid fa-right-from-bracket me-1"></i> تسجيل الخروج</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- 📦 Main Wrapper -->
  <div class="main-wrapper">
    <div class="container py-5">

      <!-- Header Banner -->
      <div class="dashboard-header d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div>
          <h3 class="fw-black mb-1"><i class="fa-solid fa-chart-line me-2" style="color: var(--accent-orange);"></i>لوحة حجوزاتي ومتابعة المهارات</h3>
          <p class="opacity-75 small mb-0">تابع جدول الـ 6 حصص، وأكد حضور وتقييم أي حصة بزر التأكيد الخاص بها</p>
        </div>
        <a href="booking.html" class="btn btn-nav-action"><i class="fa-solid fa-plus me-1"></i> حجز باقة جديدة</a>
      </div>

      <!-- Quick Stats -->
      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <div class="stat-box">
            <div class="stat-icon" style="background-color: rgba(14, 33, 108, 0.1); color: var(--primary-navy);">
              <i class="fa-solid fa-box-open"></i>
            </div>
            <div>
              <span class="text-muted small d-block">إجمالي الباقات</span>
              <h4 class="fw-bold mb-0" style="color: var(--primary-navy);">2 باقة</h4>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="stat-box">
            <div class="stat-icon" style="background-color: rgba(254, 133, 17, 0.12); color: var(--accent-orange);">
              <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <div>
              <span class="text-muted small d-block">الحصص المتبقية</span>
              <h4 class="fw-bold mb-0" style="color: var(--accent-orange);" id="remainingSessionsText">6 حصص</h4>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="stat-box">
            <div class="stat-icon" style="background-color: #D4EDDA; color: #155724;">
              <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
              <span class="text-muted small d-block">الحصص المكتملة</span>
              <h4 class="fw-bold mb-0 text-success" id="completedSessionsText">0 حصة</h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Filter Tabs -->
      <div class="d-flex align-items-center mb-4">
        <ul class="nav custom-nav-pills">
          <li class="nav-item">
            <button class="nav-link active" onclick="filterBookings('all', this)">الكل (2)</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" onclick="filterBookings('pending', this)">جارية / قيد الانتظار (1)</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" onclick="filterBookings('completed', this)">مكتملة (1)</button>
          </li>
        </ul>
      </div>

      <!-- Bookings Grid -->
      <div class="row g-4" id="bookingsContainer">

        <!-- الكارت الأول: قيد الانتظار / جارية (باقة الأساسيات - 6 حصص) -->
        <div class="col-lg-6 booking-item-wrapper" data-status="pending">
          <div class="booking-card-item p-4">

            <div class="d-flex justify-content-between align-items-start mb-3">
              <div class="d-flex align-items-center gap-3">
                <div class="captain-avatar">أ</div>
                <div>
                  <h5 class="fw-bold mb-0" style="color: var(--primary-navy);">الكابتن: أحمد علي</h5>
                  <small class="text-muted"><i class="fa-solid fa-star text-warning"></i> 4.9 (120 تقييم)</small>
                </div>
              </div>
              <span class="badge-status-pending"><i class="fa-regular fa-clock me-1"></i> جارية (<span id="sessionRatio">0</span>/6)</span>
            </div>

            <!-- خيار التجديد التلقائي -->
            <div class="form-check form-switch mb-3 p-2 bg-light rounded border d-flex align-items-center justify-content-between">
              <label class="form-check-label small fw-bold text-dark mb-0 ms-2" for="autoRenewSwitch">
                <i class="fa-solid fa-rotate text-primary me-1"></i> تجديد تلقائي للباقة مع هذا الكابتن
              </label>
              <input class="form-check-input m-0" type="checkbox" id="autoRenewSwitch" checked>
            </div>

            <!-- شريط التقدم -->
            <div class="bg-light p-3 rounded-3 mb-3 border">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>الباقة: <strong>الأساسيات (6 حصص)</strong></span>
                <span>التقدم: <strong id="progressRatioText">0 من 6 حصص</strong></span>
              </div>
              <div class="progress mb-2">
                <div class="progress-bar" id="sessionProgressBar" role="progressbar" style="width: 0%;"></div>
              </div>
              <div class="small text-muted d-flex justify-content-between flex-wrap gap-2">
                <span><i class="fa-solid fa-location-dot me-1 text-danger"></i> مدرسة الأهرام</span>
                <span><i class="fa-regular fa-calendar me-1 text-primary"></i> القادمة: <strong id="currentNextDate">السبت 10:00 صباحاً</strong></span>
              </div>
            </div>

            <!-- الاختبار النظري التقييمي -->
            <div class="p-3 bg-primary bg-opacity-10 border border-primary rounded-3 mb-3 text-center">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="badge bg-primary"><i class="fa-solid fa-unlock me-1"></i> متاح بعد الحصة الثانية</span>
                <small class="text-muted fw-bold">شرط التأهل: إتمام حصتين ✅</small>
              </div>
              <h6 class="fw-bold text-primary mb-1"><i class="fa-solid fa-graduation-cap me-1"></i> الاختبار النظري التقييمي</h6>
              <p class="small text-muted mb-2">قم بتأكيد حضور أول حصتين لتفعيل الاختبار النظري لتقييم مستواك.</p>
              <button class="btn btn-primary btn-sm fw-bold w-100" id="btnTheoreticalExam" onclick="startTheoreticalExam()" disabled><i class="fa-solid fa-pen-to-square me-1"></i> دخول الاختبار النظري</button>
            </div>

            <!-- 📈 قسم المهارات المكتسبة -->
            <div class="mb-3">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="fw-bold small text-dark mb-0">
                  <i class="fa-solid fa-list-check me-1" style="color: var(--accent-orange);"></i> المهارات المستهدفة بالباقة:
                </label>
                <span class="badge bg-primary rounded-pill small" id="pendingSkillsCounter" style="background-color: var(--primary-navy) !important;">0 / 6 مكتملة</span>
              </div>

              <div class="d-flex flex-column gap-2" id="pendingSkillsContainer">
                <div class="skill-card-item">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <span class="small fw-bold">1. التشغيل والتحكم في الدواسات</span>
                    <span class="badge bg-secondary small">قيد التدريب</span>
                  </div>
                </div>

                <div class="skill-card-item">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <span class="small fw-bold">2. التوجيه واستخدام المرايا</span>
                    <span class="badge bg-secondary small">قيد التدريب</span>
                  </div>
                </div>

                <div class="skill-card-item">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <span class="small fw-bold">3. الركن الموازي (Parallel Parking)</span>
                    <span class="badge bg-secondary small">قيد التدريب</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 📝 ملاحظة الكابتن -->
            <div class="instructor-note-box mb-3">
              <div class="d-flex align-items-center gap-2 mb-1">
                <i class="fa-solid fa-user-ninja text-warning"></i>
                <strong class="small" style="color: var(--primary-navy);">ملاحظات الكابتن:</strong>
              </div>
              <p class="small text-muted mb-0" id="instructorNoteText">"مرحباً بك! يرجى تأكيد الحضور بجانب الحصة المراد حضورها وتقييمها."</p>
            </div>

          </div>
        </div>

        <!-- الكارت الثاني: مكتمل بالكامل -->
        <div class="col-lg-6 booking-item-wrapper" data-status="completed">
          <div class="booking-card-item p-4">

            <div class="d-flex justify-content-between align-items-start mb-3">
              <div class="d-flex align-items-center gap-3">
                <div class="captain-avatar" style="background-color: #FFEFE5; color: var(--accent-orange);">س</div>
                <div>
                  <h5 class="fw-bold mb-0" style="color: var(--primary-navy);">الكابتن: سارة محمود</h5>
                  <small class="text-muted"><i class="fa-solid fa-star text-warning"></i> 5.0 (210 تقييم)</small>
                </div>
              </div>
              <span class="badge-status-completed"><i class="fa-solid fa-check me-1"></i> مكتملة بالكامل</span>
            </div>

            <!-- خصم الصيانة -->
            <div class="maintenance-banner">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="fw-bold mb-1"><i class="fa-solid fa-wrench me-1"></i> خصم 20% حصري على صيانة سيارتك!</h6>
                  <small class="opacity-90">تهانينا لإتمامك الكورس. احصل على فحص وصيانة بخصم خاص.</small>
                </div>
                <a href="maintenance.html" class="btn btn-light btn-sm fw-bold text-success">صفحة الصيانة <i class="fa-solid fa-arrow-left ms-1"></i></a>
              </div>
            </div>

            <div class="bg-light p-3 rounded-3 mb-3 border">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>الباقة: <strong>المتوسطة (6 حصص)</strong></span>
                <span>التقدم: <strong>6 من 6 حصص</strong></span>
              </div>
              <div class="progress mb-2">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;"></div>
              </div>
              <div class="small text-muted d-flex justify-content-between">
                <span><i class="fa-solid fa-location-dot me-1 text-danger"></i> مدرسة مصر الجديدة</span>
                <span class="text-success fw-bold"><i class="fa-solid fa-award me-1"></i> اجتازت جميع الحصص</span>
              </div>
            </div>

            <!-- المهارات المكتملة -->
            <div class="mb-3">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="fw-bold small text-dark mb-0">
                  <i class="fa-solid fa-award me-1" style="color: var(--accent-orange);"></i> جميع المهارات المكتسبة (6 / 6):
                </label>
                <span class="badge bg-success rounded-pill small">6 / 6 مكتملة ✅</span>
              </div>

              <div class="d-flex flex-column gap-2">
                <div class="skill-card-item completed-skill opacity-75">
                  <span class="small fw-bold"><i class="fa-solid fa-check-double text-success me-2"></i>1. التحكم بالبدالات والغيلرات</span>
                  <span class="badge bg-success small">متقن ✅</span>
                </div>
                <div class="skill-card-item completed-skill opacity-75">
                  <span class="small fw-bold"><i class="fa-solid fa-check-double text-success me-2"></i>2. استخدام المرايا والإشارات</span>
                  <span class="badge bg-success small">متقن ✅</span>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- 📅 تقويم جدول المتدرب (عرض الـ 6 حصص بالكامل مع زر تأكيد بجانب كل حصة) -->
      <div class="row mt-5">
        <div class="col-12">
          <div class="card border-0 shadow-sm rounded-4 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h4 class="fw-bold mb-1" style="color: var(--primary-navy);"><i class="fa-solid fa-calendar-days text-warning me-2"></i> جدول الحصص الـ 6 الخاصة بالباقة</h4>
                <p class="text-muted small mb-0">اضغط على زر <strong>"تأكيد الحضور والتقييم"</strong> الموجود بجانب الحصة لتقييم الكابتن وإثبات الحضور:</p>
              </div>
            </div>

            <div id="calendarEventsContainer">

              <!-- الحصة 1 -->
              <div class="calendar-event-card d-flex align-items-center justify-content-between flex-wrap gap-3" id="session-card-1">
                <div class="d-flex align-items-center gap-3">
                  <div class="bg-primary bg-opacity-10 text-primary fw-bold p-3 rounded-3 text-center" style="min-width: 80px;" id="date-box-1">
                    <span class="d-block h5 mb-0">25</span>
                    <small>يوليو</small>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1" id="session-title-1">الحصة الأولى: أساسيات التحكم بالسيارة والتشغيل</h6>
                    <small class="text-muted"><i class="fa-regular fa-clock me-1"></i> 10:00 صباحاً - 11:30 صباحاً | الكابتن: أحمد علي</small>
                  </div>
                </div>
                <div class="d-flex gap-2 align-items-center flex-wrap" id="session-actions-1">
                  <span class="badge bg-warning text-dark me-1">قادمة</span>
                  <button class="btn btn-sm btn-success fw-bold" onclick="openMandatoryFeedbackModal('1', 'الحصة الأولى')">
                    <i class="fa-solid fa-check-double me-1"></i> تأكيد الحضور والتقييم
                  </button>
                  <button class="btn btn-sm btn-outline-primary fw-bold" onclick="openRescheduleModal('الحصة الأولى')"><i class="fa-regular fa-clock me-1"></i> تغيير الموعد</button>
                  <button class="btn btn-sm btn-outline-danger fw-bold" onclick="cancelSingleSession('session-card-1', 'الحصة الأولى')"><i class="fa-solid fa-trash me-1"></i> إلغاء الحصة</button>
                </div>
              </div>

              <!-- الحصة 2 -->
              <div class="calendar-event-card d-flex align-items-center justify-content-between flex-wrap gap-3" id="session-card-2">
                <div class="d-flex align-items-center gap-3">
                  <div class="bg-primary bg-opacity-10 text-primary fw-bold p-3 rounded-3 text-center" style="min-width: 80px;" id="date-box-2">
                    <span class="d-block h5 mb-0">28</span>
                    <small>يوليو</small>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1" id="session-title-2">الحصة الثانية: التوجيه واستخدام المرايا في الشوارع الهادئة</h6>
                    <small class="text-muted"><i class="fa-regular fa-clock me-1"></i> 10:00 صباحاً - 11:30 صباحاً | الكابتن: أحمد علي</small>
                  </div>
                </div>
                <div class="d-flex gap-2 align-items-center flex-wrap" id="session-actions-2">
                  <span class="badge bg-secondary me-1">مجدولة</span>
                  <button class="btn btn-sm btn-success fw-bold" onclick="openMandatoryFeedbackModal('2', 'الحصة الثانية')">
                    <i class="fa-solid fa-check-double me-1"></i> تأكيد الحضور والتقييم
                  </button>
                  <button class="btn btn-sm btn-outline-primary fw-bold" onclick="openRescheduleModal('الحصة الثانية')"><i class="fa-regular fa-clock me-1"></i> تغيير الموعد</button>
                  <button class="btn btn-sm btn-outline-danger fw-bold" onclick="cancelSingleSession('session-card-2', 'الحصة الثانية')"><i class="fa-solid fa-trash me-1"></i> إلغاء الحصة</button>
                </div>
              </div>

              <!-- الحصة 3 -->
              <div class="calendar-event-card d-flex align-items-center justify-content-between flex-wrap gap-3" id="session-card-3">
                <div class="d-flex align-items-center gap-3">
                  <div class="bg-primary bg-opacity-10 text-primary fw-bold p-3 rounded-3 text-center" style="min-width: 80px;" id="date-box-3">
                    <span class="d-block h5 mb-0">01</span>
                    <small>أغسطس</small>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1" id="session-title-3">الحصة الثالثة: الركن الموازي والرجوع للخلف</h6>
                    <small class="text-muted"><i class="fa-regular fa-clock me-1"></i> 10:00 صباحاً - 11:30 صباحاً | الكابتن: أحمد علي</small>
                  </div>
                </div>
                <div class="d-flex gap-2 align-items-center flex-wrap" id="session-actions-3">
                  <span class="badge bg-secondary me-1">مجدولة</span>
                  <button class="btn btn-sm btn-success fw-bold" onclick="openMandatoryFeedbackModal('3', 'الحصة الثالثة')">
                    <i class="fa-solid fa-check-double me-1"></i> تأكيد الحضور والتقييم
                  </button>
                  <button class="btn btn-sm btn-outline-primary fw-bold" onclick="openRescheduleModal('الحصة الثالثة')"><i class="fa-regular fa-clock me-1"></i> تغيير الموعد</button>
                  <button class="btn btn-sm btn-outline-danger fw-bold" onclick="cancelSingleSession('session-card-3', 'الحصة الثالثة')"><i class="fa-solid fa-trash me-1"></i> إلغاء الحصة</button>
                </div>
              </div>

              <!-- الحصة 4 -->
              <div class="calendar-event-card d-flex align-items-center justify-content-between flex-wrap gap-3" id="session-card-4">
                <div class="d-flex align-items-center gap-3">
                  <div class="bg-primary bg-opacity-10 text-primary fw-bold p-3 rounded-3 text-center" style="min-width: 80px;" id="date-box-4">
                    <span class="d-block h5 mb-0">04</span>
                    <small>أغسطس</small>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1" id="session-title-4">الحصة الرابعة: القيادة في الطرق السريعة والتجاوز</h6>
                    <small class="text-muted"><i class="fa-regular fa-clock me-1"></i> 11:00 صباحاً - 12:30 ظهراً | الكابتن: أحمد علي</small>
                  </div>
                </div>
                <div class="d-flex gap-2 align-items-center flex-wrap" id="session-actions-4">
                  <span class="badge bg-secondary me-1">مجدولة</span>
                  <button class="btn btn-sm btn-success fw-bold" onclick="openMandatoryFeedbackModal('4', 'الحصة الرابعة')">
                    <i class="fa-solid fa-check-double me-1"></i> تأكيد الحضور والتقييم
                  </button>
                  <button class="btn btn-sm btn-outline-primary fw-bold" onclick="openRescheduleModal('الحصة الرابعة')"><i class="fa-regular fa-clock me-1"></i> تغيير الموعد</button>
                  <button class="btn btn-sm btn-outline-danger fw-bold" onclick="cancelSingleSession('session-card-4', 'الحصة الرابعة')"><i class="fa-solid fa-trash me-1"></i> إلغاء الحصة</button>
                </div>
              </div>

              <!-- الحصة 5 -->
              <div class="calendar-event-card d-flex align-items-center justify-content-between flex-wrap gap-3" id="session-card-5">
                <div class="d-flex align-items-center gap-3">
                  <div class="bg-primary bg-opacity-10 text-primary fw-bold p-3 rounded-3 text-center" style="min-width: 80px;" id="date-box-5">
                    <span class="d-block h5 mb-0">07</span>
                    <small>أغسطس</small>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1" id="session-title-5">الحصة الخامسة: التعامل مع الزحام المروري والميادين</h6>
                    <small class="text-muted"><i class="fa-regular fa-clock me-1"></i> 10:00 صباحاً - 11:30 صباحاً | الكابتن: أحمد علي</small>
                  </div>
                </div>
                <div class="d-flex gap-2 align-items-center flex-wrap" id="session-actions-5">
                  <span class="badge bg-secondary me-1">مجدولة</span>
                  <button class="btn btn-sm btn-success fw-bold" onclick="openMandatoryFeedbackModal('5', 'الحصة الخامسة')">
                    <i class="fa-solid fa-check-double me-1"></i> تأكيد الحضور والتقييم
                  </button>
                  <button class="btn btn-sm btn-outline-primary fw-bold" onclick="openRescheduleModal('الحصة الخامسة')"><i class="fa-regular fa-clock me-1"></i> تغيير الموعد</button>
                  <button class="btn btn-sm btn-outline-danger fw-bold" onclick="cancelSingleSession('session-card-5', 'الحصة الخامسة')"><i class="fa-solid fa-trash me-1"></i> إلغاء الحصة</button>
                </div>
              </div>

              <!-- الحصة 6 -->
              <div class="calendar-event-card d-flex align-items-center justify-content-between flex-wrap gap-3" id="session-card-6">
                <div class="d-flex align-items-center gap-3">
                  <div class="bg-primary bg-opacity-10 text-primary fw-bold p-3 rounded-3 text-center" style="min-width: 80px;" id="date-box-6">
                    <span class="d-block h5 mb-0">10</span>
                    <small>أغسطس</small>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1" id="session-title-6">الحصة السادسة: الاختبار الشامل والمحاكاة قبل الامتحان الرسمي</h6>
                    <small class="text-muted"><i class="fa-regular fa-clock me-1"></i> 10:00 صباحاً - 11:30 صباحاً | الكابتن: أحمد علي</small>
                  </div>
                </div>
                <div class="d-flex gap-2 align-items-center flex-wrap" id="session-actions-6">
                  <span class="badge bg-secondary me-1">مجدولة</span>
                  <button class="btn btn-sm btn-success fw-bold" onclick="openMandatoryFeedbackModal('6', 'الحصة السادسة')">
                    <i class="fa-solid fa-check-double me-1"></i> تأكيد الحضور والتقييم
                  </button>
                  <button class="btn btn-sm btn-outline-primary fw-bold" onclick="openRescheduleModal('الحصة السادسة')"><i class="fa-regular fa-clock me-1"></i> تغيير الموعد</button>
                  <button class="btn btn-sm btn-outline-danger fw-bold" onclick="cancelSingleSession('session-card-6', 'الحصة السادسة')"><i class="fa-solid fa-trash me-1"></i> إلغاء الحصة</button>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

    <!-- Floating AI Chatbot Button (مطابق للـ CSS الخاص بك بالكامل) -->
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

    <!-- Chatbot Popup Window (على الشمال فوق الزرار) -->
    <div id="chatbot-popup" class="chatbot-popup hidden">
        <div class="chatbot-header">
            <div class="header-info">
                <span class="status-dot"></span>
                <strong>مساعد سواقني الذكي</strong>
            </div>
            <button id="close-chatbot-btn" class="close-btn" aria-label="إغلاق">&times;</button>
        </div>

        <div id="chat-messages" class="chat-messages">
            <div class="message bot-message">أهلاً بك 👋 كيف يمكنني مساعدتك في خدمات سواقني اليوم؟</div>
        </div>

        <div class="chat-input-area">
            <input type="text" id="chat-input" placeholder="اكتب سؤالك هنا..." autocomplete="off">
            <button id="send-btn" onclick="sendChatMessage()" class="send-btn">إرسال</button>
        </div>
    </div>

  <!-- 🌟 Modal: التقييم الإجباري والفيدباك -->
  <div class="modal fade" id="mandatoryFeedbackModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3" style="border-radius: 24px; border: none;">
        <div class="modal-header border-0 pb-0">
          <div>
            <h5 class="fw-bold modal-title" style="color: var(--primary-navy);"><i class="fa-solid fa-star text-warning me-2"></i>تقييم الحصة وفيدباك الكابتن</h5>
            <small class="text-muted" id="modalSessionSubtitle">يرجى كتابة تقييمك للحصة التأكيد على حضورك</small>
          </div>
        </div>
        <div class="modal-body text-center py-4">
          <p class="text-dark fw-bold small mb-2">كيف تقيم شرح والتزام الكابتن اليوم؟</p>
          <div class="d-flex justify-content-center gap-2 mb-3 text-warning fs-3 star-rating" id="modalStarRating">
            <i class="fa-regular fa-star" onclick="setRating(1)"></i>
            <i class="fa-regular fa-star" onclick="setRating(2)"></i>
            <i class="fa-regular fa-star" onclick="setRating(3)"></i>
            <i class="fa-regular fa-star" onclick="setRating(4)"></i>
            <i class="fa-regular fa-star" onclick="setRating(5)"></i>
          </div>
          <div class="mb-3 text-start">
            <label class="form-label small fw-bold text-dark">ملاحظاتك وتقييمك للحصة:</label>
            <textarea class="form-control" id="feedbackText" rows="3" placeholder="اكتب انطباعك عن أداء الكابتن واستفادتك من الحصة..."></textarea>
          </div>
        </div>
        <div class="modal-footer border-0 pt-0">
          <button type="button" class="btn btn-light rounded-3 fw-bold" data-bs-dismiss="modal">إلغاء</button>
          <button type="button" class="btn btn-success rounded-3 fw-bold px-4" onclick="submitSessionFeedback()">إرسال وتأكيد الحضور ✅</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    let activeSessionNum = null;
    let selectedRating = 0;

    // فتح مودال التقييم عند الضغط على زر التأكيد بجانب الحصة
    function openMandatoryFeedbackModal(sessionNum, sessionTitle) {
      activeSessionNum = sessionNum;
      selectedRating = 0;
      resetStars();
      document.getElementById('feedbackText').value = '';
      document.getElementById('modalSessionSubtitle').innerText = `تقييم ${sessionTitle} لتأكيد الحضور وإضافتها للحصص المكتملة`;

      let modal = new bootstrap.Modal(document.getElementById('mandatoryFeedbackModal'));
      modal.show();
    }

    // تحديد عدد النجوم في التقييم
    function setRating(stars) {
      selectedRating = stars;
      const starIcons = document.querySelectorAll('#modalStarRating i');
      starIcons.forEach((star, index) => {
        if (index < stars) {
          star.className = 'fa-solid fa-star';
        } else {
          star.className = 'fa-regular fa-star';
        }
      });
    }

    function resetStars() {
      const starIcons = document.querySelectorAll('#modalStarRating i');
      starIcons.forEach(star => star.className = 'fa-regular fa-star');
    }

    // إرسال التقييم وتأكيد الحضور
    function submitSessionFeedback() {
      if (selectedRating === 0) {
        alert('برجاء اختيار عدد النجوم لتقييم الحصة أولاً.');
        return;
      }

      // إغلاق المودال
      let modalEl = document.getElementById('mandatoryFeedbackModal');
      let modalInstance = bootstrap.Modal.getInstance(modalEl);
      if (modalInstance) modalInstance.hide();

      // تحديث زر الحصة المحددة لتظهر كـ تم تأكيد الحضور
      if (activeSessionNum) {
        let actionsContainer = document.getElementById('session-actions-' + activeSessionNum);
        if (actionsContainer) {
          actionsContainer.innerHTML = `<span class="badge bg-success py-2 px-3 fw-bold fs-6"><i class="fa-solid fa-circle-check me-1"></i> تم تأكيد الحضور والتقييم ✅</span>`;
        }

        // تحديث عنوان مربع تاريخ الحصة لتصبح كحصة مكتملة
        let titleEl = document.getElementById('session-title-' + activeSessionNum);
        if (titleEl) {
          titleEl.classList.add('text-decoration-line-through', 'text-muted');
        }
        let dateBox = document.getElementById('date-box-' + activeSessionNum);
        if (dateBox) {
          dateBox.classList.remove('bg-primary', 'text-primary');
          dateBox.classList.add('bg-success', 'text-success');
        }

        // تحديث العدادات والإحصائيات
        let completedText = document.getElementById('completedSessionsText');
        let remainingText = document.getElementById('remainingSessionsText');
        let sessionRatio = document.getElementById('sessionRatio');
        let progressRatioText = document.getElementById('progressRatioText');
        let sessionProgressBar = document.getElementById('sessionProgressBar');

        let currentCompleted = parseInt(completedText.innerText) || 0;
        let currentRemaining = parseInt(remainingText.innerText) || 6;

        if (currentRemaining > 0) {
          let newCompleted = currentCompleted + 1;
          let newRemaining = currentRemaining - 1;

          completedText.innerText = newCompleted + ' حصص';
          remainingText.innerText = newRemaining + ' حصص';

          sessionRatio.innerText = newCompleted;
          progressRatioText.innerText = `${newCompleted} من 6 حصص`;
          sessionProgressBar.style.width = `${Math.round((newCompleted / 6) * 100)}%`;

          // تفعيل زر الاختبار النظري عند إتمام حصتين أو أكثر
          if (newCompleted >= 2) {
            let btnExam = document.getElementById('btnTheoreticalExam');
            if (btnExam) {
              btnExam.removeAttribute('disabled');
            }
          }
        }
      }

      alert('تم إرسال تقييمك وتأكيد حضور الحصة بنجاح!');
    }

    // تصفية الحجوزات
    function filterBookings(status, btn) {
      let buttons = document.querySelectorAll('.custom-nav-pills .nav-link');
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      let cards = document.querySelectorAll('.booking-item-wrapper');
      cards.forEach(card => {
        if (status === 'all') {
          card.style.display = 'block';
        } else {
          card.style.display = card.getAttribute('data-status') === status ? 'block' : 'none';
        }
      });
    }

    // إلغاء حصة منفردة
    function cancelSingleSession(cardId, sessionName) {
      if (confirm(`هل أنت تأكد من رغبتك في إلغاء ${sessionName}؟`)) {
        let card = document.getElementById(cardId);
        if (card) {
          card.remove();
          alert(`تم إلغاء ${sessionName} بنجاح.`);
        }
      }
    }

    // إعادة جدولة حصة
    function openRescheduleModal(sessionName) {
      alert(`سيتم فتح خيارات المواعيد المتاحة لتغيير موعد ${sessionName}.`);
    }

    // بدء الاختبار النظري
    function startTheoreticalExam() {
      alert('جاري الانتقال لصفحة الاختبار النظري التقييمي...');
    }

    // المساعد الذكي Chatbot
    function sendAiMessage() {
      let input = document.getElementById('aiInputMessage');
      let text = input.value.trim();
      if (!text) return;

      let chatBody = document.getElementById('aiChatBody');

      let userMsgHtml = `
        <div class="d-flex align-items-start justify-content-end gap-2 mb-3">
          <div class="p-3 bg-primary text-white rounded-3 shadow-sm max-w-75">
            ${text}
          </div>
          <div class="p-2 rounded-circle bg-secondary text-white"><i class="fa-solid fa-user"></i></div>
        </div>
      `;
      chatBody.innerHTML += userMsgHtml;
      input.value = '';
      chatBody.scrollTop = chatBody.scrollHeight;

      setTimeout(() => {
        let botMsgHtml = `
          <div class="d-flex align-items-start gap-2 mb-3">
            <div class="p-2 rounded-circle text-white" style="background-color: var(--primary-navy);"><i class="fa-solid fa-robot"></i></div>
            <div class="p-3 bg-white border rounded-3 shadow-sm max-w-75">
              شكراً لاستفسارك! يمكنك تأكيد حضور أي حصة من الـ 6 حصص وتقييمها مباشرة عبر زر التقييم بجوار كل حصة.
            </div>
          </div>
        `;
        chatBody.innerHTML += botMsgHtml;
        chatBody.scrollTop = chatBody.scrollHeight;
      }, 700);
    }

    function handleAiKeyPress(e) {
      if (e.key === 'Enter') {
        sendAiMessage();
      }
    }


        // تجميع عناصر الـ DOM
        const DOM = {
            toggleBtn: document.getElementById('chatbot-toggle-btn'),
            closeBtn: document.getElementById('close-chatbot-btn'),
            popup: document.getElementById('chatbot-popup'),
            chatInput: document.getElementById('chat-input'),
            chatContainer: document.getElementById('chat-messages'),
            sendBtn: document.getElementById('send-btn')
        };

        // فتح وإغلاق النافذة
        const togglePopup = () => DOM.popup.classList.toggle('hidden');
        const closePopup = () => DOM.popup.classList.add('hidden');

        DOM.toggleBtn.addEventListener('click', (e) => {
            e.preventDefault();
            togglePopup();
            if (!DOM.popup.classList.contains('hidden')) {
                DOM.chatInput.focus();
            }
        });

        DOM.closeBtn.addEventListener('click', closePopup);

        // إغلاق النافذة بزر Esc من الكيبورد
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !DOM.popup.classList.contains('hidden')) {
                closePopup();
            }
        });

        // الضغط على Enter للإرسال
        DOM.chatInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                sendChatMessage();
            }
        });

        // دالة إرسال الرسالة المعالجة
        async function sendChatMessage() {
            const messageText = DOM.chatInput.value.trim();
            if (!messageText) return;

            // 1. إضافة رسالة المستخدم وتفريغ خانة الإدخال
            appendMessageToChat('user', messageText);
            DOM.chatInput.value = '';

            // 2. إظهار تأثير "جاري الكتابة..."
            const typingIndicator = showTypingIndicator();

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
                removeTypingIndicator(typingIndicator);

                if (result.status === 'success') {
                    const botReply = result.data.reply || result.data.response || result.data.message || JSON.stringify(result.data);
                    appendMessageToChat('bot', botReply);
                } else {
                    appendMessageToChat('bot', 'عذراً، حدث خطأ أثناء معالجة الطلب.');
                }

            } catch (error) {
                console.error('Error:', error);
                removeTypingIndicator(typingIndicator);
                appendMessageToChat('bot', 'تعذر الاتصال بالخادم.');
            }
        }

        // إضافة الرسالة في منطقة الشات
        function appendMessageToChat(sender, text) {
            const messageDiv = document.createElement('div');
            messageDiv.className = sender === 'user' ? 'message user-message' : 'message bot-message';
            messageDiv.innerText = text;

            DOM.chatContainer.appendChild(messageDiv);
            DOM.chatContainer.scrollTop = DOM.chatContainer.scrollHeight;
        }

        // إنشاء مؤشر نقاط جاري الكتابة
        function showTypingIndicator() {
            const typingDiv = document.createElement('div');
            typingDiv.className = 'message bot-message typing-indicator';
            typingDiv.innerHTML = `
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
            `;
            DOM.chatContainer.appendChild(typingDiv);
            DOM.chatContainer.scrollTop = DOM.chatContainer.scrollHeight;
            return typingDiv;
        }

        function removeTypingIndicator(element) {
            if (element) element.remove();
        }
  </script>
</body>
</html>
