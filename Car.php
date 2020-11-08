<?php

require_once 'Vehicle.php';

class Car extends Vehicle

{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats);
    $this-> energy = $energy;

}


}