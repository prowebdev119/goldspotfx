<?php /* Smarty version 3.1.27, created on 2022-08-11 13:19:28
         compiled from "my:_emailbody_forgot_password_confirm" */ ?>
<?php
/*%%SmartyHeaderCode:206429747062f53a20e11906_45348535%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84ab1d548fc36cfa2bc8a7ec7220b8e5bad3d3b' => 
    array (
      0 => 'my:_emailbody_forgot_password_confirm',
      1 => 1660238368,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '206429747062f53a20e11906_45348535',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f53a20e1d7c5_40767073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f53a20e1d7c5_40767073')) {
function content_62f53a20e1d7c5_40767073 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '206429747062f53a20e11906_45348535';
?>
Hello #name#,

Please confirm your reqest for password reset.

Copy and paste this link to your browser:
#site_url#/?a=forgot_password&action=confirm&c=#confirm_string#

Thank you.
#site_name#<?php }
}
?>