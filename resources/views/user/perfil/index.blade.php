@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<div class="card">
  <h2 class="card-header">Bienvenido {{ auth()->user()->name }}</h2> 
</div>
<form>
  <div class="form-row">
    <div class="form-group col-md-3,5">
      <div class="card" style="width: 22rem;">
        <img src="fotos/{{ auth()->user()->profile_picture }}" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="{{ route('admin.users.edit', auth()->user()->id) }}" class="btn btn-secondary">Ediar Perfil</a><br><br>
          <a href="{{ route('user.perfil.create') }}" class="btn btn-primary">Crear Informacion Personal</a><br><br>
          <a href="{{ route('user.perfil.edit', auth()->user()->id) }}" class="btn btn-primary">Editar Informacion Personal</a><br><br>
        </div>
      </div>
    </div>
      <div class="card-body-letf">
      <div class="pt-4 mt-2">
        <section class="mb-4 pb-1">
          @foreach ($perfils as $item)
          <div class="work-experience pt-2">
            <div class="work mb-4">
              <strong class="h5 d-block text-secondary font-weight-bold mb-1">Acerca de mi</strong>
                   <p class="text-secondary"><h6>{{ $item->main_message}}</h></p>
                   </div>
              <div class="work mb-4">
               <strong class="h5 d-block text-secondary font-weight-bold mb-1">Telefono de contacto</strong>
                    <p class="text-secondary"><h6>{{ $item->number_phone}}</h6></p>
                    </div>
                <div class="work mb-4">
                 <strong class="h5 d-block text-secondary font-weight-bold mb-1">Direccion</strong>
                  <p class="text-secondary"><h6>{{ $item->address}}</h6></p>
                  </div>
                  <div class="work mb-4">
                  <strong class="h5 d-block text-secondary font-weight-bold mb-1">Año de inicio como corredor de inmuebles</strong>
                    <p class="text-secondary"><h6>{{ $item->license_year}}</h6></p>
                 </div>
               </div>    
          @endforeach
        </section>
      </div>
    </div>
  </div>
</form>


  
  
    

@endsection