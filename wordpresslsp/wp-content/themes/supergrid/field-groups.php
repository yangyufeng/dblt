<?php
/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => '512cf66ca4663',
		'title' => 'General',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_101',
				'label' => 'Excerpt',
				'name' => '',
				'type' => 'tab',
				'order_no' => 0,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_42',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
			),
			1 => 
			array (
				'key' => 'field_102',
				'label' => 'Excerpt',
				'name' => 'excerpt',
				'type' => 'radio',
				'order_no' => 1,
				'instructions' => 'Choose whether you would like to display a small portion of text or a full text on the grid.<br>
	If you want to display shortcodes or other elements on the grid, please select "Full"',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_42',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'Full' => 'Full',
					'Excerpt' => 'Excerpt',
				),
				'default_value' => 'Full',
				'layout' => 'vertical',
			),
			2 => 
			array (
				'key' => 'field_94',
				'label' => 'Icons',
				'name' => '',
				'type' => 'tab',
				'order_no' => 2,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_42',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
			),
			3 => 
			array (
				'key' => 'field_108',
				'label' => 'Post Icons',
				'name' => 'post_icons',
				'type' => 'repeater',
				'order_no' => 3,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_102',
							'operator' => '==',
							'value' => 'Full',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					'field_109' => 
					array (
						'choices' => 
						array (
							'glyphicons_360_pinterest@2x.png' => 'Pinterest',
							'glyphicons_361_dropbox@2x.png' => 'Dropbox',
							'glyphicons_386_google_plus@2x.png' => 'Google +',
							'glyphicons_363_jolicloud@2x.png' => 'Joli Cloud',
							'glyphicons_364_yahoo@2x.png' => 'Yahoo',
							'glyphicons_365_blogger@2x.png' => 'Blogger',
							'glyphicons_366_picasa@2x.png' => 'Picasa',
							'glyphicons_368_tumblr@2x.png' => 'Tumblr',
							'glyphicons_369_wordpress@2x.png' => 'Wordpress',
							'glyphicons_374_dribbble@2x.png' => 'Dribbble',
							'glyphicons_375_deviantart@2x.png' => 'Deviant Art',
							'glyphicons_377_linked_in@2x.png' => 'LinkedIn',
							'glyphicons_378_forrst@2x.png' => 'Forrst',
							'glyphicons_379_pinboard@2x.png' => 'Pinboard',
							'glyphicons_380_behance@2x.png' => 'Behance',
							'glyphicons_381_github@2x.png' => 'Gitbhub',
							'glyphicons_382_youtube@2x.png' => 'Youtube',
							'glyphicons_385_quora@2x.png' => 'Quora',
							'glyphicons_387_spotify@2x.png' => 'Spotify',
							'glyphicons_388_stumbleupon@2x.png' => 'Stumbleupon',
							'glyphicons_390_facebook@2x.png' => 'Facebook',
							'glyphicons_392_twitter@2x.png' => 'Twitter',
							'glyphicons_394_vimeo@2x.png' => 'Vimeo',
							'glyphicons_395_flickr@2x.png' => 'Flickr',
							'glyphicons_399_e-mail@2x.png' => 'Email',
							'glyphicons_012_heart@2x.png' => 'Heart',
							'glyphicons_015_print@2x.png' => 'Print',
							'glyphicons_017_music@2x.png' => 'Music',
							'glyphicons_027_search@2x.png' => 'Search',
							'glyphicons_029_notes_2@2x.png' => 'Notes',
							'glyphicons_030_pencil@2x.png' => 'Pencil',
							'glyphicons_045_calendar@2x.png' => 'Calender',
							'glyphicons_049_star@2x.png' => 'Star',
							'glyphicons_050_link@2x.png' => 'Link',
							'glyphicons_062_attach@2x.png' => 'Paper Clip',
							'glyphicons_063_power@2x.png' => 'Power',
							'glyphicons_064_lightbulb@2x.png' => 'Lightbulb',
							'glyphicons_074_cup@2x.png' => 'Trophy',
							'glyphicons_344_thumbs_down@2x.png' => 'Thumbs Down',
							'glyphicons_018_note@2x.png' => 'Note',
							'glyphicons_022_fire@2x.png' => 'Fire',
							'glyphicons_016_bin@2x.png' => 'Bin',
							'glyphicons_002_dog@2x.png' => 'Dog',
							'glyphicons_000_glass@2x.png' => 'glass',
							'glyphicons_343_thumbs_up@2x.png' => 'Thumbs Up',
						),
						'label' => 'Icon',
						'name' => 'post_icon',
						'type' => 'select',
						'instructions' => 'Select an icon to display in your post',
						'column_width' => '',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
						'order_no' => 0,
						'key' => 'field_109',
					),
					'field_110' => 
					array (
						'label' => 'Icon Url',
						'name' => 'post_icon_url',
						'type' => 'text',
						'instructions' => 'Specify where you would like the icon to link to',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'none',
						'order_no' => 1,
						'key' => 'field_110',
					),
					'field_111' => 
					array (
						'label' => 'Icon Title',
						'name' => 'post_icon_title',
						'type' => 'text',
						'instructions' => 'Specify a tooltip title for your icon',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'html',
						'order_no' => 2,
						'key' => 'field_111',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			4 => 
			array (
				'key' => 'field_113',
				'label' => 'Featured Stamp',
				'name' => '',
				'type' => 'tab',
				'order_no' => 4,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_42',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
			),
			5 => 
			array (
				'key' => 'field_112',
				'label' => 'Featured Stamp',
				'name' => 'featured_stamp',
				'type' => 'true_false',
				'order_no' => 5,
				'instructions' => 'Enabling this option will add a featured stamp to the corner of your image. (Must be using either image or slider)',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_42',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
				'message' => 'Enable Featured Stamp',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 0,
				),
				1 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 1,
				),
				2 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'custom_page',
					'order_no' => 2,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '512cf66ca62af',
		'title' => 'General Options',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_64',
				'label' => 'Logo',
				'name' => '',
				'type' => 'tab',
				'order_no' => 0,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
			),
			1 => 
			array (
				'key' => 'field_65',
				'label' => 'Logo Option',
				'name' => 'logo_option',
				'type' => 'radio',
				'order_no' => 1,
				'instructions' => 'Choose between a regular text logo or upload your own image',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'None' => 'None',
					'Text' => 'Text',
					'Image' => 'Image',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			2 => 
			array (
				'key' => 'field_66',
				'label' => 'Logo Text',
				'name' => 'logo_text',
				'type' => 'text',
				'order_no' => 2,
				'instructions' => 'Enter your text for the logo',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 1,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'Text',
						),
					),
					'allorany' => 'any',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			3 => 
			array (
				'key' => 'field_67',
				'label' => 'Logo Image',
				'name' => 'logo_image',
				'type' => 'image',
				'order_no' => 3,
				'instructions' => 'Enter your image for the logo',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 1,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'any',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			4 => 
			array (
				'key' => 'field_69',
				'label' => 'Homepage',
				'name' => '',
				'type' => 'tab',
				'order_no' => 4,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			5 => 
			array (
				'key' => 'field_68',
				'label' => 'Homepage',
				'name' => 'homepage',
				'type' => 'text',
				'order_no' => 5,
				'instructions' => '<ul>
	<li>Specify the Posts you would like to have displayed on the homepage, by entering the Page Filter</li>
	<li>You can specify mutliple values e.g "portfolio, blog" </li>
	</ul>',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 'portfolio',
				'formatting' => 'none',
			),
			6 => 
			array (
				'key' => 'field_124',
				'label' => 'Info Tab',
				'name' => 'info_tab',
				'type' => 'wysiwyg',
				'order_no' => 6,
				'instructions' => 'Enter the content you would like in the info drop down located in the top right corner.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
				'the_content' => 'yes',
			),
			7 => 
			array (
				'key' => 'field_62',
				'label' => 'Google Analytics',
				'name' => '',
				'type' => 'tab',
				'order_no' => 7,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
			),
			8 => 
			array (
				'key' => 'field_61',
				'label' => 'Google Analytics',
				'name' => 'google_analytics',
				'type' => 'textarea',
				'order_no' => 8,
				'instructions' => 'Enter your Google analytics code (without the script tags)',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			9 => 
			array (
				'key' => 'field_70',
				'label' => 'Google Maps',
				'name' => '',
				'type' => 'tab',
				'order_no' => 9,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			10 => 
			array (
				'key' => 'field_71',
				'label' => 'API Key',
				'name' => 'api_key',
				'type' => 'text',
				'order_no' => 10,
				'instructions' => 'Please enter your google maps API Key. You can get a free API key from http://developers.google.com',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			11 => 
			array (
				'key' => 'field_72',
				'label' => 'Latitude',
				'name' => 'latitude',
				'type' => 'text',
				'order_no' => 11,
				'instructions' => 'Enter the latitude for the location you want to display',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 41.385,
				'formatting' => 'none',
			),
			12 => 
			array (
				'key' => 'field_73',
				'label' => 'Longitude',
				'name' => 'longitude',
				'type' => 'text',
				'order_no' => 12,
				'instructions' => 'Enter the longitude for the location you want to display',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 2.169,
				'formatting' => 'none',
			),
			13 => 
			array (
				'key' => 'field_76',
				'label' => 'Custom Bubble',
				'name' => 'bubble',
				'type' => 'image',
				'order_no' => 13,
				'instructions' => 'Upload a custom bubble image to display on your map',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			14 => 
			array (
				'key' => 'field_77',
				'label' => 'Grid',
				'name' => '',
				'type' => 'tab',
				'order_no' => 14,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			15 => 
			array (
				'key' => 'field_78',
				'label' => 'Animation Duration',
				'name' => 'grid_animation_duration',
				'type' => 'number',
				'order_no' => 15,
				'instructions' => 'Set the animation duration for the grid',
				'required' => 1,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 800,
			),
			16 => 
			array (
				'key' => 'field_79',
				'label' => 'Sort by',
				'name' => 'sort_by',
				'type' => 'radio',
				'order_no' => 16,
				'instructions' => 'Select how you want your posts to be laid out in the grid',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'DateTime' => 'DateTime',
					'Random' => 'Random',
				),
				'default_value' => 'Random',
				'layout' => 'vertical',
			),
			17 => 
			array (
				'key' => 'field_80',
				'label' => 'Slider',
				'name' => '',
				'type' => 'tab',
				'order_no' => 17,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			18 => 
			array (
				'key' => 'field_81',
				'label' => 'Animation Style',
				'name' => 'slider_animation',
				'type' => 'select',
				'order_no' => 18,
				'instructions' => 'Select your animation style',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'slide' => 'Slide',
					'fade' => 'Fade',
				),
				'default_value' => 'Slide',
				'allow_null' => 0,
				'multiple' => 0,
			),
			19 => 
			array (
				'key' => 'field_83',
				'label' => 'Slider Slideshow',
				'name' => 'slider_slideshow',
				'type' => 'true_false',
				'order_no' => 19,
				'instructions' => 'This option will animate the slider automatically',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'message' => 'Enable Slideshow',
			),
			20 => 
			array (
				'key' => 'field_85',
				'label' => 'Slideshow Speed',
				'name' => 'slideshow_speed',
				'type' => 'number',
				'order_no' => 20,
				'instructions' => 'Set the speed for the slideshow. (Lower the value, the faster it goes)',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 1,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_83',
							'operator' => '==',
							'value' => 1,
						),
					),
					'allorany' => 'any',
				),
				'default_value' => 7000,
			),
			21 => 
			array (
				'key' => 'field_86',
				'label' => 'Animation Speed',
				'name' => 'slider_animation_speed',
				'type' => 'number',
				'order_no' => 21,
				'instructions' => 'Set the animation speed for the slider',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 600,
			),
			22 => 
			array (
				'key' => 'field_95',
				'label' => 'Footer',
				'name' => '',
				'type' => 'tab',
				'order_no' => 22,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			23 => 
			array (
				'key' => 'field_104',
				'label' => 'Footer Icons',
				'name' => 'footer_icons',
				'type' => 'repeater',
				'order_no' => 23,
				'instructions' => 'Add an icon to your footer',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					'field_105' => 
					array (
						'choices' => 
						array (
							'glyphicons_360_pinterest@2x.png' => 'Pinterest',
							'glyphicons_361_dropbox@2x.png' => 'Dropbox',
							'glyphicons_386_google_plus@2x.png' => 'Google +',
							'glyphicons_363_jolicloud@2x.png' => 'Joli Cloud',
							'glyphicons_364_yahoo@2x.png' => 'Yahoo',
							'glyphicons_365_blogger@2x.png' => 'Blogger',
							'glyphicons_366_picasa@2x.png' => 'Picasa',
							'glyphicons_368_tumblr@2x.png' => 'Tumblr',
							'glyphicons_369_wordpress@2x.png' => 'Wordpress',
							'glyphicons_374_dribbble@2x.png' => 'Dribbble',
							'glyphicons_375_deviantart@2x.png' => 'Deviant Art',
							'glyphicons_377_linked_in@2x.png' => 'LinkedIn',
							'glyphicons_378_forrst@2x.png' => 'Forrst',
							'glyphicons_379_pinboard@2x.png' => 'Pinboard',
							'glyphicons_380_behance@2x.png' => 'Behance',
							'glyphicons_381_github@2x.png' => 'Gitbhub',
							'glyphicons_382_youtube@2x.png' => 'Youtube',
							'glyphicons_385_quora@2x.png' => 'Quora',
							'glyphicons_387_spotify@2x.png' => 'Spotify',
							'glyphicons_388_stumbleupon@2x.png' => 'Stumbleupon',
							'glyphicons_390_facebook@2x.png' => 'Facebook',
							'glyphicons_392_twitter@2x.png' => 'Twitter',
							'glyphicons_394_vimeo@2x.png' => 'Vimeo',
							'glyphicons_395_flickr@2x.png' => 'Flickr',
							'glyphicons_399_e-mail@2x.png' => 'Email',
							'glyphicons_012_heart@2x.png' => 'Heart',
							'glyphicons_015_print@2x.png' => 'Print',
							'glyphicons_017_music@2x.png' => 'Music',
							'glyphicons_027_search@2x.png' => 'Search',
							'glyphicons_029_notes_2@2x.png' => 'Notes',
							'glyphicons_030_pencil@2x.png' => 'Pencil',
							'glyphicons_045_calendar@2x.png' => 'Calender',
							'glyphicons_049_star@2x.png' => 'Star',
							'glyphicons_050_link@2x.png' => 'Link',
							'glyphicons_062_attach@2x.png' => 'Paper Clip',
							'glyphicons_063_power@2x.png' => 'Power',
							'glyphicons_064_lightbulb@2x.png' => 'Lightbulb',
							'glyphicons_074_cup@2x.png' => 'Trophy',
						),
						'label' => 'Footer Icon',
						'name' => 'footer_icon',
						'type' => 'select',
						'instructions' => 'Select an icon which you would like to display',
						'column_width' => '',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
						'order_no' => 0,
						'key' => 'field_105',
					),
					'field_106' => 
					array (
						'label' => 'Footer Icon Link',
						'name' => 'footer_icon_link',
						'type' => 'text',
						'instructions' => 'Specify where you would like the icon to link to',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'none',
						'order_no' => 1,
						'key' => 'field_106',
					),
					'field_107' => 
					array (
						'label' => 'Footer icon title',
						'name' => 'footer_icon_title',
						'type' => 'text',
						'instructions' => 'Specify a tooltip title for your icon',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'html',
						'order_no' => 2,
						'key' => 'field_107',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			24 => 
			array (
				'key' => 'field_100',
				'label' => 'Copyright Text',
				'name' => 'copyright_text',
				'type' => 'text',
				'order_no' => 24,
				'instructions' => 'Enter the copyright text you would like to display on the footer',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'html',
			),
			25 => 
			array (
				'key' => 'field_122',
				'label' => 'Favicon',
				'name' => 'favicon_&_touch_icon',
				'type' => 'tab',
				'order_no' => 25,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			26 => 
			array (
				'key' => 'field_121',
				'label' => 'Favicon',
				'name' => 'favicon',
				'type' => 'image',
				'order_no' => 26,
				'instructions' => 'Upload a favicon',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			27 => 
			array (
				'key' => 'field_123',
				'label' => 'Apple Touch Icon',
				'name' => 'apple_touch_icon',
				'type' => 'image',
				'order_no' => 27,
				'instructions' => 'Apple Touch Icon is the icon that will be displayed when a user saves the website on to their homescreen',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
				),
			),
			'allorany' => 'all',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '512cf66cac9f9',
		'title' => 'Page Filter',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_58',
				'label' => 'Page Filter',
				'name' => 'page_filter',
				'type' => 'text',
				'order_no' => 0,
				'instructions' => 'Specify the page filter you would like this post to be displayed on.<br>
	You can specify multiple pages by separating each one with a space',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'html',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'custom_page',
					'order_no' => 0,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '512cf66cad146',
		'title' => 'Page Filter',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_59',
				'label' => 'Page Filter',
				'name' => 'page_filter',
				'type' => 'text',
				'order_no' => 0,
				'instructions' => 'Specify the page filter you would like this post to be displayed on.<br>
	You can specify multiple pages by separating each one with a space',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 'blog',
				'formatting' => 'html',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '512cf66cad763',
		'title' => 'Page Filter',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_60',
				'label' => 'Page Filter',
				'name' => 'page_filter',
				'type' => 'text',
				'order_no' => 0,
				'instructions' => 'The page filter is used to display the post for the correct menu.<br>
	The page filter is linked to the menu links.
	
	You can specify multiple filters such as "portfolio blog",<br>
	Which will display this post in both the portfolio and blog.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 'portfolio',
				'formatting' => 'none',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 0,
				),
			),
			'allorany' => 'all',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '512cf66cade9b',
		'title' => 'Styling',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_38',
				'label' => 'Background',
				'name' => 'styling_options',
				'type' => 'tab',
				'order_no' => 0,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			1 => 
			array (
				'key' => 'field_39',
				'label' => 'Background Color',
				'name' => 'background_color',
				'type' => 'color_picker',
				'order_no' => 1,
				'instructions' => 'Specify a custom background color',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			2 => 
			array (
				'key' => 'field_40',
				'label' => 'Background Texture',
				'name' => 'background_texture',
				'type' => 'select',
				'order_no' => 2,
				'instructions' => 'Select a pre-installed texture',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'bgnoise_lg' => 'bgnoise_lg',
					'billie_holiday' => 'billie_holiday',
					'blu_stripes' => 'blu_stripes',
					'bright_squares' => 'bright_squares',
					'cardboard' => 'cardboard',
					'checkered_pattern' => 'checkered_pattern',
					'chruch' => 'chruch',
					'circles' => 'circles',
					'climpek' => 'climpek',
					'concrete_wall_2' => 'concrete_wall_2',
					'concrete_wall_3' => 'concrete_wall_3',
					'crisp_paper_ruffles' => 'crisp_paper_ruffles',
					'cubes' => 'cubes',
					'debut_light' => 'debut_light',
					'diagonal_striped_brick' => 'diagonal_striped_brick',
					'diagonal-noise' => 'diagonal-noise',
					'diagonales_decalees' => 'diagonales_decalees',
					'diamond_upholstery' => 'diamond_upholstery',
					'double_lined' => 'double_lined',
					'dust' => 'dust',
					'extra_clean_paper' => 'extra_clean_paper',
					'fabric_plaid' => 'fabric_plaid',
					'furley_bg' => 'furley_bg',
					'gplaypattern' => 'gplaypattern',
					'gradient_squares' => 'gradient_squares',
					'gray_jean' => 'gray_jean',
					'grid_noise' => 'grid_noise',
					'grilled' => 'grilled',
					'hexellence' => 'hexellence',
					'lghtmesh' => 'lghtmesh',
					'light_noise_diagonal' => 'light_noise_diagonal',
					'lined_paper' => 'lined_paper',
					'little_triangles' => 'little_triangles',
					'natural_paper' => 'natural_paper',
					'noise_pattern_with_crosslines' => 'noise_pattern_with_crosslines',
					'old_mathematics' => 'old_mathematics',
					'old_wall' => 'old_wall',
					'paper_3' => 'paper_3',
					'plaid' => 'plaid',
					'project_papper' => 'project_papper',
					'psychedelic_pattern' => 'psychedelic_pattern',
					'redox_01' => 'redox_01',
					'rockywall' => 'rockywall',
					'rough_diagonal' => 'rough_diagonal',
					'silver_scales' => 'silver_scales',
					'skin_side_up' => 'skin_side_up',
					'straws' => 'straws',
					'struckaxiom' => 'struckaxiom',
					'stucco' => 'stucco',
					'subtle_freckles' => 'subtle_freckles',
					'subtle_stripes' => 'subtle_stripes',
					'subtlenet2' => 'subtlenet2',
					'textured_stripes' => 'textured_stripes',
					'tileable_wood_texture' => 'tileable_wood_texture',
					'wood_pattern' => 'wood_pattern',
					'wall4' => 'wall4',
					'washi' => 'washi',
					'white_texture' => 'white_texture',
					'xv' => 'xv',
				),
				'default_value' => '',
				'allow_null' => 1,
				'multiple' => 0,
			),
			300 => 
			array (
				'key' => 'field_2400',
				'label' => 'Background Image',
				'name' => 'background_image',
				'type' => 'image',
				'order_no' => 3,
				'instructions' => 'Upload a custom background immage/texture',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			3 => 
			array (
				'key' => 'field_49',
				'label' => 'Navigation',
				'name' => '',
				'type' => 'tab',
				'order_no' => 3,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			4 => 
			array (
				'key' => 'field_43',
				'label' => 'Navigation Background',
				'name' => 'nav_background',
				'type' => 'color_picker',
				'order_no' => 4,
				'instructions' => 'Select a custom background color for the navigation',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			5 => 
			array (
				'key' => 'field_44',
				'label' => 'Navigation Active',
				'name' => 'nav_active',
				'type' => 'color_picker',
				'order_no' => 5,
				'instructions' => 'Specify a custom active button color for the navigation',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			6 => 
			array (
				'key' => 'field_45',
				'label' => 'Navigation Hover',
				'name' => 'nav_hover',
				'type' => 'color_picker',
				'order_no' => 6,
				'instructions' => 'Specify a custom hover color for the navigation',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			7 => 
			array (
				'key' => 'field_51',
				'label' => 'Post',
				'name' => '',
				'type' => 'tab',
				'order_no' => 7,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			8 => 
			array (
				'key' => 'field_52',
				'label' => 'Post Shadow',
				'name' => 'post_shadow',
				'type' => 'color_picker',
				'order_no' => 8,
				'instructions' => 'Specify a custom color for the post shadow',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			9 => 
			array (
				'key' => 'field_89',
				'label' => 'Image Hover Icon',
				'name' => 'image_hover_icon',
				'type' => 'select',
				'order_no' => 9,
				'instructions' => 'Change the icon displayed when you hover over an image',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_40',
							'operator' => '==',
							'value' => 'bgnoise_lg',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'icon_cross.png' => 'Plus',
					'hover_heart.png' => 'Heart',
					'hover_circleplus.png' => 'Circle Plus',
					'hover_magnify.png' => 'Magnify Glass',
				),
				'default_value' => 'Plus',
				'allow_null' => 0,
				'multiple' => 0,
			),
			10 => 
			array (
				'key' => 'field_53',
				'label' => 'Typography',
				'name' => '',
				'type' => 'tab',
				'order_no' => 10,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			11 => 
			array (
				'key' => 'field_54',
				'label' => 'Heading Font',
				'name' => 'heading_font',
				'type' => 'select',
				'order_no' => 11,
				'instructions' => 'Specify another font for all heading elements (h1, h2, h3, h4, h5, h6)',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'Oswald' => 'Oswald',
					'Exo' => 'Exo',
					'Julius Sans One' => 'Julius Sans One',
					'Raleway' => 'Raleway',
					'Allerta' => 'Allerta',
					'Arvo' => 'Arvo',
					'Droid Serif' => 'Droid Serif',
					'Ubuntu' => 'Ubuntu',
					'Open Sans' => 'Open Sans',
					'Source Sans' => 'Source Sans',
					'PT Sans' => 'PT Sans',
					'Droid Sans' => 'Droid Sans',
					'Lato' => 'Lato',
					'Cabin' => 'Cabin',
					'Alegreya' => 'Alegreya',
					'Rokkitt' => 'Rokkitt',
					'Glegoo' => 'Glegoo',
					'Asap' => 'Asap',
					'Amaranth' => 'Amaranth',
					'Armata' => 'Armata',
					'Cutive' => 'Cutive',
					'Abel' => 'Abel',
					'Dosis' => 'Dosis',
					'Varela' => 'Varela',
				),
				'default_value' => 'Oswald',
				'allow_null' => 0,
				'multiple' => 0,
			),
			12 => 
			array (
				'key' => 'field_55',
				'label' => 'Body Font',
				'name' => 'body_font',
				'type' => 'select',
				'order_no' => 12,
				'instructions' => 'Specify a custom font for the body text',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_40',
							'operator' => '==',
							'value' => 'bgnoise_lg',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'Arial' => 'Arial',
					'Oswald' => 'Oswald',
					'Exo' => 'Exo',
					'Julius Sans One' => 'Julius Sans One',
					'Raleway' => 'Raleway',
					'Allerta' => 'Allerta',
					'Arvo' => 'Arvo',
					'Droid Serif' => 'Droid Serif',
					'Ubuntu' => 'Ubuntu',
					'Open Sans' => 'Open Sans',
					'Source Sans' => 'Source Sans',
					'PT Sans' => 'PT Sans',
					'Droid Sans' => 'Droid Sans',
					'Lato' => 'Lato',
					'Cabin' => 'Cabin',
					'Alegreya' => 'Alegreya',
					'Rokkitt' => 'Rokkitt',
					'Glegoo' => 'Glegoo',
					'Asap' => 'Asap',
					'Amaranth' => 'Amaranth',
					'Armata' => 'Armata',
					'Cutive' => 'Cutive',
					'Abel' => 'Abel',
					'Dosis' => 'Dosis',
					'Varela' => 'Varela',
				),
				'default_value' => 'Arial',
				'allow_null' => 0,
				'multiple' => 0,
			),
			13 => 
			array (
				'key' => 'field_56',
				'label' => 'Body Font Size',
				'name' => 'body_font_size',
				'type' => 'text',
				'order_no' => 13,
				'instructions' => 'Specify a custom size for the body font',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '12px',
				'formatting' => 'html',
			),
			14 => 
			array (
				'key' => 'field_50',
				'label' => 'Custom CSS',
				'name' => '',
				'type' => 'tab',
				'order_no' => 14,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			15 => 
			array (
				'key' => 'field_48',
				'label' => 'Custom CSS',
				'name' => 'custom_css',
				'type' => 'textarea',
				'order_no' => 15,
				'instructions' => 'Use this area to add your own custom CSS code.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '512cf66cb1e09',
		'title' => 'Post Type',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_2',
				'label' => 'Choose your post type',
				'name' => '',
				'type' => 'tab',
				'order_no' => 0,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
			),
			1 => 
			array (
				'key' => 'field_3',
				'label' => 'post type',
				'name' => 'post_type',
				'type' => 'radio',
				'order_no' => 1,
				'instructions' => 'Please select the post type you would like to display. Further options for each post type are available in the tabs.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'Regular' => 'Regular',
					'Image' => 'Image',
					'Slider' => 'Slider',
					'Tabs' => 'Tabs',
					'Video' => 'Video',
					'Audio' => 'Audio',
					'Quote' => 'Quote',
					'Social' => 'Twitter',
				),
				'default_value' => 'Regular',
				'layout' => 'vertical',
			),
			2 => 
			array (
				'key' => 'field_25',
				'label' => 'Image',
				'name' => '',
				'type' => 'tab',
				'order_no' => 2,
				'instructions' => 'Please select the post type you would like to display. Further options for each post type are available in the tabs.',
				'required' => 1,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
			),
			3 => 
			array (
				'key' => 'field_24',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
				'order_no' => 3,
				'instructions' => 'Display an image with your post',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			4 => 
			array (
				'key' => 'field_4',
				'label' => 'Slider',
				'name' => '',
				'type' => 'tab',
				'order_no' => 4,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
			),
			5 => 
			array (
				'key' => 'field_115',
				'label' => 'Slider Images',
				'name' => 'slider_images',
				'type' => 'repeater',
				'order_no' => 5,
				'instructions' => 'Click "Add row" and upload an image. You can upload multiple slides by clicking "Add row"',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Regular',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					'field_116' => 
					array (
						'label' => 'Slider Image',
						'name' => 'slider_image',
						'type' => 'image',
						'instructions' => 'Upload an image for your slider',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'order_no' => 0,
						'key' => 'field_116',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			6 => 
			array (
				'key' => 'field_15',
				'label' => 'Video',
				'name' => '',
				'type' => 'tab',
				'order_no' => 6,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
			),
			7 => 
			array (
				'key' => 'field_21',
				'label' => 'Video Height',
				'name' => 'video_height',
				'type' => 'text',
				'order_no' => 7,
				'instructions' => 'Please specify your video height',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '280px',
				'formatting' => 'none',
			),
			300 => 
			array (
				'key' => 'field_123123',
				'label' => 'Video Poster',
				'name' => 'video_poster',
				'type' => 'image',
				'order_no' => 3,
				'instructions' => 'Display a poster before the video is played',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			8 => 
			array (
				'key' => 'field_16',
				'label' => 'Video Upload',
				'name' => 'video_upload',
				'type' => 'file',
				'order_no' => 8,
				'instructions' => 'Upload a video',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
			),
			9 => 
			array (
				'key' => 'field_125',
				'label' => 'Video URL',
				'name' => 'video_url',
				'type' => 'text',
				'order_no' => 9,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Regular',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			900 => 
			array (
				'key' => 'field_1255',
				'label' => 'Video Embed',
				'name' => 'video_embed',
				'type' => 'textarea',
				'order_no' => 9,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Regular',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'HTML',
			),
			10 => 
			array (
				'key' => 'field_18',
				'label' => 'Audio',
				'name' => '',
				'type' => 'tab',
				'order_no' => 10,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
			),
			11 => 
			array (
				'key' => 'field_19',
				'label' => 'Audio Upload',
				'name' => 'audio_upload',
				'type' => 'file',
				'order_no' => 11,
				'instructions' => 'Upload an MP3 File',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
			),
			12 => 
			array (
				'key' => 'field_126',
				'label' => 'Audio URL',
				'name' => 'audio_url',
				'type' => 'text',
				'order_no' => 12,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Regular',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			1200 => 
			array (
				'key' => 'field_1243523',
				'label' => 'Audio Image',
				'name' => 'audio_image',
				'type' => 'image',
				'order_no' => 3,
				'instructions' => 'Display an image with the audio',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			13 => 
			array (
				'key' => 'field_23',
				'label' => 'Quote',
				'name' => '',
				'type' => 'tab',
				'order_no' => 13,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
			),
			14 => 
			array (
				'key' => 'field_22',
				'label' => 'Quote',
				'name' => 'the_quote',
				'type' => 'textarea',
				'order_no' => 14,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			15 => 
			array (
				'key' => 'field_26',
				'label' => 'Twitter Feed',
				'name' => 'twitter_feed',
				'type' => 'tab',
				'order_no' => 15,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
			),
			16 => 
			array (
				'key' => 'field_27',
				'label' => 'Social Type',
				'name' => 'social_type',
				'type' => 'radio',
				'order_no' => 16,
				'instructions' => 'Please select your social network',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'Twitter' => 'Twitter',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			17 => 
			array (
				'key' => 'field_28',
				'label' => 'Twitter Username',
				'name' => 'twitter_username',
				'type' => 'text',
				'order_no' => 17,
				'instructions' => 'Please enter your twitter username',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 1,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_27',
							'operator' => '==',
							'value' => 'Twitter',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'html',
			),
			18 => 
			array (
				'key' => 'field_29',
				'label' => 'Twitter Count',
				'name' => 'twitter_count',
				'type' => 'number',
				'order_no' => 18,
				'instructions' => 'Please enter the number of tweets you would like to display.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 1,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_27',
							'operator' => '==',
							'value' => 'Twitter',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			19 => 
			array (
				'key' => 'field_31',
				'label' => 'Tabs',
				'name' => '',
				'type' => 'tab',
				'order_no' => 19,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Regular',
						),
					),
					'allorany' => 'all',
				),
			),
			20 => 
			array (
				'key' => 'field_117',
				'label' => 'Tabs',
				'name' => 'tabs',
				'type' => 'repeater',
				'order_no' => 20,
				'instructions' => 'Click "Add row" to create your first tab. You can create an unlimited number of tabs.
	',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Regular',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					'field_118' => 
					array (
						'label' => 'tab_title',
						'name' => 'tab_title',
						'type' => 'text',
						'instructions' => 'Enter the title of your tab',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'html',
						'order_no' => 0,
						'key' => 'field_118',
					),
					'field_119' => 
					array (
						'label' => 'Tab Content',
						'name' => 'tab_content',
						'type' => 'wysiwyg',
						'instructions' => 'Enter the content for your tab',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
						'the_content' => 'yes',
						'order_no' => 1,
						'key' => 'field_119',
					),
					'field_120' => 
					array (
						'label' => 'Tab Active',
						'name' => 'tab_active',
						'type' => 'true_false',
						'instructions' => 'Select your active tab. (Only one)',
						'column_width' => '',
						'message' => 'Active tab',
						'order_no' => 2,
						'key' => 'field_120',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
				),
				1 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 1,
				),
				2 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'custom_page',
					'order_no' => 2,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => '512cf66cb6cf2',
		'title' => 'Post Type Settings',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_1',
				'label' => 'Column Size',
				'name' => 'column_size',
				'type' => 'select',
				'order_no' => 0,
				'instructions' => 'Select the column size for your post. Ranges from 1-12.
	Favorite values are 4 for medium size and 8 for large size.
		',
				'required' => 1,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					1 => 1,
					2 => 2,
					3 => 3,
					4 => 4,
					5 => 5,
					6 => 6,
					7 => 7,
					8 => 8,
					9 => 9,
					10 => 10,
					11 => 11,
					12 => 12,
				),
				'default_value' => 4,
				'allow_null' => 0,
				'multiple' => 0,
			),
			1 => 
			array (
				'key' => 'field_30',
				'label' => 'Post Footer',
				'name' => 'post_footer',
				'type' => 'checkbox',
				'order_no' => 1,
				'instructions' => 'Please select what you would like displayed in the post footer',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_1',
							'operator' => '==',
							'value' => 1,
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'Timestamp' => 'Timestamp',
					'Like' => 'Like',
					'Comments' => 'Comments',
				),
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
				),
				1 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 1,
				),
				2 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'custom_page',
					'order_no' => 2,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 3,
	));
}
?>