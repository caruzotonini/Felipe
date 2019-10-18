<?php

namespace dimensoes;


/**
 * Model da entidade cliente
 * @author Phellip Bonavigo
 * 
 * 
 */

class Cliente{

public $cpf;
public $nome;
public $sexo;
public $idade;
public $rua;
public $bairro;
public $cidade;
public $uf;



/** 
 * Carrega os atributos da Classe Prospect
 * @param $cpf CPF do cliente
 * @param $nome Nome do cliente
 * @param $sexo Sexo do cliente
 * @param $idade Idade do cliente
 * @param $rua Rua do cliente
 * @param $bairro Bairro do cliente
 * @param $cidade Cidade do cliente
 * @param $uf UF do cliente
 * @return Void
 */

public function setCliente($cpf,$nome,$sexo,$idade,$rua,$bairro,$cidade,$uf){

    $this->cpf= $cpf; 
    $this->nome= $nome; 
    $this->sexo= $sexo; 
    $this->idade= $idade; 
    $this->rua= $rua; 
    $this->bairro= $bairro;
    $this->cidade= $cidade;
    $this->uf= $uf;   


}

}



?>
