<?php include('includes/header.php') ?>

<h1 class="heading">Our Coolest Team</h1>
<hr>
<p> <br> </p>
<?php
  include('includes/functions.php');
  foreach ($team_list as $value) {
?>

<img src="assets/img/<?php echo $value['img'] ?>" alt="">
<h2 class="heading"><?php echo $value['name'] ?></h2>
<p class="paragraph">
  <?php echo $value['intro'] ?>
</p>

<?php } ?>



<?php include('includes/footer.php') ?>
