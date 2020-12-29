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
            return response.json();
        }).then((retorno)=>{
            
            switch(retorno.status){
                case 'ok':
                    objUsuarios.limparFormulario();
                    buscarTodosUsuarios().buscar();
                    alertSuccess('Sucesso!', retorno.message);
                break;
                case 'warning':
                    alertWarning('Atenção!', retorno.message);
                break;
                case 'error':
                    alertError('Erro!', retorno.message);
                break;
            }
            
        })
        
    }

    objUsuarios.limparFormulario = ()=> {

        document.getElementById('usuario_nome').value    = '';
        document.getElementById('usuario_usuario').value = '';
        document.getElementById('usuario_senha').value   = '';

    }

    return objUsuarios;

}