<!DOCTYPE html>
<html lang="en">

<form>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table.dataTable thead {
                background: linear-gradient(to right, #4A00E0, #8E2DE2);
                color: white;
            }
        </style>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">


    </head>
    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <title>Document</title>
    </head>

    <body>
        <form method="post">
            <section method="post">
                <div class="form-1-2">
                    <h2 class="text-center">Calculadora Aduanera Aerea </h2>
                </div>
                <div class="container">
                    <table align="center">
                    <div class="form-row">
                        
                        <div class="col-md-4 ">
                            <label for="validationServer02">Introducir Nombre Completo:</label>
                            <input   id="nombrePRO" class="form-control" type="text" placeholder="Nombre Completo " required>

                        </div>
                        <div class="col-4">
                            <label for="validationServer02">Introducir Numero De Telefono :</label>
                            <input  id="numeroPRO" class="form-control" type="number" placeholder="Numero De Telefono ">
                        </div>

                        <div class="col-4">                     
                             
                        </div>
                    </div>  
                    <br>



                        <div class="form-row">

                            <div class="col-md-4 ">
                                <label for="validationServer02">Seleccione el Pais de Origen: :</label>
                                <select id="TamanoCo" class="form-select " aria-label="Default select example">

                                    <option selected disabled>Seleccione el Pais de Origen: </option>
                                    <option value="1">Estados Unidos</option>
                                    <option value="2">China</option>

                                </select>

                            </div>
                            <div class="col-4">
                                <label for="validationServer02">Seleccione el departamento destino:</label>
                                <select class="form-select " aria-label="Default">

                                    <option selected disabled>Seleccionar El Departamento</option>
                                    <option value="1">La Paz</option>
                                    <option value="2">Cochabamba</option>
                                    <option value="2">Santa Cruz</option>

                                </select>
                            </div>

                            <div class="col-4">

                               

                            </div>
                        </div>




                        <div class="d-flex justify-content-end">

                            <button id="añadir" type="button" class="btn btn-primary mt-3   mb-2" data-toggle="modal" data-target="#exampleModal">Añadir Producto</button>
                        </div>


                </div>

                </div>
                </table>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div id="detallediv">
                                <table data-toggle="Detalle" id="Detalle" class="table col-12 table-bordered">
                                    <thead class="thead-dark ">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">SubPartida</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Valor En $</th>
                                            <th scope="col">Tamaño</th>
                                            <th scope="col">Peso</th>
                                            <th scope="col">Gravamen</th>
                                            <th scope="col">IVA</th>
                                            <th scope="col">Total Impuesto</th>
                                            <th scope="col">Serv. Adiccional</th>
                                            <th scope="col">Logistica</th>
                                            <th scope="col">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                            </div>



                        </div>
                    </div>
                </div>
                <div class="container mt-5  mb-5">

                    <td class="col "><input id="calcular" value="Calcular" type="button" name="submit" class="btn btn-primary"></td>
                    <td class="col "><input id="Generar" value="Generar PDF" type="button" name="generar" class="btn btn-primary"></td>

                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">


                            <table class="table col-6">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Detalle</th>
                                        <th scope="col">Descripicion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Transporte </td>
                                        <td id="transportetxt">Aereo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Tipo </td>
                                        <td id="tipotransporte">Importacion Individual</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Pais de Origen </td>
                                        <td id=TamanoRes></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Incluyen </td>
                                        <td id="servtext" >Servicio de Aduana y logistica</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Servicio Adiccional </td>
                                        <td id="transtext" >Transporte a Domicilio y Seguro</td>


                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Costo Logistica </td>
                                        <td id="TotalLOG"> </td>


                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>

                                        <td>Costo Total </td>
                                        <td id="TotalDe"> </td>

                                    </tr>

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

                </div>

            </section>
        </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.2.0/jspdf.umd.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js">
        </script>

        <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/extensions/export/bootstrap-table-export.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


        <!--    Datatables-->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#Aduana').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "{{asset('datos.php')}}",
                    "language": {
                        url: "{{asset('Spanish.json')}}"
                    },
                    "createdRow": function(row, data, index) {
                        $('td', row).eq(4).html('<button id="SeleccionarSub" class="btn btn-primary seleccionar" data-id="' + data[3] + '"  data-valor="' + data[0] + '" title="Seleccionar "> Seleccionar </button>');                    },
                    "drawCallback": function(settings) {
                        $('.seleccionar').click(function() {
                            var ga = $(this).data("id");
                            var sub = $(this).data("valor");
                            $.getJSON('{{asset('requisitos.php')}}?subpartida=' + sub, function(data) {
                                if (data.length > 0) {
                                    $('#Certificado').bootstrapTable({
                                        columns: [{
                                            field: 'tipodocumento',
                                            title: 'Tipo de Documento'
                                        }, {
                                            field: 'entidadqueemite',
                                            title: 'Entidad Emisora'
                                        }, {
                                            field: 'descripcion',
                                            title: 'Descripcion'
                                        }],
                                        data: data
                                    })
                                    console.log(data);
                                    $('#Certificado').show();
                                    $('#TextCertificado').show();
                                    $('#Certificado').bootstrapTable('load', data);
                                } else {
                                    console.log("no tiene requisitos");
                                    $('#Certificado').hide();
                                    $('#TextCertificado').hide();
                                }
                            });
                            console.log(ga);
                            $('#Aduana_wrapper').hide();
                            document.getElementById("SubPartidatext").value = sub;
                            document.getElementById("GravamenText").value = ga;
                        });
                    }
                });
            });
        </script>
    </body>
</html>
<div  id="pdfvisor" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <iframe src="" id="pdfframe" frameborder="0" width="100%" height="1000px"></iframe>
    </div>
  </div>
</div>

<script>
    $('#submit').click(function() {
        var num = $('input[name=n1]').val();
        var num2 = $('input[name=n2]').val();
        var b1 = $('input[name=b1]').val();
        var b2 = $('input[name=b2]').val();
        var b3 = $('input[name=b3]').val();
        $.ajax({
            type: "POST",
            url: "calc.php",
            data: {
                'n1': num,
                'n2': num2,
                'b1': b1,
                'b2': b2,
                'b3': b3
            },
            dataType: 'JSON',
            success: function(msg) {
                var metro = msg.total;
                console.log(metro);
                $('#display').text(metro);
                $('#totalel').text(metro);
            }
        })
    });
</script>


<div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div>
                <form>
                    <div class="form-row col">
                        <div class="col-4">
                            <label for="ssa">Introducir Nombre Del Producto:</label>
                            <input id="nombrePro" type="text" class="form-control" placeholder="Nombre del producto">
                        </div>
                        <div class="col-3">
                            <label for="ssa">Introducir el valor en $:</label>
                            <input id="ValorPro" min="0" type="number" class="form-control" placeholder="Introducir el valor ">
                        </div>
                        <div class="col-3">
                            <label id="textPeso" for="ssa">Introducir El Peso en Kg</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <select class="custom-select" id="UnidadPeso">
                                        <option disabled>Unidad</option>
                                        <option selected value="1">Kg</option>
                                        <option value="2">Lb</option>
                                    </select>
                                </div>
                                <input id="PesoPro" min="0" type="number" class="form-control" placeholder="Peso del producto">
                            </div>

                        </div>
                        <div class="col-2">
                            <label id="CantidadText" require for="ssa">Cantidad</label>
                            <input id="CantidadPro" default="1" min="0" type="number" class="form-control" placeholder="Introducir Cantidad">
                        </div>


                    </div>
                    <div class="form-row col">
                        <div class="col-3">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Seleccione Unidad:</label>
                            <select class="custom-select mr-sm-2" id="UnidadMedida">
                                <option disabled>Selecione la unidad</option>

                                <option selected value="1">Centimetro</option>
                                <option value="2">Pulgadas</option>
                            </select>

                        </div>


                        <div class="col-3">
                            <label id="AltoText" for="ssa">Introducir Alto en Cm</label>
                            <input id="AltoPro" min="0" type="number" class="form-control" placeholder="Introducir el Alto">
                        </div>
                        <div class="col-3">
                            <label id="LargoText" for="ssa">Introducir Largo en Cm</label>
                            <input id="LargoPro" min="0" type="number" class="form-control" placeholder="Introducir el Largo">
                        </div>
                        <div class="col-3">
                            <label id="AnchoText" for="ssa">Introducir Ancho en Cm</label>
                            <input id="AnchoPro" min="0" type="number" class="form-control" placeholder="Introducir el Ancho">
                        </div>

                    </div>
                    <div class="form-row col">
                        <div class="col-4">
                            <label for="ssa">Numero de Sub Partida </label>
                            <input id="SubPartidatext" type="text" class="form-control" placeholder="Busca tipo de Producto" readonly>
                        </div>
                        <div class="col-4">
                            <label for="ssa">Gravamen </label>
                            <input id="GravamenText" type="text" class="form-control" placeholder="Valor de Gravamen" readonly>
                        </div>
                        <div class="col-4">

                            <label for=""> Servicio Adiccionales</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="ServCompra">
                                <label class="custom-control-label" for="ServCompra">Servicio de Compra</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="ServSeguro">
                                <label class="custom-control-label" for="ServSeguro">Seguro de Mercancia</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="ServFoto">
                                <label class="custom-control-label" for="ServFoto">Fotografia</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="ServVideo">
                                <label class="custom-control-label" for="ServVideo">Video </label>
                            </div>

                        </div>

                    </div>
                    <div class="col">
                        <td class="col-lg-8"><input id="Cambiar" value="Cambiar" type="button" name="submit" class="btn btn-primary"></td>



                    </div>
                </form>

            </div>
            <div class="modal-body ">
                <table id="Aduana" class="table-striped table-bordered " style="width:100%">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Título de Sección </th>
                            <th>Tipo</th>
                            <th>Gravamen Aduanero</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                    </tbody>

                </table>
            </div>
            <div class="col">
                <label id="TextCertificado" for=""> Se requiere Estos Documentos Para La Importación : </label>
                <table id="Certificado"> </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button id="AñadirLista" type="button" class="btn btn-primary">Añadir</button>
            </div>
        </div>
    </div>
</div>



<script src="{{asset('mainpro.js')}}"></script>