@extends('layouts.app')
@section('content')

    
      <!-- Image Showcases -->
      <section class="showcase">
        
        <div class="container-fluid p-0">
          <div class="row no-gutters">
    
            
            
            
          <form action="vernaturalescontroller" method="POST">
            
            
              <div class="col-lg-12 order-lg-1 my-auto showcase-text">
                @if ($data['resultado'] == 1)
                  <h3>{{$data['nombre_to_calificate']}} Ha sido calificado exitosamente!</h3>
                @else
                  <h3>Error calificando a {{$data['nombre_to_calificate']}}!</h3>     
                @endif
                  
                    
          
               
                  
                  <h4>Numero de licencia: {{$data['no_lic_to_calificate']}}   </h4> 
                  <input type="hidden" name="elid" value={{$data['idnatural']}}>
                  @csrf
                  
                <div class="col-3 col-md-3">
                    <button type="submit" class="btn btn-block btn-lg btn-primary">Regresar!</button>
                  </div>
              </div>  

           

              
          </form>


          </div>
        </div>

        
      </section>
@endsection