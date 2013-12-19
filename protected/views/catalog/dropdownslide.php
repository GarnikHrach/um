<?php
    $baseurl = Yii::app()->baseUrl;
    $clientscript = Yii::app()->clientScript;
    $clientscript->registerCssFile($baseurl . '/css/dropdownmenustyle.css');
    $clientscript->registerScriptFile($baseurl . '/js/jquery.easing.1.3.js');
?>

<!--<p class="shining">КАТАЛОГ ТЕХНИКИ</p>-->

<div id="firstcatalog" class="std_content">
    <ul id="sdt_menu" class="sdt_menu">
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/1.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">АВТОКРАНЫ</span>
                                    <span class="sdt_descr">My work</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                        <?php   foreach ($catalog as $value) {
                            if($value['category'] == 'автокраны'){?>
                                <a href="<?php echo $baseurl.'/catalog/model/'.$value['id'] ?>"><?= $value['model'] ?></a>
                        <?php  }}
                        ?>
<!--                                    <a href="#">Websites</a>
                                    <a href="#">Illustrations</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>-->
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/2.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">МАНИПУЛЯТОРЫ</span>
                                    <span class="sdt_descr">My work</span>
                                    
                            </span>
                    </a>
                    <div class="sdt_box">
                                    <?php   foreach ($catalog as $value) {
                                        if($value['category'] == 'манипуляторы'){?>
                                            <a href="<?php echo $baseurl.'/catalog/model/'.$value['id'] ?>"><?= $value['model'] ?></a>
                                    <?php  }}
                                    ?>
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/3.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">ЭКСКАВАТОРЫ</span>
                                    <span class="sdt_descr">My work</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                                    <a href="#">Websites</a>
                                    <a href="#">Illustrations</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/4.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">НИЗКОРАМНЫЕ ПЛАТФОРМЫ</span>
                                    <span class="sdt_descr">My work</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                                    <a href="#">Websites</a>
                                    <a href="#">Illustrations</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/5.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">ВИБРОКАТКИ</span>
                                    <span class="sdt_descr">My work</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                                    <a href="#">Websites</a>
                                    <a href="#">Illustrations</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/6.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">ТЕЛЕСКО - ПОГРУЗЧИКИ</span>
                                    <span class="sdt_descr">I like to code</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                            <a href="#">Job Board Website</a>
                            <a href="#">Shopping Cart</a>
                            <a href="#">Interactive Maps</a>
                    </div>
            </li>
    </ul>
</div>

<div id="secondcatalog" class="std_content" style="padding-top: 260px;">
    <ul id="sdt_menu" class="sdt_menu">
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/1.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">ФРОНТ. - ПОГРУЗЧИКИ</span>
                                    <span class="sdt_descr">My work</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                                    <a href="#">Websites</a>
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/2.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">ДЛИНАМЕРЫ</span>
                                    <span class="sdt_descr">My work</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                                    <a href="#">Websites</a>
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/3.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">АВТОВЫШКИ</span>
                                    <span class="sdt_descr">My work</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                                    <a href="#">Websites</a>
                                    
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/4.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">ТРАКТОРЫ</span>
                                    <span class="sdt_descr">My work</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                                    <a href="#">Щетка</a>
                                    <a href="#">Щетка с бочкой</a>
                                    <a href="#">Поливамойочная машина</a>
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/5.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">САМОСВАЛЫ</span>
                                    <span class="sdt_descr">My work</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                                    <a href="#">Websites</a>
                                    <a href="#">Illustrations</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Photography</a>
                    </div>
            </li>
            <li>
                    <a href="#">
                            <img src="<?php echo $baseurl.'/images/6.jpg' ?>" alt=""/>
                            <span class="sdt_active"></span>
                            <span class="sdt_wrap">
                                    <span class="sdt_link">КОМПРЕССОРЫ</span>
                                    <span class="sdt_descr">I like to code</span>
                            </span>
                    </a>
                    <div class="sdt_box">
                            <a href="#">Job Board Website</a>
                           
                    </div>
            </li>
    </ul>
</div>

<!-- The JavaScript -->
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
        <!--<script type="text/javascript" src="jquery.easing.1.3.js"></script>-->
<script type="text/javascript">
    $(function() {
                        /**
                        * for each menu element, on mouseenter, 
                        * we enlarge the image, and show both sdt_active span and 
                        * sdt_wrap span. If the element has a sub menu (sdt_box),
                        * then we slide it - if the element is the last one in the menu
                        * we slide it to the left, otherwise to the right
                        */
        $('#sdt_menu > li').bind('mouseenter',function(){
                                var $elem = $(this);
                                $elem.find('img')
                                         .stop(true)
                                         .animate({
                                                'width':'170px',
                                                'height':'170px',
                                                'left':'0px'
                                         },400,'easeOutBack')
                                         .andSelf()
                                         .find('.sdt_wrap')
                                     .stop(true)
                                         .animate({'top':'140px'},500,'easeOutBack')
                                         .andSelf()
                                         .find('.sdt_active')
                                     .stop(true)
                                         .animate({'height':'170px'},300,function(){
                                        var $sub_menu = $elem.find('.sdt_box');
                                        if($sub_menu.length){
                                                var left = '170px';
                                                if($elem.parent().children().length == $elem.index()+1)
                                                        left = '-170px';
                                                $sub_menu.show().animate({'left':left},200);
                                        }	
                                });
                        }).bind('mouseleave',function(){
                                var $elem = $(this);
                                var $sub_menu = $elem.find('.sdt_box');
                                if($sub_menu.length)
                                        $sub_menu.hide().css('left','0px');

                                $elem.find('.sdt_active')
                                         .stop(true)
                                         .animate({'height':'0px'},300)
                                         .andSelf().find('img')
                                         .stop(true)
                                         .animate({
                                                'width':'0px',
                                                'height':'0px',
                                                'left':'85px'},400)
                                         .andSelf()
                                         .find('.sdt_wrap')
                                         .stop(true)
                                         .animate({'top':'25px'},500);
                        });
    });
</script>