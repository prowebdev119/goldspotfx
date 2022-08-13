{include file="logo.tpl"}


<section class="main-page">
    <div class="main-page-img"></div>
    <div class="main-inset">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i></i>
                        <span>[  Account Registration  ]</b></span>
                    </div>
                    <div class="main-page-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-7">
                                    <div class="form-box">
                                        {if $deny_registration}
                                            We are closed for new registrations now.
                                        {elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
                                            You  do not have a upline. Our system require a upline for each user.
                                        {else}
                                        {literal}
                                            <script language=javascript>
                                                function checkform() {
                                                    if (document.regform.fullname.value == '') {
                                                        alert("Please enter your full name!");
                                                        document.regform.fullname.focus();
                                                        return false;
                                                    }
                                                    {/literal}
                                                    {if $settings.use_user_location == 1}
                                                    {literal}
                                                    if (document.regform.address.value == '') {
                                                        alert("Please enter your address!");
                                                        document.regform.address.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.city.value == '') {
                                                        alert("Please enter your city!");
                                                        document.regform.city.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.state.value == '') {
                                                        alert("Please enter your state!");
                                                        document.regform.state.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.zip.value == '') {
                                                        alert("Please enter your ZIP!");
                                                        document.regform.zip.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
                                                        alert("Please choose your country!");
                                                        document.regform.country.focus();
                                                        return false;
                                                    }
                                                    {/literal}
                                                    {/if}
                                                    {literal}
                                                    if (document.regform.username.value == '') {
                                                        alert("Please enter your username!");
                                                        document.regform.username.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.password.value == '') {
                                                        alert("Please enter your password!");
                                                        document.regform.password.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.password.value != document.regform.password2.value) {
                                                        alert("Please check your password!");
                                                        document.regform.password2.focus();
                                                        return false;
                                                    }
                                                    {/literal}
                                                    {if $settings.use_transaction_code}
                                                    {literal}
                                                    if (document.regform.transaction_code.value == '') {
                                                        alert("Please enter your transaction code!");
                                                        document.regform.transaction_code.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
                                                        alert("Please check your transaction code!");
                                                        document.regform.transaction_code2.focus();
                                                        return false;
                                                    }
                                                    {/literal}
                                                    {/if}
                                                    {literal}
                                                    if (document.regform.email.value == '') {
                                                        alert("Please enter your e-mail address!");
                                                        document.regform.email.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.email.value != document.regform.email1.value) {
                                                        alert("Please retupe your e-mail!");
                                                        document.regform.email.focus();
                                                        return false;
                                                    }
                                                    if (document.regform.agree.checked == false) {
                                                        alert("You have to agree with the Terms and Conditions!");
                                                        return false;
                                                    }
                                                    return true;
                                                }

                                                function IsNumeric(sText) {
                                                    var ValidChars = "0123456789";
                                                    var IsNumber = true;
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
                                            </script>
                                        {/literal}

                                        {if $errors}
                                            <ul style="color:red">
                                                {section name=e loop=$errors}
                                                {if $errors[e] eq 'full_name'}
                                                <li>Please enter your full name!
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
                                                    {if $errors[e] eq 'username_exists'}
                                                <li>Sorry, such user already exists! Please try another username.
                                                    {/if}
                                                    {if $errors[e] eq 'email_exists'}
                                                <li>Sorry, such email already exists! Please try another email.
                                                    {/if}
                                                    {if $errors[e] eq 'password'}
                                                <li>Please enter a password!
                                                    {/if}
                                                    {if $errors[e] eq 'password_confirm'}
                                                <li>Please check your password!
                                                    {/if}
                                                    {if $errors[e] eq 'password_too_small'}
                                                <li>The password you provided is too small, please enter at
                                                    least {$settings.min_user_password_length} characters!
                                                    {/if}
                                                    {if $errors[e] eq 'transaction_code'}
                                                <li>Please enter the Transaction Code!
                                                    {/if}
                                                    {if $errors[e] eq 'transaction_code_confirm'}
                                                <li>Please check your Transaction Code!
                                                    {/if}
                                                    {if $errors[e] eq 'transaction_code_too_small'}
                                                <li>The Transaction Code you provided is too small, please enter at
                                                    least {$settings.min_user_password_length} characters!
                                                    {/if}
                                                    {if $errors[e] eq 'transaction_code_vs_password'}
                                                <li>The Transaction Code should differ from the Password!
                                                    {/if}
                                                    {if $errors[e] eq 'egold'}
                                                <li>Please enter your e-gold account number!
                                                    {/if}
                                                    {if $errors[e] eq 'email'}
                                                <li>Please enter your e-mail!
                                                    {/if}
                                                    {if $errors[e] eq 'agree'}
                                                <li>You have to agree with the Terms and Conditions!
                                                    {/if}
                                                    {if $errors[e] eq 'turing_image'}
                                                <li>Enter the verification code as it is shown in the corresponding box.
                                                    {/if}
                                                    {if $errors[e] eq 'no_upline'}
                                                <li>The system requires an upline to
                                                    register. {if $settings.get_rand_ref}You have to be agreed to random one or found a referral link in the net.{/if}
                                                    {/if}
                                                    {if $errors[e] eq 'ip_exists_in_database'}
                                                <li>Your IP already exists in our database. Sorry, but registration
                                                    impossible.
                                                    {/if}

                                                    <br>
                                                    {/section}
                                            </ul>
                                        {/if}
                                            <form method=post onsubmit="return checkform()" name="regform">
                                                <input type=hidden name=a value="signup">
                                                <input type=hidden name=action value="signup">
                                                <div ng-cloak ng-show="!form.verification">
                                                    <div class="form-group">
                                                        <label>Your Full Name:</label>
                                                        <input type=text name=fullname value="{$frm.fullname|escape:"quotes"}" class=form-control
                                                               size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Your Username:</label>
                                                        <input type=text name=username value="{$frm.username|escape:"quotes"}" class=form-control
                                                               size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Define Password:</label>
                                                        <input type=password name=password value="{$frm.password|escape:"quotes"}" class=form-control
                                                               size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Retype Password:</label>
                                                        <input type=password name=password2 value="{$frm.password2|escape:"quotes"}" class=form-control
                                                               size=30>
                                                    </div>
                                                    {foreach from=$pay_accounts item=ps}
                                                        <div class="form-group">
                                                            <label>Your {$ps.name} Account:</label>
                                                            <input type=text class=form-control size=30
                                                                   name=pay_account[{$ps.id}]
                                                                   value="{$ps.account|escape:html}">
                                                        </div>
                                                    {/foreach}
                                                    {foreach item=p from=$mpay_accounts}
                                                        {foreach item=ps from=$p.accounts}
                                                            <div class="form-group">
                                                                <label>Your {$p.name} {$ps.name}:</label>
                                                                <input type=text class=form-control size=30
                                                                       name="pay_account[{$p.id}][{$ps.name|escape:html}]"
                                                                       value="{$ps.value|escape:html}">
                                                            </div>
                                                        {/foreach}
                                                    {/foreach}

                                                    <div class="form-group">
                                                        <label>Your E-mail Address:</label>
                                                        <input type=text name=email value="{$frm.email|escape:"quotes"}" class=form-control size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Retype Your E-mail:</label>
                                                        <input type=text name=email1 value="{$frm.email1|escape:"quotes"}" class=form-control
                                                               size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Secret question:</label>
                                                        <input type=text name=sq value="{$frm.sq|escape:"quotes"}" class=form-control size=30>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Secret answer:</label>
                                                        <input type=text name=sa value="{$frm.sa|escape:"quotes"}" class=form-control size=30>
                                                    </div>
                                                    {if $settings.use_transaction_code}
                                                        <div class="form-group">
                                                            <label>Define Transaction Code:</label>
                                                            <input type=password name=transaction_code value='{$frm.transaction_code|escape:"quotes"}' class=form-control size=30 style="width: 250px">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Retype Transaction Code:</label>
                                                            <input type=password name=transaction_code2 value='{$frm.transaction_code2|escape:"quotes"}' class=form-control size=30 style="width: 250px">
                                                        </div>
                                                    {/if}
                                                    {if $ti.check.signup}
                                                        <div class="form-group">
                                                            <img src="{"?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}">
                                                            <input type=text name=validation_number class=form-control size=30>
                                                        </div>
                                                    {/if}

                                                    <div class="form-group">
                                                        <div>
                                                            <br>
                                                            <div class="devider"></div>
                                                            <div class="form-group form-checkbox">
                                                                <div>
                                                                    <label>
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             version="1.1" x="0px" y="0px"
                                                                             viewBox="0 0 512 512" xml:space="preserve">
                                                                            <g>
                                                                                <path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0    c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7    C514.5,101.703,514.499,85.494,504.502,75.496z"/>
                                                                            </g>
                                                                        </svg>

                                                                        <input type=checkbox name=agree value=1
                                                                               {if $frm.agree}checked{/if}>
                                                                    </label>
                                                                    <p>I've read the <a href="index.php/?a=rules"
                                                                                        target="_blank">terms and
                                                                            conditions</a></p>

                                                                </div>
                                                            </div>
                                                            <div class="form-group text-right">
                                                                <button type="submit">Register</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        {/if}

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <ul class='form-list'>
                                        <li style="margin-top: 42px;">
                                            <i class='icon-user'></i>
                                            <p>
                                                Goldspotfx is available only to the members of the site. You agree to be of
                                                legal age in your country to join this site and in all the cases your minimum age
                                                must be 18 years. Every deposit is considered to be a private transaction between
                                                Goldspotfx and its member.
                                            </p>
                                        </li>
                                        <li style="margin-top: 80px;">
                                            <i class='icon-mail'></i>
                                            <p>
                                                We provide 24x7 monitoring and client support services to all of our esteemed
                                                investors. You may contact us anytime directly at support@goldspotfx.com & we will
                                                reply you asap.
                                            </p>
                                        </li>

                                        <li style="margin-top: 88px;" class="even">
                                            <i class='icon-key'></i>
                                            <p>
                                                We use dedicated servers, secured with antivirus and anti-malware program.
                                                Confidential information in our website is encrypted. Our site is within a DDOS
                                                protected server to make sure it loads fast , we always stay online & your data is
                                                safe with us.
                                            </p>
                                        </li>
                                        <li style="margin-top: 80px;" class="even">
                                            <i class='icon-lock'></i>
                                            <p>
                                                Goldspotfx knows that you care how information about you is used and shared.
                                                Hence we make a strong commitment to protect and respect the privacy principles
                                                regarding the information that you provide. All the data given by a member to
                                                Goldspotfx will be only privately used and not disclosed to any third parties.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>

{include file="footer2.tpl"} 