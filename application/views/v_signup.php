<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/logo_medium_pure.png">
        <title>Join Medium.</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- MY CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/signup_style.css">

    </head>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 logo">
                    <a href="./">
                        <img src="<?php echo base_url();?>assets/logo_medium.png">
                    </a>
                </div>
            </div>
        </div>
    </header>   
    <body>
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <img class="gambar-kiri" src="<?php echo base_url();?>assets/sign-up-left.png" alt="gambar kiri">
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12 welcoming-text">
                                <center>

                                <h3>Join Medium.</h3>
                                <p>Sign in to get personalized story recommendations, follow authors and topics you love, and interact with stories.</p>
                                
                                </center>
                            </div>
                            <div class="col-12">
                                <div class="card mantab">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="<?php echo base_url();?>assets/google.png">
                                        </div>
                                        <div class="col-10 sign-with">
                                            <a href="">Sign up with Google</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mantab">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="<?php echo base_url();?>assets/facebook.png">
                                        </div>
                                        <div class="col-10 sign-with">
                                            <a href="">Sign up with Facebook</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mantab">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="<?php echo base_url();?>assets/email.png">
                                        </div>
                                        <div class="col-10 sign-with">
                                            <a href="http://localhost/medium/Medium/signupEmail">Sign up with Email</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-7" >
                                <p style="float:right;">Already have an account?</p>
                            </div>
                            <div class="col-4" style="float:left;">
                                <a href="http://localhost/medium/Medium/signin">Sign in</a>
                            </div>

                            <div class="col-12 welcoming-text">
                                <center>
                                    <p>To make Medium work, we log user data and share it with service providers. Click “Sign up” above to accept Medium’s Terms of Service & Privacy Policy.</p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <img class="gambar-kanan" src="<?php echo base_url();?>assets/sign-up-right.PNG" alt="gambar kanan">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
