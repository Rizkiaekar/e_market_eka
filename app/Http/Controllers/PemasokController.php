<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use App\Http\Requests\StorePemasokRequest;
use App\Http\Requests\UpdatePemasokRequest;
use Illuminate\Support\Facades\DB;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemasok = DB::table('pemasok')->get();
        return view('pemasok.index', compact('pemasok'));
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
    public function store(StorePemasokRequest $request)
    {
        Pemasok::create($request->all());

        return redirect('pemasok')->with('success',   'Data Pemasok berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemasok $pemasok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemasok $pemasok)
    {
        $produk  = Pemasok::find($pemasok);
        return view('pemasok.edit')->with('pemasok', $pemasok);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePemasokRequest $request, Pemasok $pemasok)
    {
        try {
            DB::beginTransaction();
            $validate = $request->validated();
            $pemasok->update($validate);
            DB::commit();
            return redirect()->back()->with('succes', 'data berhasil di ubah');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'terjadi kesalahan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemasok $pemasok)
    {
        $pemasok->delete();

        return redirect('pemasok')->with('succes', 'delete data berhasill!');
    }
}
