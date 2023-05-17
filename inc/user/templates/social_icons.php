<?php
$links = [
  'twitter' => get_option('social_media_twitter'),
  'facebook' => get_option('social_media_facebook'),
  'instagram' => get_option('social_media_instagram'),
  'whatsapp' => get_option('social_media_whatsapp'),
];
$colors = [
  'twitter-color' => get_option('social_media_twitter'),
  'facebook-color' => get_option('social_media_facebook'),
  'instagram-color' => get_option('social_media_instagram'),
  'whatsapp-color' => get_option('social_media_whatsapp'),
]
?>





   <?php
  $non_empty_links = array_filter($links);
      if(!empty($non_empty_links)){?>
 <div id="contact_us" class="me-5 d-flex flex-column align-items-start justify-content-end">
        <div id="contact_us_slide" class="">
            <ul class="text-dark">
            <?php
  if ($links['facebook']) {?>
              <a href="<?php echo esc_html( 'https://' . $links['facebook'] ) ?>"><li id="li_1"><i class="fa-brands fa-facebook-f fa-2xl "  style="color: #4267B2;"></i></li></a>
                <?php
  }if ($links['twitter']) {?>
              <a href="<?php echo esc_html( 'https://' . $links['twitter'] ) ?>"><li id="li_3"><i class="fa-brands fa-twitter fa-2xl " style="color: #00acee;"></i></li><a>
                <?php
  }if ($links['instagram']) {?>
              <a href="<?php echo esc_html( 'https://' . $links['instagram'] ) ?>"><li id="li_2"><i class="fa-brands  fa-instagram fa-2xl instagram"style="color: #e81f76;"></i></li><a>
  <?php 
  }if ($links['whatsapp']) {?>
      <a href="<?php echo esc_html( 'https://' . $links['whatsapp'] ) ?>"><li id="li_2"><i class="fa-brands  fa-whatsapp fa-2xl " style="color: #075E54;"></i></li><a>
  <?php 
  }
    ?>
          </ul>
        </div>
        <button type="button" id="contact_us_button" class=" mt-3 ">
            <i id="contact_us_slide_open" class="fa-solid fa-headset text-primary fa-2xl me-1" style="font-size:40px;color:#2367e1;"></i>
            <i id="contact_us_slide_close" style="display: none;" class="fa-solid fa-xmark me-1  fa-2xl "></i>
        </button>

    </div>
    <?php 
}