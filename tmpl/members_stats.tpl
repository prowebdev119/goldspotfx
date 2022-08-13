{include file="header.tpl"}

<h3>Investors Stats</h3><br>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td class=inheader>Username</td>
 <td class=inheader width=200><b>Deposit</b></td>
 <td class=inheader width=170><b>Earn</b></td>
 <td class=inheader width=170><b>Withdraw</b></td>
</tr>
{if $stats}
{section name=s loop=$stats}
<tr>
 <td><b>{$stats[s].username}</b></td>
 <td align=right><b>{$currency_sign}{$stats[s].deposit}</b></td>
 <td align=right><b>{$currency_sign}{$stats[s].earning}</b></td>
 <td align=right><b>{$currency_sign}{$stats[s].withdrawal}</b></td>
</tr>
{/section}
{else}
<tr>
 <td colspan=4 align=center>No transactions found</td>
</tr>
{/if}
{if $stats}
<tr>
 <td><b>TOTAL</b></td>
 <td align=right><b>{$currency_sign}{$total.deposit}</b></td>
 <td align=right><b>{$currency_sign}{$total.earning}</b></td>
 <td align=right><b>{$currency_sign}{$total.withdrawal}</b></td>
</tr>
{/if}
</table>

{if $colpages > 1}
<center>
{if $prev_page > 0}
 <a href="{"?a=members_stats&page=`$prev_page`"|encurl}">&lt;&lt;</a>
{/if}
{section name=p loop=$pages}
{if $pages[p].current == 1}
{$pages[p].page}
{else}
 <a href="{"?a=members_stats&page=`$pages[p].page`"|encurl}">{$pages[p].page}</a>
{/if}
{/section}
{if $next_page > 0}
 <a href="{"?a=members_stats&page=`$next_page`"|encurl}">&gt;&gt;</a>
{/if}
</center>
{/if}

{include file="footer.tpl"}
