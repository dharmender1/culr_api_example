<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once 'create_api.php';

header("Content-Type:application/json");
$data = file_get_contents('php://input');

// $database = new Database();
// $db = $database->getConnection();
//  $par1 = $_REQUEST['par1'];
//  $par2 = $_REQUEST['par2'];


// print_r(json_decode($data));
$aa = json_decode($data, true);
$p1 = $aa['par1'];
$p2 = $aa['par2'];
$items = new getVaultSecret("$p1","$p2","c");
// $items->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$result = $items->read();
if(1==1){
    http_response_code(200);     
    // echo json_encode($result);
    print_r($result);
}
else{     
    http_response_code(404);     
    echo json_encode(
        array("message" => "No item found.")
    );
} 
?>