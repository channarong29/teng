 <?php
  

function send_LINE($msg){
 $access_token = 'ZB8NY8+ADBPDdNg4eAB6I8chpeBZ0BOHqDfbLTceegFhDuWT3d/UFJhXadinLY6jmJdT/FUpR6BR+0Ta70wb8nvGdK/TVxNVpatWY7oZ28hT4EI2j5whiv11Dah97d1P64b4w+yGHgwtZEYskTQXhQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U9809b553c667a0cac53140dd5b3db51e',  //user id ของ Line Developer
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
