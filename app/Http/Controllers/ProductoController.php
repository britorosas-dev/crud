<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProductoRequest;
use App\Proveedor;
use Illuminate\Http\Request;
use App\Producto;
use Mockery\Exception;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $productos = Producto::where('activo',1)->orderBy('id','DESC')->with('proveedor')->paginate(5);
        return view('productos.lista',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::where('activo',1)->orderBy('nombre','ASC')->get();
        return view('productos.alta',compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductoRequest $request)
    {
        try
        {
            //IMAGE
            if($request->file('foto')){
                $imagePath = $request->file('foto');
                //$imageName = $imagePath->getClientOriginalName();
                $nameDate = date('ymdHis');
                $new_name = $nameDate . '.' . $imagePath->getClientOriginalExtension();

                $path = $request->file('foto')->storeAs('img/productos', $new_name, 'public');
            }
            $producto = new Producto();
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->foto = $new_name;
            $producto->envio = $request->envio;
            $producto->condicion = $request->condicion;
            $producto->precio_venta = $request->precio;
            $producto->proveedor_id = $request->proveedor;
            $producto->save();

            return redirect()->route('producto.create')
                ->with('Info','Producto Registrado Exitosamente');
        }
        catch (Exception $ex)
        {

        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $proveedores = Proveedor::where('activo',1)->orderBy('nombre','ASC')->get();
        return view('productos.editar',compact('producto','proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductoRequest $request, $id)
    {
        if($request->file('foto')){
            $imagePath = $request->file('foto');
            $nameDate = date('ymdHis');
            $new_name = $nameDate . '.' . $imagePath->getClientOriginalExtension();
            $path = $request->file('foto')->storeAs('img/productos', $new_name, 'public');
        }
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        if($request->file('foto')){
            $producto->foto = $new_name;
        }
        $producto->envio = $request->envio;
        $producto->condicion = $request->condicion;
        $producto->precio_venta = $request->precio;
        $producto->proveedor_id = $request->proveedor;
        $producto->save();

        return redirect()->route('producto.edit',$id)
            ->with('Info','Producto Editado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $producto = Producto::find($id);
            $producto->activo = 0;
            $producto->save();
            return redirect()->route('producto.index')
                ->with('Info','Producto Eliminado Exitosamente');
        } catch (Exception $ex) {
            return redirect()->route('producto.index')
                ->with('Exception','Ocurrio un error al eliminar, intenta de nuevo'.$ex->getMessage());
        }
    }
}
