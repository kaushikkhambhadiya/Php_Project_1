<?php
require("mysqli_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Bookstore - Hooked on Books</title>
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
            <li class="nav-item  mr-3">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="store.php">Store</a>
            </li>
    </div>
</nav>
<div class="row m-3">
    <div class="col-md-12">
        <h3 class="text-center">Please click on the Book which You Want to Buy </h3>
    </div>
</div>
<div>
    <table class="table table-striped">
        <tr class="text-center">
            <th>Book ID</th>
            <th>Book Name</th>
            <th>Available Quantity</th>
            <th>Author Name</th>
             <th>Book Price ($)</th>
        </tr>
        <?php
        $query = "SELECT * FROM bookinventory";
        $result = @mysqli_query($dbc, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr class='text-center'>
                     <td>{$row['bookid']}</td>
                     <td><a style='text-decoration: none;color:rgb(30,144,255))' href='checkout.php?name={$row['bookname']}'>{$row['bookname']}</a></td>
                     <td>{$row['available_quantity']}</td>
                     <td>{$row['author_name']}</td>
                     <td>{$row['price']}</td>
                  </tr>";
        }
        ?>
    </table>
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
