$(function(){

const byLines = 4;
const byColumns = 2;
const paginationContainer = 'pagination';
const itemContainer = 'portfolio-item';

/* ************************************ */
/* SEARCH - TEAM SECTION                */
/* ************************************ */
	if($('#team-das').length > 0){

		$("#searchInput").on("keyup", function() {

	    	var value = $(this).val().toLowerCase(); 

	    	console.log(value);

	    	$("#team-das .portfolio-item").filter( function() { $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1) });
	    	
	    	if(value === ''){

	    		$('#team-das-pagination').show();

	    		wd_pagination(paginationContainer, itemContainer, byLines, byColumns);

				$('#team-das-pagination > li.page').removeClass('active');
				$('#team-das-pagination > li.page').first().addClass('active');
	    	
	    	} else {

	    		$('#team-das-pagination').hide();

	    	}
	  	});

	 }

/* ************************************ */
/* PAGINATION 				   		 	*/
/* ************************************ */

	if($('#team-das-pagination').length > 0){

		wd_pagination(paginationContainer, itemContainer, byLines, byColumns);

	}
});
