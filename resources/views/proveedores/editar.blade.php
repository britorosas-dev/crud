@extends('layouts.app')
@section('content')
    <div class="card border-0 shadow my-5">

        <div class="card-body p-5">
            <section class=" text-right">
                <div class="container">
                    <p>
                        <a href="{{ route('proveedor.index') }}" class="btn btn-primary my-2">
                            <i class="fa fa-list"></i>
                            Registrados
                        </a>
                    </p>
                </div>
            </section>
            <div class="col-md-12 order-md-1 mb-5">


                <div class="row">
                    <div class="col-md-12 order-md-1">
                        <h4 class="mb-3">Editar Proveedor</h4>

                        @include('mensajes.info')
                        <form method="post" action="{{ route('proveedor.update',$proveedor->id) }}" class="needs-validation" novalidate>
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control form-control-lg @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="" value="{{ (empty(old('nombre')))?$proveedor->nombre:old('nombre') }}"  maxlength="150" >
                                    @error('nombre')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Correo Electronico</label>
                                    <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" placeholder="" value="{{ (empty(old('email')))?$proveedor->email:old('email') }}"  maxlength="200" >
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Telefono</label>
                                    <input type="text" class="form-control form-control-lg @error('telefono') is-invalid @enderror" id="telefono" name="telefono" placeholder="" value="{{ (empty(old('telefono')))?$proveedor->telefono:old('telefono') }}"  maxlength="20" >
                                    @error('telefono')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="estatus">Tipo de Vendedor</label>
                                    <select class="custom-select d-block w-100 form-control-lg @error('estatus') is-invalid @enderror" id="estatus" name="estatus" >
                                        <option value="">Selecciona... </option>
                                        @if(empty(old('estatus')))
                                            <option value="Nuevo" {{ ($proveedor->estatus == 'Nuevo')?'selected':'' }}>Nuevo</option>
                                            <option value="Regular" {{ ($proveedor->estatus == 'Regular')?'selected':'' }}>Regular</option>
                                            <option value="Premium" {{ ($proveedor->estatus == 'Premium')?'selected':'' }}>Premium</option>
                                        @else
                                            <option value="Nuevo" {{ (old('estatus') == 'Nuevo')?'selected':'' }}>Nuevo2</option>
                                            <option value="Regular" {{ (old('estatus') == 'Regular')?'selected':'' }}>Regular</option>
                                            <option value="Premium" {{ (old('estatus') == 'Premium')?'selected':'' }}>Premium</option>
                                        @endif

                                    </select>
                                    @error('estatus')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="pais">Pais</label>
                                    <input type="text" class="form-control form-control-lg @error('pais') is-invalid @enderror" id="pais"  name='pais' placeholder="" value="{{ (empty(old('pais')))?$proveedor->pais:old('pais') }}"  maxlength="110" >
                                    @error('pais')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control form-control-lg @error('ciudad') is-invalid @enderror" id="ciudad"  name='ciudad' placeholder="" value="{{ (empty(old('ciudad')))?$proveedor->ciudad:old('ciudad') }}"  maxlength="150" >
                                    @error('ciudad')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-dark btn-lg btn-block" type="submit">Editar Proveedor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
