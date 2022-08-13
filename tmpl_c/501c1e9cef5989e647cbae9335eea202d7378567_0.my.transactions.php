<?php /* Smarty version 3.1.27, created on 2022-08-10 18:26:43
         compiled from "my:transactions" */ ?>
<?php
/*%%SmartyHeaderCode:54528644862f430a30e3804_78684698%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '501c1e9cef5989e647cbae9335eea202d7378567' => 
    array (
      0 => 'my:transactions',
      1 => 1660170403,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '54528644862f430a30e3804_78684698',
  'variables' => 
  array (
    'frm' => 0,
    'types' => 0,
    'i' => 0,
    'v' => 0,
    'ps' => 0,
    'p' => 0,
    'trans' => 0,
    't' => 0,
    'totals' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f430a3162ad6_57231232',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f430a3162ad6_57231232')) {
function content_62f430a3162ad6_57231232 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_select_date')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.html_select_date.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '54528644862f430a30e3804_78684698';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Transactions History:</h3>  <style> .trn_user a.badge { display: none; text-decoration: none; } .trn_user:hover a.badge { display: inline; } </style> <?php echo '<script'; ?>
 language=javascript> function go(p) { document.trans.p.value = p; document.trans.submit(); } <?php echo '</script'; ?>
>  <form method=post name=trans> <input type=hidden name=a value="transactions"> <input type=hidden name=userid value="<?php echo intval($_smarty_tpl->tpl_vars['frm']->value['userid']);?>
"> <input type=hidden name=p> <table class="form controls nosize"> <tr> <td> <select name=ttype class=inpts onchange="document.trans.submit()"> <option value="">All Transactions</option> <?php
$_from = $_smarty_tpl->tpl_vars['types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?> <option value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['frm']->value['ttype']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?> </select><br> <select name=ec class=inpts onchange="document.trans.submit()"> <option value=-1>All eCurrencies</option> <?php
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
?> </select> </td> <td style="text-align:right"> From: <?php echo smarty_function_html_select_date(array('prefix'=>"from_",'time'=>$_smarty_tpl->tpl_vars['frm']->value,'field_order'=>"DMY",'start_year'=>$_smarty_tpl->tpl_vars['frm']->value['start_year'],'all_extra'=>"class=\"inpts nosize\"",'month_format'=>"%m",'month_value_format'=>"%m"),$_smarty_tpl);?>
 <br> To: <?php echo smarty_function_html_select_date(array('prefix'=>"to_",'time'=>$_smarty_tpl->tpl_vars['frm']->value,'field_order'=>"DMY",'start_year'=>$_smarty_tpl->tpl_vars['frm']->value['start_year'],'all_extra'=>"class=\"inpts nosize\"",'month_format'=>"%m",'month_value_format'=>"%m"),$_smarty_tpl);?>
 </td> <td> Per Page: <select name=onpage class="inpts nosize" onchange="document.trans.submit()"> <option value=20 <?php if ($_smarty_tpl->tpl_vars['frm']->value['onpage'] == 20) {?>selected<?php }?>>20 <option value=50 <?php if ($_smarty_tpl->tpl_vars['frm']->value['onpage'] == 50) {?>selected<?php }?>>50 <option value=100 <?php if ($_smarty_tpl->tpl_vars['frm']->value['onpage'] == 100) {?>selected<?php }?>>100 </select> <br> <input type=submit value="Go" class=sbmt> <button type=submit name="action" value="csv" class=sbmt>CSV</button> </td> </tr> </table> </form> <table class="list"> <tr> <th>UserName</th> <th>Amount</th> <th>Date</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['trans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td class="trn_user"> <?php if ($_smarty_tpl->tpl_vars['t']->value['account_deleted']) {?> <s>user deleted</s> <?php } else { ?> <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</b> <a class="badge badge-danger" target="_blank" href="?a=editaccount&id=<?php echo $_smarty_tpl->tpl_vars['t']->value['user_id'];?>
">edit</a> <a class="badge badge-info" target="_blank" href="?a=user_details&id=<?php echo $_smarty_tpl->tpl_vars['t']->value['user_id'];?>
">manage</a> <?php }?><br> <small style="color:gray"><b><?php echo $_smarty_tpl->tpl_vars['t']->value['type_name'];?>
:</b> &nbsp; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</small> </td> <td nowrap align=right><b style="color:<?php if ($_smarty_tpl->tpl_vars['t']->value['flow'] == -1) {?>red<?php } elseif ($_smarty_tpl->tpl_vars['t']->value['flow'] == 1) {?>green<?php } else { ?>black<?php }?>"><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['t']->value['amount'],$_smarty_tpl->tpl_vars['t']->value['ec']);?>
</b> <img src="images/<?php echo $_smarty_tpl->tpl_vars['t']->value['ec'];?>
.gif" align=absmiddle hspace=1 height=17></td> <td align=center><small><?php echo $_smarty_tpl->tpl_vars['t']->value['d'];?>
</small></td> </tr>  <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?> <?php if ($_smarty_tpl->tpl_vars['trans']->value) {?> <tr> <td><b>Total for selected options:</b></td> <td align=right nowrap> <?php
$_from = $_smarty_tpl->tpl_vars['totals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
echo amount_smarty_fiat($_smarty_tpl->tpl_vars['t']->value['amount'],$_smarty_tpl->tpl_vars['t']->value['ec']);?>
 <img src="images/<?php echo $_smarty_tpl->tpl_vars['t']->value['ec'];?>
.gif" align=absmiddle><br><?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?> </td> <td></td> </tr> <?php }?> </table> <br> <center> <?php echo paginator(array('col'=>$_smarty_tpl->tpl_vars['pages']->value['col'],'cur'=>$_smarty_tpl->tpl_vars['pages']->value['cur'],'url'=>"javascript:go(%s)",'use_first'=>1,'use_last'=>1),$_smarty_tpl);?>
 </center> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>