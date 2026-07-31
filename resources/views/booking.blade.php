<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>حجز الباقة - سَوَّقْنِي</title>

  <!-- 📌 اللوجو في علامة التبويب (Favicon) -->
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
      --text-dark: #1E293B;
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
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        text-align: center;
      }

      .brand-logo-wrapper {
        background: #ffffff;
        padding: 10px 20px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.18);
        width: 100%;
        max-width: 220px;
      }

      .brand-logo-wrapper img {
        height: 65px;
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
      .sidebar-nav .brand-container {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .brand-logo-wrapper img {
        height: 48px;
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

    /* 🚪 Logout Button Design */
    .btn-logout {
      color: #ff6b6b !important;
      font-weight: 600;
      border-radius: 12px;
      transition: all 0.25s ease;
    }

    .btn-logout:hover {
      background-color: rgba(255, 107, 107, 0.12) !important;
      color: #ff4747 !important;
      transform: translateX(-4px);
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

    /* Booking Form Card Design */
    .booking-card {
      background: var(--card-white);
      border-radius: 24px;
      border: 1px solid rgba(131, 140, 145, 0.2);
      box-shadow: 0 20px 40px rgba(14, 33, 108, 0.06);
      overflow: hidden;
    }

    .booking-header {
      background: linear-gradient(135deg, var(--primary-navy) 0%, #152d8a 100%);
      color: #FFFFFF;
      padding: 35px 25px;
      text-align: center;
      position: relative;
    }

    /* Form Controls Styling */
    .form-label {
      font-weight: 700;
      color: var(--primary-navy);
      font-size: 0.92rem;
      margin-bottom: 8px;
    }

    .form-control, .form-select {
      border: 1.5px solid rgba(131, 140, 145, 0.3);
      border-radius: 12px;
      padding: 12px 16px;
      font-size: 0.95rem;
      transition: all 0.25s ease;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--primary-navy);
      box-shadow: 0 0 0 3.5px rgba(14, 33, 108, 0.1);
    }

    /* Custom Radio Box for Payment Methods */
    .payment-option {
      border: 2px solid rgba(131, 140, 145, 0.25);
      border-radius: 16px;
      padding: 16px;
      cursor: pointer;
      transition: all 0.25s ease;
      background-color: #FFFFFF;
    }

    .payment-option:hover {
      border-color: var(--primary-navy);
    }

    .payment-option.active {
      border-color: var(--accent-orange);
      background-color: #FFF8F0;
    }

    .payment-option input[type="radio"] {
      accent-color: var(--accent-orange);
      width: 18px;
      height: 18px;
    }

    /* Order Summary Sidebar Box */
    .summary-box {
      background-color: #F8F9FA;
      border: 1px dashed rgba(131, 140, 145, 0.4);
      border-radius: 16px;
      padding: 20px;
    }

    /* CTA Button */
    .btn-submit-booking {
      background-color: var(--accent-orange);
      color: #FFFFFF;
      font-weight: 800;
      font-size: 1.1rem;
      border-radius: 14px;
      padding: 14px;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-submit-booking:hover {
      background-color: #e07208;
      box-shadow: 0 8px 20px rgba(254, 133, 17, 0.3);
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
    }
  </style>
</head>
<body>

  <!-- 🧭 Sidebar Right (الناف بار الجانبي) -->
  <nav class="navbar navbar-expand-lg sidebar-nav">
    <div class="container-fluid p-0 flex-lg-column align-items-lg-start h-100">

      <!-- 📌 اللوجو واسم المنصة -->
      <a class="brand-container text-decoration-none mx-auto" href="index1.html">
        <div class="brand-logo-wrapper">
          <img src="{{ asset('css/logo.jpeg') }}" alt="لوجو سوقني">
        </div>
      </a>

      <!-- زر التبديل للهواتف -->
      <button class="navbar-toggler border-0 text-white me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
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
            <a class="nav-link active" href="booking.html">
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

        <!-- 🚪 زر تسجيل الخروج -->
        <ul class="navbar-nav fw-medium w-100 mt-auto pt-3 border-top border-secondary border-opacity-25">
          <li class="nav-item">
            <a class="nav-link btn-logout" href="Home_page_login.html" onclick="handleLogout(event)">
              <i class="fa-solid fa-right-from-bracket me-2"></i> تسجيل الخروج
            </a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- 📦 Main Wrapper -->
  <div class="main-wrapper">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="booking-card">

            <!-- Header -->
            <div class="booking-header text-center">
              <h3 class="fw-bold mb-1"><i class="fa-solid fa-calendar-check me-2" style="color: var(--accent-orange);"></i>استكمال حجز الباقة وتأكيد الدفع</h3>
              <p class="opacity-75 small mb-0">قم بتعبئة التفاصيل التالية لفتح حسابك وتأكيد مواعيد الحصص مباشرة</p>
            </div>

            <!-- Body Form -->
            <div class="card-body p-4 p-md-5">
              <form id="bookingForm" onsubmit="handleBookingSubmit(event)">

                <!-- 1️⃣ البيانات الشخصية -->
                <h5 class="fw-bold mb-3" style="color: var(--primary-navy);">
                  <span class="badge rounded-circle me-2 fs-6" style="background-color: var(--primary-navy);">1</span>البيانات الشخصية
                </h5>

                <div class="row g-3 mb-4">
                  <div class="col-md-6">
                    <label class="form-label">البريد الإلكتروني <span class="text-danger">*</span></label>
                    <input type="email" id="userEmail" class="form-control" required placeholder="example@mail.com">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">رقم الهاتف للتأكيد <span class="text-danger">*</span></label>
                    <input type="tel" id="userPhone" class="form-control" pattern="[0-9]{11}" required placeholder="01012345678">
                  </div>
                </div>

                <hr class="my-4 opacity-25">

                <!-- 2️⃣ تفاصيل التدريب -->
                <h5 class="fw-bold mb-3" style="color: var(--primary-navy);">
                  <span class="badge rounded-circle me-2 fs-6" style="background-color: var(--primary-navy);">2</span>تفاصيل التدريب
                </h5>

                <div class="row g-3 mb-4">
                  <div class="col-md-12">
                    <label class="form-label">اختر الباقة المناسبة <span class="text-danger">*</span></label>
                    <select class="form-select" id="packageSelect" required onchange="updateSummary()">
                      <option value="" disabled selected>-- اختر الباقة المطلوب حجزها --</option>
                      <option value="1200" data-name="باقة الأساسيات (6 حصص)">باقة الأساسيات (6 حصص عملي) - 1,200 ج.م</option>
                      <option value="1800" data-name="الباقة المتوسطة (10 حصص)">الباقة المتوسطة (10 حصص عملي) - 1,800 ج.م 🔥</option>
                      <option value="2200" data-name="الباقة الشاملة (12 حصة)">الباقة الشاملة (12 حصة عملي) - 2,200 ج.م</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">اختر مدرسة القيادة (اختياري)</label>
                    <select class="form-select" id="schoolSelect">
                      <option value="">-- كابتن مستقل / بدون مدرسة --</option>
                      <option>مدرسة الأهرام للقيادة</option>
                      <option>مدرسة مصر الجديدة</option>
                      <option>مدرسة التجمع الدولي</option>
                      <option>مدرسة المنسي للقيادة</option>
                      <option>مدرسة الكابتن بالمدن الجديدة</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">اختر الكابتن المفضل <span class="text-danger">*</span></label>
                    <select class="form-select" id="captainSelect" required>
                      <!-- يتم التحميل عبر JS -->
                    </select>
                  </div>
                </div>

                <hr class="my-4 opacity-25">

                <!-- 3️⃣ طريقة الدفع -->
                <h5 class="fw-bold mb-3" style="color: var(--primary-navy);">
                  <span class="badge rounded-circle me-2 fs-6" style="background-color: var(--primary-navy);">3</span>طريقة الدفع
                </h5>

                <div class="row g-3 mb-4">
                  <div class="col-md-6">
                    <label class="payment-option d-flex align-items-center gap-3 active" id="optionVisa" onclick="selectPayment('visa')">
                      <input type="radio" name="payType" value="visa" checked>
                      <div>
                        <div class="fw-bold" style="color: var(--primary-navy);"><i class="fa-regular fa-credit-card me-1 text-primary"></i> بطاقة إلكترونية (فيزا / ماستركارد)</div>
                        <small class="text-muted">دفع مباشر آمن ومشفر 100%</small>
                      </div>
                    </label>
                  </div>

                  <div class="col-md-6">
                    <label class="payment-option d-flex align-items-center gap-3" id="optionWallet" onclick="selectPayment('wallet')">
                      <input type="radio" name="payType" value="wallet">
                      <div>
                        <div class="fw-bold" style="color: var(--primary-navy);"><i class="fa-solid fa-wallet me-1 text-warning"></i> محفظة إلكترونية</div>
                        <small class="text-muted">فودافون كاش، أورانج، اتصالات كاش</small>
                      </div>
                    </label>
                  </div>
                </div>

                <!-- حقول طريقة الدفع -->
                <div class="p-4 rounded-4 mb-4" style="background-color: #F8F9FA; border: 1px solid rgba(131, 140, 145, 0.2);">
                  <div id="visaFields">
                    <div class="row g-3">
                      <div class="col-md-8">
                        <label class="form-label">رقم البطاقة</label>
                        <div class="input-group">
                          <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-credit-card text-muted"></i></span>
                          <input type="text" id="cardNumber" class="form-control border-start-0" maxlength="19" placeholder="4532 **** **** 8921">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label class="form-label">رمز الأمان (CVV)</label>
                        <input type="password" maxlength="3" class="form-control" placeholder="123">
                      </div>
                    </div>
                  </div>

                  <div id="walletFields" class="d-none">
                    <div class="row g-3">
                      <div class="col-md-12">
                        <label class="form-label">رقم المحفظة الإلكترونية المحوّل منها</label>
                        <input type="tel" class="form-control" pattern="[0-9]{11}" placeholder="010XXXXXXXX">
                        <small class="text-muted mt-1 d-block"><i class="fa-solid fa-circle-info me-1"></i>سيتم إرسال رسالة برقم الحساب كاش لإتمام التحويل بعد الضغط على التأكيد.</small>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ملخص الحجز الإجمالي -->
                <div class="summary-box mb-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <span class="text-muted small d-block">الباقة المختارة:</span>
                      <strong id="summaryPkgName" style="color: var(--primary-navy);">لم يتم اختيار باقة بعد</strong>
                    </div>
                    <div>
                      <span class="text-muted small d-block text-end">الإجمالي المستحق:</span>
                      <span class="fs-4 fw-bold" style="color: var(--accent-orange);" id="summaryTotalPrice">0 ج.م</span>
                    </div>
                  </div>
                </div>

                <!-- زر الإرسال -->
                <button type="submit" class="btn btn-submit-booking w-100">
                  <i class="fa-solid fa-lock me-2"></i> تأكيد الطلب والدفع الآمن
                </button>

              </form>
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

  <!-- ⚙️ JavaScript التفاعلي -->
  <script>
    const captainsList = [
      "أحمد علي - سيراتو (أوتوماتيك)",
      "سارة محمود - كورولا (مانيوال)",
      "محمود حسن - لانسـر (أوتوماتيك)",
      "محمد إبراهيم - إلنترا (مانيوال)",
      "منى ذكي - نيسان صني (أوتوماتيك)",
      "خالد يوسف - أكسنت (مانيوال)",
      "كابتن طارق - تويوتا (أوتوماتيك)",
      "هدى جابر - شيفروليه (مانيوال)",
      "عمر فاروق - كيا سبورتاج (أوتوماتيك)",
      "ياسر جلال - فيات (مانيوال)",
      "رانيا السيد - هيونداي i10 (أوتوماتيك)",
      "ماجد توفيق - رينو لوجان (مانيوال)",
      "مصطفى فهمي - إم جي 5 (أوتوماتيك)",
      "نهى خطاب - سوزوكي (مانيوال)",
      "كريم سامي - بيجو 301 (أوتوماتيك)"
    ];

    document.addEventListener("DOMContentLoaded", () => {
      const captainSelect = document.getElementById('captainSelect');
      const packageSelect = document.getElementById('packageSelect');
      const schoolSelect = document.getElementById('schoolSelect');

      const urlParams = new URLSearchParams(window.location.search);
      const selectedCaptainFromUrl = urlParams.get('captain');
      const selectedPackageFromUrl = urlParams.get('package');
      const selectedSchoolFromUrl = urlParams.get('school');

      if (captainSelect) {
        let optionsHTML = '<option value="" disabled ' + (!selectedCaptainFromUrl ? 'selected' : '') + '>-- اختر الكابتن المطلوب --</option>';

        captainsList.forEach(c => {
          const isSelected = selectedCaptainFromUrl && decodeURIComponent(selectedCaptainFromUrl).trim() === c.trim();
          optionsHTML += `<option value="${c}" ${isSelected ? 'selected' : ''}>${c}</option>`;
        });

        captainSelect.innerHTML = optionsHTML;
      }

      if (packageSelect && selectedPackageFromUrl) {
        packageSelect.value = selectedPackageFromUrl;
        updateSummary();
      }

      if (schoolSelect && selectedSchoolFromUrl) {
        const schoolValue = decodeURIComponent(selectedSchoolFromUrl).trim();
        for (let i = 0; i < schoolSelect.options.length; i++) {
          if (schoolSelect.options[i].text.trim() === schoolValue) {
            schoolSelect.selectedIndex = i;
            break;
          }
        }
      }

      const cardNumberInput = document.getElementById('cardNumber');
      if (cardNumberInput) {
        cardNumberInput.addEventListener('input', (e) => {
          let val = e.target.value.replace(/\D/g, '');
          val = val.replace(/(.{4})/g, '$1 ').trim();
          e.target.value = val;
        });
      }
    });

    function selectPayment(type) {
      const optionVisa = document.getElementById('optionVisa');
      const optionWallet = document.getElementById('optionWallet');
      const visaFields = document.getElementById('visaFields');
      const walletFields = document.getElementById('walletFields');

      if (type === 'visa') {
        optionVisa.classList.add('active');
        optionWallet.classList.remove('active');
        visaFields.classList.remove('d-none');
        walletFields.classList.add('d-none');
      } else {
        optionWallet.classList.add('active');
        optionVisa.classList.remove('active');
        walletFields.classList.remove('d-none');
        visaFields.classList.add('d-none');
      }
    }

    function updateSummary() {
      const pkgSelect = document.getElementById('packageSelect');
      const selectedOption = pkgSelect.options[pkgSelect.selectedIndex];

      const pkgName = selectedOption.getAttribute('data-name');
      const pkgPrice = selectedOption.value;

      document.getElementById('summaryPkgName').innerText = pkgName || "لم يتم اختيار باقة بعد";
      document.getElementById('summaryTotalPrice').innerText = pkgPrice ? `${parseInt(pkgPrice).toLocaleString()} ج.م` : "0 ج.م";
    }

    function handleBookingSubmit(event) {
      event.preventDefault();
      const modal = new bootstrap.Modal(document.getElementById('successModal'));
      modal.show();
    }

    function handleLogout(event) {
      event.preventDefault();
      if (confirm("هل أنت تأكد من تسجيل الخروج؟")) {
        window.location.href = "HomePageCase1.html";
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
