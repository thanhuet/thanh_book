<?php
	/**
	* 
	*/
	class author
	{
		
		function __construct()
		{
			# code...
		}

		function show_author(){
			global $conn;
			$sql = "SELECT * FROM author";
			$qr = mysqli_query($conn,$sql);
			$author = array();
			while($assoc = mysqli_fetch_assoc($qr)){
				$author[] = $assoc;
			}
			return $author;
		}
		// get book
		function get_author($id){
			global $conn;
			$sql = "SELECT * FROM author WHERE Id = $id";
			$qr = mysqli_query($conn,$sql);
			$author = array();
			while($assoc = mysqli_fetch_assoc($qr)){
				$author[] = $assoc;
			}
			return $author;
		}
		// add author
		function add_author($Name,$Email,$Phone,$Birthday,$Address){
			global $conn;
			$sql = "INSERT INTO author (Full_name,Email,Phone_number,Birthday,Address) VALUES('$Name','$Email','$Phone','$Birthday','$Address')";
			mysqli_query($conn,$sql);
		}
		//delete author
		function delete_author($id){
			global $conn;
			$sql = "DELETE FROM author WHERE Id = $id";
			mysqli_query($conn,$sql);
		}
		//edit author
		function edit_author($Id,$Name,$Email,$Phone,$Birthday,$Address){
			global $conn;
			$sql = "UPDATE author SET 
			Full_name='$Name',Email='$Email',Phone_number='$Phone',Birthday='$Birthday',Address= '$Address' WHERE Id = '$Id'";
			mysqli_query($conn,$sql);	
		}

	}
?>