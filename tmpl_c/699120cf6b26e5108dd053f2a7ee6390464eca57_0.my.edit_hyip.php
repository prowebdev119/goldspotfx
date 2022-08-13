<?php /* Smarty version 3.1.27, created on 2022-08-10 15:55:03
         compiled from "my:edit_hyip" */ ?>
<?php
/*%%SmartyHeaderCode:196097515662f40d17b41159_00564267%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '699120cf6b26e5108dd053f2a7ee6390464eca57' => 
    array (
      0 => 'my:edit_hyip',
      1 => 1660161303,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '196097515662f40d17b41159_00564267',
  'variables' => 
  array (
    'type' => 0,
    'rates' => 0,
    'rate' => 0,
    'withdraw_principal_range' => 0,
    'wpr' => 0,
    'other_packages' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f40d17bee615_25709720',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f40d17bee615_25709720')) {
function content_62f40d17bee615_25709720 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '196097515662f40d17b41159_00564267';
?>
 <?php echo '<script'; ?>
 language=javascript>  function OF() { change_days_hours_label(); if (document.nform.hperiod[document.nform.hperiod.selectedIndex].value == "d") { document.getElementById("tr_work_week").style.display = "inline"; } else { document.getElementById("tr_work_week").style.display = "none"; } }   function change_days_hours_label() { var frm = document.nform; if (frm.hperiod[frm.hperiod.selectedIndex].value.match(/^\d*h$/) || frm.hperiod[frm.hperiod.selectedIndex].value == "endh") { document.getElementById("duration_in_days_label").style.display = "none"; document.getElementById("duration_in_hours_label").style.display = "inline"; } else { document.getElementById("duration_in_days_label").style.display = "inline"; document.getElementById("duration_in_hours_label").style.display = "none"; } if (document.getElementById("tr_periodic_bonus")) { if (frm.hperiod[frm.hperiod.selectedIndex].value.substr(0,3) == "end") { document.getElementById("tr_periodic_bonus").style.display = "none"; } else { document.getElementById("tr_periodic_bonus").style.display = ""; } } } function checkform() { if (document.nform.hname.value=="") { alert("Please anter a HYIP name!"); document.nform.hname.focus(); return false; } return true; }  <?php echo '</script'; ?>
> <form method=post name=nform onsubmit="return checkform();"> <input type=hidden name=hyip_id value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"> <table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?> <tr> <td colspan=2 align=center><b>Edit `<?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
` Investment Package:</b></td> </tr><tr> <td width=150><a href="javascript:alert('Enter your package name here.')" class=hlp>Package Name</a></td> <td><input type=text name=hname class=inpts size=30 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></td> </tr> <tr> <td><a href="javascript:alert('Specify here when user will get earning from deposit at this package')" class=hlp>Payment period:</a></td> <td> <select name=hperiod id=hperiod class=inpts onchange="OF();CheckCompound();CalculateProfit();InitCalendar();"> <option value="d" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "d") {?>selected<?php }?>>Daily</option>  <option value="w" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "w") {?>selected<?php }?>>Weekly</option> <option value="b-w" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "b-w") {?>selected<?php }?>>Bi-weekly</option> <option value="m" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "m") {?>selected<?php }?>>Monthly</option> <option value="2m" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "2m") {?>selected<?php }?>>Every 2 months</option> <option value="3m" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "3m") {?>selected<?php }?>>Every 3 months</option> <option value="6m" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "6m") {?>selected<?php }?>>Every 6 months</option> <option value="y" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "y") {?>selected<?php }?>>Yearly</option> <option value="h" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "h") {?>selected<?php }?>>Hourly</option>  <option value="endh" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "endh") {?>selected<?php }?>>After the specified Hours</option> <option value="end" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "end") {?>selected<?php }?>>After the specified Days</option> </select> </td> </tr> <tr> <td><a href="javascript:alert('Specify your package duration here.\nFor example 30 days, 365 days, or no limit.')" class=hlp>Package Duration</a></td> <td> <input type=text name=hq_days class=inpts size=5 style="text-align:right" value=<?php echo $_smarty_tpl->tpl_vars['type']->value['q_days'];?>
>&nbsp;in&nbsp; <span id="duration_in_days_label">days</span> <span id="duration_in_hours_label"><a href="javascript:alert('If `Payment period` is set to `Hourly`, plan duration counts in hours')" class=hlp>hours</a></span> (<input type=checkbox name=hq_days_nolimit value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['q_days'] == 0) {?>checked<?php }?> onclick="checkb()"> no limit) </td> </tr> <tr> <td colspan=2><b>Specify the Rates:</b><br> <div id=solid_table_rates> <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?><tr><td valign=top> <table cellspacing=0 cellpadding=2 border=0 width=350> <tr> <td align=center><small>#</small></td> <td align=center><small>Name</small></td> <td align=center><small>Min Amount</small></td> <td align=center><small>Max Amount</small></td> <td align=center><small>Percent</small></td>  </tr> <?php
$_from = $_smarty_tpl->tpl_vars['rates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rate']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->value) {
$_smarty_tpl->tpl_vars['rate']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']++;
$foreach_rate_Sav = $_smarty_tpl->tpl_vars['rate'];
?> <tr> <td><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] : null);?>
. <input type=checkbox name="rate_amount_active[<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] : null)-1;?>
]" onclick="checkrates(<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] : null)-1;?>
)" value=1 checked></td> <td><input type=text name="rate_amount_name[<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] : null)-1;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=10></td> <td><input type=text name="rate_min_amount[<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] : null)-1;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['rate']->value['min_deposit'];?>
" class=inpts size=5 style="text-align:right"></td> <td><input type=text name="rate_max_amount[<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] : null)-1;?>
]" value="<?php if ($_smarty_tpl->tpl_vars['rate']->value['max_deposit'] == 0) {
} else {
echo $_smarty_tpl->tpl_vars['rate']->value['max_deposit'];
}?>" class=inpts size=5 style="text-align:right"></td> <td><input type=text name="rate_percent[<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] : null)-1;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['rate']->value['percent'];?>
" class=inpts size=5 style="text-align:right"></td>  </tr> <?php
$_smarty_tpl->tpl_vars['rate'] = $foreach_rate_Sav;
}
?> <?php echo '<script'; ?>
 language=javascript> for (i = <?php echo (isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] : null);?>
; i<<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] : null);?>
+5; i++) { document.write("<tr>" +"<td>"+(i+1)+". <input type=checkbox name=\"rate_amount_active["+i+"]\" onclick=\"checkrates("+i+", 1)\" value=1></td>" +"<td><input type=text name=\"rate_amount_name["+i+"]\" value=\"Plan "+(i+1)+"\" class=inpts size=10></td>" +"<td><input type=text name=\"rate_min_amount["+i+"]\" value=\"\" class=inpts size=5 style=\"text-align:right\"></td>" +"<td><input type=text name=\"rate_max_amount["+i+"]\" value=\"\" class=inpts size=5 style=\"text-align:right\"></td>" +"<td><input type=text name=\"rate_percent["+i+"]\" value=\"\" class=inpts size=5 style=\"text-align:right\"></td>"  +"</tr>"); } <?php echo '</script'; ?>
> </table> </td><td valign=top> <br><br><br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Type 0 in the max amount field if you do not want to limit your users' maximal deposit amount. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  </td> </tr></table> </div> </td> </tr> <tr id=OF_TR> <td colspan=2><div id=OF_DIV></div> </td> </tr> <tr> <td>Payment details:</td><td><a href=?a=payment_details&tid=<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
>[Edit]</a></td> </tr> <tr> <td colspan=2><b>Description:</b></td> </tr> <tr> <td colspan=2><textarea cols=80 rows=10 name=plan_description class=inpts><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['dsc'], ENT_QUOTES, 'UTF-8', true);?>
</textarea><br><br></td> </tr> <tr> <td><a href="javascript:alert('If the package is closed no users can deposit in it but all current deposits are working as usual.')" class=hlp>Closed Package</a></td> <td> <input type=checkbox name=closed value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['closed'] == 1) {?>checked<?php }?>> </td> </tr> <tr> <td><a href="javascript:alert('Users will receive earnings if the package status is active.')" class=hlp>Status</td> <td> <select name=hstatus class=inpts> <option value="on" <?php if ($_smarty_tpl->tpl_vars['type']->value['status'] == "on") {?>selected<?php }?>>Active <option value="off" <?php if ($_smarty_tpl->tpl_vars['type']->value['status'] == "off") {?>selected<?php }?>>Inactive</select> </td> </tr><tr> <td colspan=2> <input type=checkbox name=hreturn_profit value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['return_profit'] == 1) {?>checked<?php }?> onclick="CalculateProfit();InitCalendar();checkrd();"> <a href="javascript:alert('You can return the principal to user account when the package is finished.')" class=hlp>Return principal after the plan completion</a>. And hold <input type=text name="hreturn_profit_percent" value="<?php echo $_smarty_tpl->tpl_vars['type']->value['return_profit_percent'];?>
" class=inpts size=3>%  </td> </tr><tr id=tr_compouding1> <td colspan=2><input type=checkbox name=use_compound value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['use_compound'] == 1) {?>checked<?php }?> onclick="checkd();CalculateProfit();InitCalendar();"> <a href="javascript:alert('You can use the compounding for this package.')" class=hlp>Use compounding</td> </tr><tr id=tr_compouding2> <td> &nbsp; Compounding deposit amount limits:</td> <td><nobr>min: <input type=input name=compound_min_deposit value="0.00" class=inpts size=6 style='text-align:right'> max: <input type=input name=compound_max_deposit value="0.00" class=inpts size=6 style="text-align:right"> <small>set 0 to skip</small></td> </tr><tr id=tr_compouding3> <td> &nbsp; Compounding percent limits:</td> <td><input type=input name=compound_percents value="<?php echo $_smarty_tpl->tpl_vars['type']->value['compound_percents'];?>
" class=inpts> <small>ex: 0-50,70,100</small></td> </tr><tr id=tr_compouding4> <td colspan=2> &nbsp; <input type=checkbox name=compound_return value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['compound_return']) {?>checked<?php }?> class=inpts> Return compounded amount on deposit end?</td> </tr> <tr> <td><input type=checkbox name=withdraw_principal value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['withdraw_principal'] == 1) {?>checked<?php }?> onclick="checkc()"> <a href="javascript:alert('You can allow users to return principal to user account and withdraw it. You can define a fee for this transaction and minimal deposit duration.')" class=hlp>Allow principal withdrawal.</td> <td><i><small>Start duration is 0. To deny principal withdraw set 100% fee for duration.</small></i></td> </tr> <tr> <td colspan=2> &nbsp; <input type=checkbox name=withdraw_principal_full value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['data']['withdraw_principal_full'] == 1) {?>checked<?php }?> onclick="checkc()"> <a href="javascript:alert('You can allow users to return principal to user account and withdraw it. You can define a fee for this transaction and minimal deposit duration.')" class=hlp>Allow only full principal withdrawal.</td> </tr>  <tr> <td> &nbsp; Deposit duration (days):</td> <td> <?php
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
?> </td> </tr> <tr> <td> &nbsp; Maximal deposit withdrawal duration:<br></td> <td><input type=input name=withdraw_principal_duration_max value="<?php echo $_smarty_tpl->tpl_vars['type']->value['withdraw_principal_duration_max'];?>
" class=inpts style="text-align:right"> days<br><small>set 0 to skip limitation</small></td> </tr> <tr id="tr_work_week"> <td colspan=2><input type=checkbox name="work_week" value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['work_week'] == 1) {?>checked<?php }?> onclick="CalculateProfit();InitCalendar();"> <a href="javascript:alert('Earnings will accumulate on user accounts only on Mon-Fri. Available for daily payment plans.')" class=hlp>Earnings only on mon-fri</td> </tr> <?php if ($_smarty_tpl->tpl_vars['other_packages']->value) {?> <tr> <td colspan=2><input type=checkbox name=parentch value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['parent'] != 0) {?>checked<?php }?>> <a href="javascript:alert('Administrator can select a \"parent\" package. Then users should deposit to parent package before depositing to this one.')" class=hlp>Allow depositing only after the user have deposited to the following package:</a> <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name=parent class=inpts><option value=0>Select <?php
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
 <?php if ($_smarty_tpl->tpl_vars['type']->value['parent'] == $_smarty_tpl->tpl_vars['package']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
 <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?> </select> </td> </tr> <?php }?>  <tr id="tr_hold_earnigs"> <td colspan=2> Hold earnings on account for <input type=text name=hold value="<?php echo $_smarty_tpl->tpl_vars['type']->value['hold'];?>
" class=inpts size=5 style="text-align:right"> days after payout (set 0 to disable this feature) </td> </tr> <tr id="tr_delay_earnigs"> <td colspan=2> Delay earning for <input type=text name=delay value="<?php echo $_smarty_tpl->tpl_vars['type']->value['delay'];?>
" class=inpts size=5 onchange="CheckCompound();CalculateProfit();InitCalendar();" style="text-align:right"> days since deposit (set 0 to disable this feature) </td> </tr> <tr> <td colspan=2> Limit deposits number to <input type=text name=deposits_limit_num value="<?php echo $_smarty_tpl->tpl_vars['type']->value['deposits_limit_num'];?>
" class=inpts size=5 style="text-align:right"> deposits (for one user). </td> </tr> <tr> <td colspan=2><input type=checkbox name=allow_internal_deps value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['allow_internal_deps'] == 1) {?>checked<?php }?>>Accept deposits from account balance</td> </tr> <tr> <td colspan=2><input type=checkbox name=allow_external_deps value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['allow_external_deps'] == 1) {?>checked<?php }?>>Accept deposits from payment processings</td> </tr> </table> <br>  <?php echo '<script'; ?>
 language=javascript> function CheckCompound() { var e = document.getElementById("hperiod"); var period_str = e.options[e.selectedIndex].value; if ((period_str == "end")||(period_str == "endh")) { document.nform.use_compound.disabled = true; document.nform.compound_return.disabled = true; document.getElementById("tr_compouding1").style.display = "none"; document.getElementById("tr_compouding2").style.display = "none"; document.getElementById("tr_compouding3").style.display = "none"; document.getElementById("tr_compouding4").style.display = "none"; document.getElementById("tr_delay_earnigs").style.display = "none"; } else { document.nform.use_compound.disabled = false; document.nform.compound_return.disabled = false; document.getElementById("tr_compouding1").style.display = "table-row"; document.getElementById("tr_compouding2").style.display = "table-row"; document.getElementById("tr_compouding3").style.display = "table-row"; document.getElementById("tr_compouding4").style.display = "table-row"; document.getElementById("tr_delay_earnigs").style.display = "table-row"; } CheckDailyPlan(); } function CheckDailyPlan() { if (document.nform.hperiod.selectedIndex == 0) { document.nform.work_week.disabled = false; } else { document.nform.work_week.disabled = true; } } function checkb(flag) { var frm = document.nform; var flg = frm.hq_days_nolimit.checked; frm.hq_days.disabled = flg; frm.hreturn_profit.disabled = flg; frm.hreturn_profit_percent.disabled = flg; if (flg) { for (i = 0;i<frm.hperiod.options.length;i++) { if (frm.hperiod.options[i].value.substr(0,3) == "end") { if (frm.hperiod.selectedIndex == i) frm.hperiod.selectedIndex = 0; frm.hperiod.options[i] = null; i--; } } } else { i = frm.hperiod.options.length; if (frm.hperiod.options[i-1].value != "end") { frm.hperiod.options[i] = new Option("After the specifeid Hours", "endh"); frm.hperiod.options[i+1] = new Option("After the specifeid Days", "end"); } } change_days_hours_label(); if (!flag) { CalculateProfit(); InitCalendar(); } } function checkc() { for (i = 0; i < 4; i++) { document.nform["withdraw_principal_percent"+i].disabled = (document.nform.withdraw_principal.checked) ? false : true; document.nform["withdraw_principal_duration"+i].disabled = (document.nform.withdraw_principal.checked) ? false : true; } document.nform.withdraw_principal_duration_max.disabled = (document.nform.withdraw_principal.checked) ? false : true; document.nform.withdraw_principal_full.disabled = (document.nform.withdraw_principal.checked) ? false : true; } function checkd() { document.nform.compound_min_deposit.disabled = (document.nform.use_compound.checked) ? false : true; document.nform.compound_max_deposit.disabled = (document.nform.use_compound.checked) ? false : true; document.nform.compound_percents.disabled = (document.nform.use_compound.checked) ? false : true; checkd1(); } function checkd1() { if (document.nform.use_compound.checked) { document.nform.compound_percents.disabled = false; } } function checkrd() { if (document.nform.move_to_plan) { var sts = document.nform.hreturn_profit.checked ? false : true; document.nform.move_to_planch.disabled = sts; document.nform.move_to_plan.disabled = sts; document.nform.move_to_plan_perc.disabled = sts; } }  <?php echo '</script'; ?>
> <br> <input type=hidden name=a value="edit_hyip"> <input type=hidden name=action value="edit_hyip"> <input type=submit value="Save Changes" class=sbmt size=15> </form> <?php echo '<script'; ?>
 language=javascript>  function checkrates(a, flag) { document.nform.elements["rate_min_amount["+a+"]"].disabled = !document.nform.elements["rate_amount_active["+a+"]"].checked; document.nform.elements["rate_amount_name["+a+"]"].disabled = !document.nform.elements["rate_amount_active["+a+"]"].checked; document.nform.elements["rate_max_amount["+a+"]"].disabled = !document.nform.elements["rate_amount_active["+a+"]"].checked; document.nform.elements["rate_percent["+a+"]"].disabled = !document.nform.elements["rate_amount_active["+a+"]"].checked; if (!flag) { CalculateProfit(); InitCalendar(); } } for (i = 0; i<1000; i++) { if (document.nform.elements["rate_amount_name["+i+"]"] != null) { checkrates(i, 1); } else { break; } }  <?php echo '</script'; ?>
> <?php }
}
?>