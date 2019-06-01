<?php

$link = mysqli_connect("localhost", "root", "", "c-una");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

?>