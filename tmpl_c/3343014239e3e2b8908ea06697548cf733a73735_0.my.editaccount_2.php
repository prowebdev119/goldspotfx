<?php /* Smarty version 3.1.27, created on 2022-08-12 08:10:02
         compiled from "my:editaccount_2" */ ?>
<?php
/*%%SmartyHeaderCode:43539385962f6431a8548a2_28428766%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3343014239e3e2b8908ea06697548cf733a73735' => 
    array (
      0 => 'my:editaccount_2',
      1 => 1660306202,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '43539385962f6431a8548a2_28428766',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f6431a858680_40866745',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f6431a858680_40866745')) {
function content_62f6431a858680_40866745 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '43539385962f6431a8548a2_28428766';
?>
 <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><?php }
}
?>