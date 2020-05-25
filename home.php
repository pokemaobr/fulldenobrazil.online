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
    <style> * { margin: 0px; padding: 0; } @keyframes blinking { 0%{ background-color: #ff3d50; color: #ddd; } 100%{ background-color: #222291; color: #fff; } } .center {  display: flex; text-align: center; justify-content: center; } .demo{ font-size: 1.3em; font-weight: bold; padding: 10px; margin: 0px; /* NAME | TIME | ITERATION */ animation: blinking 1s infinite; } </style>

</head>
<title> Comunidade de FullStacks Deno do Brazil </title>
</head>
<neck>Isso é um pescoço</neck>
<body>
<div class="center"><img src="topo.png"/></div><br />
<div id="ola"></div>
<img src="under.gif"/>
<div class="demo">Diga olá para a comunidade Full Stack Deno do Brazil! <br />Você é a pessoa visitante de número <?= $visita . '.' . $decimal ?></div>
<div id="deno"><marquee>Clique para ver a documentação</marquee></div>
<!-- Se puder contribuir ou dar uma estrela :) https://github.com/pokemaobr/fulldenobrazil.online -->
<audio src="mtrex.wav" autoplay>
<script>$x = "2" - "a"; alert('O site foi criado em: ' + $x.toString());</script>
<script>var nome = prompt('Qual seu nome?'); $('#ola').text('Olá ' + nome)</script>
<script>$("#deno").on('click', ()=>{ $("#deno").append('<img src="dino.png"/>')})</script>
<script>(function titleScroller(text) {
document.title = text;
setTimeout(function () {
titleScroller(text.substr(1) + text.substr(0, 1));
}, 500);
}(" Comunidade de FullStacks Deno do Brazil "));</script>
</body>
</html>
