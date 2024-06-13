var sabor = document.querySelectorAll("#sabor");
let quantidade = 0;
let quantidade1 = 0;
let quantidade2 = 0;
var sabor2 = document.querySelectorAll("#sabor2");
var sabor3 = document.querySelectorAll("#sabor3");
let btnconfi = document.getElementById("btnconfi");
let btnconfi2 = document.getElementById("btnconfi2");
let btnconfi3 = document.getElementById("btnconfi3");

// Adicione event listeners a cada botão
sabor.forEach(function(botao) {
    botao.addEventListener("click", function() {
        if (botao.classList.contains("naoSelecionado")) {
            quantidade++
            botao.classList.toggle("naoSelecionado")
        } else {
            quantidade--
            botao.classList.toggle("naoSelecionado")
        }
    
        if (quantidade == 3) {
            btnconfi.removeAttribute("disabled");
        } else {
            btnconfi.setAttribute("disabled", "disabled");
        }
    });
});
sabor2.forEach(function(botao) {
    botao.addEventListener("click", function() {
        if (botao.classList.contains("naoSelecionado2")) {
            console.log('oi');
            quantidade1++
            botao.classList.toggle("naoSelecionado2")
        } else {
            console.log('ola');
            quantidade1--
            botao.classList.toggle("naoSelecionado2")
        }
    
        if (quantidade1 == 4) {
            btnconfi2.removeAttribute("disabled");
        } else {
            btnconfi2.setAttribute("disabled", "disabled");
        }
    });
});
sabor3.forEach(function(botao) {
    botao.addEventListener("click", function() {
        if (botao.classList.contains("naoSelecionado3")) {
            quantidade2++
            botao.classList.toggle("naoSelecionado3")
        } else {
            quantidade2--
            botao.classList.toggle("naoSelecionado3")
        }
    
        if (quantidade2 == 5) {
            btnconfi3.removeAttribute("disabled");
        } else {
            btnconfi3.setAttribute("disabled", "disabled");
        }
    });
});




// function desa() {
//     var btnconfir = document.getElementById("btnconfir");
//     btnconfir.removeAttribute("disabled");
// }
// function des() {
//     var btnconfirm = document.getElementById("btnconfirm");
//     btnconfirm.removeAttribute("disabled");
// }

