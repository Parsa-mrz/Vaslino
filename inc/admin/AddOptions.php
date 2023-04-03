<?php 

class AddOptions{

    public function __construct(){
        add_action('admin_init',[$this,'add_option_section']);
        add_action('admin_init',[$this,'settingInit']);
        
    }
    public function add_option_section(){
        add_settings_section(
            'social_media',
            'Social Media Links',
            [$this,'social_media_options_section'],
            'social-media',
        );
    }

    public function settingInit(){
        include(SOC_DIR . 'inc/admin/socialMedias/Facebook.php');
        include(SOC_DIR . 'inc/admin/socialMedias/Twitter.php');
        include(SOC_DIR . 'inc/admin/socialMedias/Instagram.php');      
    }

    public function social_media_options_section(){
        include_once(SOC_DIR . '/inc/admin/templates/Options.php');
    }
}
new AddOptions();