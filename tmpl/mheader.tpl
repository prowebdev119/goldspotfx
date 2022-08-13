<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet"

    <meta charset="UTF-8">

    <link rel="icon" href="template/images/favicon.png" type="image/png"/>
    <title>{$settings.site_name}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="template/css/slick.css" rel="stylesheet">
    <link href="template/css/fontello.css" rel="stylesheet" type="text/css"/>
    <link href="template/css/calc.css" rel="stylesheet" type="text/css"/>
    <link href="template/css/slick-theme.css" rel="stylesheet">
    <link href="template/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="template/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="template/js/jquery.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <script src="template/js/jquery-ui.min.js"></script>
    <script src="template/js/waypoints.min.js"></script>
    <script src="template/js/jquery.easypiechart.min.js"></script>
    <script src="template/js/slick.min.js"></script>
    <script src="template/js/scripts.js"></script>
    <script src="template/js/calculator.js"></script>
    <script src="template/js/time.js"></script>
    <script src="template/js/rate.js"></script>
    <link href="template/css/account.css" rel="stylesheet" type="text/css"/>
    <script src="template/js/account.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- To disable right click option for the entire site -->
    {literal}
        <script type="text/javascript">
            document.ondragstart = function () {
                return false
            }; //for image
            document.oncontextmenu = function (e) {
                return false
            }; //for right click disable
            document.onkeydown = function (e) {
                if (e.ctrlKey &&
                    (e.keyCode === 65 ||
                        e.keyCode === 67 ||
                        e.keyCode === 73 ||
                        e.keyCode === 74 ||
                        e.keyCode === 80 ||
                        e.keyCode === 83 ||
                        e.keyCode === 85 ||
                        e.keyCode === 86 ||
                        e.keyCode === 117
                    )) {
                    return false;
                }
                if (e.keyCode == 18 || e.keyCode == 123) {
                    return false
                }
            };

        </script>
    {/literal}


    <!--To disable right click option for the entire site: ends here-->
</head>

<body ng-app='dqsApp'>

<div id="wrapper" class='wrapper-account'>
    <div class="grid_green50"></div>
    <div class="account-left-panel">
        <div class="top">
            <div class="logo">
                <a href="index.phtml">
                    <img src="img/logo/logo2.png" alt="" style="width: 165px;margin-top: -33px;margin-left: 3px;">
                </a>
            </div>
        </div>
        <div class="account-menu">
            <ul>
                <li><a href="?a=account"><i class='icon-user'></i><span> User <br/>Dashboard</span></a></li>
                <li><a href="?a=deposit"><i class='icon-note'></i><span> New <br/>Deposit</span></a></li>
                <li><a href="?a=deposit_list"><i class='icon-inbox'></i><span> Deposit<br/> list</span></a></li>
                <li><a href="?a=withdraw"><i class='icon-money'></i><span> Withdraw<br/> funds</span></a></li>
                <li><a href="?a=withdraw_history"><i
                                class='icon-lightbulb'></i><span> Withdrawal<br/> History</span></a></li>
                <li><a href="?a=earnings"><i class='icon-clock'></i><span> Transactions<br/> History</span></a></li>
                <li><a href="?a=edit_account"><i class='icon-cog'></i><span> Edit <br/>Profile</span></a></li>
                <li><a href="?a=security"><i class='icon-lock'></i><span> Security <br/>settings</span></a></li>
                <li><a href="?a=referals"><i class='icon-globe'></i><span> Referral <br/>system</span></a></li>
                <li><a href="?a=logout"><i class='fa fa-power-off'></i><span> Logout</a></li>
            </ul>


        </div>
    </div>
    <section class="header header-account">
        <div class="header-acc-line">
            <div class="container">

                <div class="col-md-9">
                </div>
            </div>
        </div>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-menu">
                            <ul>
                                <li><a href="index.phtml"><span>Home</span></a></li>
                                <li><a href="?a=page&id=getstarted"><span>Get Started</span></a></li>
                                <li><a href="?a=page&id=about"><span>About Us</span></a></li>
                                <li><a href="?a=page&id=partners"><span>For Partners</span></a></li>
                                <li><a href="faq.php"><span>FAQ</span></a></li>
                                <li><a href="?a=support"><span>Contact Us</span></a></li>
                            </ul>
                        </div>
                        <div class="account-user">
                            <center>
							<span class="avatar">
								<a href="?a=logout" class="logout"><i class="fa fa-power-off"
                                                                      aria-hidden="true"></i></a>
								<img src="template/images/user.png" alt="">
							</span>
                            </center>
                            <span class='username'>Welcome <b style="color: #f2529a;">{$userinfo.username}</b></span>


                            <div>
                                <ul>
                                    <li><b>{$currency_sign}{$ab_formated.earning}<small>USD</small></b><span>Total Earning</span>
                                    </li>
                                    <li><b>{$currency_sign}{$ab_formated.active_deposit}<small>USD</small></b><span>Active Deposit</span>
                                    </li>
                                </ul>
                                <div class="button-nav">
                                    <a href="?a=deposit">New Deposit</a>
                                    <a href="?a=withdraw">Withdraw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-account-out">
        <div class="main-account">
            <div>
                <div class="container">