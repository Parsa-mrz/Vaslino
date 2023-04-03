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
          <link rel="stylesheet" href="<?= SOC_URL . 'assets/css/style.css' ?>">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      </head>
      <body>  
        <div class="social-dropdown">
          <button class="social-dropbtn"><i class="fa fa-share-nodes"></i></button>
          <div class="social-dropdown-content">
            <?php
              if($links['facebook']){?>
                  <a href="<?= 'https://' . $links['facebook'] ?>"><i class="fa-brands fa-facebook"></i><?php _e('Facebook')?></a>
                <?php
              }if($links['twitter']){?>
                  <a href="<?= 'https://' . $links['twitter'] ?>"><i class="fa-brands fa-twitter"></i><?php _e('Twitter')?></a>
                <?php
              }if($links['instagram']){?>
                  <a href="<?= 'https://' . $links['instagram'] ?>"><i class="fa-brands fa-instagram"></i><?php _e('Instagram')?></a>
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
