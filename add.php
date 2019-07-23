
<?php
#montar consulta em php


include 'procuradoria.php';


$dia = $_POST['dia'];
echo $dia;
$peticao = $_POST['peticao'];
echo $peticao;
$sequencial = $_POST['sequencial'];
echo $sequencial;
$nome_tjpe = $_POST['nome_tjpe'];
echo $nome_tjpe;
$nome_siat = $_POST['nome_siat'];
echo $nome_siat;
$processo = $_POST['processo'];
echo $processo;
$carta = $_POST['carta'];
echo $carta;
$tipo = $_POST['tipo'];
echo $tipo;
$modelo = $_POST['modelo'];
echo $modelo;
$procurador = $_POST['procurador'];
echo $procurador;
$tx_mensagem = $_POST['tx_mensagem'];
echo $tx_mensagem;

#banco de dados podendo colocar no valor :nome (?);
$sql = "INSERT INTO procuradoria (dia, peticao, sequencial, nome_tjpe, nome_siat, processo, carta, tipo, modelo, procurador, tx_mensagem)values ( :dia, :peticao, :sequencial, :nome_tjpe, :nome_siat, :processo, :carta, :tipo, :modelo, :procurador, :tx_mensagem)";
#STMT = statiman
$stmt = $conn-> prepare($sql);
#vai pegar a stmt e mudar o parametro do BD (onde tem ":nome" coloque a variavel $nome)

$stmt ->bindParam(":dia", $dia);
$stmt ->bindParam(":peticao", $peticao);
$stmt ->bindParam(":sequencial", $sequencial);
$stmt ->bindParam(":nome_tjpe", $nome_tjpe);
$stmt ->bindParam(":nome_siat", $nome_siat);
$stmt ->bindParam(":processo", $processo);
$stmt ->bindParam(":carta", $carta);
$stmt ->bindParam(":tipo", $tipo);
$stmt ->bindParam(":modelo", $modelo);
$stmt ->bindParam(":procurador", $procurador);
$stmt ->bindParam(":tx_mensagem", $tx_mensagem);
$resultado = $stmt ->execute();


if (!$resultado){
    
    echo "Deu merda";
}
header('location: sucesso.php');