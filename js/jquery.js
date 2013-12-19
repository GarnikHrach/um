//panel js

$(window).load(function() {
        $('#feedback').feedback({'theme':'classic'});				
});
$(document).ready(function(){
        $("#apanel1").click(function(){
                $("#panel1").toggle("fast");
                $(this).toggleClass("active");
                return false;
        });
        $("#apanel2").click(function(){
                $("#panel2").toggle("fast");
                $(this).toggleClass("active");
                return false;
        });
        
        
//        site search
        $('#searchbox').bind('input',function() {
                console.log($('#searchbox').val());
                if($('#searchbox').val().length >=3){
                $.ajax({
                    type: 'POST',
                    data: {data: $('#searchbox').val()},
                    url: 'catalog/search',
                    datatype: 'json'
                }).done(function(data){
          //          alert(data);
                    var datas = JSON.parse(data);
                    $('#search_results').fadeIn(0).html(datas['ekela']);
                });
            }
          //      $('#results').fadeIn(0).html($('#searchbox').val());
                if($('#searchbox').val().length <3){
                    $('#search_results').fadeOut(300);
                }

              });
              $('div #search_results').click(function(){
                  $('#searchbox').val($('#search_results').text()).show();
              });
              console.log($('#search_results').text());
        
});

