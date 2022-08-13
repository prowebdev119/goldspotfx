<?php /* Smarty version 3.1.27, created on 2022-08-10 12:39:21
         compiled from "my:top_referral_earnings" */ ?>
<?php
/*%%SmartyHeaderCode:159393638962f3df39b56d29_84646428%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '008c1abd121f90810b859277c9eeaec768d83b1a' => 
    array (
      0 => 'my:top_referral_earnings',
      1 => 1660149561,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '159393638962f3df39b56d29_84646428',
  'variables' => 
  array (
    'ps' => 0,
    'p' => 0,
    'frm' => 0,
    'multi_levels' => 0,
    'refs' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3df39b99925_02847794',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3df39b99925_02847794')) {
function content_62f3df39b99925_02847794 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_select_date')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.html_select_date.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '159393638962f3df39b56d29_84646428';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Top Referral Earnings:</h3> <form method=post name=trans> <input type=hidden name=a value=top_referral_earnings> <table class="form nosize"> <tr> <td> <select name=ec class=inpts> <option value=-1>All eCurrencies</option> <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <option value=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['id'] == $_smarty_tpl->tpl_vars['frm']->value['ec']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </select> <br> <input type=text name=onpage value="<?php echo intval($_smarty_tpl->tpl_vars['frm']->value['onpage']);?>
" class="inpts nosize" size=4 style="text-align: right"> top members <?php if ($_smarty_tpl->tpl_vars['multi_levels']->value) {?> <br> <input type=radio name=lvls value=0 <?php if ($_smarty_tpl->tpl_vars['frm']->value['lvls'] == 0) {?>checked<?php }?>>1st Lvl</option> <input type=radio name=lvls value=10 <?php if ($_smarty_tpl->tpl_vars['frm']->value['lvls'] == 10) {?>checked<?php }?>>All Lvl</option> <?php }?> </td> <td style="text-align:right"> From: <?php echo smarty_function_html_select_date(array('prefix'=>"from_",'time'=>$_smarty_tpl->tpl_vars['frm']->value,'field_order'=>"DMY",'start_year'=>$_smarty_tpl->tpl_vars['frm']->value['start_year'],'all_extra'=>"class=\"inpts nosize\"",'month_format'=>"%m",'month_value_format'=>"%m"),$_smarty_tpl);?>
 <br> To: <?php echo smarty_function_html_select_date(array('prefix'=>"to_",'time'=>$_smarty_tpl->tpl_vars['frm']->value,'field_order'=>"DMY",'start_year'=>$_smarty_tpl->tpl_vars['frm']->value['start_year'],'all_extra'=>"class=\"inpts nosize\"",'month_format'=>"%m",'month_value_format'=>"%m"),$_smarty_tpl);?>
 </td> <td> <input type=submit value="Go" class=sbmt> </td> </tr> </table> </form> <br><br> <table class=list> <tr> <th>Username</th> <th>Amount</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['refs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?> <tr class=<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td width=200 align=right><b><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['r']->value['amount']);?>
</b></td> </tr> <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
if (!$_smarty_tpl->tpl_vars['r']->_loop) {
?> <tr> <td colspan=2 align=center>No records found</td> </tr> <?php
}
?> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>