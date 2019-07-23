<?php


 if($_SERVER["REQUEST_METHOD"] == "GET"){
    $state = $_GET["state"];
    $pswrd = $_GET["pswrd"];

    $conn = mysqli_connect("localhost","root","","user") or die ("unsuccessfull");
   //echo $conn;
  

   $query = "select * from admin where state_name='$state' and password='$pswrd' ";
   
  $res = mysqli_query($conn,$query);

        $s=mysqli_fetch_array($res);   

   if($res){

   
          header("Location: ./admin_dashboard1.html");

       }


      else{

         // header("Location: ./user.html");
            echo "Not registered";

       }



 }
?>


