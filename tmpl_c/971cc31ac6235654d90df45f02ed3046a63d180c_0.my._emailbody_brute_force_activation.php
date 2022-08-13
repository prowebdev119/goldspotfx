<?php /* Smarty version 3.1.27, created on 2022-08-09 08:34:53
         compiled from "my:_emailbody_brute_force_activation" */ ?>
<?php
/*%%SmartyHeaderCode:78569741762f2546d20afb2_56147654%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '971cc31ac6235654d90df45f02ed3046a63d180c' => 
    array (
      0 => 'my:_emailbody_brute_force_activation',
      1 => 1660048493,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '78569741762f2546d20afb2_56147654',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f2546d218d44_91414774',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f2546d218d44_91414774')) {
function content_62f2546d218d44_91414774 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '78569741762f2546d20afb2_56147654';
?>
Someone from IP #ip# has entered a password for your account "#username#" incorrectly #max_tries# times. System locked your accout until you activate it.

Click here to activate your account :

#site_url#?a=activate&code=#activation_code#

Thank you.
#site_name#<?php }
}
?>