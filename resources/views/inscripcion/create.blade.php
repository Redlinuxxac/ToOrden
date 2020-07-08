@extends('layouts.app0')
    @section('title', 'Inscripicion')
@section('MenuLogo')
    @include('plantillas.MenuLogo')
@endsection
@section('buscador')
    @include('plantillas.buscador')
@endsection
@section('menu')
    @include('plantillas.PanelMenu', ['Seccion' => 'Home'])
@endsection
@section('MenuDerecho')
    @include('plantillas.MenuDerecho')
@endsection
@section('content')
<x-breadcrumbs lugar="Creacion De Estudiante" label="Incripcion" accion="inscripcion.index"></x-breadcrumbs>
<div class="card-panel">
    <div class="row">
        <div class="col s12">
            {!! Form::open(['route' => 'inscripcion.store', 'method' => 'post']) !!}
                <x-field option="inscripcion"></x-field>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $(".menu-to ").toggleClass("collapse");
        $(".menuBT").click(function() {
            event.preventDefault();
            $(".menu-to ").toggleClass("collapse")
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems, );
    });
    $(document).ready(function() {
        $('.collapsible').collapsible();
    })
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, {
            coverTrigger: false,
            alignment: 'right',
            constrainWidth: false
        });
    });
      
    const Calender = document.querySelector('.datepicker');
           M.Datepicker.init(Calender, {
             // format:'dd-mm-yyyy'             
             format:'yyyy-mm-dd'
           });
           if($('#textarea1').length){
                // $('#textarea1').val('New Text');
                M.textareaAutoResize($('#textarea1'));
            }

           document.addEventListener('DOMContentLoaded', function() {
             var elems = document.querySelectorAll('select');
             var instances = M.FormSelect.init(elems,);
           });
</script>
@endsection