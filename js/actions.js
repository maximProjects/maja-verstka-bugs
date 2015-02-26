/*
events
*/

$(document).ready(function(e) {

    $(document).on('click','.info a', function(){
 		renderInfo();
    $( ".load-content" ).show();
		return false;
	});//click on info button

    $(document).on('click','.map a', function(){
    var objMap = $(this).data();
    var id = objMap.id;
 		renderMap(id);
    $( ".load-content" ).show();
		return false;
	});//click on map button

    $(document).on('click','.cart a', function(){
 		renderCart();
    $( ".load-content" ).show();
		return false;
	});//click on cart button

    $(document).on('click','.book a', function(){
 		renderBook();
    $( ".load-content" ).show();
		return false;
	});//click on book button

    $(document).on('click','.hide-block', function(){
      $( ".load-content" ).slideUp('slow',function() {
        $( ".load-content" ).html('');
    });
      //$( ".load-content" ).html('');
    return false;
  });//click on hide block button

});

/*
events end
*/

/*
functions
*/

function renderInfo()
{
    var url = '/ajax/Info';
    $(".load-content").load(url);
}

function renderMap(id)
{
    var link = '/ajax/Map/'+id;
    /*
    $(".load-content").load(url,);
   initialize();
   */
     $.ajax({type: "post",url:link}).done(function(data){
       
            obj = jQuery.parseJSON(data);
            //console.log(obj);
            $('.load-content').html(obj.html);
            var address = obj.address;
            initialize(address); 
        
     });
}


function renderCart()
{
    var url = '/ajax/Cart';
    $(".load-content").load(url);
}

function renderBook()
{
    var url = '/ajax/Book';
    $(".load-content").load(url);
}