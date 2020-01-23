@extends('layouts.app')
@section('content')

    
      <!-- Image Showcases -->
      <section class="showcase">
        
        <div class="container-fluid p-0">
          <div class="row no-gutters">
    
            
            <div class="col-lg-12 order-lg-1 my-auto showcase-text">
             <form action="calificanaturalescontrollerupdate" method="POST">
                  <h3>Califica a: {{$data['nombre_to_calificate']}} </h3>
                  <h6>Numero de licencia: {{$data['no_lic_to_calificate']}}   </h6> 
                
                  <p class="lead mb-0"> Estrellas:
                        <input type="hidden" name="el_no_lic_pn" value=  {{$data['no_lic_to_calificate']}}  >
                        <input type="hidden" id="rating0" name="rating" value="0" />

                      <fieldset class="rate">
                          <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                          <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                          <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                          <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                          <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                          <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                          <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                          <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                          <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                          <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                      </fieldset>
                  </p>
            
                  <div class="form-row">
                        <div class="col-12 col-md-2 mb-2 mb-md-0">
                              <p> % Recomendacion:</p>
                        </div>
                        <div class="col-12 col-md-3">
                              <input
                              type="text"
                              name="el_porcentaje"
                              data-provide="slider"
                              data-slider-ticks="[0, 20, 40, 60,80,100]"
                              data-slider-ticks-labels='["0%", "20%", "40%","60%","80%","100%"]'
                              data-slider-min="1"
                              data-slider-max="100"
                              data-slider-step="20"
                              data-slider-value="40"
                              data-slider-tooltip="hide"
                          >
                        </div>
                     </div>
                 
                  <h3> Comentario: </h3>
                  <div>
                      <textarea  name="el_comment" cols="155" rows="5" placeholder="Introduzca su comentario aqui maximo 250 caracteres..."></textarea>
                      @csrf 
                  </div>
                  
                  <br>
    

          
                
                  
                  <div class="col-2">
                      <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-check"></i>Enviar!</button>
                  </div>
                 
                  

              </form>
            </div>  
          </div>
        </div>

        <style>
                      /* Base setup */
            @import url(//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css);

          

            /* Ratings widget */
            .rate {
                display: inline-block;
                border: 0;
            }
            /* Hide radio */
            .rate > input {
                display: none;
            }
            /* Order correctly by floating highest to the right */
            .rate > label {
                float: right;
            }
            /* The star of the show */
            .rate > label:before {
                display: inline-block;
                font-size: 1.1rem;
                padding: .3rem .2rem;
                margin: 0;
                cursor: pointer;
                font-family: FontAwesome;
                content: "\f005 "; /* full star */
            }

            /* Half star trick */
            .rate .half:before {
                content: "\f089 "; /* half star no outline */
                position: absolute;
                padding-right: 0;
            }
            /* Click + hover color */
            input:checked ~ label, /* color current and previous stars on checked */
            label:hover, label:hover ~ label { color: #73B100;  } /* color previous stars on hover */

            /* Hover highlights */
            input:checked + label:hover, input:checked ~ label:hover, /* highlight current and previous stars */
            input:checked ~ label:hover ~ label, /* highlight previous selected stars for new rating */
            label:hover ~ input:checked ~ label /* highlight previous selected stars */ { color: #A6E72D;  } 
        </style>

      
      </section>
@endsection