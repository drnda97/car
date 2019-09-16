<?php $marks = $_SESSION['marks']; ?>
<div class="image_holder">
  <img src="<?php echo $marks[0]['sign_img']; ?>" alt="sign_img">
  <div class="inner_text">
    <h1><?php echo strtoupper($marks[0]['name']); ?></h1>
    <span>Code Expert je napravio listu modela,
      <br>
      kako bi lakše odabrali vaš model i saznali mogućnosti za adaptacije i kodiranje...
    </span>
  </div>
</div>
<div class="wrapper clearfix">
  <?php foreach ($marks as $mark): ?>
    <?php if (isset($mark['description'])): ?>
      <div class="car_image">
        <a href="<?php echo WEBROOT . '/user/car?model='. $mark['model_name'] ?>">
          <img src="<?php echo $mark['image_url']; ?>" alt="">
        </a>
      </div>
        <div class="description">
          <a href="<?php echo WEBROOT . '/user/car?model='. $mark['model_name'] ?>">
            <h1><?php echo strtoupper($mark['model_name']); ?></h1>
          </a>
          <p><?php echo $mark['description']; ?></p>
        </div>
    <?php else: ?>
      <?php continue; ?>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
