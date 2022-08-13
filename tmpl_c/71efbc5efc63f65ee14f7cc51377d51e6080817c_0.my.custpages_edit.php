<?php /* Smarty version 3.1.27, created on 2022-08-08 00:52:05
         compiled from "my:custpages_edit" */ ?>
<?php
/*%%SmartyHeaderCode:152144955562f09675da75b8_88468633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71efbc5efc63f65ee14f7cc51377d51e6080817c' => 
    array (
      0 => 'my:custpages_edit',
      1 => 1659934325,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '152144955562f09675da75b8_88468633',
  'variables' => 
  array (
    'errors' => 0,
    'page' => 0,
    'result' => 0,
    'plans' => 0,
    'i' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f09675debfe4_95824304',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f09675debfe4_95824304')) {
function content_62f09675debfe4_95824304 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '152144955562f09675da75b8_88468633';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php if ($_smarty_tpl->tpl_vars['errors']->value['file']) {?><div class="alert alert-danger">Can not save <?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
.tpl - check system permissions</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_name']) {?><div class="alert alert-danger">Empty Page name (only a-z 0-9 - and _ allowed)</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['smarty']) {?><div class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errors']->value['smarty'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == "success") {?><div class="alert alert-success">Pages has been updated</div><?php }?> <form method=post name=custpage> <input type=hidden name=a value=custompages> <input type=hidden name=action value=edit> <input type=hidden name=action2 value=save> <input type=hidden name=page value=<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
> <table class=form> <tr> <th>Page:</th> <td><input type=text name=page value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
" class=inpts></td> </tr> <tr> <th>Title:</th> <td><input type=text name=title value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> </tr> <tr> <th>Allow:</th> <td> <select name=allow class="inpts nosize" onchange="chkAllow()"> <option value=all <?php if ($_smarty_tpl->tpl_vars['page']->value['allow'] == "all") {?>selected<?php }?>>All</option> <option value=none <?php if ($_smarty_tpl->tpl_vars['page']->value['allow'] == "none") {?>selected<?php }?>>None</option> <option value=logged <?php if ($_smarty_tpl->tpl_vars['page']->value['allow'] == "logged") {?>selected<?php }?>>Logged</option> <option value=deposit <?php if ($_smarty_tpl->tpl_vars['page']->value['allow'] == "deposit") {?>selected<?php }?>>Deposit to</option> <option value=active_deposit <?php if ($_smarty_tpl->tpl_vars['page']->value['allow'] == "active_deposit") {?>selected<?php }?>>Active Deposit to</option> </select> <div id="_allowto" style="visibility:hidden;display:inline-block;"> &nbsp; <select name=allowto class="inpts nosize"> <option value=0>Any</option> <?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?> <option value=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['page']->value['allowto'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value, ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?> </select> </div> </td> </tr>  <?php echo '<script'; ?>
> function chkAllow() { var s = document.custpage.allow; var t = document.getElementById("_allowto"); var v = s.options[s.selectedIndex].value; if (v == "deposit" || v == "active_deposit") { t.style.visibility = "visible"; } else { t.style.visibility = "hidden"; } } chkAllow(); <?php echo '</script'; ?>
> <?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"><?php echo '</script'; ?>
>
 <tr> <th>Content:</th> <td> <textarea name="content" class="inpts" id="editor1" cols=100 rows=20><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</textarea> </td> </tr> <tr> <th></th> <td><input type=submit value="Save" class=sbmt> <input type=button value="Return" class=sbmt onclick="document.location='?a=custompages'"></td> </tr> </table> </form>  <?php echo '<script'; ?>
> ClassicEditor.create(document.querySelector("#editor1"), {toolbar: [ "bold", "italic", "link", "bulletedList", "numberedList", "blockQuote", "Link","MediaEmbed"]}); <?php echo '</script'; ?>
>  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>