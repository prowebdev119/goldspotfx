{assign var="allow" value="all"}
{assign var="meta_title" value="Lists"}
{include file="header.tpl"}

{if $frm.id}

{loaddata name="list_items" list=$frm.id order="date" var="items"}

<h3>{$list.name|escape:html}</h3>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
{foreach item=l from=$items}
<tr>
 <td align=justify>
  <a href="{$l.url}">{$l.title|escape:htmlall}</a><br>
  {if $l.image_url}<img src="{$l.image_url}" alt="{$l.title|escape:htmlall}">{/if} {$l.description|nl2br}<br>
  <i>{$l.date}</i>
 </td>
</tr>
{foreachelse}
<tr>
 <td colspan=3 align=center>No Items</td>
</tr>
{/foreach}
</table>

{else}

<h3>Lists</h3>

{loaddata name="lists" var="lists"}

<table cellspacing=1 cellpadding=2 border=0 width=100%>
{foreach item=l from=$lists}
<tr>
 <td align=justify>
  <a href="{"?a=lists&id=`$l.link`"}">{$l.name|escape:html}</a><br>
  <i>{$l.description|nl2br}</i><br>
 </td>
</tr>
{foreachelse}
<tr>
 <td colspan=3 align=center>No Lists</td>
</tr>
{/foreach}
</table>

{/if}


{include file="footer.tpl"}