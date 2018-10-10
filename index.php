<?php include_once 'session.php';
$_SESSION['activePage'] = "home"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home | IYW</title>
  <?php include 'head.php'; ?>
</head>
  <body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Body Start -->
    <!-- Featured Carousel -->
    <div class="feature">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/feature1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/feature3.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/feature4.jpg" alt="Third slide">
        </div>
        <div class="carousel-caption carouseltitle">
          <h1 class="shadow">Immerse Your World</h1>
        </div>
        <div class="carousel-caption">
          <h2 class="d-none d-md-block">SHOP</h2>
          <h5 class="d-none d-md-block">Cameras, drones, headsets and accessories retailing at competitive prices.</h5>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
    </div>
    <div class="row justify-content-center" id="box-search">
        <div class="col-md-6">
          <figure class="figure thumbnail text-center shadow">
            <img src="images/product1.jpg" class="figure-img img-fluid rounded" alt="product1">
            <figcaption class="font-weight-bold">Samsung Gear VR w/Controller</figcaption>
            <figcaption class="figure-caption">The Samsung Gear VR powered by Oculus allows you to enjoy 2D, 3D,
            and 360-degree content by connecting it with your mobile device.</figcaption>
            <br>
            <figcaption class="figure-caption"><a href="shop.php"><button type="button" class="btn btn-outline-dark" name="Shop"> SHOP</button></a></figcaption>
            <br>
          </figure>
        </div>
        <div class="col-md-6">
          <figure class="figure thumbnail text-center shadow">
            <img src="images/product2.jpg" class="figure-img img-fluid rounded" alt="product2">
            <figcaption class="font-weight-bold">HTC VIVE</figcaption>
            <figcaption class="figure-caption">Experience unparalleled, true-to-life virtual reality Room-Scale VR</figcaption>
            <br>
            <br>
            <figcaption class="figure-caption"><a href="shop.php"><button type="button" class="btn btn-outline-dark" name="Shop"> SHOP</button></a></figcaption>
            <br>
          </figure>
        </div>
    </div>
    <!-- <div class="bottom-feature">
      <div class="hh">
        <div class="row">
          <div class="col-md-3 asd">
            <div class="row">
              <div class="col-md-16">
                <div class="carousel-caption">
                  <h1>Why choose us?</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-16">
                <div class="carousel-caption">
                  <p>Immerse Your World (IYW) is the online
                    shop to go to for all your Virtual Reality (VR),
                    Augmented Reality (AR), and Mixed Reality
                    (MR) needs. Products include cameras,
                    drones, headsets and accessories
                    retailing at competitive prices. IYW pride
                    themselves in attaining the latest products
                    and gadgets by partnering with all the
                    major suppliers.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">

          </div>
          <div class="col-md-3">
            <figcaption class="figure-caption footerbutton"><button type="button" name="Shop"><p>START THE REAL EXPERIENCE NOW</p></button></figcaption>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Footer -->
    <?php include 'footer.php'; ?>


  </body>
</html>
