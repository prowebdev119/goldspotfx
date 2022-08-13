{include file="common/header.tpl"}

<body>
<!-- preloader  -->
<div id="preloader"></div>
<!-- Start header -->
<header class="header-one">
    <!-- Start top bar -->
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class=" col-md-8 col-sm-8 col-xs-12">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i> support@goldspotfx.com</a></li>
                            <li><a href="#"><i class="fa fa-clock-o"></i> Live support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="topbar-right">
                        <select class="select d-inline-block">
                            <option>Eng</option>
                            <option>Esp</option>
                            <option>Fra</option>
                            <option>Deu</option>
                        </select>
                        <ul>
                            <li><a href="index.php?a=login"><img src="img/icon/login.png" alt="">Login</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- Start Header Menu -->
    <div id="sticker" class="header-menu-area header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-3 d-flex align-items-center">
                    <div class="logo">
                        <a href="index.phtml"><img src="img/logo/logo2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-9">
                    <div class="header-right">
                        <a href="index.php?a=signup#signup" class="hd-btn">Signup</a>
                    </div>
                    <div class="header_menu f-right">
                        <nav id="mobile-menu">
                            <ul class="main-menu">
                                <li><a href="index.phtml">Home</a></li>
                                <li><a href="plan.php">Investment</a></li>
                                <li class="menu-item-has-children"><a href="#">Company</a>
                                    <ul class="submenu">
                                        <li><a href="about.php">About us</a></li>
                                        <li><a href="review.php">Reviews</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
                                        <!-- <li><a href="team.php">Our teams</a></li> -->
                                        <li><a href="terms.php">Terms & Conditions</a></li>
                                        <!-- <li><a href="error.php">Error</a></li> -->
                                        <li><a href="index.php?a=login">Login</a></li>
                                        <li><a href="index.php?a=signup#signup">Signup</a></li>
                                    </ul>
                                </li>

                                <li class="contact"><a href="index.php?a=support">Contact us</a>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Menu -->
</header>
<!-- End header area -->
<main>
    <!-- Start Breadcrumb Area -->
    <div class="page-area bread-pd">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title text-center">
                        <h2>Contact us</h2>
                        <div class="bread-come">
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb purple lighten-4 justify-content-center">
                                    <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i
                                                class="ti-angle-right"
                                                aria-hidden="true"></i></li>
                                    <li class="breadcrumb-items"><a class="black-text" href="#">Contact us</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    <!-- Start contact Area -->
    <div class="contact-page bg-color area-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="contact-left">
                        <div class="contact-image">
                            <img src="img/about/ab.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- End contact icon -->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="contact-form">
                        <form id="contactForm" method="POST" action="assets/contact.php" class="contact-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required
                                           data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="email form-control" id="email" placeholder="Email"
                                           required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject"
                                           required data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required
                                              data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" id="submit" class="contact-btn">Submit</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- End contact Form -->
            </div>

        </div>
    </div>
    <!-- End Contact Area -->
</main>
{include file="common/footer.tpl"}