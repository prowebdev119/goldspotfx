{include file="header.tpl"}

<h3>Withdraw Principal:</h3><br><br>
{if $fatal}
 {if $fatal eq 'deposit_not_found'}Wrong deposit ID has been provided{/if} 
 {if $fatal eq 'withdraw_forbidden'}Can not process principal withdrawal for this plan{/if}
 {if $fatal eq 'too_early_withdraw'}Can not process principal withdrawal yet{/if}
 {if $fatal eq 'too_late_withdraw'}Can not process principal withdrawal longer{/if}
 {if $fatal eq 'withdraw_complete'}Withdrawal has been sucessfully completed.{/if}
{else}
 {if $say == 'too_big_amount'}You have no such amount on this deposit.<br><br>{/if}
 {if $say == 'too_small_amount'}Provided amount is too small.<br><br>{/if}

{if $preview == 1}

<form method=post name=withdraw_form>
<input type=hidden name=a value=withdraw_principal>
<input type=hidden name=action value=withdraw>
<input type=hidden name=deposit value={$deposit.id}>
<input type=hidden name=amount value={$amount}>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <th>Deposit Amount</th>
 <td>{$currency_sign}{$deposit.deposit}</td>
</tr>
<tr>
 <th>Deposit Plan</th>
 <td>{$type.name|escape:html}</td>
</tr>
<tr>
 <th>Release Amount</th>
 <td>{$currency_sign}{$amount}</td>
</tr>
<tr>
 <th>Fee</th>
 <td>{$currency_sign}{$fee} ({$type.withdraw_principal_percent}%)</td>
</tr>
<tr>
 <th>Receive Amount</th>
 <td><b>{$currency_sign}{$to_balance}</b></td>
</tr>
<tr>
 <td><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>

{else}

<script>
var max_amount = new Number('{$deposit.deposit}');
var percent = new Number('{$type.withdraw_principal_percent}');
var currency_pow = 8;

{literal}
function withdraw() {
  if (!document.withdraw_form.amount) return;
  var out_val = new Number(document.withdraw_form.amount.value.replace(",","."));
  if (isNaN(out_val))
  { out_val = 0; }
  out_val = out_val;

  if (out_val > max_amount) {
    out_val = max_amount;
    document.withdraw_form.amount.value = out_val.toFixed(currency_pow);
  }

  if (out_val < 0) {
    document.withdraw_form.amount.value = '';
    document.withdraw_form.quote.value = 0;
  } else {
    var fee = out_val * (percent/ 100);
    if (fee <= 0) fee = 0;
    out_val = out_val - fee;
    if (out_val < 0) out_val = 0;
    document.withdraw_form.quote.value = out_val.toFixed(currency_pow);
  }
}
{/literal}
</script>

<form method=post name=withdraw_form>
<input type=hidden name=a value=withdraw_principal>
<input type=hidden name=action value=withdraw_preview>
<input type=hidden name=deposit value={$deposit.id}>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <th>Deposit Amount</th>
 <td>{$currency_sign}{$deposit.deposit}</td>
</tr>
<tr>
 <th>Deposit Earned</th>
 <td>{$currency_sign}{$deposit.earned}</td>
</tr>
<tr>
 <th>Deposit Plan</th>
 <td>{$type.name|escape:html}</td>
</tr>
<tr>
 <th>Fee</th>
 <td>{$type.withdraw_principal_percent}%</td>
</tr>
{if $type.withdraw_principal_full}
<tr>
 <th>Release Amount:</td>
 <td>{$deposit.deposit}</td>
</tr>
{else}
<tr>
 <th>Release Amount:</td>
 <td>{$currency_sign} <input type=text name=amount value="{$deposit.deposit}" class=inpts size=15 onchange="withdraw()" onkeyup="withdraw()"
      onfocusout="withdraw()" onactivate="withdraw()" ondeactivate="withdraw()"></td>
</tr>
<tr>
 <th>Receive Amount:</th>
 <td>{$currency_sign} <input type=text name=quote readonly class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Release Deposit" class=sbmt></td>
</tr></table>
</form>

<script>
withdraw();
</script>
{/if}
{/if}

{include file="footer.tpl"}