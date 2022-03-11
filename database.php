<?php

//Initialise Variables
$FirstName = $_POST['fname'];
$LastName = $_POST['lname'];
$Email = $_POST['email'];
$msg = $_POST['msg'];


//connect database
$conn = mysqli_connect('localhost','root','','feedback_form');

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect".mysqli_connect_error());
}else{
    
    if ($conn ->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }else{
        $stmt = $conn ->prepare('INSERT INTO feedback_data(fname,lname,email,msg) VALUES(?,?,?,?)');
        $stmt->bind_param('ssss',$FirstName,$LastName,$Email,$msg);
        $stmt->execute();
        include('successful.php');
        $stmt->store_result();
        $stmt->close();
        $conn->close();
    }
}
?>
