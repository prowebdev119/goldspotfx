<?php /* Smarty version 3.1.27, created on 2022-08-12 08:03:25
         compiled from "/home/goldainy/public_html/tmpl/edit_account.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:190223966362f6418d08a139_52876631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc359e1bd6a8720f6e4fc886601bb1f683db0394' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/edit_account.tpl',
      1 => 1660048403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190223966362f6418d08a139_52876631',
  'variables' => 
  array (
    'settings' => 0,
    'frm' => 0,
    'errors' => 0,
    'userinfo' => 0,
    'countries' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f6418d19e223_60668816',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f6418d19e223_60668816')) {
function content_62f6418d19e223_60668816 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '190223966362f6418d08a139_52876631';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Account Setting</h2>
                            </div>
                        </div>
<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>



<?php echo '<script'; ?>
 language=javascript>
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
}

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>

  if (document.editform.address.value == '') {
    alert("Please enter your address!");
    document.editform.address.focus();
    return false;
  }
  if (document.editform.city.value == '') {
    alert("Please enter your city!");
    document.editform.city.focus();
    return false;
  }
  if (document.editform.state.value == '') {
    alert("Please enter your state!");
    document.editform.state.focus();
    return false;
  }
  if (document.editform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.editform.zip.focus();
    return false;
  }
  if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.editform.country.focus();
    return false;
  }

<?php }?>

  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>

  if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.editform.transaction_code2.focus();
    return false;
  }

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail'] == 1) {?>

  if (document.editform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.editform.email.focus();
    return false;
  }

<?php }?>

  return true;
}
<?php echo '</script'; ?>
>

 
<form action="index.php" method=post onsubmit="return checkform()" name=editform>
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'changed') {?>
Your account data has been updated successfully.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<ul style="color:red">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'full_name') {?>
<li>Please enter your Full Name!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'address') {?>
<li>Please enter your address!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'city') {?>
<li>Please enter your city!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'state') {?>
<li>Please enter your state!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'zip') {?>
<li>Please enter your zip!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'country') {?>
<li>Please choose your country!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username') {?>
<li>Please enter your username!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?>
    <li>Please enter a password!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?> 
    <li>Please check your password!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
<li>Password is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 chars!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?>
    <li>Please enter the Transaction Code! <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?> 
    <li>Please check your Transaction Code!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
<li>Transaction Code is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 chars!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'wrong_current_password') {?>
<li>You entered wrong current password
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?>
    <li>Transaction Code should be different then the Password! <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_transaction_code') {?> 
    <li>You have provided invalid Current Transaction Code!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?>
<li>Please enter your e-mail!
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
<li>Enter the verification code as it is shown in the corresponding box.
<?php }?> 
<br>
<?php endfor; endif; ?>
</ul>
<?php }?>
<table class="table table-opers" width="100%">
<tr>
 <td>Account Name:</td>
 <td><input type=text name=fullname value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
' disabled class=form-control size=30>
 </td>
</tr><tr>
 <td>Registration date:</td>
 <td><input type=text name=fullname value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['date_register']);?>
' disabled class=form-control size=30>
 
 </td>
</tr><tr>
 <td>Your Full Name:</td>
 <td><input type=text name=fullname value='<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['name']));?>
' class=form-control size=30>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']) {?>
<tr>
 <td>Your Address:</td>
 <td><input type=text name=address value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['address']));?>
" class=form-control size=30></td>
</tr>
<tr>
 <td>Your City:</td>
 <td><input type=text name=city value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['city']));?>
" class=form-control size=30></td>
</tr>
<tr>
 <td>Your State:</td>
 <td><input type=text name=state value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['state']));?>
" class=form-control size=30></td>
</tr>
<tr>
 <td>Your Zip:</td>
 <td><input type=text name=zip value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['zip']));?>
" class=form-control size=30></td>
</tr>
<tr>
 <td>Your Country:</td>
 <td>
  <select name='country' class=form-control>
<option value=''>--SELECT--</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['countries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
<option <?php if ($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name'] == $_smarty_tpl->tpl_vars['userinfo']->value['country']) {?>selected<?php }?>><?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']));?>
</option>
<?php endfor; endif; ?>
  </td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['license'] == '4ZQQN55VA2NXBVFUQJE6') {?>
<tr>
 <td>Current Password:</td>
 <td><input type=password name=current_password value="" class=form-control size=30></td>
</tr>
<?php }?>
<tr>
 <td>New Password:</td>
 <td><input type=password name=password value="" class=form-control size=30></td>
</tr><tr>
 <td>Retype Password:</td>
 <td><input type=password name=password2 value="" class=form-control size=30></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
  <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] != 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['transaction_code'] != '') {?>
    <tr>
     <td>Current Transaction Code:</td>
     <td><input type=password name=transaction_code_current value="" class=form-control size=30></td>
    </tr>
    <?php }?>
  <?php }?>
  <tr>
   <td>New Transaction Code:</td>
   <td><input type=password name=transaction_code value="" class=form-control size=30></td>
  </tr>
  <tr>
   <td>Retype Transaction Code:</td>
   <td><input type=password name=transaction_code2 value="" class=form-control size=30></td>
  </tr>
<?php }?>
<?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
<tr>
 <td>Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 acc no:</td>
 <td><?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['account'] != '') {
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));
} else { ?><input type=text class=form-control size=30 name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));?>
"><?php }?></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
<?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
<tr>
 <td>Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
:</td>
 <td><?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['value'] != '') {
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));
} else { ?><input type=text class=form-control size=30 name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));?>
"><?php }?></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
<tr>
 <td>Your E-mail address:</td>
 <td><?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail'] == 1) {?><input type=text name=email value='<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['email']));?>
' class=form-control size=30><?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);
}?></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['admin_auto_pay_earning'] == 1) {?>
<tr>
 <td colspan=2><input type=checkbox name=user_auto_pay_earning value=1 <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['user_auto_pay_earning'] == 1) {?>checked<?php }?>> Receive earnings directly to e-currency account</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['accesswap'] == 1) {?>
<tr>
 <td>Password for WAP access:</td>
 <td><input type=password name=wappassword class=form-control size=30> <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['stat_password'] != '') {?><a href=?a=deletewappass onclick="return confirm('Are you sure delete this password?');">[delete current]</a><?php }?></td>
</tr><tr>
 <td colspan=2><small>wap access here: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/wap.php</small></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] == 1) {?>
<tr>
 <td>Current Transaction Code:</td>
 <td><input type=password name=transaction_code_current value="" class=form-control size=30></td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['license'] == '4ZQQN55VA2NXBVFUQJE6') {?>
<tr>
 <td class=menutxt align=right><img src="index.php?a=show_validation_image&<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['session_name']);?>
=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['session_id']);?>
&rand=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['rand']);?>
"></td>
 <td><input type=text name=validation_number class=form-control size=15></td>
</tr>
<?php }?>

<tr>
 <td>&nbsp;</td>
 <td><div class="form-group text-center">
<button type="submit">Change Account data</button>
                   
                </div></td>
</tr></table>
</form>
</div></div>
<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>