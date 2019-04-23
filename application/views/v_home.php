<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/logo_medium_pure.png">
        <title>Medium - a place to read and write bis ideas and important stories</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- MY CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
    </head>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-4 logo">
                    <a href="./">
                        <img class="logo" src="<?php echo base_url();?>assets/logo_medium.png" />
                    </a>
                </div>
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-1"><i class="fa fa-search"></i></div>
                        <div class="col-5"><p class="kataatas"><a href="#">Become a Member</a></p></div>
                        <div class="col-3"><p class="kataatas"><a href="http://localhost/medium/Medium/signin">Sign in</a></p></div>
                        <div class="col-3"><a href="http://localhost/medium/Medium/signup"><button type="button" class="btn btn-outline-success tombolatas">Get Started</button></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <ul class="nav justify-content-center">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">ONEZERO</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">CULTURE</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">TECH</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">STARTUPS</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">SELF</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">POLITICS</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">HEALTH</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">DESIGN</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">HUMAN PARTS</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">COLLECTION</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">MORE</a>
                                </li>
                              </ul>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div class="container" style="padding-top: 20px;">
            <div class="row border-bottom">
                <div class="col-4">
                    <div class="col-12">
                        <img style="width: inherit" src="<?php echo base_url();?>assets/dummy/post1.jpeg">
                    </div>
                    <div class="col-12 big-post-left">
                        <?php 
                        for ($i=0;$i<1;$i++){
                            echo "<a href='http://localhost/medium/Medium/detailPostUnlogged/".$post[$i]->id_post."'><h5><b>".$post[$i]->title."</b></h5></a><br>
                            <a href='http://localhost/medium/Medium/detailPostUnlogged/".$post[$i]->id_post."'>".$post[$i]->tagline."</a><br>
                            <a href=''><b>".$post[$i]->fullname."</b></a><br>
                            <a href=''>".$post[$i]->date."</a> . 
                            <a href=''>".$post[$i]->read_time." min read<i class='fa fa-star'></i></a>";
                        };
                    
                        ?>
                        
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <div class="row">
                        <?php 
                        for($i=1;$i<4;$i++){
                            echo "<div class='col-4 image-post-middle'>
                                <img src='".base_url()."assets/dummy/post2.jpeg'>
                            </div>
                            <div class='col-8 isi'>
                                <a href='http://localhost/medium/Medium/detailPostUnlogged/".$post[$i]->id_post."'><b>".$post[$i]->title."</b></a><br><br>
                                <small>
                                    <a href='#'><b>".$post[$i]->fullname."</b></a> in <a href='#'><b>".$post[$i]->category."</b></a><br>
                                    <a href='#'>".$post[$i]->date."</a> . <a href='#'>".$post[$i]->read_time." min read<i class='fa fa-star'></i></a>
                                </small>
                            </div>
                        </div>
                        <div class='row' style='padding-top: 15px;'>";
                        };
                        ?>
                        </div>                                               
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-12">
                        <img style="width: inherit" src="<?php echo base_url();?>assets/dummy/post5.jpeg">
                    </div>
                    <div class="col-12 big-post-right">
                        <?php for ($i=4;$i<5;$i++){
                        echo "
                        <a href='http://localhost/medium/Medium/detailPostUnlogged/".$post[$i]->id_post."'><h5><b>".$post[$i]->title."</b></h5></a><br>
                        <a href='http://localhost/medium/Medium/detailPostUnlogged/".$post[$i]->id_post."'>".$post[$i]->tagline."</a><br>
                        <a href=''><b>".$post[$i]->fullname."</b></a><br>
                        <a href=''>".$post[$i]->date."</a> . 
                        <a href=''>".$post[$i]->read_time." min read<i class='fa fa-star'></i></a>";
                        };
                        ?>
                    </div>
                </div>
            </div>
            <div class="row middle-sign-up">
                <div class="col-2">
                    <img src="<?php echo base_url();?>assets/abstract.png">
                </div>
                <div class="col-10">
                    <h1>Never Miss a Story</h1>
                    <h5>Sign up for Medium’s Daily Digest and get the best of Medium, tailored for you.</h5>
                    <a href="http://localhost/medium/Medium/signup">
                        <button type="button" class="btn btn-dark">Sign up</button>
                    </a>
                </div>
            </div>
            <div class="row bottom-content">
                <div class="col-8" style="padding-right: 100px;">
                    <!-- kategori featured -->
                    <div class="row border-bottom">
                        <div class="col-8 more">
                            <p>Featured for members</p>
                        </div>
                        <div class="col-4 more">
                            <a href=""">MORE ></a>
                        </div>
                    </div>
                    <div class="row contain-post-bottom">
                        <div class="col-8">
                            <a class="judul" href="#"">Judul Post</a><br>
                            <small>
                                <a href="">(tagline)</a><br>
                                <a href="#">Author</a><br>
                                <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                            </small>
                        </div>
                        <div class="col-4 image-post-bottom">
                            <img src="assets/a.jpg">
                        </div>                        
                    </div>
                    <div class="row contain-post-bottom">
                        <div class="col-8">
                            <a href="#">Judul Post</a><br>
                            <small>
                                <a href="">(tagline)</a><br>
                                <a href="#">Author</a><br>
                                <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                            </small>
                        </div>
                        <div class="col-4 image-post-bottom">
                            <img src="assets/a.jpg">
                        </div>                        
                    </div>
                    <div class="row contain-post-bottom">
                        <div class="col-8">
                            <a href="#">Judul Post</a><br>
                            <small>
                                <a href="">(tagline)</a><br>
                                <a href="#">Author</a><br>
                                <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                            </small>
                        </div>
                        <div class="col-4 image-post-bottom">
                            <img src="assets/a.jpg">
                        </div>                        
                    </div> 
                    
                    <!-- kategori technology -->
                    <div class="row border-bottom category">
                        <div class="col-8">
                            <p>Technology</p>
                        </div>
                        <div class="col-4 more">
                            <a href="">MORE ></a>
                        </div>
                    </div>
                    <div class="row contain-post-bottom">
                        <div class="col-8">
                            <a href="#">Judul Post</a><br>
                            <a href="#">Tagline</a>
                            <small>
                                <a href="">(tagline)</a><br>
                                <a href="#">Author</a><br>
                                <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                            </small>
                        </div>
                        <div class="col-4 image-post-bottom">
                            <img src="assets/a.jpg">
                        </div>                        
                    </div>
                    <div class="row contain-post-bottom">
                        <div class="col-8">
                            <a href="#">Judul Post</a><br>
                            <small>
                                <a href="">(tagline)</a><br>                                
                                <a href="#">Author</a><br>
                                <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                            </small>
                        </div>
                        <div class="col-4 image-post-bottom">
                            <img src="assets/a.jpg">
                        </div>                        
                    </div>
                    <div class="row contain-post-bottom">
                        <div class="col-8">
                            <a href="#">Judul Post</a><br>
                            <small>
                                <a href="">(tagline)</a><br>
                                <a href="#">Author</a><br>
                                <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                            </small>
                        </div>
                        <div class="col-4 image-post-bottom">
                            <img src="assets/a.jpg">
                        </div>                        
                    </div>
                    
                    
                    <!-- kategori creativity -->
                    <div class="row border-bottom category">
                            <div class="col-8">
                                <p>Creativity</p>
                            </div>
                            <div class="col-4 more">
                                <a href="">MORE ></a>
                            </div>
                        </div>
                        <div class="row contain-post-bottom">
                            <div class="col-8">
                                <a href="#">Judul Post</a><br>
                                <small>
                                    <a href="">(tagline)</a><br>
                                    <a href="#">Author</a><br>
                                    <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                                </small>
                            </div>
                            <div class="col-4 image-post-bottom">
                                <img src="assets/a.jpg">
                            </div>                        
                        </div>
                        <div class="row contain-post-bottom">
                            <div class="col-8">
                                <a href="#">Judul Post</a><br>
                                <small>
                                    <a href="">(tagline)</a><br>
                                    <a href="#">Author</a><br>
                                    <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                                </small>
                            </div>
                            <div class="col-4 image-post-bottom">
                                <img src="assets/a.jpg">
                            </div>                        
                        </div>
                        <div class="row contain-post-bottom">
                            <div class="col-8">
                                <a href="#">Judul Post</a><br>
                                <small>
                                    <a href="">(tagline)</a><br>
                                    <a href="#">Author</a><br>
                                    <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                                </small>
                            </div>
                            <div class="col-4 image-post-bottom">
                                <img src="assets/a.jpg">
                            </div>                        
                        </div>
    
                        
                    <!-- kategori startups -->
                    <div class="row border-bottom category">
                            <div class="col-8">
                                <p>Startups</p>
                            </div>
                            <div class="col-4 more">
                                <a href="">MORE ></a>
                            </div>
                        </div>
                        <div class="row contain-post-bottom">
                            <div class="col-8">
                                <a href="#">Judul Post</a><br>
                                <small>
                                    <a href="">(tagline)</a><br>
                                    <a href="#">Author</a><br>
                                    <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                                </small>
                            </div>
                            <div class="col-4 image-post-bottom">
                                <img src="assets/a.jpg">
                            </div>                        
                        </div>
                        <div class="row contain-post-bottom">
                            <div class="col-8">
                                <a href="#">Judul Post</a><br>
                                <small>
                                    <a href="">(tagline)</a><br>
                                    <a href="#">Author</a><br>
                                    <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                                </small>
                            </div>
                            <div class="col-4 image-post-bottom">
                                <img src="assets/a.jpg">
                            </div>                        
                        </div>
                        <div class="row contain-post-bottom">
                            <div class="col-8">
                                <a href="#">Judul Post</a><br>
                                <small>
                                    <a href="">(tagline)</a><br>
                                    <a href="#">Author</a><br>
                                    <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                                </small>
                            </div>
                            <div class="col-4 image-post-bottom">
                                <img src="assets/a.jpg">
                            </div>                        
                        </div>   


                    <!-- kategori culture -->
                    <div class="row border-bottom category">
                            <div class="col-8">
                                <p>Culture</p>
                            </div>
                            <div class="col-4 more">
                                <a href="">MORE ></a>
                            </div>
                        </div>
                        <div class="row contain-post-bottom">
                            <div class="col-8">
                                <a href="#">Judul Post</a><br>
                                <small>
                                    <a href="">(tagline)</a><br>
                                    <a href="#">Author</a><br>
                                    <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                                </small>
                            </div>
                            <div class="col-4 image-post-bottom">
                                <img src="assets/a.jpg">
                            </div>                        
                        </div>
                        <div class="row contain-post-bottom">
                            <div class="col-8">
                                <a href="#">Judul Post</a><br>
                                <small>
                                    <a href="">(tagline)</a><br>
                                    <a href="#">Author</a><br>
                                    <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                                </small>
                            </div>
                            <div class="col-4 image-post-bottom">
                                <img src="assets/a.jpg">
                            </div>                        
                        </div>
                        <div class="row contain-post-bottom">
                            <div class="col-8">
                                <a href="#">Judul Post</a><br>
                                <small>
                                    <a href="#">(tagline)</a><br>
                                    <a href="#">Author</a><br>
                                    <a href="#">Aug 8</a> . <a href="#">10 min read<i class="fa fa-star"></i></a>
                                </small>
                            </div>
                            <div class="col-4 image-post-bottom">
                                <img src="assets/a.jpg">
                            </div>                        
                        </div>                        
                </div>
                <div class="col-4">
                    <div class="col-12">
                        <div class="row border-bottom" style="padding-bottom: 10px;">
                            Popular on Medium
                        </div>
                        <?php $i=1;
                        for ($no=0;$no<4;$no++)
                        {
                            echo "<div class='row sidebar-content'>
                            <div class='col-2 sidebar-number'>".
                                $i++
                            ."</div>
                            <div class='col-10 sidebar-article'>
                                <a href='http://localhost/medium/Medium/detailPost/".$post[$no]->id_post."'><b>".$post[$no]->title."</b></a><br>
                                <a href='#'>".$post[$no]->fullname."</a><br>
                                <a href='#'>".$post[$no]->date."</a> . <a href='#'>".$post[$no]->read_time." min read<i class='fa fa-star'></i></a>                               
                            </div>
                        </div>"
                            ;
                        }
                        ?>
                        
                        <div class="row sidebar-content">
                            <div class="col-12">
                                <a href="">Help &nbsp</a>
                                <a href="">Status &nbsp</a>
                                <a href="">Writers &nbsp</a>
                                <a href="">Blog &nbsp</a>
                                <a href="">Careers &nbsp</a><br>
                                <a href="">Privacy &nbsp</a>
                                <a href="">Terms &nbsp</a>
                                <a href="">About &nbsp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
