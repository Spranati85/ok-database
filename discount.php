<?php




// Set up database connection
$conn = mysqli_connect("localhost","root","","discount");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());


}
$query="select * from ven_db";
$result=mysqli_query($conn, $query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Table</title>
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
                <h2 class="text-center">Discount Table</h2>
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
                <th>Vendor</th>    
                <th>Trade A</th>
                <th>Trade B</th>
                <th>Trade C</th>
                <th>Trade D</th>
            
            </tr>
        </thead>
        <tbody id="cart-items"></tbody>
            <tr>
                <?php
                
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                  <td><?php echo $row['vendor'];  ?></td>
                  <td><?php echo $row['tradeA'];  ?></td>
                  <td><?php echo $row['tradeB'];  ?></td>
                  <td><?php echo $row['tradeC'];  ?></td>
                  <td><?php echo $row['tradeD'];  ?></td>  


            </tr>
                    <?php
                }
                
                
                ?>
            
        
    </table>
                    

            </div>
                </div>
</body>

</html>