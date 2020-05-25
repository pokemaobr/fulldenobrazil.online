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
    <style> * { margin: 0px; padding: 0; } @keyframes blinking { 0%{ background-color: #ff3d50; color: #ddd; } 100%{ background-color: #222291; color: #fff; } } .center {  display: flex; text-align: center; } .demo{ font-size: 1.3em; font-weight: bold; padding: 10px; margin: 0px; /* NAME | TIME | ITERATION */ animation: blinking 1s infinite; } </style>

</head>
</head>
<neck>Isso é um pescoço</neck>
<body>
<div class="center"><img src="topo.png"/></div><br />
<div class="demo">Diga olá para a comunidade Full Stack Deno do Brazil! <br />Você é a pessoa visitante de número <?= $visita . '.' . $decimal ?></div>
<div id="deno" onclick"deno"><a href=".">Veja a documentação</a> </div>
<script>$x = "2" - "a"; alert('O site foi criado em: ' + $x.toString());</script>
<script>$('#deno').onclick()</script>
</body>
</html>
