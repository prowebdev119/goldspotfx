<?php /* Smarty version 3.1.27, created on 2022-08-10 17:52:05
         compiled from "/home/goldainy/public_html/tmpl/withdraw_principal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:187020509962f428858bf108_22665636%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a37f3eac5d2b52a2746ae2de0d89de48e24db61a' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/withdraw_principal.tpl',
      1 => 1660045179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187020509962f428858bf108_22665636',
  'variables' => 
  array (
    'fatal' => 0,
    'say' => 0,
    'preview' => 0,
    'deposit' => 0,
    'amount' => 0,
    'currency_sign' => 0,
    'type' => 0,
    'fee' => 0,
    'to_balance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f4288590cfb7_94847000',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f4288590cfb7_94847000')) {
function content_62f4288590cfb7_94847000 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '187020509962f428858bf108_22665636';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h3>Withdraw Principal:</h3><br><br>
<?php if ($_smarty_tpl->tpl_vars['fatal']->value) {?>
 <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'deposit_not_found') {?>Wrong deposit ID has been provided<?php }?> 
 <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'withdraw_forbidden') {?>Can not process principal withdrawal for this plan<?php }?>
 <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'too_early_withdraw') {?>Can not process principal withdrawal yet<?php }?>
 <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'too_late_withdraw') {?>Can not process principal withdrawal longer<?php }?>
 <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'withdraw_complete') {?>Withdrawal has been sucessfully completed.<?php }?>
<?php } else { ?>
 <?php if ($_smarty_tpl->tpl_vars['say']->value == 'too_big_amount') {?>You have no such amount on this deposit.<br><br><?php }?>
 <?php if ($_smarty_tpl->tpl_vars['say']->value == 'too_small_amount') {?>Provided amount is too small.<br><br><?php }?>

<?php if ($_smarty_tpl->tpl_vars['preview']->value == 1) {?>

<form method=post name=withdraw_form>
<input type=hidden name=a value=withdraw_principal>
<input type=hidden name=action value=withdraw>
<input type=hidden name=deposit value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['id']);?>
>
<input type=hidden name=amount value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <th>Deposit Amount</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['deposit']);?>
</td>
</tr>
<tr>
 <th>Deposit Plan</th>
 <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
</tr>
<tr>
 <th>Release Amount</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
</td>
</tr>
<tr>
 <th>Fee</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fee']->value);?>
 (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['withdraw_principal_percent']);?>
%)</td>
</tr>
<tr>
 <th>Receive Amount</th>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['to_balance']->value);?>
</b></td>
</tr>
<tr>
 <td><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>

<?php } else { ?>

<?php echo '<script'; ?>
>
var max_amount = new Number('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['deposit']);?>
');
var percent = new Number('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['withdraw_principal_percent']);?>
');
var currency_pow = 8;


function withdraw() {
  if (!document.withdraw_form.amount) return;
  var out_val = new Number(document.withdraw_form.amount.value.replace(",","."));
  if (isNaN(out_val))
  { out_val = 0; }
  out_val = out_val;

  if (out_val > max_amount) {
    out_val = max_amount;
    document.withdraw_form.amount.value = out_val.toFixed(currency_pow);
  }

  if (out_val < 0) {
    document.withdraw_form.amount.value = '';
    document.withdraw_form.quote.value = 0;
  } else {
    var fee = out_val * (percent/ 100);
    if (fee <= 0) fee = 0;
    out_val = out_val - fee;
    if (out_val < 0) out_val = 0;
    document.withdraw_form.quote.value = out_val.toFixed(currency_pow);
  }
}

<?php echo '</script'; ?>
>

<form method=post name=withdraw_form>
<input type=hidden name=a value=withdraw_principal>
<input type=hidden name=action value=withdraw_preview>
<input type=hidden name=deposit value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['id']);?>
>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <th>Deposit Amount</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['deposit']);?>
</td>
</tr>
<tr>
 <th>Deposit Earned</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['earned']);?>
</td>
</tr>
<tr>
 <th>Deposit Plan</th>
 <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
</tr>
<tr>
 <th>Fee</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['withdraw_principal_percent']);?>
%</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['type']->value['withdraw_principal_full']) {?>
<tr>
 <th>Release Amount:</td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['deposit']);?>
</td>
</tr>
<?php } else { ?>
<tr>
 <th>Release Amount:</td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <input type=text name=amount value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['deposit']);?>
" class=inpts size=15 onchange="withdraw()" onkeyup="withdraw()"
      onfocusout="withdraw()" onactivate="withdraw()" ondeactivate="withdraw()"></td>
</tr>
<tr>
 <th>Receive Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <input type=text name=quote readonly class=inpts size=15></td>
</tr>
<?php }?>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Release Deposit" class=sbmt></td>
</tr></table>
</form>

<?php echo '<script'; ?>
>
withdraw();
<?php echo '</script'; ?>
>
<?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>