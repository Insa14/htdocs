<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
      $friends = array('min', 'jung', 'hee', 'jihi');
      echo $friends[2].'<br>';
      echo $friends[3].'<br>';
      echo count($friends).'<br>'; // 숫자를 세기때문에 0부터가 아닌 1부터 시작 -> 4개라고 나옴
      var_dump(count($friends));
      array_push($friends, "Marco"); // 맨뒤에 데이터를 넣는 것이 아닌, 원하는 위치에 넣는 함수 찾기 
      var_dump($friends).'<br>'; print_r($friends);
    ?>
  </body>
</html>
