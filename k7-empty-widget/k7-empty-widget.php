<?php

/*
Plugin Name: Empty Widget
Plugin URI: #
Description: If you want to replace a default widget of a theme with blank emptyness, this plugin is your solution.
Author: KODE7
Version: 0.1.0
Author URI: https://kode7.it
License: GPL2
Text Domain: k7-empty-widget
Domain Path: /widgets
*/

function k7_register_empty_widget() {
    register_widget("K7_Empty_Widget");
}
add_action('widgets_init', 'k7_register_empty_widget');

class K7_Empty_Widget extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
        $widgetOps = array(
            'classname' => 'K7_Empty_Widget',
            'description' => 'Replace default theme widgets in sidebars with a blank space.'
        );
        parent::__construct('K7_Empty_Widget', 'My Widget', $widgetOps);
    }

    /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget ($args, $instance) {
        echo "&nbsp;";
    }

    /**
    * Outputs the options form on admin
    *
    * @param array $instance The widget options
    */
    public function form ($instance) {
        // outputs the options form on admin
    }

    /**
    * Processing widget options on save
    *
    * @param array $new_instance The new options
    * @param array $old_instance The previous options
    */
    public function update ($newInstance, $oldInstance) {
        // processes widget options to be saved
    }
}
