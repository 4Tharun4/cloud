<?php
include('./addconn.php');
?>








<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UserPage</title>
	<link rel="stylesheet" type="text/css" href="client.CSS">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  
    
</head>
<body>
   <form action="adminLogin.php">
      <div class="home">
          <a class="active"href="#">Home</a> 
         <a href="#"> Products</a>
        <a href="#">Contact US </a> 
        <div class="btn">
          <button type="submit">AdminLogin</button>
           
         </div>
      </div> 
     
   </form>
   
    <h1 class="text-center my-4">Products</h1>
    
  
  <div class="container mt-5 d-flex justify-content-center">
      <table class="table table-bordered w-50">
  <thead class="table-dark">
    <tr>
      <th scope="col">SLNO</th>
      <th scope="col">IMAGE</th>
      <th scope="col">TEXT</th>
      <th scope="col">PRICE</th>
      <th scope="col">TO ORDER</th>
    </tr>
  </thead>
  <tbody>
    <?php 
  $sql="select * from `itemsadd`";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result)){ 
    $id=$row['id'];
    $image=$row['image'];
    $text=$row['text'];
    $price=$row['price'];
    echo '<tr>
      <td>'.$id.'</td>
      <td><img src='.$image.'></td>
      <td>'.$text.'</td>
      <td>'.$price.'</td>
      <td> <a href ="orderform.php">order</td>
    </tr>';

  }
  
  ?>


    
    
  </tbody>
</table>
</div>

  

</body>
</html>