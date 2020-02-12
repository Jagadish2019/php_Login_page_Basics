<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php createRows(); ?>


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
            <h1 class="text-center"> CREATE </h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                            <label for="username"> Username </label>
                         <input type="text" name="username" class="form-control">
                </div>
                
                <div class="form-group">
                            <label for="password"> Password </label>
                         <input type="password" name="password" class="form-control">
                </div>
                
                <input type="submit" class='btn btn-primary' name="submit" value="Create">
                
            </form>
        </div>
    </div>
</body>
</html>
