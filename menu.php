<?php include('includes/header.php') ?>

<?php
  include('includes/functions.php');
?>

<h1 class="heading"> Fantastic Menu Item </h1>
<hr>



<div class="menu-table">
  <table>
    <thead>
      <td>Menu</td>
      <td>Price</td>
    </thead>

    <?php
      foreach ($menu_items as $key => $value) {
    ?>

    <tr>
      <td>
        <a href="dish.php?item=<?php echo $key; ?>">
        <?php echo $value['name']; ?>
        </a>
      </td>
      <td><?php echo $value['price']; ?> tk</td>
    </tr>

  <?php } ?>
  </table>

</div>



<?php include('includes/footer.php') ?>
