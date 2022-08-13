<?php /* Smarty version 3.1.27, created on 2022-08-10 17:33:22
         compiled from "my:newsletter" */ ?>
<?php
/*%%SmartyHeaderCode:69786542862f424225577a6_37075070%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b76ab5cdff577dbf9f02b67bc12bd4273bf43cc' => 
    array (
      0 => 'my:newsletter',
      1 => 1660167202,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '69786542862f424225577a6_37075070',
  'variables' => 
  array (
    'errors' => 0,
    'result' => 0,
    'stats' => 0,
    'plans' => 0,
    'p' => 0,
    'shares' => 0,
    'frm' => 0,
    'tmpl' => 0,
    'wisiwing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f424225a8bb2_54200857',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f424225a8bb2_54200857')) {
function content_62f424225a8bb2_54200857 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '69786542862f424225577a6_37075070';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Send a newsletter to users:</h3>  <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_to']) {?> <div class="alert alert-danger">Invalid Being sent to value</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['status']) {?> <div class="alert alert-success">Message has been sent. Total: <?php echo $_smarty_tpl->tpl_vars['result']->value['send_total'];?>
</div> <?php }?> <?php echo '<script'; ?>
 language=javascript> var u = Array (0, <?php echo $_smarty_tpl->tpl_vars['stats']->value['total_users'];?>
, <?php echo $_smarty_tpl->tpl_vars['stats']->value['total_active_users'];?>
, <?php echo $_smarty_tpl->tpl_vars['stats']->value['total_inactive_users'];
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>,<?php echo intval($_smarty_tpl->tpl_vars['p']->value['cnt']);
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
$_from = $_smarty_tpl->tpl_vars['shares']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>,<?php echo intval($_smarty_tpl->tpl_vars['p']->value['cnt']);
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>);  function checkform() { if (document.formb.to.selectedIndex == 0) { if (document.formb.username.value == "") { alert("Please enter a username!"); return false; } } else { return confirm("Are you sure you want to send the newsletter to "+u[document.formb.to.selectedIndex]+" users?"); } return true; } <?php echo '</script'; ?>
> <?php echo '<script'; ?>
> function send_test() { open("", "test_email", "width=300, height=100"); document.formb.target = "test_email"; document.formb.action.value = "test_email"; document.formb.submit(); document.formb.target = "_self"; document.formb.action.value = "newsletter"; } function send_mail() { open("", "send_email", "width=500, height=300"); document.formb.target = "send_email"; document.formb.submit(); } <?php echo '</script'; ?>
>  <form method=post onsubmit="return checkform();" name=formb> <input type=hidden name=a value=newsletter> <input type=hidden name=action value=newsletter> <table class=form> <tr> <th>Being sent to:</th> <td> <select name=to class=inpts> <option value=user>One user (type a username below) <option value=all>All users <option value=active>All users which have made a deposit <option value=passive>All users which haven&#39;t made a deposit <?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <option value=plan_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
>All users which have made a deposit to <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>  </select> </td> </tr> <tr> <th>Username:</th> <td><input type=text name=username value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['userinfo'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <tr> <th>Subject:</th> <td><input type=text name=subject value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['subject'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> </tr> <tr> <th>Use Presets?</th> <td> <select name=use_presets class=inpts> <option value=1 <?php if ($_smarty_tpl->tpl_vars['tmpl']->value['use_presets'] == 1) {?>selected<?php }?>>Yes</option> <option value=0 <?php if ($_smarty_tpl->tpl_vars['tmpl']->value['use_presets'] == 0) {?>selected<?php }?>>No</option> </select> </td> </tr> <tr> <th>Text Message:</th> <td><textarea name=text class=inpts rows=10><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr> <th>HTML Message:<br><input type="checkbox" name="use_html" value=1 <?php if ($_smarty_tpl->tpl_vars['frm']->value['use_html']) {?>checked<?php }?>> Use it?</th> <td> <textarea name=html class="inpts <?php if ($_smarty_tpl->tpl_vars['wisiwing']->value) {?>ckeditor<?php }?>" rows=10><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['html'], ENT_QUOTES, 'UTF-8', true);?>
</textarea> </td> </tr> <tr> <th></th> <td><input type=submit value="Send Newsletter" class=sbmt onclick="send_mail()"> <input type=button value="Send Test E-mail" class=sbmt onclick="send_test()"></td> </tr> </table> </form> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Send a newsletter:<br> This form helps you to send a newsletter to one or several users.<br> Select a user or a user group, type a subject and a message text. Click on the &#39;send newsletter&#39; button once! It may take a time for a huge list.<br><br> Personalization:<br> You can use the following variables to personalize the newsletter:<br> #name# - user&#39;s first and last name<br> #username# - user&#39;s login<br> #email# - user&#39;s e-mail address<br> #date_register# - user&#39;s registration date<br> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>