<?php

$con = mysqli_connect('localhost','root','','userregistration');

if($con)
{
    // echo "Connection Succesful";
    ?>

    <script>
        alert('connection successful');
    </script>
    <?php
}
else{
    die ("Connection Failed" . mysqli_connect_error());
}
?>