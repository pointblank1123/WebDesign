<! DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ruda|Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/index.css">
    <link rel="stylesheet" href="../css/onlineDB.css">
    <title>Online Database</title>
  </head>
  <body>
    <h1>Database on the internet | Alex P. | 01-28-19</h1>  
    <?php

      require '../php/Connection.php';

      echo'<br><hr><br>';
      // DB read/display phase
      $sql = 'SELECT ID_customer, fname, mname, lname, entrant FROM customer';
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        echo '<table><tr><th>Customer ID</th><th>Name</th><th>Entrant</td></tr>';
        while($row = $result->fetch_assoc()){
          echo '<tr><td>' . $row['ID_customer'].'</td>'.
          '<td>'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>'.
          '<td>'.$row['entrant'].'</td></tr>';
        }
        echo '</table>';
      }
      else{
        echo 'No Results';
      }

      echo '<br><hr><br>';

      include '../php/close.php';
    ?>

  </body>
  </html>