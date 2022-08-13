{include file="mheader.tpl"} 
					
					
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
                    <div class="balance-box balance-box-main"><b>{$currency_sign}{$ab_formated.total}<small>USD</small></b><span>Account Balance</span></div>
                </li>
                <li>
                    <div class="balance-box"><b>{$currency_sign}{$ab_formated.active_deposit}<small>USD</small></b><span>Active Deposits</span></div>
                </li>
                <li>
                    <div class="balance-box"><b>{$currency_sign}{$ab_formated.earning}<small>USD</small></b><span>Total Earnings</span></div>
                </li>
                <li>
                    <div class="balance-box"><b>{$currency_sign}{$ab_formated.withdraw_pending}<small>USD</small></b><span>Pending Withdrawals</span></div>
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
                                <input onclick="this.select();"  type="text" value="{$settings.site_url}/?ref={$userinfo.username}" />
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
                    <td><b>{$userinfo.username}</b>
                    </td>
                </tr>




                <tr>
                    <td>Email</td>
                    <td><b>{$userinfo.email}</b>
                    </td>
                </tr>
                <tr>
                    <td>Regd. Date</td>
                    <td><b>{$userinfo.create_account_date} <small>(Ip:{$userinfo.ip})</small></b>
                    </td>
                </tr>
                <tr>
                    <td>Last Access</td>
                    <td>
                                                    <b>{$last_access}&nbsp;<small>(Ip:{$userinfo.ip})</small></b>
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
                    <td class="text-bold">{$currency_sign}<b>{$ab_formated.deposit}</td>
                </tr>
                <tr>
                    <td>Active Deposits</td>
                    <td class="text-bold">{$currency_sign}<b>{$ab_formated.active_deposit}</td>

                </tr>
                <tr>
                    <td>Last Deposit</td>
                    <td class="text-bold">
                                                   {$currency_sign}<b>{if $last_deposit}{$last_deposit}{else}N/A{/if}</b>
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
                    <td class="text-bold">{$currency_sign}<b>{$ab_formated.withdrawal}</b></td>
                </tr>
                <tr>
                    <td>Pending Withdrawal</td>
                    <td class="text-bold">
                       {$currency_sign}<b>{$ab_formated.withdraw_pending}</b>
                    </td>
                </tr>
                <tr>
                    <td>Last Withdrawal</td>
                    <td class="text-bold">
                                                  {$currency_sign}<b>{if $last_withdrawal}{$last_withdrawal}{else}N/A{/if}</b>
                        
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
</html>