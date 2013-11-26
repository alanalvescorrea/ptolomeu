<?
require 'conexao.php';
$novaConexao = new conexao();
$novaConexao->conecta();

// recebe por GET o número da página se houver
$pagina = $_GET['pagina'];

// Verifica se existir a variável $pagina passada por GET
// caso não haja, define a página como sendo a de número 1
if (!$pagina) {
    $page = "1";
} else {
    // Caso a variável existir, ele utiliza o valor dela
    $page = $pagina;
}

// Aqui você define quandos Registros serão exibidos por página
$regs = 8;

// Define o inicio em cada página de exibição
$inicio = $page - 1;
$inicio = $inicio * $regs;

// Faz a query no banco de dados para o total desta página
$q_areas = mysql_query("select nome from area ORDER BY nome limit $inicio,$regs");
// Faz a query contando o total completo de resultados
$total = mysql_query("select nome from area");
// Conta o total de registros
$totalreg = mysql_num_rows($total);
// Verifica o número total de páginas, e arredonda o valor
$totalpag = ceil($totalreg / $regs);

// Exibe os dados com orientação a objetos
print "Total de registros: <b>" . $totalreg . "</b><br />";
print "<ul>";
while ($areas = mysql_fetch_object($q_areas)) {
    // Imprime os nomes das empresas na página
    print "<li>Área: <b>" . $areas->nome . "</b></li>";
}
print "</ul>";

// Criaremos os Links para o Anterior e Próximo
$prevlink = $page - 1;
$nextlink = $page + 1;

// Verifica se existe Página Anterior
if ($page > 1) {
    print "<a href=\"?pagina=" . $prevlink . "\"><b>Anterior</b></a>";
} else {
    print "Anterior";
}

// Imprime o Espaçamento, e as informações (1 de 10) Páginas
print " (" . $page . " de " . $totalpag . ") ";

// Verifica se existe Próxima Página
if ($page < $totalpag) {
    print "<a href=\"?pagina=" . $nextlink . "\"><b>Proxima</b></a>";
} else {
    print "Proxima";
}
?>