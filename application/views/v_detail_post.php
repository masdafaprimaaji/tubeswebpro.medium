<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/logo_medium_pure.png">
<title>Medium - a place to read and write bis ideas and important stories</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-4 logo">
                    <a href="http://localhost/medium/Medium/">
                        <img class="logo" src="<?php echo base_url();?>assets/logo_medium.png" />
                    </a>
                </div>
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-3"><p class="kataatas"><a href="http://localhost/medium/Medium/signin">Sign in</a></p></div>
                        <div class="col-3"><a href="http://localhost/medium/Medium/signup"><button type="button" class="btn btn-outline-success tombolatas">Get Started</button></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12"></div>
            </div>
        </div>
    </header>
<body><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-7">
				<?php foreach ($post as $p) {
					echo 
					"<div class='col-12'>
					<h1>".$p->title."</h1>
				</div>
				<div class='col-12'>
					<h4>".$p->tagline."</h4>
				</div><br>
				<div class='row'>
					<div class='col-1' style='padding-left: 30px;'>
						<img src='".base_url()."assets/logo_medium_pure.png' style='border-radius: 50%; width: 40px;'>
					</div>
					<div class='col-11' style='padding-left: 30px;'>
						<div class='row'>
							<div class='col-6' style='margin-right: -100px;'>".$p->fullname."
							<small><br>
                                    <a href='#''>".$p->date."</a> . <a href='#''>".$p->read_time." min read<i class='fa fa-star'></i></a>
                                </small>
							</div>
						</div>
					</div>
				</div><br>
				<div class='row'>
					<div class='col-12'>
						<img src='".base_url()."assets/a.jpg' style='width: inherit'>
					</div>
					
					<div class='col-12'>
						<br><br><p>".$p->content."</p>
					</div>
				</div>";
				}
				?>
			</div>
			<div class="col-3"></div>
		</div>
	</div>
</body>
</html>