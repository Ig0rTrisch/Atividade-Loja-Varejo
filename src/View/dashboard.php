<?php require_once '../Controller/auth.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loja de varejo - Home</title>
    <link rel="stylesheet" href="src/view/css/style.css" />
  </head>
  <body>
    <nav class="text-blue-800 text-center text-3xl mt-4 my-4">
      <ul>
        <li class="inline">
            <a href="src/View/dashboard.php">Home</a>
        </li>
        <li class="inline">
            <a href="form_add_product.php">Novo produto</a>
        </li>
        <li class="inline">
          <a href="form_add_provider.php">Novo Fornecedor</a>
        </li>
        <li class="inline">
          <a href="src/Controller/Product.php?operation=list">Listar Produtos</a>
        </li>
        <li class="inline">
          <a href="../Controller/Provider.php?operation=list">Listar Fornecedores</a>
        </li>
        <li class="inline">
          <a href="../Controller/User.php?operation=logout">Sair</a>
        </li>
      </ul>
    </nav>
  </body>
</html>
