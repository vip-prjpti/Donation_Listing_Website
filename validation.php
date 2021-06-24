<?php 

    session_start();
 
    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'userregistration');

    $name = $_POST['user'];
    $password = $_POST['password'];
    
    $salt = "userregistration";
    $hashed_password = sha1($password.$salt);

    $s = "select * from usertable where name = '$name' && password = '$hashed_password'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $name;
        header('location:home.php');
    }
    else{
        ?>
        <h1 style="text-align:center; width:100%;
    height:100vh; background-color:#1c1c1d; color:#fff ;
    padding-top: 280px;">Go Back</h1> 
        <!-- header('location:random.html');   -->
        <script>
            alert("Wrong Credentials!! Go Back and login again")
        </script>
        <?php
    }

?>
