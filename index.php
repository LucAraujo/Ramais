
<!DOCTYPE>
<html>
      <head>
            <meta charset="utf-8">
            <meta lang="PT-br">
            <title>Vulcan Ramais</title>

            <meta http-equiv="cache-control" content="no-cache">
            <meta http-equiv="expires" content="-1">
            <meta http-equiv="pragma" content="no-cache">

            <link rel="stylesheet" type="text/css" href="/ramais/stylesheet/estilosramais.css">
            <link rel="icon" type="image/ico"  href="/ramais/favicon.ico">
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> 
            <script type="text/javascript" src="script.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">

                              
            <?php                  /*NÃO ARMAZENA CACHE*/
                  header("Cache-Control: no-store, no-cache, must-revalidate");
                  header("Cache-Control: post-check=0, pre-check=0", false);
                  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            ?>
      </head>

      <body>
                    
            <div class="img_logo">  <!-- LOGO DO TOPO -->
                  <a href="/ramais/index.php"><img src="/ramais/imagens/vulcan_logo.png"/><a/>
            </div>
                          
            <div class="title">     <!-- TÍTULO TA TABELA -->
                  <h1>RAMAIS VULCAN</h1>
            </div>
                                          
            <div id="clique">       <!-- BOTÃO IR PARA CELULARES -->      
                  <a href="celulares.php"><img src="/ramais/imagens/clique_aqui4.png" width="300px" height="45px"><a/>
            </div>

            <table id="tabela">                   
                  <thead>           <!-- CABEÇALHO -->
                        <tr> 
                              <th>NOME</th>
                              <th>RAMAL</th>
                              <th>EMAIL</th>
                              <th>SETOR</th>
                        </tr> 
                                    
                        <tr>        <!--INPUTS DE PESQUISA-->
                              <th><input type="text" id="txtColuna1"/></th>
                              <th><input type="text" id="txtColuna2"/></th>
                              <th><input type="text" id="txtColuna3"/></th>
                              <th><input type="text" id="txtColuna4"/></th>
                        </tr>	
                  </thead>  
                                    
                  <tbody>
                        <tr>
                              <td>Aqui o nome</td> <td> ramal </td> <td><a href="https://mail.google.com/mail/?view=cm&fs=1&to=email_da_pessoa_aqui">email_da_pessoa_aqui<a/></td> <td>Setor</td>
                        </tr>

                  </tbody>
            </table>


                        
      </body>

</html>

