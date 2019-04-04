<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title><?php echo $judul ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-white navbar-light">
        <div class="container">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">Medium</a>
            
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#"><img src="/assets/search.png" alt="Search" style="width:40px;"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Become a member</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Sign in</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Get Started</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <!-- Navbar links -->
        <div class="container">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>onezero/index.php">ONEZERO</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>culture">CULTURE</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>tech">TECH</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>startups">STARTUPS</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>self">SELF</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>politics">POLITICS</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>health">HEALTH</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>design">DESIGN</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>humanparts">HUMAN PARTS</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>collections">COLLECTIONS</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">MORE</a>
                </li> 
                </ul>
            </div> 
        </div>
    </nav>


    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href=<?= base_url(); ?>>Mediums</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= base_url(); ?>">Home</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
                    <a class="nav-item nav-link" href="#">About</a>
                </div>
            </div>
        </div>
    </nav>  -->
</body>