<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
        $consumer = new Dummy();
        $consumer->setNombre('Ricardo');
        $consumer->setApellido('Zaldivar');
        $result = $consumer->nombreCompleto();
        $this->assertEquals('Ricardo Zaldivar', $result);
    }
}
