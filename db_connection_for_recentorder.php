
<?php
  
   session_start();

   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
 
      echo '<script >';
      echo 'window.location.href="Login.php";';
      echo '</script>';

      exit;     
   }
   else{
     
    $server = "localhost";
    $username = "root";
    $password = "";
    $database ="users";
    
    $conn = mysqli_connect($server, $username, $password, $database);

    
    //--------------------------------------------------------------------------------
    $productid = isset($_POST['productid'])? $_POST['productid'] : " ";
    $productname= isset($_POST['productname']) ? $_POST['productname'] : " ";
    $productq = isset($_POST['productq']) ? $_POST['productq'] : " ";
    $payment = isset($_POST['payments']) ? $_POST['payments'] : " ";
    
    $showAlert = false;
    $showError = false;
     
    if($conn){
    
       $sql = "INSERT INTO `yagnik` (`productid`, `productname`, `productq`, `payments`, `dt`) VALUES ('$productid', '$productname', '$productq', '$payment', current_timestamp())";

       $result = mysqli_query($conn, $sql);

       if($result){

          $showAlert = true;

          echo '<script >';
          echo 'alert("data Add successfully!");window.location.href="index.php";';
          echo '</script>';

       }
       else{

        $showError = true;
        
        echo '<script >';
        echo 'alert("we detect any error please try again!");window.location.href="index.php";';
        echo '</script>';

       }
        
    }
    else{
    
        die("error" .mysqli_connect_error());
    }
    
    
   }
?>