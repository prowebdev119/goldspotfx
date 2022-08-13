<?php /* Smarty version 3.1.27, created on 2022-08-08 09:49:54
         compiled from "/home/goldainy/public_html/tmpl/index_last_withdrawals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:166832044762f114829e6a60_16598543%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55edbd63c08e6c663b8dfb4b8fd77b46c1679d1' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/index_last_withdrawals.tpl',
      1 => 1659880692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166832044762f114829e6a60_16598543',
  'variables' => 
  array (
    'settings' => 0,
    'last_withdrawals' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f114829f8fe3_65109154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f114829f8fe3_65109154')) {
function content_62f114829f8fe3_65109154 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '166832044762f114829e6a60_16598543';
if ($_smarty_tpl->tpl_vars['settings']->value['index_last_withdrawals']) {?>
<?php echo loaddata_smarty(array('name'=>"transactions",'limit'=>$_smarty_tpl->tpl_vars['settings']->value['index_last_withdrawals'],'type'=>"withdrawal",'var'=>"last_withdrawals"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['last_withdrawals']->value) {?>
<?php
$_from = $_smarty_tpl->tpl_vars['last_withdrawals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
<div class="detstatrow">
<div class="statname"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
<span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['date']);?>
</span></div>
<div class="statsumm"><img src="design/img/pay/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['ec']);?>
.png" style="width: 60px">
<span style="font-weight: 600; float: right">- <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</span>
</div></div>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
<?php }

}
}
?>