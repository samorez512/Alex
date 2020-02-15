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

final class Tests extends TestCase
{
  public function testSquare1(): void
  {
    $solver = new Kazikov\Square(1, 2, -3);
    $roots = $solver->solve(1, 2, -3);

    $this->assertEquals(
      $roots,
      [1, -3]        
    );
  }

  public function testSquare2(): void
  {
    $this->expectException(Kazikov\KazikovException::class);
    
    $solver = new Kazikov\Square(0, 0, 0);
    $roots = $solver->solve(0, 0, 0);
  }

  public function testSquare3(): void
  {
    $solver = new Kazikov\Square(1, -5, 6);
    $roots = $solver->solve(1, -5, 6);

    $this->assertEquals(
      $roots,
      [3, 2]        
    );
  }

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
