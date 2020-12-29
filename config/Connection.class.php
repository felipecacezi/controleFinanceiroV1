<?php

    class Connection {

        private $host      = null;
        private $dbname    = null;
        private $user      = null;
        private $pass      = null;
        private $options   = null;

        public function conn(){

            $this->setConnectionParams();
            return $this->setConnection();

        }

        private function setConnectionParams(){

            $this->host    = 'localhost';
            $this->dbname  = 'controleFinanceiro';
            $this->user    = 'root';
            $this->pass    = 'mySql123';
            $this->options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

        }

        private function setConnection(){

            try {

                $conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pass, $this->options);
                
            } catch (PDOException $exception) {

                $conn = $exception;
                
            }

            
            return $conn;

        }


    }