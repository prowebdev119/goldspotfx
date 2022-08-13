<?php /* Smarty version 3.1.27, created on 2022-08-09 13:38:03
         compiled from "/home/goldainy/public_html/tmpl/custom/partners.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:205752898462f29b7b88e9b2_10929458%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c892fe40829fb501a39d7edd974c14c3e051362' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/custom/partners.tpl',
      1 => 1660048403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205752898462f29b7b88e9b2_10929458',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f29b7b8a4171_27344419',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f29b7b8a4171_27344419')) {
function content_62f29b7b8a4171_27344419 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '205752898462f29b7b88e9b2_10929458';
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
                            <span>[  For Partners  ]</b></span>
                        </div>
                        <div class="main-page-content">
                            <div class="row">
                                <div class="col-md-12">
    

<div class="row">
    <div class="col-md-12 text-center">
        <img src="template/images/ref-img.png" />
    </div>
</div>

<div class="row" style="margin-top: 20px">
    <div class="col-md-6 text-justify">
        <h4>Your satisfaction with our services will not go unrewarded !</h4><br>
        <p>Tell your friends, family & acquaintances about <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 Limited and earn impressive 3-level affiliate commission for each who invest with us through your referrals. You do not need to have an active deposit before you can earn from our investment program. For first level you will receive 7% referral commission , for second level , you will receive 2% referral commission and for third level you will get 1% referral commission.</p>
        <p>So, invite your friends and gain a part of their investments ! Earn together with <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 Limited !</p>

        <div class="btn text-center"><a href="index.php?a=signup"><span>Get Started</span></a></div>

    </div>
    <div class="col-md-6">
          <ul class="ref-prog">
              <li>7<sup>%</sup></li>
              <li>2<sup>%</sup></li>
              <li>1<sup>%</sup></li>
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
</section>
<?php echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>