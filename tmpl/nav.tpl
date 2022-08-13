<div class="header-under">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="header-lang">
                    <li><a class="active"><img src="template/images/flags/en.png" alt=""> En</a></li>

                </ul>

                {if $userinfo.logged != 1}
                    <a href="?a=login" class='header-link'>Login to account</a>
                {else}
                    <a href="?a=logout" class='header-link'>Logout from Account</a>
                {/if}
            </div>
        </div>
    </div>
</div>
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo" style="margin-left: 40px;">
                    <a href="index.phtml">
                        <img src="img/logo/logo2.png" alt="" style="width: 250px;margin-right: 100px;" class="">
                    </a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="header-menu">


                    <ul>
                        <li><a href="index.phtml"><span>Home</span></a></li>
                        <li><a href="?a=cust&page=getstarted"><span>Get Started</span></a></li>
                        <li><a href="about.php"><span>About Us</span></a></li>
                        <li><a href="faq.php"><span>FAQ</span></a></li>
                        <li><a href="?a=support"><span>Contact Us</span></a></li>
                        {if $userinfo.logged != 1}
                            <li class='reg-btn'><a href="?a=signup"><span><i></i>Register</span></a></li>
                        {else}
                            <li class='reg-btn'><a href="?a=account"><span><i></i>Dashboard</span></a></li>
                        {/if}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>