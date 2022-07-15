<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Loja de varejo - Cadastro de Fornecedor</title>
</head>
<body>
    <form action="../Controller/Provider.php"method="POST">
        <fieldset class="flex flex-col justify-center p-4 m-5 border border-blue-400">
            <legend>Dados do Fornecedor</legend>
            <section style="margin: 10px 0">
                <article>
                    <label for="name">Nome do Fornecedor: </label>
                    <input type="text id="name="name" class="border border-blue-400" required minlength="2">
                </article>
                <article >
                    <label for="cnpj">CNPJ: </label>
                    <input type="text" id="cnpj" name="cnpj" class="border border-blue-400" required minlength="13" maxlength="18">
                </article>
                <section>
                    <article>
                        <label for="phone">Telefone: </label>
                        <input type="number" id="phone" name="phone" class="border border-blue-400"  >
                    </article>
                </section>
                <fieldset class="p-4 m-5 border border-blue-400">
                    <legend>Dados do Endereço</legend>
                    <section class="columns-2">
                        <article>
                            <label for="publicPlace">Rua: </label>
                            <input type="text" id="publicPlace" name="publicPlace"  class="border border-blue-400" required minlength="2" maxlength="50">
                        </article>
                        <article>
                            <label for="numberOfStreet">Número: </label>
                            <input type="number"id="numberOfStreet" name="numberOfStreet"class="border border-blue-400" >
                        </article>
                        <article>
                            <label for="complement">Complemento: </label>
                            <input type="text" name="complement" id="complement" class="border border-blue-400" >
                        </article>
                        <section class="columns-2"style="margin: 10px 0">
                            <article>
                                <label for="neighborhood">Bairro: </label>
                                <input type="text" name="neighborhood" id="neighborhood" class="border border-blue-400"  >
                            </article>
                            <article>
                                <label for="city">Cidade: </label>
                                <input type="text" name="city" id="city" class="border border-blue-400" required minlength="2">
                            </article>
                            <article>
                                <label for="zipCode">Cep: </label>
                                <input type="text" name="zipCode" id="zipCode" class="border border-blue-400" required minlength="2">
                            </article>
                        </section>
                    </section>
                </fieldset>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-blue-700 rounded">Cadastrar</button>
            </article>
        </fieldset>
    </form>
</body>
</html>