<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Fornecedores</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="bg-blue-400">
      <ul>
        <li class="inline">
            <a href="../../index.html">Home</a>
        </li>
        <li class="inline">
            <a href="form_add_product.php">Novo produto</a>
        </li>
        <li class="inline">
          <a href="form_add_provider.php">Novo Fornecedor</a>
        </li>
        <li class="inline">
          <a href="../View/list_of_products.php">Listar Produtos</a>
        </li>
        <li class="inline">
          <a href="#">Listar Fornecedores</a>
        </li>
      </ul>
    </nav>
    <h1 class="text-blue-800 text-center text-3xl mt-4 my-4" >Lista de fornecedores cadastrados</h1>
    <table class="m-auto">
        <thead class="text-white bg-blue-400">
            <th>#</th>
            <th>Nome do Fornecedor:</th>
            <th>CNPJ:</th>
            <th>Telefone:</th>
        </thead>
        <tbody>
            <?php
            session_start();
                foreach($_SESSION['list_of_provider'] as $provider) :
            ?>
                <tr>
                    <td>
                        <?= $provider['provider_code'] ?> 
                    </td>
                    <td>
                      <?= $provider['provider_name'] ?>
                    </td>
                    <td>
                        <?= $provider['cnpj'] ?>
                    </td>
                    <td>
                      <?= $provider['provider_phone'] ?>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</body>
</html>