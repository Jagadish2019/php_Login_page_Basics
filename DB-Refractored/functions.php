<?php include "db.php"; ?>

<?php


function createRows() {
    
if(isset($_POST['submit'])){
    global $connection;
    //echo "Yes we got the information";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    
//    $connection = mysqli_connect('localhost','root','','loginapp');
//        
//        if($connection){
//            
//            echo "Successful";
//        } else {
//            
//            die("database conneciton failed.");
//        }
    
    $query = "INSERT INTO users(username,password) ";
    $query.= "VALUES('$username','$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        
        die("Not connected".mysqli_error());
    } else {
        
        echo "Record created";
    }
    
    
    }
}
    

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
    if(isset($_POST['submit'])){
        
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
}


function deleteRows(){
    global $connection;
    
    if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "DELETE FROM users ";
//    $query.="username = '$username', ";
//    $query.="password = '$password' ";
    $query.="where id = $id";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
    
    die("Conneciton failed".mysqli_error($connection));
    } else {
        
        echo "Record deleted";
    }
  }
}


?>
