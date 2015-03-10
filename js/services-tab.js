/*
events
*/
$(document).ready(function(e) {
    $(document).on('click','.tab-hide', function(){
        $('#serv-content').slideUp('fast', function() {
            $('#serv-content').html('');
            $('#serv-content').remove();
            $('.serv-block').removeClass('serv-active');
        });
        return false;
    });

    $(document).on('click','.serv-block', function(){
        $('.serv-block').removeClass('serv-active');
        $(this).addClass('serv-active');
        var objMap = $(this).data();
        var id = objMap.id;
        var type_id = objMap.type;
        var order = objMap.order;
        var lastInRow;
        var row_nr;
        var itemsPerRow;
        if($(this).nextAll('.serv-block').length==0 || $( window ).width() < 440) // if click last element
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
                if($(this).nextAll('.serv-block[data-order="'+lastInRow+'"]').length)
                {
                    next_div = $(this).nextAll('.serv-block[data-order="'+lastInRow+'"]');
                }
                else
                {
                    // if row not full
                    var prev = lastInRow-1;
                    next_div = $(this).nextAll('.serv-block[data-order="'+prev+'"]');
                }
            }
            
        }
     
        if($('#serv-content').length)
        {

            $('#serv-content').slideUp('fast', function() {
                
                 $('#serv-content').remove();
                 next_div.after( '<div id="serv-content" class="serv-content clearfix"></div>' );
               // var htmlData = $('#serv-content-hidden').html();
               // $('#serv-content').html(htmlData);
                var link = '/ajax/Services/'+id;
                $.ajax({type: "post", data: { type_id: type_id}, url:link}).done(function(data){
                   
                        obj = $.parseJSON(data);
                        console.log(obj);
                        htmlData = obj.html;
                        $('#serv-content').hide();           
                        $('#serv-content').html(htmlData);
                        $('#serv-content').slideDown('fast');
                    
                 });
                    return false;  
 
                });
           
        }
        else
        {
            next_div.after( '<div id="serv-content" class="serv-content clearfix"></div>' );
            var link = '/ajax/Services/'+id;
            $.ajax({type: "post", data: { type_id: type_id}, url:link}).done(function(data){
               
                    obj = $.parseJSON(data);
                    console.log(obj);
                    htmlData = obj.html;
                    $('#serv-content').hide();           
                    $('#serv-content').html(htmlData);
                    $('#serv-content').slideDown('fast');
                    return false;
                
             });
            
        }
        
    });//click on serv-block

});

/*
events end
*/

/*
functions
*/

