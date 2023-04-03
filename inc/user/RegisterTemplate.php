<?php 

class RegisterTemplate{

    public function __construct(){
        add_action( 'wp_enqueue_scripts',[$this,'add_templates'] );
        if(!is_admin()){
            add_action( 'wp_footer', [$this,'add_template_to_pages'] );
        }
    }
    public function add_templates() {
        
        wp_enqueue_script( 'index', SOC_DIR . 'inc/user/templates/social_icons.php', array(), '1.0', true );

      }      

    public function add_template_to_pages(){
        include_once( SOC_DIR . 'inc/user/templates/social_icons.php' );
    }
}
new RegisterTemplate();