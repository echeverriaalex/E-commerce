<?php
    namespace DAO;

    use PDOException;
    use Models\Producto;

    class ProductoDAO{

        private $tableName = "productos";
        private $connection;

        public function Add($categoriaId = null, $imagen = null, $nombre = null, $precio = null, $email = null){
            try{
                $query = "insert into $this->tableName (categoriaId, imagen, nombre, precio, email) VALUES (:categoriaId, :imagen, :nombre, :precio, :email);";
                $this->connection = Connection::GetInstance();
                $parameters['categoriaId'] = $categoriaId;
                $parameters['imagen'] = $imagen;
                $parameters['nombre'] = $nombre;
                $parameters['precio'] = $precio;  
                $parameters['email'] = $email; 
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function GetAll(){
            try{
                $productosList = array();
                $query = "select    p.categoriaId,
                                    p.productoId,
                                    p.imagen ,
                                    p.nombre ,
                                    p.precio ,
                                    p.email ,
                                    c.descripcion 
                                    from productos p inner join categorias c 
                                    on p.categoriaId = c.categoriaId;";
                $this->connection = Connection::GetInstance();
                $productosResult = $this->connection->Execute($query);

                foreach($productosResult as $row){

                    $producto = new Producto($row['imagen'], $row['nombre'], $row['precio'], $row['descripcion'], $row['email'], $row['productoId']);
                    array_push($productosList, $producto);
                }
                return $productosList;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function GetProductById($productoId){
            try{
                $query = "select    
                            p.categoriaId,
                            p.productoId,
                            p.imagen ,
                            p.nombre ,
                            p.precio ,
                            p.email ,
                            c.descripcion 
                            from productos p inner join categorias c 
                            on p.categoriaId = c.categoriaId where (productoId = :productoId);";
                $parameter['productoId'] = $productoId;
                $this->connection = Connection::GetInstance();
                $productResult = $this->connection->Execute($query, $parameter);

                if(isset($productResult)){                    
                    foreach($productResult as $row){
                        $product = new Producto($row['imagen'], $row['nombre'], $row['precio'], $row['descripcion'], $row['email'], $row['productoId']);                        
                    }
                    return $product;
                }
                return null;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Delete($id_client){
            try{
                $query = "delete from $this->tableName where(id_client = :id_client);";
                $this->connection = Connection::GetInstance();
                $parameters['id_client'] = $id_client;
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }
    }
?>