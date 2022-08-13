{include file="header.tpl"}

<h3>Referrers Top 20</h3>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
    <td class=inheader>#</td>
    <td class=inheader>Username</td>
    <td class=inheader width=200><b>Active</b></td>
    <td class=inheader width=170><b>Total</b></td>
</tr>
{if $stats}
{section name=s loop=$stats}
<tr>
 <td align=center><b>{$smarty.section.s.index+1}</b></td>
 <td><b>{$stats[s].username}</b></td>
 <td align=right><b>{$stats[s].active_col}</b></td>
 <td align=right><b>{$stats[s].col}</b></td>
</tr>
{/section}
{else}
<tr>
 <td colspan=4 align=center>No referrers found</td>
</tr>
{/if}
</table>
<br><br>Last reset on {$start_date}
{include file="footer.tpl"}
