<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سَوَّقْنِي - تأكيد الرمز</title>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            /* دليل ألوان منصة سوقني */
            --primary-navy: #0E216C;      /* اللون الأساسي */
            --navy-hover: #081548;
            --accent-orange: #FE8511;     /* لون التفاعل */
            --orange-hover: #e07107;
            --white: #FFFFFF;
            --gray-neutral: #838C91;
            --black-text: #000000;
            --success-green: #10B981;    /* لون نجاح التأكيد */
            
            --card-bg: rgba(255, 255, 255, 0.96);
            --shadow: 0 20px 35px rgba(14, 33, 108, 0.15);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Alexandria', sans-serif;
        }

        body.auth-body {
            background: linear-gradient(-45deg, #0E216C, #18339b, #FE8511, #0E216C);
            background-size: 400% 400%;
            animation: gradientBG 12s ease infinite;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .auth-container {
            background-color: var(--card-bg);
            backdrop-filter: blur(10px);
            padding: 40px 32px;
            border-radius: 24px;
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 420px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        .otp-icon {
            width: 68px;
            height: 68px;
            background: #fff8f0;
            border: 2px solid #fde3ca;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin: 0 auto 16px;
        }

        .auth-container h2 {
            color: var(--primary-navy);
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .subtitle {
            color: var(--gray-neutral);
            font-size: 0.88rem;
            line-height: 1.5;
            margin-bottom: 28px;
        }

        .otp-inputs {
            display: flex;
            gap: 12px;
            justify-content: center;
            direction: ltr;
            margin-bottom: 24px;
        }

        .otp-input {
            width: 58px;
            height: 62px;
            border-radius: 14px;
            border: 2px solid var(--gray-neutral);
            background-color: var(--white);
            text-align: center;
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--black-text);
            transition: all 0.2s ease;
            outline: none;
        }

        .otp-input:focus {
            border-color: var(--accent-orange);
            box-shadow: 0 0 0 4px rgba(254, 133, 17, 0.2);
            transform: translateY(-2px);
        }

        .btn-primary {
            width: 100%;
            padding: 14px;
            background-color: var(--primary-navy);
            color: var(--white);
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(14, 33, 108, 0.25);
        }

        .btn-primary:hover {
            background-color: var(--navy-hover);
            transform: translateY(-1px);
        }

        .btn-primary:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .resend-box {
            margin-top: 20px;
            font-size: 0.88rem;
            color: var(--gray-neutral);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .resend-box a {
            color: var(--accent-orange);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }

        .resend-box a.disabled {
            color: var(--gray-neutral);
            pointer-events: none;
            opacity: 0.6;
        }

        .resend-box a:hover {
            color: var(--orange-hover);
            text-decoration: underline;
        }

        /* نافذة/رسالة النجاح المصممة */
        .success-toast {
            position: fixed;
            top: 25px;
            left: 50%;
            transform: translateX(-50%) translateY(-100px);
            background-color: var(--white);
            border-right: 6px solid var(--success-green);
            padding: 16px 24px;
            border-radius: 14px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 12px;
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            z-index: 1000;
        }

        .success-toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        .toast-icon {
            width: 32px;
            height: 32px;
            background-color: #d1fae5;
            color: var(--success-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
        }

        .toast-text {
            color: var(--primary-navy);
            font-weight: 600;
            font-size: 0.95rem;
        }
    </style>
</head>
<body class="auth-body">

    <!-- رسالة النجاح التفاعلية -->
    <div id="successToast" class="success-toast">
        <div class="toast-icon">✓</div>
        <div class="toast-text">تم تأكيد الحساب بنجاح! جاري التوجيه...</div>
    </div>

    <div class="auth-container">
        <div class="otp-header">
            <div class="otp-icon">🔑</div>
            <h2>تأكيد رقم الهاتف</h2>
            <p class="subtitle">أدخل رمز التحقق المكون من 4 أرقام المرسل إليك</p>
        </div>

        <form id="otpForm">
            <div class="otp-inputs">
                <input type="text" inputmode="numeric" maxlength="1" class="otp-input" autofocus autocomplete="off" required>
                <input type="text" inputmode="numeric" maxlength="1" class="otp-input" autocomplete="off" required>
                <input type="text" inputmode="numeric" maxlength="1" class="otp-input" autocomplete="off" required>
                <input type="text" inputmode="numeric" maxlength="1" class="otp-input" autocomplete="off" required>
            </div>

            <button type="submit" id="submitBtn" class="btn-primary">تأكيد الحساب</button>

            <div class="resend-box">
                <span>لم يصلك الرمز؟</span>
                <a href="otp_trainne.html" id="resendLink">إعادة إرسال</a>
                <span id="timer"></span>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const inputs = document.querySelectorAll(".otp-input");
            const otpForm = document.getElementById("otpForm");
            const submitBtn = document.getElementById("submitBtn");
            const resendLink = document.getElementById("resendLink");
            const timerSpan = document.getElementById("timer");
            const successToast = document.getElementById("successToast");

            inputs.forEach((input, index) => {
                input.addEventListener("input", () => {
                    input.value = input.value.replace(/[^0-9]/g, '');
                    if (input.value.length === 1 && index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                });

                input.addEventListener("keydown", (e) => {
                    if (e.key === "Backspace" && input.value === "" && index > 0) {
                        inputs[index - 1].focus();
                    } else if (e.key === "ArrowLeft" && index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    } else if (e.key === "ArrowRight" && index > 0) {
                        inputs[index - 1].focus();
                    }
                });

                input.addEventListener("paste", (e) => {
                    e.preventDefault();
                    const pastedData = e.clipboardData.getData("text").replace(/[^0-9]/g, '').slice(0, inputs.length);
                    pastedData.split("").forEach((char, i) => {
                        if (inputs[i]) inputs[i].value = char;
                    });
                    const focusIndex = Math.min(pastedData.length, inputs.length - 1);
                    inputs[focusIndex].focus();
                });
            });

            // عند الضغط على تأكيد الحساب
            otpForm.addEventListener("submit", (e) => {
                e.preventDefault();
                
                let otpValue = "";
                inputs.forEach(input => otpValue += input.value);

                if (otpValue.length === 4) {
                    // تعطيل الزر مؤقتاً لتجنب الضغط المكرر
                    submitBtn.disabled = true;

                    // إظهار رسالة النجاح
                    successToast.classList.add("show");

                    // التوجيه للصفحة الجديدة بعد ثانية ونصف (1500ms)
                    setTimeout(() => {
                        // غيّري "dashboard.html" لاسم الصفحة التالية التي تريدين الانتقال إليها
                        window.location.href = "index1.html";
                    }, 1500);

                } else {
                    alert("يرجى إدخال رمز التحقق كاملاً");
                }
            });

            // مؤقت إعادة الإرسال (30 ثانية)
            let countdown = 30;
            let timerInterval;

            function startTimer() {
                resendLink.classList.add("disabled");
                countdown = 30;
                timerSpan.textContent = `(${countdown}ث)`;

                timerInterval = setInterval(() => {
                    countdown--;
                    timerSpan.textContent = `(${countdown}ث)`;
                    if (countdown <= 0) {
                        clearInterval(timerInterval);
                        timerSpan.textContent = "";
                        resendLink.classList.remove("disabled");
                    }
                }, 1000);
            }

            resendLink.addEventListener("click", (e) => {
                if (resendLink.classList.contains("disabled")) {
                    e.preventDefault();
                }
            });

            startTimer();
        });
    </script>
</body>
</html>