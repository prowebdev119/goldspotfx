{include file="common/header.tpl"}

<body>
<!-- preloader  -->
<div id="preloader"></div>
<!-- Start Slider Area -->
<div class="login-area area-padding fix">
    <div class="login-overlay"></div>
    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="login-form">
                    <h4 class="login-title text-center">Login</h4>
                    <form id="contactForm" method="POST" action="index.php?a=support" class="log-form">
                        <input type="text" id="name" class="form-control" placeholder="Username" required
                               data-error="Please enter your name">
                        <input type="password" id="msg_subject" class="form-control" placeholder="Password" required
                               data-error="Please enter your message subject">
                        <div class="check-group">
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Remember me</label>
                            </div>
                            <a class="text-muted" href="#">Forgot password?</a>
                        </div>
                        <button type="submit" id="submit" class="slide-btn login-btn">Login</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <div class="clear"></div>
                        <div class="separetor text-center"><span>Or with Login</span></div>
                        <div class="sign-icon">
                            <ul>
                                <li><a class="facebook" href="#"><i class="ti-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="ti-twitter"></i></a></li>
                                <li><a class="instagram" href="#"><i class="ti-instagram"></i></a></li>
                                <li><a class="google" href="#"><i class="ti-google"></i></a></li>
                            </ul>
                            <div class="acc-not">have an account? <a href="index.php?a=signup#signup">Signup</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->

<!-- All JS here -->

<!-- modernizr JS -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- Poper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>

</html>