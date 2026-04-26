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
    <link rel="stylesheet" href="./Style/style.css">
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

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 reveal">
                    <p class="section-label">من نحن</p>
                    <h2 class="section-title">خبرة تمتد لسنوات في <span>عالم الخزانات</span></h2>
                    <div class="title-line"></div>
                    <div class="about-text">
                        <p>
                            <strong>أبو محمد</strong> هو اسم راسخ في مجال تصليح وصيانة الخزانات بالكويت، يمتد نشاطنا عبر
                            سنوات طويلة من الخبرة الميدانية والعمل المتواصل مع أصحاب المنازل والمنشآت التجارية في جميع
                            أنحاء الكويت.
                        </p>
                        <p>
                            نتخصص في <strong>صيانة جميع أنواع الخزانات</strong> العلوية والأرضية، سواء كانت مصنوعة من
                            الفيبرجلاس أو البولي ايثيلين أو الخرسانة، فضلاً عن خدمة <strong>تركيب مبردات خزانات
                                النشاط</strong> بأحدث التقنيات.
                        </p>
                        <p>
                            فريقنا من المتخصصين المدربين يعمل على مدار الساعة لضمان وصول مياه نظيفة وآمنة إلى منزلك، مع
                            الالتزام التام بأعلى معايير الجودة والسلامة.
                        </p>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-4">
                            <div class="about-stat">
                                <div class="num">10+</div>
                                <div class="lbl">سنوات خبرة</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="about-stat">
                                <div class="num">10+</div>
                                <div class="lbl">عميل راضٍ</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="about-stat">
                                <div class="num">24/7</div>
                                <div class="lbl">خدمة متواصلة</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 flex-wrap mt-4">
                        <a href="tel:65607075" class="btn-call c-blue">
                            <i class="fa-solid fa-phone-volume"></i> اتصل الآن 65607075
                        </a>
                        <a href="tel:99109049" class="btn-call c-gold">
                            <i class="fa-solid fa-phone"></i> 99109049
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 reveal">
                    <div class="about-img-wrap">
                        <img src="./Style/Phtotos/logo.jpeg" alt="صيانة الخزانات - أبو محمد" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY US -->
    <section id="why">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <p class="section-label">مميزاتنا</p>
                <h2 class="section-title">لماذا <span>تختارنا؟</span></h2>
                <div class="title-line mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="why-card">
                        <div class="why-icon"><i class="fa-solid fa-clock"></i></div>
                        <h5>خدمة على مدار الساعة</h5>
                        <p>نحن متاحون في أي وقت تحتاجنا، حتى في أيام العطل الرسمية، لأننا نعلم أن أعطال الخزانات لا
                            تنتظر.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="why-card">
                        <div class="why-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <h5>فنيون مدربون ومحترفون</h5>
                        <p>يمتلك فريقنا خبرة عالية في التعامل مع جميع أنواع الخزانات والمشاكل المرتبطة بها.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="why-card">
                        <div class="why-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                        <h5>تغطية جميع مناطق الكويت</h5>
                        <p>نصلك أينما كنت في الكويت، من العاصمة إلى أبعد المناطق، دون رسوم إضافية للتنقل.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="why-card">
                        <div class="why-icon"><i class="fa-solid fa-tags"></i></div>
                        <h5>أسعار تنافسية ومناسبة</h5>
                        <p>نقدم أفضل الخدمات بأسعار عادلة وشفافة دون رسوم مخفية، مع ضمان جودة العمل.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="why-card">
                        <div class="why-icon"><i class="fa-solid fa-droplet"></i></div>
                        <h5>ضمان نظافة المياه</h5>
                        <p>نستخدم مواد معتمدة وآمنة لتنظيف وإصلاح الخزانات للحفاظ على صحة أسرتك وسلامة مياه الشرب.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="why-card">
                        <div class="why-icon"><i class="fa-solid fa-snowflake"></i></div>
                        <h5>تركيب مبردات النشاط</h5>
                        <p>متخصصون في تركيب وصيانة مبردات خزانات النشاط بكفاءة عالية وضمان على قطع الغيار المستخدمة.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WORKS -->
    <section id="works">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <p class="section-label">معرض الأعمال</p>
                <h2 class="section-title">من <span>أعمالنا</span></h2>
                <div class="title-line mx-auto"></div>
            </div>
            <div class="gallery-grid reveal">
                <div class="gallery-item">
                    <img src="./Style/Phtotos/1.jpg" alt="عمل 1" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> صيانة خزان
                            علوي</span></div>
                </div>
                <div class="gallery-item">
                    <img src="./Style/Phtotos/2.jpg" alt="عمل 2" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> تركيب مبرد
                            نشاط</span></div>
                </div>
                <div class="gallery-item">
                    <img src="./Style/Phtotos/3.jpg" alt="عمل 3" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> إصلاح
                            تسريب</span></div>
                </div>
                <div class="gallery-item">
                    <img src="./Style/Phtotos/4.jpg" alt="عمل 4" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> خزان
                            أرضي</span></div>
                </div>
                <div class="gallery-item">
                    <img src="./Style/Phtotos/5.jpg" alt="عمل 5" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> تنظيف
                            وتعقيم</span></div>
                </div>
                <div class="gallery-item">
                    <img src="./Style/Phtotos/6.jpg" alt="عمل 6" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> خزان
                            فيبرجلاس</span></div>
                </div>
                <div class="gallery-item">
                    <img src="./Style/Phtotos/7.jpg" alt="عمل 7" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> صيانة
                            دورية</span></div>
                </div>
                <div class="gallery-item">
                    <img src="./Style/Phtotos/8.jpg" alt="عمل 8" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> استبدال
                            مضخة</span></div>
                </div>
                <div class="gallery-item">
                    <img src="./Style/Phtotos/9.jpg" alt="عمل 9" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> خزان بولي
                            ايثيلين</span></div>
                </div>
                <div class="gallery-item">
                    <img src="./Style/Phtotos/10.jpg" alt="عمل 10" />
                    <div class="gallery-overlay"><span><i class="fa-solid fa-magnifying-glass-plus"></i> مشروع
                            تجاري</span></div>
                </div>
                <div class="gallery-item video-item">
                    <a href="./Style/Phtotos/vidone.mp4" class="video-link" target="_blank">
                        <img src="./Style/Phtotos/vid.png" alt="مشروع تجاري">
                        <div class="gallery-overlay">
                            <span>
                                <i class="fa-solid fa-circle-play mb-2 d-block"></i>
                                مشاهدة المشروع
                            </span>
                        </div>
                    </a>
                </div>
                <div class="gallery-item video-item">
                    <a href="./Style/Phtotos/vidtwo.mp4" class="video-link" target="_blank">
                        <img src="./Style/Phtotos/vid.png" alt="مشروع تجاري">
                        <div class="gallery-overlay">
                            <span>
                                <i class="fa-solid fa-circle-play mb-2 d-block"></i>
                                مشاهدة المشروع
                            </span>
                        </div>
                    </a>
                </div>

                <div class="gallery-item video-item">
                    <a href="./Style/Phtotos/vidthree.mp4" class="video-link" target="_blank">
                        <img src="./Style/Phtotos/vid.png" alt="صيانة خزانات">
                        <div class="gallery-overlay">
                            <span>
                                <i class="fa-solid fa-circle-play mb-2 d-block"></i>
                                فيديو الصيانة
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTICLE -->
    {{-- <section id="article">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <p class="section-label">معلومات مفيدة</p>
                <h2 class="section-title">دليلك الكامل لـ<span>صيانة الخزانات</span></h2>
                <div class="title-line mx-auto"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 reveal">
                    <div class="article-box">
                        <p>
                            يُعدّ الخزان من أهم المرافق المنزلية التي تضمن وصول المياه النظيفة إلى جميع أفراد الأسرة.
                            ومع ذلك، يغفل كثيرون عن أهمية صيانته الدورية، مما قد يعرّض صحة الأسرة للخطر.
                        </p>

                        <h4><i class="fa-solid fa-circle-exclamation me-2"></i>لماذا صيانة الخزان ضرورة لا رفاهية؟</h4>
                        <p>
                            تتراكم الرواسب والطحالب والبكتيريا داخل الخزان مع مرور الوقت، وإذا تُركت دون معالجة فإنها
                            تُلوّث المياه وتسبب أمراضاً خطيرة. كذلك يؤدي إهمال الصيانة إلى تسريبات تتلف البنية التحتية
                            وتهدر الماء.
                        </p>

                        <h4><i class="fa-solid fa-list-check me-2"></i>علامات تحتاج فيها خزانك للصيانة الفورية</h4>
                        <ul>
                            <li>تغيّر لون المياه أو ظهور رواسب عند فتح الصنبور</li>
                            <li>رائحة كريهة أو غريبة في مياه الشرب</li>
                            <li>انخفاض ملحوظ في ضغط المياه</li>
                            <li>ظهور تسريبات أو بقع رطوبة حول الخزان</li>
                            <li>ارتفاع فاتورة المياه بشكل مفاجئ دون مبرر</li>
                        </ul>

                        <h4><i class="fa-solid fa-snowflake me-2"></i>مبردات خزانات النشاط — ما هي وكيف تعمل؟</h4>
                        <p>
                            مبرد خزان النشاط جهاز يُثبَّت على الخزان لتبريد المياه قبل وصولها إليك، وهو ضروري بشكل خاص
                            في المناخ الحار للكويت. يعمل المبرد عبر ضخ الهواء البارد حول الخزان مما يحافظ على برودة
                            المياه طوال اليوم. <strong>نحن متخصصون في تركيب وصيانة هذه الأجهزة</strong> بكفاءة عالية
                            وبضمان على الأجزاء المستبدلة.
                        </p>

                        <h4><i class="fa-solid fa-calendar-check me-2"></i>التوصيات الدورية للصيانة</h4>
                        <ul>
                            <li>تنظيف وتعقيم الخزان مرة على الأقل كل 6 أشهر</li>
                            <li>فحص الصمامات والمواسير المتصلة بالخزان سنوياً</li>
                            <li>مراجعة مبرد النشاط قبل موسم الصيف</li>
                            <li>الاستعانة بمتخصصين عند أي علامة غير طبيعية</li>
                        </ul>

                        <div class="d-flex gap-3 flex-wrap mt-4">
                            <a href="tel:65607075" class="btn-call c-blue">
                                <i class="fa-solid fa-phone-volume"></i> احجز موعد صيانة 65607075
                            </a>
                            <a href="tel:99109049" class="btn-call c-gold">
                                <i class="fa-solid fa-phone"></i> 99109049
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <p class="section-label">تواصل معنا</p>
                <h2 class="section-title">نحن هنا من <span>أجلك</span></h2>
                <div class="title-line mx-auto"></div>
            </div>
            <div class="row g-4 align-items-start">
                <div class="col-lg-5 reveal">
                    <div class="contact-card">
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fa-solid fa-phone-volume"></i></div>
                            <div class="contact-info">
                                <div class="lbl">الخط الأول</div>
                                <a href="tel:65607075">65607075</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="contact-info">
                                <div class="lbl">الخط الثاني</div>
                                <a href="tel:99109049">99109049</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="contact-info">
                                <div class="lbl">منطقة الخدمة</div>
                                <span>جميع أنحاء الكويت</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fa-solid fa-clock"></i></div>
                            <div class="contact-info">
                                <div class="lbl">ساعات العمل</div>
                                <span>٢٤ ساعة — ٧ أيام</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-cta">
                        <h4>تحتاج مساعدة فورية؟</h4>
                        <div class="d-flex gap-3 flex-wrap justify-content-center">
                            <a href="tel:65607075" class="btn-call dark">
                                <i class="fa-solid fa-phone-volume"></i> 65607075
                            </a>
                            <a href="tel:99109049" class="btn-call gold2">
                                <i class="fa-solid fa-phone"></i> 99109049
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 reveal">
                    <div class="map-frame">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462144.0!2d47.6581!3d29.3117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9a5a2a2d1421%3A0x9765cd1d6a75a7bc!2z2KfZhNm-2YjZitSo!5e0!3m2!1sar!2skw!4v1700000000000"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script src="./main.js"></script>
</body>

</html>
