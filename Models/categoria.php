<?php
    namespace Models;

    class Categoria{

        private $categoriaId;
        private $descripcion;

        public function __construct($descripcion = null, $categoriaId = null){
            $this->setCategoriaId($categoriaId);
            $this->setDescripcion($descripcion);
        }

        public function setCategoriaId($categoriaId){$this->categoriaId = $categoriaId;}
        public function getCategoriaId(){return $this->categoriaId;}

        public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
        public function getDescripcion(){return $this->descripcion;}
    }
?>