<?php
namespace Kazikov;
// Линейное уравнение a*x + b = 0

class Linear{
	protected $x;
	function ur($a, $b){
		if ($a != 0) {
			$x = -1*$b/$a;
			$this->x = $x;
			Log::log("Equation is linear");
			Log::log("Equation $a*x+$b=0");
			
			
			return array($x);
		}
		throw new KazikovException("no solutions");	
	}
}
?>