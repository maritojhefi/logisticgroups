@extends('pages.base')
@section('content')
    <main id="main">
 <div>
    <br>
 </div>
  
  
    <section class="inner-page">
      <div class="container" id="advanced-search-form">
        <div class="row">
            <div class="col-6">
                <h2>Complete el formulario</h2>
            </div>
            <div class="col-3">
                <img class="ml-3" src="plane.gif" alt="" width="80px">
            </div>
            
            
        </div>
        <form action="{{route("calcular")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first-name">Nombre del Producto</label>
                <input type="text" class="form-control" placeholder="Nombre General" id="first-name" name="nombre">
            </div>
          
           
            <div class="form-group">
                <label for="age">Peso</label>
                <input type="number" class="form-control" placeholder="Peso por unidad" id="age" name="peso">
            </div>
           
           
            <div class="form-group">
                <label>Tipo de medida</label>
                <div class="radio">
                    <label class="radio-inline">
                        <input type="radio" name="optradio" value="kilos">Kilos</label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio" value="libras">Libras</label>
                    
                </div>
            </div>
            
            <select class="custom-select btn-secondary" name="tipo">
                <option selected>Tipo de producto</option>
                <option value="1">Juguete</option>
                <option value="2">Electronica</option>
                <option value="3">Automoviles</option>
              </select>
          <div><br></div>
              <div class="row">
                <label for="age">Medidas del producto</label>
            </div>

             
              <div class="form-group">
               
                <input type="number" class="form-control" placeholder="Alto" id="first-name" name="alto">
            </div>
          
           
            <div class="form-group">
               
                <input type="number" class="form-control" placeholder="Largo" id="age"  name="largo">
            </div>
            <div class="form-group">
               
                <input type="number" class="form-control" placeholder="Ancho" id="age"  name="ancho">
            </div>
            <div ><br></div>
            <select class="custom-select btn-secondary" name="medida">
              <option selected>Tipo de medida</option>
              <option value="1">Pulgadas</option>
              <option value="2">Centimetros</option>
              <option value="3">Metros</option>
            </select>
            <div class="clearfix"></div>
            
            <button type="submit" class="btn btn-danger btn-lg btn-responsive" id="search"> <span class="glyphicon glyphicon-search"></span> Cotizar</button>
        </form>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
