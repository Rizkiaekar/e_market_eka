<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Http\Requests\StorebarangRequest;
use App\Http\Requests\UpdatebarangRequest;
use App\Models\Produk;
use App\Models\User;
use Exception;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use PDO;
use PDOException;

use function Laravel\Prompts\error;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['barang'] = Barang::get();
        return view('barang.index')->with($data);
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
    public function store(StorebarangRequest $request)
    {
        DB::beginTransaction();
        Barang::create($request->all());
        DB::commit();
        return redirect('barang')->with('succes', 'Input data berhasil');
        // try {
        //     DB::beginTransaction();
        //     Barang::create($request->all());
        //     DB::commit();
        //     return redirect('barang')->with('succes', 'Input data berhasil');
        // } catch (QueryException | Exception | PDOException $error) {
        //     DB::rollBack();
        //     $this->failResponse($error->getMessage(), $error->getCode());
        // }
    }

    protected function failResponse($message, $code)

    {
        //
    }
    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit')->with('barang', $barang);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebarangRequest $request, barang $barang)
    {
        try {
            DB::beginTransaction();
            $barang = Barang::findOrFail($barang);
            $validate = $request->validated();
            $barang->update($validate);
            DB::commit();
            return redirect()->back()->with('succes', 'data berhasil di ubah');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'terjadi kesalahan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        try {
            DB::beginTransaction();
            $barang->delete();
            DB::commit();
            return redirect('barang')->with('succes', 'Data berhasil dihapus!');
        } catch (QueryException | Exception | PDOException $error) {
            DB::rollBack();
            return "terjadi kesalahan " . $error->getMessage();
        }
    }
}
