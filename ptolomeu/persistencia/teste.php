<?

// Chama por include a Classe de Conexão que criamos
include("conexao.php");

// Instanciamos o Objeto
$mysql = new conexao;
// Executa a Query desejada
$listaDeAutores = $mysql->sql_query("select * from autor order by nome asc");
// Desconecta do Banco de Dados
$mysql->desconecta;

// Aqui criamos um objeto chamado $clientes com os resultado
// da query que fizemos acima.
while ($autores = mysql_fetch_object($listaDeAutores)) {
    // Imprimimos os resultados
    print $autores->nome . "<br>";
}
?>