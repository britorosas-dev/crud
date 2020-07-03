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
                        <h4 class="mb-3">Registro de Proveedores</h4>

                        @include('mensajes.info')
                        <form method="post" action="{{ route('proveedor.store') }}" class="needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control form-control-lg @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="" value="{{ old('nombre') }}"  maxlength="150" >
                                    @error('nombre')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Correo Electronico</label>
                                    <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" placeholder="" value="{{ old('email') }}"  maxlength="200" >
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
                                    <input type="text" class="form-control form-control-lg @error('telefono') is-invalid @enderror" id="telefono" name="telefono" placeholder="" value="{{ old('telefono') }}"  maxlength="20" >
                                    @error('telefono')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="estatus">Tipo de Vendedor</label>
                                    <select class="custom-select d-block w-100 form-control-lg @error('estatus') is-invalid @enderror" id="estatus" name="estatus" >
                                        <option value="">Selecciona...</option>
                                        <option value="Nuevo" {{ (old('estatus') == 'Nuevo')?'selected':'' }}>Nuevo</option>
                                        <option value="Regular" {{ (old('estatus') == 'Regular')?'selected':'' }}>Regular</option>
                                        <option value="Premium" {{ (old('estatus') == 'Premium')?'selected':'' }}>Premium</option>
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
                                    <input type="text" class="form-control form-control-lg @error('pais') is-invalid @enderror" id="pais"  name='pais' placeholder="" value="{{ old('pais') }}"  maxlength="110" >
                                    @error('pais')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control form-control-lg @error('ciudad') is-invalid @enderror" id="ciudad"  name='ciudad' placeholder="" value="{{ old('ciudad') }}"  maxlength="150" >
                                    @error('ciudad')
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
