

<?php


$server = "localhost";
$username = "root";
$password = "";
$database ="users";

$conn = mysqli_connect($server, $username, $password, $database);

$name = isset($_POST['u_name'])? $_POST['u_name'] : " ";
$pass= isset($_POST['u_pass']) ? $_POST['u_pass'] : " ";
$cpass=isset($_POST['cu_pass']) ? $_POST['cu_pass'] : " ";


 $showAlert = false;  
 $showError = false;
 
if($conn){

   // echo "successfyll";
     
   $exists=false;
    
     if($pass == $cpass && $exists == false){

    $sql= "INSERT INTO `user_registration` (`userid`, `password`) VALUES ( '$name', '$pass')";
    
    $result = mysqli_query($conn, $sql);
      
    if($result){
          
        $showAlert= true;
        echo "successfyll";

        }
        else{

            $showError= true;
            echo "successfyll 1123";
        }
 
     }

}
else{

    die("error" .mysqli_connect_error());
}

if($showAlert === true){

     $sql2 = "CREATE TABLE $name (srn int NOT NULL AUTO_INCREMENT,
       productid int NOT NULL,
       productname varchar(255),
       productq int NOT NULL,
       payments varchar(255),
       dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (srn));";

    $result2 = mysqli_query($conn, $sql2);    


        echo '<script>';
        echo 'alert(" registration !"); window.location.href="Login.php";';
        echo '</script>';

} 


?>