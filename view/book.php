<?php require APP_DIR.'/view/header.php';?>
<body>
	<?php require APP_DIR.'/view/button.php';?>
	<?php require APP_DIR.'/view/search_book.php';?>
	<?php require APP_DIR.'/view/form_add_book.php';?>
	<!-- class author -->
	<?php require APP_DIR.'/view/author.php';?> 

	<!-- class test -->
	<div class="test"> 
		<h1 style="text-align: center;">List Book</h1>
		<div class='container'>
			<table class='table'>
				<thead>
				<tr>
					<td><button class='add_new_book'><i class='fa fa-plus' aria-hidden='true'></i>add new book</button></td>
				</tr>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Categories</th>
						<th>Author</th>
						<th>Published_year</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>			
			
				<?php foreach ($data_array as $assoc){ ?>
					<tbody><tr><td>
					<?php echo  $assoc['Id']; ?>				
					</td><td>
					<?php echo  $assoc['Name']; ?>
					</td><td>
					<?php echo  $assoc['Categories']; ?>
					</td><td>
					<?php echo  $assoc['Author']; ?>
					</td><td>
					<?php echo  $assoc['Published_year'];?>
					</td><td><button class='edit_book' id='"<?php echo $assoc['Id']; ?>"'>
					<i class='fa fa-pencil' aria-hidden='true'></i></button></td>
					<td><button class='delete_book' id= '"<?php echo $assoc['Id'];?>"
					'><i class='fa fa-trash' aria-hidden='true'></i></button></td>
				</tr></tbody>

				<?php } ?>
			</table>
		</div>
	</div>

	<script>
		$(document).ready(function(){
			// click Book
			$(document).on('click','.button_book',function(){
				$('.author').hide();
				$('.test').show();
				$('.select').show();
				$('.search_input').show();
			});

			$('.submit_select').click(function(){
				var value_author = $('.select_author').val();
				var value_cate = $('.select_category').val();
				$.ajax({
					url: '../book_result/controller/controller.php',
					type: 'GET',
					data: "value_author="+value_author+"&value_cate="+value_cate,
					dataType: 'text',
					success: function(result){
						$('.test').html(result);
					}
				});
			});
		});

	</script>
	<?php require APP_DIR.'/view/edit_book.php';?>
	<?php require APP_DIR.'/view/add_book.php';?>
	<?php require APP_DIR.'/view/delete_book.php';?>
	</div>
</body>

