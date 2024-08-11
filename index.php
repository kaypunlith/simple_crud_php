<?php 
include("page/header.php");
include("Modal/model.php");
$conn=new mysqli("localhost","root","","php_class2"); //connect to database
?>
     <div class="container">
        <div class="d-flex justify-content-between mt-3">
            <h3>Prodcut</h3>
            <a class="btn btn-primary rounded-0 " href="create.php">Create product</a>
        </div>
          <table class="table shadow mt-3">
              <thead>
                
                    <th class="bg-dark text-light">ID</th>
                    <th  class="bg-dark text-light">Image</th>
                    <th  class="bg-dark text-light">Name</th>
                    <th  class="bg-dark text-light">Price</th>
                    <th  class="bg-dark text-light">Qty</th>
                    <th  class="bg-dark text-light">Action</th>
    
              </thead>
              <tbody>
                 <?php 
                    $sql="SELECT * FROM `products`";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_array()){
                     ?>
                         <tr>
                            <td><?php echo $row[0]?></td>
                            <td><?php echo $row[1]?></td>
                            <td><?php echo $row[2]?></td>
                            <td><?php echo $row[3]?></td>
                            <td><?php echo $row[4]?></td>
                            <td>
                                <button class="btn btn-warning">Edit</button>
                                <button onclick="Delete(<?php echo $row[0]?>)" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                            </td>
                        </tr>
                     <?php

                    }
                 ?>
               

              </tbody>
          </table>
     </div>
     <?php include("page/footer.php");?>
   
     