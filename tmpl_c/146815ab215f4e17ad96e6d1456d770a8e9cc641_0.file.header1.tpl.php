<?php /* Smarty version 3.1.27, created on 2022-08-07 14:07:10
         compiled from "/home/goldainy/public_html/tmpl/header1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:50729448862efff4e6662e4_44446377%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '146815ab215f4e17ad96e6d1456d770a8e9cc641' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/header1.tpl',
      1 => 1659885665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50729448862efff4e6662e4_44446377',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62efff4e670333_43125069',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62efff4e670333_43125069')) {
function content_62efff4e670333_43125069 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '50729448862efff4e6662e4_44446377';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset='UTF-8'>
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
    <meta name="author" content="hyip customize">
    <meta name="designer" content="hyip template" href="https://hyipcustomize.com/">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:600,700&display=swap" rel="stylesheet">
    <link rel='shortcut icon' href='design/img/favicon.png' type='image/x-icon'>
    <link rel='stylesheet' type='text/css' href='design/css/styles.min.css'>
</head>
<body>
<div class="header-acc-lower">
    <div class="numbers-acc">
        <div class="header-acc">
            <div class="wrap">
                <div class="topcontact"><a
                            href="https://t.me/" target="_blank"><img src="design/img/icon/telegram.png">Coming soon</a><a
                            href="mailto:admin@#"><img src="design/img/icon/mail.png">admin@<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</a>
                </div>
                <div class="clear"></div>
                <div class="nav">
                    <nav class="shift">
                        <ul class="menu">
                            <li><a href="?a=home">Home</a></li>
                            <li><a href="?a=cust&page=how">How to start</a></li>
                            <li><a href="?a=cust&page=about">About us</a></li>
                            <li><a href="?a=cust&page=offer">Investment offer</a></li>
                            <li><a href="?a=cust&page=affiliate">Referral program</a></li>
                            <li><a href="?a=rules">Terms</a></li>
                            <li><a href="?a=faq">Faq</a></li>
                            <li><a href="?a=support">Support</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="wrap">
                <div class="headleft"></div>
                <div style="float: right; width: 630px; color: #fff; font-size: 38px; line-height: 54px; padding-top: 90px; position: relative; z-index: 9999">
                    When it comes to the world of trading,<br>Forex trading is the reigning king.<a href="?a=logout"
                                                                                                    class="btn-green btn-logout float-right"><span>Log out<img
                                    src="design/img/icon/logout.png"></span></a></div>
                <div class="clear"></div>
                <div class="mt100">
                    <ul class="menuacc">
                        <li class="active"><a href="?a=account"><span>Account</span></a></li>
                        <li><a href="?a=deposit"><span>Make deposit</span></a></li>
                        <li><a href="?a=withdraw"><span>Withdraw</span></a></li>
                        <li><a href="?a=deposit_list"><span>Deposit list</span></a></li>
                        <li><a href="?a=earnings"><span>Earnings</span></a></li>
                        <li><a href="?a=referals"><span>Referrals</span></a></li>
                        <li><a href="?a=edit_account"><span>Settings</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
?>