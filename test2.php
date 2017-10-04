<?php
$name = $_GET['name'];
$age = $_GET['age'];
$country = $_GET['country'];
if(isset($name) && isset($age) && isset($country))echo "Name: ". $name . " Age: " . $age . " Country: " . $country;