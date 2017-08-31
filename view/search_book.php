
<script>
$('.search_book').keyup(function(){
	var txt = $('.search_book').val();
	$.ajax({
		url: '../book_result/index.php?action=search',
		type: 'GET',
		data: "search="+txt,
		dataType: 'text',
		success: function(result){
			debugger;
			$('.test').html(result);
			// $('.author').hide();
		}				
	});
});
</script>