<?php /* Smarty version 3.1.27, created on 2022-08-12 08:10:02
         compiled from "my:admin_menu" */ ?>
<?php
/*%%SmartyHeaderCode:130360417462f6431a7c44c4_28303943%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fae4a1da6a294210aff0146af5f988eb1a45a46' => 
    array (
      0 => 'my:admin_menu',
      1 => 1660306202,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '130360417462f6431a7c44c4_28303943',
  'variables' => 
  array (
    'admin_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f6431a7d4994_21059102',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f6431a7d4994_21059102')) {
function content_62f6431a7d4994_21059102 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '130360417462f6431a7c44c4_28303943';
?>
 <table cellspacing=0 cellpadding=2 border=0 width="172"> <tr> <th colspan=2><img src=images/q.gif width=1 height=3></th> </tr> <tr> <th colspan=2 class=title>Menu</th> </tr> <tr> <td class=menutxt><a href=?a=rates>Investment Packages</a></td> </tr> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['hyip']), 0);
?>
 <tr> <td class=menutxt><a href=?a=members>Members</a></td> </tr>  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['members']), 0);
?>
   <tr> <td class=menutxt>&nbsp;</td> </tr> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['transactions']), 0);
?>
  <tr> <td class=menutxt><a href=?a=exchange_rates>Exchange Rates</a></td> </tr><tr> <td class=menutxt><a href=?a=transactions&ttype=exchange>Exchange History</a></td> </tr><tr>   <tr> <td class=menutxt>&nbsp;</td> </tr> <tr> <td class=menutxt><a href=?a=settings>Settings</a></td> </tr> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['settings']), 0);
?>
 <tr> <td class=menutxt>&nbsp;</td> </tr> <tr> <td class=menutxt><a href=?a=referal>Referral Settings</a></td> </tr>  <tr> <td class=menutxt>&nbsp;</td> </tr> <tr> <td class=menutxt><a href=?a=info_box>InfoBoxes Settings</a></td> </tr> <tr> <td class=menutxt>&nbsp;</td> </tr> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['utils']), 0);
?>
 <tr> <td class=menutxt>&nbsp;</td> </tr> <tr> <td class=menutxt><a href=?a=logout>Logout</a></td> </tr> </table> <?php }
}
?>