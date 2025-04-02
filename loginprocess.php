

<?php

    session_start();

    
   

    if(empty($_SESSION['user'])){

        header("location:index.php");

    }

    $conn=mysqli_connect("localhost","root","","bank");


    if(!$conn){
        echo "dn not connected" ;
    }

    if(isset($_POST['login'])){

        $name=$_POST['username'];
        $pass=$_POST['password'];

        $sql="SELECT * from admin WHERE username='$name' and password='$pass' ";

        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1){

            $row = mysqli_fetch_assoc($result);

            $_SESSION["user"]="hello";

            header("location:welcome.php");
            exit();

            // echo "name :" .$row['username'] . "pass :" . $row["password"] ;
        }
        else{
            echo "invalid username and password";
        }

        mysqli_close($conn);




    }