<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-with');


$data = json_decode(file_get_contents("php://input"),true);
$title = $data['stitle'];
$category = $data['scategory'];
$oname = $data['soname'];
$email = $data['semail'];
$password = $data['spassword'];
$city= $data['scity'];
$address = $data['saddress'];
$pincode= $data['spincode'];
$mobno= $data['smobno'];
$landline= $data['slandline'];





include "conn.php";
$sql = "INSERT INTO submitlist (title, category, oname, email, password, city, address, pincode, mobno, landline) VALUE ('{$title}', '{$category}', '{$oname}', '{$email}', '{$password}', '{$city}', '{$address}', '{$pincode}','{$mobno}','{$landline}')";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Record Inserted.', 'status'=> true));
}else{

    echo json_encode(array('message' => 'Record Not Inserted.', 'status'=> False));


}
?>
