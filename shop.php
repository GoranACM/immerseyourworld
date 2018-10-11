<?php include_once 'session.php';
 $_SESSION['activePage'] = "shop"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Shop | IYW</title>
    <?php include 'head.php'; ?>
  </head>
  <body>

    <!-- Header -->
    <?php include 'header.php'; ?>


<?php


include 'serverCreds.php';

$conn = new mysqli($servername, $username, $password, $dbname);
$sql  = "SELECT * FROM Products, Category WHERE Products.CategoryID=Category.CategoryID";

    $result = mysqli_query($conn, $sql);

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

<!--  JQUERY FOR CATEGORIES NOT WORKING linking to fetchategories.php
<script>
$(document).ready(function()
{
  $("#fetchcat").on('change',function()
  {
    var value = $(this).val();
    $.ajax(
      {
          url:'fetchcategories.php',
          type:'POST',
          data:'request='+value,
          beforeSend:function()
          {
            $("#product-results").html('Working on...'); // product results- div id not added
          },
          success:function(data)
          {
            $("#product-results").html(data);
          },

      });
    });
  });
</script>
 -->

<!-- Body Start -->

<!-- Bredcrumbs -->

<ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li>Shop</li>
</ul>

<!-- <div id="product-results"> PART OF JQUERY FOR CATEGORIES NOT WORKING -->
<!-- Category -->
<div class="category d-flex flex-row-reverse mr-4 mb-3">
  <p>Sort by:
      <select class="btn btn-outline-dark" name="category" id="fetchcat" name="fetchby">
        <!-- <option value="0">All</option>  MIKE ADD !!!!!!!!! -->
        <option value="1">Headsets</option>
        <option value="2">Cameras</option>
        <option value="3">Drones</option>
        <option value="4">Accessories</option>
      </select>
  </p>
</div>
<div class="row p-3">

  <?php
if ($result)
{

while($row = mysqli_fetch_assoc($result)) {
  ?>

  <div class="col-md-3 mb-5">
    <div class="inner shadow thumbnail ml-2 mr-2">
      <a href="shopItem.php?id=<?php echo $row['ProductID']; ?>">
        <?php
        echo '<img class="img-thumbnail img-fluid" src="products/'.$row['ProductID'].'/Product1.jpg">'
         ?>
      </a>
    </div>
    <div class="inner shadow thumbnail ml-4 mr-4 mb-4 font-weight-light pt-4 pl-4 pr-4">
        <p class="text-muted text-center font-weight-italic">
          <?php
          echo $row['CategoryName'];
            ?>
          </p>
        <p class="text-center font-weight-normal">
          <?php
          echo $row['ProductName'];
            ?>
        </p>
        <?php
            if ($row['ProductRating'] == 1)
            {
                echo '<p class="text-center">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </p>';
            }
            else if ($row['ProductRating'] == 2)
            {
                echo '<p class="text-center">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </p>';
            }
            else if ($row['ProductRating'] == 3)
            {
                echo '<p class="text-center">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </p>';
            }
            else if ($row['ProductRating'] == 4)
            {
                echo '<p class="text-center">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </p>';
            }
            else if ($row['ProductRating'] == 5)
            {
                echo '<p class="text-center">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </p>';
            }
        ?>
        <p class="text-center">
          <?php
          echo wordlimit($row['ProductDescription'], 30);
            ?>
        </p>
        <hr>
        <div class="text-center row">
            <div class="col-md-12">
              <p class="font-italic">$AUD
                <?php
                echo $row['ProductPrice'];
                ?>
              </p>
            </div>
        </div>
      <form method="post" action="shop.php?action=add&ProductID=<?php echo $row['ProductID']; ?>">
          <div class="col-md-12 text-center">
              <div class="cart-action" style="padding-top:8px;">
                <input type="text" class="product-quantity btn btn-outline-dark shadow-sm text-center mb-2 font-weight-light" style="border: none" name="quantity" value="1" size="2"/>
              </div>
              <input type="submit" value="Add to Cart" class="btn btn-outline-dark mb-4 shadow-sm" style="border: none"/>
          </div>
      </form>
    </div>
  </div>

  <?php
    }
  }
    ?>
</div>
</div>


  <!-- Footer -->
  <?php include 'footer.php'; ?>

</body>
</html>
