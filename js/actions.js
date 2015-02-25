/*
events
*/

$(document).ready(function(e) {

    $(document).on('click','.info a', function(){
 		renderInfo();
		return false;
	});//click on info button

    $(document).on('click','.map a', function(){
 		renderMap();
		return false;
	});//click on info button

    $(document).on('click','.cart a', function(){
 		renderCart();
		return false;
	});//click on info button

    $(document).on('click','.book a', function(){
 		renderBook();
		return false;
	});//click on info button

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

function renderMap()
{
    var link = '/ajax/Map';
    /*
    $(".load-content").load(url,);
   initialize();
   */
     $.ajax({type: "post",url:link}).done(function(data){
       
            obj = jQuery.parseJSON(data);
            console.log(obj);
            $('.load-content').html(obj.html);
          //  alert(1);
            initialize(); 
        
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