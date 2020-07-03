@extends('layouts.app')
@section('content')
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <section class=" text-right">
                <div class="container">
                    <p>
                        <a href="{{ route('producto.create') }}" class="btn btn-primary my-2">
                            <i class="fa fa-plus"></i>
                            Nuevo Registro
                        </a>
                    </p>
                </div>
            </section>
            <div class="row">
                <div class="col-12">
                    @isset($productos)
                        @if($productos->total() > 0)
                            <h4 class="mb-3"> Productos Registrados <small>({{ $productos->total()  }})</small></h4>
                            @include('mensajes.info')
                            <table class="table table-image table-hover table-striped table-sm" >
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">Id</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Envio</th>
                                    <th scope="col">Condición</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Proveedor</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productos as $producto)
                                    <tr>
                                        <th class="align-middle text-center" scope="row">{{ $producto->id }}</th>
                                        <td class="align-middle ">
                                            <img src="{{ asset('img/productos'.'/'.$producto->foto) }}" class="img-fluid img-thumbnail" alt="" style="max-width: 100px">

                                        </td>
                                        <td class="align-middle">{{ $producto->nombre }}</td>
                                        <td class="align-middle">{{ $producto->envio }}</td>
                                        <td class="align-middle">{{ $producto->condicion }}</td>
                                        <td class="align-middle">{{ $producto->precio_venta }}</td>
                                        <td class="align-middle">{{ $producto->proveedor->nombre }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('producto.edit',array($producto->id)) }}" class="btn btn-sm btn-success my-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('producto.destroy',$producto->id) }}" method="POST" style="margin: 0; padding: 0; display:inline!important;">
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
                            <h4 class="mb-3"> Sin Productos Registrados </h4>
                        @endif
                    @endisset
                </div>
            </div>
            <div class="text-center">
                {{ $productos->links() }}
            </div>
        </div>
    </div>
@endsection
