<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/logo_medium_pure.png">
        <title><?php echo "Editing ".$post[0]->title." - Medium";?></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- MY CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/addstorystyle.css">

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <header>
    	<div class="container">
            <div class="row">
                <div class="col-4 logo">
                    <a href="http://localhost/medium/Medium/loggedin/<?php echo $user[0]->email;?>">
                        <img class="logo" src="<?php echo base_url();?>assets/logo_medium_pure.png" />
                    </a>
                    Saved
                </div>
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-4"><a href="#"><button type="button" class="btn btn-outline-success tombolatas">Save and Publish</button></a></div>
                        <div class="col-1"><i class="fa fa-ellipsis-h"></i></div>
                        <div class="col-1"><i class="fa fa-bell"></i></div>
                        <div class="col-4">  
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
    </header>
    <body>
        <div class="container">
            <form class="create-story" method="post" action="<?php echo site_url().'/Medium/editPost/'.$post[0]->id_post.'/'.$user[0]->id_user;?>">
                <div class="form-group borderless">
                	<p>Title</p>
                    <textarea class="form-control" name="title" id="exampleFormControlTextarea1" rows="1" placeholder="Title"><?php echo $post[0]->title?></textarea>
                </div>
                <div class="form-group borderless">
                	<p>Tagline</p>
                    <textarea class="form-control" name="tagline" id="exampleFormControlTextarea1" rows="1" placeholder="Tagline"><?php echo $post[0]->tagline?></textarea>
                </div>
                <div class="form-group borderless">
                    <p>Category</p>
                    <textarea class="form-control" name="category" id="exampleFormControlTextarea1" rows="1" placeholder="Category"><?php echo $post[0]->category?></textarea>
                </div>
                <div class="form-group borderless">
                	<p>Content</p>
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5" placeholder="Content"><?php echo $post[0]->content?></textarea>
                </div>
                <button type="submit" class="btn btn-light">Save and Publish</button>
            </form>
        </div>
    </body>
</html>