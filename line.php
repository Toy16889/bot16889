 <?php
  

function send_LINE($msg){
 $access_token = 'LGBaxdYD+UOxp0D+USCo9OanWDlYW8gO9X1GAyohD0h80ASluSAqcYmirOn1Oapa84zIdkNJgyRaEcH6iurgIOaNa/zIJ7Es0zhdQGlgeHDtuHw9doCABiq0vt9lczYF8smWHZCKK01dL3VECObLKAdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uffc4d0290c42e349b73555708d1c229c',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
