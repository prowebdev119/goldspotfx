{include file="mheader.tpl"}
<div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Account Setting</h2>
                            </div>
                        </div>
<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>
{literal}


<script language=javascript>
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
}

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }
{/literal}
{if $settings.use_user_location == 1}
{literal}
  if (document.editform.address.value == '') {
    alert("Please enter your address!");
    document.editform.address.focus();
    return false;
  }
  if (document.editform.city.value == '') {
    alert("Please enter your city!");
    document.editform.city.focus();
    return false;
  }
  if (document.editform.state.value == '') {
    alert("Please enter your state!");
    document.editform.state.focus();
    return false;
  }
  if (document.editform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.editform.zip.focus();
    return false;
  }
  if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.editform.country.focus();
    return false;
  }
{/literal}
{/if}
{literal}
  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }
{/literal}
{if $settings.use_transaction_code}
{literal}
  if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.editform.transaction_code2.focus();
    return false;
  }
{/literal}
{/if}
{literal}
{/literal}
{if $settings.usercanchangeemail == 1}
{literal}
  if (document.editform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.editform.email.focus();
    return false;
  }
{/literal}
{/if}
{literal}
  return true;
}
</script>
{/literal}
 
<form action="index.php" method=post onsubmit="return checkform()" name=editform>
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
{if $frm.say eq 'changed'}
Your account data has been updated successfully.<br><br>
{/if}
{if $errors}
<ul style="color:red">
{section name=e loop=$errors}
{if $errors[e] eq 'full_name'}
<li>Please enter your Full Name!
{/if}
{if $errors[e] eq 'address'}
<li>Please enter your address!
{/if}
{if $errors[e] eq 'city'}
<li>Please enter your city!
{/if}
{if $errors[e] eq 'state'}
<li>Please enter your state!
{/if}
{if $errors[e] eq 'zip'}
<li>Please enter your zip!
{/if}
{if $errors[e] eq 'country'}
<li>Please choose your country!
{/if}
{if $errors[e] eq 'username'}
<li>Please enter your username!
{/if}
{if $errors[e] eq 'password'}
    <li>Please enter a password!
{/if}
{if $errors[e] eq 'password_confirm'} 
    <li>Please check your password!
{/if}
{if $errors[e] eq 'password_too_small'}
<li>Password is too small, please enter at least {$settings.min_user_password_length} chars!
{/if}
{if $errors[e] eq 'transaction_code'}
    <li>Please enter the Transaction Code! {/if} {if $errors[e] eq 'transaction_code_confirm'} 
    <li>Please check your Transaction Code!
{/if}
{if $errors[e] eq 'transaction_code_too_small'}
<li>Transaction Code is too small, please enter at least {$settings.min_user_password_length} chars!
{/if}
{if $errors[e] eq 'wrong_current_password'}
<li>You entered wrong current password
{/if}
{if $errors[e] eq 'transaction_code_vs_password'}
    <li>Transaction Code should be different then the Password! {/if} {if $errors[e] 
      eq 'invalid_transaction_code'} 
    <li>You have provided invalid Current Transaction Code!
{/if}
{if $errors[e] eq 'email'}
<li>Please enter your e-mail!
{/if}
{if $errors[e] eq 'turing_image'}
<li>Enter the verification code as it is shown in the corresponding box.
{/if} 
<br>
{/section}
</ul>
{/if}
<table class="table table-opers" width="100%">
<tr>
 <td>Account Name:</td>
 <td><input type=text name=fullname value='{$userinfo.username}' disabled class=form-control size=30>
 </td>
</tr><tr>
 <td>Registration date:</td>
 <td><input type=text name=fullname value='{$userinfo.date_register}' disabled class=form-control size=30>
 
 </td>
</tr><tr>
 <td>Your Full Name:</td>
 <td><input type=text name=fullname value='{$userinfo.name|escape:"quotes"}' class=form-control size=30>
</tr>
{if $settings.use_user_location}
<tr>
 <td>Your Address:</td>
 <td><input type=text name=address value="{$userinfo.address|escape:"quotes"}" class=form-control size=30></td>
</tr>
<tr>
 <td>Your City:</td>
 <td><input type=text name=city value="{$userinfo.city|escape:"quotes"}" class=form-control size=30></td>
</tr>
<tr>
 <td>Your State:</td>
 <td><input type=text name=state value="{$userinfo.state|escape:"quotes"}" class=form-control size=30></td>
</tr>
<tr>
 <td>Your Zip:</td>
 <td><input type=text name=zip value="{$userinfo.zip|escape:"quotes"}" class=form-control size=30></td>
</tr>
<tr>
 <td>Your Country:</td>
 <td>
  <select name='country' class=form-control>
<option value=''>--SELECT--</option>
{section name=c loop=$countries}
<option {if $countries[c].name eq $userinfo.country}selected{/if}>{$countries[c].name|escape:"quotes"}</option>
{/section}
  </td>
</tr>
{/if}

{if $settings.license == '4ZQQN55VA2NXBVFUQJE6' }
<tr>
 <td>Current Password:</td>
 <td><input type=password name=current_password value="" class=form-control size=30></td>
</tr>
{/if}
<tr>
 <td>New Password:</td>
 <td><input type=password name=password value="" class=form-control size=30></td>
</tr><tr>
 <td>Retype Password:</td>
 <td><input type=password name=password2 value="" class=form-control size=30></td>
</tr>
{if $settings.use_transaction_code}
  {if $settings.use_transaction_code_edit_account != 1}
    {if $userinfo.transaction_code != ''}
    <tr>
     <td>Current Transaction Code:</td>
     <td><input type=password name=transaction_code_current value="" class=form-control size=30></td>
    </tr>
    {/if}
  {/if}
  <tr>
   <td>New Transaction Code:</td>
   <td><input type=password name=transaction_code value="" class=form-control size=30></td>
  </tr>
  <tr>
   <td>Retype Transaction Code:</td>
   <td><input type=password name=transaction_code2 value="" class=form-control size=30></td>
  </tr>
{/if}
{foreach item=ps from=$pay_accounts}
<tr>
 <td>Your {$ps.name} acc no:</td>
 <td>{if $settings.usercanchangeegoldacc == 0 && $ps.account != ''}{$ps.account|escape:html}{else}<input type=text class=form-control size=30 name="pay_account[{$ps.id}]" value="{$ps.account|escape:html}">{/if}</td>
</tr>
{/foreach}
{foreach item=p from=$mpay_accounts}
{foreach item=ps from=$p.accounts}
<tr>
 <td>Your {$p.name} {$ps.name}:</td>
 <td>{if $settings.usercanchangeegoldacc == 0 && $ps.value != ''}{$ps.value|escape:html}{else}<input type=text class=form-control size=30 name="pay_account[{$p.id}][{$ps.name|escape:html}]" value="{$ps.value|escape:html}">{/if}</td>
</tr>
{/foreach}
{/foreach}
<tr>
 <td>Your E-mail address:</td>
 <td>{if $settings.usercanchangeemail == 1}<input type=text name=email value='{$userinfo.email|escape:"quotes"}' class=form-control size=30>{else}{$userinfo.email}{/if}</td>
</tr>
{if $userinfo.admin_auto_pay_earning == 1}
<tr>
 <td colspan=2><input type=checkbox name=user_auto_pay_earning value=1 {if $userinfo.user_auto_pay_earning == 1}checked{/if}> Receive earnings directly to e-currency account</td>
</tr>
{/if}
{if $settings.accesswap == 1}
<tr>
 <td>Password for WAP access:</td>
 <td><input type=password name=wappassword class=form-control size=30> {if $userinfo.stat_password ne ''}<a href=?a=deletewappass onclick="return confirm('Are you sure delete this password?');">[delete current]</a>{/if}</td>
</tr><tr>
 <td colspan=2><small>wap access here: {$settings.site_url}/wap.php</small></td>
</tr>
{/if}
{if $settings.use_transaction_code_edit_account == 1}
<tr>
 <td>Current Transaction Code:</td>
 <td><input type=password name=transaction_code_current value="" class=form-control size=30></td>
</tr>
{/if}

{if $settings.license == '4ZQQN55VA2NXBVFUQJE6'}
<tr>
 <td class=menutxt align=right><img src="index.php?a=show_validation_image&{$userinfo.session_name}={$userinfo.session_id}&rand={$userinfo.rand}"></td>
 <td><input type=text name=validation_number class=form-control size=15></td>
</tr>
{/if}

<tr>
 <td>&nbsp;</td>
 <td><div class="form-group text-center">
<button type="submit">Change Account data</button>
                   
                </div></td>
</tr></table>
</form>
</div></div>
{include file="mfooter.tpl"}

