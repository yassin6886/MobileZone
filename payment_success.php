<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #000;
      }
        h1 {
          color: #88B04B;
          font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #fff;
          font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: #272727;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Compra Exitosa</h1> 
        <p>Hemos recibido su solicitud de compra<br/> Su pedido sera enviado en breve!</p>
      </div>
    </body>
</html>
<?php
// Redirigir a index.php después de 3 segundos
header("refresh:3; url=index.php");
exit;
?>