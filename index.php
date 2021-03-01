<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Home - Hooked on Books</title>
    <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Hooked on Books</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item active mr-3">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="store.php">Store</a>
            </li>
        
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <img src="images/display_banner.jpg" alt="bannerimage" style="width:100%;" class="img-fluid">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <h1 class="text-danger text-center">Bookshops are places of magical discoveries and the rediscovery of past pleasures.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Checkout our collection and place your order now!!.</h4>
            <form action="store.php">
                <input type="submit" class="btn btn-outline-info col-2 form-control" value="Visit Store">
            </form>
        </div>
    </div>
</div>
<footer>
<div class="container-fluid mt-3">
    <div class="row bg-danger">
        <div class="col-md-12 text-center text-light">
            <p>&copy; Copyright 2020 - All rights reserved by Kaushik Khambhadiya</p>
        </div>
    </div>
</div>
</footer>
</body>
</html>
