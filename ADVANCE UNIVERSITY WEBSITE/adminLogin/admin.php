



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Login_Page</title>
    <style>
        body{
            background-color:#BFEAFD;
            font-family:'Roboto',sans-serif;
            background-image:url("https://images.static-collegedunia.com/public/college_data/images/appImage/25392_AU_New.jpg?tr=c-force");
            background-position:center;
            background-size:cover;
            background-repeat:no-repeat;
            height:800px;
        }  
        .container{
            position:absolute;
            top:40%;
            left:40%;
            background-color:skyblue;
                width:400px;
                height:60%;
                margin-bottom:400px;
                border-radius:4px;
                

        } 
        h1{
            text-align: center;
            padding-top:20px;
        } 
        form label{
            display:flex;
            margin-top:20px;
            margin-left:30px;
            font-size:19px;
        } 
        form input{
            width:80%;
            padding:7px;
            margin-left:30px;
            border:none;
            border:1px solid grey;
            border-radius:6px;
            outline:none;
        } 
        button{
            width:200px;
            height:35px;
            text-align:center;
            margin-top:20px;
            margin-left:100px;
            border:none;
            background-color:#49c1a2;
            color:white;
            
        }
            
    </style>
    <script>


    </script>
</head>
<body>

        <?php

        include "../Aadmindb.php";
        if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $password=$_POST['password'];

            $user_search="select * from table_login where username='$username'";
            $query=mysqli_query($conn,$user_search);

            $email_count=mysqli_num_rows($query);

            if($email_count){
                $user_pass=mysqli_fetch_assoc($query);
                $pass=$user_pass['password'];
                 if($pass === $password){
                    ?>
                    <script>
                        alert("Login Successfully Welcome on the site ");
                    </script>
                    <?php
                     
                 }else{
                    ?>
                    <script>
                        alert("password incorrect");
                    </script>
            
                    <?php
                 }
            }else{
                echo "plese check again and enter correct username  with password";
            }
        }







        ?>
    <div class="container">
        <h1>Admin Login</h1>
        <form action="admin.php" method="post">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" value="submit" name="submit">submit</button>

        </form>
    </div>
</body>
</html>