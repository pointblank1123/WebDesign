<?php
  //echo "echo from inside PHP block <br>" ;
  // Server Inside
  $server = [
    $hsn = 'Host Server Name' => $_SERVER['SERVER_NAME'],
    $hh = 'Host Header' => $_SERVER['HTTP_HOST'],
    $ss = 'Server Software'=>$_SERVER['SERVER_SOFTWARE'],
    $dr = 'Document Root'=>$_SERVER['DOCUMENT_ROOT'],
    $cp = 'Current Page' =>$_SERVER['PHP_SELF'],
    $ru = 'Url Requested' =>$_SERVER['REQUEST_URI'],
  ];
   //print_r($server);
  // Client Side (Server side + Client side called 'full stack')
  $client =[
    $csi = 'Client Side Info'=> $_SERVER['HTTP_USER_AGENT'],
    $ci = 'Client Ip' => $_SERVER['REMOTE_ADDR'],
    $rp = 'Remote Port' => $_SERVER['REMOTE_PORT']
  ];
  echo'<br>';
  //print_r($client);
  setcookie('UserIP', $_SERVER['REMOTE_ADDR'] );
?>
