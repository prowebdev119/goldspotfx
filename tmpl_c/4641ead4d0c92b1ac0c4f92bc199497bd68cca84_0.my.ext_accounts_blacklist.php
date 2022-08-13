<?php /* Smarty version 3.1.27, created on 2022-08-10 12:39:24
         compiled from "my:ext_accounts_blacklist" */ ?>
<?php
/*%%SmartyHeaderCode:96078937362f3df3ceedb64_20957985%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4641ead4d0c92b1ac0c4f92bc199497bd68cca84' => 
    array (
      0 => 'my:ext_accounts_blacklist',
      1 => 1660149564,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '96078937362f3df3ceedb64_20957985',
  'variables' => 
  array (
    'ps' => 0,
    'p' => 0,
    'frm' => 0,
    'accounts' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3df3cf20793_92287021',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3df3cf20793_92287021')) {
function content_62f3df3cf20793_92287021 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '96078937362f3df3ceedb64_20957985';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Accounts Blacklist:</h3> <form method=post> <input type=hidden name=a value=ext_accounts_blacklist> <input type=hidden name=action value=add> <table class="form nosize"> <tr> <th style="width:20%">Add Account:</th> <td><input type=text name=account value="" class=inpts></td> <td> <select name=ec class=inpts> <?php
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
" <?php if ($_smarty_tpl->tpl_vars['p']->value['selected']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </select> </td> <td><input type=submit value="Add" class=sbmt></td> </tr> </table> </form> <br> <hr> <form method=get> <input type=hidden name=a value=ext_accounts_blacklist> <table class="form nosize"> <tr> <th style="width:20%">Search Account:</td> <td><input type=text name=account value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['account'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> <td> <select name=ec class=inpts> <option value="-1">--Any--</option> <?php
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
" <?php if ($_smarty_tpl->tpl_vars['p']->value['selected']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </select> </td> <td><input type=submit value="Search" class=sbmt></form></td> </tr> </table> </form> <br> <form method=post> <input type=hidden name=a value=ext_accounts_blacklist> <input type=hidden name=action value=delete> <table class=list> <tr> <th>#</th> <th>Account</th> <th>Payment System</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td align=center><input type=checkbox name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['ec'];?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['account'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> <td align=center><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['account'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['ec_name'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr> <?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
if (!$_smarty_tpl->tpl_vars['a']->_loop) {
?> <tr> <td colspan=3 align=center>No Accounts found.</td> </tr> <?php
}
?> </table> <br> <input type=submit value="Delete" class=sbmt> </form> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>