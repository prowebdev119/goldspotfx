<?php /* Smarty version 3.1.27, created on 2022-08-08 02:31:14
         compiled from "/home/goldainy/public_html/tmpl/custom/how.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:196060680762f0adb251ae28_75052791%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a074042891dbf237270b695d0d19a21ecd9d85d' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/custom/how.tpl',
      1 => 1659884649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196060680762f0adb251ae28_75052791',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f0adb2530cf6_98575151',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f0adb2530cf6_98575151')) {
function content_62f0adb2530cf6_98575151 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '196060680762f0adb251ae28_75052791';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="wrap"><h1 class="float-right mt40">How to start</h1>
    <div class="clear"></div>
    <div class="line float-right"></div>
    <div class="clear"></div>
    <div class="box" style="width: 600px; float: left">
        <span><h1>1. Register an account</h1><br>Becoming a member of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is as easy as ABC. To do this, please register on our website. It only takes a few minutes. To register, click on the 'SIGNUP' button, fill in the fields of the registration form with required information and then click the 'Register an account' button to complete the registration process. After account registration, you are welcome to log into your private account area. The account is designed to provide you with a secure online earning experience.<br><br></span>
    </div>
    <img src="/design/img/step/step1.jpg" style="float: right; width: 520px; margin-top: 30px">
    <div class="clear"></div>
    <a href="?a=signup" class="btn-green" style="width: 330px; float: left; margin-left: 135px"><span>Register an account</span></a>
    <div class="clear"></div>
    <div class="box" style="width: 600px; float: right"><span><h1>2. Create a deposit</h1><br>Log into your private account area using your username and password, now you can make your first investment. Visit the Deposit section, select an investment plan which is interesting for you as well as a payment system through which you will conduct all financial transactions, and enter the deposit amount. Then the system will forward you to the website of the payment system. Follow the instructions of Payment processor. When the transaction will be completed, you will automatically return to our site, and money will be credited to chosen investment plan.<br><br></span>
    </div>
    <img src="/design/img/step/step2.jpg" style="float: left; width: 520px; margin-top: 50px">
    <div class="clear"></div>
    <a href="?a=signup" class="btn-green gray" style="width: 330px; float: right; margin-right: 135px"><span>Make a deposit</span></a>
    <div class="clear"></div>
    <div class="box" style="width: 600px; float: left"><span><h1>3. Withdraw funds</h1><br>The accrued interest from your deposit will be transferred to your account in accordance with the chosen deposit plan. Interest is accrued daily or at the end of the deposit period depending on the type of investment plan. To withdraw your earnings, which are available on your account balance you need to make next: click the 'Withdraw' button, further choose payment system, type an amount, which you want to withdraw, then click on the 'Confirm' button. Now just wait for the money that was requested during the withdrawal at your electronic wallet.<br><br></span>
    </div>
    <img src="/design/img/step/step3.jpg" style="float: right; width: 520px; margin-top: 60px">
    <div class="clear"></div>
    <a href="?a=signup" class="btn-green gray" style="width: 330px; float: left; margin-left: 135px"><span>Withdraw funds</span></a>
    <div class="clear"></div>
    <h1 class="float-right mt40">About payment processors</h1>
    <div class="clear"></div>
    <div class="line float-right"></div>
    <div class="clear"></div>
    <div class="mt90">
        <div class="abouticobox howpaybox">Bitcoin<br><img src="design/img/pay/48.png"></div>
        <div class="abouttxtright">Bitcoin is an innovative payment network and a new kind of money. Bitcoin uses
            peer-to-peer technology to operate with no central authority or banks which makes it so remarkable. All
            transactions between the bitcoin users are verified by network nodes and recorded in open shared ledger
            referred to as the blockchain. A record of each transaction is shown in the log of the user as well. Through
            many of its unique properties, Bitcoin allows exciting uses that could not be covered by any previous
            payment system.
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>