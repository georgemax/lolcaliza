<?php
  class DB {
    private $conexao;
    
    function __construct ($host, $db,$usuario, $senha) {
      $this->conexao = mysql_connect($host, $usuario, $senha);
      mysql_select_db($db, $this->conexao);
    }
  }
?>
