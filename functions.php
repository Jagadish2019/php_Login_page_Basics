<?php include "db.php"; ?>

<?php

function showAllData(){
    
global $connection;
$query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        
        die("Not connected".mysqli_error());
    }



while($row = mysqli_fetch_assoc($result)){

    $id = $row['id'];
                            
    echo "<option value='$id'> $id </option>";
        }
}




function Updatetable(){
    global $connection;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "UPDATE users SET ";
    $query.="username = '$username', ";
    $query.="password = '$password' ";
    $query.="where id = $id";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
    
    die("Conneciton failed".mysqli_error($connection));
    
    
    }
}




?>
