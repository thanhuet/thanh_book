<?php
	//controller add author
	if(isset($_GET['action']) && $_GET['action'] == 'add_author'){
		$model = new author();
		$model->add_author($_GET['name_edit_author_e'],$_GET['email_e'],$_GET['phone_e'],$_GET['birthday_e'],$_GET['address_e']);
		$data_author = $model->show_author();
		require APP_DIR.'/view/list_author.php';
	}
	// show form edit author
	elseif(isset($_GET['action']) && $_GET['action'] == 'form_edit_author'){
		$data_model = new author();
		$data_author = $data_model->get_author($_GET['id']);
		require APP_DIR.'/view/form_edit_author.php';
	}
	//controller edit author
	elseif(isset($_GET['action']) && $_GET['action'] == 'edit_author'){
		$data_model = new author();
		$data_model->edit_author($_GET['id_author'],$_GET['name_edit_author'],$_GET['email'],$_GET['phone'],$_GET['birthday'],$_GET['address']);
		$data_author = $data_model->show_author();
		require APP_DIR.'/view/list_author.php';
	}
	// controller delete author
	elseif(isset($_GET['action']) && $_GET['action'] == 'delete_author'){
		$model = new author();
		$model->delete_author($_GET['delete_author']);
		$data_author = $model->show_author();
		require APP_DIR.'/view/list_author.php';		
	}
	// controller test author
	elseif(isset($_GET['action']) && $_GET['action'] == 'test_author'){
		$data_model = new author();
		$data_author = $data_model->test_author($_GET['name']);
		foreach ($data_author as $value) {
		 	if ($value['Name'] == $_GET['name']){
		 		echo '1';
		 	}
		 	else{
		 		echo '0';
		 	}
		 } 
		
	}
	// //controller search book
	// elseif(isset($_GET['action']) && $_GET['action'] == 'search'){
	// 	$model = new model();
	// 	$data_array = $model->search_book($_GET['search']);
	// 	require APP_DIR.'/view/list_book.php';	
	// }
?>