<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Nyelam.com</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/login/demo_.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/login/set1_.css">
        <link href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/plugins/login/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url() ?>assets/plugins/components.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url() ?>assets/plugins/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url() ?>assets/plugins/login-5.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset">
                    <div class="login-bg" style="background-image:url(<?php echo base_url() ?>upload/login/bg1.jpg)">
                        <img class="login-logo" style="width:150px;" src="<?php echo base_url() ?>assets/images/logo-text.png" /> </div>
                </div>

                <div class="col-md-6 login-container bs-reset">
                    <div class="login-content" style="margin-top:200px;">
                        <h1><b>Dive Center</b></h1>
                        <p style="margin-top:-10px;margin-left:100px;font-size:13px;">nyelam.com</p>

						<form action="<?php echo base_url('Login/aksi_login'); ?>" method="post" class="login-form" >
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Enter any username and password. </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6" style="margin-top:-50px">
									<span class="input input--kaede">
										<input class="input__field input__field--kaede" type="text" name="username" id="input-35" />
										<label class="input__label input__label--kaede" for="input-35">
											<span class="input__label-content input__label-content--kaede">Username</span>
										</label>
									</span>
                            </div>
                                <div class="col-xs-6" style="margin-top:-50px">
									<span class="input input--kaede">
										<input class="input__field input__field--kaede" type="password" name="password" id="input-36" />
										<label class="input__label input__label--kaede" for="input-36">
											<span class="input__label-content input__label-content--kaede">Password</span>
										</label>
									</span>									
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <!--div class="rem-password">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember" value="1" /> Remember me
                                            <span></span>
                                        </label>
                                    </div-->
                                    <button class="btn btn-md dark" type="submit">Sign In</button>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <!--div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                    </div-->
                                </div>
                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="javascript:;" method="post">
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; Rembon 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= (isset($scf) ? $scf : '') ?>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/plugins/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!--script src="<?php echo base_url(); ?>assets/plugins/login-5.js" type="text/javascript"></script-->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/login/classie.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
<script>
    (function () {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
            (function () {
                // Make sure we trim BOM and NBSP
                var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                String.prototype.trim = function () {
                    return this.replace(rtrim, '');
                };
            })();
        }

        [].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
            // in case the input is already filled..
            if (inputEl.value.trim() !== '') {
                classie.add(inputEl.parentNode, 'input--filled');
            }

            // events:
            inputEl.addEventListener('focus', onInputFocus);
            inputEl.addEventListener('blur', onInputBlur);
        });

        function onInputFocus(ev) {
            classie.add(ev.target.parentNode, 'input--filled');
        }

        function onInputBlur(ev) {
            if (ev.target.value.trim() === '') {
                classie.remove(ev.target.parentNode, 'input--filled');
            }
        }
    })();
	var Login = function() {

    var handleLogin = function() {

        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                },
                remember: {
                    required: false
                }
            },

            messages: {
                username: {
                    required: "Username is required."
                },
                password: {
                    required: "Password is required."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                form.submit(); // form validation success, call ajax form submit
            }
        });

        $('.login-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    $('.login-form').submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });

        $('.forget-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.forget-form').validate().form()) {
                    $('.forget-form').submit();
                }
                return false;
            }
        });

        $('#forget-password').click(function(){
            $('.login-form').hide();
            $('.forget-form').show();
        });

        $('#back-btn').click(function(){
            $('.login-form').show();
            $('.forget-form').hide();
        });
    }

 
  

    return {
        //main function to initiate the module
        init: function() {

            handleLogin();

            // init background slide images
            $('.login-bg').backstretch([
                "<?php echo base_url() ?>upload/login/a.jpg",
                "<?php echo base_url() ?>upload/login/beaches-beautiful-maldives-sea-beach-summer-palm-resort-sunrise-trees-travel-island-tropical-boardwalk-paradise-dive-wallpaper-download-1920x1080.jpg",
                "<?php echo base_url() ?>upload/login/lakes-green-lake-underwater-world-sunlight-diving-tree-sun-forest-sunwaves-sea-dive-sunshine-rock-blue-water-summer-nature-trees-woods-bubbles-leaves-full-hd-1920x1080.jpg"
                ], {
                  fade: 1000,
                  duration: 8000
                }
            );

            $('.forget-form').hide();

        }

    };

}();

jQuery(document).ready(function() {
    Login.init();
});
</script>
    </body>

</html>