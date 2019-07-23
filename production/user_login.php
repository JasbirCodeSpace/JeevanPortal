<?php


 if($_SERVER["REQUEST_METHOD"] == "GET"){
    $email = $_GET["email"];
    $pswrd = $_GET["pswrd"];

    $conn = mysqli_connect("localhost","root","","user") or die ("unsuccessfull");
   //echo $conn;
  

   $query = "select * from user where email='$email' and pswrd='$pswrd' ";
   
  $res = mysqli_query($conn,$query);

        $s=mysqli_fetch_array($conn,$res);   

   if($res){

   
          header("Location: ./user.html");

       }


      else{

          
            echo "Not registered";

       }



 }
?>


