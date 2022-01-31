<?php
  function print_title(){
    if(isset($_GET['id'])){
      echo $_GET['id'];
    }
    else{
      echo "Welcome";
    }
  }

  function print_description(){
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    }
    else{
      echo "Hello, PHP";
    }
  }

  function print_list(){
    $filename = scandir('./data');

    $i = 0;
    while($i < count($filename)){
      if($filename[$i] != '.') {
        if($filename[$i] != '..') {
          echo "<li><a href=\"index.php?id=$filename[$i]\">$filename[$i]</a></li>\n";
        }
      }
      $i++;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
        print_list();
      ?>
    </ol>
    <h2>
      <?php
        print_title();
      ?>
    </h2>
    <?php
      print_description();
     ?>
  </body>
</html>
