<?php
	/**
	* 
	*/
	class model
	{
		
		function __construct()
		{
			# code...
		}
		// get book and show
		function show_book(){
			global $conn;
			$sql = "SELECT * FROM book_data";
			$qr = mysqli_query($conn,$sql);
			$book = array();
			while($assoc = mysqli_fetch_assoc($qr)){
				$book[] = $assoc;
			}
			return $book;
		}
		// get book
		function get_book($id){
			global $conn;
			$sql = "SELECT * FROM book_data WHERE Id = $id";
			$qr = mysqli_query($conn,$sql);
			$book = array();
			while($assoc = mysqli_fetch_assoc($qr)){
				$book[] = $assoc;
			}
			return $book;
		}

		// edit book
		function edit_book($Id,$Name,$Categories,$Author,$Published_year){
			global $conn;
			$sql = "UPDATE book_data SET 
			Name = '$Name',Categories = '$Categories',Author = '$Author',Published_year = '$Published_year' WHERE Id = '$Id'";
			mysqli_query($conn,$sql);
		}

		//delete book
		function delete_book($id){
			global $conn;
			$sql = "DELETE FROM book_data WHERE Id = $id";
			mysqli_query($conn,$sql);
		}
		// search book
		function search_book($search){
			global $conn;
			$sql = "SELECT * FROM book_data WHERE Name LIKE '%$search%' OR Categories LIKE '%$search%' OR Author LIKE '%$search%' OR Published_year LIKE '%$search%'";		
			$qr = mysqli_query($conn,$sql);
			$book = array();
			while($assoc = mysqli_fetch_assoc($qr)){
				$book[] = $assoc;
			}
			return $book;
		}
		function show_select_author(){
			global $conn;
			$sql = "SELECT DISTINCT Author FROM book_data";
			$qr = mysqli_query($conn,$sql);
			$book = array();
			while($assoc = mysqli_fetch_assoc($qr)){
				$book[] = $assoc;
			}
			return $book;
		}
		function show_select_category(){
			global $conn;
			$sql = "SELECT DISTINCT Categories FROM book_data";
			$qr = mysqli_query($conn,$sql);
			$book = array();
			while($assoc = mysqli_fetch_assoc($qr)){
				$book[] = $assoc;
			}
			return $book;			
		}
		function show_author(){
			global $conn;
			$sql = "SELECT * FROM author";
			$qr = mysqli_query($conn,$sql);
			$book = array();
			while($assoc = mysqli_fetch_assoc($qr)){
				$book[] = $assoc;
			}
			return $book;				
		}
		function add_book($Name,$Categories,$Author,$Published_year){
			global $conn;
			$sql = "INSERT INTO book_data (Name,Categories,Author,Published_year) VALUES('$Name','$Categories','$Author','$Published_year')";		
			mysqli_query($conn,$sql);
		}
		function category($author,$cate){
			global $conn;
			if($author=='' && $cate==''){
				$sql = "SELECT * FROM book_data";
			}
			elseif($author=='' && $cate!=''){
				$sql = "SELECT * FROM book_data WHERE Categories='$cate'";
			}
			elseif($author!='' && $cate==''){
				$sql = "SELECT * FROM book_data WHERE Author='$author'";
			}
			else{
				$sql = "SELECT * FROM book_data WHERE Author='$author' AND Categories='$cate'";
			}			
			$qr = mysqli_query($conn,$sql);
			$book = array();
			while($assoc = mysqli_fetch_assoc($qr)){
				$book[] = $assoc;
			}
			return $book;				
		}
	}
?>