<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 13</title>
    </head>

    <body>
        <pre>
        <?php
            require_once 'Cachorro.php';
            require_once 'Lobo.php';
            require_once 'Mamifero.php';

            $c = new Cachorro();
            $c -> emitirSom();
            $c -> reagirFrase("Olá");
            $c -> reagirFrase("Vai apanhar");
            $c -> reagirHora(11, 45);
            $c -> reagirHora(21, 00);
            $c -> reagirDono(true);
            $c -> reagirDono(false);
            $c -> reagirIdadePeso(2, 12.5);
            $c -> reagirIdadePeso(17, 4.5);

            $l = new Lobo();
            $l -> emitirSom();

            $m = new Mamifero();
            $m -> emitirSom();
        ?>
        </pre>
    </body>
</html>