<?php
	require_once('classe_bd.php');

    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    //se o checkbox não estiver marcado, não existirá a variável meucheckbox, o valor dele é NULL
    if(isset($_POST['promocoes']))
        $promocoes = "S";
    else
        $promocoes = "N";

	//instancia a classe db e faz a conexão
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $sql = "INSERT INTO mensagens_contato(nome, email, telefone, mensagem, recebera_promocoes) VALUES ('$nome', '$email', '$telefone', '$mensagem', '$promocoes')";

    $resultado_id = mysqli_query($link, $sql);
    if($resultado_id)
    {
    	$mensagem_enviada = true;
        header('Location: contato.php?mensagem_enviada=1');
	}
    else
        echo "Erro no banco de dados.";
?>