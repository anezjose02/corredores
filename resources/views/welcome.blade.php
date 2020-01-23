@extends('layouts.app')
@section('content')
    
  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Chequee aqui el perfil del corredor de inmuebles Voy a probar de nuevo un cambio</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

          <form action="checknaturalescontroller" method="POST">
            
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" name="pista" class="form-control form-control-lg" placeholder="Introduzca nombre, cedula, no de licencia o estado...">
                @csrf 
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Chequear!</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Diseno responsivo para pc o smartphone</h3>
            <p class="lead mb-0">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Captacion de clientes potenciales</h3>
            <p class="lead mb-0">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Facil de usar y con un diseno amigable</h3>
            <p class="lead mb-0">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Diseno responsivo para pc o smartphone</h2>
          <p class="lead mb-0">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Captacion de clientes potenciales</h2>
          <p class="lead mb-0">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Facil de usar y con un diseno amigable </h2>
          <p class="lead mb-0">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Testimonios de clientes...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="images/testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"Esto es fastantisco para todos los idoneos!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="images/testimonials-2.jpg" alt="">
            <h5>Freddy S.</h5>
            <p class="font-weight-light mb-0">"Corredores es asombroso. Lo he usado para chequear el perfil del corredor"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="images/testimonials-3.jpg" alt="">
            <h5>Sara P.</h5>
            <p class="font-weight-light mb-0">"Muchas gracias por hacer este tipo de aplicaciones disponibles para nosotros!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-9 mx-auto">
              <h2 class="mb-4">Listo para comenzar? Registrese ahora!</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              
              <form>
                <div class="form-row">
                  <div class="col-12 col-md-9 mb-2 mb-md-0">
                    <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                  </div>
                  <div class="col-12 col-md-3">
                    <button type="submit" class="btn btn-block btn-lg btn-primary">Registrese!</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </section>




@endsection