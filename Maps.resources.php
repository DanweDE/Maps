<?php

/**
 * Definition of Maps resource loader modules.
 *
 * @since 3.0
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 *
 * @codeCoverageIgnoreStart
 */
return call_user_func( function() {

	$moduleTemplate = array(
		'localBasePath' => __DIR__ . '/includes',
		'remoteExtPath' =>  '..' . substr( __DIR__, strlen( $GLOBALS['IP'] ) ) . '/includes',
		'group' => 'ext.maps'
	);

	return array(
		'ext.maps.common' => $moduleTemplate + array(
			'messages' => array(
				'maps-load-failed',
			) ,
			'scripts' => array(
				'ext.maps.common.js',
			),
		),

		'ext.maps.coord' => $moduleTemplate + array(
			'messages' => array(
				'maps-abb-north',
				'maps-abb-east',
				'maps-abb-south',
				'maps-abb-west',
			),
			'scripts' => array(
				'ext.maps.coord.js'
			),
		),

		'ext.maps.resizable' => $moduleTemplate + array(
			'dependencies' => 'jquery.ui.resizable',
		),

		'mapeditor' => $moduleTemplate + array(
			'scripts' => array(
				'editor/js/jquery.miniColors.js',
				'editor/js/mapeditor.iefixes.js',
				'editor/js/mapeditor.js',
			),
			'styles' => array(
				'editor/css/jquery.miniColors.css',
				'editor/css/mapeditor.css',
			),
			'messages' => array(
				'mapeditor-parser-error',
				'mapeditor-none-text',
				'mapeditor-done-button',
				'mapeditor-remove-button',
				'mapeditor-import-button',
				'mapeditor-export-button',
				'mapeditor-import-button2',
				'mapeditor-select-button',
				'mapeditor-mapparam-button',
				'mapeditor-clear-button',
				'mapeditor-imageoverlay-button',
			),
			'dependencies' => array(
				'ext.maps.common',
				'jquery.ui.autocomplete',
				'jquery.ui.slider',
				'jquery.ui.dialog',
			),
		),
	);

} );
// @codeCoverageIgnoreEnd
