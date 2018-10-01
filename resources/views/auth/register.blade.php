@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="page-header header-filter" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 ml-auto mr-auto">
  <div class="card card-login">
    <form class="form" method="POST" action="{{route('register')}}">
        {{csrf_field()}}

      <div class="card-header card-header-primary text-center">
        <h4 class="card-title">Registro</h4><!-- 
        <div class="social-line">
          <a href="#pablo" class="btn btn-just-icon btn-link">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a href="#pablo" class="btn btn-just-icon btn-link">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="#pablo" class="btn btn-just-icon btn-link">
            <i class="fa fa-google-plus"></i>
          </a>
        </div> -->
      </div>
      <p class="description text-center">Completa tus datos</p>
      <div class="card-body">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">face</i>
                </span>
            </div>
            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre..." name="name" value="{{old('name')}}"    required autofocus>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">mail</i>
                </span>
            </div>
            <input id="email" type="email" class="form-control" placeholder="Email adress..." name="email" value="{{old('email')}}"    required autofocus>
             @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                </span>
            </div>
                <input type="password" name="password" class="form-control" placeholder="Contraseña..." required>
                 @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                </span>
            </div>
                <input type="password"  name="password_confirmation" class="form-control" placeholder="Confirmar contraseña..." required>
        </div>
      </div>
      <div class="footer text-center">
        <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Confirmar registro</a>
      </div>
      <!--<a class="btn-link" href="{{route('password.request')}}">
          Olvidaste tu contraseña
      </a>-->
    </form>
  </div>
</div>
</div>
@include('includes.footer')
</div>

@endsection
