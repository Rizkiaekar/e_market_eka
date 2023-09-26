<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Http\Requests\StorepelangganRequest;
use App\Http\Requests\UpdatepelangganRequest;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pelanggan'] = Pelanggan::get();
        return view('pelanggan.index')->with($data);
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
    public function store(StorepelangganRequest $request)
    {
        Pelanggan::create($request->all());

        return redirect('pelanggan')->with('success',   'Data Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggan $pelanggan)
    {
        $pelanggan  = Pelanggan::find($pelanggan);
        return view('pelanggan.edit')->with('pelanggan', $pelanggan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepelangganRequest $request, pelanggan $pelanggan)
    {
        try {
            DB::beginTransaction();
            $validate = $request->validated();
            $pelanggan->update($validate);
            DB::commit();
            return redirect()->back()->with('succes', 'data berhasil di ubah');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'terjadi kesalahan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();

        return redirect('pelanggan')->with('succes', 'delete data berhasill!');
    }
}
