<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style>
    *{
        margin: 0;
        padding: 0
    }
    .center-div{
        position: absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
    }
    .heading{
        width:100%;
        line-height:80px;
        font-size:1.4rem;
        background: -webkit-linear-gradient(left, #0072ff,#8811c5);
        color:white;
    }
    form{
        width:400px;
    }
    </style>
</head>
<body>
<?php
    include "connection.php";
    session_start();
    if(isset($_POST['submit']))
    {
        $username=$_POST['txtname'];
        $password=$_POST['txtpass'];

        $query="SELECT * FROM admintab WHERE ad_user='$username' AND ad_pass='$password'";
        $result=mysqli_query($link,$query);
        $row = mysqli_num_rows($result);
        if($row == 1)
        {
            echo "Login Succesfull";
            $_SESSION['user']= $username;
            header('location:adminpage.php');
        }
        else{
            echo "Login Failed";
            header('location:login.php');
        }
    }
?>
    
        <div class="container center-div shadow"  style="background:lightgray;text-align:center">
            
                <div class="heading text-center text-uppercase">
                    <strong>Admin login</strong>
                </div>
                <div class="col-lg-4"></div>
                    <div class="col-lg-4">         
                        <form  method="post">
                            
                            <div class="form-group">
                                <label><span class="glyphicon glyphicon-user"></span> Username:</label>
                                <input type="text" name="txtname" class="form-control inputelement" placeholder="Enter Name" required />
                            </div>
                            <div class="form-group">
                                <label><span class="glyphicon glyphicon-list-alt"></span> Password:</label>
                                <input type="Password" name="txtpass" class="form-control inputelement" placeholder="Enter Course" required />
                            </div>
                            <input type="submit" name="submit" value="Login" class="btn btn-success" /><br><br>
                                            
                        </form>
                    </div>
                <div class="col-lg-4"></div>    
            
        </div>    
    
</body>
</html>