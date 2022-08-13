<?php /* Smarty version 3.1.27, created on 2022-08-12 08:04:25
         compiled from "/home/goldainy/public_html/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:183152193962f641c9700bc2_96566104%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab65ff5e54d6400b0f81737851f75027811aafca' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/login.tpl',
      1 => 1660133079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183152193962f641c9700bc2_96566104',
  'variables' => 
  array (
    'frm' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f641c976f299_16838245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f641c976f299_16838245')) {
function content_62f641c976f299_16838245 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '183152193962f641c9700bc2_96566104';
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
                        <span>[  Account Login  ]</b></span>
                    </div>
                    <div class="main-page-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-7">
                                    <div class="form-box">
                                        
                                        <?php echo '<script'; ?>
 language=javascript>
                                            function checkform() {
                                                if (document.mainform.username.value == '') {
                                                    alert("Please type your username!");
                                                    document.mainform.username.focus();
                                                    return false;
                                                }
                                                if (document.mainform.password.value == '') {
                                                    alert("Please type your password!");
                                                    document.mainform.password.focus();
                                                    return false;
                                                }
                                                return true;
                                            }
                                        <?php echo '</script'; ?>
>
                                        

                                        <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'invalid_login') {?>
                                            <h3>Login error:</h3>
                                            <br>
                                            <br>
                                            Your login or password or turing image code is wrong. Please check this information.
                                        <?php }?>

                                        <form method=post name=mainform onsubmit="return checkform()">
                                            <input type=hidden name=a value='do_login'>
                                            <input type=hidden name=follow value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
                                            <input type=hidden name=follow_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'>

                                            <div ng-cloak ng-show="!form.verification">
                                                <div class="form-group">
                                                    <label>Username:</label>
                                                    <input type=text name=username value='<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
' class="form-control inpts" size=30
                                                           autofocus="autofocus">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password:</label>
                                                    <input type=password name=password value='' class="form-control inpts" size=30>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['login']) {?>
                                                    <div class="form-group">
                                                        <img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
">
                                                        <input type=text name=validation_number class=form-control size=30>
                                                    </div>
                                                <?php }?>
                                            </div>

                                            <div class="devider" style="margin-top: 34px;"></div>
                                            <div class="form-group text-right">
                                                <a href="index.php?a=forgot_password" class='forgot-link'>Can't access
                                                    account?</a>&nbsp;&nbsp;&nbsp;
                                                <button type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <ul class='form-list'>
                                        <li style="margin-top: 42px;">
                                            <i class='icon-user'></i>
                                            <p>
                                                Goldspotfx is available only to the members of the site. You agree
                                                to be of legal age in your country to join this site and in all the
                                                cases your minimum age must be 18 years. Every deposit is considered to
                                                be a private transaction between Goldspotfx and its member.
                                            </p>
                                        </li>
                                        <li style="margin-top: 65px;" class="even">
                                            <i class='icon-key'></i>
                                            <p>
                                                We use dedicated servers, secured with antivirus and anti-malware
                                                program. Confidential information in our website is encrypted. Our site
                                                is within a DDOS protected server to make sure it loads fast , we always
                                                stay online & your data is safe with us.
                                            </p>
                                        </li>


                                    </ul>
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
?>
 <?php }
}
?>