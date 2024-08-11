<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
         <form action="Delete.php" method="post">
             <div class="modal-body">
                <h3>Do you want to Delete ?</h3>
                <input type="text" name="id_del" id="id_del" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger rounded-0" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-success rounded-0">Yes</button>
            </div>
         </form>
    </div>
  </div>
</div>