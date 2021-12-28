<?php
$username = $_POST['username'];

echo preg_replace('/\s/', '', $username); // delete whitespace tab etc...
?>