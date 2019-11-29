<?php

class CodeSniffer_Bad_Style_Sample
{
private $sum = 0;

	function __construct()
	{
		$sum = 0;
		for($i = 1; $i <= 10; ++$i) {
			$sum += $i;
		}
		$this->sum = $sum;
	}

	public function get_sum() {
		return $this->sum;
	}
}
