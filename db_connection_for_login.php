<?php


$server = "localhost";
$username = "root";
$password = "";
$database ="users";

$conn = mysqli_connect($server, $username, $password, $database);

$name = isset($_POST['username'])? $_POST['username'] : " ";
$pass= isset($_POST['password']) ? $_POST['password'] : " ";

$login = false;
$showError = " ";
 
if($conn){

   // echo "successfyll";

   $sql = "SELECT * FROM `user_registration` 
                    WHERE userid= '$name' AND password= '$pass'";

    
   $rname= mysqli_query($conn, $sql);

   $num = mysqli_num_rows($rname); 
   
    if($num === 1 || $num > 1){
        
        $login = true;
 
        session_start();

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $name;
        

        echo '<script >';
        echo 'window.location.href="index.php";';
        echo '</script>';
        
         


    }
    else{

        $showError= "invalid credentials ";

        echo '<script >';
        echo 'alert("invalid credentials");window.location.href="login.php";';
        echo '</script>';

    }
    

}
else{

    die("error" .mysqli_connect_error());
}



?>