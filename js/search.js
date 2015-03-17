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
		console.log(ui.item);
		doSearch(ui.item.id);
	},
	autoFocus: true,
	minLength: 2      	
});

function doSearch(id)
{
    var link = '/ajax/CheckSearch/'+id;

     $.ajax({type: "post",url:link}).done(function(data){
       
            obj = jQuery.parseJSON(data);
            if(obj.count>0)
            {

            	window.location.href="/site/search/"+id;

            }
            //console.log(obj);
        
     });
}

