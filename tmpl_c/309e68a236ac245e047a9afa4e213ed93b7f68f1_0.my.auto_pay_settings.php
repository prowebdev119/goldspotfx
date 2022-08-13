<?php /* Smarty version 3.1.27, created on 2022-08-10 18:35:37
         compiled from "my:auto_pay_settings" */ ?>
<?php
/*%%SmartyHeaderCode:6262015962f432b9cd0a16_53677040%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309e68a236ac245e047a9afa4e213ed93b7f68f1' => 
    array (
      0 => 'my:auto_pay_settings',
      1 => 1660170937,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '6262015962f432b9cd0a16_53677040',
  'variables' => 
  array (
    'errors' => 0,
    'frm' => 0,
    'userinfo' => 0,
    'setts' => 0,
    'awerrors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f432b9d0ef75_17376268',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f432b9d0ef75_17376268')) {
function content_62f432b9d0ef75_17376268 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6262015962f432b9cd0a16_53677040';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Auto-Withdrawals Settings:</h3>  <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_curl']) {?> <div class="alert alert-danger"> <b>Auto-Withdrawals are not available</b><br>PHP Curl module is required to make automatic payments. </div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_passphrase']) {?> <div class="alert alert-danger">Invalid Alternative Passphrase. No data has been updated.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "saved") {?> <div class="alert alert-success">Changes has been successfully made.</div> <?php }?>  <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <b>We recommend to use the auto-payment feature only on the dedicated servers. Virtual Shared Hosting has much less security. <br>Use Mass Payment tool instead <a href="?a=withdrawal_requests">here</a>.</b> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  <?php echo '<script'; ?>
> var use_transaction = 0; <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['transaction_code']) {?> use_transaction = 1; <?php }?>  function check_asettings() { if (use_transaction && document.formsettings.alternative_passphrase.value == "") { alert("Please enter Alternative Passphrase"); document.formsettings.alternative_passphrase.focus(); return false; } return true; } function open_payment_settings(a) { var id = "withdraw_settings_"+a; document.getElementById(id).style.display = document.getElementById(id).style.display == "table" ? "none" : "table"; } function setnew_pass(id) { document.getElementById(id+"_div_pass").style.display = "block"; document.getElementById(id+"_hide_link").style.display = "none"; } function setnew_pass_cancel(id) { document.getElementById(id+"_div_pass").style.display = "none"; document.getElementById(id+"_div_pass_reset").checked = false; document.getElementById(id+"_hide_link").style.display = "block"; } function test_autopayment(id, subform, subid) { var frm = document.getElementById("withdraw_settings"+"_"+id+(subid ? "_"+subid : "")); var inpts = frm.getElementsByTagName("input"); var params = ""; if (subform) params = "processing="+subid+"&"; for (i in inpts) { var inpt = inpts[i]; if (inpt.type && (inpt.type.toLowerCase() == "text" || inpt.type.toLowerCase() == "password")) { var name = inpt.name.replace(/^ps_withdraw\[\d+\](\[\d+\])?\[/, "").replace(/\]$/, ""); var val = inpt.value; if (val != "") { params += encodeURIComponent(name)+"="+encodeURIComponent(val)+"&"; } else { alert(inpt.title + " is required"); inpt.focus(); return false; } } } win = window.open("", "test_"+id+subid, "width=400, height=200, status=0"); document.testsettings.target = "test_"+id+subid; document.testsettings.a.value = "withdraw_test"; document.testsettings.action.value = "test"; document.testsettings.processing.value = id; document.testsettings.params.value = params; document.testsettings.submit(); win.focus(); } <?php echo '</script'; ?>
>  <form name=testsettings method=post> <input type=hidden name=a> <input type=hidden name=action> <input type=hidden name=acc> <input type=hidden name=pass> <input type=hidden name=code> <input type=hidden name=email> <input type=hidden name=processing> <input type=hidden name=params> </form> <form method=post name=formsettings onsubmit="return check_asettings()"> <input type=hidden name=a value=auto-pay-settings> <input type=hidden name=action value=update> <br> <table class=form> <tr> <th>Auto-Withdrawals Status</th> <td> <select name=use_auto_payment class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['setts']->value['use_auto_payment'] == 0) {?>selected<?php }?> style="color:blue;">Disabled</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['setts']->value['use_auto_payment'] == 1) {?>selected<?php }?> style="color:red;">Enabled</option> </select> </tr> </table>  <table class=form> <tr> <th colspan=2>Other Settings:</th> </tr>  <tr> <th>Processings:</th> <td class="alert alert-danger"><a href="?a=processings" targe=_blank>Processings setup is here</a></td> </tr> <tr> <th>Maximal daily withdrawal for a user for all currencies:</th> <td><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
<input type=text name=max_auto_withdraw_user value="<?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['setts']->value['max_auto_withdraw_user'],0,"#amount#");?>
" class="inpts nosize" size=30></td> </tr> <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['transaction_code']) {?> <tr> <th>Alternative Passphrase:</th> <td><input type=password name="alternative_passphrase" value="" class=inpts size=30></td> </tr> <?php }?> <tr> <th></th> <td><input type=submit value="Save" class=sbmt></td> </tr> </table> </form> <?php if ($_smarty_tpl->tpl_vars['awerrors']->value) {?> <div class="alert alert-danger"> There are some auto withdraw erros was logged. <a href="?a=error_pay_log" class="sbmt btn-danger">Check error transactions</a> </div> <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  Maximal daily withdrawal for every user. The script will make payments to the user&#39;s payment account automatically if the total user withdrawal amount for 24 hour is less than the specified value.<br> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>