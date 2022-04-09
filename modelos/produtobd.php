<?php

require('db.php');
require('produto.php');

class ProdutoBD{

    private Produto $produto;

    public static function insere(Produto $produto){
       try{
        $conn=Db::getConnection();
        $sql = "insert into produto(nome,imagem,fabricante,quantidade,preco) values (?,?,?,?,?);";
        $st = $conn->prepare($sql);
        $endenrecoImagem = "imagens/imagenscadastro/".$produto->__get("nome")."/";
        $st->bindValue(1,$produto->__get('nome'));
        $st->bindValue(2,"/imagens/imagenscadastro/");
        $st->bindValue(3,$produto->__get('fabricante'));
        $st->bindValue(4,$produto->__get('quantidade'));
        $st->bindValue(5,$produto->__get('preco'));
        $st->execute();
        echo "Adicionado com sucesso";
       }
       catch(PDOException $e){
        echo "Error: ".$e->getMessage()." Código: ".$e->getCode();
       }
    } 
    public static function listar(){
        try{
            $conn=Db::getConnection();
            $sql = "select * from produto";
            $lista = $conn->query($sql);
            return $lista->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo "Error: ".$e->getMessage()." Código: ".$e->getCode();
        }
        
    }
    public static function localizar($id){
        try{
            $conn=Db::getConnection();
            $sql = "select * from produto where id= $id ;";
            $lista = $conn->query($sql);
            return $lista->fetch(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo "Error: ".$e->getMessage()." Código: ".$e->getCode();
        }
        
    }
    
}


?>