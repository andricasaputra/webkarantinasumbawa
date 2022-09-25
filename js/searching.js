$('#search').on('input', function() {
    $('.secondResult').remove();
    let search = $(this).val();
    if (search != '') {
        load_data(search);
    } else {
        load_data();
    }
});

$('#search2').on('input', function() {
    $('.mainResult').remove();
    let search = $(this).val();
    if (search != '') {
        load_data(search);
    } else {
        load_data();
    }
});

function load_data(query){
	$.ajax({
		url: "views/data/search.php ", 
		method: "POST", 
		data:{query: query}, 

		success: function(data){

			if (data !=''){

			    $('#result').html(data).css({
			      "position": "relative", "top": 80, "bottom": 0, "right": 0, "left": 0, "z-index": 1, "backgroundColor": "white"}
			                               );
			} else {

			    $('#result').empty();
			}
		}
	});
}
    