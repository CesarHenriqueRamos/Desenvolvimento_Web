<?php
/*
curl_init();      // initializes a cURL session
curl_setopt();    // changes the cURL session behavior with options
curl_exec();      // executes the started cURL session
curl_close();     // closes the cURL session and deletes the variable made by curl_init();
*/
  // create curl resource
  $ch = curl_init();

  // set url
  curl_setopt($ch, CURLOPT_URL, "example.com");

  //return the transfer as a string
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  // $output contains the output string
  //retorna os dados do saite example.com
  echo $output = curl_exec($ch);

  // close curl resource to free up system resources
  curl_close($ch); 
?>