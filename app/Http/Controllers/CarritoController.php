<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;



class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Carrito::all();
        return view('carrito.cart',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request,$id,$busqueda)
    {
        $resultados = 0;
        $buscador = $busqueda;
        $producto = Carrito::where('producto_id',$id)->first();

        if($producto instanceof Carrito){
            $producto->cantidad = $producto->cantidad+1;
            $producto->save();
        }
        else
            Carrito::create(['producto_id'=>$id,'cantidad'=>1]);

       // $productos =  ['id'=>$id, 'cantidad'=>1,'nombre'=>$busqueda];
        //$product = array(1,2,3,4);
        //$product = array_merge([session()->get('product'), $productos]);
        //session()->put('product',$product);

        //$productos = Carrito::all();
        //return view('carrito.cart',['productos'=>$productos]);
        return redirect()->route('carrito.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Carrito::find($id);
        if($cart instanceof Carrito){
            $cart->delete();
            return response()->json(['msg'=>'borrado satisfactoriamente']);
        }
        else
            return response()->json(['error'=>'no pudo eliminar producto de carrito'],401);
    }
}
