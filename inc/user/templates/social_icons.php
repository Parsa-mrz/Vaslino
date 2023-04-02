<?php
$links = [
  'twitter' => get_option('social_media_twitter'),
  'facebook' => get_option('social_media_facebook'),
  'instagram' => get_option('social_media_instagram'),
];
?>


  <?php
  $non_empty_links = array_filter($links);
      if(!empty($non_empty_links)){?>
      <head>
          <link rel="stylesheet" href="<?= SOC_URL . '/assets/css/style.css' ?>">
      </head>
      <body>  
        <div class="social-dropdown">
          <button class="social-dropbtn">Social Media</button>
          <div class="social-dropdown-content">
            <?php
              if($links['facebook']){?>
                  <a href="<?= 'https://' . $links['facebook'] ?>">Facebook</a>
                <?php
              }if($links['twitter']){?>
                  <a href="<?= 'https://' . $links['twitter'] ?>">Twitter</a>
                <?php
              }if($links['instagram']){?>
                  <a href="<?= 'https://' . $links['instagram'] ?>">Instagram</a>
                <?php
              }
            ?>
          </div>
        </div>
      <script src="<?= SOC_URL . '/assets/js/script.js'?>" ></script>
      </body>
      <?php 
    }
  ?>
