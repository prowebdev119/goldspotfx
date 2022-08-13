{include file="header.tpl"}

{if $exchanged}

<h3>Exchange is Completed.</h3>
<br><br>
<a href="{"?a=exchange"|encurl}">Return to the Exchange Center.</a>

{else}

<h3>Exchange Confirmation:</h3><br><br>
{if $error} {if $error == 'no_from'}No "from" currency specified.{/if}
{if $error == 'no_to'}No "to" currency specified.{/if}
{if $error == 'no_amount'}No "to" amount specified.{/if}
{if $error == 'to_big_amount'}You have not enough funds to exchange from.{/if}
{if $error == 'exchange_forbidden'}The exchange for specified currencies is forbidden by the administrator.{/if}
{if $error == 'on_hold'}Sorry, this amount on hold now.{/if}
{if $error == 'to_small_amount'}The amount you have entered for exchange is too small. Please enter the amount that 
can be exchanged to at least {$currency_sign}0.01.{/if} {else} 
<form method=post name="exchange_form">
  <input type="hidden" name="a" value="exchange">
  <input type="hidden" name="action" value="exchange">
  <input type="hidden" name="from" value="{$from}">
  <input type="hidden" name="to" value="{$to}">
  <input type="hidden" name="amount" value="{$amount}">
  <table cellspacing=0 cellpadding=2 border=0>
  <tr><td>You are trying to exchange {$currency_sign}{$amount} {$from_name} to {$currency_sign}{$exchange_amount} {$to_name}.</td></tr>
  <tr><td><br><input type=submit value="Confirm" class=sbmt></td></tr>
  </table>
  </form>
  {/if}

{/if}
{include file="footer.tpl"}
