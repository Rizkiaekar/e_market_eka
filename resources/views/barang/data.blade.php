<table class="table table-compact table-stripped" id="data-barang">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga Jual</th>
            <th>Stok Barang</th>
            <th>Ditarik</th>
            <th>Tools</th>
        </tr>
    </thead>

    <body>
        @foreach ($barang as $p)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i }}</td>
            <td>{{ $p->kode_barang }}</td>
            <td>{{ $p->nama_barang }}</td>
            <td>{{ $p->satuan }}</td>
            <td>{{ $p->harga_jual }}</td>
            <td>{{ $p->stok_barang }}</td>
            <td>{{ $p->ditarik }}</td>
            <td>
                <button class="btn" data-toggle="modal" data-target="#modalEdit" data-mode="edit" data-id="{{ $p->id }}" data-nama_barang="{{ $p->nama_barang }}">
                    <i class="fas fa-edit"></i>
                </button>
                <form method="post" action="{{route('barang.destroy', $p->id) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn delete-data" data-nama_barang="{{ $p->nama_barang }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </body>
</table>