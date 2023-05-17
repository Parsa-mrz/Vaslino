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
class Social
{
  public function __construct()
  {
    $this->define_constant();
    $this->init();
  }
  public function activation()
  {
  }
  public function deactivation()
  {
  }
  public function define_constant()
  {
    define("SOCIAL_DIR", plugin_dir_path(__FILE__));
    define("SOCIAL_URL", plugin_dir_url(__FILE__));
  }
  public function init()
  {
    register_activation_hook(__FILE__, [$this, 'activation']);
    register_deactivation_hook(__FILE__, [$this, 'deactivation']);
    add_action('wp_enqueue_scripts', [$this, 'register_script']);
    $this->registerMenu();
    $this->registerOptions();
    $this->registerTemplate();
  }
  public function registerMenu()
  {
    include_once(SOCIAL_DIR . '/inc/admin/AddMenu.php');
  }
  public function registerOptions()
  {
    include_once(SOCIAL_DIR . '/inc/admin/AddOptions.php');
  }

  public function registerTemplate()
  {
    include_once(SOCIAL_DIR . '/inc/user/RegisterTemplate.php');
  }

  public function register_script()
  {
    wp_register_style('Social_style', SOCIAL_URL . 'assets/css/style.css');
    wp_enqueue_style('Social_style');

    wp_register_style('icons_style', SOCIAL_URL . 'assets/css/all.css');
    wp_enqueue_style('icons_style');

    wp_register_script('social_script', SOCIAL_URL . 'assets/js/script.js', ['jquery']);
    wp_enqueue_script('social_script');
  }
}
new Social();
