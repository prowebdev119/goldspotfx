<?php /* Smarty version 3.1.27, created on 2022-08-12 07:59:31
         compiled from "/home/goldainy/public_html/tmpl/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:164736991262f640a3d36d74_31991905%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63fb1ab74237a96a66bf53c01a915bb91cfc1fec' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/home.tpl',
      1 => 1660145689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164736991262f640a3d36d74_31991905',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f640a3d7b415_97489346',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f640a3d7b415_97489346')) {
function content_62f640a3d7b415_97489346 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '164736991262f640a3d36d74_31991905';
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
</head>
<?php echo '<script'; ?>
 type="text/javascript">

  $(document).bind("contextmenu",function(e) { 
	e.preventDefault();
 
});

<?php echo '</script'; ?>
>
<body ng-app='dqsApp'>

<div id="wrapper" >

    
            <section class="header ">
<div class="grid_green50"> 
       <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 

                    

<div class="header-middle">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-subtitle" style="margin-left: -229px;margin-top: -193px; color: #3a1654;">
                                    Our <br/>plans:
                                </div>
                                <div class="header-middle-title">
                                    <span>Thank you for visiting</span>
                                    <h1><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</b></h1>
                                </div>
   
<?php }
}
?>