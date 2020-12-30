<?php
require(__DIR__ . '/../vendor/autoload.php');

$markdown = file_get_contents('./README.md');
$parser = new Parsedown();
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title><?= $title ?? 'PHP Studies' ?></title>
    </head>

    <body>
        <?php if($_SERVER['REQUEST_URI'] !== '/'): ?>
            <div>
                <a href="../"><<< Voltar</a>
            </div>
        <?php endif ?>
        <?= $parser->text($markdown) ?>
    </body>
</html>
