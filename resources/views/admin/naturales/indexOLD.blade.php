@extends('admin.layouts.dashboard')
@section('content')
      <!-- DataTables Example -->
      <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Lista de corredores Naturales</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>      
                      <th>Id</th>
                      <th>Numero de Licencia</th>
                      <th>Reputacion</th>
                      <th>Nombre Idoneidad</th>
                      <th>Email</th>
                      <th>Fecha Emision</th>
                      <th>Fecha Vencimiento</th>
                      <th>Estado</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                            <th>Id</th>
                            <th>Numero de Licencia</th>
                            <th>Reputacion</th>
                            <th>Nombre Idoneidad</th>
                            <th>Email</th>
                            <th>Fecha Emision</th>
                            <th>Fecha Vencimiento</th>
                            <th>Estado</th>
                            <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>


                        @foreach ($naturales as $natural)
                        <tr>
                            <td>{{$natural->id_natural}} </td>
                            <td>{{$natural->no_lic_pn}} </td>
                            <td>{{$natural->reputacion}} </td>
                            <td>{{$natural->nombre_idoneidad}} </td>
                            <td>{{$natural->email}} </td>
                            <td>{{$natural->fecha_emision}} </td>
                            <td>{{$natural->fecha_vencimiento}} </td>
                            <td>{{$natural->status}} </td>
                            <td>
                              <a href="{{ route('user.perfil.show', $natural->id_natural) }}" class="btn btn-primary">Perfil</a>
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
