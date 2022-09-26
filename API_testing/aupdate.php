<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-with');


$data = json_decode(file_get_contents("php://input"),true);
$id = $data['sid'];
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

$sql = "UPDATE submitlist SET title = '{$title}', category = '{$category}', oname = '{$oname}', email = '{$email}', password = '{$password}', city = '{$city}', address = '{$address}', pincode ='{$pincode}', mobno ='{$mobno}', landline ='{$landline}' WHERE id = {$id}";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Record Update.', 'status'=> true));
}else{

    echo json_encode(array('message' => 'Record Not Update.', 'status'=> False));


}
?>