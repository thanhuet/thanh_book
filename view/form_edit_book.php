	<div>
	<?php foreach ($data_array as $assoc){ ?>
		<form action="" method="get" accept-charset="utf-8" class="form_book">
			Name 
			<input type="text" name="" class="name_book_edit" value="<?php echo  $assoc['Name'];?>"><br>
			Categories
			<input type="text" name="" class="cate_book_edit" value="<?php echo  $assoc['Categories'];?>"><br>
			Author
			<input type="text" name="" class="author_book_edit" value="<?php echo  $assoc['Author'];?>"><br>
			Published_year
			<input type="date" name="" class="pub_year_book_edit" value="<?php echo  $assoc['Published_year'];?>"><br>
			<input type="button" name="" class="submit_edit_book" id="<?php echo $assoc['Id'];?>" value="submit">
			<input type="button" name="" class="cancel_book_edit" value="cancel">
		</form>
		<?php } ?>
	</div>