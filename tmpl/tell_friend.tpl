{include file="header.tpl"}


<h3>Tell friend:</h3><br><br>

{if $say eq 'invite_sent'}
Your invite/invites has been successfully sent.<br><br>
{/if}

<form action="index.php" method=post >
<input type=hidden name=a value=tell_friend>
<input type=hidden name=action value=tell_friend>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Name 1:</td>
 <td><input type=text name=name1 class=inpts></td>
 <td>Email 1:</td>
 <td><input type=text name=email1 class=inpts></td>
</tr>
<tr>
 <td>Name 2:</td>
 <td><input type=text name=name2 class=inpts></td>
 <td>Email 2:</td>
 <td><input type=text name=email2 class=inpts></td>
</tr>
<tr>
 <td>Name 3:</td>
 <td><input type=text name=name3 class=inpts></td>
 <td>Email 3:</td>
 <td><input type=text name=email3 class=inpts></td>
</tr>
<tr>
 <td colspan=4 align=center><input type=submit value="Send" class=sbmt></td>
</tr>
</table>
</form>

{include file="footer.tpl"}

