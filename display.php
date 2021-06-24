<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display</title>

    <link rel="stylesheet" href="main2.css">

</head>
<body>

<section id="navbar">
        <header>
            <a class="cta" href="index.html"><button onclick="alert('Logout successfully')">Logout</button></a>
            <a class="cta" href="home.php"><button onclick="alert('Success')">Go Back</button></a>
        </header>    
    </section>

<div class="main-div">
    <h1>List of available donors</h1>

    <div class="center-div">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>contact</th>
                    <th>address</th>
                    <th>donation type</th>
                </tr>
            </thead>

            <tbody>
            <?php

        include "connection.php";

            $selectquery = "select * from formtable";

            $query = mysqli_query($con, $selectquery);

            $nums = mysqli_num_rows($query);
            
            
            while($res = mysqli_fetch_array($query))
            {
                  ?>  

                <tr>
                    
                    <td><?php echo $res['id'];?></td>
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['email'];?></td>
                    <td><?php echo $res['contact'];?></td>
                    <td><?php echo $res['address'];?></td>
                    <td><?php echo $res['donation_type'];?></td>
                </tr>
            <?php
            }
            
            ?> 
                
            </tbody>
        </table>
    </div>
</div>

    
</body>
</html>

