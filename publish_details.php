<?php
	//start session
	 session_start();
    include_once'connection.php';

    $db=mysqli_connect($servername,$username,$password,$dbname);
	
	if ($db->connect_error) 
	{
		die("Connection failed: ".$db->connect_error);
	}
	
	if(isset($_POST['submit']))
		{

				$title= $_POST['title'];
				$comment = $_POST['comment'];
				$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$user_id=$_POST['userid'];

				$query = "INSERT INTO publish (title, comment,image,user_id) VALUES ('$title','$comment','$image','$user_id')";
				
				//session
				$user_id = $_SESSION['user_id'];
				if(mysqli_query($db,$query)){
					$_SESSION['msg']="Publish Done sucessfully";
					header('location:home.php'); //redirect to index page after inserting
				}else{
					echo $db->error;
				}
		
			}

		if(isset($_POST['cancel'])){
			header('location:home.php'); //redirect to home page 
		}

?>