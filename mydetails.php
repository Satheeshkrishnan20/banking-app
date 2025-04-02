<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="detail.css">
</head>
<body>

    



    <?php

        session_start();

    if(isset($_SESSION['userid'])){

    

        $userid=$_SESSION['userid'];

        
        $conn=mysqli_connect("localhost","root","","userdb");
        if(!$conn){
            echo "dn not connected" ;
        }


        $sql="select userid,accountnumber,fullname,username,phonenumber,address,accountbalance,usertype from user where userid='$userid'";


        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_assoc($result);

            $userid=$row['userid'];
            $accountnumber=$row['accountnumber'];
            $fullname=$row['fullname'];
            $username=$row['username'];
            $phonenumber=$row['phonenumber'];
            $address=$row['address'];
            $accountbalance=$row['accountbalance'];
            $usertype=$row['usertype'];
            
        }

    }
   

?>


<div class="my">
<div class="mydetail">

        <label for="">userid</label><br>
        <p><?php echo $userid ?> </p>
        <label for="">Account Number</label><br>
        <p><?php echo $accountnumber ?></p>
        <label for="">Full Name</label><br>
        <p><?php echo $fullname ?></p>
        <label for="">UserName</label><br>
        <p><?php echo $username ?></p>
        <label for="">Phone Number</label><br>
        <p><?php echo $phonenumber ?></p>
        <label for="">Address</label><br>
        <p><?php echo $address ?></p>
        <label for="">Account Balance</label><br>
        <p><?php echo $accountbalance ?></p>
        <label for="">User Type</label><br>
        <p><?php echo $userid ?></p>
        <label for="">userid</label><br>
        <p><?php echo $usertype ?></p>

    </div>
    </div>
    
</body>
</html>