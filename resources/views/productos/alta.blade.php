@extends('layouts.app')
@section('content')
    <div class="card border-0 shadow my-5">

        <div class="card-body p-5">
            <section class=" text-right">
                <div class="container">
                    <p>
                        <a href="{{ route('producto.index') }}" class="btn btn-primary my-2">
                            <i class="fa fa-list"></i>
                            Registrados
                        </a>
                    </p>
                </div>
            </section>
            <div class="col-md-12 order-md-1 mb-5">


                <div class="row">
                    <div class="col-md-12 order-md-1">
                        <h4 class="mb-3">Registro de Productos</h4>

                        @include('mensajes.info')
                        <form method="post" action="{{ route('producto.store') }}" class="needs-validation" novalidate enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control form-control-lg @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="" value="{{ old('nombre') }}"  maxlength="150" >
                                    @error('nombre')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="precio">Precio</label>
                                    <input type="text" class="form-control form-control-lg @error('precio') is-invalid @enderror" id="precio" name="precio" placeholder="" value="{{ old('precio') }}"  maxlength="7" >
                                    @error('precio')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control form-control-lg @error('descripcion') is-invalid @enderror" id="descripcion"  name="descripcion" rows="3" maxlength="300">{{ old('descripcion') }}</textarea>
                                    @error('descripcion')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" id="foto"  accept=".png,.jpg,.jpeg,.gif" class="form-control @error('foto') is-invalid @enderror" />
                                    @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="envio">Tipo de Envio</label>
                                    <select class="custom-select d-block w-100 form-control-lg @error('envio') is-invalid @enderror" id="envio" name="envio" >
                                        <option value="">Selecciona...</option>
                                        <option value="Gratis" {{ (old('envio') == 'Gratis')?'selected':'' }}>Gratis</option>
                                        <option value="De Pago" {{ (old('envio') == 'De Pago')?'selected':'' }}>Pago</option>
                                    </select>
                                    @error('envio')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="condicion">Condición</label>
                                    <select class="custom-select d-block w-100 form-control-lg @error('condicion') is-invalid @enderror" id="condicion" name="condicion" >
                                        <option value="">Selecciona...</option>
                                        <option value="Nuevo" {{ (old('condicion') == 'Nuevo')?'selected':'' }}>Nuevo</option>
                                        <option value="Usado" {{ (old('condicion') == 'Usado')?'selected':'' }}>Usado</option>
                                    </select>
                                    @error('condicion')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="proveedor">Proveedor</label>
                                    @isset($proveedores)
                                        @if(count($proveedores)>0)
                                            <select class="custom-select d-block w-100 form-control-lg @error('proveedor') is-invalid @enderror" id="proveedor" name="proveedor" >
                                                <option value="">Selecciona...</option>
                                                @foreach($proveedores as $proveedor)
                                                    <option value="{{ $proveedor->id }}" {{ (old('proveedor') == $proveedor->id)?'selected':'' }}>{{ $proveedor->nombre }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    @endisset

                                    @error('proveedor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-secondary btn-lg btn-block" type="submit">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
