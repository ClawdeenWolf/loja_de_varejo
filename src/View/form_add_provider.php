<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="../controller/Provider.php" method="POST">
       <section class="mx-4 mt-4 columns-3 "> 
        <article>
            <label for="Name">Fornecedor</label>
            <input type="text" name="Name" id="Name" class="border border-green-800" required>
        </article>
        <article>
            <label for="Cnpj" class="cursor-pointer">CNPJ</label>
            <input type="number" id="Cnpj" name="Cnpj" class="border border-green-800" required> 
        </article>
       </section>
       <section class="mx-4 mt-4 columns-3"><article>
       <article>
            <label for="address" class="cursor-pointer">Endereço</label>
            <input name = "address" id="address" class="border border-green-800">
        </article>
        <article>
            <label for="StreetNumber" class="cursor-pointer">Nº</label>
            <input type="Number" id="StreetNumber" name="StreetNumber" class="border border-green-800" required> 
        </article>
        <article>
            <label for="PublicPlace" class="cursor-pointer">Complemento</label>
            <input name = "PublicPlace" id="PublicPlace" class="border border-green-800">
        </article>
        <article>
            <label for="postalCode" class="cursor-pointer">CEP</label>
            <input type="number" id="postalCode" name="postalCode" class="border border-green-800" required> 
        </article>
            <label for="neighborhood">Bairro</label>
            <input type="text" name="neighborhood" id="neighborhood" class="border border-green-800">
        </article>
        </article>
            <label for="city">Cidade</label>
            <input type="text" name="city" id="city" class="border border-green-800">
        </article>
        <article>
        <section class="mx-4 mt-4 columns-3">
            <label for="state" class="cursor-pointer">Estado</label>
                <select name="state" id="state" class="border border-green-800">
        <option value="ac">Acre</option> 
        <option value="al">Alagoas</option> 
        <option value="am">Amazonas</option> 
        <option value="ap">Amapá</option> 
        <option value="ba">Bahia</option> 
        <option value="ce">Ceará</option> 
        <option value="df">Distrito Federal</option> 
        <option value="es">Espírito Santo</option> 
        <option value="go">Goiás</option> 
        <option value="ma">Maranhão</option> 
        <option value="mt">Mato Grosso</option> 
        <option value="ms">Mato Grosso do Sul</option> 
        <option value="mg">Minas Gerais</option> 
        <option value="pa">Pará</option> 
        <option value="pb">Paraíba</option> 
        <option value="pr">Paraná</option> 
        <option value="pe">Pernambuco</option> 
        <option value="pi">Piauí</option> 
        <option value="rj">Rio de Janeiro</option> 
        <option value="rn">Rio Grande do Norte</option> 
        <option value="ro">Rondônia</option> 
        <option value="rs">Rio Grande do Sul</option> 
        <option value="rr">Roraima</option> 
        <option value="sc">Santa Catarina</option> 
        <option value="se">Sergipe</option> 
        <option value="sp">São Paulo</option> 
        <option value="to">Tocantins</option> 
    </select>
    </article>
    </section>
       <article class="flex justify-center m-3">
       <button type="submit" class="p-3 text-white bg-pink-700 rounded">Cadastrar</button>
    </article>
    </form>
</body>
</html>