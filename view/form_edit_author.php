<div>
	<?php foreach ($data_author as $assoc){ ?>
	<form action='' method='get' accept-charset='utf-8' class='form_edit_author'>
		Full name 
		<input type='text' name='' class='name_author_edit' value="<?php echo $assoc['Full_name'];?>">
		<br>
		Email
		<input type='text' name='' class='email_author_edit' value="<?php echo $assoc['Email'];?>">
		<br>
		Phone number
		<input type='number' name='' class='phone_author_edit' value="<?php echo $assoc['Phone_number'];?>">
		<br>
		Birthday
		<input type='date' name='' class='birthday_author_edit' value="<?php echo $assoc['Birthday'];?>">
		<br>
		Address
		<input type='text' name='' class='address_author_edit' value="<?php echo $assoc['Address'];?>">
		<br>
		<input type='button' name='' class='submit_edit_author' id="<?php echo $assoc['Id'];?>" value='submit' >
		<input type='button' name='' class='cancel_author_edit' value='cancel'>
	</form>	
	<?php } ?>
</div>