<?php /* Smarty version 3.1.27, created on 2022-08-11 11:37:58
         compiled from "my:processings" */ ?>
<?php
/*%%SmartyHeaderCode:205719670462f52256a2d5b7_50816938%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f72a39d6ec945ca151ec1e7144330143d76850' => 
    array (
      0 => 'my:processings',
      1 => 1660232278,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '205719670462f52256a2d5b7_50816938',
  'variables' => 
  array (
    'processings' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f52256a5c8e0_76216259',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f52256a5c8e0_76216259')) {
function content_62f52256a5c8e0_76216259 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205719670462f52256a2d5b7_50816938';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Processings:</h3> <table class=list> <tr> <th>Name</th> <th>Icon</th> <th>Actions</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['processings']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <tr> <td><span <?php if ($_smarty_tpl->tpl_vars['p']->value['status']) {?>style="font-weight:bold"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['p']->value['lang']) {?> (<?php echo $_smarty_tpl->tpl_vars['p']->value['lang'];?>
)<?php }?></td> <td align=center><img src="images/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
.gif" alt="Upload image &quot;<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
.gif&quot; to &quot;images&quot; folder" height=17></td> <td nowrap> <a href="?a=processings&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class="sbmt btn-sm btn-info">edit</a> <?php if ($_smarty_tpl->tpl_vars['p']->value['manual'] && $_smarty_tpl->tpl_vars['p']->value['balance'] == 0) {?> <a href="?a=processings&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
&#csrf#" onclick="return confirm('Do you really want to delete &quot;<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
&quot; processing?')" class="sbmt btn-sm btn-danger">delete</a></td> <?php }?> </tr> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </table> <br> <input type="button" value="Add Processing" class="btn btn-success sbmt" onclick="document.location='?a=processings&action=edit&id=0'"> <br><br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 You can add or edit any payment processing in this section by clicking the "edit" or "add new" link. You should provide the full instructions for a user to know how to make a deposit using the specified payment system.<br><br> Any processing you add can't allow users to deposit just by themselves. The administrator has to approve or delete any transaction and process all the users' withdrawal requests manually. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>