<html>
<head>
        <title>User login and Registration</title>
          <!-- Required meta tags -->
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
      
<!-- <section id="navbar">
        <header>
            <nav>
                <ul class="nav_links">
                    <li><a href="index.html">Home</a></li>
                     <li><a href="#first">How it works?</a></li>
                    <li><a href="#second">Types of donation</a></li> 
                    <li><a href="index.html">About Us</a></li>
                    <li><a href="index.html">Contact Us</a></li>
                </ul>
            </nav>
        </header>    
    </section> -->

<!-- <a href="index.html"><h2>Home</h2></a> -->
<!-- <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->


  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="index.html" class="navbar-brand">
      <img src="images/mamaa.png" alt="logo" width="70">
    </a>
  <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.html">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="query.php">Query/Feedback</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="login-box">
    <div class = "row">
    <div class ="col-md-6 login-left">
        <center><h2>Login here</h2>
        <b><p>Existing user</p></b></center>
        <form action="validation.php" method="post">
            <div class = "form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" placeholder="username" required>
            </div>
            
            <div class = "form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="password" required>
            </div>
            <center><button type="submit" class="btn btn-info"> Login </button></center>
        </form>
       
    </div>


    <div class ="col-md-6 login-right">
    <center>
      <h2>Register here</h2>
        <b><p>New user</p></b>
      </center>
        <form action="registration.php" method="post" >
            <div class = "form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" placeholder="username" required>
            </div>
            <div class = "form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="password" required>
            </div>
            <center><button type="Register" class="btn btn-info" onclick="alert('Registerd successfully')" >Register </button></center>
        </form>
    </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" ></script>

  </body>
</html>
