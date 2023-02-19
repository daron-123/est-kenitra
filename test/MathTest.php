<?php

class MathTest extends \PHPUnit\Framework\TestCase
{

    public function testAdd(){
        $this->assertEquals(4,\Ylamalem\EstKenitra\Math::add(2,3));
    }
}