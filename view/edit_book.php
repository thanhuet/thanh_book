<div class="edit_book_html">
</div>
<script>
$(document).on('click','.edit_book',function(){
	var edit = $(this).attr('id');
	$.ajax({
		url: '../book_result/index.php?action=form_edit_book',
		type: 'GET',
		data: 'edit='+edit,
		dataType: 'text',
		success: function(result){
			$('.edit_book_html').html(result);
		}
	});
});
	$(document).on('click', '.submit_edit_book', function(){
		var id = $(this).attr('id');
		var name_edit = $('.name_book_edit').val();
		var cate = $('.cate_book_edit').val();
		var author = $('.author_book_edit').val();
		var year = $('.pub_year_book_edit').val();
		$('.form_book').hide();
		$.ajax({
			url: '../book_result/index.php?action=edit_book',
			type: 'GET',
			data: "name_edit="+name_edit+"&category="+cate+"&author="+author+"&year="+year+"&id="+id,
			dataType: 'text',
			success: function(result){
				$('.test').html(result);
			}
		});
	});

	// cancel form edit book
	$(document).on('click','.cancel_book_edit',function(){
		$('.form_book').hide();
	});
</script>