<?php /* Smarty version 3.1.27, created on 2022-08-08 02:30:51
         compiled from "/home/goldainy/public_html/tmpl/custom/affiliate.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:176209569362f0ad9b9a4351_85066281%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78af2cbb7369900b936986ee96aa2de43afeb52b' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/custom/affiliate.tpl',
      1 => 1659887994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176209569362f0ad9b9a4351_85066281',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f0ad9b9cfab9_18122638',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f0ad9b9cfab9_18122638')) {
function content_62f0ad9b9cfab9_18122638 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '176209569362f0ad9b9a4351_85066281';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="wrap"></div>
<div class="wrap mt70 text-justify"><h1><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 affiliate program</h1>
    <div class="line"></div>
    Through our Referral Program, we reward those who are helping us to build the dynamic community. Any registered
    project member can join our Referral Program and get a bonus on attracting deposits, using own affiliate link.
    According to the referral program, we offer one level of affiliate structure: for every deposit of personally
    invited member (referral) you will get referral bonus of 5% of the amount for level 1, 3% for level 2 and 2% of
    level 3 respectively of the deposit provided by your referral. You can post affiliate links and promotional
    materials in social networks, on forums, and other websites for attracting members to your partnership team. Use
    opportunities of the Referral Program and increase your income!
</div>
<div class="refbg">
    <div class="wrap">
        <div class="left"><img src="design/img/icon/ref.png"><span>Standard Commission</span>According to the referral
            program, we offer one level of affiliate structure: for every deposit of personally invited member
            (referral) you will get referral bonus of 5% of the amount of the deposit provided by your referral.
            <div>5%</div>
        </div>
        <div class="right"><img src="design/img/icon/rep.png"><span>Representative Commission</span>Become a
            representative permanently for <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 and earn a higher share of referrals commission you
            add. To become a representative you need to Register -> Login -> Apply for Representative
            <div>8%</div>
            <center><a href="?a=signup" class="btn-blue mt70"><span>Join our affiliate program</span></a></center>
        </div>
    </div>
</div>
<div lang="wrap"><br><br>
    <div class="wrap margin-top-90" id="banners"><h1>Promotional materials</h1>
        <div class="line"></div>
        <div class="clear"></div>
        <div id="tabs-1" class="banner-res-box">
            <center>
                <div class="banner-res-box-skew">
                    <div class="bannersize">Banner 728x90</div>
                    <span style="padding: 25px; display: block; width: 798px"><img
                                src="banners/728x90.gif"></span><input value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/banners/728x90.gif"
                                                                       readonly onclick="this.focus();this.select()"
                                                                       type="text" class="bannerurl"></div>
            </center>
        </div><!-- -->
        <div id="tabs-2" class="banner-res-box">
            <center>
                <div class="banner-res-box-skew">
                    <div class="bannersize">Banner 468x60</div>
                    <span style="padding: 25px; display: block; width: 538px"><img
                                src="banners/468x60.gif"></span><input value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/banners/468x60.gif"
                                                                       readonly onclick="this.focus();this.select()"
                                                                       type="text" class="bannerurl"></div>
            </center>
        </div><!-- -->
        <div id="tabs-3" class="banner-res-box">
            <center>
                <div class="banner-res-box-skew">
                    <div class="bannersize">Banner 160x600</div>
                    <span style="padding: 25px; display: block; width: 230px"><img
                                src="banners/160x600.gif"></span><input value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/banners/160x600.gif"
                                                                        readonly onclick="this.focus();this.select()"
                                                                        type="text" class="bannerurl"></div>
            </center>
        </div><!-- -->
        <div id="tabs-4" class="banner-res-box">
            <center>
                <div class="banner-res-box-skew">
                    <div class="bannersize">Banner 125x125</div>
                    <span style="padding: 25px; display: block; width: 195px"><img
                                src="banners/125x125.gif"></span><input value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/banners/125x125.gif"
                                                                        readonly onclick="this.focus();this.select()"
                                                                        type="text" class="bannerurl"></div>
            </center>
        </div>
        <div id="tabs-5" class="banner-res-box">
            <center>
                <div class="banner-res-box-skew">
                    <div class="bannersize">Banner 1920x180</div>
                    <span style="padding: 25px 0px; display: block; width: 900px"><center><img
                                    src="banners/1920x180.gif" style="max-width: 900px"></center></span><input
                            value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/banners/1920x180.gif" readonly
                            onclick="this.focus();this.select()" type="text" class="bannerurl"></div>
            </center>
        </div><!-- --><!-- -->
        <div id="tabs-6" class="banner-res-box">
            <center>
                <div class="banner-res-box-skew">
                    <div class="bannersize">Banner 1200x150</div>
                    <span style="padding: 25px 0px; display: block; width: 900px"><center><img
                                    src="banners/1200x150.gif" style="width: 900px"></center></span><input
                            value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/banners/1200x150.gif" readonly
                            onclick="this.focus();this.select()" type="text" class="bannerurl"></div>
            </center>
        </div><!-- -->
        <div id="tabs-7" class="banner-res-box">
            <center>
                <div class="banner-res-box-skew">
                    <div class="bannersize">Banner 1100x150</div>
                    <span style="padding: 25px 0px; display: block; width: 850px"><center><img
                                    src="banners/1100x150.gif" style="max-width: 850px"></center></span><input
                            value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/banners/1100x150.gif" readonly
                            onclick="this.focus();this.select()" type="text" class="bannerurl"></div>
            </center>
        </div><!-- --></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>