@extends('pages.base')
@section('content')
    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Inner Page</li>
        </ol>
        <h2>Inner Page</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <h1>Registro de usuarios paso a paso</h1>
        <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        
        <form id="regiration_form" novalidate action="action.php" method="post">
        <fieldset>
        <h2>Paso 1: Crear su cuenta</h2>
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="data[email]" placeholder="Email">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
        </fieldset>
        <fieldset>
        <h2> Paso 2: Agregar detalles personales</h2>
        <div class="form-group">
        <label for="fName">Nombres</label>
        <input type="text" class="form-control" name="data[fName]" id="fName" placeholder="Nombres">
        </div>
        <div class="form-group">
        <label for="lName">Apellidos</label>
        <input type="text" class="form-control" name="data[lName]" id="lName" placeholder="Apellidos">
        </div>
        <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
        <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </fieldset>
        <fieldset>
        <h2>Paso 3: Información de contacto</h2>
        <div class="form-group">
        <label for="mob">Numero Celular</label>
        <input type="text" class="form-control" id="mob" name="data[mob]" placeholder="Numero Celular">
        </div>
        <div class="form-group">
        <label for="address">Direccion</label>
        <textarea class="form-control" name="data[address]" placeholder="Direccion"></textarea>
        </div>
        <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
        <input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
        </fieldset>
        </form>
      </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
