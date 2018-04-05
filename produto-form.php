<!--incluir o cabeçalho
conexao com banco de dados
arquivo de manipulação dos produtos no banco de dados
realizar a busca do produto:$_GET['id']

Montar o formulario
 nome:$produto['nome']
 preco
 Descricao
 Categoria-->
<?php include_once("cabecalho.php");
 include_once ("conecta.php");
 include_once ("produto-database.php");
 ?>
 <!DOCTYPE html>
 <html>
     <form method="POST">
         Nome:<input name='Nome' type ='text'/> 
         Preço:<input name='Preço' type ='text'/> 
         Descrição:<input name='Descrição' type ='text'/> 
         Categoria:<input name='Categoria' type ='text'/> 
         
     </form>
     
     
 </html>



