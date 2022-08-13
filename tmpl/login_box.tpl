{if $userinfo.logged != 1}
{literal}
<script language=javascript>
function checklogin() {   
  if (document.loginform.username.value=='') {
    alert("Please enter your username!");
    document.loginform.username.focus();
    return false;
  }
  if (document.loginform.password.value=='') {
    alert("Please enter your password!");
    document.loginform.password.focus();
    return false;
  }
  return true;
}
</script>
{/literal}
<form method=post name=loginform onsubmit="return checklogin()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value='{$frm.follow}'>
<table cellspacing=0 cellpadding=2 border=0 width="100%">
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
 <th colspan=2 class=title>Member login</th>
 </tr>
<tr>
 <td class=menutxt>Username:</td>
 <td><input type=text name=username class=inpts size=15></td>
</tr>
<tr>
 <td class=menutxt>Password:</td>
 <td><input type=password name=password class=inpts size=15></td>
</tr>
{if $ti.check.login}
<tr>
 <td class=menutxt><img src="{"?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"></td>
 <td><input type=text name=validation_number class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td class=menutxt>&nbsp;</td>
 <td><input type=submit value="Login" class=sbmt size=15></td>
</tr>
<tr>
 <td colspan=2 align=right><a href="{"?a=forgot_password"|encurl}" class=menutxt>Password recovery</a>
</table>
</form>

{else}

<table cellspacing=0 cellpadding=2 border=0 width="100%">
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
 <th colspan=2 class=title>Navigation</th>
</tr><tr>
 <td class=menutxt><a href="{"index.phtml"|encurl}" class=menutxt>Home</a></td>
</tr><tr>
 <td class=menutxt><br><a href="{"?a=account"|encurl}" class=menutxt>Account</a></td>
</tr>
<tr>
 <td class=menutxt><br><a href="{"?a=deposit"|encurl}" class=menutxt>Make Deposit</a></td>
</tr>
<tr>
{if $settings.use_add_funds}
 <td class=menutxt><a href="{"?a=add_funds"|encurl}" class=menutxt>Make Deposit to Account</a></td>
</tr><tr>
{/if}
 <td class=menutxt><a href="{"?a=deposit_list"|encurl}" class=menutxt>Your Deposits</a></td>
</tr><tr>
 <td class=menutxt><a href="{"?a=deposit_history"|encurl}" class=menutxt>Deposits History</a></td>
</tr><tr>
 <td class=menutxt><br><a href="{"?a=history&type=earning"|encurl}" class=menutxt>Earnings History</a></td>
</tr>{if $settings.use_referal_program == 1}<tr>
 <td class=menutxt><a href="{"?a=history&type=commissions"|encurl}" class=menutxt>Referrals History</a></td>
</tr>{/if}
<tr>
 <td class=menutxt><br><a href="{"?a=withdraw"|encurl}" class=menutxt>Withdraw</a></td>
</tr><tr>
 <td class=menutxt><a href="{"?a=withdraw_history"|encurl}" class=menutxt>Withdrawals History</a></td>
</tr>
{if $settings.enable_exchange == 1}
<tr>
 <td class=menutxt><br><a href="{"?a=exchange"|encurl}" class=menutxt>Currency Exchange</a></td>
</tr>
{/if}
{if $settings.internal_transfer_enabled}
<tr>
 <td class=menutxt><br><a href="{"?a=internal_transfer"|encurl}" class=menutxt>Internal Transfer</a></td>
</tr>
{/if}
{if $settings.use_referal_program == 1}<tr>
 <td class=menutxt><br><a href="{"?a=referals"|encurl}" class=menutxt>Your Referrals</a></td>
</tr><tr>
 <td class=menutxt><a href="{"?a=referallinks"|encurl}" class=menutxt>Referral Links</a></td>
</tr>{/if}
{if $settings.tell_friend_page}
<tr>
 <td class=menutxt><a href="{"?a=tell_friend"|encurl}" class=menutxt>Tell a friend</a></td>
</tr>
{/if}
<tr>
 <td class=menutxt><br><a href="{"?a=edit_account"|encurl}" class=menutxt>Edit Account</a></td>
</tr><tr>
 <td class=menutxt><a href="{"?a=security"|encurl}" class=menutxt>Security</a></td>
</tr><tr>
{* <td class=menutxt><a href="{"?a=trans_code_recovery"|encurl}" class=menutxt>Alt pass recovery</a></td></tr><tr>*}

 <td class=menutxt><br><a href="{"?a=logout"|encurl}" class=menutxt>Logout</a></td>
</tr>
</table>


{/if}