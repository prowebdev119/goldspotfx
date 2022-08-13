<?php /* Smarty version 3.1.27, created on 2022-08-10 12:39:53
         compiled from "my:exchange_rates" */ ?>
<?php
/*%%SmartyHeaderCode:82508102562f3df59c490b6_04258572%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42ad470e336e49151b78560a79512924f17d19cc' => 
    array (
      0 => 'my:exchange_rates',
      1 => 1660149593,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '82508102562f3df59c490b6_04258572',
  'variables' => 
  array (
    'exchange_status' => 0,
    'ec' => 0,
    'to' => 0,
    'from' => 0,
    'rates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3df59c6ba37_10718939',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3df59c6ba37_10718939')) {
function content_62f3df59c6ba37_10718939 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '82508102562f3df59c490b6_04258572';
?>
  <?php echo '<script'; ?>
 language=javascript> function to_all() { d = document.main; for (i = 0; i < d.elements.length; i++) { if (d.elements[i].name.match(/^exch/)) { d.elements[i].value = d.toall.value; } } } function set_rc() { d = document.main; for (i = 0; i < d.elements.length; i++) { if (str = d.elements[i].name.match(/^set_row_(\d+)$/)) { id = str[1]; val = d.elements[i].value; if (val != "") { for (j = 0; j < d.elements.length; j++) { re = new RegExp("^exch\["+id+"\]/",""); if (d.elements[j].name.match(re)) { d.elements[j].value = val; } } } } if (str = d.elements[i].name.match(/^set_col_(\d+)$/)) { id = str[1]; val = d.elements[i].value; if (val != "") { for (j = 0; j < d.elements.length; j++) { re = new RegExp("^exch\[\d+\]\["+id+"\]",""); if (d.elements[j].name.match(re)) { d.elements[j].value = val; } } } } } } <?php echo '</script'; ?>
>   <h3>Exchange Rates:</h3> <form method=post name=main> <input type=hidden name=a value=exchange_rates> <input type=hidden name=action value=save> <input type=checkbox name="enable_exchange" value=1 <?php if ($_smarty_tpl->tpl_vars['exchange_status']->value) {?>checked<?php }?>>Enable exchange section<br><br> <table cellspacing=0 cellpadding=0 border=0><tr><th valign=top class=title> <table cellspacing=1 cellpadding=2 border=0> <tr> <td bgcolor=#FFFFFF nowrap align=center>From / To</td> <?php
$_from = $_smarty_tpl->tpl_vars['ec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['to'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['to']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['to']->value) {
$_smarty_tpl->tpl_vars['to']->_loop = true;
$foreach_to_Sav = $_smarty_tpl->tpl_vars['to'];
?> <td bgcolor=#FFFFFF align=center><img src=images/<?php echo $_smarty_tpl->tpl_vars['to']->value['id'];?>
.gif height=17></td> <?php
$_smarty_tpl->tpl_vars['to'] = $foreach_to_Sav;
}
?> <td bgcolor=#FFFFFF align=center>Set Row</td> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['ec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['from'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['from']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['from']->value) {
$_smarty_tpl->tpl_vars['from']->_loop = true;
$foreach_from_Sav = $_smarty_tpl->tpl_vars['from'];
?> <tr> <td align=center bgcolor=#FFFFFF><img src=images/<?php echo $_smarty_tpl->tpl_vars['from']->value['id'];?>
.gif height=17></td> <?php
$_from = $_smarty_tpl->tpl_vars['ec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['to'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['to']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['to']->value) {
$_smarty_tpl->tpl_vars['to']->_loop = true;
$foreach_to_Sav = $_smarty_tpl->tpl_vars['to'];
?> <td align=center bgcolor=#FFFFFF><?php if ($_smarty_tpl->tpl_vars['from']->value['id'] != $_smarty_tpl->tpl_vars['to']->value['id']) {?><input type="text" name="exch[<?php echo $_smarty_tpl->tpl_vars['from']->value['id'];?>
][<?php echo $_smarty_tpl->tpl_vars['to']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['from']->value['id']][$_smarty_tpl->tpl_vars['to']->value['id']];?>
" size=5 class=inpts><?php } else { ?>N/A<?php }?></td> <?php
$_smarty_tpl->tpl_vars['to'] = $foreach_to_Sav;
}
?> <td align=center bgcolor=#FFFFFF><input type="text" name="set_row_<?php echo $_smarty_tpl->tpl_vars['from']->value['id'];?>
" value="" size=5 class=inpts></td> </tr> <?php
$_smarty_tpl->tpl_vars['from'] = $foreach_from_Sav;
}
?> <tr> <td bgcolor=#FFFFFF nowrap align=center>Set Col</td> <?php
$_from = $_smarty_tpl->tpl_vars['ec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['to'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['to']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['to']->value) {
$_smarty_tpl->tpl_vars['to']->_loop = true;
$foreach_to_Sav = $_smarty_tpl->tpl_vars['to'];
?> <td bgcolor=#FFFFFF align=center><input type="text" name="set_col_<?php echo $_smarty_tpl->tpl_vars['to']->value['id'];?>
" value="" size=5 class=inpts></td> <?php
$_smarty_tpl->tpl_vars['to'] = $foreach_to_Sav;
}
?> <td bgcolor=#FFFFFF align=center><input type=button value="Set" onclick="set_rc()" class=sbmt></td> </tr> </table> </td></tr></table> <br> <input type=text name="toall" value="1.00" size=5 class=inpts> <input type="button" value="Set to All" onclick="to_all()" class=sbmt> <br> <br> <input type=submit value="Update" class=sbmt> </form> <br><br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Exchange Rates:<br><br> Figures are the percents of an exchange rates.<br> Vertical column is FROM currency.<br> Horizontal row is TO currency.<br> <br> Ex: To set a percent for Payeer to Perfect Money exchange you should edit the field in the vertical column with the Payeer icon and in the row with the PM one.<br> <br> To disable an exchange set its percentage to 100. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>