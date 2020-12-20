<?php

class HpValidation {

    public function exist($data){

        $retorno['status'] = 'ok';

        if($data === null){ 
            $retorno['status'] = 'data_empty';
            return $retorno;
        }

        if(!isset($data) || empty($data)){ 
            $retorno['status'] = 'error'; 
            return $retorno;
        }

        return $retorno;

    }
    
}