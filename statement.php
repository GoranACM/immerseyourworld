<?php

include 'serverCreds.php';

//create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = $conn->prepare("INSERT INTO Users (FirstName, LastName, Email, Username, Password) VALUES (?,?,?,?,?)");
$query->bind_param("sssss", $FirstName, $LastName, $Email, $Username, $Password);
//set parameters here

$FirstName = $_POST["lg_firstname"];
$LastName = $_POST["lg_lastname"];
$Email = $_POST["lg_email"];
$Username = $_POST["lg_username"];
$Password = password_hash($_POST["lg_password"],PASSWORD_DEFAULT);

$query->execute();

if($query) {
  session_start();

  // Check the expected inputs are set and not empty
  $validusername = isset($_POST['lg_username']) && !empty($_POST['lg_username']);
  $validpassword = isset($_POST['lg_password']) && !empty($_POST['lg_password']);

  // If inputs are correct
  if ($validpassword && $validusername) {

    $userpass = $_POST['lg_password'];
    $useruser = $_POST['lg_username'];

    // Select fields from DB
    $sql = "SELECT * FROM Users WHERE Username='$useruser'";

    $result = $conn->query($sql);

    // Initialize needed fields
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $dbuser = $row["Username"];
      $dbemail = $row["Email"];
      $dbhash = $row["Password"];

      // Check if password is correct and verified and redirect to account
      if (password_verify($userpass, $dbhash)) {
        $_SESSION["Email"] = $dbemail;
        $_SESSION["Username"] = $dbuser;
        $_SESSION["logged_in"] = true;
        header("Location: account.php");
      } else { // If password is incorect redirect to account not logged in
        $_SESSION["logged_in"] = false;
        header("Location: account.php");
      }


    } else {  // If there is no result
      echo "No results";
    }

  } else { // If inputs are incorrect
    echo "You must submit the form";
  }
}

$query->close();
//close the DB connection
mysqli_close($conn);

?>
