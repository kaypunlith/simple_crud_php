<?php 
   $conn=new mysqli("localhost","root","","php_class2"); //CONNECT TO DB
     $name=$_POST['name'];
     $img='123.png';
     $price=$_POST['price'];  //select data from form
     $qty=$_POST['qty'];

   
    $sql="INSERT INTO `products`(`product_img`, `product_name`, `product_price`, `product_qty`)
     VALUES ('$img','$name','$price','$qty')"; //write query to inser data to database
     $conn->query($sql); //push data to table
     if($sql){
        header("Location:index.php");// if success redirect to file index
     }


   
?>