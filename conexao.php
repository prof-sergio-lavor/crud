<?php 
$host = 'localhost';//caminho do banco de dados
$usuario ='root';
$senha = '';
$bd = 'sergio';
$conexao = new mysqli ($host,$usuario,$senha,$bd);

/*if(!$conexao){
    echo"Erro" .mysqli_connect_error();
}
else {
    echo"Conexao feita";
}*/
?>