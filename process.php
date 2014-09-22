<?php

$csv = array();

echo '<a href="' . $_SERVER['HTTP_REFERER'] . '"><< Go Back</a><br/><br/>';

// check there are no errors
if($_FILES['csv']['error'] == 0){
  $name = $_FILES['csv']['name'];
  $ext = strtolower(end(explode('.', $_FILES['csv']['name'])));
  $type = $_FILES['csv']['type'];
  $tmpName = $_FILES['csv']['tmp_name'];

  // check the file is a csv
  if($ext === 'csv'){
    if(($handle = fopen($tmpName, 'r')) !== FALSE) {
      // necessary if a large csv file
      set_time_limit(0);

      while(($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
        // number of fields in the csv
        $num = count($data);

        // get the values from the csv
        $name = $data[0];
        $email = $data[1];

        // Format Email Message Body
        $message = "Hello $name, \r\n\r\n" . $_REQUEST['message'];

        // Let's prepare the message for sending
        $to      = $email;
        $subject = "$name - House in Mexico";
        $headers = 'From: paul@casadesofia.com';

        // Now send the email message
        mail($to, $subject, $message, $headers);


        // Logging to show who email is going to
        echo "Sending to: $name - $email";
        echo '<br/>';
        echo "Hello $name, <br/><br/>" . $_REQUEST['message'];
        echo '<br/>';
        echo '<br/>';


      }

      fclose($handle);
    }
  }
}