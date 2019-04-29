<?php
  if(isset($_GET['email'])){
    $email= htmlentities($_GET["email"]);
  }
  if(isset($_GET['name'])){
    //print_r($_GET);
    $name= htmlentities($_GET["name"]);
    //echo $name;
  }
  if(isset($_POST['name'])){
    //$name = htmlentities($_POST["name"]);
    //echo $name;
  }
  if(isset($_REQUEST['name'])){
    //print_r($_REQUEST);
    //$name = htmlentities($_REQUEST["name"]);
    //echo $name;
  }
  //echo $_SERVER['QUERY_STRING']
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/index.css">
  <title>Get & Post</title>
</head>
<body>
  <div id="background1"></div>
  <div id="background2"></div>
  <h1>PHP Get and Post Practice | Alex P. | Last Update: Dec. 14, 2018</h1>
  <form method="GET" action="get_post.php">
    <div>
      <label>Name</label>
      <input type="text" name="name">
    </div>
    <br>
    <div>
      <label>Email</label>
      <input type="text" name="email">
    </div>
    <br>
    <input type="submit" value="submit">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=Alex">Alex</a>
    </li>
    <li>
      <a href="get_post.php?name=Steve">Steve</a>
    </li>
    <li>
      <a href="get_post.php?email=example@example.com">Example</a>
    </li>
    <li>
      <a href="get_post.php?email=testemail@gmail.com">Test Email</a>
    </li>
  </ul>
  <h1><?php
  if(isset($_GET['name'])){
    echo "{$name}'s Profile";
  }
  ?></h1>

  <h1>
  <?php
  if(isset($_GET['email'])){
    echo "Email: {$email}";
  }
  ?>
  </h1>
<?php include 'php/footer.php';?>
</body>
</html>
