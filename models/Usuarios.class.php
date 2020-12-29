<?php

require_once('../../config/Connection.class.php');

class UsuariosModel {

    private $conn    = null;

    private function set(){
        $this->conn = new Connection();
    }

    public function gravar(array $data){

        unset($data['usuario_id']);
        $this->set();

        $retorno['status']  = 'ok';
        $retorno['message'] = 'ok';        

        $sql = "insert into usuarios    (usuario_nome,
                                         usuario_usuario,
                                         usuario_password,
                                         usuario_status)
                                        values('".$data['usuario_nome']."',
                                                '".$data['usuario_usuario']."',
                                                '".$data['usuario_senha']."',
                                                '1')";
            
            $execPdo = $this->conn->conn()->exec($sql);

            if($execPdo){

                $retorno['status']  = 'ok';
                $retorno['message'] = 'Usuário inserido com sucesso.';

            } else {

                $retorno['status']  = 'error';
                $retorno['message'] = 'Ocorreu um erro ao inserir o usuário.';

            }


        return $retorno;
    }

    public function buscarTodos(){

        $this->set();

        $retorno['status']  = 'ok';
        $retorno['message'] = 'ok';   
        $arrayRetorno = array(); 

        $sql = "SELECT
                    usuario_id,
                    usuario_nome,
                    usuario_usuario                    

                FROM usuarios
                WHERE usuario_status = 1";
            
            $execPdo   = $this->conn->conn()->query($sql);
            $resultado = $execPdo->fetchAll();

            if(isset($resultado) && !empty($resultado)){

                $retorno['status']  = 'ok';
                $retorno['data']    = $resultado;

            } else {

                $retorno['status']  = 'error';
                $retorno['message'] = 'Nenhum usuário encontrado.';

            }


        return $retorno;


    }

    public function inativar(array $data){

        $this->set();

        $retorno['status']  = 'ok';
        $retorno['message'] = 'ok';        

        $sql = "UPDATE usuarios SET usuario_status = 2 WHERE usuario_id = ".$data['usuario_id'];
        
        $execPdo = $this->conn->conn()->exec($sql);

        if($execPdo){

            $retorno['status']  = 'ok';
            $retorno['message'] = 'Usuário inativado com sucesso.';

        } else {

            $retorno['status']  = 'error';
            $retorno['message'] = 'Ocorreu um erro ao inativar o usuário.';

        }


        return $retorno;
    }


}