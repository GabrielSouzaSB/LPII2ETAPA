
function mascara_telefone(obj) {
    if (obj.value.length == 0) {
        obj.value += "("
    } else if (obj.value.length == 3) {
        obj.value += ")"
    }
    else if (obj.value.length == 9) {
        obj.value += "-"
    } 
}

    function mascara_cpf(obj) {
        if (obj.value.length == 3) {
            obj.value += ".";
        }
        else if (obj.value.length == 7) {
            obj.value += ".";
        }
        else if (obj.value.length == 11) {
            obj.value += "-";
        }
    }