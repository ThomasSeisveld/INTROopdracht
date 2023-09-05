<?php

require 'connect.php';

$query = "SELECT name, Discription, Images FROM Images";

// Query uitvoeren
$result = $conn->query($query);