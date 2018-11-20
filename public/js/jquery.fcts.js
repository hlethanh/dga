function wd_pagination(paginationContainer, itemContainer, byLines = 4, byColumns = 15, debug=false){

	var itemByPage = parseInt( byLines * byColumns );
	var totalItems = parseInt($('.'+itemContainer).length);

	if(debug === true){

		console.log('byLines:' + byLines + '\nbyColumns:' + byColumns + '\nitemByPage:' + itemByPage + '\ntotalItems:' + totalItems);
	}
	
	$('.'+itemContainer).hide();

	$('.'+itemContainer).each(function(i,e){ if ((i+1) >= 1 && (i+1) <= itemByPage) {$(this).show();}; });

	if(totalItems >= itemByPage){

		$('.'+paginationContainer).twbsPagination({

			totalPages: Math.ceil( totalItems / itemByPage ),
			visiblePages: 5,
			first: '<<',
			prev: '<',
			next: '>',
			last: '>>',
			
			onPageClick: function (event, page) {
			
				var min = (page * itemByPage) - (itemByPage) + 1;
				var max = (page * itemByPage);	
				
				$('.'+itemContainer).hide();
				$('.'+itemContainer).each(function(i,e){
					if ( ( i+1 ) >= min && ( i+1 ) <= max ) { $(this).show(); };
				});
			}
		});

	} else {

		$('.'+paginationContainer).remove();

	}
}