<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("Failed to connect with database" . mysqli_connect_err());
    }
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $others = $_POST['others'];
    $sqlquery = "INSERT INTO `traveltrip`.`travellerinfo` (`name`, `age`, `gender`, `email`, `phone`, `others`) VALUES
     ('$name', '$age', '$gender', '$email', '$phone', '$others');";
    
    if($con->query($sqlquery)==true){
        echo "Successfully inserted";
    }else{
        echo "Error: $sqlquery <br> $con->error";
    }
    $con->close();
?>