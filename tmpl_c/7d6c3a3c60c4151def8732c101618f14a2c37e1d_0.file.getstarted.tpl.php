<?php /* Smarty version 3.1.27, created on 2022-08-10 22:38:23
         compiled from "/home/goldainy/public_html/tmpl/custom/getstarted.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:91610856562f46b9f068049_20645882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6c3a3c60c4151def8732c101618f14a2c37e1d' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/custom/getstarted.tpl',
      1 => 1660053208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91610856562f46b9f068049_20645882',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f46b9f082345_93200245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f46b9f082345_93200245')) {
function content_62f46b9f082345_93200245 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '91610856562f46b9f068049_20645882';
echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 


<section class="main-page">
        <div class="main-page-img"></div>
        <div class="main-inset">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i></i>
                            <span>[  Get Started  ]</b></span>
                        </div>
                        <div class="main-page-content">
                            <div class="row">
                                <div class="col-md-12">
    




<div class="row">
    <div class="col-md-12">

        <div class="get-started">
            <ul>
                <li>
                    <div>
                        <div class="get-started__img">
                            1
                        </div>
                        <span>Register </span>
                        <p>
                            Click on "Register" on top of the page. Fill in all the data in the registration form to open an account in <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 Limited after verification of your email address.
                        </p>

                        <div class="btn text-center"><a href="?a=signup"><span>Register</span></a></div>

                    </div>
                </li>
                <li>
                    <div>
                        <div class="get-started__img">
                            2
                        </div>
                        <span>Create Deposit</span>
                        <p>
                            Login to member panel. Click on "New Deposit". Choose a payment system, investment plans and follow the instructions to create your deposit in <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 Limited.
                        </p>
                        <div class="btn text-center"><a href="?a=deposit"><span>New Deposit</span></a></div>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="get-started__img">
                            3
                        </div>
                        <span>Get Return</span>
                        <p>
                            Go to "Deposits" to check your running deposits. Daily interest will enter into your account balance automatically which you can withdraw anytime.
                        </p>
                        <div class="btn text-center"><a href="?a=deposit"><span>View Deposits</span></a></div>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="get-started__img">
                            4
                        </div>
                        <span>Recommend</span>
                        <p>
                            Invite your friends & acquaintances to join via your referral link which you can find in "Dashboard" page, you'll get more bonus in <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 Limited.
                        </p>
                        <div class="btn text-center"><a href="?a=login"><span>My Referrals</span></a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

    
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>