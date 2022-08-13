{include file="logo.tpl"}


 <section class="main-page">
        <div class="main-page-img"></div>
        <div class="main-inset">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i></i>
                            <span>[  Account Recovery  ]</b></span>
                        </div>
                        <div class="main-page-content">
                            <div class="row">
                                <div class="col-md-12">
<div class="row">
    <div class="col-md-6" style="margin-left: 293px;">



{literal}
<script language=javascript>
function checkform() {
  if (document.forgotform.email.value == '') {
    alert("Please type your username or email!");
    document.forgotform.email.focus();
    return false;
  }
  return true;
}
</script>
{/literal}
 


<h2>Forgot your password:</h2><br>



{if $found_records == 2}
Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.
<br><br>
{else}

{if $found_records == 0}
No accounts found for provided info.
<br><br>
{elseif $found_records == 1}
Request was confirmed. Login and password was sent to your email address.
<br><br>
{/if}


<form method=post name=forgotform onsubmit="return checkform();">
<input type=hidden name=a value="forgot_password">
<input type=hidden name=action value="forgot_password">
<div class="form-group">
 
 <input type=text name='email' value="" placeholder="Your Email or Username"class=form-control size=15>
</div>
<center><div class="form-group">
                    <button type="submit" class="button">Reset</button>
                </div></center>
 
</form><br><br>
{/if}
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