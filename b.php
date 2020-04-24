<?php

$u = 'apostilla.desarrollo.intt.gob.ve/api/consular-letter/apostilled';
$t = '8WCDVcfOM8upIQi0Sgl3olWUF3B5rwi5lQnS9D31vvmJTI1bABKwt66j6LGATka7k2RB8Ire5V2cfpMc';

$curl = curl_init();



$h = array(
      'Authorization: Bearer 8WCDVcfOM8upIQi0Sgl3olWUF3B5rwi5lQnS9D31vvmJTI1bABKwt66j6LGATka7k2RB8Ire5V2cfpMc',
      'Content-Type: application/json',
      'Accept: application/json'
   );

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_URL, $u);
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $h);









   curl_setopt($curl, CURLOPT_POSTFIELDS, 'traking=200204315204');

   //curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   // EXECUTE:
   $result = curl_exec($curl);


   /*if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;*/


   //var_dump(curl_setopt());



?>

