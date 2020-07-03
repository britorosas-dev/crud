@extends('layouts.app')
@section('content')
    <div class="card border-0 shadow my-5">
        <section class=" text-right">
            <div class="container">
               <p>
                    <a href="#" class="btn btn-primary my-2">
                        <i class="fa fa-plus"></i>
                        Nuevo Registro
                    </a>
                </p>
            </div>
        </section>
        <div class="row">
            <div class="col-12">
                <table class="table table-image table-hover table-striped table-sm" >
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">Day</th>
                        <th scope="col">Image</th>
                        <th scope="col">Article Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Words</th>
                        <th scope="col">Shares</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr  >
                        <th class="align-middle text-center" scope="row">1</th>
                        <td class="w-25">
                            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg" class="img-fluid img-thumbnail" alt="Sheep" style="max-width: 100px">
                        </td>
                        <td class="align-middle" >Bootstrap 4 CDN and Starter Template</td>
                        <td class="align-middle">Cristina</td>
                        <td class="align-middle">913</td>
                        <td class="align-middle">2.846</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
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
    </div>
@endsection
