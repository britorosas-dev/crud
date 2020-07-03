@extends('layouts.app')
@section('content')
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <div class="col-md-12 order-md-1 mb-5">
                <div class="py-1 text-center">
                    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                </div>

                <div class="row">
                    <div class="col-md-12 order-md-1">
                        <h4 class="mb-3">Billing address</h4>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label for="nombre">Nombre del Producto</label>
                                    <input type="text" class="form-control form-control-lg is-invalid" id="nombre" placeholder="" value="" >
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="cc-name">Precio de Venta</label>
                                    <input type="text" class="form-control form-control-lg" id="cc-name" placeholder="" >
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control form-control-lg" id="descripcion" rows="3"></textarea>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Foto">Foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input is-invalid" id="Foto" name="Foto">
                                        <label class="custom-file-label" for="customFile">Selecciona Foto</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>

                            </div>









                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="costoEnvio">Costo de envio</label>
                                    <select class="custom-select d-block w-100" id="costoEnvio" >
                                        <option value="">Selecciona...</option>
                                        <option value="gratis">Gratuito</option>
                                        <option value="pago">Con Costo</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state">Estado del producto</label>
                                    <select class="custom-select d-block w-100" id="state" required>
                                        <option value="">Selecciona...</option>
                                        <option value="nuevo">Nuevo</option>
                                        <option value="usado">Usado</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="proveedor">Proveedor</label>
                                    <select class="custom-select d-block w-100" id="proveedor" >
                                        <option value="">Selecciona...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>

                            </div>

                            <hr class="mb-4">



                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
