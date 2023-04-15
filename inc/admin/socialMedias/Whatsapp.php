<?php 

class Whatsapp{

    public function __construct() {
        $this->register();
        add_action('init',[$this,'register']);
    }

    public function register(){
        register_setting('social-media-settings-group', 'social_media_whatsapp');

        add_settings_field(
            'social-media-whatsapp',
            'whatsapp',
            [$this,'social_media_whatsapp_callback'],
            'social-media',
            'social_media',
          );
    }
    public function social_media_whatsapp_callback(){
        $value = get_option('social_media_whatsapp');
        echo "<input placeholder='whatsapp link' type='text'  name='social_media_whatsapp' value='$value' />";
    }
    public static function GetOptionwhatsapp(){
        $whatsapp = get_option('social_media_whatsapp');
        echo $whatsapp;
    }
}
new whatsapp();