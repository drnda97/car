<?php $models = $_SESSION['models']; ?>
<?php $descriptions = $_SESSION['descriptions']; ?>
<div class="stretch">&nbsp;</div>
<?php foreach ($models as $model): ?>
  <div class="model_wrapper">
    <div class="picture">
      <img src="<?php echo $model['image_url'] ?>" alt="">
    </div>
    <div class="car_name">
      <h1><?php echo $model['type'] ?></h1>
      <p><?php echo $model['year']; ?></p>
    </div>
    <div class="we_can_this">
      <ul>
        <?php foreach ($descriptions as $description): ?>
          <?php if ($description['car_id'] === $model['id']): ?>
            <li><?php echo $description['possibility']; ?></li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
<?php endforeach; ?>
