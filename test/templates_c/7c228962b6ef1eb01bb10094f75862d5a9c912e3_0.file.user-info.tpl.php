<?php /* Smarty version 3.1.27, created on 2022-08-09 08:19:12
         compiled from "templates/user-info.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:186237090362f250c003eef0_02768457%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c228962b6ef1eb01bb10094f75862d5a9c912e3' => 
    array (
      0 => 'templates/user-info.tpl',
      1 => 1660045883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186237090362f250c003eef0_02768457',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f250c0068478_76503612',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f250c0068478_76503612')) {
function content_62f250c0068478_76503612 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '186237090362f250c003eef0_02768457';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<body>
    <!-- preloader  -->
    <div id="preloader"></div>
    <!-- Start header -->
    <div class="overlay"></div>
    <header class="header-one header-dashboard-top">
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
                            <a href="index.php?a=signup.php#signup" class="hd-btn">Signup</a>
                        </div>
                        <div class="header_menu f-right">
                            <nav id="mobile-menu">
                                <ul class="main-menu">
                                    <li><a href="index.phtml">Home</a></li>
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
                                            <li><a href="index.php?a=login">Login</a></li>
                                            <li><a href="index.php?a=signup.php#signup">Signup</a></li>
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
                        <div class="breadcrumb-title">
                            <h2>User Information </h2>
                            <div class="bread-come">
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb purple lighten-4">
                                        <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i class="ti-angle-right"
                                            aria-hidden="true"></i></li>
                                        <li class="breadcrumb-items"><a class="black-text" href="#">User Information </a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area -->
         <div class="notify-overlay"></div>
         <div class="dsahboard-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <aside class="sidebar">
                            <div class="dashboard-side">
                                <div class="dashboard-head">
                                    <div class="dashboard-profile">
                                        <img src="img/about/profile.png" alt="">
                                        <div class="profile-content">
                                            <span class="pro-name">jhon Deo</span>
                                            <span class="pro-number">jonedoe@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-menu">
                                    <ul>
                                        <li><a href="user-panel.php"><i class="ti-dashboard"></i>Dashboard</a></li>
                                        <li><a href="user-deposit.php"><i class="ti-wallet"></i>Deposit Money</a></li>
                                        <li><a href="user-withdraw.php"><i class="ti-import"></i>Withdraw Money</a></li>
                                        <li><a href="user-invest.php"><i class="ti-new-window"></i>Total Investment</a></li>
                                        <li><a href="user-transection.php"><i class="ti-layout-list-thumb"></i>Transaction</a></li>
                                        <li><a href="user-notifecations.php"><i class="ti-bell"></i>Notifications</a></li>
                                        <li class="active"><a href="user-info.php"><i class="ti-settings"></i>Settings</a></li>
                                        <li><a href="#"><i class="ti-shift-right"></i>Log out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <div class="dashboard-top">
                            <div class="userboard">
                                <div class="dashboard-header-right d-flex flex-wrap align-items-center">
                                    <div class="single-left-icon">
                                         <div class="search-inner">
                                            <form action="#">
                                                <div class="search-option">
                                                    <input type="text" placeholder="Search...">
                                                    <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="single-right-icon">
                                         <ul class="dashboard-right-menus">
                                            <li>
                                                <a href="#0">
                                                    <i class="ti-bell"></i>
                                                    <span class="number-1">4</span>
                                                </a>
                                                <div class="notification-area">
                                                    <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                                        <span>4 New Notifications</span>
                                                        <a href="#0">Clear</a>
                                                    </div>
                                                    <ul class="notification-body">
                                                        <li>
                                                            <a href="#0">
                                                                <div class="noti-line">deposite money from Don</div>
                                                                <span class="info-n">2 Sec ago</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <div class="noti-line">deposite money from Don</div>
                                                                <span class="info-n">2 Sec ago</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <div class="noti-line">deposite money from Don</div>
                                                                <span class="info-n">2 Sec ago</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notifacation-footer text-center">
                                                        <a href="#0" class="view-all">View All</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#0" class="author">
                                                    <i class="ti-user"></i>
                                                </a>
                                                <div class="notification-area">
                                                    <div class="author-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#0"><i class="ti-user"></i>Profile</a>
                                                            </li>
                                                            <li>
                                                                <a href="#0"><i class="ti-settings"></i>Settings</a>
                                                            </li>
                                                            <li>
                                                                <a href="#0"><i class="ti-shift-right"></i>Log Out</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-card__title">Personal Details</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                    <span class="caption">Name</span>
                                    <span class="value">Joz Harison</span>
                                </li>
                                <li>
                                    <span class="caption">Date of Birth</span>
                                    <span class="value">20-05-1980</span>
                                </li>
                                <li>
                                    <span class="caption">Address</span>
                                    <span class="value">House-20, street no-10 Newyork</span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-inner_title">Account Settings</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                    <span class="caption">Language</span>
                                    <span class="value">English (United States)</span>
                                </li>
                                <li>
                                    <span class="caption">Time Zone</span>
                                    <span class="value">(GMT-06:00) Central Newyork</span>
                                </li>
                                <li>
                                    <span class="caption">Status</span>
                                    <span class="value status-active">Active</span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-inner_title">Email Addresses</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                   <span class="caption">Email</span>
                                   <span class="value">support@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-inner_title">Phone</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                    <span class="caption">Mobile</span>
                                    <span class="value">+018-786-865</span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                        <div class="user-info-inner">
                            <div class="user-info-inner_header">
                                <h3 class="user-info-inner_title">Security</h3>
                                <button type="button"><i class="ti-pencil-alt"></i> Edit</button>
                            </div>
                            <ul class="user-info-inner_list">
                                <li>
                                    <span class="caption">Password</span>
                                    <span class="value user-password">***************</span>
                                </li>
                            </ul>
                        </div>
                        <!-- user-info-card end -->
                    </div>
                </div>
            </div>
        </div>
    </main>
     <?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>