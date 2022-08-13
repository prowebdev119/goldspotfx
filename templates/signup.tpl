{include file="common/header.tpl"}

<body>
<!-- preloader  -->
<div id="preloader"></div>
<!-- Start Slider Area -->
<div class="login-area area-padding fix">
    <div class="login-overlay"></div>
    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="login-form signup-form">
                    <h4 class="login-title text-center">REGISTER</h4>
                    <form method=post onsubmit="return checkform()" name="regform" action="index.php">
                        <input type="hidden" name="form_id" value="16598967983729">
                        <input type="hidden" name="form_token" value="99086daf5b3ffb8613e59ad978579bf6">
                        <input type=hidden name=a value="signup">
                        <input type=hidden name=action value="signup">
                        <input type="text" name="fullname" class="form-control" placeholder="Full name" required
                               data-error="Please enter your full name">
                        <input type="text" name="username" class="form-control" placeholder="Username" required
                               data-error="Please enter your user name">
                        <input type="password" name="password" class="form-control" placeholder="Password" required
                               data-error="Please enter your password">
                        <input type="password" name="password2" class="form-control" placeholder="Confirm Password"
                               required data-error="Please enter your password again">
                        <input type="email" name="email" class="form-control" placeholder="Your Email" required
                               data-error="Please enter your email">
                        <input type="email" name="email1" class="form-control" placeholder="Retype Email" required
                               data-error="Please enter your email again">
                        <input type="text" name="sq" class="form-control" placeholder="Secret Question" required
                               data-error="Please enter your secret question">
                        <input type="text" name="sa" class="form-control" placeholder="Secret Answer" required
                               data-error="Please enter your secret answer">
                        <div class="check-group">
                            <div class="checkbox">
                                <label><input type="checkbox" name=agree value="1">Terms & Conditions</label>
                            </div>
                        </div>
                        <button type="submit" id="submit" class="slide-btn login-btn">Sign up</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <div class="clear"></div>
                        <div class="separetor text-center"><span>Or with Signup</span></div>
                        <div class="sign-icon">
                            <ul>
                                <li><a class="facebook" href="#"><i class="ti-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="ti-twitter"></i></a></li>
                                <li><a class="instagram" href="#"><i class="ti-instagram"></i></a></li>
                                <li><a class="google" href="#"><i class="ti-google"></i></a></li>
                            </ul>
                            <div class="acc-not">have an account? <a href="index.php?a=login">Login</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->

<!-- All JS here -->

<!-- modernizr JS -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- Poper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
<script type="text/javascript">
{literal}
function checkform() {
    if (document.regform.fullname.value == '') {
        alert("Please enter your full name!");
        document.regform.fullname.focus();
        return false;
    }

    if (document.regform.username.value == '') {
        alert("Please enter your username!");
        document.regform.username.focus();
        return false;
    }

    if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
        alert("For username you should use English letters and digits only!");
        document.regform.username.focus();
        return false;
    }

    if (document.regform.password.value == '') {
        alert("Please enter your password!");
        document.regform.password.focus();
        return false;
    }

    if (document.regform.password.value != document.regform.password2.value) {
        alert("Please check your password!");
        document.regform.password2.focus();
        return false;
    }

    if (document.regform.email.value == '') {
        alert("Please enter your e-mail address!");
        document.regform.email.focus();
        return false;
    }

    if (document.regform.email.value != document.regform.email1.value) {
        alert("Please retype your e-mail!");
        document.regform.email.focus();
        return false;
    }

    if (document.regform.agree.checked == false) {
        alert("You have to agree with the Terms and Conditions!");
        return false;
    }


    return true;
}
{/literal}
</script>
</body>

</html>