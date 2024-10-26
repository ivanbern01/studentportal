<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'useraccounts');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($con === false) {
  die("ERROR:Could not connect. " . mysqli_connect_error());
} else {
  echo "Database Connected Succesfully!";
}

$username = mysqli_real_escape_string($con, $_REQUEST["username"]);
$email = mysqli_real_escape_string($con, $_REQUEST["email"]);
$password = mysqli_real_escape_string($con, $_REQUEST["password"]);

$sql = "INSERT INTO useraccounts (username, email, password)
  Values ('$username', '$email', '$password')";
if (mysqli_query($con, $sql)) {
  header("location:index.php");
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);
?>