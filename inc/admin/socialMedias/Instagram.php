<?php 

class Instagram{

    public function __construct() {
        $this->register();
        add_action('init',[$this,'register']);
    }

    public function register(){
        register_setting('social-media-settings-group', 'social_media_instagram');
        add_settings_field(
            'social-media-instagram',
            'instagram',
            [$this,'social_media_instagram_callback'],
            'social-media',
            'social_media'
          );
    }
    public function social_media_instagram_callback(){
        $value = get_option('social_media_instagram');
        echo "<input placeholder='Instagram link' type='text' name='social_media_instagram' value='$value' />";
    }
}
new Instagram();