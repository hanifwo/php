<?php

// array artikel
$artikel = array(
        (object) array(  
                'judul'=>'Healthy Pasta Recipes',
                'text'=> ' A dazzlingly simple and delicious recipe. This is an elegant dish to serve drop-in dinner guests. ',
                'gambar'=>"artikel1.jpg"
            ),
            (object) array(  
                'judul'=>'Make Pasta From Scratch',
                'text'=>'A great way to improve your cooking skill and make your closest relative a good food to eat. Super Easy and Detailed',
                'gambar'=> 'artikel6.jpg'
            ),
            (object) array(  
                'judul'=>'Facts About Pasta',
                'text'=>'This is a facts about Pasta, A delicous and one of popular dish in the world. Read the Facts About Pasta',
                'gambar'=> 'artikel5.jpg'
            ),
            (object) array(  
                'judul'=>'Mushroom Pasta Recipes',
                'text'=>'
                This is so easy and so delicious. Oyster mushrooms are poached in butter and cream and tossed with pasta, Parmesan cheese and green onions. Mmmmmmmm!
              ',
                'gambar'=> 'artikel4.jpg'
            ),
            (object) array(  
                'judul'=>'Meat Pasta Recipes',
                'text'=>'
                This is a great way to use leftover ham, chicken, turkey or beef. A creamy soup mixture of meat, pasta, cheese and veggies provides a great next day casserole.
                ',
                'gambar'=> 'artikel3.jpg'
            ),
            (object) array(  
                'judul'=>'Cheesy Pasta Recipes',
                'text'=>'
                A very rich, creamy, and zesty cheese and pasta recipe. Not for the dieters out there! The salad dressing adds a very nice creaminess and a little Bite!
              ',
                'gambar'=> 'artikel2.jpg'
            ),
);

$carousel = array(
    (object) array(
        'gambar'=>'artikel1.jpg'
    ),
    (object) array(
        'gambar'=>'artikel2.jpg'
    ),
    (object) array(
        'gambar'=>'artikel3.jpg'
    ),
    (object) array(
        'gambar'=>'artikel4.jpg'
    ),
    (object) array(
        'gambar'=>'artikel5.jpg'
    ),
    (object) array(
        'gambar'=>'artikel6.jpg'
    ),

);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="styles.css" rel="stylesheet" />
    <title>Bootstrap</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CALORe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Article</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Contact Us</a></li>
            <li><a class="dropdown-item" href="#">Submit Your Articles</a></li>
            <li><a class="dropdown-item" href="#">Social Media</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicator -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="artikel1.jpg" alt="gambar 1" class="d-block w-100" />
                <?php foreach ($carousel as $slide) { ?>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Healthy Pasta Recipes</h5>
                </div>
               <?php } ?>
            </div>
            <div class="carousel-item ">
                <img src="artikel2.jpg" class="d-block w-100" alt="gambar 2" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Make Pasta From Scratch</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="artikel3.jpg" alt="gambar 3" class="d-block w-100" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Facts About Pasta</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="artikel4.jpg" alt="gambar 3" class="d-block w-100" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mushroom Pasta Recipes</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="artikel5.jpg" alt="gambar 3" class="d-block w-100" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Meat Pasta Recipes</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="artikel6.jpg" alt="gambar 3" class="d-block w-100" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cheesy Pasta Recipes</h5>
                </div>
            </div>
        </div>

        <!-- Carousel Navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Grid -->
    <div class="py-5" id="features">
        <div class="container">
            
        </div>
    </div>

    <div id="blog" class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($artikel as $data) { ?>
                <div class="col col-4">
                    <div class="card mb-3">
                        <img src="<?=$data->gambar ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?=$data->judul?></h5>
                            <p class="card-text"><?=$data->text?></p>
                            <p class="card-tex"><small class="text-muted">Last updated 3 mins ago.</small></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>