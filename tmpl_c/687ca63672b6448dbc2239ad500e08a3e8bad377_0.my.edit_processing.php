<?php /* Smarty version 3.1.27, created on 2022-08-11 11:38:03
         compiled from "my:edit_processing" */ ?>
<?php
/*%%SmartyHeaderCode:161238426362f5225b4b8f20_68317791%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '687ca63672b6448dbc2239ad500e08a3e8bad377' => 
    array (
      0 => 'my:edit_processing',
      1 => 1660232283,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '161238426362f5225b4b8f20_68317791',
  'variables' => 
  array (
    'p' => 0,
    'frm' => 0,
    'errors' => 0,
    'userinfo' => 0,
    'f' => 0,
    'setts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f5225b584fd0_95580389',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f5225b584fd0_95580389')) {
function content_62f5225b584fd0_95580389 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '161238426362f5225b4b8f20_68317791';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3><?php if ($_smarty_tpl->tpl_vars['p']->value['id']) {?>Edit<?php } else { ?>Add<?php }?> Processing <?php if ($_smarty_tpl->tpl_vars['p']->value['id']) {?>&quot;<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
&quot;<?php }?></h3> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "saved") {?> <div class="alert alert-success">Processing has been updated. <a href="?a=processings">Return</a></div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_passphrase']) {?> <div class="alert alert-danger">Invalid Alternative Passphrase. No data has been updated.</div> <?php }?> <?php echo '<script'; ?>
> var use_transaction = 0; <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['transaction_code']) {?> use_transaction = 1; <?php }?>  function check_asettings() { if (use_transaction && document.formsettings.alternative_passphrase.value == "") { alert("Please enter Alternative Passphrase"); document.formsettings.alternative_passphrase.focus(); return false; } return true; } function setnew_pass(id) { document.getElementById(id+"_div_pass").style.display = "block"; document.getElementById(id+"_hide_link").style.display = "none"; } function setnew_pass_cancel(id) { document.getElementById(id+"_div_pass").style.display = "none"; document.getElementById(id+"_div_pass_reset").checked = false; document.getElementById(id+"_hide_link").style.display = "block"; } function test_autopayment(id, subform, subid) { var frm = document.getElementById("withdraw_settings"+"_"+id+(subid ? "_"+subid : "")); var inpts = frm.getElementsByTagName("input"); var params = ""; if (subform) params = "processing="+subid+"&"; for (i in inpts) { var inpt = inpts[i]; if (inpt.type && (inpt.type.toLowerCase() == "text" || inpt.type.toLowerCase() == "password")) { var name = inpt.name.replace(/^ps_withdraw\[\d+\](\[\d+\])?\[/, "").replace(/\]$/, ""); var val = inpt.value; if (val != "") { params += encodeURIComponent(name)+"="+encodeURIComponent(val)+"&"; } else { alert(inpt.title + " is required"); inpt.focus(); return false; } } } win = window.open("", "test_"+id+subid, "width=400, height=200, status=0"); document.testsettings.target = "test_"+id+subid; document.testsettings.a.value = "withdraw_test"; document.testsettings.action.value = "test"; document.testsettings.processing.value = id; document.testsettings.params.value = params; document.testsettings.submit(); win.focus(); } function fieldAdd(t) { var tpl1 = document.getElementById(t+"field_tpl"); tpl = tpl1.cloneNode(true); var lst = document.getElementById(t+"field_last"); var prt = lst.parentNode; tpl.style.display = "table-row"; prt.insertBefore(tpl, lst); } function fieldRemove(o) { var tr = o.parentNode.parentNode; var bd = tr.parentNode; bd.removeChild(tr); } function checkFiat() { var d = document.formsettings.fiat; if (!d) return; var s = d.value; s = s.replace(/[^a-zA-Z0-9]/, ""); s = s.toUpperCase(); d.value = s; } function checkFiatPow() { var d = document.formsettings.fiat_pow; if (!d) return; var s = d.value; s = parseInt(s); if (isNaN(s)) s = ""; if (s != "" && s < 0) s = 0; if (s != "" && s > 8) s = 8; d.value = s; } <?php echo '</script'; ?>
>  <form name=testsettings method=post> <input type=hidden name=a> <input type=hidden name=action> <input type=hidden name=acc> <input type=hidden name=pass> <input type=hidden name=code> <input type=hidden name=email> <input type=hidden name=processing> <input type=hidden name=params> </form>   <?php echo '<script'; ?>
> function check_form() { var max_auto = parseFloat(document.formsettings.out_amount_max_auto.value); if (isNaN(max_auto)) max_auto = 0; if (document.formsettings.autowithdraw_status.selectedIndex == 1 && max_auto <= 0) { alert("Max auto withdraw value is required"); document.formsettings.out_amount_max_auto.focus(); return false; } return true; } <?php echo '</script'; ?>
>  <form method=post name=formsettings onsubmit="return check_form()"> <input type=hidden name=a value=processings> <input type=hidden name=action value=edit> <input type=hidden name=save value=1> <input type=hidden name=id value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"> <input type=hidden name=say value=""> <table class=form> <tr> <th> <?php if ($_smarty_tpl->tpl_vars['p']->value['id']) {?><img src="images/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
.gif" alt="Upload image &quot;<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
.gif&quot; to &quot;images&quot; folder" align=absmiddle><?php }?> Processing: </th> <td> <?php if ($_smarty_tpl->tpl_vars['p']->value['manual']) {?> <input type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts> <?php if ($_smarty_tpl->tpl_vars['p']->value['id']) {?><i>ID: <?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
</i><?php }?> <?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['id']) {?><i>(<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
)</i><?php }?> <?php }?> </td> </tr> <tr> <th>Status:</th> <td> <select name="status" class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['p']->value['status'] == 0) {?>selected<?php }?>>Off</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['p']->value['status'] == 1) {?>selected<?php }?>>On</option> </select> </td> </tr>  </table> <h3>Deposit:</h3> <table class="form"> <?php if ($_smarty_tpl->tpl_vars['p']->value['deposit']['auto']) {?> <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['deposit']['fields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <tr> <th><?php echo $_smarty_tpl->tpl_vars['f']->value['title'];?>
:</th> <td><?php echo $_smarty_tpl->tpl_vars['f']->value['input'];?>
</td> </tr> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> <?php echo $_smarty_tpl->tpl_vars['p']->value['deposit']['form_html'];?>
 <tr> <td colspan=2> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['deposit']['instructions'];?>
 <br> <b>login as a user and try deposit to test settings.</b><br> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> </table> <?php }?> <?php if ($_smarty_tpl->tpl_vars['p']->value['deposit']['manual']) {?> <tr> <th>Payment Instructions for Users:</th> <td><textarea name="description" rows=10 class=inpts><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr><th class="title" colspan=2>User Transaction Fields:</th><tr> <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['dfields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <tr> <th><input type=button value="-" onclick="fieldRemove(this)" class="btn-sm sbmt"></th> <td><input type="text" name="dfields[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value, ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> </tr> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> <tr id="dfield_last"> <th></th> <td><input type=button value="+" onclick="fieldAdd('d')" class="btn-sm sbmt"></td> </tr> <tr id="dfield_tpl" style="display:none"> <th><input type=button value="-" onclick="fieldRemove(this)" class="btn-sm sbmt"></th> <td><input type="text" name="dfields[]" value="" class=inpts></td> </tr> </table> <?php }?> <table class="form nosize"> <tr> <th class="title" colspan=4>Deposit Limits:</th> </tr> <tr> <th>Min (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="in_amount_min" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['in_amount_min'];?>
"></td> <th>Max (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="in_amount_max" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['in_amount_max'];?>
"></td> </tr> <tr> <th class="title" colspan=4>Deposit Fees:</th> </tr> <tr> <th>Fee (%)</th> <td><input type=text name="in_percent" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['in_percent'];?>
"></td> <th>Additional Fee (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="in_add_amount" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['in_add_amount'];?>
"></td> </tr> <tr> <th>Min (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="in_fee_min" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['in_fee_min'];?>
"></td> <th>Max (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="in_fee_max" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['in_fee_max'];?>
"></td> </tr> </table> <br><br> <br> <h3>Withdraw:</h3> <table class="form nosize"> <tr> <th class="title" colspan=4>Withdraw Limits:</th> </tr> <tr> <th>Min (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="out_amount_min" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['out_amount_min'];?>
"></td> <th>Max (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="out_amount_max" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['out_amount_max'];?>
"></td> </tr> <tr> <th class="title" colspan=4>Withdraw Fees:</th> </tr> <tr> <th>Fee (%)</th> <td><input type=text name="out_percent" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['out_percent'];?>
"></td> <th>Additional Fee (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="out_add_amount" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['out_add_amount'];?>
"></td> </tr> <tr> <th>Min (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="out_fee_min" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['out_fee_min'];?>
"></td> <th>Max (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="out_fee_max" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['out_fee_max'];?>
"></td> </tr> </table> <?php if ($_smarty_tpl->tpl_vars['p']->value['withdraw']['auto']) {?> <br> <h3>Auto-Withdraw:</h3> <table class="form psettings" style="display:table" id="withdraw_settings_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"> <tr> <th>Auto-Withdraw Status:</th> <td> <select name="autowithdraw_status" class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['p']->value['autowithdraw_status'] == 0) {?>selected<?php }?>>Off</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['p']->value['autowithdraw_status'] == 1) {?>selected<?php }?>>On</option> </select> </td> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['withdraw']['fields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <tr> <th><?php echo $_smarty_tpl->tpl_vars['f']->value['title'];?>
:</th> <td><?php echo $_smarty_tpl->tpl_vars['f']->value['input'];?>
</td> </tr> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> <?php echo $_smarty_tpl->tpl_vars['p']->value['withdraw']['form_html'];?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['withdraw']['test_available']) {?> <tr> <th></th> <td><input type=button value="Test" onclick=test_autopayment('<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
') class=sbmt></td> </tr> <?php }?> <tr> <td colspan=2> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['withdraw']['instructions'];?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> </table> <table class="form nosize"> <tr> <th class="title" colspan=4>Auto-Withdraw Limits:</th> </tr> <tr> <th>Min (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="out_amount_min_auto" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['out_amount_min_auto'];?>
"></td> <th>Max (<?php echo amount_smarty_fiat_func(array('ec'=>$_smarty_tpl->tpl_vars['p']->value['id']),$_smarty_tpl);?>
)</th> <td><input type=text name="out_amount_max_auto" class="inpts nosize" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fees']['out_amount_max_auto'];?>
"></td> </tr> </table> <?php }?> <?php if ($_smarty_tpl->tpl_vars['p']->value['withdraw']['manual']) {?> <table class="form"> <tr><th class="title" colspan=2>User Account Fields:</th><tr> <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['wfields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <tr> <th><input type=button value="-" onclick="fieldRemove(this)" class="btn-sm sbmt"></th> <td><input type="text" name="wfields[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value, ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> </tr> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> <tr id="wfield_last"> <th></th> <td><input type=button value="+" onclick="fieldAdd('w')" class="btn-sm sbmt"></td> </tr> <tr id="wfield_tpl" style="display:none"> <th><input type=button value="-" onclick="fieldRemove(this)" class="btn-sm sbmt"></th> <td><input type="text" name="wfields[]" value="" class=inpts></td> </tr> </table> <?php }?> <?php if ($_smarty_tpl->tpl_vars['setts']->value['use_alternative_passphrase']) {?> <br><br> <table class="form"> <tr> <th>Admin Alternative Passphrase:</th> <td><input type=password name="alternative_passphrase" value="" class=inpts></td> </tr> </table> <?php }?> <br><br> <center> <input type=submit value="Update" class="btn btn-success sbmt"> <input type=button value="Return" class="btn btn-warning sbmt" onclick="document.location='?a=processings'"> </center> </form> <?php if ($_smarty_tpl->tpl_vars['p']->value['manual']) {?> <br><br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Enter all the user instructions, your account number in this payment system and all the needed information here. You'll see all new user transactions in the "Pending deposits" section.<br> You can also choose the fields a user has to fill after he has transferred the funds to your account. You can ask the user to give you the batch ID or his account number in the corresponding payment system. This information will help you to easily find the transfer or define whether it was really sent. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>