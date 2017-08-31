	<div class="category">
		<h2 class="navbar-header" style="color: black;margin-right: 40px;margin-top: 0px;">BOOK MANAGE</h2>
		<nav class="navbar navbar-light bg-faded ">	
		<form class="form-inline">			
			<li class="btn btn-primary" ><span  name="" value="" class="button_book">Book</span></li>
			<li class="btn btn-primary" ><span  name="" value="" class="button_author">Author</span></li>
			<input style="float: right;width: 400px;" type="text" name="" class="search_book form-control mr-sm-10" placeholder= 'search book'></li>
			</form>
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
			<input type="submit" name="" class="submit_select btn btn-primary" value="submit" />
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
	$('.search_book').focus(function() {
		$('.test').show();
		$('.author').hide();
	});
</script>