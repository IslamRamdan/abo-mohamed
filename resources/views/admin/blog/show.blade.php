<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تصليح وصيانة الخزانات | أبو محمد</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800;900&family=Cairo:wght@300;400;600;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('./Style/style.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand"><i class="fa-solid fa-droplet me-2"></i> تصليح وصيانه الخزانات</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav me-auto gap-1">
                    <li class="nav-item"><a class="nav-link" href="#about">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="#why">لماذا نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="#works">أعمالنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">مقالنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">تواصل معنا</a></li>
                </ul>
                <div class="d-flex gap-2 mt-2 mt-lg-0">
                    <a href="tel:65607075" class="btn-call c-blue" style="padding:9px 20px;font-size:0.9rem;">
                        <i class="fa-solid fa-phone"></i> 65607075
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="hero">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge"><i class="fa-solid fa-star me-1"></i> خدمات متخصصة في جميع أنحاء الكويت</div>
                <h1 class="hero-title">
                    <span class="c1">أبو محمد</span> لتصليح<br />
                    وصيانة <span class="c2">الخزانات</span>
                </h1>
                <p class="hero-sub fs-4 fw-bold">
                    خبرة واسعة في صيانة جميع أنواع الخزانات وتركيب مبردات خزانات النشاط
                    نخدمك في جميع أنحاء الكويت على مدار الساعة
                </p>
                <div class="hero-btns">
                    <a href="tel:65607075" class="btn-call c-blue">
                        <i class="fa-solid fa-phone-volume"></i> 65607075
                    </a>
                    <a href="tel:99109049" class="btn-call c-gold">
                        <i class="fa-solid fa-phone"></i> 99109049
                    </a>
                </div>
            </div>
        </div>

    </section>
    <section class="py-5" style="background-color: var(--bg-dark); min-height: 100vh;">
        <div class="container py-4">

            <div class="mb-4 text-end">
                <a href="{{ url()->previous() }}" class="text-decoration-none" style="color: var(--accent);">
                    <i class="bi bi-arrow-right"></i> العودة للخلف
                </a>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg" style="border: 2px solid var(--primary);">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                            class="img-fluid w-100" style="max-height: 500px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6 text-end">
                    <div class="p-4 rounded-4 h-100"
                        style="background-color: var(--bg-card); border-right: 4px solid var(--accent2);">

                        <h1 class="display-6 fw-bold mb-4" style="color: var(--white);">
                            {{ $blog->title }}
                        </h1>

                        <div class="mb-4">
                            <span class="badge" style="background-color: var(--primary); color: var(--white);">مبادرة
                                نشطة</span>
                            <span class="text-muted ms-3" style="font-size: 0.9rem;">
                                تاريخ النشر: {{ $blog->created_at->format('Y-m-d') }}
                            </span>
                        </div>

                        <div class="content-area mb-5"
                            style="color: var(--text-light); line-height: 1.8; font-size: 1.1rem;">
                            {!! $blog->content !!}
                        </div>

                        <hr style="border-color: rgba(255,255,255,0.1);">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* تحسين شكل الخط والتباعد للنصوص العربية */
        body {
            direction: rtl;
        }

        .content-area {
            text-align: justify;
            text-justify: inter-word;
        }

        .btn:hover {
            opacity: 0.9;
            transform: scale(1.02);
            transition: all 0.2s;
        }
    </style>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p>جميع الحقوق محفوظة &copy; 2025 — <span>أبو محمد لصيانة الخزانات</span> | الكويت</p>
            <p style="margin-top: 10px; font-size: 0.85rem; opacity: 0.8;">
                تم التصميم بواسطة
                <a href="https://www.facebook.com/profile.php?id=100090592885243&locale=ar_AR" target="_blank"
                    style="color: var(--accent); text-decoration: none; font-weight: 700; transition: 0.3s;">
                    GMTWEB
                </a>
            </p>
        </div>
    </footer>

    <button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('./main.js') }}"></script>
</body>

</html>
