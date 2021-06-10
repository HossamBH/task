<!DOCTYPE html>

<html lang="en-US">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>تطبيق فيديو سي في -  </title>
    <meta name="description" content="Pixa - App Landing Page Pack with Page builder">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="http://vcvjobs.com/images/settings/1608234656-logo-new.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="http://vcvjobs.com/website/assets/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="http://vcvjobs.com/website/assets/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="http://vcvjobs.com/website/assets/css/et-line.css" type="text/css" media="all">
    <link rel="stylesheet" href="http://vcvjobs.com/website/assets/css/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" href="http://vcvjobs.com/website/assets/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="http://vcvjobs.com/website/assets/css/hover-min.css" type="text/css" media="all">
    <link rel="stylesheet" href="http://vcvjobs.com/website/assets/css/style.css" type="text/css" media="all">
                <link rel="stylesheet" href="http://vcvjobs.com/website/assets/css/style-rtl.css" type="text/css" media="all">
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="preloader-outer">
    <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar"></div>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" class=
            "navbar-toggle collapsed" data-target="#navbar" data-toggle=
                    "collapse" type="button"><span class="sr-only">Toggle
            navigation</span> <span class="icon-bar"></span> <span class=
                                                                   "icon-bar"></span> <span class="icon-bar"></span></button>

            <!-- Logo -->
            <a class="navbar-brand" href="#section-1-1">
                <img src="http://vcvjobs.com/images/settings/1608234656-logo-new.png" alt="homepage" class="light-logo" />
            </a>

            <!-- Logo end -->

        </div>
        <div class="navbar-collapse collapse" id="navbar">

            <div class="navbar-right">

                                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#section-1-1">{{__('messages.HOME')}}</a>
                        </li>
                        <li>
                            <a href="#section-1-2">{{__('messages.HOW IT WORKS')}}</a>
                        </li>
                        <li>
                            <a href="#section-1-3">{{__('messages.OUR ADVANTAGES')}}</a>
                        </li>
                        <li>
                            <a href="#section-1-7">{{__('messages.SCREEN SHOTS')}}</a>
                        </li>
                        <li>
                            <a href="#section-1-12">{{__('messages.CONTACT US')}}</a>
                        </li>
                    </ul>

                <!-- Menu end -->

                <!-- Social Icons -->
                <ul class="nav navbar-nav social">
                    <li><a href="https://www.facebook.com/" class="external"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.twitter.com/" class="external"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li><a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="external">{{ $properties['native'] == 'English' ? 'EN' : 'AR' }}</a></li>
                    @endforeach
                </ul>
                <ul>

                </ul>

            </div>

        </div><!--/.nav-collapse -->
    </div>
</nav>

            <section id="section-1-1" class="hero hero-bg-1 layout-2">
    <div class="container">
        <!-- items outer -->
        <div class="outer clearfix z-1 relative">

            <div class="row flex"><!-- row -->

                <!-- phones image -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="phones">
                        <img src="http://vcvjobs.com/images/staticpages/1609322867-1.png" alt="hero" />
                    </div>
                </div>

                <!-- call to action -->
                <div class="col-md-7 col-md-offset-1 col-sm-12 col-xs-12">

                    <div class="cta">

                        <!-- text -->
                        <h2 class="b20-1">
                            <span class="strong">
                                {{__('messages.HOW ARE WE')}}
                            </span>
                        </h2>
                        <p class="b20-2">
                            {{ optional($aboutUs)->aboutUs }}
                        </p>

                        <!-- buttons -->
                        <div class="buttons b20-3">
                            <a href="#" class="btn btn-default btn-download hvr-float-shadow">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                                <span class="text">
									<span class="little">Download on the</span><br>App Store
								</span>
                            </a>
                            <a href="#" class="btn btn-default btn-download hvr-float-shadow">
                                <i class="fa fa-android" aria-hidden="true"></i>
                                <span class="text">
									<span class="little">Get it on</span><br>Google Play
								</span>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- light overlay -->
    <div class="overlay-light"></div>

</section>

    <section id="section-1-2" class="work-process colored">
    <div class="container">

        <div class="section-header text-center">
            <h2>
                كيف يعمل
            </h2>
            <p>
                التطبيق سهل الإستخدام فهي خطوات بسيطة للتعامل مع التطبيق
            </p>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="item text-center">
                    <div class="icon-wrap">
                        <span class="step s1-1">1</span>
                        <span class="icon-tools-2"></span>
                    </div>
                        <h3>تسجيل فيديو</h3>
                        <p>سجل فيديو تعريفي عن أهم معلوماتك ومعبر عن امكانياتك</p>

                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="item text-center">
                    <div class="icon-wrap">
                        <span class="step s1-2">2</span>
                        <span class="icon-tools"></span>
                    </div>
                        <h3>تقدم للوظائف</h3>
                        <p>تقدم للوظائف المعروضة المناسبة وفقا لمهاراتك المدخلة مسبقا</p>

                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="item text-center">
                    <div class="icon-wrap">
                        <span class="step s1-3">3</span>
                        <span class="icon-layers"></span>
                    </div>
                        <h3>القبول بالوظيفة</h3>
                        <p>انتظر تواصل الشركات معك عبر الدردشة الخاصة بالتطبيق</p>

                </div>
            </div>
        </div>
    </div>
</section>

    <section id="section-1-3" class="describe-1">
    <div class="container">
        <div class="row flex"><!-- Row begin -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="image">
                    <img src="http://vcvjobs.com/images/staticpages/1609251781-2-01.png" alt="describe" class="b20-1" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                    <h2 class="light">مميزاتنا</h2>
                    <p>يشمل التطبيق على العديد من المميزات الجيدة</p>
                    <ul class="list-style pb-15">
                        <li>سهولة الاستخدام</li>
                        <li>الحفاظ علي خصوصة البيانات للمتقدمين</li>
                        <li>سرعة الحصول علي الوظيفة</li>
                        <li>اتاحة الوصول لعدد كبير من الشركات</li>
                    </ul>
            </div>
        </div>
    </div>
</section>
    <section id="section-1-7" class="screenshots">
    <div class="container">

        <!-- section header -->
        <div class="section-header text-center">
            <h2 class="light">شاشات التطبيق</h2>
            <p>بعض شاشات التطبيق تبين سهولة التعامل و جمال التنسيق</p>
        </div>

        <!-- wrapper -->
        <div class="screenshots-01-wrap">
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main1.png" alt="screenshot" />
            </div>
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main2.png" alt="screenshot" />
            </div>
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main3.png" alt="screenshot" />
            </div>
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main4.png" alt="screenshot" />
            </div>
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main5.png" alt="screenshot" />
            </div>
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main6.png" alt="screenshot" />
            </div>
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main7.png" alt="screenshot" />
            </div>
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main8.png" alt="screenshot" />
            </div>
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main9.png" alt="screenshot" />
            </div>
                        <div class="item">
                <img src="http://vcvjobs.com/images/staticpages/1609251123-main10.png" alt="screenshot" />
            </div>
                    </div>

    </div>
</section>
    <section id="section-1-12" class="download-cta colored">
    <div class="container container-800 z-1 relative">
        <div class="cta text-center">
            <h2 class="light">تواصل معنا</h2>
            <p>تواصل معنا بالطرق المختلفة او بالاتصال او بالبريد الإلكتروني او السوشيال ميديا</p>
            <ul class="contact-list">
                            <li><a href="mailto:info@domain.com" ><i class="fa fa-envelope" aria-hidden="true"></i> info@domain.com</a></li>
                                        <li><a href="tel:0123456789" ><i class="fa fa-phone" aria-hidden="true"></i> 0123456789</a></li>
                                        <li><a href="tel:0123456789" ><i class="fa fa-phone" aria-hidden="true"></i> 0123456789</a></li>
                        </ul>

            <!-- buttons -->
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary btn-download hvr-float-shadow">
                    <i class="fa fa-apple" aria-hidden="true"></i>
                    <span class="text">
						<span class="little">Download on the</span><br>App Store
					</span>
                </a>
                <a href="#" class="btn btn-primary btn-download hvr-float-shadow">
                    <i class="fa fa-android" aria-hidden="true"></i>
                    <span class="text">
						<span class="little">Get it on</span><br>Google Play
					</span>
                </a>
            </div>

        </div>

    </div>
</section>
    <footer id="footer-1" class="footer">
    <div class="container">

        <!-- footer menu -->
                    <ul class="footer-menu">
                <li>
                    <a href="#section-1-1">الرئيسية</a>
                </li>
                <li>
                    <a href="#section-1-2">كيف يعمل</a>
                </li>
                <li>
                    <a href="#section-1-3">مميزاتنا</a>
                </li>
                <li>
                    <a href="#section-1-7">شاشات التطبيق</a>
                </li>
                <li>
                    <a href="#section-1-12">تواصل معنا</a>
                </li>
                <li>
                    <a href="http://vcvjobs.com/en">English</a>
                </li>
            </ul>
                <!-- copyright text -->
        <span class="copyright">All Rights Received 2020 <br />
        <a href="https://moltaqa.net">Alkayan elaseel - moltaqa tech</a></span>

        <!-- social icons -->
        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>

    </div>
</footer>
<!-- Section footer 1 end -->

<!-- SCRIPTS -->
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/jquery.single-page.min.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/jquery.ajaxchimp.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/countdown.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/slick.min.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/scrollreveal.min.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/classie.js"></script>
<script type="text/javascript" src="http://vcvjobs.com/website/assets/js/custom.js"></script>
</body>
</html>
