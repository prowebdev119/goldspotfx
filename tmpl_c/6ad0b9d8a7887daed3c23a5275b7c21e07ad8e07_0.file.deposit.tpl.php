<?php /* Smarty version 3.1.27, created on 2022-08-12 08:03:16
         compiled from "/home/goldainy/public_html/tmpl/deposit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:86979019462f641845ec9a8_36166697%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ad0b9d8a7887daed3c23a5275b7c21e07ad8e07' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/deposit.tpl',
      1 => 1660045178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86979019462f641845ec9a8_36166697',
  'variables' => 
  array (
    'fatal' => 0,
    'qplans' => 0,
    'frm' => 0,
    'plans' => 0,
    'compounding_available' => 0,
    'currency_sign' => 0,
    'settings' => 0,
    'min_deposit' => 0,
    'ps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f641846c33b9_11411436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f641846c33b9_11411436')) {
function content_62f641846c33b9_11411436 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '86979019462f641845ec9a8_36166697';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
					
					
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">New Deposit</h2>
                            </div>
                        </div>
<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>



<?php if ($_smarty_tpl->tpl_vars['fatal']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'one_per_month') {?>
You can deposit once a month only.
<?php }?>

<?php } else { ?>


<?php echo '<script'; ?>
 language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");


  <?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?>

  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }

  <?php }?>


}

function updateCompound() {
  var id = 0;
  var tt = document.spendform.h_id.type;
  if (tt && tt.toLowerCase() == 'hidden') {
    id = document.spendform.h_id.value;
  } else {
    for (i = 0; i < document.spendform.h_id.length; i++) {
      if (document.spendform.h_id[i].checked) {
        id = document.spendform.h_id[i].value;
      }
    }
  }

  var cpObj = document.getElementById('compound_percents');
  if (cpObj) {
    while (cpObj.options.length != 0) {
      cpObj.options[0] = null;
    }
  }

  if (cps[id] && cps[id].length > 0) {
    document.getElementById('coumpond_block').style.display = '';

    for (i in cps[id]) {
      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
    }
  } else {
    document.getElementById('coumpond_block').style.display = 'none';
  }
}
var cps = {};
--><?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_success') {?>
<h1>The deposit has been successfully saved.</h1>
<br><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_saved') {?>
<h1>The deposit has been saved. It will become active when the administrator checks statistics.</h1><br><br>
<?php }?>



<form method=post name="spendform">
<input type=hidden name=a value=deposit>


  <?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?> Select a plan:<br>
<?php }?>

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
<table class="table table-opers" width="100%">
<tr style="background: linear-gradient(to right, #f2529a 0%, #2c1a56 100%);text-align: center;">
<td colspan=3>
<?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?>
	<input type=radio name=h_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
' <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['plans']['first'] == 1) && ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == '')) || ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'])) {?> checked <?php }?> onclick="updateCompound()"> 
<!--	<input type=radio name=h_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
' <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['plans']['first'] == 1) && ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == '')) || ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'])) {?> checked <?php }?> <?php if ($_smarty_tpl->tpl_vars['compounding_available']->value > 0) {?>onclick="document.spendform.compound.disabled=<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['use_compound'] == 1) {?>false<?php } else { ?>true<?php }?>;"<?php }?>> -->
<?php } else { ?>
	<input type=hidden name=h_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
'>
<?php }?>

	<b style="color: #f9fbfd;text-transform: uppercase;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['name']);?>
</b></td>
</tr><tr class="head">
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Spent Amount (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
)</td>
 <td class=inheader width=100 nowrap><nobr><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['period']);?>
 Profit (%)</nobr></td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['options'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['options']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['name'] = 'options';
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total']);
?>
<tr>
 <td class=item><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['deposit']);?>
</td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['percent']);?>
</td>
</tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_calculator']) {?>
<tr>
 <td colspan=3 align=right><a href="javascript:openCalculator('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
')">Calculate your profit &gt;&gt;</a></td>
</tr>
<?php }?>
</table><br><br>
<?php echo '<script'; ?>
>
cps[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
] = <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['compound_percents_json']);?>
;
<?php echo '</script'; ?>
>
<?php endfor; endif; ?>

<table class="table table-opers" width="100%">
<div class="form-group">
<label>Deposit Amount</label>
<input type=text name=amount value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_deposit']->value);?>
' class=inpts size=15 style="text-align:left;">
               
                </div>

<tr id="coumpond_block" style="display:none">
 <td>Compounding(%):</td>
 <td align=right>
  <select name="compound" class=inpts id="compound_percents"></select>
 </td>
</tr>

<tr>
  <td colspan=2>
   <table cellspacing=0 cellpadding=2 border=0>
   <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance'] > 0 && $_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status'] == 1) {?>                                                                                                          <tr>
     <td><input type=radio name=type value="account_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
"  style="cursor: pointer;"></td>
     <td>Spend funds from Balance <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>

<center style="float: right;"><span><img src="template/_common/images/processors/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
.jpg" alt=""style="margin-top: 0;margin-left: 50px;"></span></center>
</td>
    </tr>
	   <?php }?>
<?php endfor; endif; ?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status']) {?>
                            <tr>
     <td><input type=radio name=type value="process_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['p']['index'] == 0) {?>checked<?php }?>  style="cursor: pointer;"></td>
     <td>Spend funds from <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>

<center style="float: right;"><span><img src="template/_common/images/processors/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
.jpg" alt=""style="margin-top: 0;margin-left: 50px;"></span></center>
</td>
    </tr>
	<?php }?>
<?php endfor; endif; ?>
      </table>
  </td>
</tr>




</table>
<div class="devider" style="margin-top: 34px;"></div>
<div class="form-group text-center">
<button type="submit">Proceed</button>
                   
                </div>
</form>

<?php echo '<script'; ?>
 language=javascript>
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match(/^process_/))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
updateCompound();
<?php echo '</script'; ?>
>


<?php }?>


   </div>
        </div>
		
		<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
        <?php }
}
?>