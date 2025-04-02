<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    
            <?php
                session_start();

                if(empty($_SESSION['user'])){

                    header("location:index.php");

                    exit();
                }
                
                  
                ?>

                <div class="logout">
                    <a href="logout.php">Logout</a>
                </div>

                    
                    <div class="admin">
                    <h1>Welcome Admin</h1>
                    <p>Dashboard</p>
    
                    <div class="btn">
                        <a href="admindashboard.php"> <button>Create</button></a>
                        <a href="viewuser.php"><button>View user</button></a>
                        <a href="find.php"><button>Find user</button></a>
                        
                        
                    </div>
                </div>




           

           
    </div>
</body>
</html>