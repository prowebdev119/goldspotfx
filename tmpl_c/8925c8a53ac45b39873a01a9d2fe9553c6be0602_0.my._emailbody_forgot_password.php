<?php /* Smarty version 3.1.27, created on 2022-08-10 13:22:16
         compiled from "my:_emailbody_forgot_password" */ ?>
<?php
/*%%SmartyHeaderCode:17786565762f3e948c3f159_63274504%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8925c8a53ac45b39873a01a9d2fe9553c6be0602' => 
    array (
      0 => 'my:_emailbody_forgot_password',
      1 => 1660152136,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '17786565762f3e948c3f159_63274504',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3e948c4b965_90975964',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3e948c4b965_90975964')) {
function content_62f3e948c4b965_90975964 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17786565762f3e948c3f159_63274504';
?>
Hello #name#,

Someone (most likely you) requested your username and password from the IP #ip#.
Your password has been changed!!!

You can log into our account with:

Username: #username#
Password: #password#

Hope that helps.<?php }
}
?>