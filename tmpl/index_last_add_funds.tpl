{if $settings.index_last_add_funds}
{loaddata name="transactions" limit=$settings.index_last_add_funds type="add_funds" var="last_add_funds"}
{/if}

{if $last_add_funds}
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=4 class=title>Last Add Funds</th>
</tr>
{foreach from=$last_add_funds item=s}
<tr>
 <td class=menutxt><img src="images/{$s.ec}.gif"></td>
 <td class=menutxt>{$currency_sign}{$s.amount}</td>
 <td class=menutxt>{$s.date}</td>
 <td class=menutxt>{$s.username}</td>
 </td>
</tr>
{/foreach}
</table>
{/if}