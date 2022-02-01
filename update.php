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
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){ ?>
        <a href="update.php?id=<?=$_GET['id']; ?>">update</a>
    <?php } ?>
    <h2>
      <?php
        print_title();
      ?>
    </h2>
    <?php
      print_description();
     ?>
     <form action="update_process.php" method="post">
       <input type="hidden" name="old_title" value="<?=$_GET['id']; ?>">
       <p>
         <input type="text" name="title" placeholder="title" value="<?php print_title(); ?>">
       </p>
       <p>
         <textarea name="content" placeholder="content" rows="8" cols="80"><?php print_description(); ?></textarea>
       </p>
       <input type="submit">
     </form>
<?php
 require('view/bottom.php');
?>
