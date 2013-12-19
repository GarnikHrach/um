<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
<<<<<<< HEAD
        'defaultController' => 'catalog',
        'language' => 'ru',
=======
>>>>>>> cf3b30f6115121d95356876dc342d29d0ba20df4

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
<<<<<<< HEAD
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1111',
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
=======
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
>>>>>>> cf3b30f6115121d95356876dc342d29d0ba20df4
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
<<<<<<< HEAD
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                    'showScriptName' => false,
			'rules'=>array(
                            
=======
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
>>>>>>> cf3b30f6115121d95356876dc342d29d0ba20df4
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
<<<<<<< HEAD
		
=======
		*/
>>>>>>> cf3b30f6115121d95356876dc342d29d0ba20df4
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
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
<<<<<<< HEAD
		'adminEmail'=>'garnik-92@mail.ru',
=======
		'adminEmail'=>'webmaster@example.com',
>>>>>>> cf3b30f6115121d95356876dc342d29d0ba20df4
	),
);