<?php


// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value
function callAPI($url, $data){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_POST, 1);
   curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 8WCDVcfOM8upIQi0Sgl3olWUF3B5rwi5lQnS9D31vvmJTI1bABKwt66j6LGATka7k2RB8Ire5V2cfpMc',
      'Content-Type: application/json',
      'Accept: application/json'
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);

var_dump ($result);
echo "---<br><br>";

   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}



$data_array =  array("tracking" => '200204315204');

var_dump($data_array);
echo "<br><br>";

$make_call = callAPI( 'apostilla.desarrollo.intt.gob.ve/api/consular-letter/apostilled', json_encode($data_array));

var_dump($make_call);
echo "<br><br>";

$response = json_decode($make_call, true);

var_dump($response);
echo "<br><br>";


$errors = $response['response']['errors'];

var_dump($errors);
echo "<br><br>";


echo $data = $response['response']['data'][0];
echo "<br><br>";

?>
