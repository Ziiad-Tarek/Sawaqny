<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب | سَوَّقْنِي</title>

    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-navy: #0E216C;    /* اللون الأساسي - الكحلي الغامق */
            --accent-orange: #FE8511;   /* لون التفاعل والجذب - البرتقالي */
            --neutral-grey: #838C91;    /* الرمادي المحايد */
            --text-dark: #000000;       /* الأسود للنصوص الرئيسيّة */
            --bg-white: #FFFFFF;        /* الأبيض للخلفيات والكروت */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--primary-navy);
            position: relative;
            overflow-x: hidden;
            padding: 20px;
        }

        /* الكانفاس الخاص بالخلفية التفاعلية */
        #bgCanvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        .auth-card {
            width: 950px;
            border: none;
            border-radius: 25px;
            overflow: hidden;
            background: var(--bg-white);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
            animation: showCard .8s ease;
            position: relative;
            z-index: 1;
        }

        @keyframes showCard {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* الجانب الأيمن - النموذج */
        .right-side {
            background: var(--bg-white);
            padding: 45px 40px;
        }

        .right-side h2 {
            color: var(--text-dark);
            font-size: 28px;
        }

        .form-label {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 14px;
        }

        .form-control {
            height: 48px;
            border-radius: 12px;
            border: 2px solid rgba(131, 140, 145, 0.3);
            color: var(--text-dark);
            transition: all .3s ease;
            font-size: 14px;
        }

        .form-control::placeholder {
            color: var(--neutral-grey);
            font-size: 13px;
        }

        .form-control:focus {
            border-color: var(--primary-navy);
            box-shadow: 0 0 0 4px rgba(14, 33, 108, 0.12);
        }

        /* زر الإجراء الرئيسي CTA (برتقالي) */
        .btn-custom {
            height: 50px;
            border: none;
            border-radius: 12px;
            background-color: var(--accent-orange);
            color: #FFFFFF;
            font-size: 17px;
            font-weight: 700;
            transition: all .3s ease;
            box-shadow: 0 8px 20px rgba(254, 133, 17, 0.3);
        }

        .btn-custom:hover {
            background-color: #E07208;
            color: #FFFFFF;
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(254, 133, 17, 0.4);
        }

        a {
            text-decoration: none;
            color: var(--primary-navy);
            font-weight: 700;
            transition: .3s;
        }

        a:hover {
            color: var(--accent-orange);
        }

        .text-login-link {
            color: var(--accent-orange);
        }

        /* الجانب الأيسر - الهوية البصرية */
        .left-side {
            background: linear-gradient(160deg, #0E216C 0%, #081342 100%);
            color: white;
            padding: 50px 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .left-side::before {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.04);
            border-radius: 50%;
            top: -100px;
            right: -80px;
        }

        .left-side::after {
            content: "";
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(254, 133, 17, 0.08);
            border-radius: 50%;
            bottom: -60px;
            left: -50px;
        }

        /* اللوجو الدائري */
        .logo-circle {
            width: 140px;
            height: 140px;
            background-color: #FFFFFF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
            border: 4px solid var(--accent-orange);
            margin-bottom: 25px;
            z-index: 1;
        }

        .logo-circle img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 50%;
        }

        .left-side h1 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 15px;
            z-index: 1;
            letter-spacing: -0.5px;
        }

        .left-side p {
            font-size: 15px;
            line-height: 1.8;
            opacity: 0.9;
            z-index: 1;
            max-width: 330px;
        }

        @media(max-width:768px) {
            .left-side {
                display: none;
            }

            .auth-card {
                width: 100%;
            }

            .right-side {
                padding: 35px 25px;
            }
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
    </style>
</head>

<body>

    <!-- خلفية الـ Canvas التفاعلية -->
    <canvas id="bgCanvas"></canvas>

    <div class="card auth-card">
        <div class="row g-0">

            <!-- الجانب الأيمن (الفورم) -->
            <div class="col-md-7 right-side">
                <h2 class="fw-bold mb-1">مرحبًا بك 👋</h2>
                <p class="text-muted small mb-4">أنشئ حسابك وابدأ رحلتك لتعلم القيادة بكل سهولة.</p>
<form action="otp_trainne.html" method="GET">

    <!-- حقل الاسم بالكامل -->
    <div class="mb-3">
        <label class="form-label">الاسم بالكامل</label>
        <input type="text" name="fullname" class="form-control" placeholder="أدخل اسمك الثلاثي أو الرباعي" required>
    </div>

    <!-- البريد الإلكتروني -->
    <div class="mb-3">
        <label class="form-label">البريد الإلكتروني</label>
        <input type="email" name="email" class="form-control" placeholder="example@mail.com" required>
    </div>

    <!-- رقم الهاتف -->
    <div class="mb-3">
        <label class="form-label">رقم الهاتف</label>
        <input type="tel" name="phone" class="form-control" placeholder="010XXXXXXXX" required>
    </div>

    <!-- كلمة المرور -->
    <div class="mb-4">
        <label class="form-label">كلمة المرور</label>
        <input type="password" name="password" class="form-control" placeholder="••••••••" required>
    </div>

    <!-- زر إنشاء الحساب -->
    <button type="submit" class="btn w-100 btn-custom mb-3">
        <i class="bi bi-person-plus-fill me-1"></i> إنشاء الحساب
    </button>

    <!-- رابط تسجيل الدخول المباشر -->
    <p class="text-center text-muted small mb-0">
        لديك حساب بالفعل؟
        <a href="Home_page_login.html" class="text-login-link">تسجيل الدخول</a>
    </p>

</form>
            </div>

            <!-- الجانب الأيسر (الهوية والترحيب) -->
            <div class="col-md-5 left-side text-center">
                <div class="logo-circle">
        <img src="{{ asset('images/logo.jpeg') }}" class="logo-img" alt="سوقني">
                </div>

                <h1></h1>

                <p>
                    انضم إلى أكبر منصة تربط بين المتدربين ومدارس ومدربي القيادة في مكان واحد، واحجز تدريبك بسهولة وأمان.
                </p>
            </div>

        </div>
    </div>
     <!-- Floating AI Chatbot Button -->
<a href="chatbot.html" class="ai-chatbot-btn" title="تحدث مع مساعد سوقني الذكي">
    <div class="chatbot-icon">
        <!-- SVG Icon للذكاء الاصطناعي / البوت -->
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 8V4H8"></path>
            <rect width="16" height="12" x="4" y="8" rx="2"></rect>
            <path d="M2 14h2"></path>
            <path d="M20 14h2"></path>
            <path d="M15 13v2"></path>
            <path d="M9 13v2"></path>
        </svg>
    </div>
    <span class="chatbot-text">المساعد الذكي</span>
</a>

    <!-- كود JS الخلفية التفاعلية -->
    <script>
        const canvas = document.getElementById('bgCanvas');
        const ctx = canvas.getContext('2d');

        let width, height;
        let particles = [];

        function resize() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
        }

        window.addEventListener('resize', resize);
        resize();

        const particleCount = 55;
        const colors = ['#FE8511', '#2563EB', '#ffffff'];

        class Particle {
            constructor() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.vx = (Math.random() - 0.5) * 0.8;
                this.vy = (Math.random() - 0.5) * 0.8;
                this.radius = Math.random() * 2 + 1;
                this.color = colors[Math.floor(Math.random() * colors.length)];
            }

            update() {
                this.x += this.vx;
                this.y += this.vy;

                if (this.x < 0 || this.x > width) this.vx *= -1;
                if (this.y < 0 || this.y > height) this.vy *= -1;
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.globalAlpha = 0.6;
                ctx.fill();
            }
        }

        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }

        function connectParticles() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < 130) {
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.strokeStyle = '#FE8511';
                        ctx.globalAlpha = (1 - distance / 130) * 0.25;
                        ctx.lineWidth = 0.8;
                        ctx.stroke();
                    }
                }
            }
        }

        function animate() {
            ctx.clearRect(0, 0, width, height);

            let bgGradient = ctx.createLinearGradient(0, 0, width, height);
            bgGradient.addColorStop(0, '#0E216C');
            bgGradient.addColorStop(1, '#050C28');
            ctx.fillStyle = bgGradient;
            ctx.fillRect(0, 0, width, height);

            particles.forEach(p => {
                p.update();
                p.draw();
            });

            connectParticles();
            requestAnimationFrame(animate);
        }

        animate();
    </script>

</body>

</html>
