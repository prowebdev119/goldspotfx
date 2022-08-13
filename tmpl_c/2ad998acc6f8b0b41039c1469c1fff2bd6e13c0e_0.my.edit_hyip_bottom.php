<?php /* Smarty version 3.1.27, created on 2022-08-10 15:55:03
         compiled from "my:edit_hyip_bottom" */ ?>
<?php
/*%%SmartyHeaderCode:41468764562f40d17c0dce6_27405851%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ad998acc6f8b0b41039c1469c1fff2bd6e13c0e' => 
    array (
      0 => 'my:edit_hyip_bottom',
      1 => 1660161303,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '41468764562f40d17c0dce6_27405851',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f40d17c16b02_48444045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f40d17c16b02_48444045')) {
function content_62f40d17c16b02_48444045 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '41468764562f40d17c0dce6_27405851';
?>
 <br> <?php echo '<script'; ?>
 language=javascript> OF(); CheckCompound(); checkb(1); checkc(); checkd();checkd1(); checkrd(); <?php echo '</script'; ?>
> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Edit your package here.<br> <br> Set a name, a package duration and rates. Select a payment period.<br> <br> Earnings only on mon-fri:<br> Allow earnings only on working days.<br> <br> Allow depositing only after the user has deposited to the following package:<br> Administrator can select a 'parent' package. Then users should deposit to the parent package before depositing to the current one.<br> <br> Compounding:<br> Users can set a compounding percent while depositing. For example if one sets the 40% compounding, then the system will add 40% of earnings to the deposit, and 60% of earnings to the user's account.<br> <br> Compounding deposit amount limits:<br> Here you can limit the deposit amount for which compounding is possible.<br> <br> Compounding percents limits:<br> You can limit the compounding percent here. The range or solid values are possible to specify.<br> <br> Hold earnings at account:<br> Use this feature if you like user can withdraw earning after several days only.<br><br> Delay earnings:<br> You can set initial delay. Then user's deposits start work after specified days only <br><br> Example 1.<br> Creating a package for unlimited period with 1.2% daily:<br> Set the name, the rates, check 'no limit' in the duration field, select the 'daily' payment period, set the 'active' status.<br> Users will receive 1.2% daily for the unlimited period.<br> <br> Example 2.<br> Creating a package for 30 days with 1.3% daily:<br> Set the name, the rates, type 30 in the duration field, select the 'daily' payment period, set the 'active' status and check 'return principal'.<br> Users will receive 1.3% daily for 30 days and get their deposit back after 30 days. If they deposit $100, they will receive $100*0.013*30 + $100 (return principal) = $139.<br> <br> Example 3.<br> Creating a package for 1 year with 1.3% daily:<br> Set the name, the rates, type 365 in the package duration field, select 'daily' payment period, set 'active' status, do not check 'return principal'<br> Users will receive 1.3% daily for 1 year and will not receive his deposit after 365 days. If they deposit $100, they will receive $100*0.013*365 = $474.5.<br> <br> Example 4.<br> Creating a package for 1 month with rate 125%<br> Set the name, the rates, type 31 in the package duration field, select 'after the specified period' in the payment period field, set status 'active' and do not check 'return principal'.<br> Users will receive 125% in a month. If one deposits $100, he will receive $100*1.25 = $125.<br> <br> Example 5.<br> Creating a package for 1 month with 30% weekly rate:<br> Set the name, the rates, type 31 in the package duration field, select 'weekly' payment period, set 'active' status, do not check 'return principal'.<br> Users will receive 30% weekly. If one deposits $100, he will receive $100*0.30*4 = $120.<br> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>