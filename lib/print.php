<?php
  function print_title(){
    if(isset($_GET['id'])){
      echo htmlspecialchars($_GET['id']);
    }
    else{
      echo "Welcome";
    }
  }

  function print_description(){
    if(isset($_GET['id'])){
      $basename = basename($_GET['id']);
      echo htmlspecialchars(file_get_contents("data/".$basename));
    }
    else{
      echo "Hello, PHP";
    }
  }

  function print_list(){
    $filename = scandir('./data');
    $i = 0;
    while($i < count($filename)){
      $title = htmlspecialchars($filename[$i]);
      if($filename[$i] != '.') {
        if($filename[$i] != '..') {
          echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
        }
      }
      $i++;
    }
  }
?>
