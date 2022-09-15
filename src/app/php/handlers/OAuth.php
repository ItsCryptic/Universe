<?php
require_once("../library/DiscordOAuth.php");
try {
$request = new DiscordOauth2(
    "APP ID",
    "APP SECRET",
    "Redirect URL",
    "Scopes (array)"
);
}catch (Exception $e) {
    die("Error: " . $e.getMessage());
}

//Database
$host = "";
$username = "";
$password = "";
$db = "";

$conn = new mysqli($host, $username, $password, $db);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "";
echo "Connected successfully";

function login() {
    if (mysqli_query($conn, $sql)) {
        echo("Logged in.");
    }else {
        echo("Error logging in: " . mysqli_error($conn));
    }
}

function createAccount() {
 $sql = "INSERT INTO USERS($USERNAME, $USERPASSWORD) VALUES ($FIRST_NAME, $LAST_NAME)";
 if ($conn->query($sql)) {
    echo "New user created successfully";
 }else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn.close();
 
}

?>