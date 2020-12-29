const buscarTodosUsuarios = () => {

    objUsuarios = {};

    objUsuarios.buscar = () => {

        fetch("../../../routers/usuarios/buscarTodosUsuarios.php",{
            method  : "POST",
            //body    : JSON.stringify(getData()),
            headers : { "Content-Type" : "application/json" }
        }).then((response) => {
            return response.json();
        }).then((retorno)=>{

            //console.log(retorno); 
            
            switch(retorno.status){
                case 'ok':

                    let prop = null;
                    let elementoGrid = document.getElementById('grdUsuarios');

                    elementoGrid.innerHTML = '';

                    for(prop in retorno.data){

                        elementoGrid.innerHTML +=   `<tr>
                                                        <td style="width:1%;">${retorno.data[prop].usuario_id}</td>
                                                        <td>${retorno.data[prop].usuario_nome}</td>
                                                        <td>${retorno.data[prop].usuario_usuario}</td>
                                                        <td style="width:1%;"><button class="btn btn-secondary" onclick="inativarUsuario().initInativacao(${retorno.data[prop].usuario_id})"><i class="fas fa-trash"></i></button></td>
                                                    </tr>`;

                    }
                    
                break;
                case 'warning':
                    
                break;
                case 'error':
                    
                break;
            }
            
        })

    }

    return objUsuarios;

}