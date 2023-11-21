<?php

namespace App\Http\Controllers;

use App\Models\jenismakanan;
use Illuminate\Http\Request;
use App\Http\Requests\jenisMakananRequest;
use Exception;
use PDOException;


class jenisMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = jenisMakanan::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
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
    public function store(Request $request)
    {
        try {
            $data = jenisMakanan::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data :' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(jenismakanan $jenisMakanan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jenisMakanan $jenisMakanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(jenisMakananRequest $request, jenisMakanan $jenisMakanan)
    {
        try {
            $data = $jenisMakanan->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data', 'error_type' => $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jenisMakanan $jenisMakanan)
    {
        try {
            $data = $jenisMakanan->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}
