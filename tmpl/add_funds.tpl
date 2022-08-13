{include file="header.tpl"}

{if $frm.say eq 'deposit_success'}
<h3>The deposit has been successfully saved.</h3>
<br><br>
{/if}

{if $frm.say eq 'deposit_saved'}
<h3>The deposit has been saved. It will became active when the administrator checks statistics.</h3><br><br>
{/if}

<h3>Deposit to Account:</h3>
<br>
<form method=post>
<input type=hidden name=a value=deposit>
<input type=hidden name=h_id value=-1>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your account balance ({$currency_sign}):</td>
 <td align=right>{$currency_sign}{$ab_formated.total}</td>
</tr>
<tr><td>&nbsp;</td>
 <td align=right>
  <small>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}{$currency_sign}{$ps[p].balance} of {$ps[p].name}<br>{/if}
{/section}
  </small>
 </td>
</tr><tr>
 <td>Amount to Spend ({$currency_sign}):</td>
 <td align=right><input type=text name=amount value='10.00' class=inpts size=15 style="text-align:right;"></td>
</tr>
<tr>
  <td colspan=2>
   <table cellspacing=0 cellpadding=2 border=0>
{section name=p loop=$ps}
   {if $ps[p].status}
    <tr>
     <td><input type=radio name=type value="process_{$ps[p].id}" {if $smarty.section.p.index == 0}checked{/if}></td>
     <td>Spend funds from {$ps[p].name}</td>
    </tr>
   {/if}
{/section}
   </table>
  </td>
</tr>
<tr>
 <td colspan=2><input type=submit value="Spend" class=sbmt></td>
</tr></table>
</form>

{include file="footer.tpl"}
