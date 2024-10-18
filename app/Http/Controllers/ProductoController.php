<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return response()->json($productos);
    }

    public function store(ProductoRequest $request)
    {
        $producto = Producto::create($request->validated());
        return response()->json($producto);
    }

        public function show(string $id)
    {
        $producto = Producto::where('id', $id)->firstOrFail(); // Cambia esto si es necesario
        return response()->json($producto, 200);
    }

    public function update(ProductoRequest $request, string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->validated());
        return response()->json($producto);
    }

    public function destroy(string $id)
    {
        Producto::destroy($id);
        return response()->json(null, 204);
    }
}
