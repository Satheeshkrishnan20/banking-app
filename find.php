<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>




    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    
        <h1>Enter User ID</h1>
        <input type="number" name="userid">
        <button type="submit" name="find">Find</button>
    </form>
    
<div class="table">
    <table>

    <?php if(isset($_POST)){

   
       echo " <thead>
            <th>userid</th>
            <th>usernmae</th>
            <th>full name</th>
            <th>account number</th>
            <th>phonenumner</th>
            <th>balance</th>
            <th>address</th>
            
            <th>User Type</th>
            </thead>
            ";

        }
   ?>
<tbody>

    <?php 
         session_start();
           

         if(empty($_SESSION['user'])){

             header("location:index.php");

             exit();
         }

        $conn=mysqli_connect("localhost","root","","userdb");
        if(!$conn){
            echo "dn not connected" ;
        }

        if(isset($_POST['find'])){

       

            $userid=$_POST['userid'];

        $sql="select userid,accountnumber,fullname,username,phonenumber,address,accountbalance,usertype from user where userid='$userid'";

        $result=mysqli_query($conn,$sql);

       if( $row=mysqli_fetch_row($result)){

           echo"<tr>";
           for($i=0;$i<8;$i++){
    
              
               echo '<td> '.$row[$i] . '</td> ';
           }
    
            echo"</tr>";
       }
       else{
        echo "<td>No data found </td>";
       }


    }
    ?>

</tbody>
</div>


<style>

    table,th,tbody,tr,td{
        border:1px solid black;
        border-collapse:collapse;
        padding:7px;
    }
    thead{
        background-color:blue;
        color:white;
    }
    body{
        text-align:center;
    }
    .table{
        display:flex;
        justify-content:center;
        margin-top:3%;
    }
    .he{
        width: 100%;
        border-collapse:collapse;
    }

</style>


</body>
</html>