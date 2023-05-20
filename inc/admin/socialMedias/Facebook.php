<?php 

class AddFacebookToSocial{

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
        echo esc_html("<input placeholder='Facebook link' type='text'  name='social_media_facebook' value='$value' />");
    }
}
new AddFacebookToSocial();