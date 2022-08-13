<?php /* Smarty version 3.1.27, created on 2022-08-07 09:17:41
         compiled from "/home/goldainy/public_html/tmpl/login_box.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7732374162efbb75218fd2_63480779%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a9fcd0abc3cdac771f5a35c36c428e322ec1ce6' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/login_box.tpl',
      1 => 1526489450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7732374162efbb75218fd2_63480779',
  'variables' => 
  array (
    'userinfo' => 0,
    'frm' => 0,
    'ti' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62efbb75264c06_47413463',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62efbb75264c06_47413463')) {
function content_62efbb75264c06_47413463 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '7732374162efbb75218fd2_63480779';
if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>

<?php echo '<script'; ?>
 language=javascript>
function checklogin() {   
  if (document.loginform.username.value=='') {
    alert("Please enter your username!");
    document.loginform.username.focus();
    return false;
  }
  if (document.loginform.password.value=='') {
    alert("Please enter your password!");
    document.loginform.password.focus();
    return false;
  }
  return true;
}
<?php echo '</script'; ?>
>

<form method=post name=loginform onsubmit="return checklogin()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
<table cellspacing=0 cellpadding=2 border=0 width="100%">
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
 <th colspan=2 class=title>Member login</th>
 </tr>
<tr>
 <td class=menutxt>Username:</td>
 <td><input type=text name=username class=inpts size=15></td>
</tr>
<tr>
 <td class=menutxt>Password:</td>
 <td><input type=password name=password class=inpts size=15></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['login']) {?>
<tr>
 <td class=menutxt><img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></td>
 <td><input type=text name=validation_number class=inpts size=15></td>
</tr>
<?php }?>
<tr>
 <td class=menutxt>&nbsp;</td>
 <td><input type=submit value="Login" class=sbmt size=15></td>
</tr>
<tr>
 <td colspan=2 align=right><a href="<?php echo smarty_modifier_myescape(encurl("?a=forgot_password"));?>
" class=menutxt>Password recovery</a>
</table>
</form>

<?php } else { ?>

<table cellspacing=0 cellpadding=2 border=0 width="100%">
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
 <th colspan=2 class=title>Navigation</th>
</tr><tr>
 <td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("index.phtml"));?>
" class=menutxt>Home</a></td>
</tr><tr>
 <td class=menutxt><br><a href="<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
" class=menutxt>Account</a></td>
</tr>
<tr>
 <td class=menutxt><br><a href="<?php echo smarty_modifier_myescape(encurl("?a=deposit"));?>
" class=menutxt>Make Deposit</a></td>
</tr>
<tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_add_funds']) {?>
 <td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=add_funds"));?>
" class=menutxt>Make Deposit to Account</a></td>
</tr><tr>
<?php }?>
 <td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=deposit_list"));?>
" class=menutxt>Your Deposits</a></td>
</tr><tr>
 <td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=deposit_history"));?>
" class=menutxt>Deposits History</a></td>
</tr><tr>
 <td class=menutxt><br><a href="<?php echo smarty_modifier_myescape(encurl("?a=history&type=earning"));?>
" class=menutxt>Earnings History</a></td>
</tr><?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] == 1) {?><tr>
 <td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=history&type=commissions"));?>
" class=menutxt>Referrals History</a></td>
</tr><?php }?>
<tr>
 <td class=menutxt><br><a href="<?php echo smarty_modifier_myescape(encurl("?a=withdraw"));?>
" class=menutxt>Withdraw</a></td>
</tr><tr>
 <td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=withdraw_history"));?>
" class=menutxt>Withdrawals History</a></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_exchange'] == 1) {?>
<tr>
 <td class=menutxt><br><a href="<?php echo smarty_modifier_myescape(encurl("?a=exchange"));?>
" class=menutxt>Currency Exchange</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['internal_transfer_enabled']) {?>
<tr>
 <td class=menutxt><br><a href="<?php echo smarty_modifier_myescape(encurl("?a=internal_transfer"));?>
" class=menutxt>Internal Transfer</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] == 1) {?><tr>
 <td class=menutxt><br><a href="<?php echo smarty_modifier_myescape(encurl("?a=referals"));?>
" class=menutxt>Your Referrals</a></td>
</tr><tr>
 <td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=referallinks"));?>
" class=menutxt>Referral Links</a></td>
</tr><?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['tell_friend_page']) {?>
<tr>
 <td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=tell_friend"));?>
" class=menutxt>Tell a friend</a></td>
</tr>
<?php }?>
<tr>
 <td class=menutxt><br><a href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
" class=menutxt>Edit Account</a></td>
</tr><tr>
 <td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=security"));?>
" class=menutxt>Security</a></td>
</tr><tr>


 <td class=menutxt><br><a href="<?php echo smarty_modifier_myescape(encurl("?a=logout"));?>
" class=menutxt>Logout</a></td>
</tr>
</table>


<?php }
}
}
?>