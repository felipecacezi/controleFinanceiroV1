const getData = ()=>{

    let array = {
        "usuario_nome"    : document.getElementById("usuario_nome").value,
        "usuario_usuario" : document.getElementById("usuario_usuario").value,
        "usuario_senha"   : document.getElementById("usuario_senha").value,
    }

    return array;

}