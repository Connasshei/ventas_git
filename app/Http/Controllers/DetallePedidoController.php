<?php

namespace App\Http\Controllers;


use App\Models\Detalle_Pedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detalle_pedidos = Detalle_Pedido::with('pedido.cliente', 'inventario')->get();
        return view('detalle_pedidos.index', compact('detalle_pedidos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('detalle_pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'cantidad' => 'required|integer',
            'subtotal' => 'required|numeric',
            'id_pedido' => 'required|integer|exists:pedidos,id',
            'id_inventario' => 'required|integer|exists:inventarios,id',
        ]);
        Detalle_Pedido::create($request->all());
        return redirect()->route('detalle_pedidos.index')->with('success', 'Detalle creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalle_Pedido $detalle_pedido)
    {
        //
        return view('detalle_pedidos.edit', compact('detalle_pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalle_Pedido $detalle_pedido)
    {
        //
        $request->validate([
            'cantidad' => 'required | integer',
            'subtotal' => 'required | numeric',
            'id_pedido' => 'required | integer|exists:pedidos,id',
            'id_inventario' => 'required | integer|exists:inventarios,id',
        ]);
        $detalle_pedido->update($request->all());
        return redirect()->route('detalle_pedidos.index')->with('success', 'Detalle del pedido guardado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalle_Pedido $detalle_pedido)
    {
        //
        $detalle_pedido->delete();
        return redirect()->route('detalle_pedidos.index')->with('success', 'Empleado eliminado correctamente');
    }
}
