const GravarUsuarios = () => {

    let objUsuarios = {};
    

    objUsuarios.iniciarGravar = ()=> {

        objUsuarios.gravarUsuarios();

    }

    objUsuarios.gravarUsuarios = ()=> {

        fetch("../../../routers/usuarios/gravar.php",{
            method  : "POST",
            body    : JSON.stringify(getData()),
            headers : { "Content-Type" : "application/json" }
        }).then((response) => {

            console.log(response);

        })
        
    }

    return objUsuarios;

}