<?php include_once 'session.php';
$_SESSION['activePage'] = "register"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Reset | IYW</title>
    <?php include 'head.php'; ?>
  </head>
  <body>

<!-- Header -->
<?php include 'header.php'; ?>
  <!-- Body Start -->

  <!-- Create account -->

  <div class="">
    <div class="text-center">
      <h3>Reset your password</h3>
      <hr class="hr1">
    </div><br>
    <div class="row hr1 text-center">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <h4>Enter you email address that you used to register on this website below, and we will send you a link where you can set a new password!</h4>
      </div>
      <div class="col-md-2">

      </div>
    </div><br>

    <div class="row hr1">

      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <div class="login-form-1 hr1">
          <div class="login-form-main-message"></div>
          <form action="sendLink.php" method="post">
            <div class="main-login-form">
              <div class="login-group">
                <div class="form-group">
                  <p>Email Address</p>
                  <label for="lg_email" class="sr-only">Email Address</label>
                  <input type="email" class="form-control" id="lg_email" name="lg_email" placeholder="Email Address" required>
                </div>

                <br>
                <div class="input-group-append d-flex justify-content-center">
                  <button class="btn btn-sm btn-outline-dark" type="submit" name="submit_email">Send</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>

  </body>
</html>
