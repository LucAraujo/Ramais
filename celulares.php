<!DOCTYPE>
<html>
      <head>
            <meta charset="utf-8">
            <meta lang="PT-br">
            <title>Numéros Celulares Vulcan</title>

            <meta http-equiv="cache-control" content="no-cache">
            <meta http-equiv="expires" content="-1">
            <meta http-equiv="pragma" content="no-cache">

            <link rel="stylesheet" type="text/css" href="/ramais/stylesheet/estilosramais.css">
            <link rel="stylesheet" type="text/css" href="/ramais/stylesheet/estiloscelulares.css">
            <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
            <link rel="icon" type="image/ico"  href="/ramais/favicon.ico">
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> 
            <script type="text/javascript" src="script.js"></script>
            
                              
            <?php                   /*NÃO ARMAZENA CACHE*/
                  header("Cache-Control: no-store, no-cache, must-revalidate");
                  header("Cache-Control: post-check=0, pre-check=0", false);
                  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            ?>
      </head>

      <body>
            <div class="conteudo">               
                  <div class="img_logo">  <!--LOGO DO TOPO-->
                        <a href="//index.php"><img src="/ramais/imagens/vulcan_logo.png"/><a/>
                  </div>
                       
                  <div class="title">     <!--TÍTULO TA TABELA-->
                        <h1>CELULARES VULCAN</h1>
                  </div>
                   
                  <form>                  <!--BOTÃO "VOLTAR"-->
                        <a href="/ramais/index.php"><input type="button"  value="&#8656; Voltar"><a/>
                  </form>

                  <table id="tabela">
                                    
                        <thead>           <!--CABEÇALHO-->
                              <tr id="cabeca">  
                                    <th>Nome</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th>Setor</th>
                              </tr>            

                                    
                              <tr>        <!--INPUTS DE PESQUISA "script.js-->
                                    <th><input type="text" id="txtColuna1"/></th>
                                    <th><input type="text" id="txtColuna2"/></th>
                                    <th><input type="text" id="txtColuna3"/></th>
                                    <th><input type="text" id="txtColuna4"/></th>
                              </tr>	
                        </thead>  

                                          <!--COMEÇO DA TABELA-->   
                        <tbody>

                  		<tr>
                                    <td>Nome da Pessoa</td> <td>0000-000</td> <td>Email</td> <td>Setor</td>
                              </tr>



                        </tbody>
                  </table>
            </div>
      </body>

</html>