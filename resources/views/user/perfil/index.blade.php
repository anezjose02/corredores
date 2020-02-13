@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<div class="container py-4 my-2">
  @foreach ($user as $users)
  <div class="row">
      <div class="col-md-4 pr-md-5">
        <div class="d-flex align-items-center">
          <h2 class="font-weight-bold m-0">
            Bienvenido {{ auth()->user()->name }}
          </h2>
        </div>
        <br>
        <p class="h4 text-primary mt-2 d-block font-weight-light">
          Foto de Perfil
        </p>
          <img class="w-100 rounded border" src="{{Storage::url($users->profile_picture)}}" />
      </div>
      <div class="col-md-8">
      <br><br><br>
          <p class="h4 text-primary mt-2 d-block font-weight-light">
              Acerca de mi
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
        </section> 
      </div>
      @endforeach

    </div>
  </div>
