 <?php   

    session_start();
    header('location:login.php');

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'userregistration'); 

 
    $name = $_POST['user'];
    $password = $_POST['password'];


    $salt = "userregistration";
    $hashed_password = sha1($password.$salt);

    // $hashed_password = md5($pass);

    // $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // $input = "$pass";
    // $hashedPwdInDb = password_hash("$pass", PASSWORD_DEFAULT);

    // password_verify($input, $hashedPwdInDb);
    

    $s = "SELECT * from usertable where name = '$name'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo"Username Already Taken";
    }
    else{
        $reg = "INSERT INTO usertable(name, password, date) VALUES ('$name', '$hashed_password',now())";
        mysqli_query($con, $reg);
        echo" Registration Successful";
    }
