@extends('pages.base')
@section('content')
<section id="services" class="services">
    
    <div class="container">
        <div><br></div>
      <div class="section-title">
        <span>TIPOS DE ENVIO</span>
        <h2>TIPOS DE ENVIO</h2>
        <p>Seleccione su metodo de envio para continuar con la cotizacion:</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="150">
            <a href="{{route('calculator')}}">
          <div class="icon-box" >
            <div><img src="plane2.gif" alt="" width="150px"></div>
            <h4><a href="">AEREO</a></h4>
            <p>Un metodo de envio mas rapido! Por si estas impaciente...</p>
            
        
          </div>
        </a>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div><img src="boat.gif" alt="" width="150px"></div>
            
            <h4 class="h2"><a href="">MARITIMO</a></h4>
            <p>Cotize sus productos por este metodo, dentro de contenedores seguros...</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="450">
          <div class="icon-box">
            <div><img src="express.gif" alt="" width="150px"></div>
            <h4><a href="">EXPRESS</a></h4>
            <p>Encontramos el mejor metodo de envio en el menor tiempo posible</p>
          </div>
        </div>

       

      </div>

    </div>
  </section><!-- End Services Section -->
@endsection

