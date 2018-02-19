<!DOCTYPE html>
<html>
<head>
<title>Bite</title>
</head>
<body>
	
	<form method="post" action="">
		<label>Pinigu suma keitimui</label>
		<input type="number" name="number" value="700"></br>
		<button type="submit" name="update" >Keisti</button>
	</form>

</body>
</html>

<?php
require 'BandBack.php';

if(isset($_POST['update'])) {
	$amount = $_POST['number'];	
	if ($amount <= 0) { 
		echo 'Įvedėte negalimą skaičių.';
	} else {
		$res = BandBack::checking($amount);	
		echo 'Pinigų suma keitimui: '. $amount;
		echo '<br />Minimalus kupiūrų skaičius: ' . $res[0] . '<br />Sumą ' . $res[1] . 
		' galite suformuoti iš mažiausiai ' . $res[2] . ' kupiūrų: '
		. BandBack::penkisimtine($res[3]) 
		. BandBack::simtine($res[4]) 
		. BandBack::penkiasdesimtine($res[5])
		. BandBack::dvidesimtine($res[6])
		. BandBack::desimtine($res[7])
		. BandBack::penketas($res[8])
		. BandBack::vienetas($res[9]) , '.';
	}
}
?>