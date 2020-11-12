<?php
  include 'Artigo.php';
  $artigo = new Artigo();
  $artigos = $artigo->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Meu Blog</h1>
        <?php 
            foreach($artigos as $artigo) :        
        ?>
        <h2>
            <a href="<?php echo $atigo['link'];?>">
                <?php
                 echo $atigo['titulo'];

                ?>
            </a>
        </h2>
        <p>
            <?php echo $atigo['conteudo'];
            ?>
        </p>
            <?php endforeach; ?>
       
    </div>
</body>

</html>