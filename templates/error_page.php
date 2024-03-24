<?php
/**
 * @var string $code
 * @var string $text
 * @var string $hint
 */
?>
<html lang="ru">
<head>
    <style>
        body {
            font: normal 100%/1.15 serif;
            background-color: whitesmoke;
            color: black;
        }

        .wrapper {
            max-width: 600px;
            height: auto;
            padding: 1em 2em;
            margin: 2em auto 0 auto;
            background-color: lightsalmon;
            border-radius: 0.75em;
        }

        h1, p {
            text-shadow: 0 0 6px whitesmoke;
        }

        h1 {
            margin: 0 0 1rem 0;
            font-size: 3em;
        }

        p {
            font-size: 1.5em;
        }
    </style>
    <title></title>
</head>
<body>
<div class="wrapper">
    <h1><?= $code ?></h1>
    <p><?= $text ?></p>
    <p><?= $hint ?></p>
</div>
</body>
</html>
