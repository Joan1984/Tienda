@extends('layouts.app')
@section('body-class', 'profile-page')
@section('title', 'Imagenes de Productos')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')" >
    
</div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Imagenes de Producto "{{$product->name}}"</h2>
          <form method="post" action="" enctype="multipart/form-data">
            {{csrf_field()}}
              <input type="file" name="photo" required>
              <div class="section text-center">
              <button type="submit" title="Nueva Imagen" class="btn btn-info btn-round">Subir nueva imagen</button>
              <a href="{{url('/admin/products')}}" title="Volver a listado de productos" class="btn btn-default btn-round">Volver a listado de productos</a>
            </div>
           </form>
           <hr>
          <div class="trans text-center"> 
              <div class="row">
                @foreach($images as $image)
                <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$image->url}}" alt="Card image cap">
                      <div class="card-body">
                        <form method="post" action="">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                           <input type="hidden" name="image_id" value="{{ $image->id }}">
                          <button type="submit" class="btn btn-danger" title="Eliminar  imagen">Eliminar imagen</button> 
                        </form>
                      </div>
                  </div>
                </div>
              @endforeach
              </div>
          </div>
        
      </div>
  </div>
@include('includes.footer')
@endsection
