<?php /* Smarty version 3.1.27, created on 2022-08-12 08:10:02
         compiled from "my:editaccount_3" */ ?>
<?php
/*%%SmartyHeaderCode:11420437262f6431a85cf66_80451999%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af192f6efbb5df2bf440d8d2c10585085d3ab3c' => 
    array (
      0 => 'my:editaccount_3',
      1 => 1660306202,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '11420437262f6431a85cf66_80451999',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f6431a88fb80_87086336',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f6431a88fb80_87086336')) {
function content_62f6431a88fb80_87086336 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11420437262f6431a85cf66_80451999';
?>
 <tr> <td>Status:</td> <td><select name=status class=inpts> <option value="on" <?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == "on") {?>selected<?php }?>>Active <option value="off" <?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == "off") {?>selected<?php }?>>Disabled <option value="suspended" <?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == "suspended") {?>selected<?php }?>>Suspended</select> </td> </tr> <tr> <td colspan=2><input type=checkbox name=auto_withdraw value=1 <?php if ($_smarty_tpl->tpl_vars['user']->value['auto_withdraw'] == 1) {?>checked<?php }?>> Auto-withdrawal enabled </td> </tr><tr> <td colspan=2><input type=checkbox name=admin_auto_pay_earning value=1 <?php if ($_smarty_tpl->tpl_vars['user']->value['admin_auto_pay_earning'] == 1) {?>checked<?php }?>> Transfer earnings directly to the user's e-currency account </td> </tr> <?php if ($_smarty_tpl->tpl_vars['user']->value['sq']) {?> <tr> <td>Secret question:</td> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['sq'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr><tr> <td>Secret answer:</td> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['sa'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr> <?php }?> <tr> <td>Max daily withdraw:</td> <td><input type=text name=max_daily_withdraw value="<?php echo $_smarty_tpl->tpl_vars['user']->value['max_daily_withdraw'];?>
" class=inpts><small>set 0 to skip limits</small></td> </tr>  <?php if ($_smarty_tpl->tpl_vars['user']->value['came_from']) {?> <tr> <td>Came from:</td> <td><small><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['came_from'], ENT_QUOTES, 'UTF-8', true);?>
" target=_blank><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['came_from'], ENT_QUOTES, 'UTF-8', true);?>
</a></td> </tr> <?php }?> <tr> <td colspan=2><input type=checkbox name=reset_security value=1> Reset security settings <small>(check it if user does not receive login pin and cannot login for this reason)</small></td> </tr> <?php if ($_smarty_tpl->tpl_vars['user']->value['activation_code'] != '') {?> <tr> <td colspan=2><input type=checkbox name=activate value=1> Activate acount. User account has been blocked by Brute Force Handler feature.</td> </tr> <?php }?> <tr> <td colspan=2><input type=checkbox name=demo_acc value=1 <?php if ($_smarty_tpl->tpl_vars['user']->value['demo_acc']) {?>checked<?php }?>> Demo account</td> </tr>  <tr> <td colspan=2>Admin Note:<br> <textarea name=admin_desc style="width:300px; height: 200px" class=inpts><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['admin_desc'], ENT_QUOTES, 'UTF-8', true);?>
</textarea> </td> </tr>  <tr> <td>Admin Alternative Passphrase: </td> <td><input type=password name="alternative_passphrase" value="" class=inpts size=30></td> </tr>  <tr> <td>&nbsp; </td> <td><input type=submit value="Save changes" class=sbmt></td> </tr></table> </form>  </td><td valign=top> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Edit member:<br> You can change the user information and status here. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <br><br> <a href=?a=user_details&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
>Manage user Funds</a> </td> </tr></table> <?php }
}
?>