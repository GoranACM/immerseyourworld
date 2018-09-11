<?php
session_start();

if (isset($_SESSION["logged_in"])) {
  $isloggedin = $_SESSION["logged_in"];
} else {
  $isloggedin = false;
}

if ($isloggedin) {
  $email = $_SESSION["Email"];
  $username = $_SESSION["Username"];
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if ($isloggedin): ?>
      <p>Welcome back, <?php echo $username . " - " . $email; ?></p>

      <a href="shop.php">Let's get shopping!</a>
      <a href="logout.php">Log out.</a>
      <?php else: ?>
      <p>Sorry you must be logged in!</p>
      <a href="index.html">Back to home</a>

    <?php endif; ?>
  </body>
</html>
