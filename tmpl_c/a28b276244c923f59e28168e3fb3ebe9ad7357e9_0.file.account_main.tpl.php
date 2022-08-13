<?php /* Smarty version 3.1.27, created on 2022-08-12 08:04:20
         compiled from "/home/goldainy/public_html/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:108431664362f641c4daed39_00790044%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a28b276244c923f59e28168e3fb3ebe9ad7357e9' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/account_main.tpl',
      1 => 1660146508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108431664362f641c4daed39_00790044',
  'variables' => 
  array (
    'currency_sign' => 0,
    'ab_formated' => 0,
    'settings' => 0,
    'userinfo' => 0,
    'last_access' => 0,
    'last_deposit' => 0,
    'last_withdrawal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f641c4e2d9b8_26125089',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f641c4e2d9b8_26125089')) {
function content_62f641c4e2d9b8_26125089 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '108431664362f641c4daed39_00790044';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
					
					
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Dashboard</h2>
                            </div>
                        </div>
                                    
    
    

<div class="row">
    <div class="col-md-12">
        <div class="balance-list">
            <ul>
                <li>
                    <div class="balance-box balance-box-main"><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
<small>USD</small></b><span>Account Balance</span></div>
                </li>
                <li>
                    <div class="balance-box"><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
<small>USD</small></b><span>Active Deposits</span></div>
                </li>
                <li>
                    <div class="balance-box"><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
<small>USD</small></b><span>Total Earnings</span></div>
                </li>
                <li>
                    <div class="balance-box"><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);?>
<small>USD</small></b><span>Pending Withdrawals</span></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="reflink" style="margin-top: 13px;">
            <table class="table table-calc">
                <tbody>
                <tr>
                    <td>
                        <label>
                            <div>
                                <span style="left: 22px;border: 1px solid #f2529a;color: #f2529a;">Referral Link</span>
                                <input onclick="this.select();"  type="text" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
" />
                            </div>
                        </label>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
  
<div class="clearfix"></div>
<br/>
<br/>
<div class="row">
    <div class="col-md-12">
        <div class="box-account-table">
            <table class='table table-list'>
                <thead>
                <tr>
                    <th colspan="2"><i class='icon-params'></i> Profile Information
                    </th>
                </tr>
                </thead>
                <tbody>

                 <tr>
                    <td>User Name</td>
                    <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</b>
                    </td>
                </tr>




                <tr>
                    <td>Email</td>
                    <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
</b>
                    </td>
                </tr>
                <tr>
                    <td>Regd. Date</td>
                    <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['create_account_date']);?>
 <small>(Ip:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['ip']);?>
)</small></b>
                    </td>
                </tr>
                <tr>
                    <td>Last Access</td>
                    <td>
                                                    <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['last_access']->value);?>
&nbsp;<small>(Ip:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['ip']);?>
)</small></b>
                                            </td>
                </tr>
                

                </tbody>
            </table>
        </div>
    </div>
</div>
<br/>
<br/>
<div class="row">
    <div class="col-md-6">
        <div class="box-account-table">
            <table class='table table-list'>
                <thead>
                <tr>
                    <th colspan="2"><i class='icon-params'></i> Deposit Information
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Total Deposits</td>
                    <td class="text-bold"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']);?>
</td>
                </tr>
                <tr>
                    <td>Active Deposits</td>
                    <td class="text-bold"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</td>

                </tr>
                <tr>
                    <td>Last Deposit</td>
                    <td class="text-bold">
                                                   <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php if ($_smarty_tpl->tpl_vars['last_deposit']->value) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['last_deposit']->value);
} else { ?>N/A<?php }?></b>
                                            </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box-account-table">
            <table class='table table-list'>
                <thead>
                <tr>
                    <th colspan="2"><i class='icon-params'></i> Withdrawals Information
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Total Withdrawals</td>
                    <td class="text-bold"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</b></td>
                </tr>
                <tr>
                    <td>Pending Withdrawal</td>
                    <td class="text-bold">
                       <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);?>
</b>
                    </td>
                </tr>
                <tr>
                    <td>Last Withdrawal</td>
                    <td class="text-bold">
                                                  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php if ($_smarty_tpl->tpl_vars['last_withdrawal']->value) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['last_withdrawal']->value);
} else { ?>N/A<?php }?></b>
                        
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>



        </div>
    </div>
    </div>
    </section>

</div>



</body>
</html><?php }
}
?>