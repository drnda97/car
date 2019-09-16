<?php
  $user = new User();
  $navs = $user->getNav();
  $sub_nav = $user->getSubNav();
  $count_model = array();
 ?>
<nav class="clearfix">
  <div class="image_wrapper">
    <a href="<?php echo WEBROOT; ?>"><img src="../assets/icons/facebook_cover_photo_1.png" alt="icon"></a>
  </div>
  <div class="hamburger secret">
    <img src="../assets/icons/nav-icon.png" alt="hamburger-icon" id="hamburger_icon">
  </div>
  <div class="nav_wrapper">
    <ul>
      <li><a href="<?php echo WEBROOT; ?>">NASLOVNA</a></li>
        <?php foreach ($navs as $nav): ?>
          <li>
          <a href="<?php echo WEBROOT . '/user/mark?mark=' . $nav['name']; ?>"><?php echo strtoupper($nav['name']); ?></a>
          <ul class="sub_nav">
          <?php foreach ($sub_nav as $model): ?>
            <?php if ($model['id_car'] === $nav['id']): ?>
              <?php if (!in_array($model['model_name'], $count_model)): ?>
                <?php $count_model[] = $model['model_name']; ?>
                <li>
                  <a href="<?php echo WEBROOT . '/user/car?model=' . $model['model_name']; ?>"><?php echo $model['model_name']; ?></a>
                </li>
              <?php else: ?>
                <?php continue; ?>
              <?php endif; ?>
            <?php endif; ?>
          <?php endforeach; ?>
          </ul>
        </li>
      <?php endforeach; ?>
      <li><a href="<?php echo WEBROOT.'/user/gallery'; ?>">GALERIJA</a></li>
    </ul>
    <div class="close secret">
      <img src="../assets/icons/2.png" alt="x-icon" id="x_icon">
    </div>
  </div>
</nav>
