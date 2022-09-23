<?php
 $conn=mysqli_connect('localhost','u570873310_local','Local@321','u570873310_localtrade');

extract($_GET);
$query="DELETE FROM contact WHERE id='$id'";
mysqli_query($conn,$query);
header('location:acontact.php');
?> 