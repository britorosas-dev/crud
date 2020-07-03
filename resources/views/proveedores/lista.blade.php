@extends('layouts.app')
@section('content')
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <section class=" text-right">
                <div class="container">
                    <p>
                        <a href="{{ route('proveedor.create') }}" class="btn btn-primary my-2">
                            <i class="fa fa-plus"></i>
                            Nuevo Registro
                        </a>
                    </p>
                </div>
            </section>
            <div class="row">
                <div class="col-12">
                    @isset($proveedores)
                        @if($proveedores->total() > 0)
                            <h4 class="mb-3"> Proveedores Registrados <small>({{ $proveedores->total()  }})</small></h4>
                            @include('mensajes.info')
                            <table class="table table-image table-hover table-striped table-sm" >
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Pais</th>
                                    <th scope="col">Ciudad</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($proveedores as $proveedor)
                                    <tr>
                                        <th class="align-middle text-center" scope="row">{{ $proveedor->id }}</th>
                                        <td class="align-middle">
                                            {{ $proveedor->nombre }}
                                        </td>
                                        <td class="align-middle">{{ $proveedor->email }}</td>
                                        <td class="align-middle">{{ $proveedor->telefono }}</td>
                                        <td class="align-middle">{{ $proveedor->estatus }}</td>
                                        <td class="align-middle">{{ $proveedor->pais }}</td>
                                        <td class="align-middle">{{ $proveedor->ciudad }}</td>
                                        <td>
                                            <a href="{{ route('proveedor.edit',array($proveedor->id)) }}" class="btn btn-sm btn-success my-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('proveedor.destroy',$proveedor->id) }}" method="POST" style="margin: 0; padding: 0; display:inline!important;">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button class="btn btn-sm btn-danger " data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="Desactivar">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4 class="mb-3"> Sin Proveedores Registrados </h4>
                        @endif
                    @endisset
                </div>
            </div>
            <div class="text-center">
                {{ $proveedores->links() }}
            </div>
        </div>


    </div>
@endsection
