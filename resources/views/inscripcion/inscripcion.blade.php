@extends('layouts.app0')
@section('title', 'Panel')
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
<div class="row">
    <div class="col s12">
    <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Nuevo Estudiante</span></h5>             
    <ol class="breadcrumbs mb-0">
        <li class="breadcrumb-item"><a href="#">Inicio</a>
        </li>
        <li class="breadcrumb-item"><a href="#">Incripcion</a>
        </li>
        <li class="breadcrumb-item active">Nuevo Estudiante
        </li>
    </ol>
    </div>
</div>
<div class="card-panel"><div class="row">
    <div class="col s12">

    <form>
        <div class="col s12">
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="Nombre" type="text" class="validate">
                <label for="Nombre">Nombres</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="Apellido" type="text" class="validate">
                <label for="Apellido">Apellidos</label>
            </div>
        </div>    
        
        <div class="col s12">
            <div class="input-field col s6">
        <label for="Apellido">Sexo</label>
            <div class="input-field col s6">
            <p>
                <label>
                <input name="group1" type="radio" checked />
                <span><b>M</b>asculino</span>
                </label>
            </p>
        </div>
        <div class="input-field col s6">
            <p>
                <label>
                <input name="group1" type="radio" />
                <span><b>F</b>emenina</span>
                </label>
            </p>
        </div>
            </div>
            <div class="input-field col s6">
            <input placeholder="Placeholder" id="fecha" type="text" class="datepicker">
            <label for="fecha">Fec. Nacimiento</label> 
            </div>  
        </div>

        <div class="col s12">
            <div class="input-field col s6">
            <input placeholder="1+ 809-000-000" id="icon_telephone" type="tel" class="validate">
            <label for="icon_telephone">Telephone</label>
            </div>
        </div>
        <div class="input-field col s12">
            <input placeholder="Placeholder" id="direcion" type="text" class="validate">
            <label for="direcion">Direcion</label>
        </div>

        <div class="col s12">
            <div class="input-field col s6">
                <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                </select>
                <label>Ciudad</label>
            </div>
            <div class="input-field col s6">
                <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                </select>
                <label>Sector o Barrio</label>
            </div>
        </div>

        <div class="col s12">
            <div class="input-field col s6">
                <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                </select>
                <label>Ultimo año cursado</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="NombreEscuela" type="text" class="validate">
                <label for="NombreEscuela">Escuela de procedencia</label>
            </div>
        </div>

        <div class="col s12">
            <div class="input-field col s6">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Observacion</label>
            </div>
            <div class="input-field col s6">
                
            </div>
        </div>

    </form>
    </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
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
              format:'dd-mmmm-yyyy'
           });

           $('#textarea1').val('New Text');
           M.textareaAutoResize($('#textarea1'));

           document.addEventListener('DOMContentLoaded', function() {
             var elems = document.querySelectorAll('select');
             var instances = M.FormSelect.init(elems,);
           });
</script>
@endsection