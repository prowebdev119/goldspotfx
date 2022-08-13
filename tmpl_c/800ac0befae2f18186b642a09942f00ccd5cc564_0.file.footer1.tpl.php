<?php /* Smarty version 3.1.27, created on 2022-08-07 14:07:10
         compiled from "/home/goldainy/public_html/tmpl/footer1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:107884736862efff4e675888_09551700%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '800ac0befae2f18186b642a09942f00ccd5cc564' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/footer1.tpl',
      1 => 1659894424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107884736862efff4e675888_09551700',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62efff4e67abf8_26507417',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62efff4e67abf8_26507417')) {
function content_62efff4e67abf8_26507417 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '107884736862efff4e675888_09551700';
?>
<div class="footer">
    <div class="wrap">
        <div class="left">
            <a href="mailto:admin@#"><img src="design/img/icon/fmail.png">admin@<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</a>
            <a href="https://t.me/" target="_blank"><img src="design/img/icon/ftg.png">Coming soon</a>
            </div>
        <div class="right">The registration of the user on the website confirms that he agrees with the current terms of
            service, familiarized himself with these rules and undertakes to follow them in full. In case of rejection
            of the rules, disagreement with the general doctrine of the rules or any other differences of opinion, the
            user is obliged to stop the account registration and leave this website.
        </div>
    </div>
</div>
<div class="footermenu">
    <div class="wrap">
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
</div></body></html><?php }
}
?>