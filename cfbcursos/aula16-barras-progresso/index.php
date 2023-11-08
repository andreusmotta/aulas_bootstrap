<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="bg-secondary bg-gradient">
        
    <h1>Barras de progresso</h1>
    
    <div class="container">
      Barra de progresso progress-bar com bg-success.
      <div class="progress" style="height: 30px;">
        <div id="pb1" class="progress-bar bg-success" style="width: 50%;"></div>        
      </div>
    </div>
    <br>
    
    <div class="container">
    Barra de progresso progress-bar com bg-success progress-bar-striped.
      <div class="progress" style="height: 30px;">
        <div id="pb2" class="progress-bar bg-success progress-bar-striped" style="width: 50%;"></div>        
      </div>
    </div>
    <br>

    <div class="container">
    Barra de progresso progress-bar com bg-success progress-bar-striped progress-bar-animated.
      <div class="progress" style="height: 30px;">
        <div id="pb3" class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 50%;"></div>        
      </div>
    </div>
    <br>

    <div class="container">
    Várias barras de progresso juntas, bom pra fazer gráficos
      <div class="progress" style="height: 30px;">
        <div id="pb3" class="progress-bar bg-primary" style="width: 50%;">50%</div>
        <div id="pb3" class="progress-bar bg-success" style="width: 20%;">20%</div>
        <div id="pb3" class="progress-bar bg-warning" style="width: 20%;">20%</div>
        <div id="pb3" class="progress-bar bg-danger" style="width: 10%;">10%</div>
      </div>
    </div>
    <br>
    
    <!-- Script de barra andando do pb1-->
    <script>
      let barra=document.getElementById("pb1");
      let carga=0;
      let intBarra=setInterval(()=>{
        barra.innerHTML=carga+"%";
        barra.style.width=carga+"%";
        carga++;
        if(carga>=100){
          carga=0;
        }
      },100);
      </script>
    
    <!-- Script de barra andando do pb2-->
    <script>
      let barra2=document.getElementById("pb2");
      let carga2=0;
      let intBarra2=setInterval(()=>{
        barra2.innerHTML=carga2+"%";
        barra2.style.width=carga2+"%";
        carga2++;
        if(carga2>=100){
          carga2=0;
        }
      },100);
      </script>
    
    <!-- Script de barra andando do pb3-->
    <script>
      let barra3=document.getElementById("pb3");
      let carga3=0;
      let intBarra3=setInterval(()=>{
        barra3.innerHTML=carga3+"%";
        barra3.style.width=carga3+"%";
        carga3++;
        if(carga3>=100){
          carga3=0;
        }
      },100);
      </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    

  </body>
</html>