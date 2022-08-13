<?php /* Smarty version 3.1.27, created on 2022-08-12 07:39:04
         compiled from "/home/goldainy/public_html/tmpl/forgot_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3553516262f63bd8cb68b0_83194002%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '730fc9b7007cc5b1391123f5f4090392429bd9d1' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/forgot_password.tpl',
      1 => 1660045179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3553516262f63bd8cb68b0_83194002',
  'variables' => 
  array (
    'found_records' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f63bd8cfd579_88232533',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f63bd8cfd579_88232533')) {
function content_62f63bd8cfd579_88232533 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3553516262f63bd8cb68b0_83194002';
echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



 <section class="main-page">
        <div class="main-page-img"></div>
        <div class="main-inset">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i></i>
                            <span>[  Account Recovery  ]</b></span>
                        </div>
                        <div class="main-page-content">
                            <div class="row">
                                <div class="col-md-12">
<div class="row">
    <div class="col-md-6" style="margin-left: 293px;">




<?php echo '<script'; ?>
 language=javascript>
function checkform() {
  if (document.forgotform.email.value == '') {
    alert("Please type your username or email!");
    document.forgotform.email.focus();
    return false;
  }
  return true;
}
<?php echo '</script'; ?>
>

 


<h2>Forgot your password:</h2><br>



<?php if ($_smarty_tpl->tpl_vars['found_records']->value == 2) {?>
Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.
<br><br>
<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['found_records']->value == 0) {?>
No accounts found for provided info.
<br><br>
<?php } elseif ($_smarty_tpl->tpl_vars['found_records']->value == 1) {?>
Request was confirmed. Login and password was sent to your email address.
<br><br>
<?php }?>


<form method=post name=forgotform onsubmit="return checkform();">
<input type=hidden name=a value="forgot_password">
<input type=hidden name=action value="forgot_password">
<div class="form-group">
 
 <input type=text name='email' value="" placeholder="Your Email or Username"class=form-control size=15>
</div>
<center><div class="form-group">
                    <button type="submit" class="button">Reset</button>
                </div></center>
 
</form><br><br>
<?php }?>
</div>
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>