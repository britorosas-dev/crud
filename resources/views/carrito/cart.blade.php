@extends('layouts.app')
@section('content')
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Producto</th>
                                <th scope="col">Disponibilidad</th>
                                <th scope="col" class="text-center">Cantidad</th>
                                <th scope="col" class="text-right">Precio</th>
                                <th> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($productos)&&count($productos)>0)
                                @foreach($productos as $carrito)
                                    <tr id="prod{{$carrito->id}}">
                                        <td><img src="{{asset('img/productos/'.$carrito->producto->foto)}}" class="img-thumbnail" style="width: 80px;"/> </td>
                                        <td>{{$carrito->producto->nombre}}</td>
                                        <td ><span class="badge badge-success">Disponible</span></td>
                                        <td><input class="form-control" type="text" value="{{$carrito->cantidad}}" /></td>
                                        <td class="text-right"><b>$ {{number_format($carrito->producto->precio_venta*$carrito->cantidad,2)}}</b></td>
                                        <td class="text-right"><button class="btn btn-sm btn-danger" onclick="if(confirm('Desea eliminar producto?')) eliminarEnCarrito('{{$carrito->id}}');"><i class="fa fa-trash"></i> </button> </td>
                                    </tr>
                                @endforeach
                            @else
                                <h2>NO HAY PRODUCTOS EN EL CARRITO :/</h2>
                            @endif

                            {{--
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Product Name Toto</td>
                                <td>In stock</td>
                                <td><input class="form-control" type="text" value="1" /></td>
                                <td class="text-right">33,90 €</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Product Name Titi</td>
                                <td>In stock</td>
                                <td><input class="form-control" type="text" value="1" /></td>
                                <td class="text-right">70,00 €</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Sub-Total</td>
                                <td class="text-right">255,90 €</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Shipping</td>
                                <td class="text-right">6,90 €</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td class="text-right"><strong>346,90 €</strong></td>
                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="row">
                        <div class="col-sm-12  col-md-6">
                            <a class="btn btn-block btn-light" href="{{asset('/')}}" >Continuar Comprando</a>
                        </div>
                        @if(isset($productos)&&count($productos)>0)
                            <div class="col-sm-12 col-md-6 text-right">
                                <button class="btn btn-lg btn-block btn-success text-uppercase">Pagar</button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function eliminarEnCarrito(idproducto){
            $.ajax(
                {
                    method:'POST',
                    url:'{{asset('cart')}}/'+idproducto,
                    dataType:'json',
                    data:{producto:idproducto,_token:'{{csrf_token()}}' }
                }
            ).done(function(resp){
                $('#prod'+idproducto).remove();
            });
        }
    </script>
@endsection
