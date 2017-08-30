<?php
	require APP_DIR.'/model/author.php';
	require APP_DIR.'/model/model.php';
	require APP_DIR.'/controller/controller_author.php';
	class controller
	{
		
		function __construct()
		{
			# code...
		}
		function show_book(){
			
			$data_model = new model();
			$data_array = $data_model->show_book();
			$data_select_author = $data_model->show_select_author();
			$data_select_category = $data_model->show_select_category();
			$data_author = $data_model->show_author();
			require APP_DIR.'/view/book.php';
		}
		function add_book($Name,$Categories,$Author,$Published_year){
			$book = new model();
			$book->add_book($Name,$Categories,$Author,$Published_year);			
		}
	}
	//controller add book
	if(isset($_GET['action']) && $_GET['action'] == 'add_book'){
		$model = new controller();
		$model->add_book($_GET['name'],$_GET['category'],$_GET['author'],$_GET['year']);
		$data_model = new model();
		$data_array = $data_model->show_book();
		require APP_DIR.'/view/list_book.php';
	}
	// show form edit book
	elseif(isset($_GET['action']) && $_GET['action'] == 'form_edit_book'){
		$data_model = new model();
		$data_array = $data_model->get_book($_GET['edit']);
		require APP_DIR.'/view/form_edit_book.php';
	}
	//controller edit book
	elseif(isset($_GET['action']) && $_GET['action'] == 'edit_book'){
		$data_model = new model();
		$data_model->edit_book($_GET['id'],$_GET['name_edit'],$_GET['category'],$_GET['author'],$_GET['year']);
		$data_array = $data_model->show_book();
		require APP_DIR.'/view/list_book.php';
	}
	// controller delete book
	elseif(isset($_GET['action']) && $_GET['action'] == 'delete_book'){
		$model = new model();
		$model->delete_book($_GET['delete']);
		$data_array = $model->show_book();
		require APP_DIR.'/view/list_book.php';		
	}
	//controller search book
	elseif(isset($_GET['action']) && $_GET['action'] == 'search'){
		$model = new model();
		$data_array = $model->search_book($_GET['search']);
		require APP_DIR.'/view/list_book.php';	
	}
	// category
	elseif(isset($_GET['action']) && $_GET['action'] == 'category'){
		$model = new model();
		$data_array = $model->category($_GET['value_author'],$_GET['value_cate']);
		require APP_DIR.'/view/list_book.php';
	}
	// start file
	elseif(!isset($_GET['action']))
	{
		$book_model = new controller();
		$book_model->show_book();
	}
?>