<?php require_once __DIR__ . '/../config/connection.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/sobreNos.css">
</head>
<body>

    <?php include __DIR__ . '/../include/header.php'; ?>

    <main class="sobre-nos">
        <section class="sobre-container">
            <div class="sobre-imagem">
                <img src="<?= BASE_URL ?>img/foto-tcc.jpeg" alt="Sobre nós">
            </div>
            <div class="sobre-texto">
                <h1>Sobre Nós</h1>
                <p>
                    A Pastoral de Rua Deus Vivo é uma organização social, que faz o serviço voluntário de distribuir marmitas para as pessoas em situação de rua. Buscando facilitar a organização, o nosso projeto tem o objetivo de gerenciar todas as etapas dessa obra, desde a arrecadação dos alimentos até a distribuição destes, para ser feito da melhor maneira possível.

                    Esse projeto é um TCC (Tese de Conclusão de Curso) desenvolvido pelos alunos Maria Clara Borges, Murilo Gonçalves e Pedro Cassinha, ingressados no último período do curso de Desenvolvimento de Sistemas, da Etec Profº Alfredo de Barros Santos, com a mentoria do Professor Mestre Jonhson de Tarso Silva, com o intuito de colocar em prática os conhecimentos obtidos durante o curso.
                </p>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../include/footer.php'; ?>

</body>
</html>