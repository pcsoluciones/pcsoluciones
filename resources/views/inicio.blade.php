
@extends('layouts.plantilla')

@section('title', 'Servicio Tecnico Computadores a Domicilio')

@section('encabezado')
<div class="my-3" >
    <p><span class="h2 bg-primary text-white rounded px-3 py-2 "> PC soluciones ✔</span> </p>
    <h2 class="text-primary fs-1"  id="titulo">Soporte Computacional  a Domicilio</h2>
</div>
<hr>

@endsection


@section('contenido')

<div class="row" id="sectionContenido">
  <div class="col-8">
    <div class="d-flex flex-wrap justify-content-evenly  ">
      @foreach($servicios as $key => $value)
        <div class=" card text-secondary bg-light mb-3 shadow-lg " style="width: 17rem; " >
          <div class="card-tarjetas" >
            <div class="titulo mostrar">
              <div class=" d-flex align-items-center text-center  card-body h5 fw-bold "  style="height: 8em" >
                <p class="card-titulo" >{{$servicios[$key]->servicio}}</p>
              </div>
            </div>
  
            <div class="contenido ocultar">
              <div class="d-flex align-items-center justify-content-center card-body fst-italic" >
                <p class="card-text " >{{$servicios[$key]->detalle}}</p>
              </div>
            </div>
  
          </div>

         
        </div>

      @endforeach
    </div>
  </div>

  <div class="col-4">
    <form action="" method="post" id="FormOferta" v-on:submit.prevent="enviarForm">
      <div class="h5">Formulario de Consulta</div>

      <div class="my-2">
          <input class="form-control" type="text" placeholder="Ingrese su nombre" 
           v-model="datosForm.nombre"  size="25" required> </td>
      </div>
      <div class="my-2">
          <input  class="form-control" type="text" placeholder="telefono de contacto"
          v-model="datosForm.telefono" size="15" name="fono"  id="fono" required> 
      </div> 
      <div class="my-2"> 
          <input class="form-control" type="email" placeholder="Ingrese su correo" 
          v-model="datosForm.correo"  size="25" name="correo"  id="correo" 
           required> 
      </div>
      <div class="my-2">
          <input class="form-control" type="text" placeholder="Ingrese su dirección o ubicación"
          v-model="datosForm.ubicacion" size="35" name="ubicacion"  id="ubicacion"  required> 
      </div>

      <textarea class="form-control" name="consulta" placeholder="INGRESE SU CONSULTA"
      v-model="datosForm.consulta" cols="60" rows="3" id="consulta"  required> </textarea>
              
      <div class="form-group my-3">
          <input type="submit" name="enviar" id="enviar" value="Enviar" class=""> 
          <input name="Restablecer" type="reset" value="Borrar" id="borrar" class="mx-2">
      </div>
      <span>* Datos obligatorios.</span>

      <div id="resultados" v-show = mostrarEnviando>
          <button class="btn btn-primary" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              enviando...
          </button>
      </div> 
    </form>
  </div>

</div>

@endsection

