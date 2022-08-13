<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=2 class=title>News</th>
</tr>
{loaddata name="news" var=news limit=$settings.last_news_count|default:5}
{foreach from=$news item=n}
<tr>
 <td><p align=justify><b>{$n.title|escape:html}</b><br>
  {$n.small_text|escape:html} <a href="{"?a=news#`$n.id`"|encurl}">more</a><br>
  <small><i>{$n.d}</i></small></p>
 </td>
</tr>
{/foreach}
<tr>
 <td><a href="{"?a=news"|encurl}">All news</a>
 </td>
</tr>
</table>
<br>
