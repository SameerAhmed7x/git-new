<?php
session_start();
$_SESSION["name"] = "sameer";
echo "session variable is set: ". $_SESSION["name"];
?>