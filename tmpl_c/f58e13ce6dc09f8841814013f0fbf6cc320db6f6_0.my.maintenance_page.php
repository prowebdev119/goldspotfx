<?php /* Smarty version 3.1.27, created on 2022-08-10 17:33:08
         compiled from "my:maintenance_page" */ ?>
<?php
/*%%SmartyHeaderCode:103764122162f42414326600_87844729%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58e13ce6dc09f8841814013f0fbf6cc320db6f6' => 
    array (
      0 => 'my:maintenance_page',
      1 => 1660167188,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '103764122162f42414326600_87844729',
  'variables' => 
  array (
    'frm' => 0,
    'errors' => 0,
    'setts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f4241434f213_32558013',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f4241434f213_32558013')) {
function content_62f4241434f213_32558013 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '103764122162f42414326600_87844729';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Maintenance Page:</h3> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "saved") {?> <div class="alert alert-success">Settings have been updated.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_tpl']) {?> <div class="alert alert-danger">maintenance.tpl not found in &quot;tmpl&quot; folder</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_pin']) {?> <div class="alert alert-danger">Skip PIN is required.</div> <?php }?> <form method=post> <input type=hidden name=a value="maintenance_page"> <input type=hidden name=action value="set"> <table class=form> <tr> <th>Enable Maintenance Page:</th> <td> <select name=enabled class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['setts']->value['enabled'] == 0) {?>selected<?php }?>>No</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['setts']->value['enabled'] == 1) {?>selected<?php }?>>Yes</option> </select> </td> </tr> <tr> <th>Skip Maintenance Page Pin:</th> <td> <input type=text name=pin class=inpts value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setts']->value['pin'], ENT_QUOTES, 'UTF-8', true);?>
"> </tr> <tr> <th>Maintenance Page Message:</th> <td> <textarea name=message class=inpts rows=10><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setts']->value['message'], ENT_QUOTES, 'UTF-8', true);?>
</textarea> </tr> <tr> <th></th> <td><input type=submit value="Save" class=sbmt></td> </tr> </table> </form> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 If you need close your site for maintenance you can enable this page.<br> User will see your Maintenance Message and can&apos;t open site.<br> Maintenance Pin can be used to allow you skip maintenance page and enter site if you need.<br> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>