<script>
	$(document).on('click','.delete_book',function(){
		var delet = $(this).attr('id');
		if(confirm('bạn có muốn xóa?'))
		{
			$.ajax({
				url: '../book_result/index.php?action=delete_book',
				type: 'GET',
				data: "delete="+delet,
				dataType: 'text',
				success: function(result){
					$('.test').html(result);
				}
			});
		}
	});
</script>