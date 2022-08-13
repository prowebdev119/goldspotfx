<?php /* Smarty version 3.1.27, created on 2022-08-12 08:04:27
         compiled from "/home/goldainy/public_html/tmpl/logo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:85237312162f641cb97fbb9_05289931%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f799823e2be55f864f76034cf93463c3c147869e' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/logo.tpl',
      1 => 1660045179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85237312162f641cb97fbb9_05289931',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f641cb988d57_85048044',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f641cb988d57_85048044')) {
function content_62f641cb988d57_85048044 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '85237312162f641cb97fbb9_05289931';
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet"
	
    <meta charset="UTF-8">
    
    <link rel="icon" href="template/images/favicon.png" type="image/png" />
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="template/css/slick.css" rel="stylesheet" >
    <link href="template/css/fontello.css" rel="stylesheet" type="text/css"/>
    <link href="template/css/calc.css" rel="stylesheet" type="text/css"/>
    <link href="template/css/slick-theme.css" rel="stylesheet">
    <link href="template/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="template/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="template/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/js/waypoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/js/jquery.easypiechart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/js/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/js/scripts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/js/calculator.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/js/time.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/js/rate.js"><?php echo '</script'; ?>
>
        <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
<!-- Visualhyip.com To disable right click option for the entire site AA324 -->
<!----

<?php echo '<script'; ?>
 type="text/javascript">
document.ondragstart=function(){return false}; //for image 
document.oncontextmenu=function(e){return false}; //for right click disable
document.onkeydown = function(e) {
        if (e.ctrlKey && 
		 	(e.keyCode === 65 ||
             e.keyCode === 67 || 
			 e.keyCode === 73 ||
			 e.keyCode === 74 ||
			 e.keyCode === 80 || 
			 e.keyCode === 83 || 
			 e.keyCode === 85 || 
             e.keyCode === 86 || 
             e.keyCode === 117
			 )) {
            return false;
        } 
		if(e.keyCode==18||e.keyCode==123){return false}
};

<?php echo '</script'; ?>
>

---->
<!--To disable right click option for the entire site: ends here-->
</head>
<body ng-app='dqsApp'>
<div id="wrapper" >

    
            <section class="header header-page">
<div class="grid_green50"> 
         <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
                    </section><?php }
}
?>