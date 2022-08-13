<?php /* Smarty version 3.1.27, created on 2022-08-10 17:34:09
         compiled from "my:email_templates" */ ?>
<?php
/*%%SmartyHeaderCode:10652453562f42451d647c1_81952676%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c003e4f286696383e13b702090e6e5889cbfb9dd' => 
    array (
      0 => 'my:email_templates',
      1 => 1660167249,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '10652453562f42451d647c1_81952676',
  'variables' => 
  array (
    'frm' => 0,
    'emails' => 0,
    'e' => 0,
    'presets' => 0,
    'wisiwing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f42451da4801_64307848',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f42451da4801_64307848')) {
function content_62f42451da4801_64307848 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '10652453562f42451d647c1_81952676';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "presets_updated") {?> <div class="alert alert-success">Presets has been updated</div> <?php }?> <h3>Edit E-mail Templates:</h3> <form method=post> <input type=hidden name="a" value="email_templates"> <input type=hidden name="action" value="update_statuses"> <table class=list> <?php
$_from = $_smarty_tpl->tpl_vars['emails']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['e']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
$foreach_e_Sav = $_smarty_tpl->tpl_vars['e'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><input type="checkbox" name="emails[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
]" value=1 <?php if ($_smarty_tpl->tpl_vars['e']->value['status'] == 1) {?>checked<?php }?>></td> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td><a href="?a=email_templates&action=edit&type=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="sbmt btn-sm btn-success">edit</a></td> </tr> <?php
$_smarty_tpl->tpl_vars['e'] = $foreach_e_Sav;
}
?> <tr> <td colspan=2><input type=submit value="Update" class=sbmt></td> </tr> </table> </form> <h3>Template Presets</h3> <form method=post> <input type=hidden name="a" value="email_templates"> <input type=hidden name="action" value="update_presets"> <table class=form> <tr> <th>Text Header:</th> <td><textarea name=text_header class=inpts cols=100 rows=20><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['presets']->value['text_header'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr> <th>Text Footer:</th> <td><textarea name=text_footer class=inpts cols=100 rows=20><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['presets']->value['text_footer'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr> <th>HTML Header:</th> <td><textarea name=html_header class=<?php if ($_smarty_tpl->tpl_vars['wisiwing']->value) {?>ckeditor<?php } else { ?>inpts<?php }?> cols=100 rows=20><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['presets']->value['html_header'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr> <th>HTML Footer:</th> <td><textarea name=html_footer class=<?php if ($_smarty_tpl->tpl_vars['wisiwing']->value) {?>ckeditor<?php } else { ?>inpts<?php }?> cols=100 rows=20><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['presets']->value['html_footer'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr> <th></th> <td><input type=submit value="Update" class=sbmt></td> </tr> </table> </form> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>