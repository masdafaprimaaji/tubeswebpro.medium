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
        <link rel="stylesheet" href="<?php echo base_url();?>assets/signin_email_style.css">

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
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12 welcoming-text">
                                <center>

                                <h3>Sign in with email</h3>
                                <p>Enter the email address associated with your account, and we’ll send a magic link to your inbox.</p>
                                
                                </center>
                            </div>
                            <div class="col-12">
                                <form action="<?php echo site_url().'/Medium/cek_login';?>" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-dark">Continue</button>
                                </center>
                                
                                </form>
                            </div>
                            <div class="col-12" style="padding-top: 7px;">
                                <center>
                                    <a href="http://localhost/medium/Medium/signin"><i class="fa fa-arrow-left"></i>All sign in options</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
