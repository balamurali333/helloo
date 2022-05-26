<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "fitnessarena";
    $con = mysqli_connect($host,$user,$pass,$db);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $phonenumber= $_POST['phonenumber'];
        $message= $_POST['message'];
        $sql = mysqli_query($con,"INSERT INTO contact(name,email,phone_no,message) Values('$name','$email','$phonenumber','$message')");
        if($sql){
            echo "Successful";
        }
        else{
            echo "Unsuccessful";
        }
    }
?>