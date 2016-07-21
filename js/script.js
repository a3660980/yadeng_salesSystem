// autocomplet : this function will be executed every time we change the text
function autocomplet() {
	var min_length = 1; // min caracters to display the autocomplete
	var keyword = $('#birth_id').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: '/html/ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#birth_list_id').show();
				$('#birth_list_id').html(data);
			}
		});
	} else {
		$('#birth_list_id').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#birth_id').val(item);
	// hide proposition list
	$('#birth_list_id').hide();
}