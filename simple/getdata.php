<?php
$host = 'localhost';
$user = 'homiaid_wp';
$pass = 'Semangatguys99++';

mysql_connect($host, $user, $pass);

mysql_select_db('homiaid_wp');
// $upload_image=$_FILES["image"]["name"];

// $folder="images/";

// move_uploaded_file($_FILES["image"]["tmp_name"], "$folder".$_FILES["image"]["name"]);
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);

$email = $_POST['email'];
$age = $_POST['age'];
$desc = $_POST['desc'];
$insert_path="INSERT INTO demo (email,age,description,image, image_name) VALUES('$email','$age','$desc','$image','$image_name')";

$var=mysql_query($insert_path);

header("Location: http://homia.id?submitted=true");
die();
?>