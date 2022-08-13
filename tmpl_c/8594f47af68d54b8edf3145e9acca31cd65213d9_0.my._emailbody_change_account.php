<?php /* Smarty version 3.1.27, created on 2022-08-10 17:55:34
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:89425537462f42956c6c356_97904651%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1660168534,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '89425537462f42956c6c356_97904651',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f42956c792f3_13679921',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f42956c792f3_13679921')) {
function content_62f42956c792f3_13679921 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '89425537462f42956c6c356_97904651';
?>
Hello #name#,

Your account data has been changed from ip #ip#


New information:

Password: #password#
E-mail address: #email#

Contact us immediately if you did not authorize this change.

Thank you.<?php }
}
?>