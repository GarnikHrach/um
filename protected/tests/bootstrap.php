<?php

// change the following paths if necessary
<<<<<<< HEAD
$yiit=dirname(__FILE__).'/../../../framework/yiit.php';
=======
$yiit=dirname(__FILE__).'/../../framework/yiit.php';
>>>>>>> cf3b30f6115121d95356876dc342d29d0ba20df4
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
