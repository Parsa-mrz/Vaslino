<?php 

class Twitter{

    public function __construct() {
        $this->register();
        add_action('init',[$this,'register']);
    }

    public function register(){
        register_setting('social-media-settings-group', 'social_media_twitter');
        add_settings_field(
            'social-media-twitter',
            'Twitter',
            [$this,'social_media_twitter_callback'],
            'social-media',
            'social_media'
          );
    }
    public function social_media_twitter_callback(){
        $value = get_option('social_media_twitter');
        echo "<input placeholder='Twitter link' type='text' name='social_media_twitter' value='$value' />";
    }
    public static function GetOptionTwitter(){
        $twitter = get_option('social_media_twitter');
        echo $twitter;
    }
}
new twitter();