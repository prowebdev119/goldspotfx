{include file="mheader.tpl"}
   <div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Withdrawal History</h2>
                            </div>
                        </div>
	<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>			
		



{literal}	
<script language=javascript>
function go(p)
{
  document.opts.page.value = p;
  document.opts.submit();
}
</script>
{/literal}		
<form method=post name=opts>
<input type=hidden name=a value=withdraw_history>
<input type=hidden name=page value=1>
<table ng-cloak="" ng-show="showFilter" class="dq-filter" style="width: 100%;">
        <tbody>
<tr>
 
 <td>
<b>From:</b> <select name=month_from class=form-control>
{section name=month_from loop=$month}
<option value={$smarty.section.month_from.index+1} {if $smarty.section.month_from.index+1 == $frm.month_from}selected{/if}>{$month[month_from]}
{/section}
</select> &nbsp;
<select name=day_from class=form-control>
{section name=day_from loop=$day}
<option value={$smarty.section.day_from.index+1} {if $smarty.section.day_from.index+1 == $frm.day_from}selected{/if}>{$day[day_from]}
{/section}
</select> &nbsp;

<select name=year_from class=form-control>
{section name=year_from loop=$year}
<option value={$year[year_from]} {if $year[year_from] == $frm.year_from}selected{/if}>{$year[year_from]}
{/section}
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>To:</b> <select name=month_to class=form-control>
{section name=month_to loop=$month}
<option value={$smarty.section.month_to.index+1} {if $smarty.section.month_to.index+1 == $frm.month_to}selected{/if}>{$month[month_to]}
{/section}
</select> &nbsp;
<select name=day_to class=form-control>
{section name=day_to loop=$day}
<option value={$smarty.section.day_to.index+1} {if $smarty.section.day_to.index+1 == $frm.day_to}selected{/if}>{$day[day_to]}
{/section}
</select> &nbsp;

<select name=year_to class=form-control>
{section name=year_to loop=$year}
<option value={$year[year_to]} {if $year[year_to] == $frm.year_to}selected{/if}>{$year[year_to]}
{/section}
</select>

 </td>
 <td>
	&nbsp; <div class="form-group text-center">
<button type="submit">Go</button>
                   
                </div>
 </td>
</tr></table>
</form>
<br><br>
 

{if $settings.use_history_balance_mode}
<table class="table table-opers" width="100%">
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Type</td>
 <td class=inheader>Credit</td>
 <td class=inheader>Debit</td>
 <td class=inheader>Balance</td>
 <td class=inheader>P.S.</td>
</tr>
{if $qtrans > 0}
{section name=trans loop=$trans}
<tr>
 <td align=center nowrap>{$trans[trans].d}</td>
 <td><b>{$trans[trans].transtype}</b><br><small class=gray>{$trans[trans].description}</small></td>
 <td align=right><b>
  {if $trans[trans].debitcredit == 0}
  {$currency_sign}{$trans[trans].actual_amount}
  </b>
  {else}
  &nbsp;
  {/if}
 </td>
 <td align=right><b>
  {if $trans[trans].debitcredit == 1}
  {$currency_sign}{$trans[trans].actual_amount}
  </b> 
  {if $trans[trans].transtype eq 'Withdrawal request'} <a href=?a=cancelwithdraw&id={$trans[trans].id} onclick="return confirm('Are you sure you want to delete this request?')">[cancel]</a>{/if}
  {else}
  &nbsp;
  {/if}
 </td>
 <td align=right><b>
  {$currency_sign}{$trans[trans].balance}
 </td>
 <td><img src="images/{$trans[trans].ec}.gif" align=absmiddle hspace=1 height=17></td>
</tr>
{/section}
{else}
<tr>
 <td colspan=6 align=center>No transactions found.</td>
</tr>
{/if}
<tr><td colspan=3>&nbsp;</td>

{if $qtrans > 0}
<tr>
 <td colspan=2>For this period:</td>
 <td align=right nowrap><b>{$currency_sign}{$periodcredit}</b></td>
 <td align=right nowrap><b>{$currency_sign}{$perioddebit}</b></td>
 <td align=right nowrap><b>{$currency_sign}{$periodbalance}</b></td>
</tr>
{/if}
<tr>
 <td colspan=2>Total:</td>
 <td align=right nowrap><b>{$currency_sign}{$allcredit}</b></td>
 <td align=right nowrap><b>{$currency_sign}{$alldebit}</b></td>
 <td align=right nowrap><b>{$currency_sign}{$allbalance}</b></td>
</tr>
</table>
{else}
<table class="table table-opers" width="100%">
<tr>
 <td class=inheader>Type</td>
 <td class=inheader width=200>Amount</td>
 <td class=inheader width=170>Date</td>
</tr>
{if $qtrans > 0}
{section name=trans loop=$trans}
<tr>
 <td><b>{$trans[trans].transtype}</b></td>
 <td width=200 align=right><b>{$currency_sign} {$trans[trans].actual_amount}</b> <img src="images/{$trans[trans].ec}.gif" align=absmiddle hspace=1 height=17> {if $trans[trans].transtype eq 'Withdrawal request'} <a href=?a=cancelwithdraw&id={$trans[trans].id} onclick="return confirm('Are you sure you want to delete this request?')">[cancel]</a>{/if}</td>
 <td width=170 align=center valign=bottom><b><small>{$trans[trans].d}</small></b></td>
</tr>
<tr>
 <td colspan=3 style="color: gray"><small>{$trans[trans].description}</small></td>
</tr>
{/section}
{else}
<tr>
 <td colspan=3 align=center>No transactions found.</td>
</tr>
{/if}
<tr><td colspan=3>&nbsp;</td>
{if $qtrans > 0}
<tr>
 <td colspan=2>For this period:</td>
 <td align=right><b>{$currency_sign} {$periodsum}</b></td>
</tr>
{/if}
<tr>
 <td colspan=2>Total:</td>
 <td align=right><b>{$currency_sign} {$allsum}</b></td>
</tr>
</table>
{/if}

</div></div>
{include file="mfooter.tpl"}
