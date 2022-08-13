<?php /* Smarty version 3.1.27, created on 2022-08-10 16:47:07
         compiled from "my:security" */ ?>
<?php
/*%%SmartyHeaderCode:146939473362f4194ba6f815_08929990%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3d20f289b0ccb51b335a89fa831634d79a918b4' => 
    array (
      0 => 'my:security',
      1 => 1660164427,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '146939473362f4194ba6f815_08929990',
  'variables' => 
  array (
    'frm' => 0,
    'dirs' => 0,
    'd' => 0,
    'acsent_settings' => 0,
    'fchk' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f4194babb582_94755902',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f4194babb582_94755902')) {
function content_62f4194babb582_94755902 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '146939473362f4194ba6f815_08929990';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Security</h3> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "invalid_passphrase") {?> <div class="alert alert-danger">Invalid Alternative Passphrase. No data has been updated.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "done") {?> <div class="alert alert-danger">Security settings has been updated.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['dirs']->value) {?> <div class="alert alert-danger"> <b>Security Warning:</b><br><br> Please upload the .htaccess file to the following folders:<br> <?php
$_from = $_smarty_tpl->tpl_vars['dirs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value, ENT_QUOTES, 'UTF-8', true);?>
</li><?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?> You can find the .htaccess files in the latest archive with the hyip manager script. </div> <?php }?> <h3>Advanced login security settings:</h3> <form method=post> <input type=hidden name=a value="security"> <input type=hidden name=action value="change_login_security"> <table class=form> <tr> <th>Detect IP Address Change Sensitivity:</th> <td> <input type=radio name=ip value=disabled <?php if ($_smarty_tpl->tpl_vars['acsent_settings']->value['detect_ip'] == "disabled") {?>checked<?php }?>>Disabled<br> <input type=radio name=ip value=medium <?php if ($_smarty_tpl->tpl_vars['acsent_settings']->value['detect_ip'] == "medium") {?>checked<?php }?>>Medium<br> <input type=radio name=ip value=high <?php if ($_smarty_tpl->tpl_vars['acsent_settings']->value['detect_ip'] == "high") {?>checked<?php }?>>High<br> <input type=radio name=ip value=always <?php if ($_smarty_tpl->tpl_vars['acsent_settings']->value['detect_ip'] == "always") {?>checked<?php }?>>Paranoic<br> </td> </tr> <tr> <th>Detect Browser Change:</th> <td> <input type=radio name=browser value=disabled <?php if ($_smarty_tpl->tpl_vars['acsent_settings']->value['detect_browser'] == "disabled") {?>checked<?php }?>>Disabled<br> <input type=radio name=browser value=enabled <?php if ($_smarty_tpl->tpl_vars['acsent_settings']->value['detect_browser'] == "enabled") {?>checked<?php }?>>Enabled<br> </td> </tr> <tr> <th>E-mail:</th> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['acsent_settings']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> </tr> <tr> <th></th> <td><input type=submit value="Set" class=sbmt></td> </tr> </table> </form> <h3>Monitor your template files:</h3> <div class="alert alert-info"> This function will monitor template files and once it changed, admin will receive e-mail about changes. It will protect your website against unauthorized changes of your template files. Note: files are checking once in minute if one user is browsing your website atleast. </div> <br> <?php if ($_smarty_tpl->tpl_vars['fchk']->value['enabled'] == 0) {?> <table class=form> <tr> <th>Status</th> <td><span class="badge sticker badge-danger">Off</span> <a href="?a=security&action=monitor_files&status=1" class="sbmt btn btn-info">Turn on</a> </td> </tr> </table> <?php } else { ?> <table class=form> <tr> <th>Status</th> <td><span class="badge sticker badge-success">On</span> <a href="?a=security&action=monitor_files&status=0&k=<?php echo $_smarty_tpl->tpl_vars['fchk']->value['update_key'];?>
" class="sbmt btn btn-danger">Turn Off</a> </td> </tr> <tr> <th>Start Date</th> <td><?php echo $_smarty_tpl->tpl_vars['fchk']->value['start_date'];?>
</td> </tr> <tr> <th>Files Monitored</th> <td><?php echo intval($_smarty_tpl->tpl_vars['fchk']->value['nfiles']);?>
</td> </tr> <tr> <th style="vertical-align:top">Last Updated Files:</th> <td> <?php
$_from = $_smarty_tpl->tpl_vars['fchk']->value['files'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['filename'], ENT_QUOTES, 'UTF-8', true);?>
 <small><?php echo $_smarty_tpl->tpl_vars['f']->value['date'];?>
</small><br> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> </td> </tr> </table> <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>