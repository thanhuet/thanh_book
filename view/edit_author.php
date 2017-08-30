<script>
	// click edit author
	$(document).on('click','.edit_author',function(){
		var edit = $(this).attr('id');
		$.ajax({
			url: '../book_result/index.php?action=form_edit_author',
			type: 'GET',
			data: "id="+edit,
			dataType: 'text',
			success: function(result){
				$('.form_author').html(result);
			}
		});
	});

	// submit edit author
	$(document).on('click', '.submit_edit_author', function(){
		var id_author = $(this).attr('id');
		var name_edit_author = $('.name_author_edit').val();
		var email = $('.email_author_edit').val();
		var phone = $('.phone_author_edit').val();
		var birthday = $('.birthday_author_edit').val();
		var address = $('.address_author_edit').val();
		$('.form_edit_author').hide();
		$.ajax({
			url: '../book_result/index.php?action=edit_author',
			type: 'GET',
			data: "name_edit_author="+name_edit_author+"&email="+email+"&phone="+phone+"&birthday="+birthday+"&id_author="+id_author+"&address="+address,
			dataType: 'text',
			success: function(result){
				$('.author_content').html(result);
			}
		});
	});
</script>