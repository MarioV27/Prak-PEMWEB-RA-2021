<?php
    $mangga = @$_POST['mangga'];
    $jambu = @$_POST['jambu'];
    $salak = @$_POST['salak'];
    $hargamangga = @$_POST['hargamangga'];
    $hargajambu = @$_POST['hargajambu'];
    $hargasalak = @$_POST['hargasalak'];
    $total = @$_POST['total'];

    if(isset($_POST['output']))
    {
        $hargamangga = $mangga * 15000;
        $hargajambu = $jambu * 13000;
        $hargasalak = $salak * 10000;
        $total = $hargamangga + $hargajambu + $hargasalak;
    }
?>
<!DOCTYPE html>
<html>
	<title> Minggu 6 </title>
<body>	
		<form method="POST">
		<label>Mangga[Rp. 15.000/kg] : </label>
        <input type="number" name="mangga" value="0" value="<?mangga?>"> Kg<br>
        <label>Jambu[Rp. 13.000/kg] : </label>
        <input type="number" name="jambu" value="0" value="<?jambu?>"> Kg<br>
        <label>Salak[Rp. 10.000/kg] : </label>
        <input type="number" name="salak" value="0" value="<?salak?>"> Kg<br>
		<input type="submit" name="output" value="Total"><br><br>
		
		<table>
				<tr>
					<td colspan="3" align="center" width="500px" class="title" >TOTAL BELANJAAN</td>
				</tr>
				<tr align="center">
					<td>Buah</td>
					<td>Jumlah (KG)</td>
					<td>Harga</td>
				</tr>
				<tr align="center">
					<td>Mangga</td>
					<td><?php echo $mangga?></td>
					<td><?php echo $hargamangga?></td>
				</tr>
                <tr align="center">
					<td>Jambu</td>
					<td><?php echo $jambu?></td>
					<td><?php echo $hargajambu?></td>
				</tr>
                <tr align="center">
					<td>Salak</td>
					<td><?php echo $salak?></td>
					<td><?php echo $hargasalak?></td>
				</tr>
                <tr align="center">
					<td></td>
					<td>Total</td>
					<td><?php echo $total?></td>
				</tr>
		</table>
</form>
</body>
</html>