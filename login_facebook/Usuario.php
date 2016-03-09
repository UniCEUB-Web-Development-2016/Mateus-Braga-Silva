<?php
 class Usuario{

     private $primeiroNome;
     private $segundoNome;
     private $telefone;
     private $senha;
     private $data;
     private $sexo;

 public function __construtor($primeiroNome, $segundoNome, $telefone, $senha, $data, $sexo) {

     self::setPrimeiroNome($primeiroNome);
     self::setSegundoNome($segundoNome);
     self::setTelefone($telefone);
     self::setSenha($senha);
     self::setData($data);
     self::setSexo($sexo);
 }

     /**
      * @return mixed
      */
     public function getPrimeiroNome()
     {
         return $this->primeiroNome;
     }

     /**
      * @param mixed $primeiroNome
      */
     public function setPrimeiroNome($primeiroNome)
     {
         $this->primeiroNome = $primeiroNome;
     }

     /**
      * @return mixed
      */
     public function getSegundoNome()
     {
         return $this->segundoNome;
     }

     /**
      * @param mixed $segundoNome
      */
     public function setSegundoNome($segundoNome)
     {
         $this->segundoNome = $segundoNome;
     }

     /**
      * @return mixed
      */
     public function getTelefone()
     {
         return $this->telefone;
     }

     /**
      * @param mixed $telefone
      */
     public function setTelefone($telefone)
     {
         $this->telefone = $telefone;
     }

     /**
      * @return mixed
      */
     public function getData()
     {
         return $this->data;
     }

     /**
      * @param mixed $data
      */
     public function setData($data)
     {
         $this->data = $data;
     }

     /**
      * @return mixed
      */
     public function getSenha()
     {
         return $this->senha;
     }

     /**
      * @param mixed $senha
      */
     public function setSenha($senha)
     {
         $this->senha = $senha;
     }

     /**
      * @return mixed
      */
     public function getSexo()
     {
         return $this->sexo;
     }

     /**
      * @param mixed $sexo
      */
     public function setSexo($sexo)
     {
         $this->sexo = $sexo;
     }


 }
?>