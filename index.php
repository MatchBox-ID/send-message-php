<?php
$curl =curl_init();
$data = [
      'sender' => '6285936528795', //nomor pengirim
      'message' => 'halo ini adalah contoh', //maksimal 1000 karakter
      'to' => '6285868055463',  //nomor penerima
 ];
  
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data) );
      curl_setopt($curl, CURLOPT_URL, "https://wa.notifku.my.id/send");
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
      $result = curl_exec($curl);
      curl_close($curl);
  
      echo "<pre>";
      print_r($result);
?>
