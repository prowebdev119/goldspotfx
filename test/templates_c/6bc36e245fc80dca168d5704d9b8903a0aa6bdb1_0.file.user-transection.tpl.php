<?php /* Smarty version 3.1.27, created on 2022-08-09 08:19:10
         compiled from "templates/user-transection.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:50722054962f250be023ec6_65587177%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bc36e245fc80dca168d5704d9b8903a0aa6bdb1' => 
    array (
      0 => 'templates/user-transection.tpl',
      1 => 1660045883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50722054962f250be023ec6_65587177',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f250be049ad0_38064469',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f250be049ad0_38064469')) {
function content_62f250be049ad0_38064469 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '50722054962f250be023ec6_65587177';
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
                            <h2>Transection</h2>
                            <div class="bread-come">
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb purple lighten-4">
                                        <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i class="ti-angle-right"
                                            aria-hidden="true"></i></li>
                                        <li class="breadcrumb-items"><a class="black-text" href="#">Transection</a></li>
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
                                        <li  class="active"><a href="user-transection.php"><i class="ti-layout-list-thumb"></i>Transaction</a></li>
                                        <li><a href="user-notifecations.php"><i class="ti-bell"></i>Notifications</a></li>
                                        <li><a href="user-info.php"><i class="ti-settings"></i>Settings</a></li>
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
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="send-money-form transection-log">
                                    <div class="form-text">
                                        <h4 class="form-top">Transaction Log</h4>
                                        <div class="form-inner table-inner">
                                            <table>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Transaction ID</th>
                                                    <th>Amount</th>
                                                    <th>Details</th>
                                                </tr>
                                                <tr>
                                                    <td>10/03/2021</td>
                                                    <td>XE2GB4DF5X</td>
                                                    <td>$600</td>
                                                    <td>Payment recieve from Don</td>
                                                </tr>
                                                <tr>
                                                    <td>10/03/2021</td>
                                                    <td>XE2GB4DF5X</td>
                                                    <td>$600</td>
                                                    <td>Payment recieve from Don</td>
                                                </tr>
                                                <tr>
                                                    <td>10/03/2021</td>
                                                    <td>XE2GB4DF5X</td>
                                                    <td>$600</td>
                                                    <td>Payment recieve from Don</td>
                                                </tr>
                                                <tr>
                                                    <td>10/03/2021</td>
                                                    <td>XE2GB4DF5X</td>
                                                    <td>$600</td>
                                                    <td>Payment recieve from Don</td>
                                                </tr>
                                                <tr>
                                                    <td>10/03/2021</td>
                                                    <td>XE2GB4DF5X</td>
                                                    <td>$600</td>
                                                    <td>Payment recieve from Don</td>
                                                </tr>
                                                <tr>
                                                    <td>10/03/2021</td>
                                                    <td>XE2GB4DF5X</td>
                                                    <td>$600</td>
                                                    <td>Payment recieve from Don</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>