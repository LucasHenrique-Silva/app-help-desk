<?php 
    session_start();
    //pegando informações do formulario
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //abrindo um arquivo.hd
    $arquivo = fopen('../../app_help_desk/arquivo.hd','a');

    //formatando as informações
    $texto = $_SESSION['id'] . '#' . $titulo  . '#' . $categoria . '#' .  $descricao . PHP_EOL;

    //escrevendo no arquivo.hd
    fwrite( $arquivo, $texto);

    //fechando o arquivo.hd
    fclose($arquivo);

    header("Location: abrir_chamado.php")

    

?>