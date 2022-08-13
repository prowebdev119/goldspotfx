{if $top_referrals}
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=2 class=title>Top Referrals</th>
</tr>
{foreach from=$top_referrals item=s}
<tr>
 <td class=menutxt>{$s.username}</td>
 <td class=menutxt>{$currency_sign}{$s.amount}</td>
</tr>
{/foreach}
</table>
{/if}