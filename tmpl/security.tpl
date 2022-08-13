{include file="mheader.tpl"}
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="account-title">Security Settings</h2>
                            </div>
                        </div>
<div class="col-md-9">
                                <div class="box-account-table mem-form-box" style='margin-top:30px; padding: 30px 15px'>




        



<form method=post>
<input type=hidden name=a value="security">
<input type=hidden name=action value="save">
<div class="form-group">
           
<div class="box-account-table">
            <table class="table table-list">
                <thead>
                <tr>
                    <th colspan="2"><i class="icon-params"></i> Detect IP Address Change Sensitivity
                    </th>
                </tr>
                </thead>
                <tbody>

<tr>

<td><input type=radio name=ip value=disabled {if $security.detect_ip == 'disabled'}checked{/if} style="cursor: pointer;"> Disabled<br>
<input type=radio name=ip value=medium  {if $security.detect_ip == 'medium'}checked{/if} style="cursor: pointer;"> Medium<br>
<input type=radio name=ip value=high {if $security.detect_ip == 'high'}checked{/if} style="cursor: pointer;"> High<br>
<input type=radio name=ip value=always {if $security.detect_ip == 'always'}checked{/if}  style="cursor: pointer;"> Paranoic<br><br></td>
</tbody>

<thead>
                <tr>
                    <th colspan="2"><i class="icon-params"></i> Detect Browser Change
                    </th>
                </tr>
                </thead>
<tbody>

<tr>

<td><input type=radio name=browser value=disabled  {if $security.detect_browser == 'disabled'}checked{/if} style="cursor: pointer;"> Disabled<br>
<input type=radio name=browser value=enabled {if $security.detect_browser == 'enabled'}checked{/if} style="cursor: pointer;"> Enabled<br><br></td>
</tr>
<tr>
<td><div class="form-group text-center">
<button type="submit">Set</button>
                   
                </div></td>

</tr>
</tbody></table>

</form>

 
{if $settings.use_tfa}
<h3>Two Factor Authentication</h3>
<form method=post name=mainform>
<input type=hidden name=a value="security">
<input type=hidden name=action value="tfa_save">
<input type=hidden name=time>
{if $errors.invalid_tfa_code}
<b style=color:red>Invalid code.</b><br>
{/if}
{if $errors.invalid_tfa_secret}
<b style=color:red>Invalid Secret.</b><br>
{/if}

{if $tfa_enabled}
<input type="checkbox" name="tfa_on_login" value=1 {if $tfa_settings.login}checked{/if}> on Login<br>
<input type="checkbox" name="tfa_on_edit_account" value=1 {if $tfa_settings.edit_account}checked{/if}> on Edit Account<br>
<input type="checkbox" name="tfa_on_withdraw" value=1 {if $tfa_settings.withdraw}checked{/if}> on Withdraw<br>
<input type="checkbox" name="tfa_disable" value=1> <b style=color:red>Disable Two Factor Authentication (not recommended)</b><br>
<br>
Confirm by typing code: <input type=text name="code" class=inpts> <input type=submit value="Update" class=sbmt>
{else}
1. Install <a href="http://m.google.com/authenticator" targe=_blank>Google Authenticator</a> on your mobile device.<br>
2. Your Secret Code is: <b>{$tfa_secret}</b> <input type=hidden name="tfa_secret" value="{$tfa_secret}"><br>
<img src="{$tfa_secret_url}"><br>
3. Please enter two factor token from Google Authenticator to verify correct setup:<br> 
<input type=text name="code" class=inpts> <input type=submit value="Enable" class=sbmt>
{/if}
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
{/if} {* use_tfa *}


</div>
        </div>
        </div>
        </div>
    {include file="mfooter.tpl"}