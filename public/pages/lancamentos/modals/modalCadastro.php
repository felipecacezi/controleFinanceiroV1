<div id="modalCadastroLancamentos" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lançamentos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form id="frmUsuario" class="container" data-id="">

            <div class="row">

                <div class="col-12">
                    <select id="" class="form-control" placeholder="Tipo Lançamento">
                      <option value="0">Tipo Lançamento</option>
                      <option value="1">Débito</option>
                      <option value="2">Crédito</option>
                    </select>
                </div>

                <div class="col-12"><br></div>

                <div class="col-12">
                    <select id="" class="form-control" placeholder="Tipo Lançamento">
                      <option value="0">Categoria</option>
                      <option value="1">Fixo</option>
                      <option value="2">Cartão</option>
                      <option value="3">Avulso</option>
                    </select>
                </div>

                <div class="col-12"><br></div>

                <div class="col-12">
                    <input id="usuario_senha" type="password" placeholder="Descrição" class="form-control" required/>
                </div>

                <div class="col-12"><br></div>

                <div class="col-12">
                    <input id="usuario_senha" type="password" placeholder="Valor" class="form-control" required/>
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