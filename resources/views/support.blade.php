<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الدعم والشكاوى - سَوَّقْنِي</title>

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

      /* 🎯 اللوجو كبير وفي منتصف الشريط الجانبي */
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
        height: 55px; /* زيادة حجم اللوجو */
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

    /* 🚪 رابط تسجيل الخروج */
    .nav-link.logout-link {
      color: #ff6b6b !important;
    }

    .nav-link.logout-link:hover {
      background-color: rgba(255, 107, 107, 0.15);
      color: #ff4d4d !important;
    }
.ai-chatbot-bt /* 2. الزرار العائم مع التأثيرات والتدرج والنبض (الخاص بك) */
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
    /* Mobile Design (Top Navbar Fallback) */
    @media (max-width: 991.98px) {
      .sidebar-nav {
        background-color: var(--primary-navy);
        padding: 0.9rem 1rem;
      }
      .main-wrapper {
        margin-right: 0;
      }
      .sidebar-nav .brand-container {
        display: flex;
        align-items: center;
        gap: 10px;
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

    /* Support Header Banner */
    .support-header {
      background: linear-gradient(135deg, var(--primary-navy) 0%, #152d8a 100%);
      color: #FFFFFF;
      border-radius: 24px;
      padding: 40px 30px;
      box-shadow: 0 10px 30px rgba(14, 33, 108, 0.1);
      margin-bottom: 30px;
    }

    /* Quick Info Cards */
    .info-card {
      background: var(--card-white);
      border-radius: 18px;
      padding: 24px;
      border: 1px solid rgba(131, 140, 145, 0.15);
      box-shadow: 0 6px 20px rgba(0,0,0,0.03);
      transition: all 0.3s ease;
      height: 100%;
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(14, 33, 108, 0.08);
      border-color: var(--accent-orange);
    }

    .info-icon-box {
      width: 55px;
      height: 55px;
      border-radius: 14px;
      background-color: rgba(254, 133, 17, 0.12);
      color: var(--accent-orange);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 15px;
    }

    /* Main Form Card */
    .support-form-card {
      background: var(--card-white);
      border-radius: 24px;
      border: 1px solid rgba(131, 140, 145, 0.18);
      box-shadow: 0 10px 35px rgba(0,0,0,0.04);
      overflow: hidden;
    }

    .form-header-bar {
      background-color: var(--primary-navy);
      color: #FFFFFF;
      padding: 20px 30px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .form-control, .form-select {
      border: 1.5px solid rgba(131, 140, 145, 0.3);
      border-radius: 12px;
      padding: 12px 16px;
      font-weight: 500;
      transition: all 0.25s ease;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--accent-orange);
      box-shadow: 0 0 0 4px rgba(254, 133, 17, 0.15);
    }

    /* Custom File Upload Box */
    .file-upload-wrapper {
      border: 2px dashed rgba(131, 140, 145, 0.35);
      border-radius: 14px;
      padding: 25px;
      text-align: center;
      background-color: #FAFCFE;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .file-upload-wrapper:hover {
      border-color: var(--accent-orange);
      background-color: rgba(254, 133, 17, 0.03);
    }

    /* Accordion FAQ Styling */
    .accordion-item {
      border: 1px solid rgba(131, 140, 145, 0.18);
      border-radius: 14px !important;
      margin-bottom: 12px;
      overflow: hidden;
    }

    .accordion-button {
      font-weight: 700;
      color: var(--primary-navy);
      background-color: #FFFFFF;
      padding: 18px 20px;
    }

    .accordion-button:not(.collapsed) {
      color: var(--accent-orange);
      background-color: rgba(254, 133, 17, 0.05);
      box-shadow: none;
    }

    /* Action Button */
    .btn-submit-complaint {
      background-color: var(--accent-orange);
      color: #FFFFFF;
      font-weight: 800;
      font-size: 1.05rem;
      border-radius: 12px;
      padding: 14px 28px;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(254, 133, 17, 0.25);
    }

    .btn-submit-complaint:hover {
      background-color: #e07208;
      color: #FFFFFF;
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(254, 133, 17, 0.35);
    }
  </style>
</head>
<body>
  <!-- 🧭 Sidebar Right Navigation -->
  <nav class="navbar navbar-expand-lg sidebar-nav">
    <div class="container-fluid p-0 flex-lg-column align-items-lg-start h-100">

      <!-- اللوجو في المنتصف وكبير -->
      <a class="brand-container text-decoration-none" href="index1.html">
        <div class="brand-wrapper">
          <img src="{{ asset('css/logo.jpeg') }}" alt="لوجو سوقني">
        </div>
      </a>

      <!-- زر التبديل للهواتف -->
      <button class="navbar-toggler border-0 text-white ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
        <i class="fa-solid fa-bars"></i>
      </button>

      <!-- قائمة الروابط -->
      <div class="collapse navbar-collapse w-100 mt-lg-2 flex-column justify-content-between h-100" id="sidebarMenu">
        <ul class="navbar-nav fw-medium w-100">
          <li class="nav-item">
            <a class="nav-link" href="index1.html">
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
          <!-- تم نقل كلاس active إلى هذا الرابط -->
          <a class="nav-link active" href="support.html">
            <i class="fa-solid fa-headset me-1"></i> الدعم والشكاوي
          </a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html">
              <i class="fa-regular fa-user me-1"></i> حسابي
            </a>
          </li>
        </ul>

        <!-- 🚪 رابط تسجيل الخروج في أسفل القائمة الجانبية -->
        <ul class="navbar-nav fw-medium w-100 mt-auto pt-3 border-top border-white-10">
          <li class="nav-item">
            <a class="nav-link logout-link" href="Home_page_login.html">
              <i class="fa-solid fa-right-from-bracket me-1"></i> تسجيل الخروج
            </a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- 📦 Main Wrapper -->
  <div class="main-wrapper">
    <div class="container py-4">

      <!-- Header Banner -->
      <div class="support-header text-center text-lg-start d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4">
        <div>
          <h2 class="fw-black mb-2"><i class="fa-solid fa-headset me-2" style="color: var(--accent-orange);"></i>مركز الدعم وحل المشكلات</h2>
          <p class="opacity-75 mb-0 fs-6">نحن هنا لمساعدتك! يسعدنا استقبال استفساراتك أو التعامل مع أي ملاحظات لضمان أفضل تجربة تدريب.</p>
        </div>
        <div>
          <a href="#complaintSection" class="btn text-white px-4 py-3 fw-bold rounded-3" style="background-color: var(--accent-orange);">
            <i class="fa-solid fa-pen-to-square me-2"></i> تقديم شكوى مباشرة
          </a>
        </div>
      </div>

      <!-- Quick Contact Cards -->
      <div class="row g-4 mb-5">
        <div class="col-md-4">
          <div class="info-card">
            <div class="info-icon-box">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <h5 class="fw-bold" style="color: var(--primary-navy);">الدعم الهاتف المباشر</h5>
            <p class="text-muted small mb-2">متواجدون للرد على مكالماتك ومساعدتك فوريًا</p>
            <a href="tel:19000" class="fw-bold text-decoration-none dir-ltr d-inline-block" style="color: var(--accent-orange);">19000 <i class="fa-solid fa-arrow-left ms-1"></i></a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="info-card">
            <div class="info-icon-box" style="background-color: rgba(37, 211, 102, 0.12); color: #25D366;">
              <i class="fa-brands fa-whatsapp"></i>
            </div>
            <h5 class="fw-bold" style="color: var(--primary-navy);">المحادثة المباشرة (واتساب)</h5>
            <p class="text-muted small mb-2">تواصل معنا بسرعة ويسر عبر الواتساب</p>
            <a href="#" class="fw-bold text-decoration-none text-success">بدء المحادثة <i class="fa-solid fa-arrow-left ms-1"></i></a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="info-card">
            <div class="info-icon-box" style="background-color: rgba(14, 33, 108, 0.1); color: var(--primary-navy);">
              <i class="fa-regular fa-clock"></i>
            </div>
            <h5 class="fw-bold" style="color: var(--primary-navy);">أوقات العمل</h5>
            <p class="text-muted small mb-1">يومياً من الساعة 9:00 صباحاً</p>
            <span class="badge bg-light text-dark border fw-medium">حتى الساعة 10:00 مساءً</span>
          </div>
        </div>
      </div>

      <div class="row g-4" id="complaintSection">

        <!-- نموذج تقديم الشكوى -->
        <div class="col-lg-7">
          <div class="support-form-card">
            <div class="form-header-bar">
              <i class="fa-solid fa-shield-halved fs-4" style="color: var(--accent-orange);"></i>
              <div>
                <h5 class="fw-bold mb-0">نموذج رفع شكوى أو ملاحظة</h5>
                <small class="opacity-75">سيتم مراجعة طلبك والتواصل معك خلال 24 ساعة</small>
              </div>
            </div>

            <div class="card-body p-4">

              <!-- تنبيه النجاح المخصص (خفي بداية) -->
              <div id="successAlert" class="alert alert-success d-none border-0 shadow-sm rounded-3 mb-4" role="alert">
                <div class="d-flex align-items-center gap-2">
                  <i class="fa-solid fa-circle-check fs-4"></i>
                  <div>
                    <strong>تم إرسال الشكوى بنجاح!</strong>
                    <div class="small">تم استلام طلبك برقم متابعة #CS-8921 وسيتم التواصل معك قريباً.</div>
                  </div>
                </div>
              </div>

              <form id="complaintForm" onsubmit="handleFormSubmit(event)">

                <!-- اختيار الحصة -->
                <div class="mb-4">
                  <label class="form-label fw-bold small" style="color: var(--primary-navy);">اختر الحصة المتعلقة بالمشكلة <span class="text-danger">*</span></label>
                  <select class="form-select" required id="sessionSelect">
                    <option value="">-- اختر الحصة التدريبية --</option>
                    <option value="1">حصة الأحد 10 يوليو - كابتن أحمد علي (مدرسة الأهرام)</option>
                    <option value="2">حصة الثلاثاء 12 يوليو - كابتن سارة محمود (مدرسة مصر الجديدة)</option>
                    <option value="other">مشكلة عامة / غير متعلقة بحصة معينة</option>
                  </select>
                </div>

                <!-- تصنيف الشكوى -->
                <div class="mb-4">
                  <label class="form-label fw-bold small" style="color: var(--primary-navy);">نوع الشكوى / المشكلة <span class="text-danger">*</span></label>
                  <select class="form-select" required>
                    <option value="">-- اختر التصنيف --</option>
                    <option>تأخير الكابتن عن الموعد</option>
                    <option>سلوك الكابتن أو أسلوب التدريب</option>
                    <option>حالة السيارة غير مناسبة</option>
                    <option>مشكلة في المدفوعات أو الحجز</option>
                    <option>سبب آخر</option>
                  </select>
                </div>

                <!-- تفاصيل الشكوى -->
                <div class="mb-4">
                  <label class="form-label fw-bold small" style="color: var(--primary-navy);">تفاصيل المشكلة <span class="text-danger">*</span></label>
                  <textarea class="form-control" rows="4" required placeholder="يرجى كتابة تفاصيل ما حدث بدقة لكي نتمكن من مساعدتك..."></textarea>
                </div>

                <!-- إرفاق دليل / صورة -->
                <div class="mb-4">
                  <label class="form-label fw-bold small" style="color: var(--primary-navy);">إرفاق صورة أو دليل (اختياري)</label>
                  <div class="file-upload-wrapper" onclick="document.getElementById('fileInput').click()">
                    <i class="fa-solid fa-cloud-arrow-up fs-2 mb-2" style="color: var(--accent-orange);"></i>
                    <p class="mb-1 fw-bold small" style="color: var(--primary-navy);">اضغط هنا لإرفاق ملف أو صور</p>
                    <small class="text-muted d-block">يدعم صيغ (JPG, PNG, PDF) بحد أقصى 5 ميجابايت</small>
                    <span id="fileNameDisplay" class="badge bg-primary mt-2 d-none" style="background-color: var(--primary-navy) !important;"></span>
                  </div>
                  <input type="file" id="fileInput" class="d-none" accept="image/*,.pdf" onchange="showFileName(this)">
                </div>

                <!-- زر الإرسال -->
                <button type="submit" class="btn btn-submit-complaint w-100">
                  <i class="fa-solid fa-paper-plane me-2"></i> إرسال الشكوى الآن
                </button>
              </form>
            </div>
          </div>
        </div>


        <!-- قسم الأسئلة الشائعة FAQ -->
        <div class="col-lg-5">
          <div class="p-4 bg-white rounded-4 border shadow-sm">
            <h5 class="fw-bold mb-3" style="color: var(--primary-navy);">
              <i class="fa-regular fa-lightbulb me-2" style="color: var(--accent-orange);"></i>أسئلة شائعة قد تساعدك
            </h5>
            <p class="text-muted small mb-4">قبل تقديم الشكوى، يمكنك الاطلاع على الإجابات السريعة للمشكلات الشائعة:</p>

            <div class="accordion" id="faqAccordion">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    ماذا أفعل إذا تأخر الكابتن عن الموعد؟
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                  <div class="accordion-body small text-muted">
                    يتم تعويضك بـ 15 دقيقة إضافية في نهاية الحصة أو إضافة الوقت المتبقي للحصة القادمة، وفي حال التأخير لأكثر من 30 دقيقة يتم إعادة جدولة الحصة مجاناً.
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


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript التفاعلي -->
  <script>
    // إظهار اسم الملف المرفق
    function showFileName(input) {
      const display = document.getElementById('fileNameDisplay');
      if (input.files && input.files[0]) {
        display.innerText = 'الملف المرفق: ' + input.files[0].name;
        display.classList.remove('d-none');
      } else {
        display.classList.add('d-none');
      }
    }

    // معالجة نموذج الشكوى بأسلوب سلس
    function handleFormSubmit(event) {
      event.preventDefault();

      // إظهار تنبيه النجاح وتمرير الصفحة للأعلى
      const alertBox = document.getElementById('successAlert');
      alertBox.classList.remove('d-none');

      // تفريغ النموذج
      document.getElementById('complaintForm').reset();
      document.getElementById('fileNameDisplay').classList.add('d-none');

      window.scrollTo({
        top: document.getElementById('complaintSection').offsetTop - 30,
        behavior: 'smooth'
      });
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
