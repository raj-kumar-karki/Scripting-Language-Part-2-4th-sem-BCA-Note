<?php
	class calculation
	{
		public $a, $b, $c;

		function sum($first, $second)
		{
			$this->c1 = $first + $second;
			echo $this->c1;
		}

		function sub($first, $second) {
			$this->c1 = $first - $second;
			echo $this->c1;
		}
	}

	$c1 = new calculation();
	$c1->sum(2,3);
	 echo "<br>";

	 $c1 ->sub(12, 4);
?>