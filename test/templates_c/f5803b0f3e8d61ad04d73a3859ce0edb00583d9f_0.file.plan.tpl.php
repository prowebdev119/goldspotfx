<?php /* Smarty version 3.1.27, created on 2022-08-07 10:13:32
         compiled from "templates\plan.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143152322062ef742cd67466_05354284%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5803b0f3e8d61ad04d73a3859ce0edb00583d9f' => 
    array (
      0 => 'templates\\plan.tpl',
      1 => 1659859751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143152322062ef742cd67466_05354284',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62ef742cd83fc2_89343343',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62ef742cd83fc2_89343343')) {
function content_62ef742cd83fc2_89343343 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '143152322062ef742cd67466_05354284';
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
                            <a href="contact.php" class="hd-btn">Signup</a>
                        </div>
                        <div class="header_menu f-right">
                            <nav id="mobile-menu">
                                <ul class="main-menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="user-panel.php">Dashboard</a></li>
                                    <li><a href="plan.php">Investment</a></li>
                                    <li class="menu-item-has-children"><a href="#">Company</a>
                                        <ul class="submenu">
                                            <li><a href="about.php">About us</a></li>
                                            <li><a href="review.php">Reviews</a></li>
                                            <li><a href="faq.php">FAQ</a></li>
                                            <!-- <li><a href="team.php">Our teams</a></li> -->
                                            <li><a href="terms.php">Terms & Conditions</a></li>
                                            <!-- <li><a href="error.php">Error</a></li> -->
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="signup.php">Signup</a></li>
                                        </ul>
                                    </li>
                                     
                                    <li class="contact"><a href="contact.php">Contact Us</a>
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
                            <h2>Investment plan</h2>
                            <div class="bread-come">
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb purple lighten-4 justify-content-center">
                                        <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i class="ti-angle-right"
                                            aria-hidden="true"></i></li>
                                        <li class="breadcrumb-items"><a class="black-text" href="#">Investment plan</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area -->
        <!-- Start Investment area -->
        <div class="invest-area bg-color-2 area-padding-2">
            <div class="container">
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>Investment plan</h2>
                            <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                        </div>
                    </div>
               </div>
               <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="pri_table_list text-center">
                        <div class="top-price-inner">
                            <h3>Silver plan</h3>
                            <div class="rates">
                                <span class="prices">10-11.5% </span><span class="users">Monthly</span>
                            </div>
                        </div>
                        <ol class="pricing-text">
                            <li class="check">Minimam Invest : $100</li>
                            <li class="check">Maximam Invest : $1000</li>
                            <li class="check">Avarage Monthly : 50% </li>
                        </ol>
                        <div class="price-btn">
                            <a class="blue" href="#">Invest Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="pri_table_list text-center">
                        <div class="top-price-inner">
                            <h3>Gold plan</h3>
                            <div class="rates">
                                <span class="prices">10.6-12.19% </span><span class="users">Monthly</span>
                            </div>
                        </div>
                        <ol class="pricing-text">
                            <li class="check">Minimam Invest : $1000</li>
                            <li class="check">Maximam Invest : $10000</li>
                            <li class="check">Avarage Monthly :100% </li>
                        </ol>
                        <div class="price-btn">
                            <a class="blue" href="#">Invest Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="pri_table_list text-center">
                        <div class="top-price-inner">
                            <h3>Platinum plan</h3>
                            <div class="rates">
                                <span class="prices">11-12.65% </span><span class="users">Monthly</span>
                            </div>
                        </div>
                        <ol class="pricing-text">
                            <li class="check">Minimam Invest : $1000</li>
                            <li class="check">Maximam Invest : $50000</li>
                            <li class="check">Avarage Monthly : 200% </li>
                        </ol>
                        <div class="price-btn">
                            <a class="blue" href="#">Invest Now</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- End Investment area -->
    </main>
    <?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>