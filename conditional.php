<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Conditional</h1>
    <h2>if</h2>
    <?php
      echo '1<br>';
      if(true) {
        echo '2-1<br>';
      }
      else{
        echo '2-2<br>';
      }
      echo '3<br>';
    ?>
    <h2>switch</h2>
    <?php
      $color = 'puple';
      $product = '';
      switch ($color) {
        case 'blue':
          $product = 'top';
          break;
        case 'red':
          $product = 'hat';
          break;
        case 'yellow':
          $product = 'bottom';
          break;
        default:
          $product = 'No stock';
          break;
      };
      echo "{$color} {$product}";
    ?>
  </body>
</html>
