<?php /* Smarty version 3.1.27, created on 2022-08-10 17:39:45
         compiled from "my:_emailbody_2fa_enabled_notification" */ ?>
<?php
/*%%SmartyHeaderCode:125254710462f425a16e6577_05682327%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6773a442977830d2c5c7264c23b478d9b881a3e5' => 
    array (
      0 => 'my:_emailbody_2fa_enabled_notification',
      1 => 1660167585,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '125254710462f425a16e6577_05682327',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f425a1747783_73869203',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f425a1747783_73869203')) {
function content_62f425a1747783_73869203 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '125254710462f425a16e6577_05682327';
?>
Hello #username#.

Two Factor Auth is enabled for your account by your request.


#site_name#
#site_url#<?php }
}
?>