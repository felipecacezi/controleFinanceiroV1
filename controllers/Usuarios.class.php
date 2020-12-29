<?php

// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

require_once("../../config/helpers/HpValidation.class.php");
require_once("../../models/Usuarios.class.php");

class UsuariosController {

    private $usuario_id      = null;
    private $array           = null;
    private $validacao       = null;
    private $model           = null;

    private function setData($data){

        $data = json_decode($data);

        $this->array = array(
            'usuario_id'       => isset($data->usuario_id)      && !empty($data->usuario_id)      ? $data->usuario_id      : null,
            'usuario_nome'     => isset($data->usuario_nome)    && !empty($data->usuario_nome)    ? $data->usuario_nome    : null,
            'usuario_usuario'  => isset($data->usuario_usuario) && !empty($data->usuario_usuario) ? $data->usuario_usuario : null,
            'usuario_senha'    => isset($data->usuario_senha)   && !empty($data->usuario_senha)   ? $data->usuario_senha   : null,
        );       

        
        $this->validacao    = new HpValidation();
        $this->model        = new UsuariosModel();

    }

    private function validarGravar(){

        $retorno['status'] = 'ok';
 
        if($this->validacao->exist($this->array['usuario_nome'])['status'] !== "ok"){
            $retorno['status'] = 'error';
            $retorno['message'] = 'O campo nome é obrigatório';
            return $retorno;
        }

        if($this->validacao->exist($this->array['usuario_usuario'])['status'] !== "ok"){
            $retorno['status'] = 'error';
            $retorno['message'] = 'O campo usuario é obrigatório';
            return $retorno;
        }

        if($this->validacao->exist($this->array['usuario_senha'])['status'] !== "ok"){
            $retorno['status'] = 'error';
            $retorno['message'] = 'O campo senha é obrigatório';
            return $retorno;
        }

        return $retorno;

    }

    private function gravarUsuario(){
       
        return $this->model->gravar($this->array);

    }
    
    public function initGravar($data){

        $this->setData($data);

        $validacao = $this->validarGravar();        
        if($validacao['status'] !== 'ok'){             
            return $validacao; 
        }

        return $this->gravarUsuario();        

    }

    public function  initBuscarTodos(){

        $data = array();
        $this->setData($data);

        return $this->model->buscarTodos();

    }

    public function initInativar($data){

        $this->setData($data);

        return $this->model->inativar($this->array);

    }

}