<?php include("page/header.php")?>
 <div class="container">
 <div class="d-flex justify-content-between mt-3">
            <h3>Create Prodcut</h3>
            <a class="btn btn-primary rounded-0 " href="index.php">Show product</a>
        </div>
 </div>
<div class="container shadow p-4 mt-3">

      <form action="controller.php" method="post">
        <div class="form-group">
                <label for="" class="form-label">ID</label>
                <input type="text" name="id" class="form-control">
        </div>
        <div class="form-group">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
                <label for="" class="form-label">Qty</label>
                <input type="text" name="qty" class="form-control">
        </div>
        <div class="form-group">
                <label for="" class="form-label">Profile</label>
                <input type="file" name="img" class="form-control">
        </div>
        <div class="form-header mt-2 ">
              <button type="submit" name="save" class="btn btn-success">Save</button>
              <button class="btn btn-danger">close</button>
              
        </div>
      </form>
</div>