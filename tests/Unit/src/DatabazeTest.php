<?php

declare(strict_types = 1);

namespace src;

use mysqli;
use PHPUnit\Framework\TestCase;

class DatabazeTest extends TestCase
{

    private mysqli $_db;

    public function setUp(): void
    {
        $this->_db = new mysqli('mysql-test', 'root', 'root');
        $this->_db->select_db('testovaci_db');
        $this->_db->query('create table uzivatele(id int auto_increment primary key,jmeno varchar(255) not null)');
        $this->_db->query('insert into uzivatele (jmeno) values (\'Tomas\'),(\'Jarka\')');
    }

    public function testNactiUzivatele(): void
    {
        $databaze = new Databaze($this->_db);
        $this->assertSame(['Tomas', 'Jarka'], $databaze->nactiUzivatele());
    }

    public function tearDown(): void
    {
        $this->_db->query('drop table uzivatele');
    }

}