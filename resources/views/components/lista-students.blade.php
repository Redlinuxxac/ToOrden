Resultado de la Consulta: <b>{{ $name }}</b>
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
           @foreach($students as  $student)
           <tr>
                <td>{{ \Carbon\Carbon::parse($student->birthday)->format('ymdHms') }}{{ $student->id}}</td>
                <td>{{ $student->lastname1 }} {{ $student->lastname2 }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ \Carbon\Carbon::parse($student->birthday)->age }}</td>
                <td>{{ $student->sex }}</td>
                <td>4to Inf.</td>
                <td><a href="{{ url('inscripcion/'.$student->id.'/edit') }}"><i class="material-icons">edit</i></a></td>
                <td><a href="{{ url('inscripcion/'.$student->id) }}"><i class="material-icons">remove_red_eye</i></a></td>
                <td>
                    <a href="#" <?php $f ='form'.$student->id ?>
                               onclick="event.preventDefault();
                               document.getElementById('{{ $f }}').submit();">
                               <i class="material-icons">delete</i></a>
                               {!! Form::open(['route' =>[ 'inscripcion.destroy', $student], 'id' => "form$student->id", 'method' => 'delete' ]) !!}
                               {!! Form::close() !!}
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
    <div class="paginar">
        {!! $students->render() !!}
    </div>