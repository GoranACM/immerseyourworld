<?php include_once 'session.php';
$_SESSION['activePage'] = "register"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register | IYW</title>
    <?php include 'head.php'; ?>
  </head>
  <body>

<!-- Header -->
<?php include 'header.php'; ?>

<!-- Create account -->

<div class="">
  <div class="text-center">
    <h3>Create new account</h3>
    <hr class="hr1">
  </div>
  <div class="row hr1">
    <div class="col-md-6 d-flex justify-content-center" style="margin-bottom: 15px;">
      <div class="card hr1" style="max-width: 350px">
        <img class="card-img-top" src="images\default-user-image.png" alt="Card image">
        <div class="card-body text-center">
          <h4 class="card-title">John Doe</h4>
          <div class="file input-group-append d-flex justify-content-center upload-btn-wrapper">
            <div class="btn btn-sm btn-outline-dark">Upload Image
            <input type="file" name="file"/></div>
          </div>
        </div>
      </div>
      <div class="login-form-1 hr1">
        <form action="statement.php" method="post" id="register-form" class="text-left w-75">
          <div class="login-form-main-message"></div>
          <div class="main-login-form">
            <div class="login-group">
              <div class="form-group">
                <p>First Name</p>
                <label for="lg_firstname" class="sr-only">First Name</label>
                <input type="text" class="form-control" id="lg_firstname" name="lg_firstname" placeholder="First Name" required>
              </div>
              <div class="form-group">
                <p>Last Name</p>
                <label for="lg_lastname" class="sr-only">Last Name</label>
                <input type="text" class="form-control" id="lg_lastname" name="lg_lastname" placeholder="Last Name" required>
              </div>
              <br>
              <p>OR...</p>
              <br>
              <p>Sign up with Facebook</p>
              <div class="input-group-append d-flex justify-content-center">
                <button class="btn btn-sm btn-outline-dark" type="button"><i class="fa fa-facebook"> Sign up</i></button>
              </div><br>
              <p>Sign up with Instagram</p>
              <div class="input-group-append d-flex justify-content-center">
                <button class="btn btn-sm btn-outline-dark" type="button"><i class="fa fa-instagram"> Sign up</i></button>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="login-form-1 hr1">
          <div class="login-form-main-message"></div>
          <div class="main-login-form">
            <div class="login-group">
              <div class="form-group">
                <p>Email Address</p>
                <label for="lg_email" class="sr-only">Email Address</label>
                <input type="email" class="form-control" id="lg_email" name="lg_email" placeholder="Email Address" required>
              </div>
              <div class="form-group">
                <p>Username</p>
                <label for="lg_username" class="sr-only">Username</label>
                <input type="username" class="form-control" id="lg_username" name="lg_username" placeholder="Username" required>
              </div>
              <div class="form-group">
                <p>New Password</p>
                <label for="lg_password" class="sr-only">New Password</label>
                <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="New Password" required>
              </div>
              <div class="form-group">
                <p>Confirm New Password</p>
                <label for="lg_password_confirm" class="sr-only">Confirm New Password</label>
                <input type="password" class="form-control" id="lg_password_confirm" name="lg_password_confirm" placeholder="Confirm New Password" required><span id='message'></span>
              </div>
              <br>
              <div class="input-group-append d-flex justify-content-center">
                <button class="btn btn-sm btn-outline-dark" type="submit">Create Account</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
  </body>
</html>
