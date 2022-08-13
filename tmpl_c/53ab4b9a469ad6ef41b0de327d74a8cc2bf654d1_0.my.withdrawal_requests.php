<?php /* Smarty version 3.1.27, created on 2022-08-10 12:39:37
         compiled from "my:withdrawal_requests" */ ?>
<?php
/*%%SmartyHeaderCode:132271539962f3df49370f84_08302383%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53ab4b9a469ad6ef41b0de327d74a8cc2bf654d1' => 
    array (
      0 => 'my:withdrawal_requests',
      1 => 1660149577,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '132271539962f3df49370f84_08302383',
  'variables' => 
  array (
    'errors' => 0,
    'result' => 0,
    'frm' => 0,
    'ps' => 0,
    'p' => 0,
    'trans' => 0,
    't' => 0,
    'k' => 0,
    'v' => 0,
    'totals' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3df49431998_12843961',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3df49431998_12843961')) {
function content_62f3df49431998_12843961 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_select_date')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.html_select_date.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '132271539962f3df49370f84_08302383';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Withdrawal Requests:</h3>  <?php echo '<script'; ?>
 language=javascript> function go(p) { document.trans.p.value = p; document.trans.submit(); } function sort(s,d) { document.trans.p.value = 1; document.trans.o.value = s; document.trans.d.value = d; document.trans.submit(); } function func1() { if (confirm("Do you really want to process this withdrawal(s)?")) { document.getElementById("action2").value="pay"; document.trans.target="_blank"; document.trans.submit(); document.getElementById("action2").value=""; document.trans.target="_self"; } return false; } function func2() { if (confirm("Are you sure you want to remove selected withdrawal(s)?\n\nFunds will be returned to the user's balance.")) { document.getElementById("action2").value="remove"; document.trans.submit(); document.getElementById("action2").value=""; } } function func3() { if (confirm("Are you sure you want to set this request(s) as processed?\n\nNo funds will be sent to the user account(s)!")) { document.getElementById("action2").value="assure"; document.trans.submit(); document.getElementById("action2").value=""; } } function select_all_transactions() { var chbxs = document.getElementsByClassName("trn"); for (i in chbxs) { if (chbxs[i].getAttribute("data-non-auto") != 1) { chbxs[i].checked = !chbxs[i].checked; } } return false; }  <?php echo '</script'; ?>
>  <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_trns']) {?><div class="alert alert-danger">No transactions to pay found</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_curl']) {?><div class="alert alert-danger">Required PHP cURL module is not installed. Please contact your hoster to enable it.</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == "remove_success") {?><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['result']->value['data'];?>
 transaction(s) has been successfully removed.</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == "remove_failed") {?><div class="alert alert-warning">No transactions has been removed.</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == "assure_success") {?><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['result']->value['data'];?>
 transaction(s) has been successfully assured.</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == "assure_failed") {?><div class="alert alert-warning">No transactions has been assured.</div><?php }?> <form method=post name=trans> <input type=hidden name=a value="withdrawal_requests"> <input type=hidden id="action2" name=action2> <input type=hidden name=userid value="<?php echo intval($_smarty_tpl->tpl_vars['frm']->value['userid']);?>
"> <input type=hidden name=p> <input type=hidden name=o> <input type=hidden name=d> <table class="form controls nosize"> <tr> <td> <select name=ec class=inpts onchange="document.trans.submit()"> <option value=-1>All eCurrencies</option> <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <option value=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['id'] == $_smarty_tpl->tpl_vars['frm']->value['ec']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </select> <select name=rtype class=inpts onchange="document.trans.submit()"> <option value=0>All Requests</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['frm']->value['rtype'] == 1) {?>selected<?php }?>>First Requests</option> <option value=2 <?php if ($_smarty_tpl->tpl_vars['frm']->value['rtype'] == 2) {?>selected<?php }?>>Last Requests</option> <option value=3 <?php if ($_smarty_tpl->tpl_vars['frm']->value['rtype'] == 3) {?>selected<?php }?>>First and Last</option> </select> Amount <input type=text name=amount_from value="<?php echo amount_smarty_format($_smarty_tpl->tpl_vars['frm']->value['amount_from']);?>
" class="inpts nosize" size=8> to <input type=text name=amount_to value="<?php echo amount_smarty_format($_smarty_tpl->tpl_vars['frm']->value['amount_to']);?>
" class="inpts nosize" size=8> </td> <td style="text-align:right" valign=top nowrap> From: <?php echo smarty_function_html_select_date(array('prefix'=>"from_",'time'=>$_smarty_tpl->tpl_vars['frm']->value,'field_order'=>"DMY",'start_year'=>$_smarty_tpl->tpl_vars['frm']->value['start_year'],'all_extra'=>"class=\"inpts nosize\"",'month_format'=>"%m",'month_value_format'=>"%m"),$_smarty_tpl);?>
 <br> To: <?php echo smarty_function_html_select_date(array('prefix'=>"to_",'time'=>$_smarty_tpl->tpl_vars['frm']->value,'field_order'=>"DMY",'start_year'=>$_smarty_tpl->tpl_vars['frm']->value['start_year'],'all_extra'=>"class=\"inpts nosize\"",'month_format'=>"%m",'month_value_format'=>"%m"),$_smarty_tpl);?>
 </td> <td nowrap valign=top> Per Page: <select name=onpage class="inpts nosize" onchange="document.trans.submit()"> <option value=20 <?php if ($_smarty_tpl->tpl_vars['frm']->value['onpage'] == 20) {?>selected<?php }?>>20 <option value=50 <?php if ($_smarty_tpl->tpl_vars['frm']->value['onpage'] == 50) {?>selected<?php }?>>50 <option value=100 <?php if ($_smarty_tpl->tpl_vars['frm']->value['onpage'] == 100) {?>selected<?php }?>>100 </select> <br> <input type=submit value="Apply" class="sbmt"> <button type=submit name="action2" value="csv" class=sbmt>CSV</button> </td> </tr> </table> <table class="list"> <tr> <th><a href="javascript:return;" onclick="select_all_transactions()">#</a></th> <th><a onclick="sort('username', <?php echo $_smarty_tpl->tpl_vars['frm']->value['d'];?>
)" class="sort_link">UserName</a> <a onclick="sort('username', 0)" class="sort_link<?php if ($_smarty_tpl->tpl_vars['frm']->value['o'] == "username" && $_smarty_tpl->tpl_vars['frm']->value['d'] == 1) {?> active<?php }?>">&darr;</a> <a onclick="sort('username', 1)" class="sort_link<?php if ($_smarty_tpl->tpl_vars['frm']->value['o'] == "username" && $_smarty_tpl->tpl_vars['frm']->value['d'] == 0) {?> active<?php }?>">&uarr;</a> </th> <th><a onclick="sort('date', <?php echo $_smarty_tpl->tpl_vars['frm']->value['d'];?>
)" class="sort_link">Date</a> <a onclick="sort('date', 0)" class="sort_link<?php if ($_smarty_tpl->tpl_vars['frm']->value['o'] == "date" && $_smarty_tpl->tpl_vars['frm']->value['d'] == 1) {?> active<?php }?>">&darr;</a> <a onclick="sort('date', 1)" class="sort_link<?php if ($_smarty_tpl->tpl_vars['frm']->value['o'] == "date" && $_smarty_tpl->tpl_vars['frm']->value['d'] == 0) {?> active<?php }?>">&uarr;</a> </th> <th><a onclick="sort('amount', <?php echo $_smarty_tpl->tpl_vars['frm']->value['d'];?>
)" class="sort_link">Amount</a> <a onclick="sort('amount', 1)" class="sort_link<?php if ($_smarty_tpl->tpl_vars['frm']->value['o'] == "amount" && $_smarty_tpl->tpl_vars['frm']->value['d'] == 0) {?> active<?php }?>">&darr;</a> <a onclick="sort('amount', 0)" class="sort_link<?php if ($_smarty_tpl->tpl_vars['frm']->value['o'] == "amount" && $_smarty_tpl->tpl_vars['frm']->value['d'] == 1) {?> active<?php }?>">&uarr;</a> </th> <th>Actions</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['trans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td> <?php if ($_smarty_tpl->tpl_vars['t']->value['auto_started']) {?> <div class="hlp" title="Transaction has been aborted. Check on payment processing and take action manually."><span class="badge badge-danger">!!!</span> <?php } else { ?> <input type=checkbox name="trn[<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
]" class="trn" id="trn_<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
" value=1<?php if ($_smarty_tpl->tpl_vars['t']->value['mult']) {?> data-mult=1<?php }?> <?php if ($_smarty_tpl->tpl_vars['t']->value['auto_withdraw'] == 0) {?>data-non-auto=1<?php }?>> <?php }?> </td> <td> <?php if ($_smarty_tpl->tpl_vars['t']->value['mult']) {?><span class="badge-bg badge-danger">Mult</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['t']->value['account_deleted']) {?><s>user deleted</s><?php } else { ?><a href="?a=editaccount&id=<?php echo $_smarty_tpl->tpl_vars['t']->value['user_id'];?>
" title="Edit user&apos;s details" class="link username" target=_blank><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?></b> <?php if ($_smarty_tpl->tpl_vars['t']->value['after20200211']) {?><span class="badge-bg badge-success">02-11</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['t']->value['auto_withdraw'] == 0) {?><span class="badge-bg badge-danger">No Auto Withdraw</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['t']->value['account_array']) {?> <?php
$_from = $_smarty_tpl->tpl_vars['t']->value['account_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?> <br>&rarr; <b><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</small></b> <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?> <?php } else { ?> <br>&rarr; <b <?php if ($_smarty_tpl->tpl_vars['t']->value['account_blacklisted']) {?>style="color:red" title="Blacklisted address"<?php }?>><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['account'], ENT_QUOTES, 'UTF-8', true);?>
</small></b> <?php }?> <br><small style="color:gray"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</small> </td> <td align=center><small><?php echo $_smarty_tpl->tpl_vars['t']->value['d'];?>
</small></td> <td nowrap align=right><b><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['t']->value['to_withdraw'],$_smarty_tpl->tpl_vars['t']->value['ec']);?>
</b> <img src="images/<?php echo $_smarty_tpl->tpl_vars['t']->value['ec'];?>
.gif" align=absmiddle hspace=1 height=17> <?php if ($_smarty_tpl->tpl_vars['t']->value['fee'] > 0) {?><br><small style="color:gray;display:block;text-align:left;">Request:<?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['t']->value['amount'],$_smarty_tpl->tpl_vars['t']->value['ec']);?>
<br>Fee: <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['t']->value['fee'],$_smarty_tpl->tpl_vars['t']->value['ec']);?>
</small><?php }?> </td> <td nowrap align=center> <a href="?a=pay_withdraw&id=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
" target=_blank class="sbmt btn-sm btn-info" style="margin-bottom:2px;">manual pay</a><br>   </td> </tr>  <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?> <?php if ($_smarty_tpl->tpl_vars['trans']->value) {?> <tr> <td colspan=3><b>Total for selected options:</b></td> <td align=right nowrap> <?php
$_from = $_smarty_tpl->tpl_vars['totals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
echo amount_smarty_fiat($_smarty_tpl->tpl_vars['t']->value['amount'],$_smarty_tpl->tpl_vars['t']->value['ec']);?>
 <img src="images/<?php echo $_smarty_tpl->tpl_vars['t']->value['ec'];?>
.gif" align=absmiddle><br><?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?> </td> <td></td> </tr> <?php }?> </table> </form> <br> <center>  <input type=button value="Mass payment" class="btn btn-info sbmt" title="Automatically pay withdrawl requests" onClick="func1();"> &nbsp; <input type=button value="Remove" class="btn btn-warning sbmt" title="Remove withdrawal requests and return funds to user's balance" onClick="func2();"> &nbsp; <input type=button value="Assure" class="btn btn-danger sbmt" title="Assure withdrawal requests as processed. It means you already process the transactions outside the system and just notify it transactions was completed." onClick="func3();"> &nbsp; <?php echo paginator(array('col'=>$_smarty_tpl->tpl_vars['pages']->value['col'],'cur'=>$_smarty_tpl->tpl_vars['pages']->value['cur'],'url'=>"javascript:go(%s)",'use_first'=>1,'use_last'=>1),$_smarty_tpl);?>
 </center> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>