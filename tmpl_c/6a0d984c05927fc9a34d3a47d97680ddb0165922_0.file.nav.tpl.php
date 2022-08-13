<?php /* Smarty version 3.1.27, created on 2022-08-12 08:04:27
         compiled from "/home/goldainy/public_html/tmpl/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:172013597262f641cb98cd88_06313084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a0d984c05927fc9a34d3a47d97680ddb0165922' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/nav.tpl',
      1 => 1660145497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172013597262f641cb98cd88_06313084',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f641cb99b9b4_51819265',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f641cb99b9b4_51819265')) {
function content_62f641cb99b9b4_51819265 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '172013597262f641cb98cd88_06313084';
?>
<div class="header-under">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="header-lang">
                    <li><a class="active"><img src="template/images/flags/en.png" alt=""> En</a></li>

                </ul>

                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
                    <a href="?a=login" class='header-link'>Login to account</a>
                <?php } else { ?>
                    <a href="?a=logout" class='header-link'>Logout from Account</a>
                <?php }?>
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
                        <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
                            <li class='reg-btn'><a href="?a=signup"><span><i></i>Register</span></a></li>
                        <?php } else { ?>
                            <li class='reg-btn'><a href="?a=account"><span><i></i>Dashboard</span></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
?>