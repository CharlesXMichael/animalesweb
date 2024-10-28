function añobisiesto (){
    var valor1 = document.getElementById("firstyear").value;
    var valor2= document.getElementById("lastyear").value;
    var div_años = document.getElementById("years");



    for(let i = valor1; i <= valor2; i++){

        if(i%4 == 0){
            div_años.innerHTML += '<p class="noBisiesto">'+i+ '</p>'
        }
        else{
            div_años.innerHTML += '<p class="bisiesto">'+i+'</p>'
        }
        
        

    }
}
   function totalbisiesto(){
    var valor1 = document.getElementById("firstyear").value;
    var valor2= document.getElementById("lastyear").value;
    var div_resultado = document.getElementById("resultado"); 
    var contadorBisiestos = 0; 
   

    for(let i = valor1; i <= valor2; i++){
        if((i % 4 == 0 && i % 100 != 0) || (i % 400 == 0)){
            contadorBisiestos++;
            
        }
    }

    
    div_resultado.innerHTML = "Total de años bisiestos: " + contadorBisiestos;
}
