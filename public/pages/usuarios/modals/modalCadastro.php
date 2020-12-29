<div id="modalCadastroUsuarios" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Usuários</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form id="frmUsuario" class="container" data-id="">

            <div class="row">

                <div class="col-12">
                    <input id="usuario_nome" type="text" placeholder="Nome" class="form-control" required/>
                </div>

                <div class="col-12"><br></div>

                <div class="col-12">
                    <input id="usuario_usuario" type="text" placeholder="Usuário" class="form-control" required/>
                </div>

                <div class="col-12"><br></div>

                <div class="col-12">
                    <input id="usuario_senha" type="password" placeholder="Senha" class="form-control" required/>
                </div>

                <div class="col-12"><br></div>

            </div>

        </form>

      </div>

      <div class="modal-footer">
        <button onclick="GravarUsuarios().iniciarGravar();" type="button" class="btn btn-success">GRAVAR</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>        
      </div>

    </div>

  </div>

</div>