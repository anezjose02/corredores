@extends('admin.layouts.dashboard')
@section('content')
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Lista de usuarios Juridicos</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>      
              <th>Id</th>
              <th>Nombre del Representante Legal</th>
              <th>Nombre de Sociedad Anonima</th>
              <th>Email</th>
              <th>Numero de licencia</th>
              <th>Fecha de Emision de la licencia</th> 
              <th>Fecha de Vencimiento de la licencia</th>   
              <th>Numero de Licencia Persona natural</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $usuario)
            @if ($usuario->id_role == 5)
            <tr>
                <td>{{$usuario->id}} </td>
                <td>{{$usuario->nombre_representante_legal}} </td>
                <td>{{$usuario->nombre_sociedad_anonima}} </td>
                <td>{{$usuario->email}} </td>
                <td>{{$usuario->no_lic}} </td>
                <td>{{$usuario->fecha_emision}} </td>
                <td>{{$usuario->fecha_vencimiento}} </td>
                <td>{{$usuario->no_lic_pn}} </td>      
            </tr>
            @endif 
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
