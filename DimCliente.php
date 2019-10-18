<?php

namespace dimensoes;
mysqli_report(MYSQLI_REPORT_STRICT);
require_once('Cliente.php');
use dimensoes\Cliente;


class DimCliente{
    public function carregarDimCliente(){

        try{
            $connDimensao = $this->conectarBanco('dm_comercial');
            $connComercial = $this->conectarBanco('bd_comercial');
        }catch(\Expection $e){
            die($e->getMessage());

        }
        $sqlDim = $connDimensao->prepare('select SK_cliente, cpf, nome, sexo, idade, rua, bairro, cidade, uf, from dim_cliente');
        $sqlDim->execute();
        $result = $sqlDim->get_result();
        if($result->num_rows !==0){
    }else{
        
    }
        }

    private function conectarBanco($banco){
        define('DS', DIRECTORY_SEPARATOR); 
        define('BASE_DIR', dirname(__FILE__).DS);
        require_once('config.php');

    try{

       $conn = new \MySQLi($dbhost,$user, $password, $banco);
       return $conn;


    }catch(mysqli_sql_exception $e){
        throw new \Execption($e); 
    }
}
      }


?>

