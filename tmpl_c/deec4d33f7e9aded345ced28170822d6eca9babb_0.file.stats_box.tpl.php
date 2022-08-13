<?php /* Smarty version 3.1.27, created on 2022-08-07 09:17:41
         compiled from "/home/goldainy/public_html/tmpl/stats_box.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:200456964762efbb7526b828_15328711%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deec4d33f7e9aded345ced28170822d6eca9babb' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/stats_box.tpl',
      1 => 1442796698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200456964762efbb7526b828_15328711',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62efbb75286d63_39489458',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62efbb75286d63_39489458')) {
function content_62efbb75286d63_39489458 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '200456964762efbb7526b828_15328711';
?>

<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
	<th colspan=2 class=title>Stats</th>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_members_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=members_stats"));?>
" class=menutxt>Investors Stats</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_paidout_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=paidout"));?>
" class=menutxt>Paid Out</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_top10_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=top10"));?>
" class=menutxt>Investors Top 10</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_last10_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=last10"));?>
" class=menutxt>Investors Last 10</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_refs10_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=refs10"));?>
" class=menutxt>Referrers Top 20</a></td>
</tr>
<?php }?>
</table>
<br>
<?php }
}
?>