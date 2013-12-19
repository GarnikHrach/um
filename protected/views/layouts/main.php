<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" /><link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/component.css">		
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/default.css">		
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/email.feedback.css">		
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/email.feedback.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
        
        <script type="text/javascript">
        $(window).load(function() {
                $('#feedback').feedback({'theme':'classic'});				
        });
        </script>
</head>

<body>
    <div id="panel1" class="panel">

    </div>
    <a id="apanel1" class="trigger" href="#">ВАШ ЗАКАЗ</a>
    <div id="container">

        <header style="height: 70px; position: fixed; top: 0; width: 100%; background: #101010;
        background: -moz-linear-gradient(top, #ffffff 0%, #d6d6d6 100%);
        box-shadow: 0 5px 10px rgba(0,0,0,0.9); z-index: 100000;">
            
            <div id="header-content">
                <nav>
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Обратная Связь</a></li>
                    </ul>
                </nav>

                <div id="searchcontainer">
                    <form>
                        <input id="searchbox" type="text" />
                        <input id="searchbutton" type="button" value="">
                    </form>
                    <div id="search_results"> </div>
                </div>
            </div>
            
	</header>
            <div id="maincontainer">
    <div id="leftcontainer">
        <?php echo $this->renderPartial('../layouts/leftmenu');?>
        
        
    </div>
        <?php echo $content; ?>
                </div>
        <?php echo $this->renderPartial('../layouts/footer');?>
    </div>
</body>
</html>
