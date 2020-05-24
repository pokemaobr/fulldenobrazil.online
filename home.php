<?php

$visita = mt_rand(0,9999999999);
$decimal = mt_rand(0,9999999999);

?>

<html>
<head><script
            src="https://code.jquery.com/jquery-1.12.4.js"
            integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
            crossorigin="anonymous">
    </script>
    <style> * { margin: 0px; padding: 0; } @keyframes blinking { 0%{ background-color: #ff3d50; color: #ddd; } 100%{ background-color: #222291; color: #fff; } } .demo{ font-size: 1.3em; font-weight: bold; padding: 10px; margin: 0px; /* NAME | TIME | ITERATION */ animation: blinking 1s infinite; } </style>

</head>
</head>
<neck>Isso é um pescoço</neck>
<body>
<div class="demo">Diga olá para a comunidade Full Stack Deno do Brazil! <br />Você é a pessoa visitante de número <?= $visita . '.' . $decimal ?></div>
<script>$x = "2" - "a"; alert('O site foi criado em: ' + $x.toString());</script>
</body>
</html>
