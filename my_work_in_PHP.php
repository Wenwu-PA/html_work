<?php 
$conn = mysqli_connect("MySQL-8.2","root","","my_work");
$value = $_POST['value']; // "midorima" or "akashi"
$query = 'SELECT `' . $value . '` FROM `first_base`';
$result = mysqli_query($conn,$query);
$web = mysqli_fetch_array($result)[0];
header("location: /$web")
?>
