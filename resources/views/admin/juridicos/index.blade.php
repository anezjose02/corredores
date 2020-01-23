@extends('admin.layouts.dashboard')
@section('content')
      <!-- DataTables Example -->
      <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Lista de corredores Juridicos</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                            
                      <th>Id</th>
                      <th>Numero de Licencia</th>
                      <th>Nombre Sociedad anonima</th>
                      <th>Fecha Emision</th>
                      <th>Fecha Vencimiento</th>
                      <th>Suspendido o Cancelado a la Fecha</th>
                      <th>Nombre Representante Legal</th>
                      <th>Email</th>
                      <th>Numero Licencia Persona Natural</th>
                      <th>Reputacion</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Numero de Licencia</th>
                      <th>Nombre Sociedad anonima</th>
                      <th>Fecha Emision</th>
                      <th>Fecha Vencimiento</th>
                      <th>Suspendido o Cancelado a la Fecha</th>
                      <th>Nombre Representante Legal</th>
                      <th>Email</th>
                      <th>Numero Licencia Persona Natural</th>
                      <th>Reputacion</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                        @foreach ($juridicos as $juridico)
                        <tr>
                            <td>{{$juridico->id_juridico}} </td>
                            <td>{{$juridico->no_lic}} </td>
                            <td>{{$juridico->nombre_sociedad_anonima}} </td>
                            <td>{{$juridico->fecha_emision}} </td>
                            <td>{{$juridico->fecha_vencimiento}} </td>
                            <td>{{$juridico->suspendidos_cancel_hasta_la_fecha}} </td>
                            <td>{{$juridico->nombre_representante_legal}} </td>
                            <td>{{$juridico->email}} </td>
                            <td>{{$juridico->no_lic_pn}} </td>
                            <td>{{$juridico->reputacion}} </td>

                        </tr>
                            
                        @endforeach
                            
                   
                  
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
@endsection
