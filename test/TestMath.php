<?php

class TestMath extends \PHPUnit\Framework\TestCase
{

    public function testAdd(){
        $this->assertEquals(5,\Ylamalem\EstKenitra\Math::add(2+3));
    }
}