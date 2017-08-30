<script>
	$(document).ready(
		function(){
			// open add new author
			$(document).on('click','.add_new_author',function(){
				$('.form_edit_author_e').show();
				$('.name_author_edit_e').val('');
				$('.email_author_edit_e').val('');
				$('.phone_author_edit_e').val('');
				$('.birthday_author_edit_e').val('');
				$('.address_author_edit_e').val('');
				return false;
			});
			// add new author
			$(document).on('click', '.submit_edit_author_e', function(){
				var name_edit_author = $('.name_author_edit_e').val();
				var email = $('.email_author_edit_e').val();
				var phone = $('.phone_author_edit_e').val();
				var birthday = $('.birthday_author_edit_e').val();
				var address = $('.address_author_edit_e').val();
				$('.form_edit_author_e').hide();
				debugger;
				$.ajax({
					url: '../book_result/index.php?action=add_author',
					type: 'GET',
					data: "name_edit_author_e="+name_edit_author+"&email_e="+email+"&phone_e="+phone+"&birthday_e="+birthday+"&address_e="+address,
					dataType: 'text',
					success: function(result){debugger;
						$('.author_content').html(result);
					}
				});
			});
			// close form add author
			$(document).on('click','.cancel_author_edit_e',function(){
				$('.form_edit_author_e').hide();
			});
		});
</script>