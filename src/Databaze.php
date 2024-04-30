<?php

declare(strict_types = 1);

namespace src;

use mysqli;

class Databaze
{

    public function __construct(private mysqli $_db)
    {
    }

    public function nactiUzivatele(): array
    {
        return array_column(
            $this->_db->query('select jmeno from uzivatele')->fetch_all(\MYSQLI_ASSOC),'jmeno');
    }

}