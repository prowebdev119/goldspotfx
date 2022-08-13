<?php /* Smarty version 3.1.27, created on 2022-08-08 00:43:20
         compiled from "my:user_refs" */ ?>
<?php
/*%%SmartyHeaderCode:144223604062f0946818a489_80111728%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646ead2a26e21d71e951bddd80e93ed69df90a29' => 
    array (
      0 => 'my:user_refs',
      1 => 1659933800,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '144223604062f0946818a489_80111728',
  'variables' => 
  array (
    'result' => 0,
    'user' => 0,
    'refs' => 0,
    'r' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f09468251465_63708861',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f09468251465_63708861')) {
function content_62f09468251465_63708861 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '144223604062f0946818a489_80111728';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>User Referrals:</h3> <?php if ($_smarty_tpl->tpl_vars['result']->value['ref_unlinked']) {?> <div class="alert alert-success">User has been successfully unlinked.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['upline_updated']) {?> <div class="alert alert-success">Upline has been successfully updated.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['errors']['no_upline_found']) {?> <div class="alert alert-danger">Upline username has not been found.</div> <?php }?> <form method=post> <input type=hidden name=a value="user_refs"> <input type=hidden name=action value="change_upline"> <input type=hidden name=id value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"> <table class=form> <tr> <th>Username:</th> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr> <tr> <th>Upline:</th> <td><input type=text name=upline value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['upline']['username'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts style="width:70%"> <input type=submit value="Update" class=sbmt></td> </tr> <tr> <th>Direct Referrals:</th> <td>Active: <b><?php echo intval($_smarty_tpl->tpl_vars['user']->value['active_refs_num']);?>
</b> / Total: <b><?php echo intval($_smarty_tpl->tpl_vars['user']->value['refs_num']);?>
</b></td> </tr> <tr> <th>None Direct Referrals:</th> <td>Active: <b><?php echo intval($_smarty_tpl->tpl_vars['user']->value['other_active_refs_num']);?>
</b> / Total: <b><?php echo intval($_smarty_tpl->tpl_vars['user']->value['other_refs_num']);?>
</b></td> </tr> </table> </form> <br><br> <table class="list"> <tr> <th>User</th> <th>Status</th> <th>Stats</th> <th>Action</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['refs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td align=center> <a href="?a=user_details&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" target=_blank class="link username"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</a><br> <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i><br> <small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</small> </td> <td align=center><?php if ($_smarty_tpl->tpl_vars['r']->value['deposited'] > 0) {?><span class="badge-bg badge-success">Active</span><?php } else { ?><span class="badge-bg badge-info">Free</span><?php }?></td> <td> Deposit: <b><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['r']->value['deposited']);?>
</b> <?php echo smarty_function_cycle(array('name'=>"levels",'reset'=>true,'print'=>false,'values'=>"row1,row2"),$_smarty_tpl);?>
 <?php
$_from = $_smarty_tpl->tpl_vars['r']->value['stats'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?> <div class="<?php echo smarty_function_cycle(array('name'=>"levels",'values'=>"row1,row2"),$_smarty_tpl);?>
" style="padding: 1px 3px">Level <i><?php echo $_smarty_tpl->tpl_vars['s']->value['level'];?>
</i>: <b><?php echo $_smarty_tpl->tpl_vars['s']->value['cnt_active'];?>
</b> active of <b><?php echo $_smarty_tpl->tpl_vars['s']->value['cnt'];?>
</b> total</div> <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?> </td> <td align=center><a href="?a=user_refs&action=remove_ref&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
&#csrf#" class="sbmt btn-sm btn-danger" onClick="return confirm('Are you sure to delete this referral?');">unlink</a></td> </tr> <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
if (!$_smarty_tpl->tpl_vars['r']->_loop) {
?> <tr> <td coslapn=5>No referrals found</td> </tr> <?php
}
?> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>