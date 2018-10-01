@extends('layouts.app')
@section('body-class', 'profile-page')
@section('title', 'Listado de Productos')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')" >
    
</div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Listado de Productos</h2>
        <div class="team">
          <div class="trans text-center"> 
              <a href="{{url('/admin/products/create')}}" title="Crear Producto" class="btn btn-info btn-round">Nuevo Producto</a>
            </div>
          <div class="row">            
           <table class="table">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th class="col-md-2 text-center">Nombre</th>
                      <th class="col-md-4 text-center">Descripcion</th>
                      <th class="text-center">Categoria</th>
                      <th class="text-right">Precio</th>
                      <th class="text-center">Opciones</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                  <tr>
                      <td class="text-center">{{$product->id}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->category ? $product->category->name : 'General' }}</td>
                      <td class="text-right">&euro; {{$product->price}}</td>
                      <td class="td-actions text-right">
                          <form method="post" action="{{ url('/admin/products/'.$product->id) }}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="" rel="tooltip" title="Ver producto" class="btn btn-info btn-sm">
                              <i class="fa fa-info"></i>
                            </a>
                            <a href="{{url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar producto" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>
                            </a>
                            <a href="{{url('/admin/products/'.$product->id.'/images')}} " rel="tooltip" title="Imagenes del producto" class="btn btn-warning btn-sm">
                              <i class="fa fa-image"></i>
                            </a>
                            <button type="submit" rel="tooltip" title="Eliminar"  class="btn btn-danger btn-sm">
                              <i class="fa fa-times"></i>
                            </button>
                          </form>
                             
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
            {{ $products->links() }}
          </div>
        </div>
      </div>
  </div>
@include('includes.footer')
@endsection
