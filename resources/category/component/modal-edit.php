<!-- Modal -->
<div class="modal m-edit fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST" id="demo-form-edit" autocomplete="off">
            <input type="hidden" name="id" id="id" value="">
            <label for="name">Name Category * :</label>
            <input type="text" class="form-control" name="nama" id="nama" value="" required>
            <small class="text-danger" id="err"></small>
      </div>
      <div class="modal-footer">
        <button type="submit" id="save" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>