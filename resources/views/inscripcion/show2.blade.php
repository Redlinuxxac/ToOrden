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
<div class="row">
    <div class="col  s12">
        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Listado de Estudiantes</span></h5>

        <ol class="breadcrumbs mb-0">
            <li class="breadcrumb-item"><a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Incripcion
            </li>
        </ol>

    </div>
</div>
<x-breadcrumbs lugar="Listado De Estudiantes" label="Incripcion"></x-breadcrumbs>
<div class="card-panel">
    <div class="row">
        <div class="col s12  ">
            <div class="col s3 right">
                <a class="btn waves-effect waves-light orange darken-3" href="{{ route('inscripcion.create') }}">Nuevo Estudiante
                    <i class="material-icons right">school</i>
                </a>
            </div>
        </div>
        <div class="col s12  ">
            <div class="divider mb-3"></div>
        </div>
        {!! Form::open(['action' => 'RegistrationStudentController@buscar', 'id'=>'consultaEst', 'method' => 'post']) !!}
        <div class="col s12">
            <div class="col s3 input-field">
                <input placeholder="Escriba el nombre y apellido" name="name" id="name" type="text" class="validate">
                <label for="first_name">Buscador Estudiante</label>
            </div>
            <div class="col s3 input-field">
                <select name="grado" id="grado">
                    <optgroup label="Primero">
                        @foreach($periods as $period)
                        @foreach($period->sections as $section)
                        <option value="{{ $section->name }}">{{ $section->name }}</option>
                        @endforeach
                        @endforeach
                    </optgroup>
                    <optgroup label="Seguno">
                        <option value="2A">2A</option>
                        <option value="2B">2B</option>
                    </optgroup>
                </select>
                <label>Curso</label>
            </div>
            <div class="input-field col s3">
                <select name="materia" id="materia">
                    <option value="" disabled selected>Materia</option>
                    @foreach($materias as $materia)
                    <option value="{{ $materia->id }}">{{ $materia->name }}
                        @if($materia->name=='1A')<?php $v = '{{$materia->name}}';
                                                    echo $v . "aqui"; ?>@endif</option>
                    @endforeach
                </select>
                <label>Materia</label>
            </div>
            <div class="col s3">
                <button class="btn waves-effect btn-large blue darken-2 right" type="submit" name="Buscar" id="Buscar">Buscar</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="card-panel">
    <table id="ToOrdentable" class="display responsive nowrap">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Grado</th>
                <th>Editar</th>
                <th>ver</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($periods as $period)
            @foreach($period->sections as $section)
            @foreach($section->students as $student)
            <tr>
                <td>{{ \Carbon\Carbon::parse($student->birthday)->format('ymdHms') }}{{ $student->id}}</td>
                <td>{{ $student->lastname1 }} {{ $student->lastname2 }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ \Carbon\Carbon::parse($student->birthday)->age }}</td>
                <td>{{ $student->sex }}</td>
                <td>{{ $section->name }}</td>
                <td><a href="{{ url('inscripcion/'.$student->id.'/edit') }}"><i class="material-icons">edit</i></a></td>
                <td><a href="{{ url('inscripcion/'.$student->id) }}"><i class="material-icons">remove_red_eye</i></a></td>
                <td>
                    <a href="#" <?php $f = 'form' . $student->id ?> onclick="event.preventDefault();
                               document.getElementById('{{ $f }}').submit();">
                        <i class="material-icons">delete</i></a>
                    {!! Form::open(['route' =>[ 'inscripcion.destroy', $student], 'id' => "form$student->id", 'method' => 'delete' ]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            @endforeach
            @endforeach
        </tbody>
    </table>
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
        format: 'dd-mmmm-yyyy'
    });

    $('#textarea1').val('New Text');
    M.textareaAutoResize($('#textarea1'));

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, );
    });
    $(document).ready(function() {
        $('#ToOrdentable').DataTable();
        $('select').formSelect().string('browser-default');
    });
    $('#consultaEst').bind("submit", function() {
        event.preventDefault();
        var token = $('input[name="_token"]').val();
        var name = $('#name').val();
        var grado = $('#grado').val();
        var materia = $('#materia').val();
        //alert(token);
        BtnBuscar = $('#Buscar');
        $.ajax({
            type: $(this).attr('method'),
            url: "{{ url('inscripcion/buscar') }}",
            data: {
                '_token': token,
                'name': name,
                'grado': grado,
                'materia': materia,
            },
            beforeSend: function() {
                BtnBuscar.val("Buscarndo...");
                BtnBuscar.attr("disabled");
            },
            complete: function(data) {
                BtnBuscar.val("Buscar");
                BtnBuscar.removeAttr("disabled");
            },
            success: function(data) {

                $('#lista').html(data);
                //alert("Respuesta "+data.name);
            },
            error: function(data) {
                alert('Ocurrio Un Error!!' + data);
            }
        });
    });
</script>
@endsection