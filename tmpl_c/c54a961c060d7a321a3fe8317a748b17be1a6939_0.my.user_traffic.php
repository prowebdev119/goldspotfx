<?php /* Smarty version 3.1.27, created on 2022-08-10 18:35:09
         compiled from "my:user_traffic" */ ?>
<?php
/*%%SmartyHeaderCode:147932657862f4329de50099_97788585%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c54a961c060d7a321a3fe8317a748b17be1a6939' => 
    array (
      0 => 'my:user_traffic',
      1 => 1660170909,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '147932657862f4329de50099_97788585',
  'variables' => 
  array (
    'user' => 0,
    'frm' => 0,
    'reftraff' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f4329de968a8_36387947',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f4329de968a8_36387947')) {
function content_62f4329de968a8_36387947 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_select_date')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.html_select_date.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '147932657862f4329de50099_97788585';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>User Traffic:</h3> <table class=form> <tr> <th>Username:</th> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr> <tr> <th>Upline:</th> <td><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['upline']['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "<i>N/A</i>" : $tmp);?>
</td> </tr> <tr> <th>Direct Referrals:</th> <td>Active: <b><?php echo intval($_smarty_tpl->tpl_vars['user']->value['active_refs_num']);?>
</b> / Total: <b><?php echo intval($_smarty_tpl->tpl_vars['user']->value['refs_num']);?>
</b></td> </tr> <tr> <th>Total Commissions:</th> <td><b><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['user']->value['commissions']);?>
</b></td> </tr> </table> </form> <br><br> <form method=post> <input type="hidden" name="a" value="user_traffic"> <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"> <table class="form nosize"> <tr> <th>From:</th><td><?php echo smarty_function_html_select_date(array('prefix'=>"from_",'time'=>$_smarty_tpl->tpl_vars['frm']->value,'field_order'=>"DMY",'start_year'=>$_smarty_tpl->tpl_vars['frm']->value['start_year'],'all_extra'=>"class=\"inpts nosize\"",'month_format'=>"%m",'month_value_format'=>"%m"),$_smarty_tpl);?>
</td> <th>To:</th> <td><?php echo smarty_function_html_select_date(array('prefix'=>"to_",'time'=>$_smarty_tpl->tpl_vars['frm']->value,'field_order'=>"DMY",'start_year'=>$_smarty_tpl->tpl_vars['frm']->value['start_year'],'all_extra'=>"class=\"inpts nosize\"",'month_format'=>"%m",'month_value_format'=>"%m"),$_smarty_tpl);?>
</td> <td><input type="submit" value="Apply" class="sbmt"></td> </tr> </table> </form> <table class="list"> <tr> <th>Date</th> <th>Traffic</th> <th>Signups</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['reftraff']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td class=item align=center><?php echo $_smarty_tpl->tpl_vars['t']->value['date'];?>
</td> <td class=item align=center><?php echo $_smarty_tpl->tpl_vars['t']->value['income'];?>
</td> <td class=item align=center><?php echo $_smarty_tpl->tpl_vars['t']->value['reg'];?>
</td> </tr> <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
if (!$_smarty_tpl->tpl_vars['t']->_loop) {
?> <tr> <td align=center colspan=3>No statistics found for this period.</td> </tr> <?php
}
?> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>