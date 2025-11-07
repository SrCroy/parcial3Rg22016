<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedor = Proveedores::all();
        return view('proveedores.index', compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreProveedor' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'codigo' => 'required|string|max:20',
        ]);
        Proveedores::create($request->all());
        return redirect()->route('proveedores.index');
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
        return view('proveedores.edit', ['proveedor' => Proveedores::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombreProveedor' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'codigo' => 'required|string|max:20',
        ]);
        $proveedor = Proveedores::findOrFail($id);
        $proveedor->update($request->all());
        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Proveedores::destroy($id);
        return redirect()->route('proveedores.index');
    }
}
