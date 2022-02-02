<?php
use PHPUnit\Framework\TestCase;

class GuerreraTest extends TestCase{

    private $op;

    public function setUp():void{
        $this->op = new Guerrera('Pepe',12,'viva');
    }

    public function testVida(){
        $this->op->herida();
        $this->assertEquals("viva",$this->op->getEstado());
        $this->assertEquals(2,$this->op->getVida());
    }

    public function testPocavida(){
        $this->op->herida();
        $this->op->herida();
        $this->assertEquals("muerta",$this->op->getEstado());
        $this->assertEquals(-2,$this->op->getVida());
    }


    public function testPoti1(){
        $this->op->herida();
        $this->op->herida();
        $this->op->herida();
        $this->op->pocion();
        $this->assertEquals("muerta",$this->op->getEstado());
        $this->assertEquals(-5,$this->op->getVida());
    }

    public function testPoti2(){
        $this->op->herida();
        $this->op->herida();
        $this->op->pocion();
        $this->assertEquals("viva",$this->op->getEstado());
        $this->assertEquals(5,$this->op->getVida());
    }

}
