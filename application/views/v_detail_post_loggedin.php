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

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-4 logo" style="margin-left: -60px;"><a href="http://localhost/medium/Medium/loggedin/<?php echo $user[0]->email;?>"><img class="logo" src="<?php echo base_url();?>assets/logo_medium.png" /></a></div>
                <div class="col-6" style="padding-right: 609px;"></div>
                <div class="col-2">
                    <div class="row">
                        <div class="col-3"><a href="#"><p class="fas fa-search"></p></a></div>
                        <div class="col-3"><a href="#"><p class="fas fa-bell"></p></a></div>
                        <div class="col-3">  
                            <ul class="nav nav-pills">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/logo_medium_pure.png" style="border-radius: 50%; width: 30px;"></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Become a Member</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="http://localhost/medium/Medium/addStory/<?php echo $user[0]->id_user;?>">New Story</a>
                                            <a class="dropdown-item" href="http://localhost/medium/Medium/story/<?php echo $user[0]->id_user;?>">Stories</a>
                                            <a class="dropdown-item" href="#">Series</a>
                                            <a class="dropdown-item" href="#">Stats</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Medium Partner Program</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Bookmarks</a>
                                            <a class="dropdown-item" href="#">Publications</a>
                                            <a class="dropdown-item" href="#">Customize your interests</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="http://localhost/medium/Medium/profile/<?php echo $user[0]->id_user;?>">Profile</a>
                                            <a class="dropdown-item" href="#">Settings</a>
                                            <a class="dropdown-item" href="#">Help</a>
                                            <a class="dropdown-item" href="http://localhost/medium/Medium/logout">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
							</div>";
                            if ($p->fullname == $user[0]->fullname){
                                echo "
							<div class='col-3'><a href='http://localhost/medium/Medium/editProfile/".$user[0]->id_user."'><button type='button' class='btn btn-outline-dark' style='height: 20px;'><p style=' font-size: 12px; margin-top: -5px;'>Edit Profile</p></button></a></div>";
                        };
                        echo"
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