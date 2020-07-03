<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProveedorRequest;
use App\Proveedor;
use Mockery\Exception;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $proveedores = Proveedor::where('activo',1)->orderBy('id','DESC')->paginate(5);
        return view('proveedores.lista',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('proveedores.alta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProveedorRequest $request)
    {
        try
        {
            $proveedor = new Proveedor([
                'nombre' => $request->nombre,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'estatus' => $request->estatus,
                'pais' => $request->pais,
                'ciudad' => $request->ciudad,
            ]);

            $proveedor->save();
            //return redirect()->route('proveedor.index')->with('info','La actividad ha quedado registrada correctamente'));
            /*return redirect('/contacts')->with('success', 'Contact saved!');*/
            //throw new Exception('Error al Registrar, Intenta de Nuevo');
           return redirect()->route('proveedor.create')
                ->with('Info','Proveedor Registrado Exitosamente');
        }
        catch (Exception $ex)
        {
            return redirect()->route('proveedor.create')
                ->with('Exception','Se ha generado un error, intenta de nuevo, por favor')
                ->withInput($request->input());
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
        $proveedor = Proveedor::find($id);
        return view('proveedores.editar',compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProveedorRequest $request, $id)
    {
        try
        {
            $proveedor = Proveedor::find($id);
            $proveedor->nombre = $request->nombre;
            $proveedor->email = $request->email;
            $proveedor->telefono = $request->telefono;
            $proveedor->estatus = $request->estatus;
            $proveedor->pais = $request->pais;
            $proveedor->ciudad = $request->ciudad;
            $proveedor->save();

            return redirect()->route('proveedor.edit',$id)
                ->with('Info','Proveedor Actualizado Exitosamente');
        }
        catch (Exception $ex)
        {
            return redirect()->route('proveedor.edit',$id)
                ->with('Exception','Se ha generado un error, intenta de nuevo, por favor')
                ->withInput($request->input());
        }
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
            $proveedor = Proveedor::find($id);
            $proveedor->activo = 0;
            $proveedor->save();
            return redirect()->route('proveedor.index')
                ->with('Info','Proveedor Eliminado Exitosamente');
        } catch (Exception $ex) {
            return redirect()->route('proveedor.index')
                ->with('Exception','Ocurrio un error al eliminar, intenta de nuevo'.$ex->getMessage());
        }

    }
}
