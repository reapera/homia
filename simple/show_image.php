<?php
$host = 'localhost';
$user = 'homiaid_wp';
$pass = 'Semangatguys99++';

mysql_connect($host, $user, $pass);

mysql_select_db('homiaid_wp');

$name=$_GET['id'];

$select_image="select * from demo";

$var=mysql_query($select_image);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<table class="table table-bordered table-hover table-dark">
    <thead class="thead-dark">
        <th>Email</th>
        <th>Age</th>
        <th>Desc</th>
        <th>Image Name</th>
        <th>Create Time</th>
        <th>Image</th>
    </thead>
    <tbody>
        
<?php
while($row=mysql_fetch_array($var))
$rows[] = $row;
foreach($rows as $row){
    $image_name=$row["image_name"];
    $image_content=$row["image"];
    echo "<tr>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["age"]."</td>";
    echo "<td>".$row["description"]."</td>";
    echo "<td>".$row["image_name"]."</td>";
    echo "<td>".$row["create_time"]."</td>";
    echo '<td><img src="data:image/png;base64,'.base64_encode($image_content).'" width=200 height=200></td>';
    echo "</tr>";
}

?>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>