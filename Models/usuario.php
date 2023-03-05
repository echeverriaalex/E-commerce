<?php
    namespace Models;

    class Usuario{

        private $usuarioId;
        private $email;
        private $password
        private $nombre;

        public function __construct($email = null, $password = null, $nombre = null, $usuarioId = null){
            $this->setUsuarioId($usuarioId);
            $this->setEmail($email);
            $this->setPassword($password);
            $this->setNombre($nombre);
        }

        public function setUsuarioId($usuarioId){$this->usuarioId= $usuarioId;}
        public function getUsuarioId(){return $this->usuarioId;}

        public function setEmail($email){$this->email = $email;}
        public function getEmail(){return $this->email;}

        public function setPassword($password){$this->password = $password;}
        public function getPassword(){return $this->password;}

        public function setNombre($nombre){$this->nombre = $nombre;}
        public function getNombre(){return $this->nombre;}

        public function setTelefono($telefono){$this->telefono = $telefono;}
        public function getTelefono(){return $this->telefono;}
    }
?>