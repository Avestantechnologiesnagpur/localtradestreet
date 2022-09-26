

<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-with');

$data = json_decode(file_get_contents("php://input"),true);
$student_id = $data['sid'];



include "conn.php";

$sql = "DELETE FROM submitlist WHERE id = {$student_id}";



if(mysqli_query($conn,$sql)){
    echo json_encode(array('message' => 'Record Deleted.', 'status'=> true));


}else{

    echo json_encode(array('message' => 'Record Not Deleted.', 'status'=> False));


}
?>

