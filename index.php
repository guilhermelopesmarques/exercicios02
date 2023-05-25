<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio02</title>
</head>
<body>
    <form method="POST">
    Sua Idade: 

    <input type="int" name="idade">
    <button type="submit" name="verificar">verificar</button>
    </form>
    <?php 
    if(isset($_POST['verificar'])){
        $idade = $_POST["idade"];

        if($idade >= 18){
            echo "Você é maior de idade!";

        }else{
            echo "Você é menor de idade!";
        }
          
    }

    
    ?>
</body>
</html>