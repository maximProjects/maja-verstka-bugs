var price_min = 10;
var price_max = 200;
$(document).ready(function(e) {
	$('#select-distance').selectmenu({
		change: function( event, ui ) 
				{
					doFilter();
				}
	});

	/*	
	$(document).on('change','#select-distance', function(){
		alert('distance');
		doFilter();
		return false;
	});
	*/	

	//Price range 
		$( "#slider-range" ).slider({
		range: true,
		min: price_min,
		max: price_max,
		step: 10,
		values: [price_min,price_max],
		slide: function( event, ui ){
			/*
			$('input:hidden[name=sl-from]').val(ui.values[0]);
			$('input:hidden[name=sl-to]').val(ui.values[1]);
			*/	
		},//slde:function 
		change: function( event, ui ) {
			$('input:hidden[name=sl-from]').val('');
			$('input:hidden[name=sl-to]').val('');
			if(ui.values[0]!=price_min)
			{
				$('input:hidden[name=sl-from]').val(ui.values[0]);
			}
			if(ui.values[1]!=price_max)
			{
				$('input:hidden[name=sl-to]').val(ui.values[1]);	
			}	
			
			doFilter();
		},
	}).slider("pips", { labels: {first:price_min+' €', last:price_max+' € + '}}).slider("float", {suffix:' €' });//slider-range
	
	//stars selector
	$(".stars-holder ").hover(function(){},
	function(){
		rating = $('.number-holder').html();
		putHover(rating);
	});
    
	$(".stars-holder > a").hover(function(e) {
		var rating = $(this).data('rating');
		//$('.number-holder').html(rating);
		putHover(rating);
       
    });
	
	$(".stars-holder > a").click(function(e) {
		var rating = $(this).data('rating');
		$('.number-holder').html(rating);
		$('input:hidden[name=rating]').val(rating);
		doFilter();
        return false;
    });
	
/*
	add by Maxim
*/
$(document).on('change','#name', function(){
	doFilter();
	return false;
});

$('#city-filter').autocomplete({
	source: function( request, response ) {
		$.ajax({
			url : '/ajax/Search',
			type: "post",
			dataType: "json",
		data: {
		   name_startsWith: request.term,
		},
		 success: function( data ) { 
		 	console.log(data);
			 response( $.map( data, function( item ) {
				return {
					label: item.name,
					id: item.id
				}
			}));
		}
		});
	},
	select: function( event, ui ) {
		$('input:hidden[name=city-id]').val(ui.item.id);
		doFilter();
	},
	autoFocus: true,
	minLength: 2      	
});


/*
	/ add by Maxim
*/	
});//document ready


function putHover(rating){
	$('.stars-holder').css('background-position','center '+ (-26 * rating) + 'px');
	
}//putHover

/*
 add by Maxim
*/	

function doFilter(){
	var city_id = $('input:hidden[name=city-id]').val();
	var name = $('input:text[name=name]').val();
	var rating = $('input:hidden[name=rating]').val();
	var price_from = $('input:hidden[name=sl-from]').val();
	var price_to = $('input:hidden[name=sl-to]').val();
	var dist_center = $('#select-distance').val();
	var params = {name:name,rating:rating,price_from:price_from,price_to:price_to,city_id:city_id,dist_center:dist_center};

	console.log(params); 
	//alert('rating = '+rating+" | price_from - "+price_from+" | price_to"+price_to+" | name = "+name);
    var link = '/ajax/Filter/';
     $.ajax({type: "post",data:params,url:link}).done(function(data){
       
            obj = jQuery.parseJSON(data);
            //console.log(obj);
            $("#main-content").html(obj.html);
        
     });

	return false;
}	

/*
	/ add by Maxim
*/	

