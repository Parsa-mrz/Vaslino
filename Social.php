<?php 
/*
Plugin Name:  Social Media Icons
Plugin URI: #
Description: This plugin allows you to add social media icons to your application and web pages
Author: Parsa Mirzaie
Author URI: https://eskanogroup.com
License: GPL2
*/

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