@extends('layouts.app')

<br>
<br>
<br>

@section('content')


<style>
        .checked {
          color: orange;
        }
        </style>

<div class="container py-4 my-2">
    <div class="row">
        <div class="col-md-4 pr-md-5">
            <img class="w-100 rounded border" src="images/testimonials-1.jpg" />
            <div class="pt-4 mt-2">
                <section class="mb-4 pb-1">
                    <h3 class="h6 font-weight-light text-secondary text-uppercase">INFORMACION BASICA</h3>
                    <div class="work-experience pt-2">
                            <div class="work mb-4">
                                    <strong class="h5 d-block text-secondary font-weight-bold mb-1">Fecha de emision licencia</strong>
                                    {{-- <strong class="h6 d-block text-warning mb-1">Renta de apto</strong> --}}
                                    <p class="text-secondary">{{ $naturales ->fecha_emision }}</p>
                                </div>
                                <div class="work mb-4">
                                    <strong class="h5 d-block text-secondary font-weight-bold mb-1">Fecha de vencimiento licencia</strong>
                                    {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                    <p class="text-secondary">{{ $naturales ->fecha_vencimiento }}</p>
                                </div>
                                <div class="work mb-4">
                                        <strong class="h5 d-block text-secondary font-weight-bold mb-1">Estado de licencia licencia</strong>
                                        {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                       
                                        @if ($naturales ->status == "")
                                            <p class="text-secondary">{{ $naturales ->status }}</p>
                                            <strong class="h6 d-block text-success mb-1"> VIGENTE </strong>
                                        @else
                                            <strong class="h6 d-block text-danger mb-1">{{ $naturales ->status }}</strong>
                                        @endif
                                        
                                </div>
                                <div class="work mb-4">
                                        <strong class="h5 d-block text-secondary font-weight-bold mb-1">Años como corredor</strong>
                                        {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                        <p class="text-secondary">3 Años</p>
                                </div>
                                <div class="work mb-4">
                                        <strong class="h5 d-block text-secondary font-weight-bold mb-1">Porcentaje de clientes que lo recomiendan</strong>
                                        {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                        <p class="text-secondary">80%</p>
                                </div>
                                <div class="work mb-4">
                                            <strong class="h5 d-block text-secondary font-weight-bold mb-1">Numero de negocios concretados</strong>
                                            {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                            <p class="text-secondary">55</p>
                                 </div>
                    </div>    
                </section>
                {{-- <section class="mb-5 mb-md-0">
                    <h3 class="h6 font-weight-light text-secondary text-uppercase">Skills</h3>
                    <div class="skills pt-1 row">
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="95" data-scale-color="#fff"><span>PHP</span></div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="85" data-scale-color="#fff"><span>Ruby</span></div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="90" data-scale-color="#fff"><span>Java</span></div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="82" data-scale-color="#fff"><span>Python</span></div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="70" data-scale-color="#fff"><span>C++</span></div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="60" data-scale-color="#fff"><span>ASP</span></div>
                        </div>
                    </div>
                </section> --}}
            </div>
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                    {{  $naturales ->nombre_idoneidad	 }} 
                </h2>
                <address class="m-0 pt-2 pl-0 pl-md-4 font-weight-light text-secondary">
                    <i class="fa"></i>
                   Numero de licencia: {{ $naturales -> no_lic_pn }} 
                </address>
            </div>
            <p class="h5 text-primary mt-2 d-block font-weight-light">
                Corredor de Inmuebles
            </p>
            <p class="lead mt-4">
                Soy una persona 100% confiable todos mis negocios son transparentes y  pueden chequear los comentarios de otros usuarios asi como mi reputacion</p>
            <section class="mt-5">
                <h3 class="h6 font-weight-light text-secondary text-uppercase">Reputacion promedio</h3>
                <div class="d-flex align-items-center">
                    <strong class="h1 font-weight-bold m-0 mr-3"> 
                            @php
                                $num = 0;
                                $counter = 0;
                                foreach($rankings as $ranking)
                                {
                                    $num = $num + $ranking->calificacion;
                                    $counter =  $counter + 1;
                                }
                                if($counter != 0) 
                                    $num = $num / $counter;
                                echo round($num, 2); 
                            @endphp
                    </strong>
                     
                    @php
                        $num = 0;
                        $counter = 0;
                        foreach($rankings as $ranking)
                        {
                            $num = $num + $ranking->calificacion;
                            $counter =  $counter + 1;
                        }
                        if($counter != 0) 
                            $num = $num / $counter;
                        //         echo $num;

                        //  $num = $naturales ->reputacion;
                
                        $intpart = floor( $num );    // results in 3
                        $fraction = $num - $intpart; // results in 0.5
                        $numerochecked = $intpart;
                        if ($fraction == 0)
                        {
                            $numeroNOchecked = 5 - ($intpart); 
                        }
                        else 
                        {
                            $numeroNOchecked = 5 - ($intpart) - 1; 
                        }
                      
                    @endphp

                    @for ($i = 0; $i < $numerochecked; $i++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                   
                    @if ($fraction != 0)
                    {{-- <span class="fa-stack fa-1x">
                            <span class="fa fa-star fa-stack-1x"></span>
                            <span class="fa fa-star-half checked fa-stack-1x"></span>
                                    </span>
                    </i> --}}
    
                         <span class="fa fa-star-half checked"></span> 
            
                        {{-- <span class="fa fa-star-half checked"></span>
                        <span class="fa fa-star"></span> --}}
                    @endif

                    @for ($i = 0; $i < $numeroNOchecked; $i++)
                        <span class="fa fa-star"></span>
                    @endfor

                   
                      
                 {{--    <div>
                        <input data-filled="fa fa-star" data-empty="fa fa-star" value="5" type="hidden" class="rating" data-readonly />
                    </div> --}}
                </div>
            </section>
            <section class="d-flex mt-5">
                <button class="btn btn-light bg-transparent mr-3 mb-3">
                    <i class="fa fa-comments"></i>
                    Mensaje Privado
                </button>
                <button class="btn btn-light bg-transparent mr-3 mb-3">
                    <i class="fa fa-warning"></i>
                    Reportar corredor
                </button>
                {{-- <button class="btn btn-primary mb-3">
                    <i class="fa fa-check"></i>
                    Contratame  
                </button> --}}



                <form action="calificanaturalescontroller" method="POST">
              
                            
                        <div class="form-row">
                            <div>
                                <input type="hidden" name="el_no_lic_pn" value= {{ $naturales -> no_lic_pn }} >
                                <input type="hidden" name="el_nombre" value=  {{  $naturales ->nombre_idoneidad	 }}  >
                               
                                @csrf 
                              </div>
                            <div>
                                <button type="submit" class="btn btn-block btn-lg btn-primary">  <i class="fa fa-check"></i>Calificame!</button>
                            
                            </div>
                        </div>
                    </form>

               

            </section>
            <section class="mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            Comentarios de otros usuarios    
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                Acerca de mi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                            Negocios concretados
                        </a>
                    </li>
                </ul>

                <div class="tab-content py-4" id="myTabContent">
                    <div class="tab-pane py-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           
                        @forelse($rankings as $ranking)
                        <div class="col-lg-12 order-lg-1 my-auto showcase-text">
                                
                                <h5>Un usuario califico:
                               
                                       @php
                                       $num = $ranking->calificacion;
                                       $intpart = floor( $num );    // results in 3
                                       $fraction = $num - $intpart; // results in 0.5
                                       $numerochecked = $intpart;
                                       if ($fraction == 0)  $numeroNOchecked = 5 - ($intpart); 
                                       else  $numeroNOchecked = 5 - ($intpart) - 1; 
                                       @endphp
                                       @for ($i = 0; $i < $numerochecked; $i++)
                                           <span class="fa fa-star checked"></span>
                                       @endfor
                                       @if ($fraction != 0)
                                           <span class="fa fa-star-half checked"></span> 
                                       @endif
                                       @for ($i = 0; $i < $numeroNOchecked; $i++)
                                           <span class="fa fa-star"></span>
                                       @endfor
                                        {{ "(".$ranking->calificacion.")"}}
                                   </h5>
                                   <p class="lead mb-0">..y comento: "{{ $ranking ->user_qualifier_comment }} "</p>
                           </div>
                        @empty
                            <h5>El usario no posee comentarios ni calificaciones</h5>
                        @endforelse
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <h6 class="text-uppercase font-weight-light text-secondary">
                                    Informacion de contacto
                                </h6>
                                <dl class="row mt-4 mb-4 pb-3">
                                    <dt class="col-sm-3">Telefono</dt>
                                    <dd class="col-sm-9">+5075555555</dd>
                                    
                                    <dt class="col-sm-3">Direccion</dt>
                                    <dd class="col-sm-9">
                                        <address class="mb-0">
                                            2983 Heavner Court<br/>
                                            Garden City, Panama 11530
                                        </address>
                                    </dd>
                                    
                                    <dt class="col-sm-3">Email</dt>
                                    <dd class="col-sm-9">
                                        <a href="mailto:aang.is.kefy@gmail.com"> {{ $naturales ->email }} </a>
                                    </dd>
                                </dl>
                                
                                <h6 class="text-uppercase font-weight-light text-secondary">
                                    Informacion Basica
                                </h6>
                                <dl class="row mt-4 mb-4 pb-3">
                                    <dt class="col-sm-3">Fecha de emision licencia</dt>
                                    <dd class="col-sm-9"> {{ $naturales ->fecha_emision }}</dd>
        
                                    <dt class="col-sm-3">Fecha de vencimiento licencia</dt>
                                    <dd class="col-sm-9"> {{ $naturales ->fecha_vencimiento }}</dd>
        
        
                                    <dt class="col-sm-3">Estado de licencia licencia</dt>
                                    <dd class="col-sm-9"> {{ $naturales ->status }}</dd>
        
                                   
                                    
                                </dl>
                        

                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                           
                            <div class="work-experience pt-2">
                                <div class="work mb-4">
                                    <strong class="h5 d-block text-secondary font-weight-bold mb-1">Inmuebles pty S.A.</strong>
                                    <strong class="h6 d-block text-warning mb-1">Renta de apto</strong>
                                    <p class="text-secondary">Av. Balboa PH PTY </p>
                                </div>
                                <div class="work mb-4">
                                    <strong class="h5 d-block text-secondary font-weight-bold mb-1">Venta de aptos PTY S.A.</strong>
                                    <strong class="h6 d-block text-warning mb-1">Venta Directa</strong>
                                    <p class="text-secondary">Av Ricardo J. Alfaro PH xxx</p>
                                </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

{{-- <div class="row no-gutters">    {{ $naturales -> no_lic_pn }} </div>
<div class="row no-gutters">   {{  $naturales ->reputacion }} </div>
    <div class="row no-gutters">  {{  $naturales ->nombre_idoneidad	 }}  </div>
        <div class="row no-gutters">  {{ $naturales ->email }} </div>
            <div class="row no-gutters">  {{ $naturales ->fecha_emision }} </div>
                <div class="row no-gutters">   {{ $naturales  ->fecha_vencimiento }} </div> --}}

{{-- <section class="showcase">
        
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        
        <div class="col-lg-12 order-lg-1 my-auto showcase-text">
          <h2>Perfil de Corredor</h2>
          <p class="lead mb-0">Informacion General</p>
        </div>
      </div>
      {{-- //TODO: FORMATEAR --}}
     
    

     




  
  {{-- @foreach ($naturales as $natural)
  <tr>
     <!--  <td> {{$natural->id_natural}}  </td> -->  
     
         
     
      <td>{{$natural->no_lic_pn}} </td>
      <td>{{$natural->reputacion}} </td>
      <td>{{$natural->nombre_idoneidad}} </td>
      <td>{{$natural->email}} </td>
      <td>{{$natural->fecha_emision}} </td>
      <td>{{$natural->fecha_vencimiento}} </td>
      <td>{{$natural->status}} </td>

     

  </tr> 
  @endforeach            

    --}}
      
  

@endsection





<!-- Required Resources -->
{{-- 

<header class="bg-white">
    <nav class="navbar navbar-expand-md navbar-light container">
        <div class="d-flex order-0">
            <a class="navbar-brand align-items-center d-flex mr-1 font-weight-bold" href="#">
                <img class="navbar-logo" src="https://cdn.bootstrapsnippet.net/assets/image/bootstrapsnippet.png" />
                <span>
                    BootstrapSnippet<sup class="text-warning">.net</sup>
                </span>
            </a>
        </div>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="ml-md-5 pl-md-5 mt-3 mt-md-0 navbar-search">
            <input placeholder="Search something" size="90" class="form-control" />
        </form>
        <div class="navbar-collapse justify-content-end collapse w-100" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link px-2" href="">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link px-2" href="">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="">Friends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="">Messages</a>
                </li>
            </ul>
            <div class="btn-group ml-4">
                <a href="javascript:;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="navbar-avatar rounded-circle" src="https://cdn.bootstrapsnippet.net/assets/image/dummy-avatar.jpg" />
                </a>
                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="">Action</a>
                    <a class="dropdown-item" href="">Another action</a>
                    <a class="dropdown-item" href="">Something else here</a>
                </div>
            </div>
        </div>
    </nav>
</header> --}}
