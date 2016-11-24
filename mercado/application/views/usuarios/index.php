<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>
  <div class="container">
  <h1>Clientes</h1>
  <table class="table">
    <?php foreach ($usuarios as $usuario): ?>
      <tr>
        <td><?= $usuario["nome"] ?></td>
        <td><?= $usuario["senha"]?></td>
      </tr>
    <?php endforeach?>
  </table>
</div>
</body>
</html>
