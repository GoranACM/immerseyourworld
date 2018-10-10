<?php include_once 'session.php';
$_SESSION['activePage'] = "contact"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contact | IYW</title>
    <?php include 'head.php'; ?>
  </head>
  <body>

<!-- Header -->
<?php include 'header.php'; ?>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <hr class="hr1">
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Melbourne, Aus</p>
      <p><span class="glyphicon glyphicon-phone"></span> +61 123 456 789 </p>
      <p><span class="glyphicon glyphicon-envelope"></span> ait@ait.nsw.edu.au</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
            <form name="contactform" action="formtoemail.php" method="post" id="contact-form" class="text-left w-75">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div class="mapouter">
    <div class=".col-lg">
      <div class="gmap_canvas">
        <iframe width="100%" height="400px" id="gmap_canvas"
        src="https://maps.google.com/maps?q=120%20spencer%20street&t=&z=13&ie=UTF8&iwloc=&output=embed"
        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
    </div>
  <style>.mapouter{text-align:right;height:400px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style>
</div>
<!-- <div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

  <!-- Footer -->

  <?php include 'footer.php'; ?>
  </body>
</html>
