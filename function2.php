<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic() {
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
      }
      basic();
      basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
      function sum($left, $right){
        print($left+$right);
        print("<br>");
      };
      sum(2, 4);
      sum(6, 4);
    ?>
    <h2>return</h2>
    <?php
      function sum2($left, $right){
        return $left+$right;
      }
      print(sum2(2,4));
      file_put_contents('result.txt', sum2(3,5));
    ?>
  </body>
</html>
