<div id="maincontainer">
    <div id="leftcontainer">
        <?php echo $this->renderPartial('../layouts/leftmenu');?>
        
        
    </div>
    <div id="rightcontainer">
        <?php echo $model[0]->image ; ?>
        <?php echo $model[0]->model ; ?>
        <input type="button" class="order" id="<?php echo $model[0]->id ;?>" value="Заказать">
    </div>
            <?php echo $this->renderPartial('../layouts/footer');?>

</div>

<script type="text/javascript">
$(document).ready(function(){
    $('.order').click(function(){
        var model = "<?php echo $model[0]->model ; ?>" ;
        $('.panel').css('display', 'block');
        $('.panel').push(model);
    });
)};


</script>