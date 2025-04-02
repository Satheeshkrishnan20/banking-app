<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="createuser.css">
</head>
<body>

<div class="div">
<form action="" method="post">
        <label for="">UserID</label><br>
        <input type="number" name="userid"><br>
        <label for="">Password</label><br>
        <input type="password"  id="" name='password'><br>
        <label for="">Confirm Password</label><br>
        <input type="password"  id="" name='confirmpassword'><br>
        <button type="submit" name="create">Create Account</button>
        
    </form>

    </div>



    <?php 


    if(isset($_POST["create"])){

   

        $userid=$_POST['userid'];
        $pass=$_POST['password'];
        $copass=$_POST['confirmpassword'];

        if($pass==$copass){

            $conn=mysqli_connect("localhost","root","","userdb");
            if(!$conn){
                echo "dn not connected" ;
            }

            $sql="select userid from user where userid='$userid'";

            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)==1){

                $create="insert into createuser (userid,password) values ('$userid','$pass')";

                $result=mysqli_query($conn,$create);

                header("location:userlogin.php");

            }
            else{
                echo "data not inserted";
            }


        }
    }


?>


</body>
</html>