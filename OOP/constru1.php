<?php
		class Fruit {
			public $name;
			function __construct($name) {
				$this->name = $name;

			}
			function get_name() {
				echo $this->name;

			}
		}
		$apple = new Fruit("Apple");

		$apple -> get_name();
?>