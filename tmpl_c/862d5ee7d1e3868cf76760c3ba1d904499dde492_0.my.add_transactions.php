<?php /* Smarty version 3.1.27, created on 2022-08-10 17:49:56
         compiled from "my:add_transactions" */ ?>
<?php
/*%%SmartyHeaderCode:82206932662f42804903f11_36943115%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '862d5ee7d1e3868cf76760c3ba1d904499dde492' => 
    array (
      0 => 'my:add_transactions',
      1 => 1660168196,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '82206932662f42804903f11_36943115',
  'variables' => 
  array (
    'fatals' => 0,
    'frm' => 0,
    'errors' => 0,
    'user' => 0,
    'ps' => 0,
    'p' => 0,
    'types' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f428049836c4_38155504',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f428049836c4_38155504')) {
function content_62f428049836c4_38155504 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '82206932662f42804903f11_36943115';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Add a Transaction:</h3> <?php if ($_smarty_tpl->tpl_vars['fatals']->value) {?> <?php if ($_smarty_tpl->tpl_vars['fatals']->value['no_transaction_code']) {?> <div class="alert alert-danger">You have to setup Admin Alternative Passphrase on <a href="?a=settings">Settings</a> page to add a transactions.</div> <?php }?> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "done") {?> <div class="alert alert-success">The transaction(s) has been sent to the user(s).</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_transaction_code']) {?> <div class="alert alert-danger">Invalid Alternative Passphrase</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_plan']) {?> <div class="alert alert-danger">Invalid Investment Plan is specified</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_amount']) {?> <div class="alert alert-danger">Enter transaction amount</div> <?php }?>  <?php echo '<script'; ?>
> function check_form() { var amt = parseFloat(document.trans_form.amount.value); if (isNaN(amt) || amt == 0) { alert("Please, enter bonus amount"); document.trans_form.amount.focus(); return false; } var sel = document.getElementById("to_inpt"); var inform = (document.trans_form.inform.selectedIndex == 1) ? 1 : 0; if (inform && sel.options[sel.selectedIndex].value == "users") { var users = document.trans_form.usernames.value; var ausers = users.split(/\r?\n/); if (ausers.length > 15) { var ret = confirm("To many usernames to send emails notifications. Emails will not be sent."); if (ret == false) { return false; } else { document.trans_form.inform.selectedIndex = 0; } } } if (document.trans_form.alternative_passphrase.value == "") { alert("Please, enter Admin Alternative Passphrase"); document.trans_form.alternative_passphrase.focus(); return false; } document.getElementById("submit_button").disabled = true; return true; } function toggle_users() { var sel = document.getElementById("to_inpt"); var users = document.getElementById("usernames_row"); if (sel.options[sel.selectedIndex].value == "users") { users.style.display = ""; } else { users.style.display = "none"; } } function chng_type() { var i = document.trans_form.trans_type.selectedIndex; d = (i < 3) ? "" : "none"; document.getElementById("invest_field1").style.display = d; document.getElementById("invest_field2").style.display = d; } <?php echo '</script'; ?>
>  <form method=post name=trans_form onsubmit="return check_form()"> <input type=hidden name=a value=add_transactions> <input type=hidden name=action value=save> <input type=hidden name=say value=""> <?php if ($_smarty_tpl->tpl_vars['user']->value) {?><input type=hidden name=userid value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php }?> <table class="form"> <?php if ($_smarty_tpl->tpl_vars['user']->value) {?> <tr> <th>User:</th> <td><a href="?a=user_details&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</a> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
)</td> </tr> <?php } else { ?> <tr> <th>Send to:</th> <td> <select name=to id="to_inpt" class=inpts onchange="toggle_users()"> <option value="all" <?php if ($_smarty_tpl->tpl_vars['frm']->value['to'] == "all") {?>selected<?php }?>>All users</option> <option value="active" <?php if ($_smarty_tpl->tpl_vars['frm']->value['to'] == "active") {?>selected<?php }?>>All users which have made a deposit</option> <option value="passive" <?php if ($_smarty_tpl->tpl_vars['frm']->value['to'] == "passive") {?>selected<?php }?>>All users which have not made a deposit</option> <option value="users" <?php if ($_smarty_tpl->tpl_vars['frm']->value['to'] == "users") {?>selected<?php }?>>Specified users (enter a usernames below)</option> </select> </td> </tr> <tr id="usernames_row" style="display:none"> <th>Enter Usernames:</th> <td><textarea name=usernames class=inpts rows=10><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['usernames'], ENT_QUOTES, 'UTF-8', true);?>
</textarea><br><small>one username per line</small></td> </tr>  <?php echo '<script'; ?>
> toggle_users(); <?php echo '</script'; ?>
>  <?php }?> <tr> <th>Payment System:</th> <td> <select name=ec class=inpts> <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['frm']->value['ec'] == $_smarty_tpl->tpl_vars['p']->value['id']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </select> </td> </tr> <tr> <th>Amount (<?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
):</th> <td><input type=text name=amount value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['amount'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> </tr> <tr> <th>Transaction Type:</th> <td> <select name=trans_type class=inpts onchange="chng_type()"> <option value="bonus" <?php if ($_smarty_tpl->tpl_vars['frm']->value['trans_type'] == "bonus") {?>selected<?php }?>>Bonus</option> <option value="add_funds_with_fee" <?php if ($_smarty_tpl->tpl_vars['frm']->value['trans_type'] == "add_funds_with_fee") {?>selected<?php }?>>Add Funds (with Fees)</option> <option value="add_funds" <?php if ($_smarty_tpl->tpl_vars['frm']->value['trans_type'] == "add_funds") {?>selected<?php }?>>Add Funds (without Fees)</option> <option value="earning" <?php if ($_smarty_tpl->tpl_vars['frm']->value['trans_type'] == "earning") {?>selected<?php }?>>Earning</option> <option value="commissions" <?php if ($_smarty_tpl->tpl_vars['frm']->value['trans_type'] == "commissions") {?>selected<?php }?>>Referral Commission</option> <option value="penalty" <?php if ($_smarty_tpl->tpl_vars['frm']->value['trans_type'] == "penalty") {?>selected<?php }?>>Penalty</option> </select> </td> </tr> <tr> <th>Description:</th> <td><input type=text name=desc value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['desc'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <tr id="invest_field1"> <th>Deposit the Bonus:</th> <td> <select name=hyip_id class=inpts> <option value=0>-- Not Deposit --</option> <?php
$_from = $_smarty_tpl->tpl_vars['types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?> <option value=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['frm']->value['hyip_id'] == $_smarty_tpl->tpl_vars['t']->value['id']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?> </select> </td> </tr> <tr id="invest_field2"> <th>Add Referral Commission:</th> <td> <select name="count_aff" class="inpts"> <option value=1 <?php if ($_smarty_tpl->tpl_vars['frm']->value['count_aff'] == "1") {?>selected<?php }?>>Yes</option> <option value=0 <?php if ($_smarty_tpl->tpl_vars['frm']->value['count_aff'] == "0") {?>selected<?php }?>>No</option> </select> </td> </tr> <tr> <th>Send Email Notification:</th> <td colspan=2> <select name="inform" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['frm']->value['inform'] == 0) {?>selected<?php }?>>No</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['frm']->value['inform'] == 1) {?>selected<?php }?>>Yes</option> </select>  </td> </tr> <tr> <td colspan=2> <div class="alert alert-danger"> Admin Alternative Passphrase: <input type=password name="alternative_passphrase" class="inpts nosize" size=30> </div> </tr> </table> <br> <center><input type=submit value="Send Transaction" id="submit_button" class=sbmt></center> </form> <br>  <?php echo '<script'; ?>
> chng_type(); <?php echo '</script'; ?>
>   <?php }?>  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>