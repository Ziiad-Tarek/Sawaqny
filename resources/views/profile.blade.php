<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>حسابي الشخصي - سَوَّقْنِي</title>

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



    @keyframes pulse {
      0% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.7; transform: scale(1.05); }
      100% { opacity: 1; transform: scale(1); }
    }
    /* Profile Cover Banner */
    .profile-cover {
      height: 180px;
      background: linear-gradient(135deg, var(--primary-navy) 0%, #1c38a3 100%);
      border-radius: 20px 20px 0 0;
      position: relative;
    }

    .profile-card {
      background: #FFFFFF;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      border: 1px solid rgba(131, 140, 145, 0.15);
      margin-top: -60px;
      position: relative;
      z-index: 2;
    }

    /* Profile Avatar Upload Styling */
    .avatar-wrapper {
      position: relative;
      width: 120px;
      height: 120px;
      margin-top: -60px;
    }

    .avatar-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 4px solid #FFFFFF;
      object-fit: cover;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      background-color: #EBF0FF;
    }

    .btn-upload-avatar {
      position: absolute;
      bottom: 0;
      left: 0;
      background-color: var(--accent-orange);
      color: #FFFFFF;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #FFFFFF;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-upload-avatar:hover {
      background-color: #e07208;
      transform: scale(1.1);
    }

    /* Navigation Pills Tabs */
    .profile-tabs .nav-link {
      color: var(--primary-navy) !important;
      font-weight: 700;
      padding: 12px 20px;
      border-radius: 12px;
      transition: all 0.3s ease;
      background-color: #FFFFFF;
      border: 1px solid rgba(131, 140, 145, 0.2);
    }

    .profile-tabs .nav-link.active {
      background-color: var(--primary-navy) !important;
      color: #FFFFFF !important;
      box-shadow: 0 5px 15px rgba(14, 33, 108, 0.2);
    }

    /* Form Controls Modern */
    .form-control, .form-select {
      border-radius: 12px;
      padding: 12px 16px;
      border: 1px solid rgba(131, 140, 145, 0.3);
      font-weight: 500;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--accent-orange);
      box-shadow: 0 0 0 0.25rem rgba(254, 133, 17, 0.15);
    }

    .form-label {
      font-weight: 700;
      color: var(--primary-navy);
      font-size: 0.9rem;
    }

    /* Stat Box Cards */
    .stat-card-item {
      background-color: #F8FAFC;
      border: 1px solid rgba(131, 140, 145, 0.15);
      border-radius: 16px;
      padding: 20px;
      transition: all 0.3s ease;
    }

    .stat-card-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.05);
      border-color: var(--accent-orange);
    }

    .stat-icon-circle {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
    }

    /* Buttons */
    .btn-save-custom {
      background-color: var(--accent-orange);
      color: #FFFFFF;
      font-weight: 700;
      border-radius: 12px;
      padding: 12px 30px;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-save-custom:hover {
      background-color: #e07208;
      box-shadow: 0 5px 15px rgba(254, 133, 17, 0.3);
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
      <div class="collapse navbar-collapse w-100 mt-lg-3 flex-column justify-content-between h-100" id="sidebarMenu">
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
            <a class="nav-link" href="support.html">
              <i class="fa-solid fa-headset me-1"></i> الدعم والشكاوي
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="profile.html">
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

      <!-- Profile Cover & Main Header Card -->
      <div class="row mb-4">
        <div class="col-12">
          <div class="profile-cover"></div>
          <div class="profile-card p-4">
            <div class="d-flex flex-column flex-md-row align-items-center align-items-md-end justify-content-between gap-3">

              <div class="d-flex flex-column flex-md-row align-items-center align-items-md-end gap-3 text-center text-md-start">
                <div class="avatar-wrapper">
                  <img src="https://ui-avatars.com/api/?name=إلهام+عفيفي&background=0E216C&color=fff&size=128" id="avatarPreview" class="avatar-img" alt="صورة الملف الشخصي">
                  <label for="avatarInput" class="btn-upload-avatar" title="تغيير الصورة">
                    <i class="fa-solid fa-camera"></i>
                  </label>
                  <input type="file" id="avatarInput" class="d-none" accept="image/*" onchange="previewImage(event)">
                </div>

                <div>
                  <h4 class="fw-black mb-1" style="color: var(--primary-navy);" id="displayName">إلهام عفيفي</h4>
                  <p class="text-muted small mb-0"><i class="fa-solid fa-user-graduate text-warning me-1"></i> متدرب نشط</p>
                </div>
              </div>

              <div class="d-flex gap-2">
                <span class="badge px-3 py-2 rounded-pill bg-success opacity-90"><i class="fa-solid fa-circle-check me-1"></i> الحساب مفعل</span>
                <span class="badge px-3 py-2 rounded-pill" style="background-color: var(--accent-orange);"><i class="fa-solid fa-star me-1"></i> مستوى متوسط</span>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Main Content Area with Dynamic Tabs -->
      <div class="row g-4">

        <!-- Tab Controls Sidebar -->
        <div class="col-lg-3">
          <div class="nav flex-column nav-pills profile-tabs gap-2" id="v-pills-tab" role="tablist">
            <button class="nav-link active d-flex align-items-center gap-2 text-start" id="tab-info" data-bs-toggle="pill" data-bs-target="#pills-info" type="button" role="tab">
              <i class="fa-solid fa-user-pen"></i> البيانات الشخصية
            </button>
            <button class="nav-link d-flex align-items-center gap-2 text-start" id="tab-stats" data-bs-toggle="pill" data-bs-target="#pills-stats" type="button" role="tab">
              <i class="fa-solid fa-chart-pie"></i> إحصائيات التدريب
            </button>
            <button class="nav-link d-flex align-items-center gap-2 text-start" id="tab-settings" data-bs-toggle="pill" data-bs-target="#pills-settings" type="button" role="tab">
              <i class="fa-solid fa-sliders"></i> الإعدادات والأمان
            </button>
          </div>
        </div>

        <!-- Tab Content Area -->
        <div class="col-lg-9">
          <div class="tab-content bg-white p-4 rounded-4 border shadow-sm" id="v-pills-tabContent">

            <!-- 1. البيانات الشخصية -->
            <div class="tab-pane fade show active" id="pills-info" role="tabpanel">
              <h5 class="fw-bold mb-3" style="color: var(--primary-navy);">
                <i class="fa-solid fa-id-card me-2 text-warning"></i> تعديل البيانات الشخصية
              </h5>
              <hr class="mb-4">

              <form id="profileForm" onsubmit="saveProfile(event)">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label">الاسم الكامل</label>
                    <input type="text" class="form-control" id="inputName" value="إلهام أحمد محمد عفيفي" required>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">البريد الإلكتروني</label>
                    <input type="email" class="form-control" id="inputEmail" value="elham.afify@example.com" required>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">رقم الهاتف</label>
                    <input type="tel" class="form-control" id="inputPhone" value="01012345678" required>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">المحافظة / المدينة</label>
                    <select class="form-select">
                      <option selected>القاهرة</option>
                      <option>الجيزة</option>
                      <option>الإسكندرية</option>
                      <option>القليوبية</option>
                    </select>
                  </div>

                  <div class="col-12">
                    <label class="form-label">العنوان التفصيلي (لاستلام الرخصة أو التقاء الكابتن)</label>
                    <input type="text" class="form-control" value="شارع الأهرام - الجيزة">
                  </div>
                </div>

                <div class="mt-4 text-end">
                  <button type="submit" class="btn btn-save-custom">
                    <i class="fa-solid fa-floppy-disk me-1"></i> حفظ التغييرات
                  </button>
                </div>
              </form>
            </div>

            <!-- 2. إحصائيات التدريب -->
            <div class="tab-pane fade" id="pills-stats" role="tabpanel">
              <h5 class="fw-bold mb-3" style="color: var(--primary-navy);">
                <i class="fa-solid fa-chart-simple me-2 text-warning"></i> ملخص نشاطك في منصة سَوَّقْنِي
              </h5>
              <hr class="mb-4">

              <div class="row g-3 mb-4">
                <div class="col-md-6 col-xl-3">
                  <div class="stat-card-item">
                    <div class="d-flex align-items-center gap-3">
                      <div class="stat-icon-circle" style="background-color: #EBF0FF; color: var(--primary-navy);">
                        <i class="fa-solid fa-car"></i>
                      </div>
                      <div>
                        <span class="text-muted small d-block">الحصص المكتملة</span>
                        <h4 class="fw-bold mb-0">8 حصص</h4>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-xl-3">
                  <div class="stat-card-item">
                    <div class="d-flex align-items-center gap-3">
                      <div class="stat-icon-circle" style="background-color: #FFF3E0; color: var(--accent-orange);">
                        <i class="fa-solid fa-clock"></i>
                      </div>
                      <div>
                        <span class="text-muted small d-block">ساعات التدريب</span>
                        <h4 class="fw-bold mb-0">16 ساعة</h4>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-xl-3">
                  <div class="stat-card-item">
                    <div class="d-flex align-items-center gap-3">
                      <div class="stat-icon-circle" style="background-color: #E8F5E9; color: #2E7D32;">
                        <i class="fa-solid fa-award"></i>
                      </div>
                      <div>
                        <span class="text-muted small d-block">المهارات المتقنة</span>
                        <h4 class="fw-bold mb-0">8 من 12</h4>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-xl-3">
                  <div class="stat-card-item">
                    <div class="d-flex align-items-center gap-3">
                      <div class="stat-icon-circle" style="background-color: #F3E5F5; color: #7B1FA2;">
                        <i class="fa-solid fa-user-ninja"></i>
                      </div>
                      <div>
                        <span class="text-muted small d-block">الكباتن المتدرب معهم</span>
                        <h4 class="fw-bold mb-0">2 كابتن</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- شريط تقدم الخطة العامة -->
              <div class="p-3 bg-light rounded-3 border">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="fw-bold small" style="color: var(--primary-navy);">نسبة الجاهزية لاختبار المرور</span>
                  <span class="fw-bold text-success">66%</span>
                </div>
                <div class="progress" style="height: 10px; border-radius: 10px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 66%;"></div>
                </div>
              </div>
            </div>

            <!-- 3. الإعدادات والأمان -->
            <div class="tab-pane fade" id="pills-settings" role="tabpanel">
              <h5 class="fw-bold mb-3" style="color: var(--primary-navy);">
                <i class="fa-solid fa-gear me-2 text-warning"></i> تفضيلات الحساب والأمان
              </h5>
              <hr class="mb-4">

              <div class="mb-3">
                <h6 class="fw-bold mb-3" style="color: var(--primary-navy);">تغيير كلمة السر</h6>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label">كلمة السر الحالية</label>
                    <input type="password" class="form-control" placeholder="••••••••">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">كلمة السر الجديدة</label>
                    <input type="password" class="form-control" placeholder="••••••••">
                  </div>
                </div>
              </div>

              <div class="mt-4 text-end">
                <button type="button" class="btn btn-save-custom" onclick="alert('تم حفظ الإعدادات بنجاح!')">
                  <i class="fa-solid fa-check me-1"></i> حفظ الإعدادات
                </button>
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


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript التفاعلي -->
  <script>
    // 1. معاينة الصورة الشخصية عند الرفع
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function() {
        const output = document.getElementById('avatarPreview');
        output.src = reader.result;
      };
      if (event.target.files && event.target.files[0]) {
        reader.readAsDataURL(event.target.files[0]);
      }
    }

    // 2. حفظ بيانات البروفايل وتحديث الاسم في الهيدر
    function saveProfile(event) {
      event.preventDefault();
      const newName = document.getElementById('inputName').value;
      document.getElementById('displayName').innerText = newName;
      alert('تم حفظ البيانات الشخصية بنجاح! ✅');
    }

    // 3. تسجيل الخروج
    function logout() {
      if (confirm('هل أنت تأكد من تسجيل الخروج؟')) {
        window.location.href = 'index.html';
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
