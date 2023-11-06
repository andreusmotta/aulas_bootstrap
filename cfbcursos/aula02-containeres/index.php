<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    
    <h1>Aula de Bootstrap</h1>

    <div class="container">
        <h2>Este contênier é fixo (com h2)</h2>
        <p>
            Este contêiner é fixo (com p). Ele vai ficar sempre centralizado e será responsivo quando precisar.
        </p>
    </div>
    <br>

    <div class="container" style="border:1px solid #000;">
        <h2>Este contênier é fixo (com h2) com borda em style direto</h2>
        <p>
            Este contêiner é fixo (com p) com borda em style direto. Ele vai ficar sempre centralizado e será responsivo quando precisar.
        </p>
    </div>
    <br>

    <div class="container border" >
        <h2>Este contênier é fixo (com h2) com borda "border" direto do bootstrap</h2>
        <p>
            Este contêiner é fixo (com p) com borda "border" direto do bootstrap. O bootstrap tem uma classe chamada border e estamos usando ela aqui. Ele vai ficar sempre centralizado e será responsivo quando precisar.
        </p>
    </div>
    <br>

    <div class="container-fluid">
        <h2>Este contênier é fluido (com h2)</h2>
        <p>
            Este contêiner é fluido (com p). Ele vai sempre até o final da página, nas bordas e vai se ajustar conforme ela for alterando responsivamente, mas sempre de borda pra borda. No momento com alinhamentos a esquerda. Fica bonito.
        </p>
    </div>
    <br>

    <div class="container-fluid border">
        <h2>Este contênier é fluido (com h2) com borda "border" direto do bootstrap</h2>
        <p>
            Este contêiner é fluido (com p) com borda "border" direto do bootstrap. O bootstrap tem uma classe chamada border e estamos usando ela aqui. Ele vai sempre até o final da página, nas bordas e vai se ajustar conforme ela for alterando responsivamente, mas sempre de borda pra borda. No momento com alinhamentos a esquerda. Fica bonito.
        </p>
    </div>
    <br>

    <div class="container-fluid border pt-5">
        <h2>Este contênier é fluido (com h2) com borda "border" direto do bootstrap e pt-5</h2>
        <p>
            Este contêiner é fluido (com p) com borda "border" direto do bootstrap. O bootstrap tem uma classe chamada border e estamos usando ela aqui. Também colocamos um pt-5 (page top) que dá uma esticada na margem superior. Ele vai sempre até o final da página, nas bordas e vai se ajustar conforme ela for alterando responsivamente, mas sempre de borda pra borda. No momento com alinhamentos a esquerda. Fica bonito.
        </p>
    </div>
    <br>

    <div class="container-fluid border bg-dark text-white">
        <h2>Este contênier é fluido (com h2) com borda direto do bootstrap, fundo e cor de texto</h2>
        <p>
            Este contêiner é fluido (com p) com borda "border" direto do bootstrap. O bootstrap tem uma classe chamada border e estamos usando ela aqui. Também usamos o bg-dark e o text-white pra mudar a cores do fundo e do texto. Ele vai sempre até o final da página, nas bordas e vai se ajustar conforme ela for alterando responsivamente, mas sempre de borda pra borda. No momento com alinhamentos a esquerda. Fica bonito.
        </p>
    </div>
    <br>

    <div class="container-fluid border bg-dark text-white">
        <h2>Este contênier é fluido (com h2) com borda direto do bootstrap, fundo e cor de texto</h2>
        <p>
            Este contêiner é fluido (com p) com borda "border" direto do bootstrap. O bootstrap tem uma classe chamada border e estamos usando ela aqui. Também usamos o bg-dark e o text-white pra mudar a cores do fundo e do texto. Ele vai sempre até o final da página, nas bordas e vai se ajustar conforme ela for alterando responsivamente, mas sempre de borda pra borda. No momento com alinhamentos a esquerda. Fica bonito.
        </p>
    </div>
    <br>

    <div class="container-sm">
        <h2>Este contênier é fluido (com h2) com tamanho small</h2>
        <p>
            Este contêiner é fluido (com p) e "sm" (small) pra tamanho de container. Ele vai sempre até o final da página, nas bordas e vai se ajustar conforme ela for alterando responsivamente, mas sempre de borda pra borda. No momento com alinhamentos a esquerda. Fica bonito.
        </p>
    </div>
    <br>

    <div class="container-xxl">
        <h2>Este contênier é fluido (com h2) com tamanho extra extra largo</h2>
        <p>
            Este contêiner é fluido (com p) e "xxl" (extra extra large) pra tamanho de container. Ele vai sempre até o final da página, nas bordas e vai se ajustar conforme ela for alterando responsivamente, mas sempre de borda pra borda. No momento com alinhamentos a esquerda. Fica bonito.
        </p>
    </div>
    <br>
    



  </body>
</html>