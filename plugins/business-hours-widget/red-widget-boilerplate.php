<?php
/**
 * RED WordPress Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Business Hours
 * @author    Karla Gonzalez <hello@karlottagonzalez.com>
 * @license   GPL-2.0+
 * @link      http://www.karlottagonzalez.com
 * @copyright 2019 Karlotta Gonzalez
 *
 * @wordpress-plugin
 * Plugin Name:       Business Hours
 * Plugin URI:        @www.myawesomeplugin.com
 * Description:       @A simple widget for updating store hours
 * Version:           1.0.0
 * Author:            @Karla Gonzalez
 * Author URI:        @www.karlottagonzalez.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

// TODO: change 'Widget_Name' to the name of your plugin
class Biz_Hours extends WP_Widget {

    /**
     * @TODO - Rename "widget-name" to the name your your widget
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'biz-hours';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			'Biz Hours',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'A simple widget for updating store hours.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		//checking to see if instances are empty, using if / else statment with ? :
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$mon_fri = empty( $instance['mon_fri'] ) ? '' : apply_filters( 'mon_fri', $instance['mon_fri'] );
		$sat = empty( $instance['sat'] ) ? '' : apply_filters( 'sat', $instance['sat'] );
		$sun = empty( $instance['sun'] ) ? '' : apply_filters( 'sun', $instance['sun'] );
		// TODO: other fields go here...

		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['mon_fri'] = strip_tags( $new_instance['mon_fri'] );
		$instance['sat'] = strip_tags( $new_instance['sat'] );
		$instance['sun'] = strip_tags( $new_instance['sun'] );
		// TODO: Here is where you update the rest of your widget's old values with the new, incoming values

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Business Hours',
				'mon_fri' => '',
				'sat' => '',
				'sun' => ''
			)
		);

		$title = strip_tags( $instance['title'] );
		$mon_fri = strip_tags( $instance['mon_fri'] );
		$sat = strip_tags( $instance['sat'] );
		$sun = strip_tags( $instance['sun'] );
		// TODO: Store the rest of values of the widget in their own variables

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
	 register_widget( 'Biz_Hours' );
	 //creates new instance of widget class
});
