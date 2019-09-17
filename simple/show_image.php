<?php
$host = 'localhost';
$user = 'homiaid_wp';
$pass = 'Semangatguys99++';

mysql_connect($host, $user, $pass);

mysql_select_db('homiaid_wp');

$name=$_GET['id'];

$select_image="select * from demo where id='$name'";

$var=mysql_query($select_image);

if($row=mysql_fetch_array($var))
{
 $image_name=$row["image_name"];
 $image_content=$row["image"];
}
echo $row["email"]."<br>";
echo $row["age"]."<br>";
echo $row["description"]."<br>";
echo $row["image_name"]."<br>";
echo '<img src="data:image/png;base64,'.base64_encode($image_content).'" width=200 height=200>';

?>