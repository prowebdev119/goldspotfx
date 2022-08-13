<?php /* Smarty version 3.1.27, created on 2022-08-12 08:10:02
         compiled from "my:admin_header" */ ?>
<?php
/*%%SmartyHeaderCode:12112926762f6431a752c76_42425084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bd9534807ff7b65596065df987a8276d1411829' => 
    array (
      0 => 'my:admin_header',
      1 => 1660306202,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '12112926762f6431a752c76_42425084',
  'variables' => 
  array (
    'admin_arabic_direction' => 0,
    'settings' => 0,
    'no_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f6431a7b15c5_41428523',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f6431a7b15c5_41428523')) {
function content_62f6431a7b15c5_41428523 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12112926762f6431a752c76_42425084';
?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html <?php if ($_smarty_tpl->tpl_vars['admin_arabic_direction']->value) {?>dir="rtl"<?php }?>> <head> <title>HYIP Manager Pro. Auto-payment, mass payment included.</title> <link href="images/adminstyle.css" rel="stylesheet" type="text/css"> <?php if ($_smarty_tpl->tpl_vars['settings']->value['admin_charset']) {?> <meta http-equiv="content-type" content="text/html; charset=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['admin_charset'], ENT_QUOTES, 'UTF-8', true);?>
"> <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </head> <body bgcolor="#FFFFF2" link="#666699" vlink="#666699" alink="#666699" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">  <center> <table width="760" border="0" cellpadding="0" cellspacing="0" > <tr> <td valign=top> <table cellspacing=0 cellpadding=0 border=0 width=100<?php echo '%>';?> <tr> <td background="images/ver.gif" bgcolor=#FF8D00><img src="images/top.gif" border="0" align=left></td> <td background="images/ver.gif" bgcolor=#FF8D00 valign=bottom align=right> <span style="font-family: verdana; font-size: 12px; color: white"> <b><?php if (1 == 0) {?><img src="https://www.goldcoders.com/check.cgi?i=1&license=1&domain=<?php echo $_ENV['HTTP_HOST'];?>
&n=<?php echo $_ENV['SCRIPT_NAME'];?>
" width=1 height=1> <?php }?> 
 <div id="google_translate_element"></div> <a href=? class=toplink>Home</a> &middot;  <a href=index.php?a=logout class=toplink>Logout</a></b></span>&nbsp; &nbsp; </td> </tr> </table> </td> </tr> <tr> <td valign=top> <table cellspacing=0 cellpadding=1 border=0 width=100% bgcolor=#ff8d00> <tr> <td> <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0"> <tr bgcolor="#FFFFFF" valign="top"> <?php if (!$_smarty_tpl->tpl_vars['no_menu']->value) {?> <td width=300 align=center> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> <td bgcolor="#ff8d00" valign="top" width=1><img src=images/q.gif width=1 height=1></td> <?php }?> <td bgcolor="#FFFFFF" valign="top" width=99<?php echo '%>';?> <!-- Main: Start --> 
 <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts"> <tr> <td width=100% height=100% valign=top> <?php }
}
?>