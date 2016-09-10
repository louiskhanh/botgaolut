<?php
/**
 * Theme update page.
 *
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Page definition.
 */
$options[] = array(
		"page_title"	=> _x( "Theme Update", 'theme-options', 'the7mk2' ),
		"menu_title"	=> _x( "Theme Update", 'theme-options', 'the7mk2' ),
		"menu_slug"		=> "of-themeupdate-menu",
		"type"			=> "page"
);

/**
 * Heading definition.
 */
$options[] = array( "name" => _x('Theme Update', 'theme-options', 'the7mk2'), "type" => "heading" );

/**
 * User credentials.
 */
$options[] = array(	"name" => _x('Theme info', 'theme-options', 'the7mk2'), "type" => "block_begin" );

	// info
	$options[] = array(
		"id" => 'theme_update-user_name',
		"type" => 'info',
		"desc" => sprintf(
			_x( 'Check the most <a href="%s" target="_blank">recent version of The7 v.2</a>
The7 v.2 should be updated manually. Please download the most recent version of The7 at ThemeForest, go to the /Old Theme/ folder and get a new update - dt-the7.2_v.2.3.x.zip

1. Rename your current theme folder to /wp-content/themes/dt-the7-old/
2. Upload new theme version into /wp-content/themes/dt-the7-old/
3. Go to Theme Options -&gt; Buttons and click on the &ldquo;Save Options&rdquo; button.', 'theme-options', 'the7mk2' ),
			'//the7.dream-demo.com/changelog-the7.2.txt'
		)
	);

$options[] = array(	"type" => "block_end");
