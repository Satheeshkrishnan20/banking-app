

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="viewuser.css">
</head>
<body>

<!--  -->

<div class="logout">
            <a href="logout.php">Logout</a>
        </div>
        <div class="admin">
                    <h1>Welcome Admin</h1>
                    <p>User List</p>
    
                    <div class="btn">
                        <a href="admindashboard.php"> <button>Create</button></a>
                        
                        <a href="viewuser.php"><button>Find user</button></a>
                        
                        
                    </div>
                </div>
        <!--  -->

    <div class="form">
    <table>
        <thead>
            <th>userid</th>
            <th>usernmae</th>
            <th>full name</th>
            <th>account number</th>
            <th>phonenumner</th>
            <th>balance</th>
            <th>address</th>
            
            <th>User Type</th>
            </thead>

           
   
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

            $sql="select userid,accountnumber,fullname,username,phonenumber,address,accountbalance,usertype from user";

            $result=mysqli_query($conn,$sql);

            if($result){
                // $row = mysqli_fetch_assoc($result);

                while ($row = mysqli_fetch_row($result)) {
                    echo "<tr>";
                    for($i = 0; $i < 8; $i++){

                        echo '<td> '.$row[$i] . '</td> ';

                    }
                    echo "</tr>";
                    
                }
            }
            else{
                echo "fetch error";
            }
                ?>
                </tbody>

</table>
</div>
</body>
</html>