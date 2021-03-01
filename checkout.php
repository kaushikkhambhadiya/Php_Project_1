<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Checkout Page - Hooked on Books</title>
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
        
<?php
session_start();
if (isset($_GET['name'])) {
    $_SESSION['name'] = $_GET['name'];
    $bookname = $_SESSION['name'];
    echo "<div class='row mt-4'>
        <div class='col-md-12'>
            <h3 class='text-center'>Please fill up below details to order :  <br> <b>{$bookname}</b> </h3>
        </div>
    </div>";
}
?>
        
<div class='row mt-4'>
    <div class='col-md-12'>
        <h3 id="bookNameFromSession" class='text-center'></h3>
    </div>
</div>
<div class="row m-4">
    <div class="col-md-12">
        <form id="checkOutForm" action="checkout.php" method="post">
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label class="lead" for="firstname"><span class="text-danger">*</span> First Name:</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" id="firstname" name="firstname" placeholder="type here..."
                           value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>">
                </div>
            </div>
            
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label class="lead" for="lastname"><span class="text-danger">*</span> Last Name:</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" id="lastname" name="lastname" placeholder="typle here..."
                           value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>">
                </div>
            </div>
            
            
            <label class="lead font-weight-bold"><span class="text-danger">*</span> Select Payment
                Method:</label><br>
            
            
            <input type="radio" id="debit" name="paymentoption" value="debit"
                <?php if (isset($_POST['paymentoption']) && $_POST['paymentoption'] == "debit") echo "checked=\'checked\'" ?>
            >
            <label class="lead" for="debit">Debit</label><br>
            
            
            <input type="radio" id="credit" name="paymentoption" value="credit"
                <?php if (isset($_POST['paymentoption']) && $_POST['paymentoption'] == "credit") echo "checked=\'checked\'" ?>
            >
            <label class="lead" for="credit">Credit</label><br>
            
            
            <input type="radio" id="cash" name="paymentoption" value="cash"
                <?php if (isset($_POST['paymentoption']) && $_POST['paymentoption'] == "cash") echo "checked=\'checked\'" ?>
            >
            <label class="lead" for="cash">Cash</label>
            
            
            <div class="row form-group offset-3 col-md-3">
                <input class="btn btn-outline-success form-control" type="submit" value="Place Order">
            </div>

        </form>
    </div>
</div>
</body>
</html>
    
<?php
require("mysqli_connect.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $bookname = $_SESSION['name'];
    $flag = true;
    if (empty($_POST['firstname'])) {
        echo "<script>
document.getElementById('bookNameFromSession').innerHTML='Please fill up below details to order : {$bookname}';
</script>
<div class='row col-md-12 ml-5'>
    <p class='text-danger'>Please enter FirstName before placing order </p>
</div>";
        $flag = false;
    }
    if (empty($_POST['lastname'])) {
        echo "<script>
document.getElementById('bookNameFromSession').innerHTML='Please fill up below details to order : {$bookname}';
</script>
<div class='row col-md-12 ml-5'>
    <p class='text-danger'>Please enter LastName before placing order</p>
</div>";
        $flag = false;
    }
}

?>

