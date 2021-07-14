<?php
require('./DataBase/database.php'); 

class Auth{
    public function getUser($parametros){
        
        try{
            $conn = DbConnection::getConnection(); 

            $sql = "select * from sfood.usuario where nome = '".$parametros['usuario']."' and senha = '".$parametros['senha']."'"; 
            $sql = $conn->prepare($sql); 
            $sql->execute();

            $results = array(); 
            
            while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                $results[] = $row;
            }

            return $results;
        }catch(Exception $ex){
            //echo 'EU PASSEI IAQI';
            throw $ex->getMessage();
        }
    }
}