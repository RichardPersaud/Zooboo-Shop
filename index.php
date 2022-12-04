<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="description" content="zooboo online demo shop">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Richard Persaud">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="icon" href="https://image.flaticon.com/icons/png/512/173/173045.png">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel = "stylesheet" 
         href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <title>Zooboo Online Shop</title>
</head>
<body class="bg-light text-dark">
  <nav class="navbar navbar-expand-lg navbar-light bg-info text-light">
      <div class="container-fluid">
        <a class="navbar-brand"><h3 style="font-size:1em;">ZooBoo <i class="fa fa-shopping-cart"></i></h3></a>
        <form class="d-flex">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="">
          <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-light" href="#"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#"><i class="fa fa-shopping-cart"></i> Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<style>
@media screen and (min-width:650px){
  .card{
    width:12rem;
    margin:auto;
    max-height:600px;
  }
}

.jumbotron{
  background-image: url('https://mdbootstrap.com/img/new/slides/041.jpg');
}
</style>
  <div class="container mt-3">

    <div class="jumbotron text-light rounded shadow-lg my-0">
      <h1><i class="fa fa-shopping-cart"></i> ZooBoo Online Store</h1>
      <p>Welcome to my online Demo Store made using (HTML, CSS, PHP, BOOTSTRAP and JS)</p>
    </div>
  
    <div class="d-inline-flex p-3 text-white w-100 justify-content-around" >
      <div class="p-2 bg-info text-light flex-grow-1">
      
        <!-- <h2> <img class="w-25" src="https://cdn2.iconfinder.com/data/icons/rcons-user/32/male-circle-512.png" alt=""> Hi, Richard</h2> -->
      </div>
      <div class="p-2 bg-info text-light flex-grow-1">
        <h6>Recently Viewed</h6>
        <div class="card bg-info rounded m-1 " style="width:9em">
          <a href="#" style="text-decoration:none; margin-bottom:-13px">
          <img class="card-img-top w-100 d-flex align-self-center pt-3 mx-0" src="https://www.pngpix.com/wp-content/uploads/2016/10/PNGPIX-COM-Black-T-Shirt-PNG-Transparent-Image-1.png" alt="Card image cap">
          <div class="card-body my-0">
            <h6 class="card-title text-light my-0">(Gen) Black T-Shirt...</h6>
            <hr class="my-1">
            <p class="card-text text-light my-0"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></p>
          </div>
          </a>
        </div> 
      </div>
      <div class="p-2 bg-info text-light flex-grow-1">
        <h6>Deals of the day!</h6>
        <div class="card bg-info rounded m-1 border-none" style="width:9em">
          <a href="#" style="text-decoration:none; margin-bottom:-13px">
          <img class="card-img-top w-100 d-flex align-self-center pt-3 mx-0" src="https://pngimg.com/uploads/headphones/headphones_PNG7659.png" alt="Card image cap">
          <div class="card-body my-0">
            <h6 class="card-title text-light my-0">HeadPhone (Pro)</h6>
            <hr class="my-1">
            <p class="card-text text-light my-0"><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></p>
          </div>
          </a>
        </div> 
      </div>
    </div>
    <hr>
  <div class="wrapper" id="main">
  <span><h4>Today's Deals</h4><a href="#">see all deals</a> </span>    
    <div class="main w-100 p-2 text-info">
      <div class="card_items d-flex flex-wrap">
      <?php
        $items='
          <div class="card rounded shadow m-1 h-25">
            <a href="#" style="text-decoration:none; margin-bottom:-13px">
            <img class="card-img-top w-100 d-flex align-self-center pt-3 mx-0" src="https://www.pngpix.com/wp-content/uploads/2016/10/PNGPIX-COM-Black-T-Shirt-PNG-Transparent-Image-1.png" alt="Card image cap">
            <div class="card-body my-0">
              <h6 class="card-title my-0">(Gen) Black T-Shirt...</h6>
              <hr class="my-1">
              <p class="card-text my-0">by Richard.P</p>
              <p class="card-text my-0">Size: L/M/S</p>
              <p class="card-text my-0"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></p>
              <h5 class="card-text text-danger mt-2 mb-0">$19.99</h5>
              <p class="card-text my-0 text-secondary">Shipping: +$5.00</p>
            </div>
            </a>
          </div> 
        ';
          $limit = 6;
          for ($i=0; $i < $limit; $i++) { 
            echo $items;
          }
        ?>
        
      </div>
    </div>
    </div>
  </div>
</body>
</html>