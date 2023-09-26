<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Http\Requests\StorePembelianRequest;
use App\Http\Requests\UpdatePembelianRequest;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $pembelian = Pembelian::latest()->get();
            return view('pembelian.index', compact('pembelian'));
        } catch (QueryException | Exception | PDOException $error) {
            //    $this->failResponse($error->getMessage(), $error->getCode());
            // return redirect()->back()->   withErrors(['message' => 'Terjadi error']);
        }
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
    public function store(StorePembelianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePembelianRequest $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembelian $pembelian)
    {
        //
    }
}