<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data = Barang::all();
            return response()->json([
                "status" => true,
                "message" =>"Get successfull",
                "data" => $data
            ], 200);
        }
        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" =>"Something went wrong",
                "data" => $e->getMessage()
            ], 400);
        }
    }

    public function show($id)
    {
        try{
            $data = Barang::find($id);
            return response()->json([
                "status" => true,
                "message" =>"Get successfull",
                "data" => $data
            ], 200);
        }
        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" =>"Something went wrong",
                "data" => $e->getMessage()
            ], 400);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data = Barang::create($request->all());
            return response()->json([
                "status" => true,
                "message" =>"Create successfull",
                "data" => $data
            ], 200);
        }
        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" =>"Something went wrong",
                "data" => $e->getMessage()
            ], 400);
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data = Barang::find($id);
            $data->update($request->all());
            return response()->json([
                "status" => true,
                "message" =>"Update successfull",
                "data" => $data
            ], 200);
        }
        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" =>"Something went wrong",
                "data" => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $data = Barang::find($id);
            $data->delete();
            return response()->json([
                "status" => true,
                "message" =>"Delete successfull",
                "data" => $data
            ], 200);
        }
        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" =>"Something went wrong",
                "data" => $e->getMessage()
            ], 400);
        }
    }
}