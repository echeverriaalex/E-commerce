<?php
    namespace DAO;
    use Models\Categoria;

    class CategoriaDAO{

        private $connection;
        private $tableName = "categorias";

        public function GetAll(){
            try{
                $categoriasList = array();
                $query = "select * from $this->tableName;";
                $this->connection = Connection::GetInstance();
                $categoriasResults = $this->connection->Execute($query);

                foreach($categoriasResults as $row){
                    $categoria = new Categoria($row['descripcion'], $row['categoriaId']);                    
                    array_push($categoriasList, $categoria);
                }
                return $categoriasList;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }
    }
?>