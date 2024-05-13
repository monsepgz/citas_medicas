<?php

Class Connection{
 
    // Información de la base de datos
    private $server = "mysql:host=localhost;dbname=proyecto_final";
    private $username = "root";
    private $password = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    
    // Variable para almacenar la conexión a la base de datos
    protected $conn;
     
    // Método para abrir la conexión a la base de datos
    public function open(){
        try{
            // Intenta establecer la conexión
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            
            // Si la conexión es exitosa, retorna el objeto PDO
            return $this->conn;
        }
        catch (PDOException $e){
            // Si hay un error, muestra el mensaje
            echo "Hubo un problema con la conexión: " . $e->getMessage();
        }
    }
 
    // Método para cerrar la conexión a la base de datos
    public function close(){
        // Cierra la conexión asignando null a la variable $conn
        $this->conn = null;
    }
 
}

?>