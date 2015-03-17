var link = '/ajax/Search';
$('#salon-search').autocomplete({
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
		doSearch(ui.item.value);
	},
	autoFocus: true,
	minLength: 2      	
});

function doSearch(value)
{
    var link = '/ajax/CheckSearch/';

     $.ajax({type: "post",url:link,data:{'val':value}}).done(function(data){
       
            obj = jQuery.parseJSON(data);
            if(obj.count>0)
            {
            	$( "#search-form" ).submit();
            }
            //console.log(obj);
        
     });
}

