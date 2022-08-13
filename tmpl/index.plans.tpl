{literal}
<script language="javascript"><!--
function openCalculator(id)
{
  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");
}
--></script>
{/literal}

{foreach from=$index_plans item=p}
{if !$p.closed}
<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td colspan=3 align=center>{if $p.dsc != ''}<a href="{"?a=show_package_info&id=`$p.id`"|encurl}">{/if}<b>{$p.name|escape:html}</b></a></td>
</tr>
{if $p.plans}
<tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Spent Amount ({$currency_sign})</td>
 <td class=inheader width=100 nowrap><nobr>{$p.period} Profit (%)</nobr></td>
</tr>
{foreach from=$p.plans item=o}
<tr>
 <td class=item>{$o.name|escape:html}</td>
 <td class=item align=right>{$o.deposit}</td>
 <td class=item align=right>{$o.percent|string_format:"%.2f"}</td>
</tr>
{/foreach}
{if $settings.enable_calculator and $p.period != 'Floating'}
<tr>
 <td colspan=3 align=right><a href="javascript:openCalculator('{$p.id}')">Calculate your profit &gt;&gt;</a></td>
</tr>
{/if}
{/if}
</table>

{if $userinfo.logged}
<br>
<form method=post>
<input type=hidden name=a value=deposit>
<input type=submit value="Make deposit" class=sbmt>
<input type=hidden name=h_id value={$p.id}>
</form>
<br><br>
{/if}
{/if}
{/foreach}
