<?php

    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }

?>

<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="main1.css">
</head>
<body>
    <section id="navbar">
        <header>
        <h3> Welcome <?php echo $_SESSION['username']; ?></h3>
            <nav>
                <ul class="nav_links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">About Us</a></li>
                    <li><a href="index.html">Contact Us</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="query.php">Query/Feedback</a></li>
                </ul>
            </nav>
            <!-- <a class="cta" href="logout.php"><button>Logout</button></a> -->
            <a class="cta" href="logout.php"><button onclick="alert('Logout successfully')">Logout</button></a>
        </header>    
    </section>
    <!-- <a href="logout.php">Logout</a> -->
    
    <section class="left-section">
        <div id="left-cover" class="cover cover-hide">
            <img src="gray.png" alt="">
            <h1>Want to Accept?</h1>
            <h3> Donations</h3>
            <button type="button" class="switch-btn" onclick="location.reload()">See available donations!</button>
        </div>
        <div id="left-form" class="form fade-in-element">
            <h1>List of Donors</h1>
            
            <form action="display.php" method="post">
                
                <input type="submit" name="login-btn" class="btn" value="Display">
            </form>
        </div>
    </section>

    <section class="right-section">
        <div id="right-cover" class="cover fade-in-element">
            <img src="gray.png" alt="">
            <h1>Want to donate?</h1>
            <h3>Fill form</h3>
            <button type="button" class="switch-btn" onclick="switchSignup()">Donate</button>
        </div>
        <div id="right-form" class="form form-hide">
            <h2> <br><br> </h2>
            <form action="submit.php" method="post">
                <input type="text" name="user-name" class="input-box" placeholder="Full Name" required>
                <input type="text" name="user-age" class="input-box" placeholder="Age" required>
                <input type="email" name="user-email" class="input-box" placeholder="E-mail" required>
                <input type="text" name="user-number" class="input-box" placeholder="Phone Number" required>
                <input type="text" name="user-address" class="input-box" placeholder="Address" required>
                <input type="text" name="user-zip" class="input-box" placeholder="ZIP Code" required>
                <input type="textarea" name="user-donation" class="input-box" placeholder="What you want to donate?" required>
                <input type="submit" name="signup-btn" class="btn"  value="Submit">
                <hr>
                <a  input type="submit" name="signup-btn" class="btn"  href="https://rzp.io/l/CVbr8zueSh">Donate via UPI</a>

                <!-- <div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_HAnuYdnUqya4LU/view" data-text="Other payments" data-color="#20325298" data-size="large">
                 <script>
                     (function(){
                         var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
                         if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
                         s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
                         rzp && rzp.init && rzp.init()}})();
                </script>
                        
                         </div> -->
    
                <!-- <a input type="submit" name="signup-btn" class="btn"  href="random.html">Donate</a> -->
            </form>
        </div>
    </section>

    <script src="main.js"></script>

</body>
</html>
   