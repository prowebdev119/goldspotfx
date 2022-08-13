<?php /* Smarty version 3.1.27, created on 2022-08-12 08:03:33
         compiled from "/home/goldainy/public_html/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:52405086662f64195c11015_18004418%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09465360dfffca266beb18915fc71e591be10f09' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/login_redirect.tpl',
      1 => 1660045179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52405086662f64195c11015_18004418',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f64195c4dcf9_20340158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f64195c4dcf9_20340158')) {
function content_62f64195c4dcf9_20340158 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '52405086662f64195c11015_18004418';
?>
<html>
<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
">
</head>
<body>
<center>
Hello <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
<body>
</html><?php }
}
?>