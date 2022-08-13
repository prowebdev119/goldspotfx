
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
	<th colspan=2 class=title>Stats</th>
</tr>
{if $settings.show_members_stats == 1}
<tr>
	<td class=menutxt><a href="{"?a=members_stats"|encurl}" class=menutxt>Investors Stats</a></td>
</tr>
{/if}
{if $settings.show_paidout_stats == 1}
<tr>
	<td class=menutxt><a href="{"?a=paidout"|encurl}" class=menutxt>Paid Out</a></td>
</tr>
{/if}
{if $settings.show_top10_stats == 1}
<tr>
	<td class=menutxt><a href="{"?a=top10"|encurl}" class=menutxt>Investors Top 10</a></td>
</tr>
{/if}
{if $settings.show_last10_stats == 1}
<tr>
	<td class=menutxt><a href="{"?a=last10"|encurl}" class=menutxt>Investors Last 10</a></td>
</tr>
{/if}
{if $settings.show_refs10_stats == 1}
<tr>
	<td class=menutxt><a href="{"?a=refs10"|encurl}" class=menutxt>Referrers Top 20</a></td>
</tr>
{/if}
</table>
<br>
