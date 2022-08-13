{include file="logo.tpl"}

<section class="main-page">
    <div class="main-page-img"></div>
    <div class="main-inset">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i></i>
                        <span>[  Account Login  ]</b></span>
                    </div>
                    <div class="main-page-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-7">
                                    <div class="form-box">
                                        {literal}
                                        <script language=javascript>
                                            function checkform() {
                                                if (document.mainform.username.value == '') {
                                                    alert("Please type your username!");
                                                    document.mainform.username.focus();
                                                    return false;
                                                }
                                                if (document.mainform.password.value == '') {
                                                    alert("Please type your password!");
                                                    document.mainform.password.focus();
                                                    return false;
                                                }
                                                return true;
                                            }
                                        </script>
                                        {/literal}

                                        {if $frm.say eq 'invalid_login'}
                                            <h3>Login error:</h3>
                                            <br>
                                            <br>
                                            Your login or password or turing image code is wrong. Please check this information.
                                        {/if}

                                        <form method=post name=mainform onsubmit="return checkform()">
                                            <input type=hidden name=a value='do_login'>
                                            <input type=hidden name=follow value='{$frm.follow}'>
                                            <input type=hidden name=follow_id value='{$frm.follow_id}'>

                                            <div ng-cloak ng-show="!form.verification">
                                                <div class="form-group">
                                                    <label>Username:</label>
                                                    <input type=text name=username value='{$frm.username|escape:"html"}' class="form-control inpts" size=30
                                                           autofocus="autofocus">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password:</label>
                                                    <input type=password name=password value='' class="form-control inpts" size=30>
                                                </div>
                                                {if $ti.check.login}
                                                    <div class="form-group">
                                                        <img src="{"?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}">
                                                        <input type=text name=validation_number class=form-control size=30>
                                                    </div>
                                                {/if}
                                            </div>

                                            <div class="devider" style="margin-top: 34px;"></div>
                                            <div class="form-group text-right">
                                                <a href="index.php?a=forgot_password" class='forgot-link'>Can't access
                                                    account?</a>&nbsp;&nbsp;&nbsp;
                                                <button type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <ul class='form-list'>
                                        <li style="margin-top: 42px;">
                                            <i class='icon-user'></i>
                                            <p>
                                                Goldspotfx is available only to the members of the site. You agree
                                                to be of legal age in your country to join this site and in all the
                                                cases your minimum age must be 18 years. Every deposit is considered to
                                                be a private transaction between Goldspotfx and its member.
                                            </p>
                                        </li>
                                        <li style="margin-top: 65px;" class="even">
                                            <i class='icon-key'></i>
                                            <p>
                                                We use dedicated servers, secured with antivirus and anti-malware
                                                program. Confidential information in our website is encrypted. Our site
                                                is within a DDOS protected server to make sure it loads fast , we always
                                                stay online & your data is safe with us.
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
</section>
{include file="footer2.tpl"} 