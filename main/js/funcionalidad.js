window.addEventListener('load', function(){
    var burger=document.getElementById('burger');
    var mostrar=document.getElementById('menu');
    // var menu=document.getElementsByTagName('li');
     burger.addEventListener('click', function(){
    this.classList.toggle("close"); 
    mostrar.classList.toggle('show'); 
  });

  let animado= document.querySelectorAll(".animado");
  let animado2= document.querySelectorAll(".animado2");
  let animado3= document.querySelectorAll(".animado3");
  function mostrarScroll(){
  	let scrollTop= document.documentElement.scrollTop;
  	for (var i=0; i<animado.length; i++){
  		let alturaAnimado = animado[i].offsetTop;
  		if (alturaAnimado - 550 < scrollTop) {
  			animado[i].style.opacity=1;
  			animado[i].classList.add("mostrarArriba");

  		}
  		
  	}
  	for (var i=0; i<animado2.length; i++){
  		let alturaAnimado = animado2[i].offsetTop;
  		if (alturaAnimado - 550 < scrollTop) {
  			animado2[i].style.opacity=1;
  			animado2[i].classList.add("mostrarIzquierda");

  		}
  		
  	}

  	for (var i=0; i<animado3.length; i++){
  		let alturaAnimado = animado3[i].offsetTop;
  		if (alturaAnimado - 550 < scrollTop) {
  			animado3[i].style.opacity=1;
  			animado3[i].classList.add("mostrarDerecha");

  		}
  		
  	}
  	}
  	window.addEventListener('scroll',mostrarScroll);
  
})