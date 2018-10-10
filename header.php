<?php
$_SESSION['activePage'];
?>
<style>
  <?php include 'style.css'; ?>
</style>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
  switch($_GET["action"]) {
  	case "add":
  		if(!empty($_POST["quantity"])) {
  			$productByProductID = $db_handle->runQuery("SELECT * FROM Products WHERE ProductID='" . $_GET["ProductID"] . "'");
  			$itemArray = array($productByProductID[0]["ProductID"]=>array('ProductName'=>$productByProductID[0]["ProductName"], 'ProductID'=>$productByProductID[0]["ProductID"], 'quantity'=>$_POST["quantity"], 'ProductPrice'=>$productByProductID[0]["ProductPrice"],));

  			if(!empty($_SESSION["cart_item"])) {
  				if(in_array($productByProductID[0]["ProductID"],array_keys($_SESSION["cart_item"]))) {
  					foreach($_SESSION["cart_item"] as $k => $v) {
  							if($productByProductID[0]["ProductID"] == $k) {
  								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
  									$_SESSION["cart_item"][$k]["quantity"] = 0;
  								}
  								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
  							}
  					}
  				} else {
  					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
  				}
  			} else {
  				$_SESSION["cart_item"] = $itemArray;
  			}
  		}
  	break;
  	case "remove":
  		if(!empty($_SESSION["cart_item"])) {
  			foreach($_SESSION["cart_item"] as $k => $v) {
  					if($_GET["ProductID"] == $k)
  						unset($_SESSION["cart_item"][$k]);
  					if(empty($_SESSION["cart_item"]))
  						unset($_SESSION["cart_item"]);
  			}
  		}
  	break;
  	case "empty":
  		unset($_SESSION["cart_item"]);
  	break;
  }
}
?>

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
      <?php if ($_SESSION['activePage'] == "home") { ?>
        <li class="nav-item bg-dark active mr-4">
          <a class="nav-link py-4 text-center text-white" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
      <?php } else { ?>
        <li class="nav-item mr-4">
          <a class="nav-link py-4 text-center text-dark" href="index.php">Home</a>
      </li>
      <?php } ?>

      <?php if ($_SESSION['activePage'] == "about") { ?>
        <li class="nav-item bg-dark active mr-4">
          <a class="nav-link py-4 text-center text-white" href="about.php">About<span class="sr-only">(current)</span></a>
        </li>
      <?php } else { ?>
        <li class="nav-item mr-4">
          <a class="nav-link py-4 text-center text-dark" href="about.php">About</a>
      </li>
      <?php } ?>

      <?php if ($_SESSION['activePage'] == "shop") { ?>
        <li class="nav-item bg-dark active mr-4">
          <a class="nav-link py-4 text-center text-white" href="shop.php">Shop<span class="sr-only">(current)</span></a>
        </li>
      <?php } else { ?>
        <li class="nav-item mr-4">
          <a class="nav-link py-4 text-center text-dark" href="shop.php">Shop</a>
      </li>
      <?php } ?>

      <?php if ($_SESSION['activePage'] == "contact") { ?>
        <li class="nav-item bg-dark active mr-4">
          <a class="nav-link py-4 text-center text-white" href="contact.php">Contact<span class="sr-only">(current)</span></a>
        </li>
      <?php } else { ?>
        <li class="nav-item mr-4">
          <a class="nav-link py-4 text-center text-dark" href="contact.php">Contact</a>
      </li>
      <?php } ?>

    <!-- Search -->
    <div class="search__container">
      <form autocomplete="off">
        <input type="text" name="search" id="searchinput"  placeholder="search" >
      </form>

      <!-- Search Icon -->
      <div class="dropleft" id="searchicon">
        <a class="nav-link dropdown-toggle text-dark" href="#">
          <img src="images/search.png" alt="search" width = "50px" height="50px">
        </a>
      </div>

      <!-- Dropdown list -->
      <div class="search__results shadow">
      </div>
    </div>
  </div>

  <!-- Cart Dropdown -->
  <?php
  if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_ProductPrice = 0;
   ?>

  <div class="dropdown">
    <a class="nav-link dropdown-toggle text-dark"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="images/cart.png" alt="cart" width="50px" height="50px"></a>
    <div class="dropdown-menu dropdown-menu-right p-3 shadow" aria-labelledby="navbarDropdownMenuLink" align="right" style="width: 550px;">
      <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
          <tr>
            <th style="text-align:left;"></th>
            <th style="text-align:right;" width="3%">Qty</th>
            <th style="text-align:right;" width="25%">Item Price</th>
            <th style="text-align:right;" width="20%">Price</th>
            <th style="text-align:center;" width="5%"></th>
          </tr>
          <?php
            foreach ($_SESSION["cart_item"] as $item){
                $item_ProductPrice = $item["quantity"]*$item["ProductPrice"];
        		?>
        	<tr>
    				<td style="text-align:center;"><img style="width:100px" src="products/<?php echo $item["ProductID"]; ?>/Product4.jpg" class="cart-item-image" /><br><?php echo $item["ProductName"]; ?></td>
    				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
    				<td  style="text-align:right;"><?php echo "$ ".$item["ProductPrice"]; ?></td>
    				<td  style="text-align:right;"><?php echo "$ ". number_format($item_ProductPrice,2); ?></td>
    				<td style="text-align:center;"><a href="shop.php?action=remove&ProductID=<?php echo $item["ProductID"]; ?>" class="btnRemoveAction"><img src="images/remove.png" alt="Remove Item" style="width:25px;"/></a></td>
        	</tr>
  				<?php
  				$total_quantity += $item["quantity"];
  				$total_ProductPrice += ($item["ProductPrice"]*$item["quantity"]);
        		}
        		?>
          <tr>
            <td colspan="2" align="right">Total:</td>
            <td align="right"><?php echo $total_quantity; ?></td>
            <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_ProductPrice, 2); ?></strong></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <div class="row justify-content-end">
        <div class="col-span-4 d-flex justify-content-end mb-3" id="btnEmpty">
          <a id="btnEmpty" href="shop.php?action=empty">Empty Cart</a>
        </div>
        <div class="col-span-6 d-flex justify-content-end mb-3">
          <button type="button" class="btn btn-outline-dark"  name="Shop">Check Out</button>
        </div>
        <div class="col-span-2" style="padding-right: 46px;">
        </div>
      </div>
    </div>
  </div>

  <?php
  } else {
  ?>

  <!-- Empty cart -->
  <div class="dropdown">
    <a class="nav-link dropdown-toggle text-dark"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="images/cart.png" alt="cart" width="50px" height="50px"></a>
    <div class="dropdown-menu dropdown-menu-right p-3 shadow" aria-labelledby="navbarDropdownMenuLink" align="right" style="width: 250px;">
      <div class="no-records text-center">Your Cart is Empty</div>
    </div>
  </div>

  <?php
  }
  ?>

  <!-- User Dropdown -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item
  <?php if ($_SESSION['activePage'] == "register") { ?>
   bg-dark active <?php } else { ?> mr-4"> <?php } ?>
	     <div class="dropdown">
         <a class="nav-link dropdown-toggle py-4 text-center
         <?php if ($_SESSION['activePage'] == "register") { ?>
          text-white <?php } else { ?>
            text-dark <?php } ?> aria-expanded=" aria-haspopup="true" data-toggle="dropdown" role="button" id="navbarDropdownMenuLink" href="#" aria-expanded="false">
           <img src="images/default-user-image.png" alt="user" width="50px">
         </a>
    <div class="dropdown-menu dropdown-menu-right p-3 shadow" aria-labelledby="navbarDropdownMenuLink" style="width: 300px;">
      <!-- Login form inside of cart dropdown -->
      <div class="login-form-1">
        <form id="login-form" class="text-left" accept-charset='UTF-8' action="login.php" method="post">
          <div class="login-form-main-message"></div>
          <div class="main-login-form text-center">
            <div class="login-group">
              <div class="form-group">
                <label for="lg_username" class="sr-only">Username</label>
                <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username" required>
              </div>
              <div class="form-group">
                <label for="lg_password" class="sr-only">Password</label>
                <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password" required>
              </div>
              <div class="form-group login-group-checkbox text-center m-0">
                <input type="checkbox" id="lg_remember" name="lg_remember">
                <label for="lg_remember">Remember</label>
              </div>
            </div>
            <button type="submit" class="login-button btn btn-outline-dark mb-2">Login</button>
          </div>
          <div class="etc-login-form m-0">
            <p class="m-0">Forgot your password? <a href="resetPass.php">Click here</a></p>
            <p class="m-0">New user? <a href="register.php">Create new account</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</li>
</ul>
</nav>
