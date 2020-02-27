@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<style>
  .checked {
    color: orange;
  }
  </style>
 
@foreach ($user as $users)
<div class="container py-4 my-2">
<div class="row">
  
  <div class="col-md-4 pr-md-5">
    <h3 class="font-weight-bold m-0">
      Bienvenido {{ auth()->user()->name }}
    </h3>
    <p class="h4 text-primary mt-2 d-block font-weight-light">
      Foto de Perfil
    </p>
    <img class="w-100 rounded border" src="{{Storage::url($users->profile_picture)}}" />
     
  </div>
  <div class="col-md-8">
     
      <section class="mt-4">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
             
              <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                      Acerca de mi
                  </a>
              </li>
              @can('natural-users')
              <li class="nav-item">
                  <a class="nav-link" id="natural-tab" data-toggle="tab" href="#natural" role="tab" aria-controls="natural" aria-selected="false">
                      Informacion Persona Natural
                  </a>
              </li>
              @endcan
              @can('juridico-users')
              <li class="nav-item">
                  <a class="nav-link" id="juridico-tab" data-toggle="tab" href="#juridico" role="tab" aria-controls="juridico" aria-selected="false">
                      Informacion Persona Juridica
                  </a>
              </li>
              @endcan
              @can('generic-users')
              <li class="nav-item">
                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">
                    Ingrese el cupon de registro
                </a>
              </li>
              @endcan
          </ul>

          <div class="tab-content py-4" id="myTabContent">
              
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                    Quien soy
                </p>
      
                <p class="h5 mt-4">
                  {{ $users->main_message}}
                </p>
                
                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Telefono de contacto
                </p>
                <p class="h5 mt-4">
                {{ $users->number_phone}}
                </p>
      
                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Año de inicio como corredor de inmuebles
                </p>
                <p class="h5 mt-4">
                {{ $users->license_year}}
                </p>
      
                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Direccion
                </p>
                <p class="h5 mt-4">
                {{ $users->address}}
                </p>
                <br>

                <div class="form-row">       
                  <div>
                      <a href="{{ route('admin.users.edit', auth()->user()->id) }}" class="btn btn-block btn-lg btn-primary">Editar Perfil</a>
                    </div>
                  </div>  
              </div>

              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">

                <div class="form-row">       
                  <div>
                      <a href="{{ route('admin.users.edit', auth()->user()->id)}}" class="btn btn-block btn-lg btn-primary">role</a>
                      <input type="hidden" id="premiun" name="premiun" value="55">
                    </div>
                  </div> 

              </div>
              
              <div class="tab-pane fade" id="natural" role="tabpanel" aria-labelledby="natural-tab">

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Numero de licencia Persona Natural
                </p>

                <p class="h5 mt-4">
                  {{ $users->no_lic_pn}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Fecha de Emision
                </p>

                <p class="h5 mt-4">
                  {{ $users->fecha_emision}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Fecha de Vencimiento
                </p>

                <p class="h5 mt-4">
                  {{ $users->fecha_vencimiento}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Nombre de Ideonidad
                </p>

                <p class="h5 mt-4">
                  {{ $users->nombre_idoneidad}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Estado
                </p>

                <p class="h5 mt-4">
                  {{ $users->status}}
                </p>

                <div class="form-row">       
                  <div>
                      <a href="{{ route('admin.users.edit', auth()->user()->id) }}" class="btn btn-block btn-lg btn-primary">Editar Perfil</a>
                    </div>
                  </div> 
                      
                
              </div>

              <div class="tab-pane fade" id="juridico" role="tabpanel" aria-labelledby="juridico-tab">

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Numero de licencia 
                </p>

                <p class="h5 mt-4">
                  {{ $users->no_lic}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Nombre de Sociedad Anonima 
                </p>

                <p class="h5 mt-4">
                  {{ $users->nombre_sociedad_anonima}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Fecha de Emision
                </p>

                <p class="h5 mt-4">
                  {{ $users->fecha_emision}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Fecha de Vencimiento 
                </p>

                <p class="h5 mt-4">
                  {{ $users->fecha_vencimiento}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Suspendido hasta la fecha 
                </p>

                <p class="h5 mt-4">
                  {{ $users->suspendidos_cancel_hasta_la_fecha}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Nombre de Representante Legal
                </p>

                <p class="h5 mt-4">
                  {{ $users->nombre_representante_legal}}
                </p>

                <p class="h4 text-primary mt-2 d-block font-weight-light">
                  Numero de Licencia de Persona Natural 
                </p>

                <p class="h5 mt-4">
                  {{ $users->no_lic_pn}}
                </p>

              </div>
          </div>
      </section>
      
      </div>
  </div>
</div>
</div>
@endforeach
{{-- <div class="row no-gutters">    {{ $naturales -> no_lic_pn }} </div>
<div class="row no-gutters">   {{  $naturales ->reputacion }} </div>
<div class="row no-gutters">  {{  $naturales ->nombre_idoneidad	 }}  </div>
  <div class="row no-gutters">  {{ $naturales ->email }} </div>
      <div class="row no-gutters">  {{ $naturales ->fecha_emision }} </div>
          <div class="row no-gutters">   {{ $naturales  ->fecha_vencimiento }} </div> --}}

{{-- <section class="showcase">
  
<div class="container-fluid p-0">
<div class="row no-gutters">

  
  <div class="col-lg-12 order-lg-1 my-auto showcase-text">
    <h2>Perfil de Corredor</h2>
    <p class="lead mb-0">Informacion General</p>
  </div>
</div>
{{-- //TODO: FORMATEAR --}}









{{-- @foreach ($naturales as $natural)
<tr>
<!--  <td> {{$natural->id_natural}}  </td> -->  

   

<td>{{$natural->no_lic_pn}} </td>
<td>{{$natural->reputacion}} </td>
<td>{{$natural->nombre_idoneidad}} </td>
<td>{{$natural->email}} </td>
<td>{{$natural->fecha_emision}} </td>
<td>{{$natural->fecha_vencimiento}} </td>
<td>{{$natural->status}} </td>



</tr> 
@endforeach            

--}}



@endsection





<!-- Required Resources -->
{{-- 

<header class="bg-white">
<nav class="navbar navbar-expand-md navbar-light container">
  <div class="d-flex order-0">
      <a class="navbar-brand align-items-center d-flex mr-1 font-weight-bold" href="#">
          <img class="navbar-logo" src="https://cdn.bootstrapsnippet.net/assets/image/bootstrapsnippet.png" />
          <span>
              BootstrapSnippet<sup class="text-warning">.net</sup>
          </span>
      </a>
  </div>
  <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
      <span class="navbar-toggler-icon"></span>
  </button>
  <form class="ml-md-5 pl-md-5 mt-3 mt-md-0 navbar-search">
      <input placeholder="Search something" size="90" class="form-control" />
  </form>
  <div class="navbar-collapse justify-content-end collapse w-100" id="collapsingNavbar">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link px-2" href="">Home</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link px-2" href="">My Profile</a>
          </li>
          <li class="nav-item">
              <a class="nav-link px-2" href="">Friends</a>
          </li>
          <li class="nav-item">
              <a class="nav-link px-2" href="">Messages</a>
          </li>
      </ul>
      <div class="btn-group ml-4">
          <a href="javascript:;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="navbar-avatar rounded-circle" src="https://cdn.bootstrapsnippet.net/assets/image/dummy-avatar.jpg" />
          </a>
          <div class="dropdown-menu dropdown-menu-right mt-3">
              <a class="dropdown-item" href="">Action</a>
              <a class="dropdown-item" href="">Another action</a>
              <a class="dropdown-item" href="">Something else here</a>
          </div>
      </div>
  </div>
</nav>
</header> --}}
