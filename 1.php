<?php

// $url = 'http://localhost/test/rest_api/2/read.php';
// $data = array(
//     "par1" => "Jane",
//     "par12" => "Mclane"
// );
// $encodedData = json_encode($data);
// $curl = curl_init($url);
// $data_string = urlencode(json_encode($data));
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt( $curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_POSTFIELDS, $encodedData);
// $result = curl_exec($curl);
// curl_close($curl);
// print $result;

$ch = curl_init();
$json = '{"par1":1,"par2":2}';
curl_setopt($ch, CURLOPT_URL, 'http://localhost/test/rest_api/2/read.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"par1\":\"aa\",\"par2\":\"bb\",\"par3\":\"CCC\"}");
curl_setopt($ch, CURLOPT_POSTFIELDS, "$json");
$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo "<pre>";print_r($result);

///////////////

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, 'http://localhost/test/rest_api/2/read.php');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"par1\":\"aa\",\"par2\":\"bb\",\"par3\":\"CCC\"}");

// $headers = array();
// $headers[] = 'Content-Type: application/json';
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// $result = curl_exec($ch);
// echo "<pre>";print_r($result);
// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }
// curl_close($ch);