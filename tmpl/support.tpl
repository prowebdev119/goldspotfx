{include file="logo.tpl"}


<section class="main-page">
    <div class="main-page-img"></div>
    <div class="main-inset">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i></i>
                        <span>[  Contact Us  ]</b></span>
                    </div>
                    <div class="main-page-content">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-6">
                                    <div class="clearfix"></div>
                                    <br/>
                                    <ul class="list list-inline">

                                        <li class="even">
                                            <i class="icon icon-mail"></i>
                                            <b><span>E-mail</span></b>
                                            <p>
                                                <a href="">support@{$settings.site_name}</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box form-box-right">


                                        <script language=javascript>

                                            function checkform() {
                                                if (document.mainform.name.value == '') {
                                                    alert("Please type your full name!");
                                                    document.mainform.name.focus();
                                                    return false;
                                                }
                                                if (document.mainform.email.value == '') {
                                                    alert("Please enter your e-mail address!");
                                                    document.mainform.email.focus();
                                                    return false;
                                                }
                                                if (document.mainform.message.value == '') {
                                                    alert("Please type your message!");
                                                    document.mainform.message.focus();
                                                    return false;
                                                }
                                                return true;
                                            }

                                        </script>

                                        <form method=post name=mainform onsubmit="return checkform()">
                                            <input type=hidden name=a value=support>
                                            <input type=hidden name=action value=send>

                                            <div class="form-group">
                                                <label>Your Name:</label>
                                                <input type="text" name="name" value="" size=30 class=form-control>
                                            </div>
                                            <div class="form-group">
                                                <label>Your Email:</label>
                                                <input type="text" name="email" value="" size=30 class=form-control>
                                            </div>
                                            <div class="devider"></div>
                                            <div class="form-group">
                                                <label>Message:</label>
                                                <textarea name=message class=form-control cols=45 rows=4></textarea>
                                            </div>

                                            <div class="devider"></div>
                                            <div class="form-group text-left">
                                                <button type="submit">Send</button>
                                            </div>
                                        </form>
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