<?php



// Set up database connection
$conn = mysqli_connect("localhost","root","","shopping");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query="select * from shop_db";
$result=mysqli_query($conn, $query);
if(!$result){
    die("invalid query: .$conn->error");
}

// Start the session
session_start();

// Check if the cart is set in the session
if(isset($_SESSION['cart'])) {
    // Remove the cart from the session
    unset($_SESSION['cart']);
}



require_once('discount.php');
require_once('shopping.php');


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Shopping Cart</h2>
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                <h2 class="text-center"></h2>
             </div>
            </div>
          </div>
        </div>
    
    </div>
        <table class="table table-bordered text-center">
        <thead>
            <tr class="bg-dark text-white">
                <th>Id</th>    
                <th>Product Name</th>
                <th>Original Price</th>
                <th>Discount Percentage</th>
                <th>Vendor</th>
                
            </tr>
        </thead>
        
            <tr>
                <?php
                
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                  <td><?php echo $row['id'];  ?></td>
                  <td><?php echo $row['proname'];  ?></td>
                  <td><?php echo $row['orgprice'];  ?></td>
                  <td><?php echo $row['discount'];  ?></td>
                  <td><?php echo $row['ven'];  ?></td>
                 
                  <td><a href="#" class="btn btn-danger">remove Cart</a></td>
                         

            </tr>
                    <?php
                }
                
                
                ?>
            

        <tfoot>
        <tr>
            <td colspan="3">Total</td>
            <td colspan="2" id="cart-total">0</td>
        </tr>
    </tfoot> 
    </table>
                    

           
              
              
              
            

            </div>
                </div>
</body>
</html>