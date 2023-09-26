<div class="modal fade" id="modalFormPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="pelanggan">
          @csrf
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kode Pelanggan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="kode_pelanggan" name="kode_pelanggan" placeholder="Kode pelanggan">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nama Pelanggan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">No Telpon</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="no_telp">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="email" name="email" placeholder="email">
            </div>
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>