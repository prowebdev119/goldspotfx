<?php /* Smarty version 3.1.27, created on 2022-08-10 10:47:10
         compiled from "my:check_ips_access" */ ?>
<?php
/*%%SmartyHeaderCode:5183861462f3c4eed14c98_33259179%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7a4ca05990c7be61f0b091b064fcfc6db422e16' => 
    array (
      0 => 'my:check_ips_access',
      1 => 1660142830,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '5183861462f3c4eed14c98_33259179',
  'variables' => 
  array (
    'frm' => 0,
    'access' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3c4eed349c7_68680164',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3c4eed349c7_68680164')) {
function content_62f3c4eed349c7_68680164 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '5183861462f3c4eed14c98_33259179';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Check IPs for double usage:</h3> <table class=list> <tr><th colspan=4><?php echo $_smarty_tpl->tpl_vars['frm']->value['ip'];?>
</th></tr> <tr> <th>User</th> <th>Date</th> <th>Last Access</th> <th>Actions</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['access']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</b></td> <td><?php echo $_smarty_tpl->tpl_vars['a']->value['date'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['a']->value['last_access_time'];?>
</td> <td> <a href=?a=user_details&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
 class="sbmt btn-sm btn-info">view</a>&nbsp; <a href="?a=deleteaccount&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" onclick="return confirm('Are you sure you want to delete this user?');" class="sbmt btn-sm btn-danger">delete</a> </td> </tr> <?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>