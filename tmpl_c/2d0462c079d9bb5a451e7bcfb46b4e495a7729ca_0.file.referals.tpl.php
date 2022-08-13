<?php /* Smarty version 3.1.27, created on 2022-08-12 08:03:27
         compiled from "/home/goldainy/public_html/tmpl/referals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64741418862f6418f9fb950_16875550%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d0462c079d9bb5a451e7bcfb46b4e495a7729ca' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/referals.tpl',
      1 => 1660045179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64741418862f6418f9fb950_16875550',
  'variables' => 
  array (
    'total_ref' => 0,
    'active_ref' => 0,
    'currency_sign' => 0,
    'commissions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f6418fa3f286_86795014',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f6418fa3f286_86795014')) {
function content_62f6418fa3f286_86795014 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '64741418862f6418f9fb950_16875550';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Your Referrals</h2>
                            </div>
                        </div>
<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>






<br>
<table class="table table-opers" width="100%">
<tr>
  <td class=item>Referrals:</td>
  <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total_ref']->value);?>
</td>
</tr><tr>
  <td class=item>Active referrals:</td>
  <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['active_ref']->value);?>
</td>
</tr><tr>
  <td class=item>Total referral commission:</td>
  <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['commissions']->value);?>
</td>
</tr>
</table>
<br><br>



</div>
        </div>
      <?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>