<?php include_once 'session.php';
$_SESSION['activePage'] = "shop"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $row['ProductName']; ?> | IYW</title>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <!-- Header -->
    <?php include 'header.php'; ?>

<?php
include 'serverCreds.php';

$productID = isset($_GET["id"]) ? $_GET["id"] : 1;

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM Products WHERE ProductID=$productID";
    $result = mysqli_query($conn, $sql);

?>


    <?php
    if ($result)
    {
      while($row = mysqli_fetch_assoc($result)) {
    ?>

    <!-- Body Start -->

    <!-- Bredcrumbs -->

    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li>Product</li>
    </ul>

    <!-- Product -->
    <!-- Product name -->

    <div class="pl-4">
      <h3><?php echo $row['ProductName']; ?></h3>
    </div>
    <div class="">

    <!-- Gallery -->

      <div class="row pt-4 p-3 shadow">
        <div class="col-md-6">
          <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndicators" data-slide-to="1"></li>
              <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="products\<?php echo $row['ProductID']; ?>\Product1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="products\<?php echo $row['ProductID']; ?>\Product2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="products\<?php echo $row['ProductID']; ?>\Product3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      <div class="col-md-6 pl-5 pr-5">
          <h4 class="text-center">Product price</h4>
          <hr class="hr2">
          <h5 class="text-center">$AUD <?php echo $row['ProductPrice']; ?></h5>
          <div class="form-group" style="margin-left: 25px; margin-right:25px;">
            <label for="sel1"></label>
            <select class="form-control" id="sel1">
              <option>Color</option>
              <option>Gray</option>
              <option>Black</option>
            </select>
          </div>
          <form method="post" action="shopItem.php?id=<?php echo $row['ProductID']; ?>&action=add&ProductID=<?php echo $row['ProductID']; ?>">
              <div class="col-md-12 text-center">
                  <div class="cart-action" style="padding-top:8px;">
                    <input type="text" class="product-quantity btn btn-outline-dark shadow-sm text-center mb-2 font-weight-light" style="border: none" name="quantity" value="1" size="2"/>
                  </div>
                  <input type="submit" value="Add to Cart" class="btn btn-outline-dark mb-4 shadow-sm" style="border: none"/>
              </div>
          </form>
          <div class="text-center" style="margin-top: 40px;">
            <p>Share with friends</p>
          </div>
            <div class="text-center">
              <a href="#"><img src="images\fb.png" alt="logo" width="50px"></a>
              <a href="#"><img src="images\yt.png" alt="logo" width="50px"></a>
              <a href="#"><img src="images\insta.png" alt="logo" width="50px"></a>
             </div>
          </div>
        </div>
      </div>
      <div class="mt-4 p-3">
          <h4>Product description</h4>
          <hr class="hr2">
          <div class="mt-3">
            <p><?php echo $row['ProductDescription']; ?>
            </p>
            <p>Product review<a href="#"><img src="images\yt.png" alt="logo" width="50px"></a></p>
            </div>
          </div>
        </div>
        </div>


        <!-- Product price -->


    </div>
    <hr class="hr1">

    <!-- Reviews -->

    <h4 class="text-center" style="margin-top: 100px;">Reviews</h4>

    <hr class="hr1">

    <div class="row">
      <div class="col-md-6 d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
          <a href="#"><img src="images\default-user-image.png" alt="logo" width="50px"></a>
        </div>
        <div class="col-md-8">
          <h5>John Doe</h5>
          <p>xdresources.co has great resources!  - Quasi mollitia maxime nemo quam accusamus possimus. Nisi cupiditate temporibus iure soluta.</p>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
          <a href="#"><img src="images\default-user-image.png" alt="logo" width="50px"></a>
        </div>
        <div class="col-md-8">
          <h5>John Doe</h5>
          <p>xdresources.co has great resources!  - Quasi mollitia maxime nemo quam accusamus possimus. Nisi cupiditate temporibus iure soluta.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
          <a href="#"><img src="images\default-user-image.png" alt="logo" width="50px"></a>
        </div>
        <div class="col-md-8">
          <h5>John Doe</h5>
          <p>xdresources.co has great resources!  - Quasi mollitia maxime nemo quam accusamus possimus. Nisi cupiditate temporibus iure soluta.</p>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
          <a href="#"><img src="images\default-user-image.png" alt="logo" width="50px"></a>
        </div>
        <div class="col-md-8">
          <h5>John Doe</h5>
          <p>xdresources.co has great resources!  - Quasi mollitia maxime nemo quam accusamus possimus. Nisi cupiditate temporibus iure soluta.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
          <a href="#"><img src="images\default-user-image.png" alt="logo" width="50px"></a>
        </div>
        <div class="col-md-8">
          <h5>John Doe</h5>
          <p>xdresources.co has great resources!  - Quasi mollitia maxime nemo quam accusamus possimus. Nisi cupiditate temporibus iure soluta.</p>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
          <a href="#"><img src="images\default-user-image.png" alt="logo" width="50px"></a>
        </div>
        <div class="col-md-8">
          <h5>John Doe</h5>
          <p>xdresources.co has great resources!  - Quasi mollitia maxime nemo quam accusamus possimus. Nisi cupiditate temporibus iure soluta.</p>
        </div>
      </div>
    </div>

    <?php
      }
    }
      ?>
  <!-- Footer -->
  <?php include 'footer.php'; ?>

  </body>
</html>
