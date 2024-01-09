<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Http\Requests\PegawaiRequest;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PegawaiRequest $request)
    {
        $validatedData = $request->validated();
        $pegawai = Pegawai::create($validatedData);
        return response()->json($pegawai, 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PegawaiRequest $request, Pegawai $pegawai)
{
    $validatedData = $request->validated();
    $pegawai->update($validatedData);
    return response()->json($pegawai, 200);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
{
    $pegawai->delete();
    return response()->json(null, 204);
}
}
