@extends('templates.layout')

@push('style')

@endpush

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Pembelian </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
         
        </div>
      </div>
      <div class="card-body">
    <form class=""  id="formTransaksi">
      <div class="row">
        <div class="col-6">
          <label for="kode-pembelian" class="col-4 col-form-label col-form-"></label>

        </div>

      </div>

    </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    @include('pembelian.form')
    @include('pembelian.edit')
  </section>
@endsection

@push('script')

<script>
   $(document).ready(function() {
    $('.alert-success').fadeTo(2000, 500).slideUp(500, function(){
       $('.alert-success').slideUp(500)
   })
   $('.alert-danger').fadeTo(2000, 500).slideUp(500, function(){
       $('.alert-danger').slideUp(500)
   })
  })

   $(function(){
    $('#data-pembelian').DataTable()
   })

   //dialog hapus data
 $('.delete-data').on('click', function(e){
  const nama_pembelian= $(this).closest('tr').find('td:eq(1)').text();
  console.log('tes')
  Swal.fire({
    icon: 'error',
    title: 'Hapus Data',
    html: `Apakah data <b>${nama_pembelian}</b> akan di hapus?`,
    confirmButtonText: 'Ya',
    denyButtonText: 'Tidak',
    'showDenyButton': true,
    focusConfirm: false
    }).then((result)=>{
      if(result.isConfirmed) 
      $(e.target).closest('form').submit()
      else swal.close()
    })
 })
  

</script>
{{-- <script>  
  let table = new DataTable('#myTable');
</script> --}}
<script> 
$(document).ready(function(){
 
  $('#formPembelianModal').on('show.bs.modal', function(e){
    let button = $(e.relatedTarget)
    let id = button.data('id')
    let nama = button.data('nama_produk')
    $('#nama_pembelian_edit').val(nama)
    $('.form-edit').attr('action',`/pembelian/${id}`)
  })
})
</script>

@endpush