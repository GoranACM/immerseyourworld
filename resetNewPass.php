<!DOCTYPE html>
<html>
<head>
  <title>Reset | IYW</title>
  <?php include 'head.php'; ?>
</head>
<body>
<?php
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  include 'serverCreds.php';

  //create a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  $email = $_POST['lg_email'];

  if($select = mysqli_query($conn, "SELECT COUNT(*) FROM Register WHERE     md5(Email)='$email' AND md5(Password)='$pass'")){
    $row = $result->fetch_assoc();
  $select=mysql_query("select email,password from user where md5(email)='$email' and md5(password)='$pass'");
  if(mysql_num_rows($select)==1)
  {
    ?>

    <div class="">
      <div class="text-center">
        <h3>Enter new password</h3>
        <hr class="hr1">
      </div><br>
      <div class="row hr1 text-center">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <h4>Please enter your new password below!</h4>
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
            <form method="post" action="submit_new.php">
            <input type="hidden" name="email" value="<?php echo $email;?>">
              <div class="main-login-form">
                <div class="login-group">
                  <div class="form-group">
                    <p>New Password</p>
                    <label for="lg_password" class="sr-only">New Password</label>
                    <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="New Password" required>
                  </div>
                  <div class="form-group">
                    <p>Confirm New Password</p>
                    <label for="lg_password" class="sr-only">New Password</label>
                    <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="New Password" required>
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

    <?php
  }
}}
?>
  </body>
</html>
