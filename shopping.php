<?php
$conn = mysqli_connect("localhost","root","","product");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());


}


$query="select * from cart_item";
$result=mysqli_query($conn, $query);
if(!$result){
    die("invalid query: .$conn->error");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
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
                <h2 class="text-center">Product table</h2>
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
                <th>Price</th>
                <th>Tags</th>
                <th>Vendor</th>
                
            </tr>
        </thead>
        
            <tr>
                <?php
                
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                  <td><?php echo $row['id'];  ?></td>
                  <td><?php echo $row['pname'];  ?></td>
                  <td><?php echo $row['price'];  ?></td>
                  <td><?php echo $row['tag'];  ?></td>
                  <td><?php echo $row['vendor'];  ?></td>
                
                <?php
                
                if(isset($_post['btn-primary'])){
                    $id = $_POST['id'];
                    $pname = $_POST['pname'];
                    $price = $_POST['price'];
                    $vendor = $_POST['vendor'];
                                }
                
                
                  //  $insert="INSERT INTO `cart_item`(`id`, `pname`, `price`, `tag`, `vendor`) VALUES ('$id','pname','$price','$vendor')";
   // $query = mysqli_query($conn,$insert) or die(mysqli_error($conn));
    if($query==1){
        $ins="INSERT INTO `shop_db`(`id`, `proname`, `orgprice`, `discount`, `ven`) VALUES ('$id','$proname','$orgprice','$ven')";
 $quert = mysqli_query($conn, $ins) or die(mysqli_error($conn));
 if($query ==1){
    
 }
    }
    
               ?>



                  <td><a href="#" class="btn btn-primary">Add to Cart</a></td>
                  

            </tr>
                    <?php
                }
                
                
                ?>
            
        
    </table>

            </div>
                </div>


</body>
</html>