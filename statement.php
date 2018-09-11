<?php

$servername = "localhost";
$username = "id6957991_g0r4nm1k3rud0lf0";
$password = "!mm3r53YW";
$dbname = "id6957991_immerseyourworld";

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

if($query)
      header('Location: shop.html');


$query->close();
//close the DB connection
mysqli_close($conn);

?>
