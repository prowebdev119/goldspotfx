<?php /* Smarty version 3.1.27, created on 2022-08-12 08:03:26
         compiled from "/home/goldainy/public_html/tmpl/security.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:34384931062f6418e94d9c2_61390553%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a7afc77c3e12d78d6c2398f0d6af1df9031abf7' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/security.tpl',
      1 => 1660045179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34384931062f6418e94d9c2_61390553',
  'variables' => 
  array (
    'security' => 0,
    'settings' => 0,
    'errors' => 0,
    'tfa_enabled' => 0,
    'tfa_settings' => 0,
    'tfa_secret' => 0,
    'tfa_secret_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f6418e9ba9d1_81345084',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f6418e9ba9d1_81345084')) {
function content_62f6418e9ba9d1_81345084 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '34384931062f6418e94d9c2_61390553';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Security Settings</h2>
                            </div>
                        </div>
<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>




        



<form method=post>
<input type=hidden name=a value="security">
<input type=hidden name=action value="save">
<div class="form-group">
           
<div class="box-account-table">
            <table class="table table-list">
                <thead>
                <tr>
                    <th colspan="2"><i class="icon-params"></i> Detect IP Address Change Sensitivity
                    </th>
                </tr>
                </thead>
                <tbody>

<tr>

<td><input type=radio name=ip value=disabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'disabled') {?>checked<?php }?> style="cursor: pointer;"> Disabled<br>
<input type=radio name=ip value=medium  <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'medium') {?>checked<?php }?> style="cursor: pointer;"> Medium<br>
<input type=radio name=ip value=high <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'high') {?>checked<?php }?> style="cursor: pointer;"> High<br>
<input type=radio name=ip value=always <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'always') {?>checked<?php }?>  style="cursor: pointer;"> Paranoic<br><br></td>
</tbody>

<thead>
                <tr>
                    <th colspan="2"><i class="icon-params"></i> Detect Browser Change
                    </th>
                </tr>
                </thead>
<tbody>

<tr>

<td><input type=radio name=browser value=disabled  <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'disabled') {?>checked<?php }?> style="cursor: pointer;"> Disabled<br>
<input type=radio name=browser value=enabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'enabled') {?>checked<?php }?> style="cursor: pointer;"> Enabled<br><br></td>
</tr>
<tr>
<td><div class="form-group text-center">
<button type="submit">Set</button>
                   
                </div></td>

</tr>
</tbody></table>

</form>

 
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_tfa']) {?>
<h3>Two Factor Authentication</h3>
<form method=post name=mainform>
<input type=hidden name=a value="security">
<input type=hidden name=action value="tfa_save">
<input type=hidden name=time>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
<b style=color:red>Invalid code.</b><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_secret']) {?>
<b style=color:red>Invalid Secret.</b><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tfa_enabled']->value) {?>
<input type="checkbox" name="tfa_on_login" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['login']) {?>checked<?php }?>> on Login<br>
<input type="checkbox" name="tfa_on_edit_account" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['edit_account']) {?>checked<?php }?>> on Edit Account<br>
<input type="checkbox" name="tfa_on_withdraw" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['withdraw']) {?>checked<?php }?>> on Withdraw<br>
<input type="checkbox" name="tfa_disable" value=1> <b style=color:red>Disable Two Factor Authentication (not recommended)</b><br>
<br>
Confirm by typing code: <input type=text name="code" class=inpts> <input type=submit value="Update" class=sbmt>
<?php } else { ?>
1. Install <a href="http://m.google.com/authenticator" targe=_blank>Google Authenticator</a> on your mobile device.<br>
2. Your Secret Code is: <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
</b> <input type=hidden name="tfa_secret" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
"><br>
<img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret_url']->value);?>
"><br>
3. Please enter two factor token from Google Authenticator to verify correct setup:<br> 
<input type=text name="code" class=inpts> <input type=submit value="Enable" class=sbmt>
<?php }?>
</form>



<?php echo '<script'; ?>
 language=javascript>
document.mainform.time.value = (new Date()).getTime();

function checkform() {
  if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
    alert("Please type code!");
    document.mainform.code.focus();
    return false;
  }
  return true;
}
<?php echo '</script'; ?>
>

<?php }?> 


</div>
        </div>
        </div>
        </div>
    <?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>