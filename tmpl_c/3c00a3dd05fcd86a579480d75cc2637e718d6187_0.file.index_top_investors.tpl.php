<?php /* Smarty version 3.1.27, created on 2022-08-07 09:17:41
         compiled from "/home/goldainy/public_html/tmpl/index_top_investors.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:195108450562efbb75369af7_80137507%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c00a3dd05fcd86a579480d75cc2637e718d6187' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/index_top_investors.tpl',
      1 => 1442796698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195108450562efbb75369af7_80137507',
  'variables' => 
  array (
    'top_investors' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62efbb753778a4_26871330',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62efbb753778a4_26871330')) {
function content_62efbb753778a4_26871330 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '195108450562efbb75369af7_80137507';
if ($_smarty_tpl->tpl_vars['top_investors']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=2 class=title>Top Investors</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['top_investors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
<tr>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
</table>
<?php }
}
}
?>