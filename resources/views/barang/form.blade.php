<div class="modal fade" id="modalFormBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="barang">
          @csrf
          <div class="form-group row">
            <label for="kode_barang" class="col-sm-4 col-form-label">Kode Barang</label>
            <div class="col-sm-8">
              <input type="text" class="kode_barang" id="nama_barang" name="kode_barang" placeholder="kode_barang">
            </div>
          </div>

          <div class="form-group row">
            <label for="nama_barang" class="col-sm-4 col-form-label">Nama Barang</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
            </div>
          </div>

          <div class="form-group row">
            <label for="satuan" class="col-sm-4 col-form-label">Satuan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="satuan" name="satuan" placeholder="satuan">
            </div>
          </div>

          <div class="form-group row">
            <label for="harga_jual" class="col-sm-4 col-form-label">Harga Jual</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="harga_jual" name="harga_jual" placeholder="harga_jual">
            </div>
          </div>


          <div class="form-group row">
            <label for="stok_barang" class="col-sm-4 col-form-label">Stok Barang</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="stok_barang" name="stok_barang" placeholder="stok_barang">
            </div>
          </div>

          <div class="form-group row">
            <label for="ditarik" class="col-sm-4 col-form-label">Ditarik</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="ditarik" name="ditarik" placeholder="ditarik">
            </div>
          </div>
          <div class="form-group row">
            <label for="produk_id" class="col-sm-4 col-form-label">Produk</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="produk_id" name="produk_id" placeholder="produk_id">
            </div>
          </div>
          <div class="form-group row">
            <label for="user_id" class="col-sm-4 col-form-label">User</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="user_id" name="user_id" placeholder="user_id">
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