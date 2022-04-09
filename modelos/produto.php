<?php
 
 class Produto{
     private $id;
     private $nome;
     private $imagem;
     private $fabricante;
     private $dataCadastro;
     private $quantidade;
     private $preco;

     public function __set($atributo,$valor){
         $this->$atributo=$valor;
     }
     public function __get($atributo){
         return $this->$atributo;
     }
 }
 
 ?>