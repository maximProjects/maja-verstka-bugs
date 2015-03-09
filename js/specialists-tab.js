/*
events
*/
$(document).ready(function(e) {
    $(document).on('click','.tab-hide', function(){
        $('#spec-content').slideUp('fast', function() {
            $('#spec-content').html('');
            $('#spec-content').remove();
            $('.spec-block').removeClass('spec-active');
        });
        return false;
    });

    $(document).on('click','.spec-block', function(){
        $('.spec-block').removeClass('spec-active');
        $(this).addClass('spec-active');
        var objMap = $(this).data();
        var id = objMap.id;
        var order = objMap.order;
        var lastInRow;
        var row_nr;
        var itemsPerRow;
        if($(this).nextAll('.spec-block').length==0 || $( window ).width() < 440) // if click last element
        {
 
            next_div = $(this);
        } 
        else
        {
            if($( window ).width() > 768)
            {  
                itemsPerRow = 3;
            } 
            if($( window ).width() > 440 && $( window ).width() < 768)
            {  
                itemsPerRow = 2;
            } 
            row_nr  = Math.ceil(order/itemsPerRow);

            lastInRow = row_nr*itemsPerRow;
            if(lastInRow == order){
                next_div = $(this);
                 alert(row_nr);
            }
            else
            {
                if($(this).nextAll('.spec-block[data-order="'+lastInRow+'"]').length)
                {
                    next_div = $(this).nextAll('.spec-block[data-order="'+lastInRow+'"]');
                }
                else
                {
                    // if row not full
                    var prev = lastInRow-1;
                    next_div = $(this).nextAll('.spec-block[data-order="'+prev+'"]');
                }
            }
            
        }
     
        if($('#spec-content').length)
        {

            $('#spec-content').slideUp('fast', function() {
                
                 $('#spec-content').remove();
                 next_div.after( '<div id="spec-content" class="spec-content clearfix"></div>' );
               // var htmlData = $('#spec-content-hidden').html();
               // $('#spec-content').html(htmlData);
                var link = '/ajax/Secialist/'+id;
                $.ajax({type: "post",url:link}).done(function(data){
                   
                        obj = $.parseJSON(data);
                        console.log(obj);
                        htmlData = obj.html;
                        $('#spec-content').hide();           
                        $('#spec-content').html(htmlData);
                        $('#spec-content').slideDown('fast');
                    
                 });
                    return false;  
 
                });
           
        }
        else
        {
            next_div.after( '<div id="spec-content" class="spec-content clearfix"></div>' );
            var link = '/ajax/Secialist/'+id;
            $.ajax({type: "post",url:link}).done(function(data){
               
                    obj = $.parseJSON(data);
                    console.log(obj);
                    htmlData = obj.html;
                    $('#spec-content').hide();           
                    $('#spec-content').html(htmlData);
                    $('#spec-content').slideDown('fast');
                    return false;
                
             });
            
        }
        
    });//click on spec-block

});

/*
events end
*/

/*
functions
*/

