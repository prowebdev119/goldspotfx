<?php /* Smarty version 3.1.27, created on 2022-08-12 08:10:02
         compiled from "my:editaccount" */ ?>
<?php
/*%%SmartyHeaderCode:155449083762f6431a804070_41842678%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96471ea2fb7795f0d779452ce878330dfac423bc' => 
    array (
      0 => 'my:editaccount',
      1 => 1660306202,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '155449083762f6431a804070_41842678',
  'variables' => 
  array (
    'frm' => 0,
    'user' => 0,
    'settings' => 0,
    'countries' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f6431a84bd67_32543997',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f6431a84bd67_32543997')) {
function content_62f6431a84bd67_32543997 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '155449083762f6431a804070_41842678';
?>
 <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "invalid_passphrase") {?> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <b>Error!</b><br>You Entered wrong Admin alternative password. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?> <b>Edit Member Account:</b><br> <br> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "saved") {?> User information saved<br><br> <?php }?> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "incorrect_password") {?> Please check password<br><br> <?php }?> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "incorrect_username") {?> Please check Username<br><br> <?php }?> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "incorrect_transaction_code") {?> Please check your transaction code<br><br> <?php }?>  <form method=post name="regform"> <input type=hidden name=a value="editaccount"> <input type=hidden name=action value="editaccount"> <input type=hidden name=id value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"> <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?><tr><td valign=top> <table cellspacing=0 cellpadding=2 border=0> <tr> <td>Full name:</td> <td><input type=text name=fullname value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']) {?> <tr> <td>Address:</td> <td><input type=text name=address value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <tr> <td>City:</td> <td><input type=text name=city value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['city'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <tr> <td>State:</td> <td><input type=text name=state value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['state'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <tr> <td>Zip:</td> <td><input type=text name=zip value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['zip'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr>  <tr> <td>Country:</td> <td> <select name=country class=inpts> <option value="">--SELECT--</option> <?php
$_from = $_smarty_tpl->tpl_vars['countries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?> <option <?php if ($_smarty_tpl->tpl_vars['c']->value['name'] == $_smarty_tpl->tpl_vars['user']->value['country']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?> </select> </td> </tr> <?php }?> <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_home_phone'] == 1) {?> <tr> <td>Home phone:</td> <td><input type=text name=home_phone value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['home_phone'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <?php }?> <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_cell_phone'] == 1) {?> <tr> <td>Cell phone:</td> <td><input type=text name=cell_phone value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['cell_phone'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <?php }?> <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_work_phone'] == 1) {?> <tr> <td>Work phone:</td> <td><input type=text name=work_phone value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['work_phone'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <?php }?> <tr> <td>Username:</td> <td><input type=text name=username value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <tr> <td>Password:</td> <td><input type=password name=password value="" class=inpts size=30></td> </tr><tr> <td>Retype password:</td> <td><input type=password name=password2 value="" class=inpts size=30></td> </tr> <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code'] || $_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account']) {?>  <tr> <td>Transaction Code:</td> <td><input type=password name=transaction_code value="" class=inpts size=30></td> </tr> <tr> <td>Retype Transaction Code:</td> <td><input type=password name=transaction_code2 value="" class=inpts size=30></td> </tr> <?php }
}
}
?>