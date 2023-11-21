<?php

namespace App\Http\Controllers;

use App\Models\stok;
use App\Http\Requests\StokRequest;
use App\Http\Requests\StorestokRequest;
use App\Http\Requests\UpdatestokRequest;
use Exception;
use PDOException;

class stokController extends Controller
{
    public function index()
    {
        try {
            $data = stok::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    public function store(StokRequest $request)
    {
        try {
            $data = Stok::create($request->all());
            return response()->json(['status' => true, 'message' => 'input success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal input data']);
        }
    }

    public function update(StokRequest $request, stok $stok)
    {
        try {
            $data = $stok->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data', 'error_type' => $e]);
        }
    }

    public function destroy(stok $stok)
    {
        try {
            $data = $stok->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}