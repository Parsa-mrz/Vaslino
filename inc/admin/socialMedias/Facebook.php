<?php 

class Facebook{

    public function __construct() {
        $this->register();
        add_action('init',[$this,'register']);
    }

    public function register(){
        register_setting('social-media-settings-group', 'social_media_facebook');
        add_settings_field(
            'social-media-facebook',
            'Facebook',
            [$this,'social_media_facebook_callback'],
            'social-media',
            'social_media',
          );
    }
    public function social_media_facebook_callback(){
        $value = get_option('social_media_facebook');
        echo "<input placeholder='Facebook link' type='text'  name='social_media_facebook' value='$value' />";
    }
    public static function GetOptionFacebook(){
        $facebook = get_option('social_media_facebook');
        echo $facebook;
    }
}
new Facebook();