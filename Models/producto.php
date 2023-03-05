<?php
    namespace Models;

    class Producto{

        private $productoId;
        private $imagen;
        private $nombre;
        private $precio;
        private $categoriaId;
        private $email;

        public function __construct($imagen = null, $nombre = null, $precio = null, $categoriaId = null, $email = null, $productoId = null){
            $this->setimagen($imagen);
            $this->setnombre($nombre);
            $this->setprecio($precio);
            $this->setproductoId($productoId);
            $this->setcategoriaId($categoriaId);
            $this->setemail($email);
        }

        public function getimagen(){return $this->imagen;}
        public function setimagen($imagen){$this->imagen = $imagen;}

        public function getnombre(){return $this->nombre;}
        public function setnombre($nombre){$this->nombre = $nombre;}

        public function getprecio(){return $this->precio;}
        public function setprecio($precio){$this->precio = $precio;}

        public function getproductoId(){return $this->productoId;}
        public function setproductoId($productoId){$this->productoId = $productoId;}

        public function getcategoriaId(){return $this->categoriaId;}
        public function setcategoriaId($categoriaId){$this->categoriaId = $categoriaId;}

        public function getemail(){return $this->email;}
        public function setemail($email){$this->email = $email;}
    }
?>