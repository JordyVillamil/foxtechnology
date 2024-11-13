<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
     {
        $productos = Producto::all(); // Obtener todos los productos
        return view('productos.index', compact('productos')); // Asegúrate de que la ruta sea correcta
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //:
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validar Productos
    $datos = $request->validate([
        'nombre' => ['required', 'string', 'max:100'],
        'descripcion' => ['nullable', 'string', 'max:255'],
        'precio' => ['required', 'integer', 'min:1000'],
        'stock' => ['required', 'integer', 'min:1'],
    ]);

    try {
        // Guardar Datos
        $producto = Producto::create($datos);
        // Respuesta al Cliente
        return response()->json(['success' => true, 'message' => 'Producto creado'], 201);
    } catch (\Illuminate\Database\Eloquent\MassAssignmentException $e) {
        return response()->json(['error' => 'Error de asignación masiva: ' . $e->getMessage()], 400);
    }
}

      /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
          {
             return response()->json($producto, 200); //200: OK
          }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
        {
             // Validar datos de entrada
             $datos = $request->validate([
             'nombre' =>['required', 'string','max:100'],
             'descripcion' =>['nullable','string', 'max:255'],
              'precio' =>['required', 'integer','min:1000'],
              'stock' =>['required', 'integer','min:1'],
               ]);
        // Actualizar Producto
        $producto->update($datos);
        // Respuesta al Cliente
              return response()->json(['success' => true,'message' => 'Producto actualizado'], 200);
         } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
         {
         // Eliminar Producto
         $producto->delete();
         // Respuesta al Cliente
          return response()->json(['success' => true,'message' => 'Producto eliminado'], 200);
          }
}
