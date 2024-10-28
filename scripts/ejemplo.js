//console.log("Hello, World")

function sumar(){
    // Declarar variables
    var valor1 = document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;

    var result = parseFloat(valor1) + parseFloat(valor2);

    //Colocar un valor interno dentro de p
    document.getElementById("resultado").innerText = "el resultado de la suma es: " + result;

}
function dividir(){
    // Declarar variables
    var valor1 = document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;

    var result = parseFloat(valor1) / parseFloat(valor2);

    //Colocar un valor interno dentro de p
    document.getElementById("resultado").innerText = "el resultado de la division: " + result;

}

function multiplicar(){
    // Declarar variables
    var valor1 = document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;

    var result = parseFloat(valor1) * parseFloat(valor2);

    //Colocar un valor interno dentro de p
    document.getElementById("resultado").innerText = "el resultado de la multiplicacion es: " + result;
}

function restar(){
    // Declarar variables
    var valor1 = document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;

    var result = parseFloat(valor1) - parseFloat(valor2);

    //Colocar un valor interno dentro de p
    document.getElementById("resultado").innerText = "el resultado de la resta es: " + result;
}
