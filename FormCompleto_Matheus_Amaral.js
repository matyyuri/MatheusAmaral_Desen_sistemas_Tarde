//EXECUTAR MASCARAS

function mascara(o, f) { //DEFINE O OBJETO E CHAMA FUNCAO
    objeto=o
    funcao=f
    setTimeout("executaMascara()",1)
}

function executaMascara() {
    objeto.value=funcao(objeto.value)
}

//MASCARAS


//Mascara do Telefone

function telefone(variavel) {
    variavel=variavel.replace (/\D/g,"") //Remove tudo que não é digito

    // A LINHA ABAIXO É RESPONSAVEL DE ADICIONAR PARENTESES EM VOLTA DOS DOIS PRIMEIROS DIGITOS
    variavel=variavel.replace (/^(\d\d)(\d)/g,"($1) $2")
    
    //A LINHA ABAIXO É RESPONSAVEL DE ADICIONAR O HIFEM ENTRE O QUARTO E O QUINTO DIGITO
    variavel=variavel.replace (/(\d{4})(\d)/,"$1-$2") //Coloca a segunda barra
    return variavel
}

//Mascara do CPF
function CPF(variavel){
    variavel=variavel.replace (/\D/g,"") //Remove tudo o que não é número

    //Coloca um ponto após o terceiro dígito e o quarto
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2")

    //Coloca um ponto após o sexto digito e o sétimo digito
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2")


    //Coloca um HIFEM após o sétimo digito e permite apenas 2 digitos após o HIFEM
    variavel=variavel.replace (/(\d{3})(\d{1,2})$/,"$1-$2")
    return variavel
}

function CEP(variavel) {
    variavel = variavel.replace(/\D/g, ""); // Remove tudo que não for número

    // Coloca o hífen depois do quinto dígito
    variavel = variavel.replace(/(\d{5})(\d)/, "$1-$2");

    // Garante que só tenha 3 dígitos depois do hífen
    variavel = variavel.replace(/(-\d{3})\d+?$/, "$1");

    return variavel;
}


//Mascara DATA
function data(variavel){
    variavel=variavel.replace(/\D/g,"") //Remove tudo o que não é dígito
    variavel=variavel.replace(/(\d{2})(\d)/,"$1/$2") //Coloca a primeira barra
    variavel=variavel.replace(/(\d{2})(\d)/,"$1/$2")
    return variavel
}

// Máscara do RG
function RG(variavel){
    variavel = variavel.replace(/\D/g, ""); // Remove tudo o que não é número

    // Coloca um ponto após os dois primeiros dígitos
    variavel = variavel.replace(/(\d{2})(\d)/, "$1.$2");

    // Coloca um ponto após os cinco primeiros dígitos
    variavel = variavel.replace(/(\d{3})(\d)/, "$1.$2");

    // Coloca um hífen antes do último dígito
    variavel = variavel.replace(/(\d{3})(\d{1})$/, "$1-$2");

    return variavel;
}

// Função que remove tudo que não é número
function somenteLetras(variavel){
    return variavel.replace(/[^a-zA-Z]/g, ""); // Remove tudo que NÃO for letra
}

// Função genérica que remove tudo que não é número
function somenteNumeros(variavel){
    return variavel.replace(/\D/g, ""); // \D = tudo que NÃO é dígito
}

// Função que permite apenas letras e espaços
function somenteLetrasComEspaco(variavel) {
    return variavel.replace(/[^a-zA-Z ]/g, ""); // Remove tudo que NÃO for letra ou espaço comum
}

function Email(variavel){
    // Remove espaços e caracteres inválidos para e-mails
    return variavel.replace(/[^a-zA-Z0-9@._\-]/g, "");
}

function verificarSenha() {
    const senha = document.getElementById("senha").value;
    const confirmar = document.getElementById("confirmar").value;
    const mensagem = document.getElementById("mensagem");

    if (confirmar === "") {
      mensagem.textContent = "";
      return;
    }

    if (senha === confirmar) {
      mensagem.textContent = "As senhas coincidem!";
      mensagem.className = "ok";
    } else {
      mensagem.textContent = "As senhas não coincidem!";
      mensagem.className = "erro";
    }
}