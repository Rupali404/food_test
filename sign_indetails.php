<?php 

    //start session
    session_start();

    //incluse database connection value
    include_once'connection.php';
    
    //connect to database
    $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    else{

        echo"Connection Successfully";
    }

    if(isset($_POST['submit'])){
        $user_name=$_POST['user_name'];
        $password=$_POST['password'];

        $query="INSERT INTO food_web(user_name,password)VALUES('$user_name','$password')";
        mysqli_query($db,$query);

        header('location:home.php');
    }
    if(isset($_POST['cancel'])){
            header('location:index.php'); //redirect to home page 
        }

?>