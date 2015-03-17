$(document).ready(function(e) {
	$('#select-distance').selectmenu();
	
	
	//Price range 
		$( "#slider-range" ).slider({
		range: true,
		min: 10,
		max: 200,
		step: 10,
		values: [10,200],
		slide: function( event, ui ){
			$('input:hidden[name=sl-from]').val(ui.values[0]);
			$('input:hidden[name=sl-to]').val(ui.values[1]);	
		},//slde:function 
		
	}).slider("pips", { labels: {first:'10 €', last:'200 € + '}}).slider("float", {suffix:' €' });//slider-range
	
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
		alert(rating);
		doFilter();
        return false;
    });
	
/*
	add by Maxim
*/

$('#salon-filter').autocomplete({
	source: function( request, response ) {
		$.ajax({
			url : link,
			type: "post",
			dataType: "json",
		data: {
		   name_startsWith: request.term,
		},
		 success: function( data ) { 
		 	console.log(data);
			 response( $.map( data, function( item ) {
				return {
					label: item,
					value: item
				}
			}));
		}
		});
	},
	select: function( event, ui ) {
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
	alert('do filter');
}	

/*
	/ add by Maxim
*/	

