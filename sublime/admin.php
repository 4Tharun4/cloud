<?php
include('./addconn.php');
if (isset($_POST["submit"])){
    $file=$_FILES["file"];
    $text=$_POST["text"];
    $price=$_POST["prices"];
   // print_r($file);
    //echo "<br>";
    //echo $text;
    //echo "<br>";
    //echo $price;
    //echo "<br>";

   

     $imagefilename=$file['name'];
     //print_r( $imagefilename);
     //echo "<br>";
     $imagefiletemp=$file['tmp_name'];
     //print_r( $imagefiletemp);
       //echo "<br>";
     $imagefile_seprate=explode('.', $imagefilename);
      //print_r( $imagefile_seprate);
      //echo "<br>";
     $file_extension=strtolower(end($imagefile_seprate));
     //print_r($file_extension);
     $extension=array('jpg','jpeg','png');
     if (in_array($file_extension,$extension)) {
         $upload_image='images/'.$imagefilename;
     move_uploaded_file($imagefiletemp,$upload_image);
     $sql="insert into `itemsadd`(image,text,price) values (' $upload_image','$text','$price')";
     $result=mysqli_query($con,$sql);
     echo "<br>";
     if($result){
        echo '<div class="alert alert-success" role="alert">
  <strong>Sucess   </strong>Data Inserted Sucessfully
</div>';
     } else{
        die(mysqli_error($con));
     }
     

     }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurressery</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        img{
            width: 150px;
        }
    </style>



</head>
<body>
    <div class="Home">
         <a class="active"href="home.php">Home</a> 
         <a href="Add Products.php">Add Products</a>
        <a href="Contact.php">Contact US </a> 
        
       
    </div>
    <h1 NOTE => ADD IMAGES WITHOUT ANY SPACE </h1> 
    <h1 class="text-center my-4">Products</h1>
    
  
  <div class="container mt-5 d-flex justify-content-center">
      <table class="table table-bordered w-50">
  <thead class="table-dark">
    <tr>
      <th scope="col">SLNO</th>
      <th scope="col">IMAGE</th>
      <th scope="col">TEXT</th>
      <th scope="col">PRICE</th>
       
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
      
    </tr>';

  }
  
  ?>

    
    
  </tbody>
</table>

  </div>

</body>
</html>