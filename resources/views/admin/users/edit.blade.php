@extends('user.layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
            <div class="card-header">Bienvenido {{ auth()->user()->name }}</div>

                <div class="card-body">
                <form action="{{ route('admin.users.update', $user) }}" method="POST" enctype="multipart/form-data">
                    
                    @can('natural-users')
                    <input type="hidden" id="id_role" name="id_role" value="4">
                    @endcan
                    @can('juridico-users')
                    <input type="hidden" id="id_role" name="id_role" value="5">
                    @endcan
                    <input type="hidden" id="id" name="id" value="{{ $user->id }}">

                    <section class="mt-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    Acerca de mi
                                </a>
                            </li>
                            @can('natural-users')
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
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

                            @can('adminonly-users')
                            <li class="nav-item">
                                <a class="nav-link" id="role-tab" data-toggle="tab" href="#role" role="tab" aria-controls="role" aria-selected="false">
                                    Role
                                </a>
                            </li>
                            @endcan
                        </ul>
                        
                        <div class="tab-content py-4" id="myTabContent">
              
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              
                                <div class="form-group">
                                    <label for="name">Nombre de Usuario</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required autofocus>
                                </div>
            
                                <div class="form-group">
                                    <label for="profile_picture">Imagen de Perfil</label>
                                    <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
                                </div>
            
                                <div class="form-group">
                                    <label for="main_message">Mensaje Principal</label>
                                    <input id="main_message" type="text" class="form-control" name="main_message" value="{{ $user->main_message }}" required autofocus>
                                </div>
            
                                <div class="form-group">
                                    <label for="number_phone">Numero de Telefono</label>
                                    <input type="number" class="form-control" id="number_phone" name="number_phone" value="{{ $user->number_phone }}"  required autofocus>
                                </div>
            
                                <div class="form-group">
                                    <label for="license_year">Año de Licencia</label>
                                    <input id="datepicker" class="form-comtrol" name="license_year" width="276" value="{{ $user->license_year }}" required autofocus />
                                <script>
                                    $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4',
                                    format: 'yyyy/mm/dd',});
                                </script>
                                </div>
            
                                <div class="form-group">
                                    <label for="adress">Direccion</label>
                                    <input type="text" class="form-control" id="adress" name="address"  value="{{ $user->address }}" required autofocus>
                                </div>
                        
                            </div>

                            <div class="tab-pane fade" id="juridico" role="tabpanel" aria-labelledby="juridico-tab">
                                @can('juridico-users')
              
                                <div class="form-group">
                                    <label for="no_lic">Numero de Licencia </label>
                                    <input type="text" class="form-control" id="no_lic" name="no_lic"  value="{{ $user->no_lic }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="nombre_sociedad_anonima">Nombre de Sociedad Anonima </label>
                                    <input type="text" class="form-control" id="nombre_sociedad_anonima" name="nombre_sociedad_anonima"  value="{{ $user->nombre_sociedad_anonima }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="fecha_emision">Fecha de emision de la licencia</label>
                                    <input id="datepicker" class="form-comtrol" name="fecha_emision" width="276" value="{{ $user->fecha_emision }}" required autofocus />
                                <script>
                                    $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4',
                                    format: 'yyyy/mm/dd',});
                                </script>
                                </div>
            
                                <div class="form-group">
                                    <label for="fecha_vencimiento">Fecha de vencimiento de la licencia</label>
                                    <input id="datepicker" class="form-comtrol" name="fecha_vencimiento" width="276" value="{{ $user->fecha_vencimiento }}" required autofocus />
                                <script>
                                    $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4',
                                    format: 'yyyy/mm/dd',});
                                </script>
                                </div>

                                <div class="form-group">
                                    <label for="suspendidos_cancel_hasta_la_fecha">Suspendido hasta la fecha </label>
                                    <input id="datepicker" class="form-comtrol" name="suspendidos_cancel_hasta_la_fecha" width="276" value="{{ $user->suspendidos_cancel_hasta_la_fecha }}" required autofocus />
                                <script>
                                    $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4',
                                    format: 'yyyy/mm/dd',});
                                </script>
                                </div>

                                <div class="form-group">
                                    <label for="nombre_representante_legal">Nombre de Representante Legal </label>
                                    <input type="text" class="form-control" id="nombre_representante_legal" name="nombre_representante_legal"  value="{{ $user->nombre_representante_legal }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="no_lic_pn">Numero de Licencia </label>
                                    <input type="text" class="form-control" id="no_lic_pn" name="no_lic_pn"  value="{{ $user->no_lic_pn }}" required autofocus>
                                </div>

                                <div>
                                    <input type="hidden" id="nombre_idoneidad" name="nombre_idoneidad" value="{{ $user->nombre_idoneidad }}">
                                    <input type="hidden" id="status" name="status" value="{{ $user->status }}">
                                </div>
                                @endcan
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                @can('natural-users')
                                <div class="form-group">
                                    <label for="no_lic_pn">Numero de Licencia </label>
                                    <input type="text" class="form-control" id="no_lic_pn" name="no_lic_pn"  value="{{ $user->no_lic_pn }}" required autofocus>
                                </div>
            
                                <div class="form-group">
                                    <label for="fecha_emision">Fecha de emision de la licencia</label>
                                    <input id="datepicker" class="form-comtrol" name="fecha_emision" width="276" value="{{ $user->fecha_emision }}" required autofocus />
                                <script>
                                    $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4',
                                    format: 'yyyy/mm/dd',});
                                </script>
                                </div>
            
                                <div class="form-group">
                                    <label for="fecha_vencimiento">Fecha de vencimiento de la licencia</label>
                                    <input id="datepicker" class="form-comtrol" name="fecha_vencimiento" width="276" value="{{ $user->fecha_vencimiento }}" required autofocus />
                                <script>
                                    $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4',
                                    format: 'yyyy/mm/dd',});
                                </script>
                                </div>
            
                                <div class="form-group">
                                    <label for="nombre_idoneidad">Nombre de Idoneidad </label>
                                    <input type="text" class="form-control" id="nombre_idoneidad" name="nombre_idoneidad"  value="{{ $user->nombre_idoneidad }}" required autofocus>
                                </div>

                                <div>
                                    <input type="hidden" id="no_lic" name="no_lic" value="{{ $user->no_lic }}">
                                    <input type="hidden" id="nombre_sociedad_anonima" name="nombre_sociedad_anonima" value="{{ $user->nombre_sociedad_anonima }}">
                                    <input type="hidden" id="suspendidos_cancel_hasta_la_fecha" name="suspendidos_cancel_hasta_la_fecha" value="{{ $user->suspendidos_cancel_hasta_la_fecha }}">
                                    <input type="hidden" id="nombre_representante_legal" name="nombre_representante_legal" value="{{ $user->nombre_representante_legal }}">
                                </div>
                                @endcan

                                @can('adminonly-users')
                                <div class="form-group">
                                    <label for="status">Estatus</label>
                                    <input type="text" class="form-control" id="status" name="status"  value="{{ $user->status }}" required autofocus>
                                </div>
                                @endcan
                                @can('onlynatural-users')
                                <div>
                                    <input type="hidden" id="status" name="status" value="{{ $user->status }}">
                                </div>
                                @endcan
                              </div>

                              <div class="tab-pane fade" id="role" role="tabpanel" aria-labelledby="role-tab">
                                @foreach ($roles as $role)
                                <div class="form-check">
                                <input type="checkbox" name="roles" value="{{$role->id}}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                <label> {{ $role->name}}</label>
                                </div>
                                @endforeach
                            </div>

                            </div>
                    </section> 
                
                    @can('adminonly-users')
                    <input type="hidden" id="id_admin" name="id_admin" value="99">
                    @endcan 
                    
                    @csrf
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn btn-primary">
                        update
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection