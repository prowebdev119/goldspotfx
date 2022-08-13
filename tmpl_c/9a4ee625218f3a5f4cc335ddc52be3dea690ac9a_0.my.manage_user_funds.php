<?php /* Smarty version 3.1.27, created on 2022-08-10 18:34:46
         compiled from "my:manage_user_funds" */ ?>
<?php
/*%%SmartyHeaderCode:105008652962f43286c21267_03902469%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a4ee625218f3a5f4cc335ddc52be3dea690ac9a' => 
    array (
      0 => 'my:manage_user_funds',
      1 => 1660170886,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '105008652962f43286c21267_03902469',
  'variables' => 
  array (
    'user' => 0,
    'ps' => 0,
    'p' => 0,
    'ec' => 0,
    'k' => 0,
    'v' => 0,
    'ips' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f43286d0fea8_80061845',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f43286d0fea8_80061845')) {
function content_62f43286d0fea8_80061845 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '105008652962f43286c21267_03902469';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  <style> .sbmt-group { display: inline-block; float: right; } </style>  <h3>User Details:</h3> <table class=form> <tr> <th>Username:</th> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr> <tr> <th>Full Name:</th> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr> <tr> <th>E-mail:</th> <td><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr> </table> <br> <table class=list> <tr> <th>Processing</th> <th>Balance</th> <th>Account</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
$_smarty_tpl->tpl_vars['ec'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['ec']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <tr> <th style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
 <img src="images/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
.gif" height=17 witdth=44 align=absmiddle></th> <td><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['user']->value['balance'][$_smarty_tpl->tpl_vars['ec']->value],$_smarty_tpl->tpl_vars['ec']->value);?>
</td> <td> <?php if (is_array($_smarty_tpl->tpl_vars['user']->value['accounts'][$_smarty_tpl->tpl_vars['ec']->value])) {?> <?php
$_from = $_smarty_tpl->tpl_vars['user']->value['accounts'][$_smarty_tpl->tpl_vars['ec']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "<i>n/a</i>" : $tmp);?>
<br> <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?> <?php } else { ?> <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['accounts'][$_smarty_tpl->tpl_vars['ec']->value], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "<i>n/a</i>" : $tmp);?>
 <?php }?> </td> </tr> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </table> <br> <table class=form> <tr> <th>Total Balance:</th> <td><?php echo amount_smarty_fiat(amount_smarty_format($_smarty_tpl->tpl_vars['user']->value['amounts']['total']));?>
 <div class="sbmt-group"><a href="?a=transactions&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="sbmt btn-sm btn-info">history</a></div></td> </tr> <tr> <th>Total Deposit:</th> <td><?php echo amount_smarty_fiat(amount_smarty_format(abs($_smarty_tpl->tpl_vars['user']->value['amounts']['deposit'])));?>
 <div class="sbmt-group"><a href="?a=transactions&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&ttype=deposit" class="sbmt btn-sm btn-info" style="float:right">history</a></div></td> </tr> <tr> <th>Active Deposit:</th> <td><?php echo amount_smarty_fiat(amount_smarty_format(abs($_smarty_tpl->tpl_vars['user']->value['amounts']['active_deposit'])));?>
 <div class="sbmt-group"><a href="?a=releasedeposits&u_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&ttype=deposit" class="sbmt btn-sm btn-danger" style="float:right">manage deposits</a></div></td> </tr> <tr> <th>Total Earning:</th> <td><?php echo amount_smarty_fiat(amount_smarty_format(abs($_smarty_tpl->tpl_vars['user']->value['amounts']['earning'])));?>
 <div class="sbmt-group"><a href="?a=transactions&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&ttype=earning" class="sbmt btn-sm btn-info">history</a></div></td> </tr>  <tr> <th>Total Withdrawal:</th> <td><?php echo amount_smarty_fiat(amount_smarty_format(abs($_smarty_tpl->tpl_vars['user']->value['amounts']['withdrawal'])));?>
 <div class="sbmt-group"><a href="?a=transactions&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&ttype=withdraw_pending" class="sbmt btn-sm btn-info">history</a></div></td> </tr> <tr> <th>Pending Withdrawals:</th> <td><?php echo amount_smarty_fiat(amount_smarty_format(abs($_smarty_tpl->tpl_vars['user']->value['amounts']['withdraw_pending'])));?>
 <div class="sbmt-group"><a href="?a=withdrawal_requests&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="sbmt btn-sm btn-danger">process withdrawals</a></div></td> </tr> <tr> <th>Total Bonus:</th> <td><?php echo amount_smarty_fiat(amount_smarty_format(abs($_smarty_tpl->tpl_vars['user']->value['amounts']['bonus'])));?>
 <div class="sbmt-group">  <a href="?a=add_transactions&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="sbmt btn-sm btn-danger">add a bonus</a> <a href="?a=transactions&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&ttype=bonus" class="sbmt btn-sm btn-info">history</a></div></td> </tr> <tr> <th>Total Penalty:</th> <td><?php echo amount_smarty_fiat(amount_smarty_format(abs($_smarty_tpl->tpl_vars['user']->value['amounts']['penalty'])));?>
 <div class="sbmt-group">  <a href="?a=add_transactions&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&trans_type=penalty" class="sbmt btn-sm btn-danger">add a penalty</a> <a href="?a=transactions&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&ttype=penalty" class="sbmt btn-sm btn-info">history</a></div></td> </tr> <tr> <th>Referrals 1st Level:</th> <td><?php echo $_smarty_tpl->tpl_vars['user']->value['refs_num'];?>
 <div class="sbmt-group"> <a href="?a=user_refs&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="sbmt btn-sm btn-primary">referrals</a> <a href="?a=user_traffic&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="sbmt btn-sm btn-success">traffic</a> </div> </td> </tr> <tr> <th>Referral Commissions:</th> <td><?php echo amount_smarty_fiat(amount_smarty_format(abs($_smarty_tpl->tpl_vars['user']->value['amounts']['commissions'])));?>
 <div class="sbmt-group"><a href="?a=transactions&userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&ttype=commissions" class="sbmt btn-sm btn-info">history</a></div></td> </tr> </table>  <br> <h3>User IPs:</h3> <table class=list> <tr> <th>IP</th> <th>Last Access</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['ips']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><?php echo $_smarty_tpl->tpl_vars['i']->value['ip'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fdate'];?>
 (<?php echo $_smarty_tpl->tpl_vars['i']->value['ago'];?>
)</td> </tr> <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?> <tr><td colspan=2 align=center>No logins yet</td></tr> <?php
}
?> </table> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Manage user funds:<br> Account balance: how many funds can the user deposit to any investment package or withdraw from the system.<br> Total deposit: how many funds has the user ever deposited to your system.<br> Total active deposit: the whole current deposit of this user.<br> Total earnings: how many funds has the user ever earned with your system.<br> Total withdrawals: how many funds has the user ever withdrawn from system.<br> Total bonus: how many funds has the administrator ever added to the user account as a bonus.<br> Total penalty: how many funds has the administrator ever deleted from the user account as a penalty.<br> Actions:<br> Transactions history - you can check the transactions history for this user.<br> Active deposits/Transactions history - you can check the deposits history for this user.<br> Earnings history - you can check the earnings history for this user.<br> Withdrawals history - you can check the withdrawals history for this user.<br> Process withdrawals - you can withdraw funds by clicking this link if a user asked you for a withdrawal.<br> Bonuses history - you can check the bonuses history for this user.<br> Penalties history - you can check the penalties history for this user.<br> Add a bonus and add a penalty - add a bonus or a penalty to this user.<br> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>