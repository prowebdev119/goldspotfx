{include file="header.tpl"}

{if $userinfo.logged}

{if $frm.say == 'success'}
<b style=color:green>Your review has been saved. It will be published after admin approval.</b>
{else}
<form method=post>
<input type=hidden name=a value=reviews>
<input type=hidden name=action value=post>
<h3>Leave Review:</h3>
{if $errors}
<ul style="color:red">
 {if $errors.uname}
    <li>Please enter your name</li>
 {/if}
 {if $errors.review}
    <li>Please enter your review message</li>
 {/if}
</ul>
{/if}
<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <td>Your name:</td>
 <td><input type=text name=uname value="{$frm.uname|default:$userinfo.name|escape:htmlall}" class=inpts></td>
</tr>
<tr>
 <td>Your review:</td>
 <td><textarea name=review class=inpts style="width:100%">{$frm.review|escape:html}</textarea></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit class=sbmt value="Leave Review"> <input type=button class=sbmt value="Skip" onclick="document.location='?a=withdraw'"></td>
</tr>
</table>
</form>
<br>
{/if}

{/if}

<h3>Reviews</h3>


<table cellspacing=1 cellpadding=2 border=0 width=100%>
{loaddata name="reviews" var=reviews page=$frm.p limit=20 pages_var=pages}
{foreach from=$reviews item=r}
<tr>
 <td align=justify><i>{$r.review|escape:htmlall}</i><br>
  {$r.uname|escape:html} - {$r.date}<br>
 </td>
</tr>
{foreachelse}
<tr>
 <td colspan=3 align=center>No reviews found</td>
</tr>
{/foreach}
</table>

<center>
{paginator col=$pages.col cur=$pages.cur url="?a=reviews&p=%s"|encurl}
</center>


{include file="footer.tpl"}
