<?php
session_start();
sscanf($_SESSION[Full3], "%s %s %s %u %u", $Fam, $Nam, $Oam, $vi, $pl);
$Fullname = $Fam . ' ' . $Nam . ' ' . $Oam;
$prpl = $vi / ($pl / 100);
if ($prpl < 80) {
	$przp = 2;
	$zp = ($vi / 100) * $przp;
} else {
	$przp = 3;
	$zp = ($vi / 100) * $przp;
}
?>

<head>
	<title>Test3</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
   </head>
<body bgcolor="ffffff">
	<br><br><br><br>

	<div style="width: 90%; height: 30%; text-align: center; border-radius: 20px; margin-bottom: 5px; margin:auto; background: #78b7ff;">
	<h1>Ваши результаты</h1>
	<p class="text">
	<table class="end" >
		<tr><th>ФИО</th><th>Выручка</th><th>План по выручке</th><th>Процент выполнения плана</th><th>Процент зп</th><th>Зарплата</th></tr>
        </tr>
		<tr>
			<td><?php echo $Fullname; ?></td><td><?php echo $vi; ?></td><td><?php echo $pl; ?></td><td><?php echo $prpl; ?></td><td><?php echo $przp; ?></td><td><?php echo $zp; ?></td>
		</tr>
		</table>
	</p>
	</form>