<?php /* Smarty version 3.1.27, created on 2022-08-12 08:03:18
         compiled from "/home/goldainy/public_html/tmpl/deposit_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:86871490462f64186876ee7_83465540%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '734c12760b23e9d0232c60184c4c218d991ea7e7' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/deposit_list.tpl',
      1 => 1660048403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86871490462f64186876ee7_83465540',
  'variables' => 
  array (
    'currency_sign' => 0,
    'total' => 0,
    'plans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f6418691c181_82613763',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f6418691c181_82613763')) {
function content_62f6418691c181_82613763 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '86871490462f64186876ee7_83465540';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Your Deposits</h2>
                            </div>
                        </div>
						
						<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>

<b>Total: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total']->value);?>
</b><br><br>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['name'] = 'plans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total']);
?>
<table cellspacing=1 cellpadding=2 border=0 width=100% class=line><tr><td class=item>
<table class="table table-opers" width="100%">
<tr style="background: linear-gradient(to right, #f2529a 0%, #2c1a56 100%);">
 <td colspan=3 align=center><b style="color: #f9fbfd;text-transform: uppercase;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['name']);?>
</b></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Amount Spent (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
)</td>
 <td class=inheader width=100 nowrap><nobr><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['period']);?>
 Profit (%)</nobr></td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['name'] = 'plan_options';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total']);
?>
<tr>
 <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['plan_options']['index']]['name']);?>
</td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['plan_options']['index']]['deposit']);?>
</td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['plan_options']['index']]['percent']);?>
</td>
</tr>
<?php endfor; endif; ?>
</table>
<br>
<table cellspacing=1 cellpadding=2 border=0 class="table table-opers" width="100%">
<?php if (!$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits']) {?>
<tr>
 <td colspan=4><b>No deposits for this plan</b></td>
</tr>           
<?php } else { ?>
<tr>
 <td colspan=4 class=inheader style="text-align:left">Your deposits:</td>
</tr>
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Amount</td>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['use_compound']) {?>
 <td class=inheader>Compounding Percent</td>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['withdraw_principal']) {?>
 <td class=inheader>Release</td>
<?php }?>
</tr>           
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['name'] = 'deposit';
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total']);
?>
<tr>
 <td align=center class=item><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['date']);?>
</b><br>Expire in <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['expire_in']);?>
 days</td>
 <td align=center class=item><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['deposit']);?>
 <img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['ec']);?>
.gif" align=absmiddle hspace=1 height=17></b></td>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['use_compound']) {?>
 <td align=center class=item align=center><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['compound']);?>
% <a href="index.php?a=change_compound&deposit=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['id']);?>
">[change]</a></td>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['withdraw_principal']) {?>
 <td align=center class=item>
  <?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['can_withdraw']) {?>
   <a href="index.php?a=withdraw_principal&deposit=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['id']);?>
">[release]</a>
  <?php } else { ?>
   <?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['pending_duration'] > 0) {?>
    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['pending_duration']);?>
 day<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['pending_duration'] > 1) {?>s<?php }?> left
   <?php } else { ?>
    not available
   <?php }?>
  <?php }?>
 </td>
<?php }?>
</tr>
<?php endfor; endif; ?>
<?php }?>
</table>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['total_deposit'] > 0 || $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['today_profit'] > 0 || $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['total_profit'] > 0) {?>
<table cellspacing=0 cellpadding=1 border=0 class="table table-opers">
<tr><td>Deposited Total:</td><td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['total_deposit']);?>
</b></td></tr>
<tr><td>Profit Today:</td><td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['today_profit']);?>
</b></td></tr>
<tr><td>Total Profit:</td><td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['total_profit']);?>
</b></td></tr>
</table>
<?php }?>
<br>
</td></tr></table>
<br>
<?php endfor; endif; ?>


<br>
</div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>