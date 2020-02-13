<?php
//$connection = mysqli_connect("localhost", "root", "", "tanarok");
//require_once "include/mysql.php";
 $res = "SELECT ta.nev, tr.nev as Nev, ta.email, ta.besorolas 
 		 FROM tanar ta 
		  inner join kapocs k  on  k.tanar_id = ta.id 
		  inner join targy tr on tr.id = k.targy_id 
		  WHERE ta.besorolas = 'Pedagógus II.' ";
 $result = $connection->query($res);
?> 
<table style="margin:10px auto;border-collapse: collapse; ">
		<tr>
			<td><b>Név</b></td>
			<td><b>Tárgy</b></td>
			<td><b>E-Mail</b></td>
			<td><b>Besorolás</b></td>
		</tr>
		<?php
		while($row = $result->fetch_assoc()) 
		{?>
		<tr>
				<td><?=$row["nev"]?></td>
				<td><?=$row["Nev"]?></td>
				<td><?=$row["email"]?></td>
				<td><?=$row["besorolas"]?></td>
			</tr>
		<?php } ?>
</table>
