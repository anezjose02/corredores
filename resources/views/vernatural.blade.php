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
            @foreach ($user as $users)
            <img class="w-100 rounded border" src="{{Storage::url($users->profile_picture)}}" />
            <div class="pt-4 mt-2">
                <section class="mb-4 pb-1">
                    <h3 class="h6 font-weight-light text-secondary text-uppercase">INFORMACION BASICA</h3>
                    <div class="work-experience pt-2">
                            <div class="work mb-4">
                                    <strong class="h5 d-block text-secondary font-weight-bold mb-1">Fecha de emision licencia</strong>
                                    {{-- <strong class="h6 d-block text-warning mb-1">Renta de apto</strong> --}}
                                    <p class="text-secondary">{{ $users ->fecha_emision }}</p>
                                </div>
                                <div class="work mb-4">
                                    <strong class="h5 d-block text-secondary font-weight-bold mb-1">Fecha de vencimiento licencia</strong>
                                    {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                    <p class="text-secondary">{{ $users ->fecha_vencimiento }}</p>
                                </div>
                                <div class="work mb-4">
                                        <strong class="h5 d-block text-secondary font-weight-bold mb-1">Estado de licencia licencia</strong>
                                        {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                       
                                    <p class="text-secondary">{{ $users ->status }}</p>
                                        
                                </div>
                                <div class="work mb-4">
                                        <strong class="h5 d-block text-secondary font-weight-bold mb-1">Años como corredor</strong>
                                        {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                        <p class="text-secondary">3 Años</p>
                                </div>
                                <div class="work mb-4">
                                        <strong class="h5 d-block text-secondary font-weight-bold mb-1">Porcentaje promedio de clientes que lo recomiendan</strong>
                                        {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                        <p class="text-secondary">
                                           
                                        </p>

                                </div>
                                <div class="work mb-4">
                                            <strong class="h5 d-block text-secondary font-weight-bold mb-1">Numero de negocios concretados</strong>
                                            {{-- <strong class="h6 d-block text-warning mb-1">Venta Directa</strong> --}}
                                            <p class="text-secondary">55</p>
                                 </div>
                                 @endforeach
                    </div>    
                </section>
            </div>
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                    @foreach ($user as $users)
                    {{  $users ->nombre_idoneidad	 }} 
                </h2>
                <address class="m-0 pt-2 pl-0 pl-md-4 font-weight-light text-secondary">
                    <i class="fa"></i>
                   Numero de licencia: {{ $users ->no_lic_pn }} 
                </address>
            </div>
            <p class="h5 text-primary mt-2 d-block font-weight-light">
                Corredor de Inmuebles
            </p>
            <p class="lead mt-4">
                {{ $users ->main_message }}
            </p>
            <section class="mt-5">
                <h3 class="h6 font-weight-light text-secondary text-uppercase">Reputacion promedio</h3>
                <div class="d-flex align-items-center">
                    <strong class="h1 font-weight-bold m-0 mr-3"> 
                        
                    </strong>
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
                <form  method="POST">
                    <div class="form-row">
                            <div>
                                <input type="hidden" name="el_no_lic_pn" value=  >
                                <input type="hidden" name="el_nombre" value=   >
                               
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-10">
                                    <p>
                                    <a class="float-left" href="#"><strong>El usario no posee comentarios ni calificaciones</strong></a>
                                    </p>
                                    <div class="clearfix"></div>
                                    <p><i>"El usario no posee comentarios ni calificaciones."</i></p>
                                    </div>
                                    </div>
                                  <br>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h6 class="text-uppercase font-weight-light text-secondary">
                                    Informacion de contacto
                                </h6>
                                
                                <dl class="row mt-4 mb-4 pb-3">
                                    <dt class="col-sm-3">Telefono</dt>
                                    <dd class="col-sm-9">{{ $users ->number_phone }}</dd>
                                    
                                    <dt class="col-sm-3">Direccion</dt>
                                    <dd class="col-sm-9">
                                        <address class="mb-0">
                                            {{ $users ->address }}
                                        </address>
                                    </dd>
                                    
                                    <dt class="col-sm-3">Email</dt>
                                    <dd class="col-sm-9">
                                        <a href="mailto:aang.is.kefy@gmail.com"> {{ $users ->email }} </a>
                                    </dd>
                                </dl>
                                
                                <h6 class="text-uppercase font-weight-light text-secondary">
                                    Informacion Basica
                                </h6>
                                <dl class="row mt-4 mb-4 pb-3">
                                    <dt class="col-sm-3">Fecha de emision licencia</dt>
                                    <dd class="col-sm-9"> {{ $users ->fecha_emision }}</dd>
        
                                    <dt class="col-sm-3">Fecha de vencimiento licencia</dt>
                                    <dd class="col-sm-9"> {{ $users ->fecha_vencimiento }}</dd>
        
        
                                    <dt class="col-sm-3">Estado de licencia licencia</dt>
                                    <dd class="col-sm-9"> {{ $users ->status }}</dd>
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
            @endforeach
        </div>
    </div>
</div>

@endsection






