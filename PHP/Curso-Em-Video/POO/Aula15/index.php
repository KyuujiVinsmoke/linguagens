<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 15</title>
    </head>

    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");
            print_r($v);

            $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");
            $g[1] = new Gafanhoto("Creuza", 12, "F", "Creuzita");
            print_r($g);

            $vis[0] = new Visualizacao($g[0], $v[2]);
            $vis[0] -> avaliar(5);
            $vis[1] = new Visualizacao($g[0], $v[1]);
            $vis[1] -> avaliarPorc(85);
            print_r($vis);
        ?>
        </pre>
    </body>
</html>