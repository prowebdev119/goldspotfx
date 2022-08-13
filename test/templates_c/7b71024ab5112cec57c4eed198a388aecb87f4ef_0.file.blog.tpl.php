<?php /* Smarty version 3.1.27, created on 2022-08-07 09:38:20
         compiled from "templates\blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1083126762ef6bec32c4f9_17431125%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b71024ab5112cec57c4eed198a388aecb87f4ef' => 
    array (
      0 => 'templates\\blog.tpl',
      1 => 1659857796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1083126762ef6bec32c4f9_17431125',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62ef6bec34c996_92004541',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62ef6bec34c996_92004541')) {
function content_62ef6bec34c996_92004541 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1083126762ef6bec32c4f9_17431125';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


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
                            <li><a href="#"><img src="img/icon/login.png" alt="">Login</a>
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
                        <a href="index.php"><img src="img/logo/logo2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-9">
                    <div class="header-right">
                        <a href="contact.html" class="hd-btn">Signup</a>
                    </div>
                    <div class="header_menu f-right">
                        <nav id="mobile-menu">
                            <ul class="main-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="user-panel.html">Dashboard</a></li>
                                <li><a href="plan.html">Investment</a></li>
                                <li class="menu-item-has-children"><a href="#">Company</a>
                                    <ul class="submenu">
                                        <li><a href="about.php">About us</a></li>
                                        <li><a href="review.html">Reviews</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <!-- <li><a href="team.html">Our teams</a></li> -->
                                        <li><a href="terms.html">Terms & Conditions</a></li>
                                        <!-- <li><a href="error.html">Error</a></li> -->
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="signup.html">Signup</a></li>
                                    </ul>
                                </li>

                                <li class="contact"><a href="contact.html">Contact Us</a>
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
                        <h2>Latest blog</h2>
                        <div class="bread-come">
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb purple lighten-4 justify-content-center">
                                    <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i class="ti-angle-right"
                                                                                                           aria-hidden="true"></i></li>
                                    <li class="breadcrumb-items"><a class="black-text" href="#">Latest blog</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    <!-- Start Blog area -->
    <div class="blog-area bg-color area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-headline text-center">
                        <h2>Latest Blog</h2>
                        <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start single blog -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b1.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <span>Investor</span>
                            </div>
                            <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        28 mar, 2021
                                    </span>
                                <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                            </div>
                            <div class="blog-title">
                                <a href="#">
                                    <h4>The phrasal sequence of the Lorem Ipsum text.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b2.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <span>Community</span>
                            </div>
                            <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        21 mar, 2021
                                    </span>
                                <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                            </div>
                            <div class="blog-title">
                                <a href="#">
                                    <h4>Make sure the prototype looks finished by.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b3.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <span>Media</span>
                            </div>
                            <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        14 Mar, 2021
                                    </span>
                                <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                            </div>
                            <div class="blog-title">
                                <a href="#">
                                    <h4>Designer have to make sure the prototype looks.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b4.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <span>Profit</span>
                            </div>
                            <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        28 Feb, 2021
                                    </span>
                                <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                            </div>
                            <div class="blog-title">
                                <a href="#">
                                    <h4>Designer have to make sure the prototype looks.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b5.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <span>Profit</span>
                            </div>
                            <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        28 Feb, 2021
                                    </span>
                                <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                            </div>
                            <div class="blog-title">
                                <a href="#">
                                    <h4>Designer have to make sure the prototype looks.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b6.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <span>Profit</span>
                            </div>
                            <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        28 Feb, 2021
                                    </span>
                                <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                            </div>
                            <div class="blog-title">
                                <a href="#">
                                    <h4>Designer have to make sure the prototype looks.</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="blog-pagination">
                        <ul class="pagination">
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
    </div>
    <!-- End Blog area -->
    <!-- Start Subscribe area -->
    <div class="subscribe-area bg-color">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="subscribe-inner">
                        <div class="subdcribe-content">
                            <div class="section-headline text-center">
                                <h2>Payment methods</h2>
                                <p>Help agencies to define their new business objectives and then create professional software.</p>
                            </div>
                            <div class="subs-form">
                                <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                    <button type="submit" id="submit" class="add-btn">Subscribe</button>
                                </form>
                            </div>
                            <div class="brand-content">
                                <div class="brand-carousel owl-carousel">
                                    <div class="single-brand-item">
                                        <a href="#"><img src="img/brand/1.png" alt=""></a>
                                    </div>
                                    <div class="single-brand-item">
                                        <a href="#"><img src="img/brand/2.png" alt=""></a>
                                    </div>
                                    <div class="single-brand-item">
                                        <a href="#"><img src="img/brand/3.png" alt=""></a>
                                    </div>
                                    <div class="single-brand-item">
                                        <a href="#"><img src="img/brand/4.png" alt=""></a>
                                    </div>
                                    <div class="single-brand-item">
                                        <a href="#"><img src="img/brand/5.png" alt=""></a>
                                    </div>
                                    <div class="single-brand-item">
                                        <a href="#"><img src="img/brand/6.png" alt=""></a>
                                    </div>
                                    <div class="single-brand-item">
                                        <a href="#"><img src="img/brand/7.png" alt=""></a>
                                    </div>
                                    <div class="single-brand-item">
                                        <a href="#"><img src="img/brand/8.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe area -->
</main>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>