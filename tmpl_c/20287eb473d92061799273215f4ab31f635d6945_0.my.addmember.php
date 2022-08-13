<?php /* Smarty version 3.1.27, created on 2022-08-12 07:54:52
         compiled from "my:addmember" */ ?>
<?php
/*%%SmartyHeaderCode:162325931062f63f8c1844d8_29441001%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20287eb473d92061799273215f4ab31f635d6945' => 
    array (
      0 => 'my:addmember',
      1 => 1660305292,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '162325931062f63f8c1844d8_29441001',
  'variables' => 
  array (
    'frm' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f63f8c1ae4a1_91558372',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f63f8c1ae4a1_91558372')) {
function content_62f63f8c1ae4a1_91558372 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '162325931062f63f8c1844d8_29441001';
?>
<b>Add A New Member Account:</b><br> <br> <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?><tr><td valign=top> <form method=post name="regform"> <input type=hidden name=a value="editaccount"> <input type=hidden name=action value="editaccount"> <input type=hidden name=id value="0"> <table cellspacing=0 cellpadding=2 border=0> <tr> <td>Status:</td> <td> <select name=status class=inpts> <option value="on" selected>Active</option> <option value="off">Disabled</option> <option value="suspended">Suspended</option> </select> </td> </tr> <tr> <td>Full name:</td> <td><input type=text name=fullname value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['fullname'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><tr> <td>Username:</td> <td><input type=text name=username value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><tr> <td>Password:</td> <td><input type=password name=password value="" class=inpts size=30></td> </tr><tr> <td>Retype password:</td> <td><input type=password name=password2 value="" class=inpts size=30></td> </tr> <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?> <tr> <td><?php echo $_smarty_tpl->tpl_vars['ps']->value['name'];?>
:</td> <td><input type=text class=inpts size=30 name="pay_account[<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['ps']->value['id']], ENT_QUOTES, 'UTF-8', true);?>
"></td> </tr> <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?> <?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?> <tr> <td><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['ps']->value['name'];?>
:</td> <td><input type=text class=inpts size=30 name="pay_account[<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['p']->value['id']][$_smarty_tpl->tpl_vars['ps']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
"></td> </tr> <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>  <tr> <td colspan=2> <input type=checkbox name=auto_withdraw value=1 checked> Auto-withdrawal enabled (if Global Auto-Withdraw enabled only) </td> </tr> <tr> <td colspan=2> <input type=checkbox name=admin_auto_pay_earning value=1> Withdraw earnings directly to the user`s account (for example PM or other) </td> </tr>  <tr> <td>Admin Alternative Passphrase: </td> <td><input type=password name="alternative_passphrase" value="" class=inpts size=30></td> </tr>  <tr> <td>&nbsp;</td> <td><input type=submit value="Save new Account" class=sbmt></td> </tr></table> </form> </td> <td valign=top> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Add a new member here. Do not forget to type a username, password, e-mail and payment accounts. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr></table><?php }
}
?>