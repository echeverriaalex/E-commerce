<?php
    namespace Controllers;

    use DAO\CategoriaDAO;
    use DAO\ProductoDAO;

    class ProductoController{
        private $categoriasDAO;
        private $productoDAO;

        public function __construct(){
            $this->productoDAO = new ProductoDAO();
            $this->categoriasDAO = new CategoriaDAO();
        }

        public function ShowListView(){       
            try{         
                $productosList = $this->productoDAO->GetAll();
                require_once(VIEWS_PATH."producto-list.php");
            }
            catch(PDOException $ex){
                $message = "Error al cargar productos";
            }
        }

        public function ShowAddView(){
            try{
                $categoriasList = $this->categoriasDAO->GetAll();
                require_once(VIEWS_PATH."product-add.php");
            }
            catch(PDOException $ex){
                $message = "Error al cargar categorias";
            }
        }

        public function Add($categoriaId, $imagen, $nombre, $precio, $email){
            try{
                $this->productoDAO->Add($categoriaId, $imagen, $nombre, $precio, $email);
                $this->ShowAddView();
            }
            catch(PDOException $ex){
                $message = "Error al registrar producto";
            }
        }

        public function Detail($id, $img, $nombre, $precio, $categoria, $email){

            require_once(VIEWS_PATH."producto-detail.php");
        }

        public function AddToCart($productoId){

            $product = $this->productoDAO->GetProductById($productoId);

            if(isset($_SESSION['cart'])){
                array_push($_SESSION['cart'], $product);
            }
            else{
                $_SESSION['cart'] = array();
                array_push($_SESSION['cart'], $product);
            }

            var_dump($_SESSION['cart']);
            $this->ShowListView();
        }


    }
?>