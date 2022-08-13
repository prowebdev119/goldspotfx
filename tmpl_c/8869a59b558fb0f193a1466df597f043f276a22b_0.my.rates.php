<?php /* Smarty version 3.1.27, created on 2022-08-12 04:47:51
         compiled from "my:rates" */ ?>
<?php
/*%%SmartyHeaderCode:50367064562f613b76ad483_62322054%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8869a59b558fb0f193a1466df597f043f276a22b' => 
    array (
      0 => 'my:rates',
      1 => 1660294071,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '50367064562f613b76ad483_62322054',
  'variables' => 
  array (
    'plans' => 0,
    'line' => 0,
    's' => 0,
    'demo_version' => 0,
    'line1' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f613b76f2ca4_74380184',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f613b76f2ca4_74380184')) {
function content_62f613b76f2ca4_74380184 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '50367064562f613b76ad483_62322054';
?>
 <table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?> <tr> <td colspan=5><b>Available Investment Packages:</b></td> </tr><tr> <td bgcolor=FFEA00 align=center><b>Order</b></td> <td bgcolor=FFEA00 align=center><b>Package name</b></td> <td bgcolor=FFEA00 align=center><b>Deposit (US$)</b></td> <td bgcolor=FFEA00 align=center><b>Profit (%)</b></td> <td bgcolor=FFEA00 align=center><b>-</b></td> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['line'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['line']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['total'];
$foreach_line_Sav = $_smarty_tpl->tpl_vars['line'];
?>  <?php if (!$_smarty_tpl->tpl_vars['line']->value['already_printed']) {?> <tr> <td bgcolor=FFF9B3> <?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['first'] : null)) {?> <a href="?a=rates&action=up&id=<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
">[UP]</a> <?php }?> <br> <?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['last'] : null)) {?> <a href="?a=rates&action=down&id=<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
">[DOWN]</a> <?php }?> </td> <td bgcolor=FFF9B3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['line']->value['status'] == "off") {?><small>(inactive)</small><?php }
if ($_smarty_tpl->tpl_vars['line']->value['closed'] == 1) {?><small>(closed)</small><?php }?></td> <td bgcolor=FFF9B3><?php echo $_smarty_tpl->tpl_vars['line']->value['deposit'];?>
</td> <td bgcolor=FFF9B3><?php echo $_smarty_tpl->tpl_vars['line']->value['percent'];?>
</td> <td bgcolor=FFF9B3 class=menutxt align=right> <a href=?a=editrate&id=<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];
echo $_smarty_tpl->tpl_vars['s']->value;?>
>[edit]</a> <a href=?a=deleterate&id=<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
 onclick="return confirm(' <?php if ($_smarty_tpl->tpl_vars['demo_version']->value && $_smarty_tpl->tpl_vars['line']->value['id'] < 3) {?> Demo version restriction!\nYou cannot delete this package!\n\n <?php } else { ?> Are you sure delete this package? All users deposits in this package will be lost! <?php }?> ')">[delete]</a> </td> </tr> <tr> <td colspan=4> <table cellspacing=0 cellpadding=2 border=0 width=66% align=right> <?php
$_from = $_smarty_tpl->tpl_vars['line']->value['plans'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['line1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['line1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['line1']->value) {
$_smarty_tpl->tpl_vars['line1']->_loop = true;
$foreach_line1_Sav = $_smarty_tpl->tpl_vars['line1'];
?> <tr onMouseOver="bgColor='#FFECB0';" onMouseOut="bgColor='';"> <td nowrap width=120><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line1']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td align=right nowrap><?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];
echo amount_smarty_format($_smarty_tpl->tpl_vars['line1']->value['min_deposit']);?>
 - <?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];
echo amount_smarty_format($_smarty_tpl->tpl_vars['line1']->value['max_deposit']);?>
 &nbsp; &nbsp; </td> <td align=right nowrap width=60><?php echo $_smarty_tpl->tpl_vars['line1']->value['percent'];?>
%</td> </tr> </tr> <?php
$_smarty_tpl->tpl_vars['line1'] = $foreach_line1_Sav;
}
?> <tr><td colspan=5 align=right><small>Total deposited: <?php echo $_smarty_tpl->tpl_vars['line']->value['total_deposited_cnt'];?>
(<?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];
echo amount_smarty_format($_smarty_tpl->tpl_vars['line']->value['total_deposited']);?>
) &nbsp; Active deposits: <?php echo number_format($_smarty_tpl->tpl_vars['line']->value['active_deposited_cnt']);?>
(<?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];
echo amount_smarty_format($_smarty_tpl->tpl_vars['line']->value['active_deposited']);?>
)</td> </table> </td> </tr> <?php }?> <?php
$_smarty_tpl->tpl_vars['line'] = $foreach_line_Sav;
}
if (!$_smarty_tpl->tpl_vars['line']->_loop) {
?> <tr> <td bgcolor=FFF9B3 colspan=4>No Packages available</td> </tr> <?php
}
?> </table> <br> <table cellspacing=0 cellpadding=0 border=0 width=100<?php echo '%>';?> <tr><td> <form method=get> <input type=hidden name=a value="add_hyip"> <input type=submit value="Add a new Investment Package" class=sbmt size=15> </form><?php }
}
?>