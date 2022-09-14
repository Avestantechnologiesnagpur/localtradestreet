<?php
 $conn=mysqli_connect('localhost','root','','localtradestreet');

extract($_GET);
$query="DELETE FROM submitlist WHERE id='$id'";
mysqli_query($conn,$query);
header('location:adisplay1.php');
?> 


