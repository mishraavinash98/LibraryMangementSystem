<?php

$link = mysqli_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
$db_select = mysqli_select_db($link, 'library');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
?>
