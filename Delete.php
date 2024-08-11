<?php 
    $conn=new mysqli("localhost","root","","php_class2");
    $id=$_POST['id_del'];
    $sql="DELETE FROM `products` WHERE product_id='$id'";
    $conn->query($sql);
    if($sql){
        header("Location:index.php");
    }
    
?>