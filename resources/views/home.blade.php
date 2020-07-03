@extends('layouts.app')
@section('content')
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
                <div class="col-md-12 order-md-1 mb-5">
                    <h4 class="mb-3">Busqueda de Productos</h4>
                    <form id="form" method="GET" action="{{ route('busqueda.index') }}" class="needs-validation"  novalidate>
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg @error('buscador') is-invalid @enderror" placeholder="Laptop, MicroSD" id="buscador" name="buscador" value="{{ isset($buscador) ? $buscador : old('buscador') }} "  maxlength="150" aria-label="">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit" id="button-addon2">Buscar</button>
                            </div>
                            @error('buscador')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </form>
                </div>
                @isset($resultados)
                @if($resultados == 1)
                    <h4 class="mb-3">Resultados <span class="text-muted font-italic" >{{ $productos->total() }}</span></h4>
                    <hr class="mb-4">
                    @foreach($productos as $producto)
                        <div class="card mb-3" >
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <img src="{{ asset('img/productos'.'/'.$producto->foto) }}" class="img-fluid " alt="" >
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $producto->nombre }}</h3>
                                        <div class="stats">
                                            <span class="text-muted"><i class="fa fa-tags"></i>32 Vendidos</span>
                                            <span class="text-muted"><i class="fas fa-map-marked-alt"></i>{{ $producto->proveedor->pais }}, {{ $producto->proveedor->ciudad }}</span>
                                        </div>
                                        <p class="card-text">
                                            {{ $producto->descripcion }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div  style="padding: 10px 20px 0" >
                                        <h4 class="text-center">${{ $producto->precio_venta }}</h4>
                                        <div class="pl-1" ><span class="review"><i class="fa fa-truck text-success" style="padding-right: 5px;"></i>{{ $producto->envio }} </span> </div>
                                        <div class="pl-1"><span class="review"><i class="fa fa-star text-secondary" style="padding-right: 8px;"></i>{{ $producto->condicion }} </span> </div>
                                        <div class="pl-1"><span class="review"><i class="fa fa-certificate text-danger" style="padding-right: 9px;"></i>{{ $producto->proveedor->estatus }}</span> </div>
                                        <div class="my-1 text-center">
                                            <a class="btn btn-success btn-lg" href="{{ route('carrito.create',array($producto->id,$buscador)) }}"><i class="fa fa-shopping-cart"></i> Agregar</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $productos->render() }}
                @else
                    <h4 class="mb-3">Sin Resultados </h4>
                @endif
                @endisset
            <!---
            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            -->
        </div>
    </div>
@endsection
@section('styles')
     .stats{ float:left; width:100%; margin-top:1px; }
     .stats span{ float:left; margin-right:10px; font-size:14px; }
     .stats span i{ margin-right:7px;  }
@endsection
