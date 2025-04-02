

<?php

    
session_start();

if(empty($_SESSION['user'])){

    header("location:index.php");

}

    
    $conn=mysqli_connect("localhost","root","","userdb");



    if(!$conn){
        echo "dn not connected" ;
    }

    
    $accountnumber=$_POST["accountnumber"];
    $fullname=$_POST["fullname"];
    $username=$_POST["username"];
    $phonenumber=$_POST["phonenumber"];
    $address=$_POST["address"];
    $accountbalance=$_POST["accountbalance"];
    
    $gender=$_POST["gender"];
    
    $sql="insert into user (accountnumber,fullname,username,phonenumber,address,accountbalance,usertype) values ('$accountnumber','$fullname','$username','$phonenumber','$address','$accountbalance','$gender')";
    
    $result=mysqli_query($conn,$sql);

    if(!$result){
        echo "db err";
    }
    
?>