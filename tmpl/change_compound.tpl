{include file="header.tpl"}

<h3>Change Compounding Percent:</h3><br>

{if $fatal}
 {if $fatal eq 'deposit_not_found'}Wrong deposit ID has been provided{/if}
 {if $fatal eq 'compound_forbidden'}Compounding is not available for your deposit{/if}
{else}

<script>
{literal}
function openCalculator(id)
{
  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");
}
{/literal}
</script>

{if $frm.complete}
 Compounding percent has been successfully changed.
<br><br>
{/if}

<form method=post name=change_compound>
<input type=hidden name=a value=change_compound>
<input type=hidden name=action value=change>
<input type=hidden name=deposit value={$deposit.id}>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2>
   Change the compounding percent for <b>{$currency_sign}{$deposit.deposit}</b> 
   deposit in the <b>{$type.name|escape:html}</b>
 </td>
</tr>
<tr>
 <td nowrap width=1%>Compounding percent: </td>
 <td>
  <select name='percent' class=inpts>
{foreach from=$compound_percents key=p item=i}
 <option value="{$p}" {if $deposit.compound == $p}selected{/if}>{$p}</option>
{/foreach}
  </select>
 </td>
</tr>
{if $settings.enable_calculator}
<tr>
 <td colspan=2><a href="javascript:openCalculator({$type.id})">Calculate your profit &gt;&gt;</a></td>
</tr>
{/if}
<tr>
 <td><a href="{"?a=deposit_list"|encurl}">Return</a></td>
 <td><input type=submit value="Change" class=sbmt></td>
</tr></table>
</form>

{/if}

{include file="footer.tpl"}
