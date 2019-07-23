<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Procuradoria</title>
   <!-- <img src="imagens/jaboatao.png" alt="foto-procuradoria" class="photo"> -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="all">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script> 
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
    
         <!-- <script>
        function myFunction(){
            alert("Cadastrado com sucesso!")
                    }
         </script>
        -->
        
</head>
<body>
   
    <h1 id="enfase"><strong>PROCURADORIA DA FAZENDA MUNICIPAL</strong></h1>
    
    <div class="container">
       
        <nav>
            <ul class="menu">
                <button type="button"><a href="index.php">Cadastrar</a></button>
                <button type="button"><a href="relatorio.php">Relatorio</a></button>
            </ul>

        </nav>
    </div>

<!--    <div class="img"> <img src="imagens/jab.png" alt="imagem"> </div> -->
    <div class="form">
    <fieldset class="cadastro">  
        <legend>Cadastro de Petições </legend>     
            <form method="post" action="add.php">    
      <!--  <fieldset>
                <label>ID:</label>
                    <input name='identificador' type="text" class="codigo" id="id" placeholder="Identificador" autofocus required > 
        </fieldset>
                    -->
         <fieldset>
                <label>Data de Cadastro:</label>
                    <input name='dia' type="date" id="calendario" class="calendario"  required>
        </fieldset>

        <fieldset>
                <label>Data da Petição:</label>
                    <input name='peticao' type="date" id="calendario" class="calendario"  required>
        </fieldset>


        <fieldset> 
                <label> Sequêncial:</label>
                <input name='sequencial' type="text" class="seq" id="tx_seq" maxlength ="9" placeholder="sequêncial" required> 
        </fieldset>

        <fieldset>
                 <label><strong >Executado</strong> </label><br />
                 <label>TJPE: </label>
                    <input name='nome_tjpe' type="text" class="exec" id="tx_nome" maxlength="50" placeholder="Executado" > <br />
            
                <label>SIAT: </label>  
                    <input name='nome_siat' type="text" class="siat" id="tx_nome" maxlength ="50" placeholder="Executado" >
        </fieldset>

        <fieldset>
                 <label>Número do Processo: </label>
                 <input name='processo' type="text" class="processo" id="tx_id" maxlength="25" placeholder="Número do processo" required>
        </fieldset>
        <fieldset>
                <label aria-required=""> CDA: </label >
                <select name='carta' id=cda class="cda">
                <option>Selecione CDA</option>
                <option >CDA 01</option>
                <option >CDA 02</option>
                <option >CDA 03</option>
                <option >CDA 04</option>
                <option >CDA 05</option>
                <option >CDA 06</option>
                <option >CDA 07</option>
                <option >CDA 08</option>
                <option >CDA 09</option>
                <option >CDA 10</option>
                <option >CDA 11</option>
                <option >CDA 12</option>
                <option >CDA 13</option>
                
            </select>
        </fieldset>

        <fieldset>
                <label> Tipo de Petição:  </label>
                <select name='tipo' id=peticao class="tipo" required>
                <option>Selecione o Tipo</option>
                <option >Extinção</option>
                <option >Suspenção</option>
                </select>
        </fieldset>
        
        <fieldset>
                <label> Modelo: </label>
                <select name='modelo' id=modelo class="modelo"required>
                <option>Selecione o Modelo</option>
                <option>Ausência</option>
                <option>Condenação</option>
                <option>Parcial</option>
                <option>ART-26</option>  
                <option>Outros</option>  
                </select>
             
        </fieldset>
        
        <fieldset>
                 <label> Procurador: </label>
                 <select name='procurador' id=procurador class="procurador" required>
                        <option>Selecione o Procurador</option>
                        <option >Andrea</option>
                        <option >Elker</option>
                        <option >Fernanda</option>
                        <option >Isabel</option>
                        <option >Luiz</option>
                        <option >Marcio</option>
                        <option >Orlando</option>
                        <option >Rafaela</option>
                        <option >Roberta</option>
                        </select>
            
        </fieldset>     
            <label>Observação:</label><br />
            <textarea style="resize" name='tx_mensagem'  class="obs" id="tx_mensagem" placeholder="Digite sua observação aqui" required></textarea> <br/>
            <input type="submit"  class="send" value="Cadastrar" onclick="myFunction()">
            <input type="reset" class="rest" value="Limpar">                       
            </form>
    </fieldset>
    </div>

    
    <div class="nova">
        <fieldset class="refresh">
            <legend>Ultimas Atualizações</legend>            
            <ul>
               <li> </li>
               <li> </li>
               <li> </li>
               <li> </li>
               <li> </li>
             </ul>         
        </fieldset>
    </div>
                
</body>
</html>