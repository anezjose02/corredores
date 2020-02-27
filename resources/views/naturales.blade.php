@extends('layouts.app')
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
                    
              <!--  <th>Id</th> -->  
                <th>Numero de Licencia</th>
                
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
                 <!--  <th>Id</th> -->  
                      <th>Numero de Licencia</th>
                      
                      <th>Nombre Idoneidad</th>
                      <th>Email</th>
                      <th>Fecha Emision</th>
                      <th>Fecha Vencimiento</th>
                      <th>Estado</th>
                      <th>Control</th>
              </tr>
            </tfoot>
            <tbody>


                  @foreach ($user  as $users)
                  <tr>
                     <!--  <td> {{$users->id}}  </td> -->  
                     
                         
                     
                      <td>{{$users->no_lic_pn}} </td>
                      
                      <td>{{$users->nombre_idoneidad}} </td>
                      <td>{{$users->email}} </td>
                      <td>{{$users->fecha_emision}} </td>
                      <td>{{$users->fecha_vencimiento}} </td>
                      <td>{{$users->status}} </td>

                      <td>
                        
                          <form action="vernaturalescontroller" method="POST">
                              <div class="form-row">
                                  <div>
                                      <input type="hidden" name="elid" value={{$users->id}}>
                                      @csrf 
                                    </div>
                                  <div>
                                    <button type="submit" class="btn btn-block btn-primary">Ver</button>
                                  
                                  </div>
                              </div>
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

