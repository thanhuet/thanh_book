<script>
		$(document).on('click','.delete_author',function(){
		var delete_author = $(this).attr('id');
		if(confirm('bạn có muốn xóa?')){
			$.ajax({
				url: '../book_result/index.php?action=delete_author',
				type: 'GET',
				data: "delete_author="+delete_author,
				dataType: 'text',
				success: function(result){
					$('.author_content').html(result);
				}
			});
		}
	});
</script>