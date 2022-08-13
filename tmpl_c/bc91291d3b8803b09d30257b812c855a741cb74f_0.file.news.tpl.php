<?php /* Smarty version 3.1.27, created on 2022-08-09 13:41:13
         compiled from "/home/goldainy/public_html/tmpl/news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:152768653662f29c393ad672_46288254%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc91291d3b8803b09d30257b812c855a741cb74f' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/news.tpl',
      1 => 1660045179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152768653662f29c393ad672_46288254',
  'variables' => 
  array (
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f29c393dd120_18216789',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f29c393dd120_18216789')) {
function content_62f29c393dd120_18216789 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '152768653662f29c393ad672_46288254';
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
                            <span>[  News  ]</b></span>
                        </div>
                        <div class="main-page-content">
                            <div class="row">
                                <div class="col-md-12">
<div ng-controller="NewsController" ng-init="initDT()">
    <div block-ui="news" style="min-height: 100px" tasty-table bind-reload="dT_ReloadCallBack"
         bind-resource-callback="dT_GetResource" bind-init="dT_Init"
         bind-filters="dT_FilterBy">
        <style type="text/css">
            .news-table {
                border: none;
            }

            .news-table td {
                border: none;
                border-bottom: dashed 1px #ddd;
                padding: 15px 0px
            }
        </style>  
        <div  ng-cloak ng-show="rows.length">
            <table width="100%" class="news-table">
                <div tasty-thead></div>
                <tbody>
                <tr ng-repeat="row in rows">
                   

<table width="100%" class="news-table">

<?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
<tr>
 <td align=justify><a name="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['id']);?>
"></a><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['title']);?>
</b><br>
  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['full_text']);?>
<br>
  <small><i><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['d']);?>
</i></small>
 </td>
</tr>
<?php endfor; endif; ?>
<?php } else { ?>
<tr>
 <td colspan=3 align=center>
<div ng-cloak="" ng-show="rows &amp;&amp; !rows.length" class="error-block" style="text-align: center;margin-left: 305px;">No news found</div></td>
</tr>
<?php }?>


</table>

</div></div>
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>