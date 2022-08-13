<?php /* Smarty version 3.1.27, created on 2022-08-08 01:28:06
         compiled from "my:custpages" */ ?>
<?php
/*%%SmartyHeaderCode:95069354962f09ee60a6450_75530214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0453ed260b409956be3e565b79b8f2e8c8e91a1b' => 
    array (
      0 => 'my:custpages',
      1 => 1659936486,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '95069354962f09ee60a6450_75530214',
  'variables' => 
  array (
    'no_custom_folder' => 0,
    'pages' => 0,
    'p' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f09ee60d2636_80947951',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f09ee60d2636_80947951')) {
function content_62f09ee60d2636_80947951 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '95069354962f09ee60a6450_75530214';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php if ($_smarty_tpl->tpl_vars['no_custom_folder']->value) {?> <div class="alert alert-danger">Please, create "tmpl/custom/" folder first!</div> <?php }?> <h3>Pages:</h3> <table class=list> <tr> <th>Page</th> <th>Allow</th> <th>Title</th> <th>Action</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td>?a=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['p']->value['allow'];?>
</td> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td> <a href="?a=custompages&action=edit&page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['p']->value['name']);?>
" class="sbmt btn-sm btn-success">EDIT</a> </td> </tr> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?> <tr><td colspan=3 align=center>No pages found</td></tr> <?php
}
?> </table> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 To create custom page you should follow the next steps:<br> <li>copy "example.tpl" file to [your_document_name].tpl (for example "aboutus.tpl" - but do not use script reserved names like "withdraw.tpl" or "deposit.tpl")</li> <li>Change content of the page with your favorite html editor</li> <li>Upload this file to your server into "tmpl/custom" directory</li> <li>Check result - <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_url'];?>
/?a=[your_document_name] <br>Example: <a href=<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_url'];?>
/?a=aboutus target=_blank><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_url'];?>
/?a=aboutus</a></li> <li>Add this link to the top menu (edit "tmpl/logo.tpl" file) or to the left menu (edit "tmpl/left.tpl" file)</li> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>