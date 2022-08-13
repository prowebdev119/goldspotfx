<?php /* Smarty version 3.1.27, created on 2022-08-10 10:47:34
         compiled from "my:ips" */ ?>
<?php
/*%%SmartyHeaderCode:64733024162f3c5066bc121_17368164%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '550826a1b2fb01b3029cc22ad1a932538efae27b' => 
    array (
      0 => 'my:ips',
      1 => 1660142854,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '64733024162f3c5066bc121_17368164',
  'variables' => 
  array (
    'ips' => 0,
    'i' => 0,
    'u' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3c5066f07f2_13463532',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3c5066f07f2_13463532')) {
function content_62f3c5066f07f2_13463532 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.replace.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '64733024162f3c5066bc121_17368164';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  <?php echo '<script'; ?>
> function check(id) { f = document.forms["ban"].elements; for (i = 0; i < f.length;i++) { if (f[i].className == "check_"+id) { f[i].checked = !f[i].checked; } } } <?php echo '</script'; ?>
>  <h3>Check IPs for double usage:</h3> <a href="?a=check_ips" style="float:right">Switch to Classic Mode</a> <br> <form method=post name="ban"> <input type=hidden name=a value=check_ips> <input type=hidden name=mode value=2> <input type=hidden name=action value=ban_users> <table class=list> <tr> <th>User</th> <th>Upline</th> <th>Deposited</th> <th>Withdraw</th> <th>Commissions</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['ips']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?> <tr> <th colspan=5 bgcolor=#FFECB0><input type=checkbox onclick="check('<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['i']->value['ip'],".","_");?>
')"><?php echo $_smarty_tpl->tpl_vars['i']->value['ip'];?>
</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['i']->value['users'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['u'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['u']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
$foreach_u_Sav = $_smarty_tpl->tpl_vars['u'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><input type="checkbox" name="ids[<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
]" value=1 class="check_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['i']->value['ip'],".","_");?>
"> <?php echo $_smarty_tpl->tpl_vars['u']->value['username'];?>
</td> <td align=center><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['u']->value['upline'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td align=right><?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];?>
 <?php echo amount_smarty_format($_smarty_tpl->tpl_vars['u']->value['deposited']);?>
</td> <td align=right><?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];?>
 <?php echo amount_smarty_format($_smarty_tpl->tpl_vars['u']->value['withdraw']);?>
</td> <td align=right><?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];?>
 <?php echo amount_smarty_format($_smarty_tpl->tpl_vars['u']->value['commission']);?>
</td> </tr> <?php
$_smarty_tpl->tpl_vars['u'] = $foreach_u_Sav;
}
?> <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?> <tr><td colspan=5 align=center>No double usage IP found</td></tr> <?php
}
?> </table><br> <input type=submit value="Disable Selected Users" class=sbmt> </form> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>