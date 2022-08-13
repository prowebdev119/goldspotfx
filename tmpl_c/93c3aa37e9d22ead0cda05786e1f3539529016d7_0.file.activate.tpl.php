<?php /* Smarty version 3.1.27, created on 2022-08-09 14:01:19
         compiled from "/home/goldainy/public_html/tmpl/activate.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:78839305462f2a0efe22a81_56518801%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93c3aa37e9d22ead0cda05786e1f3539529016d7' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/activate.tpl',
      1 => 1660045178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78839305462f2a0efe22a81_56518801',
  'variables' => 
  array (
    'activated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f2a0efea1960_27345433',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f2a0efea1960_27345433')) {
function content_62f2a0efea1960_27345433 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '78839305462f2a0efe22a81_56518801';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['activated']->value == 0) {?>
<b>Account not activated</b><br><br>
Account has been already activated or you have provide invalid activation code.
Please check link you received.
<?php } else { ?>
<b>Account activated</b><br><br>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>