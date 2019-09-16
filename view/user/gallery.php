<?php $images = $_SESSION['images']; ?>
<div class="stretch">&nbsp;</div>
<div class="wrapper clearfix">
  <h1>Galerija automobila sa kojima radimo </h1>
  <?php foreach ($images as $image): ?>
    <div class="image_card">
      <img src="<?php echo $image['image_url']; ?>" alt="car_image">
    </div>
  <?php endforeach; ?>
</div>
