<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>



<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Login</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
            <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)"><a href="about.php" style="text-decoration: none; color: #4A4E69;">DARY</a></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store.html">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Shopping Cart</a>
                </li>
                </ul>
                <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button" style="background-color: #4A4E69; border-style: hidden; width: 120px;"><a href="signup.php" style="text-decoration: none; color: #FFFFFF;">Sign Up</a></button>
                </form>
            </div>
            </div>
        </nav>



        <form style="margin-left: 35%; margin-right: 35%; margin-top: 160px; margin-bottom: 160px;" method="POST" name="login" action="proseslogin.php">

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            
            <div class="show" style="margin-top: 10px; margin-bottom:20px;" >
                  <input type="checkbox" onclick="myFunction()">Show Password
                </div>
            <button type="submit" name="melbu" class="btn btn-primary" style="background-color: #4A4E69; border-color: #4A4E69;">Submit</button>


        <script>
        function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
            } else {
                x.type = "password";
            }
        }
        </script>



        </form>
        <footer>
            <div class="fttop">
                <ul>
                    <li>About us</li>
                    <li>Collection</li>
                    <li>Store</li>
                    <li>Contact</li>
                </ul>
                <div class="sm">
                    <img src="asset/Facebook.svg" alt="facebook">
                    <img src="asset/Twitter.svg" alt="twitter"> 
                    <img src="asset/Youtube.svg" alt="youtube">
                </div>
            </div>
            <hr style="box-sizing: content-box; margin-left: 5%; color: #FFFFFF; width: 90%;">
            <div class="ftbtm">
                <p>© 2021 Kelompok 1. XI RPL 5</p>
                <ul>
                    <li>Terms of Service</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </footer>
    </body>
</html>