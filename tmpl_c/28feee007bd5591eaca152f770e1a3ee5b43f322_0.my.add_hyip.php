<?php /* Smarty version 3.1.27, created on 2022-08-08 00:37:01
         compiled from "my:add_hyip" */ ?>
<?php
/*%%SmartyHeaderCode:91221497662f092ed5cd1f4_09263106%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28feee007bd5591eaca152f770e1a3ee5b43f322' => 
    array (
      0 => 'my:add_hyip',
      1 => 1659933421,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '91221497662f092ed5cd1f4_09263106',
  'variables' => 
  array (
    'type' => 0,
    'withdraw_principal_range' => 0,
    'wpr' => 0,
    'other_packages' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f092ed5fb4f0_35531740',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f092ed5fb4f0_35531740')) {
function content_62f092ed5fb4f0_35531740 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '91221497662f092ed5cd1f4_09263106';
?>
  <?php echo '<script'; ?>
 language=javascript> function checkform() { if (document.nform.hname.value=="") { alert("Please type HYIP name!"); document.nform.hname.focus(); return false; } return true; } <?php echo '</script'; ?>
>  <form method=post name=nform onsubmit="return checkform();"> <table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?> <tr> <td colspan=2><b>Add a New Investment Package:</b></td> </tr><tr> <td width=150><a href="javascript:alert('Enter your package name here.')" class=hlp>Package Name</a></td> <td><input type=text name=hname class=inpts size=30 value="New Package"></td> </tr> <tr> <td><a href="javascript:alert('Specify here when a user will get earning from a deposit in this package.')" class=hlp>Payment period:</a></td> <td> <select name=hperiod class=inpts onchange="CheckCompound();CalculateProfit();InitCalendar();"> <option value="d">Daily</option>  <option value="w">Weekly</option> <option value="b-w">Bi-weekly</option> <option value="m">Monthly</option> <option value="2m">Every 2 months</option> <option value="3m">Every 3 months</option> <option value="6m">Every 6 months</option> <option value="y">Yearly</option> <option value="h">Hourly</option>  <option value="endh">After the specified Hours</option> <option value="end">After the specified Days</option>  </select> </td> </tr> <tr> <td><a href="javascript:alert('Specify your package duration here. For example 30 days, 365 days, or no limit.')" class=hlp>Package Duration</a></td> <td> <input type=text name=hq_days class=inpts size=5 style="text-align:right" value="365"> in days/<a href="javascript:alert('If `Payment period` is set to `Hourly`, plan duration counts in hours')" class=hlp>hours</a> (<input type=checkbox name=hq_days_nolimit value=1 onclick="checkb()"> no limit) </td> </tr>  <tr> <td colspan=2> <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?><tr><td valign=top> <table cellspacing=0 cellpadding=2 border=0 width=360> <tr> <td colspan=3><b>Specify the Rates:</b></td> </tr><tr> <td align=center>#</td> <td align=center>Name</td> <td align=center>Min Amount</td> <td align=center>Max Amount</td> <td align=center>Percent</td> </tr><tr> <td align=center>1. <input type=checkbox name="rate_amount_active[0]" onclick="checkrates(0)" value=1 checked></td> <td align=center><input type=text name="rate_amount_name[0]" value="Plan 1" class=inpts size=10></td> <td align=center><input type=text name="rate_min_amount[0]" value="10" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_max_amount[0]" value="100" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_percent[0]" value="3.2" class=inpts size=10 style="text-align:right"></td> </tr><tr> <td align=center>2. <input type=checkbox name="rate_amount_active[1]" onclick="checkrates(1)" value=1 checked></td> <td align=center><input type=text name="rate_amount_name[1]" value="Plan 2" class=inpts size=10></td> <td align=center><input type=text name="rate_min_amount[1]" value="101" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_max_amount[1]" value="1000" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_percent[1]" value="3.3" class=inpts size=10 style="text-align:right"></td> </tr><tr> <td align=center>3. <input type=checkbox name="rate_amount_active[2]" onclick="checkrates(2)" value=1 checked></td> <td align=center><input type=text name="rate_amount_name[2]" value="Plan 3" class=inpts size=10></td> <td align=center><input type=text name="rate_min_amount[2]" value="1001" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_max_amount[2]" value="5000" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_percent[2]" value="3.4" class=inpts size=10 style="text-align:right"></td> </tr><tr> <td align=center>4. <input type=checkbox name="rate_amount_active[3]" onclick="checkrates(3)" value=1></td> <td align=center><input type=text name="rate_amount_name[3]" value="Plan 4" class=inpts size=10></td> <td align=center><input type=text name="rate_min_amount[3]" value="5001" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_max_amount[3]" value="10000" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_percent[3]" value="3.5" class=inpts size=10 style="text-align:right"></td> </tr><tr> <td align=center>5. <input type=checkbox name="rate_amount_active[4]" onclick="checkrates(4)" value=1></td> <td align=center><input type=text name="rate_amount_name[4]" value="Plan 5" class=inpts size=10></td> <td align=center><input type=text name="rate_min_amount[4]" value="10001" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_max_amount[4]" value="" class=inpts size=10 style="text-align:right"></td> <td align=center><input type=text name="rate_percent[4]" value="3.6" class=inpts size=10 style="text-align:right"></td> </tr></table> </td><td valign=top> <br><br><br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Type 0 in the max amount field if you do not want to limit your users&quot; maximal deposit amount. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> <tr> <td colspan=2><b>Description:</b></td> </tr><tr> <td colspan=2><textarea cols=80 rows=10 name=plan_description class=inpts></textarea><br><br></td> </tr>  <tr> <td><a href="javascript:alert('Users will receive earnings if the package status is active.')" class=hlp>Status</td> <td> <select name=hstatus class=inpts> <option value="on">Active <option value="off">Inactive</select> </td> </tr><tr> <td colspan=2><input type=checkbox name=hreturn_profit value=1 checked onclick="CalculateProfit();InitCalendar();"><a href="javascript:alert('You can return the principal to user account when the package is finished.')" class=hlp> Return principal after the plan completion.</a> And hold <input type=text name="hreturn_profit_percent" value="" class=inpts size=3>%</td> </tr><tr> <td colspan=2><input type=checkbox name=use_compound value=1 checked onclick="checkd();CalculateProfit();InitCalendar();"><a href="javascript:alert('You can use the compounding for this package.')" class=hlp> Use compounding</td> </tr><tr> <td> &nbsp; Compounding deposit amount limits:</td> <td><nobr>min: <input type=input name=compound_min_deposit value="" class=inpts size=6 style="text-align:right"> max: <input type=input name=compound_max_deposit value="" class=inpts size=6 style="text-align:right"> <small>set 0 to skip</small></td> </tr><tr> <td> &nbsp; Compounding percent limits:</td> <td><input type=input name=compound_percents value="0-100" class=inpts> <small>ex: 0-50,70,100</small></td> </tr><tr> <td colspan=2> &nbsp; <input type=checkbox name=compound_return value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['compound_return']) {?>checked<?php }?> class=inpts> Return compounded amount on deposit end?</td> </tr><tr> <td><input type=checkbox name=withdraw_principal value=1 onclick="checkc()"> <a href="javascript:alert('You can allow users to return principal to user account and withdraw it. You can define a fee for this transaction and minimal deposit duration.')" class=hlp>Allow principal withdrawal.</td> <td><i><small>Start duration is 0. To deny principal withdraw set 100% fee for duration.</small></i></td> </tr>  <tr> <td> &nbsp; Deposit duration (days):</td> <td> <?php
$_from = $_smarty_tpl->tpl_vars['withdraw_principal_range']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['wpr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['wpr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['wpr']->value) {
$_smarty_tpl->tpl_vars['wpr']->_loop = true;
$foreach_wpr_Sav = $_smarty_tpl->tpl_vars['wpr'];
?> <input type=input name=withdraw_principal_duration<?php echo $_smarty_tpl->tpl_vars['wpr']->value['i'];?>
 value="<?php echo $_smarty_tpl->tpl_vars['wpr']->value['duration'];?>
" class=inpts style="text-align:right" size=4> <?php
$_smarty_tpl->tpl_vars['wpr'] = $foreach_wpr_Sav;
}
?> </td> </tr><tr> <td> &nbsp; The principal withdrawal fee (%):</td> <td> <?php
$_from = $_smarty_tpl->tpl_vars['withdraw_principal_range']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['wpr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['wpr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['wpr']->value) {
$_smarty_tpl->tpl_vars['wpr']->_loop = true;
$foreach_wpr_Sav = $_smarty_tpl->tpl_vars['wpr'];
?> <input type=input name=withdraw_principal_percent<?php echo $_smarty_tpl->tpl_vars['wpr']->value['i'];?>
 value="<?php echo $_smarty_tpl->tpl_vars['wpr']->value['percent'];?>
" class=inpts style="text-align:right" size=4> <?php
$_smarty_tpl->tpl_vars['wpr'] = $foreach_wpr_Sav;
}
?> </td> </tr> <tr> <td> &nbsp; Enter the maximal deposit withdrawal duration:</td> <td><input type=input name=withdraw_principal_duration_max value="0" class=inpts> days<br><small>set 0 to skip limitation</small></td> </tr><tr> <td colspan=2><input type=checkbox name="work_week" value=1 onclick="CalculateProfit();InitCalendar();"><a href="javascript:alert('Earnings will accumulate on user accounts only on Mon-Fri. Available for daily payment plans.')" class=hlp> Earnings only on mon-fri</td> </tr> <?php if ($_smarty_tpl->tpl_vars['other_packages']->value) {?> <tr> <td colspan=2><input type=checkbox name=parentch value=1> <a href="javascript:alert('Administrator can select a \"parent\" package. Then users should deposit to parent package before depositing to this one.')" class=hlp>Allow depositing only after the user have deposited to the following package:</a> <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name=parent class=inpts><option value=0>Select <?php
$_from = $_smarty_tpl->tpl_vars['other_packages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?> <option value=<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
 <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?> </select> </td> </tr> <?php }?> <tr> <td colspan=2> Hold earnings at account for <input type=text name=hold value=0 class=inpts size=5> days after payout (set 0 for disable this feature) </td> </tr> <tr> <td colspan=2> Delay earning for <input type=text name=delay value=0 class=inpts size=5> days since deposit (set 0 for disable this feature) </td> </tr> </table> <br>  <?php echo '<script'; ?>
 language=javascript> function CheckCompound() { if (document.nform.hperiod.selectedIndex == 5) { document.nform.use_compound.disabled = true; } else { document.nform.use_compound.disabled = false; } CheckDailyPlan(); /* if (document.nform.hperiod.selectedIndex == 9) { document.getElementById("hide_reinvest_plan_complete_percent").style.display = "block"; } else { document.getElementById("hide_reinvest_plan_complete_percent").style.display = "none"; document.nform.reinvest_plan_complete_percent.value="0"; }*/ } function CheckDailyPlan() { if (document.nform.hperiod.selectedIndex == 0) { document.nform.work_week.disabled = false; } else { document.nform.work_week.disabled = true; } } function checkb(flag) { var frm = document.nform; var flg = frm.hq_days_nolimit.checked; frm.hq_days.disabled = flg; frm.hreturn_profit.disabled = flg; frm.hreturn_profit_percent.disabled = flg; if (flg) { for (i = 0;i<frm.hperiod.options.length;i++) { if (frm.hperiod.options[i].value.substr(0,3) == "end") { if (frm.hperiod.selectedIndex == i) frm.hperiod.selectedIndex = 0; frm.hperiod.options[i] = null; i--; } } } else { i = frm.hperiod.options.length; if (frm.hperiod.options[i-1].value != "end") { frm.hperiod.options[i] = new Option("After the specifeid Hours", "endh"); frm.hperiod.options[i+1] = new Option("After the specifeid Days", "end"); } } change_days_hours_label(); if (!flag) { CalculateProfit(); InitCalendar(); } } function checkc() { for (i = 0; i < 4; i++) { i = (i == 0) ? "" : i; document.nform["withdraw_principal_percent"+i].disabled = (document.nform.withdraw_principal.checked) ? false : true; document.nform["withdraw_principal_duration"+i].disabled = (document.nform.withdraw_principal.checked) ? false : true; } document.nform.withdraw_principal_duration_max.disabled = (document.nform.withdraw_principal.checked) ? false : true; } function checkd() { document.nform.compound_min_deposit.disabled = (document.nform.use_compound.checked) ? false : true; document.nform.compound_max_deposit.disabled = (document.nform.use_compound.checked) ? false : true; // document.nform.compound_min_percent.disabled = (document.nform.use_compound.checked) ? false : true;
// document.nform.compound_max_percent.disabled = (document.nform.use_compound.checked) ? false : true;
// document.nform.compound_percents_type[0].disabled = (document.nform.use_compound.checked) ? false : true;
// document.nform.compound_percents_type[1].disabled = (document.nform.use_compound.checked) ? false : true;
 document.nform.compound_percents.disabled = (document.nform.use_compound.checked) ? false : true; checkd1(); } function checkd1() { if (document.nform.use_compound.checked) { if (document.nform.compound_percents_type[0].checked) { document.nform.compound_percents.disabled = true; document.nform.compound_min_percent.disabled = false; document.nform.compound_max_percent.disabled = false; } else { document.nform.compound_percents.disabled = false; document.nform.compound_min_percent.disabled = true; document.nform.compound_max_percent.disabled = true; } } } checkb(1); checkc(); checkd();checkd1(); <?php echo '</script'; ?>
>  <br> <input type=hidden name=a value="add_hyip"> <input type=hidden name=action value="add_hyip"> <input type=submit value="Add Package" class=sbmt size=15> </form>  <?php echo '<script'; ?>
 language=javascript> function checkrates(a, flag) { document.nform.elements["rate_min_amount["+a+"]"].disabled = !document.nform.elements["rate_amount_active["+a+"]"].checked; document.nform.elements["rate_amount_name["+a+"]"].disabled = !document.nform.elements["rate_amount_active["+a+"]"].checked; document.nform.elements["rate_max_amount["+a+"]"].disabled = !document.nform.elements["rate_amount_active["+a+"]"].checked; document.nform.elements["rate_percent["+a+"]"].disabled = !document.nform.elements["rate_amount_active["+a+"]"].checked; if (!flag) { CalculateProfit(); InitCalendar(); } } checkrates(0,1); checkrates(1,1); checkrates(2,1); checkrates(3,1); checkrates(4,1); <?php echo '</script'; ?>
>  <?php }
}
?>