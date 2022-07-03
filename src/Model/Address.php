<?php

namespace APP\Model;

class Address
{
    private string $PublicPlace;
    private string $neighborhood;
    private string $city;
    private string $postalCode;
    private int $placenumber;
    private string $state;


    public function __construct(
        int $placenumber,
        int $postalCode,
        string $PublicPlace,
        string $address,
        string $neighborhood,
        string $state,
        string $city
    ) {

        $this->city = $city;
        $this->placenumber = $placenumber;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->PublicPlace = $PublicPlace;
        $this->neighborhood = $neighborhood;
    }
}
