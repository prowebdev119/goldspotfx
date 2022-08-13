<?php /* Smarty version 3.1.27, created on 2022-08-12 05:05:27
         compiled from "my:_emailbody_direct_signup_notification" */ ?>
<?php
/*%%SmartyHeaderCode:136434155862f617d77133e6_18560423%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397e51cbb3180e814e23de8d4b4eeafb6cb04684' => 
    array (
      0 => 'my:_emailbody_direct_signup_notification',
      1 => 1660295127,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '136434155862f617d77133e6_18560423',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f617d7742bd6_07175479',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f617d7742bd6_07175479')) {
function content_62f617d7742bd6_07175479 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '136434155862f617d77133e6_18560423';
?>
Dear #name# (#username#)

You have a new direct signup on #site_name#
User: #ref_username#
Name: #ref_name#
E-mail: #ref_email#

Thank you.<?php }
}
?>