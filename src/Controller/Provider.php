<?php

namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Model\Address;
use APP\Model\Provider;
use APP\Utils\Redirect;
use APP\Model\Validation;

if(empty($_POST)){
    session_start();
    Redirect::redirect(
        type:'error',
        message:'Requisição inválida'
    );
}

  $providerName = $_POST["name"];
  $providerCnpj = $_POST["CNPJ"];
  $address = $_POST["address"];
  $addressStreetNumber = $_POST["StreetNumber"];
  $addressPublicPlace = $_POST["PublicPlace"];
  $addressNeighborhood = $_POST["neighborhood"];
  $addressState = $_POST["state"];
  $addressCity = $_POST["city"];
  $addressPostalCode = $_POST["postalCode"];



$error = array();

if(!Validation::validateName($providerName))
{
    array_push($error, 'O nome precisa conter mais de 1 caractere.');
}
if(!Validation::validateCnpj($providerCnpj))
{
    array_push($error, 'O CNPJ contém 14 caracteres.');
}

if(!Validation::validateStreetNumber ($addressStreetNumber))
{
    array_push($error, 'O número do local deve conter, ao menos, 1 caractere');
}

if(!Validation::validateNeighborhood ($AddressNeighborhood))
{
    array_push($error, 'O bairro deve conter, ao menos, 1 caractere.');

}
if(!Validation::validateCity ($AddressCity))
{
    array_push($error, 'A cidade deve conter, ao menos, 1 caractere.');

}
if(!Validation::validatePostalCode ($AddressPostalCode))
{
    array_push($error, 'O número do CEP deve conter, ao menos, 1 caractere');
}


if($error){// se o array NÃO estiver vazio
Redirect::redirect(
    message:$error,
    type:'warning'
);
}else{
    $provider = new Provider(
        Cnpj: $providerCnpj,
        name: $providerName,

    );

    $address = new Address( 
        StreetNumber: $addressStreetNumber,
        neighborhood: $addressNeighborhood,
        state: $addressState,
        city: $addressCity,
        postalCode: $addressPostalCode,
        PublicPlace: $addressPublicPlace
    );

    
    
    Redirect::redirect(
        message:'Fornecedor cadastrado com sucesso!!!'
    );
}
?>