<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("core/EquationInterface.php");
require_once("core/LogAbstract.php");
require_once("core/LogInterface.php");

require_once("Alex/KazikovException.php");
require_once("Alex/Linear.php");
require_once("Alex/Log.php");
require_once("Alex/Square.php");

final class Liner extends TestCase
{
  public function testLinear1(): void
  {
    $solver = new Kazikov\Linear();
    $root = $solver->ur(1, 2);

    $this->assertEquals(
      $root,
      [-2]        
    );
  }

  public function testLinear2(): void
  {
    $this->expectException(Kazikov\KazikovException::class);
    
    $solver = new Kazikov\Linear();
    $root = $solver->ur(0, 0);
  }

  public function testLinear3(): void
  {
    $solver = new Kazikov\Linear();
    $root = $solver->ur(3, 12);

    $this->assertEquals(
      $root,
      [-4]        
    );
  }
}
