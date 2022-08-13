<?php /* Smarty version 3.1.27, created on 2022-08-08 00:52:35
         compiled from "my:expiring_deposits" */ ?>
<?php
/*%%SmartyHeaderCode:4177563262f0969385ce55_05362551%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045845ad50e28455d9b10b0c98512a4bc104debf' => 
    array (
      0 => 'my:expiring_deposits',
      1 => 1659934355,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '4177563262f0969385ce55_05362551',
  'variables' => 
  array (
    'deposits' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f09693880085_07990782',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f09693880085_07990782')) {
function content_62f09693880085_07990782 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '4177563262f0969385ce55_05362551';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Deposits:</h3> <table class=list> <tr> <th>User</th> <th>Plan</th> <th>Deposit</th> <th>Expires</th> <th>Action</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['deposits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['d']->value['plan_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['d']->value['q_days'];?>
)</td> <td align=right nowrap><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['d']->value['amount'],$_smarty_tpl->tpl_vars['d']->value['ec']);?>
 <img src="images/<?php echo $_smarty_tpl->tpl_vars['d']->value['ec'];?>
.gif" height=17 align=absmiddle></td> <td align=right><?php echo $_smarty_tpl->tpl_vars['d']->value['expire'];?>
</td> <td nowrap><a href="?a=editaccount&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['user_id'];?>
" target=_blank class="sbmt btn-sm btn-success">account</a> <a href="?a=user_details&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['user_id'];?>
" target=_blank class="sbmt btn-sm btn-info">funds</a></td> </tr> <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
if (!$_smarty_tpl->tpl_vars['d']->_loop) {
?> <tr> <td align=center colspan=4>No records found</td> </tr> <?php
}
?> </table> <br>  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>