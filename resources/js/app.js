require('./bootstrap');

console.log('Probando ...');

import datos from "/almacen/datos.json"

var adentro = false
var puntero = -1


const titulo = document.querySelectorAll(".titulo")
const contenido = document.querySelectorAll(".contenido")
const tarjetas = document.querySelector("#tarjetas")

tarjetas.addEventListener("mousemove",eventos)

function eventos(e){

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
                }
            })
        }
    }  
    
    // Está fuera de las tarjetas y  tarjeta activada
    if (e.target.id === "tarjetas" && adentro){             
        adentro = false
        titulo[puntero].classList.remove("ocultar")
        contenido[puntero].classList.add("ocultar")
    }

    
     //se mueve dentro de las tarjetas
    if ( (e.target.matches("div.card-tarjetas.card") || e.target.matches("div.titulo")) && ( e.type === "mousemove") ){    
        adentro = true
        titulo[puntero].classList.remove("ocultar")
        contenido[puntero].classList.add("ocultar")
            datos.forEach(element => {
                if (e.target.innerText === element.servicio){          
                    puntero = element.uid - 1
                    contenido[puntero].classList.remove("ocultar")
                    titulo[puntero].classList.add("ocultar")
                }
            })
    }

}


