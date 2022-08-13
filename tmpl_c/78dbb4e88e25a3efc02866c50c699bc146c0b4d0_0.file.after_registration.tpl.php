<?php /* Smarty version 3.1.27, created on 2022-08-12 05:05:27
         compiled from "/home/goldainy/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:203246637762f617d7f3f2c7_43943936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78dbb4e88e25a3efc02866c50c699bc146c0b4d0' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/after_registration.tpl',
      1 => 1660045178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203246637762f617d7f3f2c7_43943936',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f617d80385b9_32466515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f617d80385b9_32466515')) {
function content_62f617d80385b9_32466515 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203246637762f617d7f3f2c7_43943936';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<h3>Registration completed:</h3><br>

Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
<br>
<br>

<b>Important:</b> Do not provide your login and password to anyone!

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>