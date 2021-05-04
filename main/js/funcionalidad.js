window.addEventListener('load', function(){
    var burger=document.getElementById('burger');
    var mostrar=document.getElementById('menu');
    // var menu=document.getElementsByTagName('li');
     burger.addEventListener('click', function(){
    this.classList.toggle("close"); 
    mostrar.classList.toggle('show'); 
  })

  
})