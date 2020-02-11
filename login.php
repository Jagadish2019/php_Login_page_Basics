
<?php

if(isset($_POST['submit'])){
    
    //echo "Yes we got the information";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    
    $connection = mysqli_connect('localhost','root','','loginapp');
        
        if($connection){
            
            echo "Successful";
        } else {
            
            die("database conneciton failed.");
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        
        <div class="col-xs-6">
            
            <form action="login.php" method="post">
                <div class="form-group">
                            <label for="username"> Username </label>
                         <input type="text" name="username" class="form-control">
                </div>
                
                <div class="form-group">
                            <label for=""> Password </label>
                         <input type="password" name="password" class="form-control">
                </div>
                
                <input type="submit" class='btn btn-primary' name="submit" value="submit">
                
            </form>
        </div>
    </div>
</body>
</html>
