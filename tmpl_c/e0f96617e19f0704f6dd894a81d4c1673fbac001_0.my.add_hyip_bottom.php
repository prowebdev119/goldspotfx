<?php /* Smarty version 3.1.27, created on 2022-08-08 00:37:01
         compiled from "my:add_hyip_bottom" */ ?>
<?php
/*%%SmartyHeaderCode:10139583662f092ed6143e8_68368808%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f96617e19f0704f6dd894a81d4c1673fbac001' => 
    array (
      0 => 'my:add_hyip_bottom',
      1 => 1659933421,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '10139583662f092ed6143e8_68368808',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f092ed61c994_46489667',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f092ed61c994_46489667')) {
function content_62f092ed61c994_46489667 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10139583662f092ed6143e8_68368808';
?>
 <br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Create your package.<br><br> Set a name, a package duration, and rates. Select a payment period.<br> <br> Compounding:<br> Users can set a compounding percent while depositing. For example if one sets the 40% compounding, then the system will add 40% of earnings to the deposit, and 60% of earnings to the user&quot;s account.<br><br> Compounding deposit amount limits:<br> Here you can limit the deposit amount for which compounding is possible.<br> <br> Compounding percents limits:<br> You can limit the compounding percent here. The range or solid values are possible to specify.<br><br> Example 1.<br> Creating a package for unlimited period with 1.2% daily:<br> Set the name, the rates, check "no limit" in the duration field, select the "daily" payment period, set the "active" status.<br> Users will receive 1.2% daily for the unlimited period.<br> <br> Example 2.<br> Creating a package for 30 days with 1.3% daily:<br> Set the name, the rates, type 30 in the duration field, select the "daily" payment period, set the "active" status and check "return principal".<br> Users will receive 1.3% daily for 30 days and get their deposit back after 30 days. If they deposit $100, they will receive $100*0.013*30 + $100 (return principal) = $139.<br> <br> Example 3.<br> Creating a package for 1 year with 1.3% daily:<br> Set the name, the rates, type 365 in the package duration field, select "daily" payment period, set "active" status, do not check "return principal"<br> Users will receive 1.3% daily for 1 year and will not receive his deposit after 365 days. If they deposit $100, they will receive $100*0.013*365 = $474.5.<br> <br> Example 4.<br> Creating a package for 1 month with rate 125%<br> Set the name, the rates, type 31 in the package duration field, select "after specified period" in the payment period field, set status "active" and do not check "return principal".<br> Users will receive 125% in a month. If one deposits $100, he will receive $100*1.25 = $125.<br> <br> Example 5.<br> Creating a package for 1 month with 30% weekly rate:<br> Set the name, the rates, type 31 in the package duration field, select "weekly" payment period, set "active" status, do not check "return principal".<br> Users will receive 30% weekly. If one deposits $100, he will receive $100*0.30*4 = $120.<br> <br> <br> Do the following if you need to create more than 5 plans:<br> Fill all 5 plans, click "save" button, find this package in a package list and edit it. You will be able add the additional plans. (You can create unlimited number of plans in this way). <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>