 <?php
  

function send_LINE($msg){
 $access_token = 'FE6SNDANIq5RD+bf/Bj2E9CUbUBpCedmSiPuHd4sOhwURx9lXhC2kBpoLpVdPi0Vi+BcyVpnYo5o+5jnJnRHD9U4KgM4T5Xt2JIeua7N+aLTQ8L/ZRoE7/EkeF6SwLp3tcMf5XbCOnytW3jff+ZKzwdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U4a1d30cba4ce0aff87d95c691e8af3a4',
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
