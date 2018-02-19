<?php
final class BandBack
{
	public function checking($amount)
	{
		$sum = $amount;
		$values = array(0, 0, 0);
		$kupSkaicius500 = 0;
		$kupSkaicius100 = 0;
		$kupSkaicius50 = 0;
		$kupSkaicius20 = 0;
		$kupSkaicius10 = 0;
		$kupSkaicius5 = 0;
		$kupSkaicius1 = 0;
		$kupSkaicius = 0;
		
		if ($amount <= 0) { 
			return $values;
		}

		if ($amount >= 500) {
			while ($amount >= 500) {
				$kupSkaicius++;
				$kupSkaicius500++;
				$amount = $amount - 500;
			}
		}

		if (100 <= $amount && $amount < 500) {
			while ($amount < 500 && $amount >= 100) {
				$kupSkaicius++;
				$kupSkaicius100++;
				$amount = $amount - 100;
			}
		}

		if (50 <= $amount && $amount < 100) {
			while ($amount < 100 && $amount >= 50) {
				$kupSkaicius++;
				$kupSkaicius50++;
				$amount = $amount - 50;
			}
		}

		if (20 <= $amount && $amount < 50) {
			while ($amount < 50 && $amount >= 20) {
				$kupSkaicius++;
				$kupSkaicius20++;
				$amount = $amount - 20;
			}
		}

		if (10 <= $amount && $amount < 20) {
			while ($amount < 20 && $amount >= 10) {
				$kupSkaicius++;
				$kupSkaicius10++;
				$amount = $amount - 10;
			}
		}

		if (5 <= $amount && $amount < 10) {
			while ($amount < 10 && $amount >= 5) {
				$kupSkaicius++;
				$kupSkaicius5++;
				$amount = $amount - 5;
			}
		}

		if (1 <= $amount && $amount < 5) {
			while ($amount < 5 && $amount >= 1) {
				$kupSkaicius++;
				$kupSkaicius1++;
				$amount = $amount - 1;
			}
		}
		
		$values = array($kupSkaicius, $sum, $kupSkaicius, $kupSkaicius500, $kupSkaicius100, 
		$kupSkaicius50, $kupSkaicius20, $kupSkaicius10, $kupSkaicius5, $kupSkaicius1); 
		return $values;
	}
	
	public function penkisimtine($kup)
	{
		if ($kup == 0){
			return '';
		}
		if ($kup == 1){	
			return ' ' .$kup . ' penkišimtinės';
		}
		if (1 < $kup){
			return ' ' .$kup . ' penkišimtinių';
		}
	}
	
	public function simtine($kup)
	{
		if ($kup == 0){
			return '';
		}
		if ($kup == 1){	
			return ' ' .$kup . ' šimtinės';
		}
		if (1 < $kup){
			return ' ' .$kup . ' šimtinių';
		}
	}
	
	public function penkiasdesimtine($kup) 
	{
		if ($kup == 0){
			return '';
		}
		if ($kup == 1){	
			return ' ' .$kup . ' penkiasdešimtinės';
		}
		if (1 < $kup){
			return ' ' .$kup . ' penkiasdešimtinių';
		}
	}
	
	public function dvidesimtine($kup) 
	{
		if ($kup == 0){
			return '';
		}
		if ($kup == 1){	
			return ' ' .$kup . ' dvidešimtinės';
		}
		if (1 < $kup){
			return ' ' .$kup . ' dvidešimtinių';
		}
	}
	
	public function desimtine($kup) 
	{
		if ($kup == 0){
			return '';
		}
		if ($kup == 1){	
			return ' ' .$kup . ' dešimtinės';
		}
		if (1 < $kup){
			return ' ' .$kup . ' dešimtinių';
		}
	}
	
	public function penketas($kup) 
	{
		if ($kup == 0){
			return '';
		}
		if ($kup == 1){	
			return ' ' .$kup . ' penketo';
		}
		if (1 < $kup){
			return ' ' .$kup . ' penketų';
		}
	}
	
	public function vienetas($kup)
	{
		if ($kup == 0){
			return '';
		}
		if ($kup == 1){	
			return ' ' .$kup . ' vieneto';
		}
		if (1 < $kup){
			return ' ' .$kup . ' vienetų';
		}
		return '';
	}
}

?>
