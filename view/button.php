	<div class="category">
		<nav class="navbar navbar-inverse">
		<div class="btn-group btn-group-justified">BOOK</div>
		<ul class="">
			<li class="btn btn-success"><input type="button" name="" value="Book" class="button_book"></li>
			<li class="btn btn-success"><input type="button" name="" value="Author" class="button_author"></li>
			<li class="" style=""><input type="text" name="" class="search_book" placeholder= 'search book'></li>
			</ul>
		</nav>
		<div class="select">
			<br><br>
			<h3>Filter Book</h3>
			<br>
			<select name="" class="select_author">
				<option value="">Select Author</option>
				<?php
					foreach ($data_select_author as $assoc) {
				?>
				<option ><?php echo $assoc['Author'];?></option>
				<?php
					}
				?>
				
			</select>
			<select class="select_category" id="">
				<option value="">Select Categories</option>
				<?php
					foreach ($data_select_category as $assoc) {
				?>
				<option><?php echo $assoc['Categories'];?></option>}
				<?php
					}
				?>
			</select>
			<input type="submit" name="" class="submit_select" value="submit" />
		</div>
</div>
<script>
	$('.submit_select').click(function(){
		var value_author = $('.select_author').val();
		var value_cate = $('.select_category').val();
		$.ajax({
			url: '../book_result/index.php?action=category',
			type: 'GET',
			data: "value_author="+value_author+"&value_cate="+value_cate,
			dataType: 'text',
			success: function(result){
				$('.test').html(result);
			}
		});
	});
</script>