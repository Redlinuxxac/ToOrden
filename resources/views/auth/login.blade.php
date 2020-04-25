@extends('layouts.app')

@section('content')
<div class="row">
	    <div class="col s11 m8 offset-m2 fondo z-depth-4">
	    	<div class="col s12 m12">
		        <div class="col s12 m2">
			      <p class=""></p>
			    </div>
			    <div class="col s12 m2">
			      <p class=""></p>
			    </div>
            </div>
            <div class="col s12 m12">
		        <h1 class="center-align">Login</h1>
		        <div class="center-align">
		        	<p>Bienvenido a Ponsca Virtual <br>prataforma colegiar modular</p>
		        </div>
            </div>
            <div class="col s12 m12">
            	<form class="col l4 s10 offset-l4 offset-s1" action="{{ route('login') }}" method="post">
                   {{ csrf_field() }}
                   <div class="input-field col s12">
                    <select name="school_id" id="school_id" class="input-field col s12">
                        <option value="1">Ponsca</option>
                        <option value="2">Santa Rosa</option>
                        <option value="3">coorpoaran</option>
                    </select>
                    <label>Materialize Select</label>
                   </div>
                   <!--input name="school_id"  id="school_id" value="1" type="hidden"  /-->
			        <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
			          <label for="first_name">Usuario</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			        </div>
                    <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" required>
			          <label for="password">Clave</label>
                      @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
			        </div>
			        <div class="input-field col s12">
				        <a href="{{ route('password.request') }}">¿Has olvidado tu contraseña?</a>
			        </div>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>Remember Me</span>
                                    </label>
                                    <label>
                                </div>
                            </div>
                        </div>
			        <div class="input-field col s12 center-align">
			        	<button class="waves-effect waves-light btn-large">Entrar</button>
			        </div>
		        </form>
            </div>

            <div class="col s12 m12 center-align" style="margin-top:10%;">
            	<span>Copyright © 2013 TOORDEN. Desarrollado por <a href="#">CRYDIGN</a></span>
            </div>
	    </div>
    </div>
@endsection
