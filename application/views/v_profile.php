<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/logo_medium_pure.png">
<title><?php foreach ($user as $u) {echo $u->fullname." - Medium";}?></title>
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
			<div class="col-5">
				<div class="row">
					<div class="col-8">
						<h2><?php echo $user[0]->fullname;?></h2>
                        <p>Medium member since <?php echo $user[0]->join_date;?></p>
						<p><?php echo $user[0]->bio;?></p>
                        <a href='#'><p><?php echo $user[0]->following." Following</a> <a href='#'>".$user[0]->followers." Followers";?></p></a>
					</div>
					<div class="col-4">
						<a href="http://localhost/medium/Medium/editProfile/<?php echo $user[0]->id_user?>"><button type="button" class="btn btn-outline-dark" style="height: 20px; margin-top: 13px;"><p style=" font-size: 12px; margin-top: -5px;">Edit Profile</p></button></a>
                        <a href="http://localhost/medium/Medium/deleteProfile/<?php echo $user[0]->id_user?>"><button type="button" class="btn btn-outline-dark" style="height: 20px; margin-top: 13px;"><p style=" font-size: 12px; margin-top: -5px;">Delete Profile</p></button></a>
					</div>
				</div>
			</div>
			<div class="col-2">
				<img src="<?php echo base_url();?>assets/logo_medium_pure.png" style="border-radius: 50%; float: right; width: 120px;">
			</div>
			<div class="col-3"></div>
		</div><br><br><br>
		<?php 
		$i = 0;
		foreach($post as $p){
			$i++;
		}
		if ($i != 0) {
            echo "<div class='container'>
                    <div class='row'>";
			foreach ($post as $p) {
			echo 
				"
                        <div class='col-2'></div>
                        <div class='col-1'><img src='".base_url()."assets/logo_medium_pure.png' style='border-radius: 50%; width: 30px;''></div>
                        <div class='col-4'>
                            <p><b>".$user[0]->fullname."</b> in <b>".$p->category."</b></p>
                            <p>".$p->date." . ".$p->read_time." min read <i class='fa fa-star'></i></p>
                        </div>
                        <div class='col-5'></div>
				   		<div class='col-2'></div>
							<div class='col-10'>
								<a href='http://localhost/medium/Medium/detailPost/".$p->id_post."/".$user[0]->id_user."'><h5><b>".$p->title."</b></h5></a>
								<a href='http://localhost/medium/Medium/detailPost/".$p->id_post."/".$user[0]->id_user."'><p>".$p->tagline."</p></a>
							</div>
                        <br><br>
				";	
			};
            echo "</div>
                </div>";
		} else {
			foreach ($user as $u) {
				echo $u->fullname." hasn’t been active on Medium yet. Check back later to see their stories, claps, and highlights.";
			}
		}
		?>
	</div>
</body>
</html>