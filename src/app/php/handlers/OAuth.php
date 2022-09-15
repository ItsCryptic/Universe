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


$host = "";
$username = "";
$password = "";

$conn = new mysqli($host, $username, $password);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

function login() {
    
}

function createAccount() {

}

?>