<?php /* Smarty version 3.1.27, created on 2022-08-12 08:04:27
         compiled from "/home/goldainy/public_html/tmpl/support.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:70352286062f641cb930516_67792426%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e25b7f51d74cdc3167f21698525aff5d5a749ddc' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/support.tpl',
      1 => 1660071810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70352286062f641cb930516_67792426',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f641cb979de6_78054626',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f641cb979de6_78054626')) {
function content_62f641cb979de6_78054626 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '70352286062f641cb930516_67792426';
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
                        <span>[  Contact Us  ]</b></span>
                    </div>
                    <div class="main-page-content">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-6">
                                    <div class="clearfix"></div>
                                    <br/>
                                    <ul class="list list-inline">

                                        <li class="even">
                                            <i class="icon icon-mail"></i>
                                            <b><span>E-mail</span></b>
                                            <p>
                                                <a href="">support@<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box form-box-right">


                                        <?php echo '<script'; ?>
 language=javascript>

                                            function checkform() {
                                                if (document.mainform.name.value == '') {
                                                    alert("Please type your full name!");
                                                    document.mainform.name.focus();
                                                    return false;
                                                }
                                                if (document.mainform.email.value == '') {
                                                    alert("Please enter your e-mail address!");
                                                    document.mainform.email.focus();
                                                    return false;
                                                }
                                                if (document.mainform.message.value == '') {
                                                    alert("Please type your message!");
                                                    document.mainform.message.focus();
                                                    return false;
                                                }
                                                return true;
                                            }

                                        <?php echo '</script'; ?>
>

                                        <form method=post name=mainform onsubmit="return checkform()">
                                            <input type=hidden name=a value=support>
                                            <input type=hidden name=action value=send>

                                            <div class="form-group">
                                                <label>Your Name:</label>
                                                <input type="text" name="name" value="" size=30 class=form-control>
                                            </div>
                                            <div class="form-group">
                                                <label>Your Email:</label>
                                                <input type="text" name="email" value="" size=30 class=form-control>
                                            </div>
                                            <div class="devider"></div>
                                            <div class="form-group">
                                                <label>Message:</label>
                                                <textarea name=message class=form-control cols=45 rows=4></textarea>
                                            </div>

                                            <div class="devider"></div>
                                            <div class="form-group text-left">
                                                <button type="submit">Send</button>
                                            </div>
                                        </form>
                                    </div>
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