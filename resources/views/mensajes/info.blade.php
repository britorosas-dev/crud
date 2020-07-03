@if(Session::has('Info'))
<div class="m-alert m-alert--icon alert alert-secondary" role="alert">
    <div class="m-alert__icon">
        <i class="la la-info-circle"></i>
    </div>
    <div class="m-alert__text">
        <strong>
        </strong> {{ Session::get('Info') }}
    </div>
    <div class="m-alert__close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
    </div>
</div>
@endif

@if(Session::has('Exception'))
<div class="m-alert m-alert--icon alert alert-danger" role="alert">
    <div class="m-alert__icon">
        <i class="la la-info-circle"></i>
    </div>
    <div class="m-alert__text">
        <strong>Error: </strong> {{ Session::get('Exception') }}
    </div>
    <div class="m-alert__close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
    </div>
</div>
@endif

@if(count($errors))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
        <strong>Ocurrieron los siguientes errores:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
