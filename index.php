<?php
  require_once('lib/print.php');
?>
<?php
  require('view/top.php');
?>
      <?php
        print_list();
      ?>
    </ol>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){ ?>
        <a href="update.php?id=<?=$_GET['id']; ?>">update</a>
        <form action="delete_process.php" method="post" onsubmit="return confirm('정말 삭제하시겠습니까?');">
          <input type="hidden" name="id" value="<?=$_GET['id']; ?>">
          <input type="submit" value="delete">
        </form>
    <?php } ?>
    <h2>
      <?php
        print_title();
      ?>
    </h2>
    <?php
      print_description();
     ?>
<?php
  require('view/bottom.php');
?>
