<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>ألهمني</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Font Awesome 6 (Free Version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS FILES -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">



    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


</head>

<body id="section_1">

    <header class="site-header" style="direction: ltr">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        طبربور\ عمان - الأردن
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@albaikcenter.com">
                            info@albaikcenter.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://wa.me/+962778093528"
                                target="_blank"class="social-icon-link bi-whatsapp"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="/" class="social-icon-link">
                                <i class="fas fa-globe"></i>
                                <span class="current-lang">AR</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    ألهمني
                    <small>منظمة مساعدة</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ms-3" id="navbarNav" style="margin-right: 31rem;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">الرئيسية</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">من نحن</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">خدماتنا</a>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">تواصل معنا</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/img2.jpg') }}" class="carousel-image img-fluid"
                                        alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1 style="">تمكين القدرات</h1>

                                        <p> تعزيز المهارات والإدماج للشباب ذوي الإحتياجات الخاصة.
                                        </p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('images/img3.jpg') }}" class="carousel-image img-fluid"
                                        alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>تعليم حقيقي</h1>

                                        <p> من الفصول الدراسية إلى المجتمعات، تجارب عملية تلهم النمو.
                                        </p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('images/img4.jpg') }}" class="carousel-image img-fluid"
                                        alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>بناء المستقبل</h1>

                                        <p>إعداد الشباب للتميز المهني والحياة</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Welcome to Kind Heart Charity</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="images/icons/hands.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="images/icons/heart.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="images/icons/receive.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text">Make a <strong>Donation</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="images/icons/scholarship.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}

        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="images/image1.jpg" class="custom-text-box-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">قصتنا</h2>

                            <h5 class="mb-3">مشروع ألهمني</h5>

                            <p class="mb-0">

                                "ألهمني" مركز يعمل مع اليافعين من ذوي الإعاقة فوق عمر 15 سنة، يهدف إلى تأهيلهم
                                اجتماعيًا، أكاديميًا، ومهنيًا.
                                ما يُميز المركز هو النهج الميداني التطبيقي، حيث تُنقل المهارات المكتسبة في المركز إلى
                                الحياة الواقعية من خلال تجارب مباشرة، زيارات مهنية، وتفاعل مجتمعي.
                                كما يدعم المركز العودة للتعليم عبر التعليم المنزلي بالتنسيق مع وزارة التربية والتعليم،
                                ويعمل ضمن خطط فردية لكل مشارك.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box1 mb-lg-0">
                                    <h5 class="mb-3">مهمتنا</h5>

                                    <p>دعم اليافعين من ذوي الإعاقة من خلال التعليم المتخصص، والعلاج التأهيلي، والتدريب
                                        العملي.
                                    </p>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box1 d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="2024"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text ">تأسست</span>
                                    </div>

                                    {{-- <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="120"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text">B</span>
                                        </div>

                                        <span class="counter-text">عدد الطلاب</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- <section class="about-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="images/portrait-volunteer-who-organized-donations-charity.jpg"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Sandy Chan</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Co-Founding Partner</p>

                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                                charity theme based</p>

                            <p>You are not allowed to redistribute this template ZIP file on any other template
                                collection website. Please contact TemplateMo for more information.</p>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}




        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2>خدماتنا</h2>
                    </div>

                    <div class="col-12 position-relative">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <!-- الشريحة 1 -->
                                <div class="swiper-slide">
                                    <div class="custom-block-wrap">
                                        <img src="images/image5.jpg" class="custom-block-image img-fluid"
                                            alt="">
                                        <div class="custom-block">
                                            <div class="custom-block-body">
                                                <h5>التحضير المهني والأكاديمي</h5>
                                                <p>برامج تهدف إلى تزويد المراهقين من ذوي الإعاقة بالمهارات والمعرفة
                                                    اللازمة للنجاح الأكاديمي وفرص العمل المستقبلية.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- الشريحة 2 -->
                                <div class="swiper-slide">
                                    <div class="custom-block-wrap">
                                        <img src="images/image2.jpg" class="custom-block-image img-fluid"
                                            alt="">
                                        <div class="custom-block">
                                            <div class="custom-block-body">
                                                <h5>التربية الخاصة</h5>
                                                <p>دعم تعليمي فردي مصمم لتلبية الاحتياجات الفريدة للطلاب من ذوي الإعاقة.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- الشريحة 3 -->
                                <div class="swiper-slide">
                                    <div class="custom-block-wrap">
                                        <img src="images/image3.jpg" class="custom-block-image img-fluid"
                                            alt="">
                                        <div class="custom-block">
                                            <div class="custom-block-body">
                                                <h5>العلاج الوظيفي</h5>
                                                <p>علاج يركّز على تحسين مهارات الحياة اليومية والاستقلالية للأشخاص الذين
                                                    يواجهون تحديات جسدية أو معرفية.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- الشريحة 4 -->
                                <div class="swiper-slide">
                                    <div class="custom-block-wrap">
                                        <img src="images/image6.jpg" class="custom-block-image img-fluid"
                                            alt="">
                                        <div class="custom-block">
                                            <div class="custom-block-body">
                                                <h5>علاج النطق والسمع</h5>
                                                <p>خدمات تدعم تطوير مهارات التواصل وتعالج صعوبات النطق أو السمع.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- الشريحة 5 -->
                                <div class="swiper-slide">
                                    <div class="custom-block-wrap">
                                        <img src="images/image7.jpg" class="custom-block-image img-fluid"
                                            alt="">
                                        <div class="custom-block">
                                            <div class="custom-block-body">
                                                <h5>تعديل السلوك</h5>
                                                <p>تدخلات تساعد الأفراد على تطوير سلوكيات إيجابية وتقليل السلوكيات
                                                    الصعبة من خلال استراتيجيات منظمة.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- الشريحة 6 -->
                                <div class="swiper-slide">
                                    <div class="custom-block-wrap">
                                        <img src="images/image8.jpg" class="custom-block-image img-fluid"
                                            alt="">
                                        <div class="custom-block">
                                            <div class="custom-block-body">
                                                <h5>التدريب الميداني</h5>
                                                <p>تجارب تعليمية عملية في بيئات واقعية لتطبيق المهارات المكتسبة على أرض
                                                    الواقع.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- أسهم التمرير -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        {{-- <section class="testimonial-section section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="mb-lg-3">Happy Customers</h2>

                        <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                            kengan omeg kohm tokito charity theme</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Maria</span>,
                                            Boss</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit
                                            auctor mauris quis metus tempor orci</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Thomas</span>,
                                            Partner</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                            kengan omeg kohm tokito charity theme</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Jane</span>,
                                            Advisor</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit
                                            auctor mauris quis metus tempor orci</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Bob</span>,
                                            Entreprenuer</small>
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                        <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                        <img src="images/avatar/portrait-young-redhead-bearded-male.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                        <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                        <img src="images/avatar/studio-portrait-emotional-happy-funny.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}


        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>تواصل معنا</h2>

                            {{-- <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"
                                    class="img-fluid avatar-image" alt="">

                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">Clara Barton</p>
                                    <p class="mb-0"><strong>HR & Office Manager</strong></p>
                                </div>
                            </div> --}}

                            <div class="contact-info">
                                <h5 class="mb-3">معلومات الأتصال</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    طبربور\ عمان - الأردن
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2 mx-1"></i>

                                    <a href="tel:  +962 7 7809 3528">
                                        +962 7 7809 3528
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2 mx-1"></i>

                                    <a href="mailto:info@albaikcenter.com">
                                        info@albaikcenter.com
                                    </a>
                                </p>

                                {{-- <a href="#" class="custom-btn btn mt-3">Get Direction</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="{{ route('contact.submit.ar') }}"
                            method="post" role="form">
                            @csrf
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <h2>نموذج الأتصال</h2>

                            <p class="mb-4">أو يمكنك مباشرةً إرسال بريد إلكتروني إلى:
                                <a href="mailto:info@albaikcenter.com">info@albaikcenter.com</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="الاسم" required>
                                </div>


                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="البريد الالكتروني" required>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="number" name="phone" id="phone" class="form-control"
                                        placeholder="رقم الهاتف" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="subject" id="subject" class="form-control"
                                        placeholder="الموضوع" required>
                                </div>
                            </div>

                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="بماذا يمكننا مساعدتك؟"></textarea>

                            <button type="submit" class="form-control">إرسال</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="images/logo-white.png" class="logo img-fluid" alt=""
                        style="border-radius: 10px;">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3 text-white">روابط</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#section_2" class="footer-menu-link">من نحن</a></li>

                        <li class="footer-menu-item"><a href="#section_6" class="footer-menu-link">كن شريكًا معنا</a>
                        </li>

                        <li class="footer-menu-item"><a href="#section_3" class="footer-menu-link">حدماتنا</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3 text-white">معلومات</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel:  +962 7 7809 3528" class="site-footer-link mx-1">
                            +962 7 7809 3528
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@albaikcenter.com" class="site-footer-link mx-1">
                            info@albaikcenter.com
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        طبربور\ عمان - الأردن
                    </p>

                    {{-- <a href="#" class="custom-btn btn mt-3">Get Direction</a> --}}
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © {{ date('Y') }} <a href="#">
                                Inspired</a> Charity Org.

                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
            loop: true,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
            },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
