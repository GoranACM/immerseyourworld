<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "id6957991_g0r4nm1k3rud0lf0";
$password = "!mm3r53YW";
// $username = "root";
// $password = "";
$dbname = "id6957991_immerseyourworld";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql  = "SELECT * FROM Products, Category WHERE Products.CategoryID=Category.CategoryID";
    $result = mysqli_query($conn, $sql);
// $sql = "SELECT * FROM Products";
//     $result = mysqli_query($conn, $sql);

    function wordlimit($string, $limit) {

        $overflow = true;

        $array = explode(" ", $string);

        $output = '';

        for ($i = 0; $i < $limit; $i++) {

            if (isset($array[$i])) $output .= $array[$i] . " ";
            else $overflow = false;
        }

        return trim($output) . ($overflow ? "..." : '');
    }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop | IYW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm font-weight-light py-0 mb-3">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="logo" width="130px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Menu List -->
        <ul class="navbar-nav ml-auto">
          <!-- Active page -->
          <li class="nav-item mr-4">
            <a class="nav-link py-4 text-center text-dark" href="index.html">Home</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link py-4 text-center text-dark" href="#">About</a>
          </li>
          <li class="nav-item bg-dark active mr-4">
            <a class="nav-link py-4 text-center text-white" href="shop.php">Shop<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link py-4 text-center text-dark" href="#">Contact</a>
          </li>
        </ul>
        <!-- Search -->
        <input type="text" name="search" id="searchinput" placeholder="search">
        <!-- Search Icon -->
        <div class="dropleft" id="searchicon">
          <a class="nav-link dropdown-toggle text-dark" href="#">
            <img src="images/search.png" alt="search" width = "50px">
          </a>
        </div>
        <!-- Cart Dropdown -->
        <div class="dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="images/cart.png" alt="cart" width="50px">
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <!-- Login form inside of cart dropdown -->
            <div class="login-form-1">
          		<form id="login-form" class="text-left">
          			<div class="login-form-main-message"></div>
          			<div class="main-login-form">
          				<div class="login-group">
          					<div class="form-group">
          						<label for="lg_username" class="sr-only">Username</label>
          						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
          					</div>
          					<div class="form-group">
          						<label for="lg_password" class="sr-only">Password</label>
          						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
          					</div>
          					<div class="form-group login-group-checkbox">
          						<input type="checkbox" id="lg_remember" name="lg_remember">
          						<label for="lg_remember">remember</label>
          					</div>
          				</div>
          				<button type="submit" class="login-button">Login</i></button>
          			</div>
          			<div class="etc-login-form">
          				<p>Forgot your password? <a href="#">Click here</a></p>
          				<p>New user? <a href="register.html">Create new account</a></p>
          			</div>
          		</form>
          	</div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Body Start -->

    <!-- Bredcrumbs -->

    <ul class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Shop</li>
    </ul>

    <div class="row">
      <div class="col-md-3 pr-5">
        <table class="table ml-4 w-75 shadow">
          <thead class="thead">
            <tr>
              <th class="justify-content-center" scope="col">Category</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <th scope="row"><input type="checkbox" name="Category" value="Drones"></th>
              <td>Drones</td>
            </tr>
            <tr>
              <th scope="row"><input type="checkbox" name="Category" value="Headsets"></th>
              <td>Headsets</td>
            </tr>
            <tr>
              <th scope="row"><input type="checkbox" name="Category" value="Cameras"></th>
              <td>Cameras</td>
            </tr>
            <tr>
              <th scope="row"><input type="checkbox" name="Category" value="Accesories"></th>
              <td>Accesories</td>
            </tr>
          </tbody>
        </table>

      <table class="table ml-4 w-75 shadow">
          <thead class="thead">
            <tr>
              <th class="justify-content-center" scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <!-- Slider to enter -->
              </th>
            </tr>
          </tbody>
        </table>
      </div>
      <?php
    if ($result)
    {

    while($row = mysqli_fetch_assoc($result)) {
      ?>

      <div class="col-md-3 mb-5">
        <div class="inner shadow thumbnail ml-2 mr-2">
          <a href="shopItem.php?id=<?php echo $row['ProductID']; ?>">
            <?php
            echo '<img class="img-thumbnail img-fluid" src="images/product'.$row['ProductID'].'.jpg">'

             ?>

          </a>
        </div>
        <div class="inner shadow thumbnail ml-4 mr-4 mb-4 font-weight-light pt-4 pl-4 pr-4">
            <p class="text-muted text-center font-weight-italic">
              <?php
              echo $row['CategoryName'];
                ?>
              <p>
            <p class="text-center font-weight-normal">
              <?php
              echo $row['ProductName'];
                ?>
            </p>
            <p class="text-center">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </p>
            <p class="text-center">
              <?php
              echo wordlimit($row['ProductDescription'], 30);
                ?>

            </p>
            <hr>
              <div class="row">
                <div class="col-md-6">
                  <p>$AUD
                    <?php
                    echo $row['ProductPrice'];
                    ?>
                  </p>
                </div>
                <div class="col-md-6 d-flex justify-content-end mb-3">
                  <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#myModal" name="Shop">Add to Cart</button>
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                          <p>Cart coming soon!</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
      <?php
        }
      }
        ?>

    <!-- Footer -->
    <footer class="page-footer font-small indigo shadow">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto my-5">

              <a href="index.html"><img src="images/logo.png" alt="logo" width="130px"></a>


            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-1 mx-auto my-5">

              <!-- Links -->

              <ul class="list-unstyled">
                <li>
                  <a href="#!">About Us</a>
                </li>
                <li>
                  <a href="#!">Contact</a>
                </li>
                <li>
                  <a href="#!">Shop</a>
                </li>
              </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-1 mx-auto my-5">

              <!-- Links -->

              <ul class="list-unstyled">
                <li>
                  <a href="#!">Account</a>
                </li>
                <li>
                  <a href="#!">Contact</a>
                </li>
                <li>
                  <a href="#!">Search</a>
                </li>
              </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto my-5">

              <!-- Links -->
              <div class="row">
                <div class="col-md-6">
                  <a href="#"><img src="images\fb.png" alt="logo" width="50px"></a>
                </div>
                <div class="col-md-6">
                  <a href="#"><img src="images\insta.png" alt="logo" width="50px"></a>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-6">
                  <a href="#"><img src="images\yt.png" alt="logo" width="50px"></a>
                </div>
                <div class="col-md-6">
                  <a href="#"><img src="images\tw.png" alt="logo" width="50px"></a>
                </div>
              </div>

            </div>

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto my-5">

              <div class="row">
                <div class="col-md-6">
                  <p>Subscribe to our newsletter</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10">
                  <form class="input-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Email" aria-label="Your email" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-outline-dark" type="button">Sign up</button>
                    </div>
                  </form>
                </div>
              </div>



            </div>

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto my-5">

              <!-- Links -->
            <p>120 Spenser St. Melbourne, VIC
            +61 123 456 789
            ait@ait.nsw.edu.au</p>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          ImmerseYourWorld</a>
        </div>
        <!-- Copyright -->

      </footer>

  <!-- Footer -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>
