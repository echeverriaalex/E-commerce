<?php
    namespace DAO;

    use PDOException;
    use Models\Usuario;

    class UsuarioDAO{

        private $tableName = "usuarios";
        private $connection;

        public function Add($imagen = null, $nombre = null, $precio = null){
            try{
                $query = "insert into $this->tableName (imagen, nombre, precio) VALUES (:imagen, :nombre, :precio);";
                $this->connection = Connection::GetInstance();
                $parameters['imagen'] = $imagen;
                $parameters['nombre'] = $nombre;
                $parameters['precio'] = $precio;  
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function GetAll(){

            try{
                $usuariosList = array();
                $query = "select * from $this->tableName;";
                $this->connection = Connection::GetInstance();
                $usuariosResult = $this->connection->Execute($query);

                foreach($usuariosList as $row){

                    $usuario = new Usuario($row['email'], $row['password'], , $row['nombre'], $row['usuarioId']);
                    array_push($usuariosList, $usuario);
                }
                return $usuariosList;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function GetUserByEmail($email){

            try{
                $query = "select * from $this->tableName where(email = :email);";
                $parameter['email'] = $email;
                $this->connection = Connection::GetInstance();
                $usuariosResult = $this->connection->Execute($query, $parameter);

                if(!empty($usuariosResult)){
                    foreach($usuariosResult as $row){
                        $usuario = new Usuario($row['email'], $row['password'], , $row['nombre'], $row['usuarioId']);
                    }
                    return $usuario;
                }
                return null;                
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }
    }
?>