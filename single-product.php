<?php
    include("connect.php");
    $id = '';
    if (isset($_GET["id"])) {
        $id = strip_tags(mysqli_real_escape_string($db, $_GET["id"]));
    }
    else {
        header("location:./product.php");
    }
    $q = mysqli_query($db, "SELECT * FROM products WHERE id = '$id'");
    $image = "";
    $description = "";
    while ($r = mysqli_fetch_array($q)) {
        $image = $r['product_image'];
        $description = $r['product_description'];
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Order</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="shortcut icon" href="./images/ubani fav.png">
<link rel="stylesheet" href="form1.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Ubani</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item ">
<a class="nav-link" href="index.html">Home </a>
</li>
<li class="nav-item active dropdown">
<a class="nav-link dropdown-toggle"  href="#"id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Products  <span class="sr-only">(current)</span></a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item" href="product.php#watch">Watch</a>
    <a class="dropdown-item" href="product.php#jewellery">Jewellery</a>
    <a class="dropdown-item" href="product.php#shoes">Shoes</a>
    <a class="dropdown-item" href="product.php#bags">Bags</a>
    <a class="dropdown-item" href="product.php#pants">Pants</a>
    <a class="dropdown-item" href="product.php#dildo">Dildo</a>
    <a class="dropdown-item" href="product.php#lub">Lubs</a>
    <a class="dropdown-item" href="product.php#earpod">Earpods</a>

  </div>
</li>
<li class="nav-item">
<a class="nav-link" href="about us.html">About Us</a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-lg">
<center align>
<img src="<?php echo $image; ?>" style="margin-top: 90px; height:400px;width:282px">
<div class="card-container">
<cite><?php echo $description; ?></cite>
</center>
<center align>
<img src="images/visa.png" style="height:45px;width:45px"><img src="images/mastercard.png" style="height: 45px;width:45px">
<img src="images/discover.png" style="height: 45px;width:45px">
<img src="images/american-express.png" style="height: 45px; width:45px; padding-left:5px">
<br>
<button type="button" class="btn btn-outline-danger btn-lg"  onclick="location.href='iindex.php?id=<?php echo $id; ?>'"> Order </button>
</center>
</div>
</div></div>





<div id="footer">
<h4>Ubani</h4>
<div class="linkrow">
<div class="container1">
<div class="row">
<div id="col-sm">
<a href="product.php#watch">Watch</a>
</div>
<div id="col-sm">
<a href="product.php#jewellery">Jewellery</a>
</div>
<div id="col-sm">
<a href="product.php#shoes">Shoes</a>
</div>
<div id="col-sm">
<a href="product.php#bags">Bags</a>
</div>
<div id="col-sm">
<a href="product.php#pants">Pants</a>
</div>
<div id="col-sm">
<a href="product.php#dildo">Dildo</a>
</div>
<div id="col-sm">
<a href="product.php#lub">Lub</a>
</div>
<div id="col-sm">
<a href="index.html">Home</a>
</div>
<div id="col-sm">
<a href="about us.html">About Us</a>
</div>
<div id="col-sm">
<a href="https://web.facebook.com/MOTADinc-107241430653059"> Developed By  <img src="images/motad4.jpg" style="height: 30px; width:105px; border-radius:12px"> </a>
</div>
</div>
</div>


</div>
</div>
    



<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
<script src="./node_modules/jquery/dist/jquery.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>