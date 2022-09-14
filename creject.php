<?php
 $conn=mysqli_connect('localhost','root','','localtradestreet');

extract($_GET);
$query="DELETE FROM contact WHERE id='$id'";
mysqli_query($conn,$query);
header('location:acontact.php');
?> 