require('./bootstrap');

console.log('Probando ...');

import datos from "/almacen/datos.json"

var adentro = false
var puntero = -1

const encabezado = document.querySelector("#encabezado")
const tarjetas = document.querySelector("#tarjetas")
const card_tarjetas = document.querySelector(".card_tarjetas")
const titulo = document.querySelectorAll(".titulo")
const contenido = document.querySelectorAll(".contenido")

tarjetas.addEventListener("mousemove",moverMouse)
encabezado.addEventListener("mousemove",moverMouse)



function moverMouse(e){
    if (e.target.id === "encabezado"){
        console.log("encabezado")
    }

    // dentro de las tarjetas 
    if (e.target.matches("div.card-tarjetas.card") ) {      

        // mostrar detalle si no está activada
        if (!adentro){                                   
            adentro = true
            datos.forEach(element => {
                if (e.target.innerText === element.servicio){         
                    puntero = element.uid - 1
                    contenido[puntero].classList.remove("ocultar")
                    titulo[puntero].classList.add("ocultar")
                    titulo[puntero].parentNode.classList.add("bg-secondary")
                  //  console.log(titulo[puntero].parentNode)
                }
            })
        }
    }  
    
    // Está fuera de las tarjetas y  tarjeta activada
    if ((e.target.id === "tarjetas" || e.target.id === "encabezado" || e.target.id === "titulo") && adentro){             
        adentro = false
        titulo[puntero].classList.remove("ocultar")
        contenido[puntero].classList.add("ocultar")
        titulo[puntero].parentNode.classList.remove("bg-secondary")
    }

    
     //se mueve dentro de las tarjetas o dentro del titulo
    if ( (e.target.matches("div.card-tarjetas.card") || e.target.matches("div.titulo")) && ( e.type === "mousemove") ){    
        adentro = true
        titulo[puntero].classList.remove("ocultar")
        contenido[puntero].classList.add("ocultar")
        titulo[puntero].parentNode.classList.remove("bg-secondary")
            datos.forEach(element => {
                if (e.target.innerText === element.servicio){          
                    puntero = element.uid - 1
                    contenido[puntero].classList.remove("ocultar")
                    titulo[puntero].classList.add("ocultar")
                    titulo[puntero].parentNode.classList.add("bg-secondary")
                }
            })
    }

}


