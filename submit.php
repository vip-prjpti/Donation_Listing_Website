<?php 

    session_start();
    header('location:home.php');

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'userregistration');

 
    $name = $_POST['user-name'];
    $age = $_POST['user-age'];
    $email = $_POST['user-email'];
    $contact = $_POST['user-number'];
    $address = $_POST['user-address'];
    $donation_type = $_POST['user-donation'];

    $s = "SELECT * from formtable where name = '$name'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo"Username Already Taken";
    }
    else{
        $reg = "INSERT INTO formtable(name, age, email, contact, address, donation_type) VALUES ('$name', '$pass','$email','$contact','$address','$donation_type')";
        mysqli_query($con, $reg);
        
    }
        echo "Form submitted successfully";
?>