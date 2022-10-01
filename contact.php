<?php
 $insert = false;
if(isset($_POST['email'])){//if it is true means if anyone give request of name then it will run


    $server = "localhost";
    $username = "root";
    $password = "";

    //connection creation
    $con = mysqli_connect($server, $username,$password);

    if(!$con){
        die("Connection to the database failed due to ". mysqli_connect_error());
    }
    echo "Thank You So much For Your Feedback!";
   //Insert the values to the database and make variable , we want to insert
   //requests from post those values will come to this variables
   $email = $_POST['email'];
   $password = $_POST['password'];
   $add = $_POST['add'];
   $add2 = $_POST['add2'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip = $_POST['zip'];
   $Query = $_POST['Query'];
   $about = $_POST['about'];
   $elaborate = $_POST['elaborate'];
   
   

       $sql = "INSERT INTO `vcp_Contact`.`contact_list`(`Email`, `Password`, `Address`, `Address2`, `City`, `State`, `Zip`, `Query`, `About`, `Elaborate`) VALUES ('$email', '$password', '$add', '$add2', '$city', '$state', '$zip', '$Query', '$about', '$elaborate');";

//   $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp()); ";
//    $sql= "INSERT INTO `contact_list` (`Email`, `Password`, `Address`, `Address2`, `City`, `State`, `Zip`, `Query`, `About`, `Elaborate`) VALUES ('$email', '$password', '$add', '$add2', '$city', '$state', '$zip', '$Query', '$about', '$elaborate');";
//    echo $sql;

   //run those opeartion -> object operator
   if($con->query($sql) ==TRUE){
    // echo "Successfully inserted";
    $insert = true;
   }
   else{
    echo "Error: $sql <br> $con->error";
   }

   $con->close();
}
?>