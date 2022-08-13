<?php /* Smarty version 3.1.27, created on 2022-08-07 14:26:50
         compiled from "templates/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3960239362f003ea2bb961_23048565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4238291331e09a409530e66077ce5c4a1f874a' => 
    array (
      0 => 'templates/signup.tpl',
      1 => 1659896801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3960239362f003ea2bb961_23048565',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f003ea333775_12809882',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f003ea333775_12809882')) {
function content_62f003ea333775_12809882 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3960239362f003ea2bb961_23048565';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


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
                            <div class="acc-not">have an account? <a href="login.php">Login</a></div>
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
<?php echo '<script'; ?>
 src="js/vendor/modernizr-3.5.0.min.js"><?php echo '</script'; ?>
>
<!-- jquery latest version -->
<?php echo '<script'; ?>
 src="js/vendor/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
<!-- Poper js -->
<?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
<!-- bootstrap js -->
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- plugins js -->
<?php echo '<script'; ?>
 src="js/plugins.js"><?php echo '</script'; ?>
>
<!-- main js -->
<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

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

<?php echo '</script'; ?>
>
</body>

</html><?php }
}
?>