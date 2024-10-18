<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;


use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Producto::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request)
    {
        $producto = Producto::create($request->validated());
        return response()->json($producto);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return response()->json($producto, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductoRequest $request, string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->validated());
        return response()->json($producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Producto::destroy($id);
        return response()->json(null, 204);
    }
}
