{include file="header.tpl"}

<h3>Internal Transfer:</h3><br><br>

{if $say == 'processed'}
Internal transfer has been successfully completed.
<br><br>
{/if}

{if $fatals}

{if $fatals.forbidden}Internal transfers are forbidden.{/if}
{if $fatals.no_deposits}You can not send funds before you make any deposit.<br><br>{/if}
{if $fatals.times_limit}You can send internal transfer {$settings.limit_transfer_period_times} per {$settings.limit_transfer_period_date} only.<br>{/if}

{else}

{if $errors.turing_image}Invalid turing image<br><br>{/if}
{if $errors.user_not_found}The recipient's username entered has not been found or has been suspended.<br><br>{/if}
{if $errors.less_min}You can transfer the amount not less {$currency_sign}{if $settings.internal_transfer_min}{$settings.internal_transfer_min}{else}0.00{/if} only.<br><br>{/if}
{if $errors.too_big_amount}You have no such amount on your balance.<br><br>{/if}
{if $errors.too_big_amount_plus_fee}You have no enough funds to complte the transaction. Total amount you should have to send ${$frm.amount|amount_format} + fee is <b>${$errors.too_big_amount_plus_fee}</b>.<br><br>{/if}
{if $errors.greater_max}Maximum amount you can send is {$currency_sign}{$settings.internal_transfer_max}.<br><br>{/if}

{if $errors.invalid_transaction_code}Invalid Transaction Code.<br><br>{/if}

{if $preview}

<form method=post>
<input type=hidden name=a value=internal_transfer>
<input type=hidden name=action value=confirm>
<input type=hidden name=amount value={$amount}>
<input type=hidden name=account value={$user.username|escape:html}>
<input type=hidden name=ec value={$ec}>
<input type=hidden name=comment value="{$comment}">

<table cellspacing=0 cellpadding=2 border=0 class="form internal_transfer_confirm">
<tr>
 <th>Payment System:</th>
 <td>{$currency}</td>
</tr>
<tr>
 <th>Recipient:</th>
 <td>{$user.username|escape:html}</td>
</tr>
<tr>
 <th>Fee:</th>
 <td>
{if $fee > 0}
  {$settings.internal_transfer_fee}% (min. {$currency_sign}{$settings.minimum_internal_transfer_fee})
{else}
We have no fee for this operation.
{/if}
</td>
</tr>
<tr>
 <th>Debit Amount:</th>
 <td>{$currency_sign}{$to_send}</td>
</tr>
<tr>
 <th>Credit Amount:</th>
 <td>{$currency_sign}{$to_receive}</td>
</tr>
{if $comment}
<tr>
 <th>With comments:</th>
 <td>{$comment|escape:html}</th>
</tr>
{/if}
{if $settings.use_transaction_code && $userinfo.transaction_code}
<tr>
 <th>Transaction Code:</th>
 <td><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
{/if}
{if $ti.check.internal_transfer}
<tr>
 <td class=menutxt align=right><img src="{"?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"></td>
 <td><input type=text name=validation_number class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td colspan=2><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>

{else}

<form method=post>
<input type=hidden name=a value=internal_transfer>
<input type=hidden name=action value=preview>
<input type=hidden name=say value="">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Account Balance:</td>
 <td>{$currency_sign}<b>{$ab_formated.total}</b></td>
</tr>
<tr><td>&nbsp;</td>
 <td> <small>
{foreach from=$ps item=p}
   {if $p.balance > 0}{$currency_sign}{$p.balance} of {$p.name}{if $p.hold > 0} / {$currency_sign}{$p.hold} on hold{/if}<br>{/if}
{/foreach}
 </td>
</tr>
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Select e-currency:</td>
 <td><select name=ec class=inpts>
{foreach from=$ps item=p}
   {if $p.available > 0}<option value={$p.id}>{$p.name}</option>{/if}
{/foreach}
     </select>
 </td>
</tr><tr>
 <td>Transfer ({$currency_sign}):</td>
 <td><input type=text name=amount value="{if $frm.amount}{$frm.amount|escape:htmlall}{else}10.00{/if}" class=inpts size=15></td>
</tr><tr>
 <td>To Account:</td>
 <td><input type=text name=account value="{$frm.account|escape:htmlall}" class=inpts size=15></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>{if $frm.comment}{$frm.comment|escape:htmlall}{else}Your comment{/if}</textarea>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Send" class=sbmt></td>
</tr></table>
</form>

{/if}

{/if}


{include file="footer.tpl"}
