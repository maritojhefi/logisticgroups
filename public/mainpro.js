console.log("sa");
var Objeto = {};

Objeto = {
  nombre:  $("#nombrePRO").val(),
  numero:  $("#numeroPRO").val(),
  transporte: $("#transportetxt").html(),
  tipo: $("#tipotransporte").html(),
  paisOrigen: $("#TamanoRes").html(),
  incluyen: $("#servtext").html(),
  servicio: $("#transtext").html(),
  costologistica: $("#TotalLOG").html(),
  costototal: $("#TotalDe").html(),

  sub: [
    
  ]
};


var Ningbo_Arica20 = 7161;
var Ningbo_Arica40 = 7266;

var Ningbo_Iquique20 = 8572.69;
var Ningbo_Iquique40 = 8677.24;

var Ningbo_ARICA20 = 8886.33;
var Ningbo_ARICO40 = 8990.87;

var Qindao_Arica40 = 8311.33;
var Tajin_Arica = 8311.33;
var Shangai_Arica40 = 7840.88;
var Shenzhen_Arica40 = 7840.88;

var Ningbo_Arica = 0;
var Ningbo_Iquique = 0;

var Ningbo_Qindao20 = 0;
var Ningbo_Qindao40 = 0;

var Flete_TresPaso = 2600;

var Flete_SantaCruz20 = 2400;
var Flete_SantaCruz40 = 2000;

var Flete_LaPaz20 = 1800;
var Flete_LaPaz40 = 2000;

var UsuarioContenedor20 = 400;
var UsuarioContenedor40 = 350;

var AgenciaDepachante1_2000 = 0.03;
var AgenciaDepachante2000_5000 = 0.0275;
var AgenciaDepachante10001_30000 = 0.0215;
var AgenciaDepachante30001_50000 = 0.0165;
var AgenciaDepachante50001_100000 = 0.0135;
var AgenciaDepachante100001 = 0.01;

var select = document.getElementById("TamanoCo");
select.addEventListener("change", function () {
  var selectedOption = this.options[select.selectedIndex];

  document.getElementById("TamanoRes").innerHTML = selectedOption.text;
  console.log(selectedOption.value + ": " + selectedOption.text);
});

var unidadA = "cm";
var unidadB = "Kg";
var unidadAes = false;
var unidadBes = false;

var select2 = document.getElementById("UnidadPeso");
select2.addEventListener("change", function () {
  var selectedOption = this.options[select2.selectedIndex];
  if (selectedOption.value == 1) {
    document.getElementById("textPeso").innerHTML = "Introducir El Peso en Kg";
    unidadB = "Kg";
    unidadBes = false;
  } else {
    document.getElementById("textPeso").innerHTML = "Introducir El Peso en Lb";
    unidadB = "Lb";
    unidadBes = true;
  }
  console.log(selectedOption.value + ": " + selectedOption.text);
});

var select3 = document.getElementById("UnidadMedida");
select3.addEventListener("change", function () {
  var selectedOption = this.options[select3.selectedIndex];
  if (selectedOption.value == 1) {
    document.getElementById("LargoText").innerHTML =
      "Introducir el Largo en Cm";
    document.getElementById("AnchoText").innerHTML =
      "Introducir el Ancho en Cm";
    document.getElementById("AltoText").innerHTML = "Introducir el Alto en Cm";
    unidadA = "cm";
    unidadAes = false;
  } else {
    document.getElementById("LargoText").innerHTML =
      "Introducir el Largo en In";
    document.getElementById("AnchoText").innerHTML =
      "Introducir el Ancho en In";
    document.getElementById("AltoText").innerHTML = "Introducir el Alto en In";
    unidadA = "In";
    unidadAes = true;
  }
  console.log(selectedOption.value + ": " + selectedOption.text);
});

var TEMPO = 7154;

var CostoNaviera = 6638.61;
var costoconti = 1350;
var thcOrigen = 150;
var manifiestoOrigen = 100;
var mbl = 75;
var thcOrigen = 102.25;
var thcOrigen = 150;

var seguronav = (costoconti + CostoNaviera) * 0.0128;
var SubTotalChina =
  CostoNaviera + thcOrigen + costoconti + manifiestoOrigen + mbl + seguronav;
var ComisionTotalChina = SubTotalChina * 0.07;

var GateIn = 125;
var HandlingFee = 150;
var Surcharge = 90;
var DispastchinFee = 100;
var Dthc = 150;
var BLfee = 65;
var MantenieContenedor = 100;
var ManifiestoDestino = 75;
var OtrosGasto = 250;
var SubtotalChile =
  GateIn +
  HandlingFee +
  Surcharge +
  DispastchinFee +
  Dthc +
  BLfee +
  MantenieContenedor +
  ManifiestoDestino +
  OtrosGasto;
var ComisionTotalChile = SubtotalChile * 0.07;

var Flete3paradas = 2600;
var Usuario = 400;
var SeguroFlete = Flete3paradas * 0.0128;
var SubtotalBolivia = Flete3paradas + Usuario + SeguroFlete;

var AgenciaDesp = TEMPO * 0.0165;
var Almacenamiento = TEMPO * 0.0045;
var estribaje = TEMPO * 0.003;
var documentacion = 55;
var Carpeta = 18;
var Formulario = 15;
var Sidunea = 15;
var Despacho = 65;
var SubTotalDespacho =
  AgenciaDesp +
  Almacenamiento +
  estribaje +
  documentacion +
  Carpeta +
  Formulario +
  Sidunea;

console.log("SubTotalChina :", SubTotalChina);
console.log(ComisionTotalChina);

console.log("SubtotalChile :", SubtotalChile);
console.log(ComisionTotalChile);

console.log("SubtotalBolivia :", SubtotalBolivia);
console.log(SeguroFlete);

var TotalLogistica =
  SubTotalChina +
  ComisionTotalChina +
  SubtotalChile +
  ComisionTotalChile +
  SubtotalBolivia;
var TotalDespachoConDespacho = SubTotalDespacho + TotalLogistica;
console.log("TotalLogistica :", TotalLogistica);

console.log(SubTotalDespacho);

console.log("TotalDespachoConDespacho :", TotalDespachoConDespacho);
TotalLogistica = Math.round((TotalLogistica + Number.EPSILON) * 100) / 100;

function validateEmailAddress(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
function calcular() {
  $("#result").text("");

  var valor = $("#valormer").val();
  console.log(valor);
  return false;
}

function Limpiar() {
  document.getElementById("AltoPro").innerHTML = "";
  document.getElementById("AltoPro").value = "";
  document.getElementById("AnchoPro").value = "";
  document.getElementById("LargoPro").value = "";
  document.getElementById("nombrePro").value = "";
  document.getElementById("ValorPro").value = "";
  document.getElementById("PesoPro").value = "";
  document.getElementById("SubPartidatext").value = "";
  document.getElementById("GravamenText").value = "";
  document.getElementById("CantidadPro").value = "";
}

var CostoFoto = 0;
var CostoVideo = 0;
var CostoCompra = 0;
var CostoSeguro = 0;
var ComprarBool = false;
var SeguroBool = false;
var Cont = 1;
var DespaBool = false;
var CostoDespa = 0;

function Calcular_Despacho() {
  var Valora = document.getElementById("ValorPro").value;
  CostoDespa = 0;
  if (ValPro) {
  } else if (Valora > 0 && Valora <= 2000) {
    CostoDespa = 58;
  } else if (ValPro >= 2001 && Valora <= 5000) {
    CostoDespa = 0.03;
  } else if (Valora >= 5001 && Valora <= 10000) {
    CostoDespa = 0.0275;
    return CostoDespa;
  } else if (Valora >= 10001 && Valora <= 30000) {
    CostoDespa = 0.0215;
  } else if (Valora >= 30001 && Valora <= 50000) {
    CostoDespa = 0.0165;
  } else if (Valora >= 50001 && Valora <= 100000) {
    CostoDespa = 0.0135;
  } else if (Valora >= 100001) {
    CostoCompra = 0.07;
    CostoDespa = 0.01;
  }
}

function Calcular_Adiccional() {
  var ValPro = document.getElementById("ValorPro").value;
  CostoCompra = 0;
  CostoSeguro = 0;
  if (ComprarBool == true) {
    if (ValPro > 0 && ValPro <= 1999) {
      CostoCompra = 0.08;
    } else if (ValPro >= 2000 && ValPro <= 6999) {
      CostoCompra = 0.07;
    } else if (ValPro >= 7000 && ValPro <= 10000) {
      CostoCompra = 0.06;
    } else if (ValPro >= 10001 && ValPro <= 30000) {
      CostoCompra = 0.05;
    } else if (ValPro >= 30001 && ValPro <= 50000) {
      CostoCompra = 0.04;
    }
  }
  if (SeguroBool) {
    CostoSeguro = 0.02;
  }

  var CostoAdicional = new Object();
  CostoAdicional.compra = CostoCompra * ValPro;
  CostoAdicional.foto = CostoFoto;
  CostoAdicional.seguro = CostoSeguro * ValPro;
  CostoAdicional.video = CostoVideo;
  var totalW =
    CostoFoto + CostoAdicional.compra + CostoVideo + CostoAdicional.seguro;
  totalW = Math.round((totalW + Number.EPSILON) * 100) / 100;

  CostoAdicional.total = totalW;
  console.log(CostoAdicional);
  return CostoAdicional;
}
function CalcularImpuesto() {
  var valor = document.getElementById("ValorPro").value;
  var Gra = document.getElementById("GravamenText").value;
  var iva = 0.1494;
  var a = valor * iva;
  var b = valor * (Gra / 100);
  b = Math.round((b + Number.EPSILON) * 100) / 100;
  var total = a + b;
  total = Math.round((total + Number.EPSILON) * 100) / 100;

  var impuesto = new Object();
  impuesto.iva = a;

  impuesto.total = total;
  impuesto.grav = b;
  return impuesto;
}

function MostrarTabla() {
  $("#Certificado").bootstrapTable({
    columns: [
      {
        field: "tipodocumento",
        title: "Item ID",
      },
      {
        field: "entidadqueemite",
        title: "Item Name",
      },
      {
        field: "descripcion",
        title: "Item Price",
      },
    ],
    data: data,
  });
}
function CalcularVolumen(a, b, c) {
  if (unidadAes) {
    a *= 2.54;
    b *= 2.54;
    c *= 2.54;
  }
  a /= 100;
  b /= 100;
  c /= 100;
  var total = a * b * c * 167;
  total = Math.round((total + Number.EPSILON) * 100) / 100;

  console.log(total);
  return total;
}

function CalcularPeso(a, b) {
  if (unidadBes) {
    b /= 2.205;
  }
  if (a > b) {
    a *= 6.5;
    a = Math.round((a + Number.EPSILON) * 100) / 100;
    return a;
  } else {
    b *= 6.5;
    b = Math.round((b + Number.EPSILON) * 100) / 100;
    return b;
  }
  return a;
}
var TOTALPRO = 0;
var TOTALLOGIS = 0;
function Añadir() {
  $("#exampleModal").modal("hide");

  var ff = document.getElementById("CantidadPro").value;
  if (ff == 0) {
    ff = 1;
  }
  console.log(ff);
  var alto = document.getElementById("AltoPro").value;
  var Largo = document.getElementById("AnchoPro").value;
  var Ancho = document.getElementById("LargoPro").value;
  var a = CalcularVolumen(alto, Largo, Ancho);
  a *= ff;
  a =Math.round((a + Number.EPSILON) * 100) / 100
  var TextTamaño =
    alto +
    unidadA +
    " x " +
    Ancho +
    unidadA +
    " x " +
    Largo +
    unidadA +
    " (" +
    ff +
    ")" +
    "<br>" +"P.V : "+
    a;

  var table = document.getElementById("Detalle");
  var row = table.insertRow();

  row.insertCell(0).innerHTML = Cont;
  row.insertCell(1).innerHTML = document.getElementById("SubPartidatext").value;
  row.insertCell(2).innerHTML = document.getElementById("nombrePro").value;
  row.insertCell(3).innerHTML =
    document.getElementById("ValorPro").value + " $";
  row.insertCell(4).innerHTML = TextTamaño;
  row.insertCell(5).innerHTML =
    document.getElementById("PesoPro").value + " " + unidadB;
  var b = document.getElementById("PesoPro").value;
  var peso = CalcularPeso(a, b);
  var valorIm = CalcularImpuesto();
  row.insertCell(6).innerHTML =
    document.getElementById("GravamenText").value + "% = " + valorIm.grav;

  row.insertCell(7).innerHTML = valorIm.iva.toFixed(2);

  row.insertCell(8).innerHTML = valorIm.total;

  var toAdi = Calcular_Adiccional();
  row.insertCell(9).innerHTML = toAdi.total;
  var totaltemp = valorIm.total + toAdi.total + peso;
  totaltemp = Math.round((totaltemp + Number.EPSILON) * 100) / 100;
  row.insertCell(10).innerHTML = peso;
  row.insertCell(11).innerHTML = totaltemp;

  TOTALPRO += totaltemp;

  TOTALLOGIS += peso;
  TOTALPRO = Math.round((TOTALPRO + Number.EPSILON) * 100) / 100;
  TOTALLOGIS = Math.round((TOTALLOGIS + Number.EPSILON) * 100) / 100;
  document.getElementById("TotalLOG").innerHTML = TOTALLOGIS;
  document.getElementById("TotalDe").innerHTML = TOTALPRO;

  var ab = {
    id: Cont,
    subpartida: $("#SubPartidatext").val(),
    producto:  $("#nombrePro").val(),
    valor: $("#ValorPro").val(),  
    tamano: TextTamaño,
    peso: $("#PesoPro").val()+ " " + unidadB,
    grav: $("#GravamenText").val()  + "% = " + valorIm.grav,
    iva: valorIm.iva.toFixed(2), 
    totalimp: valorIm.total,
    servadi: toAdi.total,
    logistica: peso,
    subtotal: totaltemp,
  };

  Objeto.sub.push(ab);

  Limpiar();

  Cont++;
}

function Cargar() {
  $("#Aduana_wrapper").show();
  $("#Certificado").hide();
  $("#TextCertificado").hide();
}

$("#ServCompra").change(function () {
  if ($(this).is(":checked")) {
    ComprarBool = true;
  } else {
    ComprarBool = false;
  }
});

$("#ServFoto").change(function () {
  if ($(this).is(":checked")) {
    CostoFoto = 5;
  } else {
    CostoFoto = 0;
  }
});

$("#ServSeguro").change(function () {
  if ($(this).is(":checked")) {
    SeguroBool = true;
  } else {
    SeguroBool = false;
  }
});

$("#ServVideo").change(function () {
  if ($(this).is(":checked")) {
    CostoVideo = 10;
  } else {
    CostoVideo = 0;
  }
});

$("#calcular").bind("click", calcular);

$("#añadir").bind("click", Cargar);

$("#AñadirLista").bind("click", Añadir);

$("#Cambiar").bind("click", Cargar);

$("#Generar").on("click", function () {

  Objeto.paisOrigen= $("#TamanoRes").html();
  Objeto.costologistica= $("#TotalLOG").html();
  Objeto.costototal= $("#TotalDe").html();
  Objeto.nombre= $("#nombrePRO").val();
  Objeto.numero= $("#numeroPRO").val();
  
  //  Objeto.concat({sub: a});
  console.log();
  
  console.log(Objeto);
  //Objeto[0].push( {sub: a});
  //  console.log(Objeto);
  //$.get("pdf.php?mihtml=" + Objeto);
  $("#pdfvisor").modal("show");
 $("#pdfframe").attr("src", "../Pro/pdf.php?datos=" + JSON.stringify(Objeto));
});