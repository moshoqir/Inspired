<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>ألهمني</title>

    <!-- Font Awesome 6 (Free Version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS FILES -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">



    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">


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

                        <a href="mailto:info@company.com">
                            info@company.com
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
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
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

            <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: 23rem;
">
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
                        <img src="images/group-people-volunteering-foodbank-poor-people.jpg"
                            class="custom-text-box-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">Our Story</h2>

                            <h5 class="mb-3">Kind Heart Charity, Non-Profit Organization</h5>

                            <p class="mb-0">This is a Bootstrap 5.2.2 CSS template for charity organization websites.
                                You can feel free to use it. Please tell your friends about TemplateMo website. Thank
                                you. HTML CSS files updated on 20 Oct 2022.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Our Mission</h5>

                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor quis metus</p>

                                    <ul class="custom-list mt-2">
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Charity Theme
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Semantic HTML
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="2009"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Founded</span>
                                    </div>

                                    <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="120"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text">B</span>
                                        </div>

                                        <span class="counter-text">Donations</span>
                                    </div>
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

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Our Causes</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/group-african-kids-paying-attention-class.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Children Education</h5>

                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $18,500
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $32,000
                                        </p>
                                    </div>
                                </div>

                                <a href="donate.html" class="custom-btn btn">Donate now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/poor-child-landfill-looks-forward-with-hope.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Poverty Development</h5>

                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus
                                        tempor</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $27,600
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $60,000
                                        </p>
                                    </div>
                                </div>

                                <a href="donate.html" class="custom-btn btn">Donate now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="images/causes/african-woman-pouring-water-recipient-outdoors.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Supply drinking water</h5>

                                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                    </p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-100" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $84,600
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $100,000
                                        </p>
                                    </div>
                                </div>

                                <a href="donate.html" class="custom-btn btn">Donate now</a>
                            </div>
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
                            <h2>Get in touch</h2>

                            {{-- <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"
                                    class="img-fluid avatar-image" alt="">

                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">Clara Barton</p>
                                    <p class="mb-0"><strong>HR & Office Manager</strong></p>
                                </div>
                            </div> --}}

                            <div class="contact-info">
                                <h5 class="mb-3">Contact Infomation</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    طبربور\ عمان - الأردن
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2 mx-1"></i>

                                    <a href="tel: 120-240-9600">
                                        120-240-9600
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2 mx-1"></i>

                                    <a href="mailto:info@yourgmail.com">
                                        donate@charity.org
                                    </a>
                                </p>

                                {{-- <a href="#" class="custom-btn btn mt-3">Get Direction</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Contact form</h2>

                            <p class="mb-4">Or, you can just send an email:
                                <a href="#">info@charity.org</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first-name" id="first-name" class="form-control"
                                        placeholder="الاسم الاول" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last-name" id="last-name" class="form-control"
                                        placeholder="الاسم الاخير" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="البريد الاكتروني" required>

                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="بماذا يمكننا مساعدتك؟"></textarea>

                            <button type="submit" class="form-control">Send Message</button>
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

                        <a href="tel: 120-240-9600" class="site-footer-link mx-1">
                            120-240-9600
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link mx-1">
                            donate@charity.org
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
                        <p class="copyright-text mb-0">Copyright © {{ date('Y') }} <a href="#">Kind
                                Heart</a> Charity Org.

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

</body>

</html>
