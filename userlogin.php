<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="userlogin.css">
</head>
<body>
    <div class="div">
    <form action="" method="post">
        <label for="">UserID</label><br>
        <input type="number" name="userid"><br>
        <label for="">Password</label><br>
        <input type="password" name="password" id=""><br>
        <button type="submit" name="login">Login</button><br>
        <a href="createuser.php">New User</a>
    </form>
    </div>


    <?php

        session_start();

        if(isset($_POST['login'])){

            $userid=$_POST['userid'];
            $pass=$_POST['password'];
           
    
            
    
                $conn=mysqli_connect("localhost","root","","userdb");
                if(!$conn){
                    echo "dn not connected" ;
            }

            $sql="select userid,password from createuser where userid='$userid' and password='$pass'";

            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)==1){

                $row=mysqli_fetch_assoc($result);

                

                $_SESSION['userid']=$row['userid'];
                echo "data found";

                header("location:mydetails.php");

            }


        }
        


        ?>


</body>
</html>