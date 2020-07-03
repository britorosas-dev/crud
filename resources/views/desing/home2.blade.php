@extends('layouts.app')
@section('content')
    <div class="row jumbotron" style="margin-bottom: .5rem;">
        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Busqueda de Productos</h4>
            <form class="needs-validation" novalidate>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg is-invalid" placeholder="Laptop, MicroSD" aria-label="" aria-describedby="">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" id="button-addon2">Buscar</button>
                        </div>
                        <div class="invalid-feedback">
                            Campo Obligatorio.
                        </div>
                    </div>


            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">

            <!-- List group-->
            <ul class="list-group shadow">

                <!-- list group item-->
                <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h5 class="mt-0 font-weight-bold mb-2">Awesome product</h5>
                            <p class="font-italic text-muted mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit fuga autem maiores necessitatibus.</p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2">$120.00</h6>
                                <ul class="list-inline small">
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                </ul>
                            </div>
                        </div><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                    </div>
                    <!-- End -->
                </li>
                <!-- End -->




                <!-- End -->

            </ul>
            <!-- End -->
        </div>
    </div>
    <div class="row ">
        <h4 class="mb-3">Resultados <span class="text-muted font-italic" >4 productos</span></h4>
        <hr class="mb-4">



        <!-- Project One -->
        <div class="row product">
            <div class="col-md-2" style="padding-left: 0">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/200x200" alt="">
                </a>
            </div>
            <div class="col-md-8">
                <h3 class="my-0">LG G6</h3>
                <div class="stats">
                    <span class="text-muted"><i class="fa fa-tags"></i>32 Vendidos</span>
                    <span class="text-muted"><i class="fas fa-map-marked-alt"></i>Campeche, Mexico</span>
                </div>
                <p>
                    The LG G6 utilizes a metal chassis with a glass backing, and is IP68-rated for water and dust-resistance. It will be available in black, white, and silver-color finishes. The G6 features a inch 1440p IPS LCD display, supporting HDR10 and Dolby Vision.
                </p>
            </div>
            <div class="col-md-2">
                <div class="product_description">
                    <div class="text-center"> <span class="product_price ">$ 29,000</span> </div>
                    <div ><span class="review"><i class="fa fa-truck" style="padding-right: 8px;"></i> Envio Gratis</span> </div>
                    <div ><span class="review"><i class="fa fa-star" style="padding-right: 8px;"></i> Nuevo </span> </div>
                    <div ><span class="review"><i class="fa fa-certificate" style="padding-right: 8px;"></i> Premium</span> </div>
                    <div class="my-1">
                         <button type="button" class="btn btn-success btn-block shop-button">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row product">
            <div class="col-md-2" style="padding-left: 0">
                <a href="#">
                    <img class="  img-fluid  rounded mb-3 mb-md-0" src="http://placehold.it/400x400" alt="">
                </a>
            </div>
            <div class="col-md-8">
                <h3 class="my-0">LG G6</h3>
                <div class="stats">
                    <span class="text-muted"><i class="fa fa-tags"></i>32 Vendidos</span>
                    <span class="text-muted"><i class="fas fa-map-marked-alt"></i>Campeche, Mexico</span>
                </div>
                <p>
                    The LG G6 utilizes a metal chassis with a glass backing, and is IP68-rated for water and dust-resistance. It will be available in black, white
                </p>
            </div>
            <div class="col-md-2">
                <div class="product_description">
                    <div class="text-center"> <span class="product_price ">$ 29,000</span> </div>
                    <div ><span class="review"><i class="fa fa-truck" style="padding-right: 8px;"></i> Envio Gratis</span> </div>
                    <div ><span class="review"><i class="fa fa-star" style="padding-right: 8px;"></i> Nuevo </span> </div>
                    <div ><span class="review"><i class="fa fa-certificate" style="padding-right: 8px;"></i> Premium</span> </div>
                    <div class="my-1">
                        <button type="button" class="btn btn-success btn-block shop-button">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

@endsection

@section('styles')
    .product {
    border-bottom: 1px solid rgba(0, 0, 0, .125);
    margin-bottom:10px;
    background-color: #fff;
    box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.05);
    }
    .product .stats{float:left; width:100%; margin-top:1px;}
    .product .stats span{float:left; margin-right:10px; font-size:14px;}
    .product .stats span i{margin-right:7px; color:#4765AB;}

    .product_price {
    display: inline-block;
    font-size: 30px;
    font-weight: 500;
    margin-top: 1px;
    clear: left;
    color: #06a7ea
    }

    .review {
    font-size: 18px;
    }
@endsection

