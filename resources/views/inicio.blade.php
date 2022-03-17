
@extends('layouts.plantilla')

@section('title', 'Servicio Tecnico Computadores a Domicilio')

@section('encabezado')
<div class="my-3" id="encabezado">
    <p><span class="h2 bg-primary text-white rounded px-3 py-2 "> PC soluciones ✔</span> </p>
    <h2 class="text-primary fs-1"  id="titulo">Soporte Computacional  a Domicilio</h2>
</div>
<hr>

@endsection


@section('contenido')

<div class="row" id="sectionContenido">
  <div class="col-8">
    <div class="d-flex flex-wrap justify-content-evenly pt-1" id="tarjetas">
      @foreach($servicios as $key => $value)
      
        <div class="card-tarjetas card text-secondary  mb-2 shadow-lg 
          d-flex align-items-center justify-content-center text-center "  
          style="width: 17rem; height: 15em"  >

          <div class="titulo h5 fw-bold p-0 m-0 parrafo ">
              {{$servicios[$key]->servicio}}
          </div>

          <div class="contenido ocultar ">
            <div class="fst-italic card-text text-primary p-0 m-0
              d-flex align-items-center text-center justify-content-center parrafo " >
                {{$servicios[$key]->detalle}}
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

