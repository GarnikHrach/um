<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
<<<<<<< HEAD
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=um',
=======
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
>>>>>>> cf3b30f6115121d95356876dc342d29d0ba20df4
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
<<<<<<< HEAD
		
=======
		*/
>>>>>>> cf3b30f6115121d95356876dc342d29d0ba20df4
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),
);