<?php 

class AddMenus{

    public function __construct(){
        add_action('admin_menu', [$this,'socialMenu']);
    }
    public function socialMenu(){
        add_menu_page(
            'Social Media',
            'Social Media',
            'manage_options',
            'social-media',
            [$this,'socialOptionsPage'],
            'dashicons-share',
            '40'
          );
    }
    public function socialOptionsPage(){
        ?>
        <div class="wrap">
          <h1><?php _e('Social Media Settings')?></h1>
          <form method="post" action="options.php">
            <?php settings_fields('social-media-settings-group'); ?>
            <?php do_settings_sections('social-media'); ?>
            <?php submit_button(); ?>
          </form>
        </div>
        <?php
    }
}
new AddMenus();