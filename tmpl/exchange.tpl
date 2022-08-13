{include file="header.tpl"}

{literal}
<script>
var balances = new Array();
{/literal}
                                                                                                 
var currencies = new Array({section name=ec loop=$ec}'{$ec[ec].ec}'{if !$smarty.section.ec.last},{/if}{/section});
var curs = new Array({section name=ec loop=$exchange}'{$exchange[ec].from}'{if !$smarty.section.ec.last},{/if}{/section});

{section name=ec loop=$ec}
balances[{$ec[ec].ec}] = new Number('{$ec[ec].balance}');
{/section}

var exchange = new Array();
{section name=from loop=$exchange}
exchange[{$exchange[from].from}] = new Array();
{section name=to loop=$exchange[from].tos}
exchange[{$exchange[from].from}][{$exchange[from].tos[to].to}] = new Number('{$exchange[from].tos[to].percent}');
{/section}
{/section}

{literal}
function in_out(id, bForce)
{
  var d = document.exchange_form;

  if (d.elements['to_'+id].selectedIndex == 0)
  {
    chng_bg(id, '#FBF7CC');
    d.elements["estimate_" + id].value = 0;
    return true;
  }

  in_val = new Number(d.elements["amount_"+id].value.replace(",","."));
  if (isNaN(in_val))
  { in_val = 0; }

  in_val = Math.floor(in_val * 100) / 100;
  if (in_val <= 0)
  {
    d.elements['estimate_'+id].value = 0;
    return false;
  }

  if (in_val > balances[id])
  {
    d.elements['amount_'+id].value = balances[id];
    in_out(id);
    return false;
  }

  var from_id = id;
  var to_id = d.elements['to_'+id].options[d.elements['to_'+id].selectedIndex].value;

  if (document.getElementById('e'+from_id+'_'+to_id))
  {
    chng_bg(from_id, '#FBF7CC');
    document.getElementById('e'+from_id+'_'+to_id).style.backgroundColor = '#FFEA00';
  }

  var percent = Math.round(exchange[from_id][to_id] * 100) / 10000;
  var amount =  Math.round((1 - percent) * in_val * 100) / 100;

  d.elements["estimate_" + id].value = amount;

  if (bForce)
  {
    out_in(id);
  }
}

function out_in(id, bForce)
{
  var d = document.exchange_form;

  if (d.elements['to_'+id].selectedIndex == 0)
  {
    chng_bg(id, '#FBF7CC');
    return true;
  }

  out_val = new Number(d.elements["estimate_"+id].value.replace(",","."));
  if (isNaN(out_val))
  { out_val = 0; }

  out_val = Math.ceil(out_val * 100) / 100;

  if (out_val <= 0)
  {
    d.elements['amount_'+id].value = 0;
    return false;
  }

  var from_id = id;
  var to_id = d.elements['to_'+id].options[d.elements['to_'+id].selectedIndex].value;

  if (document.getElementById('e'+from_id+'_'+to_id))
  {
    chng_bg(from_id, '#FBF7CC');
    document.getElementById('e'+from_id+'_'+to_id).style.backgroundColor = '#FFEA00';
  }

  var percent = Math.round(exchange[from_id][to_id] * 100) / 10000;
  var amount =  Math.round(out_val / (1 - percent) * 100) / 100;

  if (amount > balances[id])
  {
    d.elements["amount_" + id].value = balances[id];
    in_out(id);
    return false;
  }

  d.elements["amount_" + id].value = amount;

  if (bForce)
  {
    in_out(id);
  }
}

function chng_selection(id)
{
  var d = document.exchange_form;

  if (d.from.length)
  {
    if (!id)
    {
      for (i = 0; i < d.from.length; i++)
      {
        if (d.from[i].checked)
        {
          id = d.from[i].value;
        }
      }
    }

    for (i = 0; i < currencies.length; i++)
    {
      tid = currencies[i];
      d.elements['to_'+tid].disabled = true;
      d.elements['amount_'+tid].disabled = true;
      d.elements['estimate_'+tid].disabled = true;
      d.elements['exchange_'+tid].disabled = true;
      chng_bg(tid, '#FFFFFF');
    }

    d.elements['to_'+id].disabled = false;
    d.elements['amount_'+id].disabled = false;
    d.elements['estimate_'+id].disabled = false;
    d.elements['exchange_'+id].disabled = false;
    chng_bg(id, '#FBF7CC');
  }
}

function chng_bg(id, color)
{
  if (document.getElementById('e' + id + '_t'))
  {
    document.getElementById('e' + id + '_t').style.backgroundColor = color;
  }

  for (var i = 0; i < curs.length; i++)
  {
    if (document.getElementById('e' + id + '_' + curs[i]))
    {
      document.getElementById('e' + id + '_' + curs[i]).style.backgroundColor = color;
    }
  }
}
</script>
{/literal}

<h3>Exchange Center:</h3><br><br>

{if $ec}
<form method=post name="exchange_form">
<input type="hidden" name="a" value="exchange">
<input type="hidden" name="action" value="preview">
<table cellspacing=0 cellpadding=2 border=0>
{section name=ec loop=$ec}
<tr>
 <td><input type="radio" name="from" value="{$ec[ec].ec}" {if $smarty.section.ec.index == 0}checked{/if} onclick="chng_selection('{$ec[ec].ec}')"></td>
 <td><img src="images/{$ec[ec].ec}.gif" align=absmiddle height=17> {$ec[ec].ec_name} :</td>
 <td><input type=text name="amount_{$ec[ec].ec}" value="{$ec[ec].balance}" class=inpts size=7
      onchange="in_out('{$ec[ec].ec}')" onkeyup="in_out('{$ec[ec].ec}')"
      onfocusout="in_out('{$ec[ec].ec}', true)" onactivate="in_out('{$ec[ec].ec}', true)"
      ondeactivate="in_out('{$ec[ec].ec}', true)">
 </td>
 <td>to</td>
 <td>
  <select name="to_{$ec[ec].ec}" class=inpts onchange="in_out('{$ec[ec].ec}')">
   <option value=''>--SELECT--</option>
{section name=ecs loop=$ec[ec].tos}
{if $ec[ec].ec != $ec[ec].tos[ecs].to}
<option value={$ec[ec].tos[ecs].to}>{$ec[ec].tos[ecs].ec_name}</option>
{/if}
{/section}
  </select>
 </td>
 <td><input type=text name="estimate_{$ec[ec].ec}" value="0" class=inpts size=7
      onchange="out_in('{$ec[ec].ec}')" onkeyup="out_in('{$ec[ec].ec}')"
      onfocusout="out_in('{$ec[ec].ec}', true)" onactivate="out_in('{$ec[ec].ec}', true)"
      ondeactivate="out_in('{$ec[ec].ec}', true)">
 </td>
 <td><input type=submit name="exchange_{$ec[ec].ec}" value="Exchange" class=sbmt></td>
</tr>
{/section}
</table>
</form>
{else}
Currently you have no funds to exchange.<br><br>
{/if}

<h3>Our Exchange Rates:</h3><br>
<table cellspacing=0 cellpadding=0 border=0><tr><td class=calendartable>
<table cellspacing=1 cellpadding=2 border=0>
<tr>
 <td align=center class=calendartablebg>From / To</td>
{section name=from loop=$exchange}
 <td align=center class=calendartablebg><img src="images/{$exchange[from].from}.gif" height=17></td>
{/section}
</tr>
{section name=from loop=$exchange}
<tr>
 <td align=center class=calendartablebg id="e{$exchange[from].from}_t"><img src="images/{$exchange[from].from}.gif" height=17></td>
 {section name=to loop=$exchange[from].tos}
  <td align=center class=calendartablebg id="e{$exchange[from].from}_{$exchange[from].tos[to].to}">
   {if $exchange[from].from == $exchange[from].tos[to].to}
     -
   {else}
    {if $exchange[from].tos[to].percent == 100}
     -
    {else}
     {$exchange[from].tos[to].percent}%
    {/if}
   {/if}
  </td>
 {/section}
</tr>
{/section}
</table>
</td></tr></table>

{if $ec}
{literal}
<script>
chng_selection();
</script>
{/literal}
{/if}

{include file="footer.tpl"}
