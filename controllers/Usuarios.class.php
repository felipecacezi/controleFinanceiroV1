<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

 require_once("../../config/helpers/HpValidation.class.php");

class UsuariosController {

    private $usuario_id      = null;
    private $usuario_nome    = null;
    private $usuario_usuario = null;
    private $usuario_senha   = null;
    private $validacao       = null;

    public function setData($data){

        $data = json_decode($data);
 
        $this->usuario_id       = isset($data->usuario_id)      && !empty($data->usuario_id)      ? $data->usuario_id      : null; 
        $this->usuario_nome     = isset($data->usuario_nome)    && !empty($data->usuario_nome)    ? $data->usuario_nome    : null;
        $this->usuario_usuario  = isset($data->usuario_usuario) && !empty($data->usuario_usuario) ? $data->usuario_usuario : null;
        $this->usuario_senha    = isset($data->usuario_senha)   && !empty($data->usuario_senha)   ? $data->usuario_senha   : null;

        $this->validacao        = new HpValidation();

    }

    public function validarGravar(){

        var_dump($this->validacao->exist($this->usuario_nome)); exit;
 
        // if($this->validacao->exist($this->usuario_nome)['status'] !== "ok"){

        // }
        // if($this->validacao->exist($this->usuario_usuario)['status'] !== "ok"){

        // }
        // if($this->validacao->exist($this->usuario_senha)['status'] !== "ok"){

        // }

    }
    
    public function initGravar($data){

        $this->setData($data);
        $this->validarGravar();

    }

}