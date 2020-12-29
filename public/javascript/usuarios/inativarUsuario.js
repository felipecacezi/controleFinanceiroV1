const inativarUsuario = () => {

    objUsuario = {};

    objUsuario.initInativacao = (usuarioId) => {

        objUsuario.validacao(usuarioId);

        objUsuario.inativar(usuarioId);

    }

    objUsuario.validacao = (usuarioId)=>{

        if(!usuarioId){
            alertError('Erro!', 'Ocorreu um erro ao inativar o usuário.');
            return false;
        }

    }

    objUsuario.inativar = (usuarioId) => {

        let array = { 'usuario_id' : usuarioId }

        fetch("../../../routers/usuarios/inativar.php",{
            method  : "POST",
            body    : JSON.stringify(array),
            headers : { "Content-Type" : "application/json" }
        }).then((response) => {
            return response.json();
        }).then((retorno)=>{
            
            switch(retorno.status){
                case 'ok':                    
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

    return objUsuario;

}