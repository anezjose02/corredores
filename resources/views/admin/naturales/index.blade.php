@extends('admin.layouts.dashboard')
@section('content')
       <!-- DataTables Example -->
       <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Lista de usuarios Naturales</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>      
                  <th>Id</th>
                  <th>Nombre Idoneidad</th>
                  <th>Email</th>
                  <th>Numero de Licencia</th>
                  <th>Fecha de Emision de la licencia</th> 
                  <th>Fecha de Vencimiento de la licencia</th>   
                  <th>Estado</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $usuario)
                @if ($usuario->id_role == 4)
                <tr>
                    <td>{{$usuario->id}} </td>
                    <td>{{$usuario->nombre_idoneidad}} </td>
                    <td>{{$usuario->email}} </td>
                    <td>{{$usuario->no_lic_pn}} </td>
                    <td>{{$usuario->fecha_emision}} </td>
                    <td>{{$usuario->fecha_vencimiento}} </td>
                    <td>{{$usuario->status}} </td>      
                </tr>
                @endif
                @endforeach 
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection
