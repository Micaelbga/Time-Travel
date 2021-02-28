<?php

class GerenteBD {
    private $dbStr = "mysql:dbname=viagem_no_tempo;host=127.0.0.1:3306";
    private $user = "root";
    private $password = "";   
    public $dbh;
    private $keyword = "";
    private $platform = "";
    private $type = "";
    
    
    public function __construct() {
        $this->dbh = new PDO($this->dbStr,$this->user,$this->password);
    }
    


    public function setKeyword($keyword): void {
        $this->keyword = $keyword;
    }

    public function setPlatform($platform): void {
        $this->platform = $platform;
    }

    public function setType($type): void {
        $this->type = $type;
    }
   
        
     
     public function ByKeywordTypePlatform(){ 
         $sql = "select distinct filme.imagem, filme.nome_programa, filme.ano_lançamento, transmissão.nome_plataforma1, transmissão.nome_plataforma2,
        filme.tipo_viagem, filme.características_especiais, filme.mecanismo, filme.atores, filme.cena_viagem, filme.frase
        FROM filme 
         join transmissão on filme.id_filme = transmissão.id_filme";
             if ($this->keyword != NULL){
                $sql2 = $sql ." WHERE filme.nome_programa LIKE '%$this->keyword%' or
                filme.ano_lançamento LIKE '%$this->keyword%' or
                transmissão.nome_plataforma1 LIKE '%$this->keyword%' or
                transmissão.nome_plataforma2 LIKE '%$this->keyword%' or
                filme.tipo_viagem LIKE '%$this->keyword%' or
                filme.características_especiais LIKE '%$this->keyword%' or
                filme.mecanismo LIKE '%$this->keyword%' or
                filme.atores LIKE '%$this->keyword%' or
                filme.frase LIKE '%$this->keyword%' or
                filme.cena_viagem LIKE '%$this->keyword%'";
                if($this->platform && $this->type != NULL){
                    $sql2 . " or filme.tipo_viagem LIKE '%$this->type%
                    AND
                    transmissão.nome_plataforma1 LIKE '%$this->platform%' or
                    transmissão.nome_plataforma2 LIKE '%$this->platform%'group by filme.nome_programa";
                }
             } 
        else if ($this->type != NULL){
             $sql2 = $sql . " WHERE filme.tipo_viagem LIKE '%$this->type%";
                if($this->platform != NULL){
                    $sql4 = $sql2 . " AND
                    transmissão.nome_plataforma1 LIKE '%$this->platform%' or
                    transmissão.nome_plataforma2 LIKE '%$this->platform%'group by filme.nome_programa";
                }
        }
        else{
            $sql2 = $sql . " WHERE transmissão.nome_plataforma1 LIKE '%$this->platform%' or
            transmissão.nome_plataforma2 LIKE '%$this->platform%'group by filme.nome_programa";   
        }
        
     $resultado = $this->dbh->query($sql2);
     return $resultado;
     }
         
}
