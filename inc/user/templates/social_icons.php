<?php
      $twitter = get_option('social_media_twitter');
      $facebook = get_option('social_media_facebook');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= SOC_URL . '/assets/css/style.css' ?>">
</head>
<body>
<div class="social-dropdown">
  <button class="social-dropbtn">Social Media</button>
  <div class="social-dropdown-content">
    <?php
      if($facebook){?>
          <a href="<?= 'https://' . $facebook ?>">Facebook</a>
        <?php
      }if($twitter){?>
          <a href="<?= 'https://' . $twitter ?>">Twitter</a>
        <?php
      }
    ?>
  </div>
</div>
<script src="<?= SOC_URL . '/assets/js/script.js'?>" ></script>
</body>
</html>