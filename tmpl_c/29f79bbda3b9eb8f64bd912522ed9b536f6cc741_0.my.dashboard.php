<?php /* Smarty version 3.1.27, created on 2022-08-12 07:53:30
         compiled from "my:dashboard" */ ?>
<?php
/*%%SmartyHeaderCode:47638705862f63f3a8f3fa2_87325541%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29f79bbda3b9eb8f64bd912522ed9b536f6cc741' => 
    array (
      0 => 'my:dashboard',
      1 => 1660305210,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '47638705862f63f3a8f3fa2_87325541',
  'variables' => 
  array (
    'members' => 0,
    'iplans' => 0,
    'funds' => 0,
    'stats_totals' => 0,
    'stats' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f63f3a988d97_89806284',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f63f3a988d97_89806284')) {
function content_62f63f3a988d97_89806284 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '47638705862f63f3a8f3fa2_87325541';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:hightcharts", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <b>Information</b><br> Members: <a title="How many users are registered in your system" class=hlp>Total: <?php echo $_smarty_tpl->tpl_vars['members']->value['total'];?>
</a>, <a title="How many active users does your system contain" class=hlp>Active <?php echo $_smarty_tpl->tpl_vars['members']->value['active']['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['members']->value['active']['percent'];?>
%)</a>, <a title="How many users are disabled. (cannot login and cannot earn any funds from principal.)" class=hlp>Inactive <?php echo $_smarty_tpl->tpl_vars['members']->value['inactive']['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['members']->value['inactive']['percent'];?>
%)</a><br> Members: <a title="How many users have ever made a deposit." class=hlp>Made a deposit <?php echo $_smarty_tpl->tpl_vars['members']->value['deposited']['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['members']->value['deposited']['percent'];?>
%)</a>, <a title="How many registered users haven&#39;t made a deposit in your system." class=hlp>Have not made a deposit: <?php echo $_smarty_tpl->tpl_vars['members']->value['notdeposited']['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['members']->value['notdeposited']['percent'];?>
%)</a><br> <br> Investment Packages: <a title="Active investment packages number. Active users earn if they have deposited funds in these packages." class=hlp>Active: <?php echo $_smarty_tpl->tpl_vars['iplans']->value['active'];?>
</a>, <a title="Closed investment packages number. Users cannot invest money to these packages but deposits still works." class=hlp>Closed: <?php echo $_smarty_tpl->tpl_vars['iplans']->value['closed'];?>
</a>, <a title="Inactive investment packages number. Users cannot invest money to these packages and cannot receive any earnings from these packages either." class=hlp>Inactive: <?php echo $_smarty_tpl->tpl_vars['iplans']->value['inactive'];?>
</a><br> <br> <a title="The difference between the funds arrived from payment processings and all the withdrawals you have made." class=hlp>Total System Earnings:</a> <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['funds']->value['total_earned']);?>
<br> <br> <a title="The sum of all users&#39; earnings and bonuses minus penalties and withdrawals." class=hlp>Total Members&#39; Balance:</a> <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['funds']->value['total_balance']);?>
 <br> <a title="Total members&#39; deposit shows you how much funds have users deposited in your system total." class=hlp>Total Members&#39; Deposit:</a> <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['funds']->value['total_deposits']);?>
 <br> <a title="The total principal of all users." class=hlp>Current Members&#39; Deposit:</a> <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['funds']->value['active_deposits']);?>
 <br> <a title="The total referral commissions of all users." class=hlp>Total Referrals Commissions:</a> <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['funds']->value['total_comissions']);?>
 <br> <br> <a title="All the funds you have ever withdrawn to users&#39; payment processing accounts." class=hlp>Total Withdrawals:</a> <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['funds']->value['total_withdraw']);?>
 <br> <a title="The funds users requested to withdraw." class=hlp>Pending Withdrawals:</a> <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['funds']->value['pending_withdraw']);?>
 <br> <br><br>  <a title="Total in/out stats shows you how much funds users entered in your system and how much funds you withdrew today, this week, this month, this year and total." class=hlp><b>in/out Total</b></a> <br><br> <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?> <tr> <th bgcolor=FFEA00 colspan=2>24 hours</td> <th bgcolor=FFEA00 colspan=2>7 days</td> <th bgcolor=FFEA00 colspan=2>Month</td> <th bgcolor=FFEA00 colspan=2>Year</td> <th bgcolor=FFEA00 colspan=2>Total</td> </tr><tr> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> </tr> </tr> <tr> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['in']['today']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['out']['today']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['in']['week']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['out']['week']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['in']['month']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['out']['month']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['in']['year']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['out']['year']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['in']['total']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['out']['total']);?>
</small></td> </tr> <tr> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['dif']['today']);?>
</small></th> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['dif']['week']);?>
</small></th> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['dif']['month']);?>
</small></th> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['dif']['year']);?>
</small></th> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['stats_totals']->value['dif']['total']);?>
</small></th> </tr> </table> <br><br> <?php
$_from = $_smarty_tpl->tpl_vars['stats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>  <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 in/out stats shows you how much funds users entered in your system and how much funds you withdrew today, this week, this month, this year and total" class=hlp><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 in/out</b></a> <br><br> <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?> <tr> <th bgcolor=FFEA00 colspan=2>24 hours</td> <th bgcolor=FFEA00 colspan=2>7 days</td> <th bgcolor=FFEA00 colspan=2>Month</td> <th bgcolor=FFEA00 colspan=2>Year</td> <th bgcolor=FFEA00 colspan=2>Total</td> </tr><tr> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> </tr> </tr> <tr> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['in']['today'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['out']['today'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['in']['week'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['out']['week'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['in']['month'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['out']['month'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['in']['year'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['out']['year'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['in']['total'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> <td align=right><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['out']['total'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></td> </tr> <tr> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['dif']['today'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></th> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['dif']['week'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></th> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['dif']['month'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></th> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['dif']['year'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></th> <th colspan=2 ><small><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['dif']['total'],$_smarty_tpl->tpl_vars['s']->value['ec']);?>
</small></th> </tr> </table> <br><br> <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Welcome to the HYIP Manager Admin Area!<br> You can see help messages on almost all pages of the admin area in this part.<br> <br> You can see how many members are registered in the system on this page.<br> System supports 3 types of users:<br> <li>Active users. These users can login to the members area and receive earnings.</li> <li>Suspended users. These users can login to the members area but will not receive any earnings.</li> <li>Disabled users. These users can not login to the members area and will not receive any earnings.</li> <br> User becomes active when registering and only administrator can change status of any registered user. You can see how many users are active and disabled in the system at the top of this page. <br> <br> Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> &quot;Total system earnings&quot; is a difference between funds came from payment processings and all the withdrawals you made. <br> <br> &quot;Total member&#39;s balance&quot; shows you how many funds can users withdraw from the system. It is the sum of all users&#39; earnings and bonuses minus penalties and withdrawals. <br> <br> &quot;Total member&#39;s deposit&quot; shows you how many funds have users ever deposited in your system. <br> <br> &quot;Current members&#39; deposit&quot; shows the overall users&#39; deposit. <br> <br> &quot;Total withdrawals&quot; shows you how many funds have you withdrawn to users&#39; accounts. <br> <br> &quot;Pending withdrawals&quot; shows you how many funds users have requested to withdraw. <br> <br> In/out stats shows you how many funds users have entered in your system and how many funds have you withdrawn today, this week, this month, this year and total. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>