<?php
  require('lib/print.php');
?>
<?php
  require('view/top.php');
?>
      <?php
        print_list();
      ?>
    </ol>
    <a href="creat.php"></a>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="title">
      </p>
      <p>
        <textarea name="content" placeholder="content" rows="8" cols="80"></textarea>
      </p>
      <input type="submit">
    </form>
<?php
  require('view/bottom.php');
?>
