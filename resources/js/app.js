require('./bootstrap');

console.log('Probando ...');
console.log(document.title)

document.addEventListener("click", (e) => {

//  if ( e.target.matches("div.d-flex.align-items-center.text-center.card-body.h5.fw-bold") || e.target.matches(".card-titulo") ){
    console.log("hizo click", e.target.innerText)
    e.target.innerText = "holaa"
//}


})
