//  INICICIANDO FUNÇÕES ESPECIFICAS PARA BLOQUEAR NUMEROS EM CAMPOS DE QUE SE UTILIZA APENAS TEXTOS
function bloqueiaNumero(texto) {
    var tecla = new String();

    if (window.event) {
        tecla = texto.keyCode;
    } else if (texto.which) {
        tecla = texto.which;
    } else {
        return true;
    }

    if (((tecla < 48) || (tecla > 57)) && (tecla = 8)) {
        return true;
    } else {
        return false;
    }

}

// FUNÇÕES ESPECIFICAS PARA CRIAR MASCARA DE ENTRADA PARA O SISTEMA ONDE O CAMPO REFERIDO É O CAMPO DE CPF
function fMasc(objeto, mascara) {
    obj = objeto
    masc = mascara
    setTimeout("fMascEx()", 1)
}

function fMascEx() {
    obj.value = masc(obj.value)
}

function mCPF(cpf) {
    cpf = cpf.replace(/\D/g, "")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
    return cpf
}



function mNum(num) {
    num = num.replace(/\D/g, "")
    return num
}