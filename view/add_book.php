<script>
	// hide form add new book
	$('.form_book').hide(); 

	// open form add new book
	$(document).on('click','.add_new_book',function(){
		$('.form_book').show();
		$('.name_book').val('');
		$('.cate_book').val('');
		$('.author_book').val('');
		$('.pub_year_book').val('');
		return false;
	});
	function test_author(name_author){
			$.ajax({
			url: '../book_result/index.php?action=test_author',
			type: 'GET',
			data: "name="+name_author,
			dataType: 'text',

			success: function(result){
				if(result=='1'){
					return 1;
				}
				else{
					return 0;
				}
			}
		});
	}
	// add book
	$(document).on('click', '.submit_book', function(){
		var id = $(this).attr('id');
		var name = $('.name_book').val();
		var cate = $('.cate_book').val();
		var author = $('.author_book').val();
		var year = $('.pub_year_book').val();
		$('.form_book').hide();
		$.ajax({
			url: '../book_result/index.php?action=add_book',
			type: 'GET',
			data: "name="+name+"&category="+cate+"&author="+author+"&year="+year,
			dataType: 'text',
			success: function(result){
				$('.test').html(result);
				// if(test_author(name)){
				// 	alert('bạn hãy nhập thông tin tác giả');
				// }

			}
		});		
	});
	// cancel form add book
	$(document).on('click','.cancel_book',function(){
		$('.form_book').hide();
		
	})
</script>