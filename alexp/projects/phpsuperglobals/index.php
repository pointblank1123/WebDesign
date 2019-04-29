<?php include 'php/server-info.php';?>
<! DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/index.css">
    <title>Superglobals</title>
  </head>
  <body>
  <h1>PHP Superglobals | Alex P.| Last Update: Dec. 12, 2018</h1>
    <!-- <?php
    /*
      echo "echo from inside PHP block <br>" ;
      // Server Inside
      $server = [
        $hsn = 'Host Server Name' => $_SERVER['SERVER_NAME'],
        $hh = 'Host Header' => $_SERVER['HTTP_HOST'],
        $ss = 'Server Software'=>$_SERVER['SERVER_SOFTWARE'],
        $dr = 'Document Root'=>$_SERVER['DOCUMENT_ROOT'],
        $cp = 'Current Page' =>$_SERVER['PHP_SELF']
      ];
       print_r($server);
      // Client Side (Server side + Client side called 'full stack')
      $client =[
        $csi = 'Client Side Info'=> $_SERVER['HTTP_USER_AGENT'],
        $ci = 'Client Ip' => $_SERVER['REMOTE_ADDR'],
        $rp = 'Remote Port' => $_SERVER['REMOTE_PORT']
      ];
      echo'<br>';
      print_r($client);
      */
    ?>-->
    <div class="container">
      <h1>Server & File Info</h1>
      <?php if($server): ?>
        <ul class="list-group">
          <?php foreach($server as $key => $value): ?>
            <li class="list-group-item">
              <bold><?php echo $key; ?></bold>
              <?php echo $value; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <h1> Client Info</h1>
      <?php if($server): ?>
        <ul class="list-group">
          <?php foreach($client as $key => $value): ?>
            <li class="list-group-item">
              <bold><?php echo $key; ?></bold>
              <?php echo $value; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
    <button onclick = "window.location.href='get_post.php'">GET and POST, Superglobals</button>
  </body>
</html>
