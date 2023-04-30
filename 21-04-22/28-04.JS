function VT() {
    let numero1, numero2, numero3, n1, n2, n3, n4
    numero1 = document.getElementById("cantidad1").value
    numero2 = document.getElementById("valor1").value
        
    numero3 = numero1*numero2 

    n1 = document.getElementById("cantidad2").value
    n2 = document.getElementById("valor2").value

    n3 = n1*n2 
    n4 = n3+numero3
    document.getElementById("Valor1").innerHTML = "<div>Valor total P1 "+ numero3 +"</div>"
    document.getElementById("Valor2").innerHTML = "<div>Valor total P2 "+ n3 +"</div>"
    document.getElementById("Valor-total").innerHTML = "<div>Valor total "+ n4 +"</div>" 
}

function Factura() {
    let n1, n2, n3
    let n5, n6, n7
    
     
    n5 = document.getElementById("subproyecto").value
    document.getElementById("Factura") 

    n6 = document.getElementById("producto1").value
    document.getElementById("Factura").innerText = "<div>nombre del subproducto ""</div>".value

    n3 = document.getElementById("valor1").value
    document.getElementById("Factura").innerText = "<div>producto 2 ""</div>".value


    
}

