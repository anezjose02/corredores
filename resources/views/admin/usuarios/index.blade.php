@extends('admin.layouts.dashboard')
@section('content')
      <!-- DataTables Example -->
      <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Lista de usuarios registrados</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>      
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Numero de Telefono </th>
                      <th>Año de licencia</th>
                     
                      <th>Role</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}} </td>
                        <td>{{$usuario->name}} </td>
                        <td>{{$usuario->email}} </td>
                        <td>{{$usuario->number_phone}} </td>
                        <td>{{$usuario->license_year}} </td>
                        <td>{{ implode(',', $usuario->roles()->get()->pluck('name')->toArray())}} </td>
                        <td>
                          <form action="vernaturalescontroller" method="POST" class="float-left">
                            <div>
                              <input type="hidden" name="elid" value={{$usuario->id}}>
                              @csrf 
                            </div>
                            <div>
                            <button type="submit" class="btn btn-primary">Perfil</button>
                          </div>
                          </form>
                          <a href="{{ route('admin.users.edit', $usuario->id) }}" class="btn btn-warning float-left">Editar</a>
                          <form action="{{ route('admin.users.destroy', $usuario)}}" method="POST" class="float-left"> 
                            @csrf
                            {{ method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form>
                          
                        </td>
                    </tr>   
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
@endsection
