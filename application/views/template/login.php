<!DOCTYPE html>
<html class="bg-black">

    <!-- Mirrored from almsaeedstudio.com/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Oct 2014 11:48:58 GMT -->
    <head>
        <meta charset="UTF-8">
        <title>Armates | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>application_resources/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>application_resources/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>application_resources/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript">

            var js_base_url = "<?php echo base_url(); ?>";
            var js_site_url = "<?php echo site_url(); ?>";

            //alert(js_url_path);
        </script>
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form id="login_form" name="login_form" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" id="txtusername" name="txtusername" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="txtpassword" name="txtpassword" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="button" onclick="login()" class="btn bg-olive btn-block">Sign me in</button>  

                    <p><a href="#">I forgot my password</a></p>

                    <a href="register.html" class="text-center">Register a new membership</a>
                </div>
            </form>

        </div>


        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url(); ?>application_resources/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>application_resources/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>application_resources/js/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>application_resources/custom_js/custom_login.js" type="text/javascript"></script>

    </body>
</html>