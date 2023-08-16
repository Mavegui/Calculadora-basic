<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    
    <form action="logica.php" method="POST">
    <h1 class="mb-3">Calculadora básica</h1>
    
    <!--Radios onde seleciona a operação usada no cálculo-->
    <div class="card text-white bg-dark mb-3">
    <div class="card-header">
        
         <h5 class="card-title">Selecione a operação</h5>
    
    </div>
    <div class="card-body">
    <div class="form-check">
       
        <input type="radio" class="form-check-input" name="opera" value="1" required>
        <label class="form-check-label" for="soma">Soma</label>
    
    </div>
    <div class="form-check">
    
        <input type="radio" class="form-check-input" name="opera" value="2">
        <label class="form-check-label" for="subtrair">Subtração</label>
    
    </div>
    <div class="form-check">
    
        <input type="radio" class="form-check-input" name="opera" value="3">
        <label class="form-check-label" for="multi">Multiplicação</label>
       
    </div>
    <div class="form-check">    
      
        <input type="radio" class="form-check-input" name="opera" value="4">
        <label class="form-check-label" for="divi">Divisão</label>
    
    </div>
    </div>  
    </div>
    
    <!--Formulário onde insire os valores a calcular-->
    <div class="card text-white bg-dark mb-3">
    <div class="card-body mb-2">
        <h5 class="card-title">Insira os valores</h5>
    
    <div class="mb-2">
    
        <label for="valor1" class="form-label">Primeiro valor</label>
        <input type="number" name="valor1" id="vl1" class="form-control" required name=valor1/>
    
    </div>
    <div class="mb-2">
     
        <label for="valor2" class="form-label">Segundo valor</label>
        <input type="number" name="valor2" id="vl2" class="form-control" required name=valor2/>
    </div>
    
        <button type="submit" class="btn btn-success">Calcular</button>
        
    </div>
    </div>
    
    <!--Resultado da operação-->
    <div class="row">
    <div class="col-sm-6">
    
    <div class="card text-white bg-dark mb-3 text-center">
    
    <div class="card-header">
        Resultado
    </div>
    
    <div class="card-body">
     <!--RESULTADO AQUI!-->
     <h1 class="card-title">
    
    <?php
      
      if (isset($_GET["cal"])){
          echo $_GET["cal"];
      }
    
    ?>
    
    </h1>
    </div>
    </div>
    </div>

    <!--Desenvolvedor-->
    <div class="col-sm-6">
    <div class="card text-white bg-dark mb-3 text-center">
    <div class="card-header">
        Desenvolvedor
    </div>
    <div class="card-body">
     <!--RESULTADO AQUI!-->
     <h1 class="card-title">
       Gui Feitosa
    </h1>
    </div>
    </div>
    </div>
    </div>

    <!--Fim do form-->
    </form>
    </div>
</body>
</html>