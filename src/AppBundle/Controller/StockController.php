<?php

namespace AppBundle\Controller;

use Symfony\Bridge\Doctrine\RegistryInterface;

class StockController
{
    public function __construct(RegistryInterface $doctrine)
    {
        $this->doctrine=$doctrine;
    }


}