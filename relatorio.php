<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/fonte.css" media="all">
</head>
<body>
    <form>
        <a href="index.php"><input type="button" value="Novo Cadastro" class="NovoBotao" ></a>
        <input type="button" value="Remover" class="btn">
        <input type="button" value="Editar" class="btn">
    </form>
    <form>
        <fieldset class="relatorio">
            <?php
                $id = $_POST ['identificador'];
                $cda = $_POST['carta'];
                $modelo = $_POST['modelo'];
                $procurador = $_POST['proc'];
                $tipo = $_POST['tipo'];
                $processo = $_POST['processo'];
                $siat = $_POST['nome_siat'];
                $tjpe = $_POST['nome_tjpe'];
                $seq = $_POST['sequencial'];
                $data = $_POST['dia'];
                $obs = $_POST['tx_mensagem'];
                $cadastro = $_POST['data']
            ?>
        <form> 
            <table> 
                <tr>
                    <td>ID:</td>
                    <td><?php echo $id; ?> </td>
                </tr>

                <tr>    
                    <td>Data de Cadastro: </td>
                    <td><?php echo $data; ?></td>

                   
                </tr>
                <tr>    
                    <td>Data da Petição: </td>
                    <td><?php echo $cadastro; ?></td>

                   
                </tr>


                <tr>
                    <td>  Sequencial:          </td>
                    <td><?php echo $seq; ?></td>
                </tr>
                <tr>
                    <td>    TJPE:    </td>
                    <td> <?php echo $tjpe; ?>           </td>
                </tr>
                <tr>
                    <td>    SIAT:        </td>
                    <td><?php echo $siat; ?></td>
                </tr>

                <tr>
                    <td>Processo:  </td>
                    <td><?php echo $processo; ?></td>
                </tr>

                <tr>
                    <td>CDA: </td>
                    <td><?php echo $cda;?></td>
                </tr>

                <tr>
                    <td>Tipo:</td>
                    <td><?php echo $tipo;   ?></td>
                </tr>

                <tr>
                    <td>Modelo: </td>
                    <td><?php echo $modelo; ?></td>
                </tr>

                <tr>
                    <td> Procurador:          </td>
                    <td> <?php  echo $procurador; ?>            </td>
                </tr>

                <tr>
                    <td>     Observação:     </td>
                    <td><?php echo $obs; ?></td>
                </tr>

            </table>
        </form>
            

        </fieldset>
    </form>
</body>
</html>
