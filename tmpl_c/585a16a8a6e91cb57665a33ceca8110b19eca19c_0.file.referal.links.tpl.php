<?php /* Smarty version 3.1.27, created on 2022-08-10 08:13:25
         compiled from "/home/goldainy/public_html/tmpl/referal.links.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1951360662f3a0e53e4bd2_95891003%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '585a16a8a6e91cb57665a33ceca8110b19eca19c' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/referal.links.tpl',
      1 => 1660045179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1951360662f3a0e53e4bd2_95891003',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3a0e540cc13_04169293',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3a0e540cc13_04169293')) {
function content_62f3a0e540cc13_04169293 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1951360662f3a0e53e4bd2_95891003';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Referral Links</h2>
                            </div>
                        </div>
<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>



<img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/images/728x90.gif" width="728" height="90"/> <br />

<b>HTML Embed Code (728x90)</b> <br />
<textarea class="form-control"  style="width: 700px;font-size: 9pt;overflow: hidden" readonly rows="4">
 <a target="_blank" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
"><img
             src="https:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/images/728x90.gif" width="728"
             height="90"/></a>
            </textarea>
<br/><br /><br />


<img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/images/468x60.gif" width="468" height="60"/> <br />

        <b>HTML Embed Code (468x60)</b> <br />
        <textarea class="form-control"  style="width: 700px;font-size: 9pt;overflow: hidden" readonly rows="4">
   <a target="_blank" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
"><img
               src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/images/468x60.gif" width="468"
               height="60"/></a>


                </textarea>
        <br/><br /><br />
    



<img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/images/125x125.gif" width="125" height="125"/> <br />

        <b>HTML Embed Code (125x125)</b> <br />
        <textarea class="form-control"  style="width: 700px;font-size: 9pt;overflow: hidden" readonly rows="4"><a target="_blank"
               href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
"><img
                        src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/images/125x125.gif" width="125"
                        height="125"/></a>
                </textarea>
        <br/><br /><br />
    





</div>
        </div>
       <?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>