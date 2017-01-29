<?php
/**
 * 8Medi Lite functions and definitions
 *
 * @package 8Medi Lite
 */

/*----------------------------------------------------
/                 Adding javascript
/ ----------------------------------------------------*/

add_action( 'wp_enqueue_scripts', 'eightmedi_lite_child_scripts' );

function eightmedi_lite_child_scripts() {
   wp_enqueue_script( 'price_fadein', get_stylesheet_directory_uri() . '/js/slidein.js', array('jquery'), '4.1.2', true);
}


/*----------------------------------------------------
/                 Loading Parent CSS
/ ----------------------------------------------------*/

function load_parent_css() {
   wp_enqueue_style('eightmedi-lite', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'load_parent_css');


add_action('customize_register', 'initiate_customizer');
function initiate_customizer($wp_customize) {

/*----------------------------------------------------
/                 Lunch Specials Settings
/ ----------------------------------------------------*/
  $wp_customize -> add_setting('lunch_special_settings_monday', array(
   'default'      =>  '',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_tuesday', array(
   'default'      =>  '',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_wednesday', array(
   'default'      =>  '',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_thursday', array(
   'default'      =>  '',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_friday', array(
   'default'      =>  '',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_saturday', array(
   'default'      =>  '',
   'transport'    =>  'refresh'
  ));

/*----------------------------------------------------
/            Lunch Specials Settings Prices
/ ----------------------------------------------------*/

  $wp_customize -> add_setting('lunch_special_settings_monday_price', array(
   'default'      =>  '6.50',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_tuesday_price', array(
   'default'      =>  '6.50',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_wednesday_price', array(
   'default'      =>  '6.50',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_thursday_price', array(
   'default'      =>  '6.50',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_friday_price', array(
   'default'      =>  '6.50',
   'transport'    =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_saturday_price', array(
   'default'      =>  '6.50',
   'transport'    =>  'refresh'
  ));

/*----------------------------------------------------
/          Lunch Specials Settings Description
/ ----------------------------------------------------*/

  $wp_customize -> add_setting('lunch_special_settings_monday_description1', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_monday_description2', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_monday_description3', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_tuesday_description1', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_tuesday_description2', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_tuesday_description3', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_wednesday_description1', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_wednesday_description2', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_wednesday_description3', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_thursday_description1', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_thursday_description2', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_thursday_description3', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_friday_description1', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_friday_description2', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_friday_description3', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_saturday_description1', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_saturday_description2', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

  $wp_customize -> add_setting('lunch_special_settings_saturday_description3', array(
    'default'     =>  '',
    'transport'   =>  'refresh'
  ));

/*----------------------------------------------------
/                 Lunch Specials Section
/ ----------------------------------------------------*/

  $wp_customize -> add_panel('lunch_special_panel', array(
    'title'       =>  'Lunch Special Settings',
    'description' =>  'All settings for lunch specials of the day',
    'priority'    =>  1
  ));

  $wp_customize -> add_section('lunch_special_section_monday', array(
   'title'        =>  __('Monday', 'eightmedi-lite-child'),
   'priority'     =>  1,
   'panel'        =>  'lunch_special_panel'
  ));

  $wp_customize -> add_section('lunch_special_section_tuesday', array(
   'title'        =>  __('Tuesday', 'eightmedi-lite-child'),
   'priority'     =>  2,
   'panel'        =>  'lunch_special_panel'
  ));

  $wp_customize -> add_section('lunch_special_section_wednesday', array(
   'title'        =>  __('Wednesday', 'eightmedi-lite-child'),
   'priority'     =>  3,
   'panel'        =>  'lunch_special_panel'
  ));

  $wp_customize -> add_section('lunch_special_section_thursday', array(
   'title'        =>  __('Thursday', 'eightmedi-lite-child'),
   'priority'     =>  4,
   'panel'        =>  'lunch_special_panel'
  ));

  $wp_customize -> add_section('lunch_special_section_friday', array(
   'title'        =>  __('Friday', 'eightmedi-lite-child'),
   'priority'     =>  5,
   'panel'        =>  'lunch_special_panel'
  ));

  $wp_customize -> add_section('lunch_special_section_saturday', array(
   'title'        =>  __('Saturday', 'eightmedi-lite-child'),
   'priority'     =>  6,
   'panel'        =>  'lunch_special_panel'
  ));

/*----------------------------------------------------
/                 Lunch Specials Controls
/ ----------------------------------------------------*/

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_monday', array(
   'label'        =>  __('Monday Lunch Special', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_monday',
   'settings'     =>  'lunch_special_settings_monday'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_monday_price', array(
    'label'        =>  __('Monday Lunch Special Price', 'eightmedi-lite-child'),
    'section'      =>  'lunch_special_section_monday',
    'settings'     =>  'lunch_special_settings_monday_price',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_monday_description1', array(
    'label'        =>  __('Monday Lunch Special Desc. 1', 'eightmedi-lite-child'),
    'section'      =>  'lunch_special_section_monday',
    'settings'     =>  'lunch_special_settings_monday_description1',
    'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_monday_description2', array(
    'label'        =>  __('Monday Lunch Special Desc. 2', 'eightmedi-lite-child'),
    'section'      =>  'lunch_special_section_monday',
    'settings'     =>  'lunch_special_settings_monday_description2',
    'type'         =>  'textarea'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_monday_description3', array(
    'label'        =>  __('Monday Lunch Special Desc. 3', 'eightmedi-lite-child'),
    'section'      =>  'lunch_special_section_monday',
    'settings'     =>  'lunch_special_settings_monday_description3',
    'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_tuesday', array(
   'label'        =>  __('Tuesday Lunch Special', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_tuesday',
   'settings'     =>  'lunch_special_settings_tuesday',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_tuesday_price', array(
   'label'        =>  __('Tuesday Lunch Special Price', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_tuesday',
   'settings'     =>  'lunch_special_settings_tuesday_price'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_tuesday_description1', array(
   'label'        =>  __('Tuesday Lunch Special Desc. 1', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_tuesday',
   'settings'     =>  'lunch_special_settings_tuesday_description1',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_tuesday_description2', array(
   'label'        =>  __('Tuesday Lunch Special Desc. 2', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_tuesday',
   'settings'     =>  'lunch_special_settings_tuesday_description2',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_tuesday_description3', array(
   'label'        =>  __('Tuesday Lunch Special Desc. 3', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_tuesday',
   'settings'     =>  'lunch_special_settings_tuesday_description3',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_wednesday', array(
   'label'        =>  __('Wednesday Lunch Special', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_wednesday',
   'settings'     =>  'lunch_special_settings_wednesday'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_wednesday_price', array(
   'label'        =>  __('Wednesday Lunch Special Price', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_wednesday',
   'settings'     =>  'lunch_special_settings_wednesday_price'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_wednesday_description1', array(
   'label'        =>  __('Wednesday Lunch Special Desc. 1', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_wednesday',
   'settings'     =>  'lunch_special_settings_wednesday_description1',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_wednesday_description2', array(
   'label'        =>  __('Wednesday Lunch Special Desc. 2', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_wednesday',
   'settings'     =>  'lunch_special_settings_wednesday_description2',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_wednesday_description3', array(
   'label'        =>  __('Wednesday Lunch Special Desc. 3', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_wednesday',
   'settings'     =>  'lunch_special_settings_wednesday_description3',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_thursday', array(
   'label'        =>  __('Thursday Lunch Special', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_thursday',
   'settings'     =>  'lunch_special_settings_thursday'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_thursday_price', array(
   'label'        =>  __('Thursday Lunch Special Price', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_thursday',
   'settings'     =>  'lunch_special_settings_thursday_price'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_thursday_description1', array(
   'label'        =>  __('Thursday Lunch Special Desc. 1', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_thursday',
   'settings'     =>  'lunch_special_settings_thursday_description1',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_thursday_description2', array(
   'label'        =>  __('Thursday Lunch Special Desc. 2', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_thursday',
   'settings'     =>  'lunch_special_settings_thursday_description2',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_thursday_description3', array(
   'label'        =>  __('Thursday Lunch Special Desc. 3', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_thursday',
   'settings'     =>  'lunch_special_settings_thursday_description3',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_friday', array(
   'label'        =>  __('Friday Lunch Special', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_friday',
   'settings'     =>  'lunch_special_settings_friday'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_friday_price', array(
   'label'        =>  __('Friday Lunch Special Price', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_friday',
   'settings'     =>  'lunch_special_settings_friday_price'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_friday_description1', array(
   'label'        =>  __('Friday Lunch Special Desc. 1', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_friday',
   'settings'     =>  'lunch_special_settings_friday_description1',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_friday_description2', array(
   'label'        =>  __('Friday Lunch Special Desc. 2', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_friday',
   'settings'     =>  'lunch_special_settings_friday_description2',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_friday_description3', array(
   'label'        =>  __('Friday Lunch Special Desc. 3', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_friday',
   'settings'     =>  'lunch_special_settings_friday_description3',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_saturday', array(
   'label'        =>  __('Saturday Lunch Special', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_saturday',
   'settings'     =>  'lunch_special_settings_saturday'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_saturday_price', array(
   'label'        =>  __('Saturday Lunch Special Price', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_saturday',
   'settings'     =>  'lunch_special_settings_saturday_price'
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_saturday_description1', array(
   'label'        =>  __('Saturday Lunch Special Desc. 1', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_saturday',
   'settings'     =>  'lunch_special_settings_saturday_description1',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_saturday_description2', array(
   'label'        =>  __('Saturday Lunch Special Desc. 2', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_saturday',
   'settings'     =>  'lunch_special_settings_saturday_description2',
   'type'         =>  'textarea',
  )));

  $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'lunch_special_saturday_description3', array(
   'label'        =>  __('Saturday Lunch Special Desc. 3', 'eightmedi-lite-child'),
   'section'      =>  'lunch_special_section_saturday',
   'settings'     =>  'lunch_special_settings_saturday_description3',
   'type'         =>  'textarea',
  )));
}

?>
