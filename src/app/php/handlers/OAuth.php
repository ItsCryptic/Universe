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


?>