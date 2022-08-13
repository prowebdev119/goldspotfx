<?php /* Smarty version 3.1.27, created on 2022-08-10 16:59:57
         compiled from "/home/goldainy/public_html/tmpl/deposit.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123766702262f41c4d6a8b39_23155665%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b012329f757277e8af4cee4fa9381b05513bf08' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/deposit.confirm.tpl',
      1 => 1660045178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123766702262f41c4d6a8b39_23155665',
  'variables' => 
  array (
    'false_data' => 0,
    'deposit' => 0,
    'coin_payment_image' => 0,
    't' => 0,
    'currency_sign' => 0,
    'payment_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f41c4d712662_96010524',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f41c4d712662_96010524')) {
function content_62f41c4d712662_96010524 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '123766702262f41c4d6a8b39_23155665';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>
<?php if ($_smarty_tpl->tpl_vars['false_data']->value != 1) {?>
<h3>Deposit Confirmation:</h3>
<br><br>

<table cellspacing=0 cellpadding=2 class="form deposit_confirm">
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['id'] > 0) {?>
<tr>
 <th>Plan:</th>
 <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['deposit']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
 <td rowspan=6><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['coin_payment_image']->value);?>
</td>
</tr>
<tr>
 <th>Profit:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['percent']);?>
% <?php if ($_smarty_tpl->tpl_vars['deposit']->value['period'] == 'end') {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 days<?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['period_name']);?>
 for <?php if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] == 0) {?>lifelong<?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['time_units'] != 1) {?>s<?php }?> <?php if ($_smarty_tpl->tpl_vars['deposit']->value['work_week']) {?>(mon-fri)<?php }
}
}?></td>
</tr>
<tr>
 <th>Principal Return:</th>
 <td><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return']) {?>Yes<?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'] > 0) {?>, with <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'],2));?>
% fee<?php }
} else { ?>No (included in profit)<?php }?></td>
</tr>
<tr>
 <th>Principal Withdraw:</th>
 <td>
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw']) {?>Available with 
<?php
$_from = $_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_terms'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_wpt'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_wpt']->value['total'];
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['percent']);?>
% fee <?php if ($_smarty_tpl->tpl_vars['t']->value['duration'] > 0) {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['duration']);?>
 days<?php }
if (!(isset($_smarty_tpl->tpl_vars['__foreach_wpt']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] : null)) {?> or <?php }?>
<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']) {?> but before <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']));?>
 days<?php }?>
<?php } else { ?>Not available<?php }?>
 </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['use_compound'] == 1) {?>
<tr>
 <th>Compound:</th>
 <td><?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['compound']));?>
%</td>
</tr>
<?php }?>
<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee']) {?>
<tr>
 <th>Credit Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['user_amount']);?>
</td>
</tr>
<tr>
 <th>Deposit Fee:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['percent']);?>
% + <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['add_amount']);?>
 (min. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_min']);?>
 max. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_max']);?>
)</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']) {?>
<tr>
 <th>Debit Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']);?>
</td>
</tr>
<tr>
 <th><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['converted_fiat']);?>
 Debit Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
</tr>
<?php } else { ?>
<tr>
 <th>Debit Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
</tr>
<?php }?>
</table>

<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['payment_form']->value);?>

<?php }?>

</div></div>
<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>