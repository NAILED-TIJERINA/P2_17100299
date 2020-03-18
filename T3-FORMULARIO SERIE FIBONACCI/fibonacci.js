function limpiar(){
    document.getElementById('miFormulario').reset(); //Limpia los campos
}

function calcular1(){
    var primer_valor = parseInt(document.getElementById("valor1").value);
    var segundo_valor = parseInt(document.getElementById("valor2").value);
    var n_valores = parseInt(document.getElementById("n").value);
    var mostrar = "";
    var Auxiliar = 0;
    mostrar = primer_valor + "-" +segundo_valor;

    for(var i=0; i < n_valores; i++){
        Auxiliar = primer_valor + segundo_valor;
        primer_valor = segundo_valor;
        segundo_valor = Auxiliar;
        mostrar = mostrar + "-"+segundo_valor;
        document.getElementById("el-resultado").innerHTML = mostrar;
    }
}