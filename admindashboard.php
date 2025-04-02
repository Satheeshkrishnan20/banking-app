
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="admindashboard.css">
</head>
<body>

            <?php

            session_start();

            if(empty($_SESSION['user'])){

                header("location:index.php");

            }

            ?>
            <!--  -->

            <div class="logout">
                    <a href="logout.php">Logout</a>
                </div>

                <div class="admin">
                    <h1>Welcome Admin</h1>
                    <p>Dashboard</p>
    
                    <div class="btn">
                        
                        <a href="viewuser.php"><button>View user</button></a>
                        <a href="find.php"><button>Find user</button></a>
                        
                        
                    </div>
                </div>

            <!--  -->
                <div class="cre">
                <div class="create">
                    <h1>Create user</h1>
                </div>
                </div>


                <div class="from">

                <form action="process.php" method="post">

                <div>

                <label for="">Account Number</label><br>
                <input type="number" name="accountnumber"><br>
                <label for="">User Name</label><br>
                <input type="text" name="username"><br>
                <label for="">Full Name</label><br>
                <input type="text" name="fullname"><br>
                <label for="">Phone Number</label><br>
                <input type="number" name="phonenumber"><br>

                </div>
                <div>
                <label for="">Account balance</label><br>
                <input type="number" name="accountbalance"><br>
               
                <label for="" class="adress">Address</label><br>
                <textarea name="address" id=""></textarea><br>
               
                <label for="">User Type</label><br>
                <input type="radio" value="User" name="gender">
                <label for="">User</label><br>
                <input type="radio" value="admin" name="gender">
                <label for="">Admin</label><br>

                <button type="submit">Submit</button>

                </div>
                </form>
                </div>

            

    
</body>
</html>
