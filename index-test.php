<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
<<<<<<< HEAD
$yii=dirname(__FILE__).'/../framework/yii.php';
=======
$yii=dirname(__FILE__).'/framework/yii.php';
>>>>>>> cf3b30f6115121d95356876dc342d29d0ba20df4
$config=dirname(__FILE__).'/protected/config/test.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
