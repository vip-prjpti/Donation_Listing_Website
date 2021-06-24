<?php

    include 'connect.php';

    if(isset($_POST['post_comment'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comtable (name, email, message, date)
        VALUES ('$name','$email','$message',now())";
        
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
    <link rel="stylesheet" href="query.css">
</head>
<body>
<section id="navbar">
        <header>
    <nav>
        <a class="cta" href="index.html"><button>Home</button></a>
        <a class="cta" href="index.html"><button>About Us</button></a>
        <a class="cta" href="faq.html"><button>FAQs</button></a>
        <a class="cta" href="login.php"><button>Go Back</button></a>
    </nav>
</header>
</section>
<section id="wrap">
    <div class="wrapper">
        <form action="" method="post" class="form">
            <input type="text" class="name" name="name" placeholder="name" required>
            <input type="text" class="email" name="email" placeholder="email" required>
            <textarea name="message" cols="30" rows="10" class="message" placeholder="message" required></textarea>
            <br>
            <button type="submit" class="btn" name="post_comment"  onclick="alert('comment posted successfully')">Post</button>
        </form>
    </div>
    </section>
    <div class="content">
        <h1>Comment/Query Box</h1>
        <br><hr><br>
        <?php

            $sql = "SELECT * FROM comtable";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            

        ?>
        <h3><?php echo $row['name']; ?></h3>
        <p><?php echo $row['email']; ?> (<?php echo $row['date']; ?>)</p>
        <p><?php echo $row['message']; ?><p>
        <br>
        <hr>
        <?php } } ?>
    </div>
    
</body>
</html>