<?php

namespace App\Http\Controllers;

use App\Models\Mejaa;
use App\Http\Requests\StoreMejaaRequest;
use App\Http\Requests\UpdateMejaaRequest;
use Exception;
use PDOException;

class MejaaController extends Controller
{
    public function index()
    {
        try {
            $data = Mejaa::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    public function store(StoreMejaaRequest $request)
    {
        try {
            $data = Mejaa::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    public function update(StoreMejaaRequest $request, Mejaa $meja)
    {
        try {
            $data = $meja->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data', 'error_type' => $e]);
        }
    }

    public function destroy(Mejaa $meja)
    {
        try {
            $data = $meja->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}
