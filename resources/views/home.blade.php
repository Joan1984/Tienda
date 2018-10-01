@extends('layouts.app')
@section('body-class', 'profile-page')
@section('title', 'App shop | Dashboard')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')" >
</div>
  <div class="main main-raised">
    <div class="container">
      <div class="section ">       
        <div class="card">
            <h2 class="title text-center">Dashboard</h2>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-succes">
                            {{session('status')}}
                        </div>
                    @endif  
                       <ul class="nav nav-pills nav-pills-icons nav-stacked" role="tablist">
                            <li class="active">
                                <a href="#dashboard-2" role="tab" data-toggle="tab">
                                    <i class="material-icons btn-lg">dashboard</i>
                                    Carrito de compras
                                    </a>
                            </li>
                            <li >
                                <a href="#schedule-2" role="tab" data-toggle="tab">
                                    <i class="material-icons btn-lg">schedule</i>
                                    Pedidos realizados
                                    </a>
                            </li>
                        </ul>
                                                    
                </div>
        </div>
      </div>
    </div>
  </div>
  
@include('includes.footer')
@endsection

