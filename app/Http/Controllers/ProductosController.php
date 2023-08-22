<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Models\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::paginate(9);
        return view('productos.index', compact('productos'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $producto = Producto::findOrFail($id);
            return view('productos.edit', compact('producto'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $producto = Producto::findOrFail($id);
            
            // Validar los campos del formulario (opcional)
            $request->validate([
                'nombre' => 'required',
                'marca' => 'required',
                'modelo' => 'required',
                'precio' => 'required',
                'stock' => 'required',
                'descripcion' => 'required',
            ]);
    
            // Actualizar los datos del producto
            $producto->nombre = $request->nombre;
            $producto->marca = $request->marca;
            $producto->modelo = $request->modelo;
            $producto->precio = $request->precio;
            $producto->stock = $request->stock;
            $producto->descripcion = $request->descripcion;
    
            // Guardar la imagen (si se proporciona una nueva imagen)
            if ($request->hasFile('foto')) {
                // Lógica para guardar la imagen
            }
    
            $producto->save();
    
            return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Producto $producto)
    {
        return view('productos.delete', compact('producto'));
    }

    public function destroy(Request $request, Producto $producto)
    {
        $producto->delete();

        return Redirect::route('productos.index')->with('success', 'Producto eliminado correctamente');
    }
}
