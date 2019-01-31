<?php include('includes/header.php') ?>

<?php
  include('includes/functions.php');

  function remove_bad_code($value)
  {
    $output = preg_replace('/[^a-zA-Z0-9-_]/',"",$value);
    return $output;
  }

  if (isset($_GET['item'])) {
    $item = remove_bad_code($_GET['item']);
    $dish = $menu_items[$item];
  }
?>

<h1 class="heading"> Fantastic Menu Item </h1>
<hr><p><br></p>
  <img src="assets/img/<?php echo $dish['img']; ?>" alt="">

  <h1 class="heading"><?php echo $dish['name']; ?></h1>
  <p class="heading" style="font-size: 26px;"> (<?php echo $dish['price']; ?>Tk) </p>
  <p class="paragraph"><?php echo $dish['info']; ?></p>

  <p class="paragraph"> <strong>Suggest Drinks: </strong>
    <em class="heading">
    <?php echo $dish['drinks']; ?>
    </em>
  </p>

  <a class="back-button" href="menu.php">&laquo; Back to Menu </a>

<?php include('includes/footer.php') ?>
