<?php 
  $token = 'LQxTe8HemKCjJDEzNRok3GZimJcP3VmGAYN9YJVx';
  $params = $_GET['pasaje'];
  
  $params = str_replace(' ', '+', $params);
  
  //http://es.bibles.org/pages/api <---- documentacion de api
  $url = 'http://LQxTe8HemKCjJDEzNRok3GZimJcP3VmGAYN9YJVx:X@es.bibles.org/v2/passages.js?q[]='.$params.'&version=spa-RVR60';

  // Set up cURL
  $ch = curl_init();
  // Set the URL
  curl_setopt($ch, CURLOPT_URL, $url);
  // don't verify SSL certificate
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  // Return the contents of the response as a string
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // Follow redirects
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  // Set up authentication
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_USERPWD, "$token:X");

  // Do the request
  $response = curl_exec($ch);
  curl_close($ch);

  print($response);  
?>