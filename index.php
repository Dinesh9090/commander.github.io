<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark"style="background-color: #1E234C;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #FB6D04"><b><h2>彡𝕮𝖔𝖒𝖒𝖆𝖓𝖉𝖊𝖗彡</h2></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-10">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>

          <li class="nav-item">
              <a class="nav-link" href="about.php"><b>About</b></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"><b>Services</b></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"><b>Contact Us</b></a>
                </li>


          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/free1.jpg" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/free2.jpg" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/free3.jpg" alt="New York" width="1100" height="500">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

<section class="my-5">
<div class="py-5">
  <h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6 md col-12">
    <img src="images/free4.jpg" alt="free4.jpg" class="img-fluid" aboutimg>
  </div>
  <div class="col-lg-6 md col-12">
    <h2 class="display-4">Events</h2>
    <p class="py-3">Garena Free Fire is all prepared to undergo an update tomorrow on 4th August. This update will witness a few additions being made to the gameplay side of things like a new 1v1 game mode, a new map, changes to the squad mode, and a number of new special weapon attachments. All this is coming on top of the already released 'Wildland Walkers - Elite Pass S39' which is scheduled to run from 1st to 31st August. While Free Fire is being updated tomorrow, the game will be unavailable to all the players for about eight hours.</p>
    <a href="about.php" class="btn btn-primary">Check More</a>
  </div>
</div>
</div>
</section>

<section class="my-5">
<div class="py-5">
  <h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
</div>
<div class="card">
<img class="card-img-top" src="images/Nikita.jpg" alt="Card image">
<div class="card-body">
<h4 class="card-title">Nikita</h4>
<p class="card-text">Free Fire</p>
<a href="#" class="btn btn-primary">See Profile</a>
</div>
</div>
<div class="card">
  <img class="card-img-top" src="images/Caroline.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Caroline</h4>
    <p class="card-text">Free Fire</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  </div>
</div>
</section>

<section class="my-5">
<div class="py-5">
  <h2 class="text-center">Our Services</h2>
</div>

<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="from-group">
      <label>Username</label>
      <input type="text" name="user" class="form-control" autocomplete="on">
        </div>
        <div class="from-group">
          <label>Email Id</label>
          <input type="text" name="Email" class="form-control" autocomplete="off">
            </div>
            <div class="from-group">
              <label>Mobile</label>
              <input type="text" name="Mobile" class="form-control" autocomplete="off">
                </div>
                <div class="from-group">
                  <label>Comment</label>
                  <textarea class="form-control" name="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary m-2">Submit</button>
  </form>



</div>
</section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
