<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="sukses"){
			echo "<div class='alert-succes'>Buat Akun Berhasil !</div>";
		}
	}
	?>



<html>
<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">DARY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#aboutdary">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="store2.html">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact2.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sbag2.html">Shopping Cart</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
            </form>
          </div>
        </div>
      </nav>
      <div class="jumbotron">
          <h1>Get your e-book at DARY</h1>
          <p>We work with book publishers in Indonesia</p>
          <a href="store2.html"><button>Shop Now</button></a>
      </div>
      <div class="DARY" id="aboutdary">
          <h1>DARY</h1>
          <p>DARY is a digital platform that provides online shop services on websites and digital libraries on mobile with subscriptions. We sell ebooks on our website, and users who buy ebooks from us can read them through the mobile app.</p>
      </div>
      <div class="reason">
        <h1>Why Choose DARY?</h1>
        <div class="container" style="margin-top: 10%; width: 100%; margin-bottom: 15%;">
          <div class="row">
            <div class="col">
              <button>Meningkatkan Minat Baca</button>
            </div>
            <div class="col">
              <button>Membentuk SDM Unggul</button>
            </div>
            <div class="col">
              <button>Peduli Lingkungan</button>
            </div>
          </div>
        </div>
      </div>
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