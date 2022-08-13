{include file="mheader.tpl"}
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Your Referrals</h2>
                            </div>
                        </div>
<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>






<br>
<table class="table table-opers" width="100%">
<tr>
  <td class=item>Referrals:</td>
  <td class=item>{$total_ref}</td>
</tr><tr>
  <td class=item>Active referrals:</td>
  <td class=item>{$active_ref}</td>
</tr><tr>
  <td class=item>Total referral commission:</td>
  <td class=item>{$currency_sign}{$commissions}</td>
</tr>
</table>
<br><br>



</div>
        </div>
      {include file="mfooter.tpl"}