{include file="header.tpl"}

<h3>Two Factor Authorization:</h3>
{if $say == 'invalid_code'}
You have entered invalid code.
{/if}
<br>
<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value='do_login_tfa'>
<input type=hidden name=follow value='{$frm.follow}'>
<input type=hidden name=follow_id value='{$frm.follow_id}'>
<input type=hidden name=time>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Code:</td>
 <td><input type=text name=code value="" class=inpts size=30 autofocus="autofocus"></td>
</tr><tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Submit" class=sbmt> <input type=button onclick="{"?a=logout"|encurl}" value="Cancel" class=sbmt></td>
</tr></table>
</form>

{literal}
<script language=javascript>
document.mainform.time.value = (new Date()).getTime();

function checkform() {
  if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
    alert("Please type code!");
    document.mainform.code.focus();
    return false;
  }
  return true;
}
</script>
{/literal}


{include file="footer.tpl"}
