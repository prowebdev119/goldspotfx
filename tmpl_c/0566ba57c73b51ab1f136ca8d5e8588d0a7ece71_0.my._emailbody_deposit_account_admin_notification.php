<?php /* Smarty version 3.1.27, created on 2022-08-10 17:54:07
         compiled from "my:_emailbody_deposit_account_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:198829295962f428ff55bda5_40894838%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0566ba57c73b51ab1f136ca8d5e8588d0a7ece71' => 
    array (
      0 => 'my:_emailbody_deposit_account_admin_notification',
      1 => 1660168447,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '198829295962f428ff55bda5_40894838',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f428ff569007_19501735',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f428ff569007_19501735')) {
function content_62f428ff569007_19501735 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '198829295962f428ff55bda5_40894838';
?>
User #username# deposit $#amount# #currency# from account balance to #plan#.

Account: #account#
Batch: #batch#
Compound: #compound#%.
Referrers fee: $#ref_sum#<?php }
}
?>