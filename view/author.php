<?php require APP_DIR.'/view/form_add_author.php';?>
<?php require APP_DIR.'/view/add_author.php';?>
<div class="form_author"></div>
<div class="author">
<div class="author_content">
	<h1 style="text-align: center;">List Author</h1>
	<div class='container'>
	<table class='table'>
		<thead>
			<tr>
				<td><button class='add_new_author'><i class='fa fa-plus' aria-hidden='true'></i>add new author</button></td>
			</tr>
			<tr>
				<th>Id</th>
				<th>Full name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Birthday</th>
				<th>Address</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach ($data_author as $assoc) { ?>
		<tr><td>
		<?php echo  $assoc['Id'];?>				
		</td><td>
		<?php echo  $assoc['Full_name'];?>
		</td><td>
		<?php echo  $assoc['Email'];?>
		</td><td>
		<?php echo  $assoc['Phone_number'];?>
		</td><td>
		<?php echo  $assoc['Birthday'];?>
		</td><td>
		<?php echo  $assoc['Address'];?>
		</td><td><button class='edit_author' id='"<?php echo $assoc['Id'];?>"'><i class='fa fa-pencil'aria-hidden='true'></i></button></td>
			<td><button class='delete_author' id= '"<?php echo $assoc['Id'];?>"'><i class='fa fa-trash' aria-hidden='true'></i></button></td>
		</td><td>			
	<?php } ?>
	</tbody>
	</table></div>
	</div>
	<script>
		$(document).ready(
			function(){
				$('.author').hide();
				$('.form_edit_author_e').hide();
				$('.button_author').click(function(){
					$('.author').show();
				});

				// click Author
				$(document).on('click','.button_author',function(){
					$('.test').hide();
					$('.author').show();
					$('.select').hide();
					$('.search_input').hide();
				});
			});
	</script>

</div>
	<?php require APP_DIR.'/view/delete_author.php'; ?>
	<?php require APP_DIR.'/view/edit_author.php';?>

