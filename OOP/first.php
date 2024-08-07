<?php
	
	class calculation{
		public $a, $b, $c;

		function sum()
		{
			$this->c = $this->a + $this->b;
			echo $this->c;
		}

		function sub() {
			$this->c = $this->a - $this->b;
			echo $this->c;
		}
	}

	$c1 = new calculation();
	$c1->a = 20;
	$c1->b = 10;
	$c1->sum();

	echo "<br>";

	$c2 = new calculation();
	$c2->a = 50;
	$c2->b = 35;
	$c2->sub()

	?>