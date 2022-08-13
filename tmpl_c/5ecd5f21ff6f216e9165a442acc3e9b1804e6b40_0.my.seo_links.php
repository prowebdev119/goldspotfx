<?php /* Smarty version 3.1.27, created on 2022-08-10 18:26:57
         compiled from "my:seo_links" */ ?>
<?php
/*%%SmartyHeaderCode:171452048162f430b1335241_36183712%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ecd5f21ff6f216e9165a442acc3e9b1804e6b40' => 
    array (
      0 => 'my:seo_links',
      1 => 1660170417,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '171452048162f430b1335241_36183712',
  'variables' => 
  array (
    'settings' => 0,
    'actions' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f430b136cba8_78722683',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f430b136cba8_78722683')) {
function content_62f430b136cba8_78722683 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '171452048162f430b1335241_36183712';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>SEO Links Replacement:</h3> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Before enable this option be sure you have configure your web server correctly.<br> For Apache web server you should place these lines to .htaccess file in the script root folder: <div style="border:dotted 1px black;padding:3px;margin:3px;background:#fff;"> RewriteEngine on <br> RewriteCond %&#123;REQUEST_FILENAME&#125; -f [OR]<br> RewriteCond %&#123;REQUEST_FILENAME&#125; -d <br> RewriteRule ^.*$ - [NC,L]<br> RewriteRule .* index.php [L]<br> </div> Be aware to replace an action code with other action code. It will makes first action unavailable. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <br> <form method=post> <input type=hidden name=a value=seo_links> <input type=hidden name=action value=save_settings> <table class="form nosize"> <tr> <th>Use SEO Links:</th> <td> <select name=seo_links class="inpts nosize" style="width:200px;"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['seo_links'] == 0) {?>selected<?php }?>>No</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['seo_links'] == 1) {?>selected<?php }?>>Yes</option> </select> <input type=submit value="Save" class=sbmt> </td> </tr> </table> </form> <br><br> <?php echo '<script'; ?>
> var acts_size = <?php echo count($_smarty_tpl->tpl_vars['actions']->value);?>
;  function check_actions() { var dacts = {}; for(i=1;i<acts_size;i++) { if (o = document.getElementById("def"+i)) { n = o.innerHTML; dacts[n] = 1; } } var vacts = {}; for(i=1;i<acts_size;i++) { if (o = document.getElementById("val"+i)) { n = o.value; if (n != "" && !n.match(/^[a-zA-Z0-9\-\_\.]+$/)) { alert("Action should not have spaces and other special chars. Alphabet characters, digits, dot, underscore and minus only. Please change."); o.focus(); return false; } if (dacts[n] == 1) { alert("You can not set default name for other action. Please change."); o.focus(); return false; } if (vacts[n] == 1) { alert("You can not set same names for several actions. Please change."); o.focus(); return false; } if (n != "") vacts[n] = 1; } } return true; }  <?php echo '</script'; ?>
> <h3>Actions:</h3> <form method=post onsubmit="return check_actions()"> <input type=hidden name=a value=seo_links> <input type=hidden name=action value=save> <table class=form> <tr> <th>Default</th> <th style="text-align:left;">Rename</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['actions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_acts'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_acts']->value['iteration']++;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?> <tr> <th id="def<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_acts']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_acts']->value['iteration'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['default'];?>
</th> <td><input type=text name="actions[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['replace'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30 id="val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_acts']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_acts']->value['iteration'] : null);?>
"></td> </tr> <?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?> <tr> <th></th> <td><input type=submit value="Save" class=sbmt></td> </tr> </table> </form> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Here you could change names of actions links.<br> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>