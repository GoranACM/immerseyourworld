<?php include_once 'session.php';
$_SESSION['activePage'] = "about"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>About | IYW</title>
    <?php include 'head.php'; ?>
  </head>
  <body>

<!-- Header -->
<?php include 'header.php'; ?>
  <!-- Body Start -->

  <!-- Container (About Section) -->

  <div id="about" class="container text-center">
    <h3>ABOUT US</h3>
    <hr>
    <br>
    <img src="images\AboutUsImage.jpeg" class="img-circle person" alt="Michael" width="450">
    <br>
    <br>
    <p>Immerse Your World began in July 2018... 3 classmates went on a spiritual journey to the base of Lake Mountain near the edge of Victoria's Yarra Valley.
      There they discovered they all shared a common interest... technology.
      The 3 classmates consisted of Goran Ilievski, Rodolfo Argüello and Michael Hallorina. All technology enthusiasts and each specialising in a certain area;
      Goran in Drones, Michael in 360 and VR and Rodolfo in Graphic Design combined with social media and technology marketing. Goran came up with the idea to
      combine their specialties to create Immerse Your World.</p>
    <p>
      Immerse Your World is an online store for all products related to immersive technology. With the expertise of Goran and Michael with Drones and Virtual Reality,
      they have attained all the latest products and gadgets by partnering with all major suppliers and brands. Rodolfo craftedly designed the IYW website, with beautiful
      and functiononal aesthetics, ensuring the user experience to navigate, search and purchase a product runs smoothyly.
    </p>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <p class="text-center"><strong>Goran Ilievski</strong></p><br>
        <a href="#demo" data-toggle="collapse">
          <img src="images\GoranIYW.jpg" class="img-circle person" alt="Goran" width="255" height="255">
        </a>
        <div id="demo" class="collapse">
          <br>
          <p>Founder and Technology Expert</p>
          <p>Drone enthusiast</p>
          <p>Member since 2018</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Michael Hallorina</strong></p><br>
        <a href="#demo2" data-toggle="collapse">
          <img src="images\MichaelIYW.jpg" class="img-circle person" alt="Michael" width="255" height="255">
        </a>
        <div id="demo2" class="collapse">
          <br>
          <p>Business Manager and VR Developer</p>
          <p>Loves VR</p>
          <p>Member since 2018</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Rodolfo Argüello</strong></p><br>
        <a href="#demo3" data-toggle="collapse">
          <img src="images\RodolfoIYW.jpg" class="img-circle person" alt="Rodolfo" width="255" height="255">
        </a>
        <div id="demo3" class="collapse">
          <br>
          <p>Full Stack Web Developer</p>
          <p>Instagram Influencer</p>
          <p>Member since 2018</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  </body>
</html>
