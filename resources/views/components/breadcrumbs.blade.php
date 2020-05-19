<div class="row">
    <div class="col  s12">
        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>{{ $lugar }}</span></h5>
        <ol class="breadcrumbs mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a>
            </li>
            @if($accion==null)
            <li class="breadcrumb-item active">{{ $label }}</li>
            @else
            <li class="breadcrumb-item active"><a href="{{ route($accion)}}">Incripcion</a></li>
            @endif
        </ol>
    </div>
</div>