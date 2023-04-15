<?php 
/*
Plugin Name:  Vaslino
Plugin URI: #
Description: The Vaslino allows you to add social media icons to your application and web pages and your customers can connect to your social networks.
Author: Parsa Mirzaie
Version: 1.0.0
Author URI: https://eskanogroup.com
Text Domain: Social
License: GPL2
*/
// defined( 'ABSPATH' ) || exit;
class Social{
    public function __construct(){
        $this->define_constant();
        $this->init();

    }
    public function activation(){

    }
    public function deactivation(){
  
    }
    public function define_constant(){
        define('BASE_URL',get_site_url());
        define("SOC_DIR",plugin_dir_path( __FILE__ ));
        define("SOC_URL",plugin_dir_url( __FILE__ ));
      }
      public function init(){
        register_activation_hook( __FILE__, [$this,'activation']);
        register_deactivation_hook( __FILE__, [$this,'deactivation']);
        $this->registerMenu();
        $this->registerOptions();
        $this->registerTemplate();
      }
      public function registerMenu(){
        include_once(SOC_DIR . '/inc/admin/AddMenu.php');
      }
      public function registerOptions(){
        include_once(SOC_DIR . '/inc/admin/AddOptions.php');
      }

      public function registerTemplate(){
        include_once(SOC_DIR . '/inc/user/RegisterTemplate.php');
      }
}
new Social();