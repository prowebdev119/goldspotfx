<?php /* Smarty version 3.1.27, created on 2022-08-08 02:31:19
         compiled from "/home/goldainy/public_html/tmpl/custom/offer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:146448605562f0adb79c6212_21220038%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ca4ea44734a682dad87ddae7b42e09943b71708' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/custom/offer.tpl',
      1 => 1659886832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146448605562f0adb79c6212_21220038',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f0adb79db034_99395859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f0adb79db034_99395859')) {
function content_62f0adb79db034_99395859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '146448605562f0adb79c6212_21220038';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- bootstrap 4.0 css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- owl.carousel css -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<!-- Animate css -->
<link rel="stylesheet" href="css/animate.min.css">
<!-- magnific css -->
<link rel="stylesheet" href="css/magnific-popup.css">
<!-- meanmenu css -->
<link rel="stylesheet" href="css/meanmenu.min.css">
<!-- Icon font css -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/flaticon.css">
<!-- style css -->
<link rel="stylesheet" href="style.css">
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css">

<div class="wrap">
    <div class="wrap mt70 text-justify"><h1>Investment offer</h1>
        <div class="line"></div>
        <div class="box"><span>We are pleased to present you 5 investment plans on a daily basis and 5 investment plans type 'After'. We offer you 5 regular investment plans with profit 1.5% daily for 20 days, 1.8% daily for 25 days, 2.2% daily for 35 days, 2.7% daily for 45 days, and 3.5% daily for 60 days and 5 'After' investment plans 250% after 25 days, 500% after 45 days, 1000% after 60 days, 2000% after 90 days and 5000% after 150 days. These investment plans are an affordable and easy way to implement your plans, putting a minimum of effort into this.</span>
        </div>
    </div>
    <h1 class="float-right mt40">Calculate your profit</h1>
    <div class="clear"></div>
    <div class="line float-right"></div>
    <div class="clear"></div>
    <br>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="design/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="design/js/calculator.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="design/js/calcsum.min.js"><?php echo '</script'; ?>
>
<div class="plans" style="margin-top: -60px">
    <div class="row align-items-center">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="profit-calculater-inner">
                <form onsubmit="event.preventDefault();" class="profit-calculator">
                    <div class="row">
                        <div class="col-lg-6 mb-30">
                            <label>Start Balance</label>
                            <input type="text" name="rc-start-balance" id="rc-start-balance"
                                   class="form-control base--bg" required
                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                        <div class="col-lg-6 mb-30">
                            <label>Percent per month, %</label>
                            <input type="text" name="rc-percent-per-month" id="rc-percent-per-month"
                                   class="form-control base--bg" required
                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                        <div class="col-lg-12">
                            <label>Number of Months</label>
                            <input type="text" name="rc-number-of-months" id="rc-number-of-months"
                                   class="form-control base--bg" required
                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="club-btn"
                                    data-form-type="action">Calculate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="about-profit-inner">
                <div class="about-calculater">

                </div>
            </div>
        </div>

    </div>
</div>
<div class="wrap">
    <center><a href="?a=signup" class="btn-green btn-big mt70" style="width: 555px !important"><span>Join us and start earning money!</span></a>
    </center>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>