<?php /* Smarty version 3.1.27, created on 2022-08-12 07:52:04
         compiled from "/home/goldainy/public_html/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:162525086862f63ee4e592e4_85340794%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3927e8c926a2c16fb19ab396f4b07ee79b14c302' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/signup.tpl',
      1 => 1660215787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162525086862f63ee4e592e4_85340794',
  'variables' => 
  array (
    'deny_registration' => 0,
    'settings' => 0,
    'referer' => 0,
    'errors' => 0,
    'frm' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f63ee5027de0_37709571',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f63ee5027de0_37709571')) {
function content_62f63ee5027de0_37709571 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '162525086862f63ee4e592e4_85340794';
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
                        <span>[  Account Registration  ]</b></span>
                    </div>
                    <div class="main-page-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-7">
                                    <div class="form-box">
                                        <?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
                                            We are closed for new registrations now.
                                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
                                            You  do not have a upline. Our system require a upline for each user.
                                        <?php } else { ?>
                                        
                                            <?php echo '<script'; ?>
 language=javascript>
                                                function checkform() {
                                                    if (document.regform.fullname.value == '') {
                                                        alert("Please enter your full name!");
                                                        document.regform.fullname.focus();
                                                        return false;
                                                    }
                                                    
                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>
                                                    
                                                    if (document.regform.address.value == '') {
                                                        alert("Please enter your address!");
                                                        document.regform.address.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.city.value == '') {
                                                        alert("Please enter your city!");
                                                        document.regform.city.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.state.value == '') {
                                                        alert("Please enter your state!");
                                                        document.regform.state.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.zip.value == '') {
                                                        alert("Please enter your ZIP!");
                                                        document.regform.zip.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
                                                        alert("Please choose your country!");
                                                        document.regform.country.focus();
                                                        return false;
                                                    }
                                                    
                                                    <?php }?>
                                                    
                                                    if (document.regform.username.value == '') {
                                                        alert("Please enter your username!");
                                                        document.regform.username.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.password.value == '') {
                                                        alert("Please enter your password!");
                                                        document.regform.password.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.password.value != document.regform.password2.value) {
                                                        alert("Please check your password!");
                                                        document.regform.password2.focus();
                                                        return false;
                                                    }
                                                    
                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
                                                    
                                                    if (document.regform.transaction_code.value == '') {
                                                        alert("Please enter your transaction code!");
                                                        document.regform.transaction_code.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
                                                        alert("Please check your transaction code!");
                                                        document.regform.transaction_code2.focus();
                                                        return false;
                                                    }
                                                    
                                                    <?php }?>
                                                    
                                                    if (document.regform.email.value == '') {
                                                        alert("Please enter your e-mail address!");
                                                        document.regform.email.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.email.value != document.regform.email1.value) {
                                                        alert("Please retupe your e-mail!");
                                                        document.regform.email.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.agree.checked == false) {
                                                        alert("You have to agree with the Terms and Conditions!");
                                                        return false;
                                                    }
                                                    return true;
                                                }

                                                function IsNumeric(sText) {
                                                    var ValidChars = "0123456789";
                                                    var IsNumber = true;
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
                                            <?php echo '</script'; ?>
>
                                        

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
                                                <li>Please enter your full name!
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
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username_exists') {?>
                                                <li>Sorry, such user already exists! Please try another username.
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email_exists') {?>
                                                <li>Sorry, such email already exists! Please try another email.
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?>
                                                <li>Please enter a password!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
                                                <li>Please check your password!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
                                                <li>The password you provided is too small, please enter at
                                                    least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?>
                                                <li>Please enter the Transaction Code!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?>
                                                <li>Please check your Transaction Code!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
                                                <li>The Transaction Code you provided is too small, please enter at
                                                    least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?>
                                                <li>The Transaction Code should differ from the Password!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'egold') {?>
                                                <li>Please enter your e-gold account number!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?>
                                                <li>Please enter your e-mail!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'agree') {?>
                                                <li>You have to agree with the Terms and Conditions!
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
                                                <li>Enter the verification code as it is shown in the corresponding box.
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'no_upline') {?>
                                                <li>The system requires an upline to
                                                    register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>You have to be agreed to random one or found a referral link in the net.<?php }?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'ip_exists_in_database') {?>
                                                <li>Your IP already exists in our database. Sorry, but registration
                                                    impossible.
                                                    <?php }?>

                                                    <br>
                                                    <?php endfor; endif; ?>
                                            </ul>
                                        <?php }?>
                                            <form method=post onsubmit="return checkform()" name="regform">
                                                <input type=hidden name=a value="signup">
                                                <input type=hidden name=action value="signup">
                                                <div ng-cloak ng-show="!form.verification">
                                                    <div class="form-group">
                                                        <label>Your Full Name:</label>
                                                        <input type=text name=fullname value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['fullname']));?>
" class=form-control
                                                               size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Your Username:</label>
                                                        <input type=text name=username value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['username']));?>
" class=form-control
                                                               size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Define Password:</label>
                                                        <input type=password name=password value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['password']));?>
" class=form-control
                                                               size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Retype Password:</label>
                                                        <input type=password name=password2 value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['password2']));?>
" class=form-control
                                                               size=30>
                                                    </div>
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
                                                        <div class="form-group">
                                                            <label>Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 Account:</label>
                                                            <input type=text class=form-control size=30
                                                                   name=pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
]
                                                                   value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));?>
">
                                                        </div>
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
                                                            <div class="form-group">
                                                                <label>Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
:</label>
                                                                <input type=text class=form-control size=30
                                                                       name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]"
                                                                       value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));?>
">
                                                            </div>
                                                        <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
                                                    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

                                                    <div class="form-group">
                                                        <label>Your E-mail Address:</label>
                                                        <input type=text name=email value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['email']));?>
" class=form-control size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Retype Your E-mail:</label>
                                                        <input type=text name=email1 value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['email1']));?>
" class=form-control
                                                               size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Secret question:</label>
                                                        <input type=text name=sq value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['sq']));?>
" class=form-control size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Secret answer:</label>
                                                        <input type=text name=sa value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['sa']));?>
" class=form-control size=30>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
                                                        <div class="form-group">
                                                            <label>Define Transaction Code:</label>
                                                            <input type=password name=transaction_code value='<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['transaction_code']));?>
' class=form-control size=30 style="width: 250px">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Retype Transaction Code:</label>
                                                            <input type=password name=transaction_code2 value='<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['transaction_code2']));?>
' class=form-control size=30 style="width: 250px">
                                                        </div>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['signup']) {?>
                                                        <div class="form-group">
                                                            <img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
">
                                                            <input type=text name=validation_number class=form-control size=30>
                                                        </div>
                                                    <?php }?>

                                                    <div class="form-group">
                                                        <div>
                                                            <br>
                                                            <div class="devider"></div>
                                                            <div class="form-group form-checkbox">
                                                                <div>
                                                                    <label>
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             version="1.1" x="0px" y="0px"
                                                                             viewBox="0 0 512 512" xml:space="preserve">
                                                                            <g>
                                                                                <path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0    c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7    C514.5,101.703,514.499,85.494,504.502,75.496z"/>
                                                                            </g>
                                                                        </svg>

                                                                        <input type=checkbox name=agree value=1
                                                                               <?php if ($_smarty_tpl->tpl_vars['frm']->value['agree']) {?>checked<?php }?>>
                                                                    </label>
                                                                    <p>I've read the <a href="index.php/?a=rules"
                                                                                        target="_blank">terms and
                                                                            conditions</a></p>

                                                                </div>
                                                            </div>
                                                            <div class="form-group text-right">
                                                                <button type="submit">Register</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php }?>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <ul class='form-list'>
                                        <li style="margin-top: 42px;">
                                            <i class='icon-user'></i>
                                            <p>
                                                Goldspotfx is available only to the members of the site. You agree to be of
                                                legal age in your country to join this site and in all the cases your minimum age
                                                must be 18 years. Every deposit is considered to be a private transaction between
                                                Goldspotfx and its member.
                                            </p>
                                        </li>
                                        <li style="margin-top: 80px;">
                                            <i class='icon-mail'></i>
                                            <p>
                                                We provide 24x7 monitoring and client support services to all of our esteemed
                                                investors. You may contact us anytime directly at support@goldspotfx.com & we will
                                                reply you asap.
                                            </p>
                                        </li>

                                        <li style="margin-top: 88px;" class="even">
                                            <i class='icon-key'></i>
                                            <p>
                                                We use dedicated servers, secured with antivirus and anti-malware program.
                                                Confidential information in our website is encrypted. Our site is within a DDOS
                                                protected server to make sure it loads fast , we always stay online & your data is
                                                safe with us.
                                            </p>
                                        </li>
                                        <li style="margin-top: 80px;" class="even">
                                            <i class='icon-lock'></i>
                                            <p>
                                                Goldspotfx knows that you care how information about you is used and shared.
                                                Hence we make a strong commitment to protect and respect the privacy principles
                                                regarding the information that you provide. All the data given by a member to
                                                Goldspotfx will be only privately used and not disclosed to any third parties.
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
    </div>
    </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>