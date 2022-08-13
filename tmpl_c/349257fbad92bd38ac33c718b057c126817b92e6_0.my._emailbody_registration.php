<?php /* Smarty version 3.1.27, created on 2022-08-12 05:05:27
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:89961185962f617d78f74c8_87140688%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1660295127,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '89961185962f617d78f74c8_87140688',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f617d78f9f72_88016578',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f617d78f9f72_88016578')) {
function content_62f617d78f9f72_88016578 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '89961185962f617d78f74c8_87140688';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>