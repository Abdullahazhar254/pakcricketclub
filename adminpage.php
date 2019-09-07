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
    session_start();
    if(!isset($_SESSION['user'])){
        header('location:login.php');
    }
?>
    
        <div class="container center-div shadow"  style="background:lightgray;text-align:center">
            
                <div class="heading text-center text-uppercase">
                    <strong>Welcome "<?php echo $_SESSION['user'] ?>" :)</strong>
                </div>
                <a href="logout.php" class="btn btn-danger">Logout</a><br><br>
        </div>    
    
</body>
</html>