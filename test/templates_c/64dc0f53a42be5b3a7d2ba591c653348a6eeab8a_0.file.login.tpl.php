<?php /* Smarty version 3.1.27, created on 2022-08-07 10:12:13
         compiled from "templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:209477076662ef73dd6cb1e7_17972733%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1659859912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209477076662ef73dd6cb1e7_17972733',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62ef73dd6e9020_20300836',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62ef73dd6e9020_20300836')) {
function content_62ef73dd6e9020_20300836 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '209477076662ef73dd6cb1e7_17972733';
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
                    <div class="login-form">
                        <h4 class="login-title text-center">Login</h4>
                        <form id="contactForm" method="POST" action="contact.php" class="log-form">
                            <input type="text" id="name" class="form-control" placeholder="Username" required data-error="Please enter your name">
                            <input type="password" id="msg_subject" class="form-control" placeholder="Password" required data-error="Please enter your message subject">
                            <div class="check-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Remember me</label>
                                </div>
                                <a class="text-muted" href="#">Forgot password?</a>
                            </div>
                            <button type="submit" id="submit" class="slide-btn login-btn">Login</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                            <div class="clearfix"></div>
                            <div class="clear"></div>
                            <div class="separetor text-center"><span>Or with Login</span></div>
                            <div class="sign-icon">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a class="google" href="#"><i class="ti-google"></i></a></li>
                                </ul>
                                <div class="acc-not">have an account?  <a href="signup.php">Signup</a></div>
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
</body>

</html><?php }
}
?>