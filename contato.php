<?php 
    require_once 'config.php'; 
    $mensagem_enviada = isset($_GET['mensagem_enviada']) ? 1 : 0;
    include(HEADER_TEMPLATE); //importa o header
?>
    <title>Contato - Holiday Turismo</title>
    <div class="capa-contato" id="body-contato">
        <div class="titulo-capa">
            <h2 class="sombreado">Contato</h2>
        </div>
    </div>

    <section>
        <div class="container corpo"> <!-- container para os conteudos ficarem alinhados, na mesma direção -->

            <div class="row">
                <div class="col-sm-6"> 

                    <form method="POST" action="pega_mensagem.php">

                        <div class="form-group"> <!-- agrupa elementos de formulário -->
                          <label for="nome">Nome</label>
                          <input id="nome" type="text" class="form-control" placeholder="Ex: Ana da Silva" required="" name="nome">
                        </div>

                        <div class="form-group">
                          <label for="email">E-mail</label>
                          <input id="email" type="email" class="form-control" placeholder="Ex: anasilva@gmail.com" required="" name="email">
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input id="telefone" type="telephone" class="form-control" placeholder="Ex: (17)1234-5678" required="" name="telefone">
                        </div>

                        <div class="form-group"> 
                            <label for="mensagem">Mensagem </label><br/>
                            <textarea id="mensagem" class="form-control" rows="5" placeholder="Digite sua mensagem aqui." required="" name="mensagem"></textarea>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked="" name="promocoes"> 
                                Desejo receber novidades e promoções da Holiday Turismo.
                            </label>
                        </div>

                        <button type="submit" class="btn btn-default">Enviar</button> <br/>
                        <?php 
                            if ($mensagem_enviada)
                                echo '<font style = "color: blue"> Mensagem enviada com sucesso! Em breve retornaremos seu contato.</font>';
                        ?> 

                    </form>
                </div>

                <div class="col-sm-6"> 
                    <br/>
                    <span class="glyphicon glyphicon-phone-alt"></span><h4>+55 (17) 1234-0000</h4>
                    <span class="glyphicon glyphicon-phone"></span><h4>+55 (17) 99100-0000</h4>
                    <span class="glyphicon glyphicon-envelope"></span><h4>contato@holidayturismo.com.br</h4>
                    <span class="glyphicon glyphicon-map-marker"></span><h4>Rua Águas de Março, 2154<br/>
                    Centro - São José do Rio Preto/SP<br/>
                    CEP: 15840-520</h4>
                </div>

            </div> <!-- fim da linha -->

        </div> <!-- container -->
    </section>

<?php 
    include(FOOTER_TEMPLATE); //importa o footer 
?>