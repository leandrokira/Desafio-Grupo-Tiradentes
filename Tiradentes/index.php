<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- CONEXÃO BANCO DE DADOS -->
<?php
  include_once("conexao.php");
  


  $consultaBD = "SELECT * FROM certificados_aluno";
  $conBD = $conn->query($consultaBD) or die($conn->error);

 
  
?>

<!-- CABECALHO -->
<div class="border row">
        <div class=" col-lg-2">
              <img src="imagens/marca.png">
        </div>
        <div class=" col-lg-2">
              <p id="usuario">Nome : Jozé da Silva</p>
              <p id="usuario">Matricula : 46546546546</p>

        </div>

    </div>

<div class="row">
  <div class="col-lg-2">

  </div>
  
  <div  class="border col-lg-8" style="margin-top:50px">
  <!-- TABELA -->
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome do documento</th>
      <th scope="col">Tipo de atividade do certificado</th>
      <th scope="col">Quantidade de horas</th>
      <th scope="col">Status do documento</th>
    </tr>
  </thead>
  <tbody>
  <?php $horas = 0; ?>
        <!-- LEITURA DOS INFORMAÇÕES PARA A TABELA VIA BANCO DE DADOS -->
        <?php  while($dado = $conBD->fetch_array() ){ ?>
        <!-- SOMA DE HORAS -->
        <?php 
        $horas+=$dado["horasDocumento"];
        ?>
         <tr>
            <td scope="row"><a href="<?php echo $dado["linkDocumento"];?>"> <?php echo $dado["nomeDocumentos"];?> </a></th>
            <td><?php echo $dado["tipoDocumento"];?></td>
            <td><?php echo $dado["horasDocumento"];?></td>
            <td><?php echo $dado["statusDocumento"];?></td>
         </tr>
        <?php }?>
        <?php 
        echo "<div class='border'><b>Horas Concluídas : " . $horas . "</b></div>";
        ?>


  </tbody>
</table>
</div>
  <div   class="col-lg-2">
  </div>
    
</body>

</html>