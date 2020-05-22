@if($option)
<div class="col s12">
    <div class="input-field col s6">
        {!! Form::text('name', null ,['class' => 'validate', 'id' => "name", 'placeholder' => 'Escriba el Nombre', 'required']) !!}
        <label for="name">Nombres</label>
    </div>
    <div class="input-field col s3">
        {!! Form::text('lastname1', null ,['class' => 'validate', 'id' => "lastname1", 'placeholder' => 'Escriba el Apellido', 'required']) !!}
        <label for="lastname1">Apellidos 1</label>
    </div>
    <div class="input-field col s3">
        {!! Form::text('lastname2', null ,['class' => 'validate', 'id' => "lastname2", 'placeholder' => 'Escriba el Apellido']) !!}
        <label for="lastname2">Apellidos 2</label>
    </div>
</div>
<div class="col s12">
    <div class="input-field col s6">
        <label for="Apellido">Sexo</label>
        <div class="input-field col s6">
            <p>
                <label>
                    {!! Form::radio('sex',  'Masculino', true) !!}
                    <span><b>M</b>asculino</span>
                </label>
            </p>
        </div>
        <div class="input-field col s6">
            <p>
                <label>                    
                    {!! Form::radio('sex',  'Femenino') !!}
                    <span><b>F</b>emenina</span>
                </label>
            </p>
        </div>
    </div>
    <div class="input-field col s6">
        {!! Form::date('birthday', null ,['class' => 'datepicker', 'id' => "birthday", 'placeholder' => 'Escriba la Fecha de Nacimiento', 'required']) !!}
        <label for="birthday">Fec. Nacimiento</label>
    </div>
</div>

<div class="col s12">
    <div class="input-field col s6">
        {!! Form::text('phone[]', null ,['class' => 'validate', 'id' => "phne", 'placeholder' => '1+ 809-000-000']) !!}
        <label for="phone">Telephone</label>
    </div>
    <div class="input-field col s6">
        {!! Form::text('email[]', null ,['class' => 'validate', 'id' => "phne", 'placeholder' => 'User@email.com']) !!}
        <label for="phone">E-mail</label>
    </div>
</div>
<div class="input-field col s12">
        {!! Form::text('adress[]', null ,['class' => 'validate', 'id' => "adress", 'placeholder' => 'direccion']) !!}
    <label for="adress">Direcion</label>
</div>

<div class="col s12">
    <div class="input-field col s6">
        {!! Form::select('contry', ['0' => 'Selecion una opcion','1'=> 'Santo Domingo','2'=> 'Santo Domingo','3'=> 'Santo Domingo','4'=> 'Santo Domingo']) !!}
        <label for="contry">Ciudad</label>
    </div>
    <div class="input-field col s6">
        {!! Form::text('barrio', null ,['class' => 'validate', 'id' => "barrio", 'placeholder' => 'Escriba el Bario Seccion o paraje']) !!}
        <label for="barrio">Sector Bario o paraje</label>
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
        <textarea id="textarea" class="materialize-textarea" placeholder = 'Escriba su observacion'></textarea>
        <label for="textarea1">Observacion</label>
    </div>
    <div class="input-field col s6">

    </div>
    <div class="col s12">
        <button class="btn waves-effect btn-large blue darken-2 right" type="submit" name="action">Enviar</button>
    </div>
</div>
@endif