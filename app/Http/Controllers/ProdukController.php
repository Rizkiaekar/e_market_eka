<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Support\Facades\DB;
use PDF;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['produk'] = Produk::get();
        return view('produk.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdukRequest $request)
    {
        Produk::create($request->all());

        return redirect('produk')->with('success',   'Data Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $produk  = Produk::find($produk);
        return view('produk.edit')->with('produk', $produk);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdukRequest $request, Produk $produk)
    {
        try {
            DB::beginTransaction();
            $validate = $request->validated();
            $produk->update($validate);
            DB::commit();
            return redirect()->back()->with('succes', 'data berhasil di ubah');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'terjadi kesalahan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect('produk')->with('succes', 'delete data berhasill!');
    }
    public function download()
    {
        $data['produk'] = Produk::get();
        $pdf = PDF::loadview('produk/data', $data);

        // //download pdf file with download method
        // $date = date ('YMD');
        // return $pdf->stream();'
        return $pdf->download('test.pdf');
    }
}
