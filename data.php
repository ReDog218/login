<?php  
session_start();
$F = $_POST['F'];
$N = $_POST['N'];
$O = $_POST['O'];
$Fa = mb_strtolower($F);
$Na = mb_strtolower($N);
$Oa = mb_strtolower($O);
$Full = $Fa . ' ' . $Na . ' ' . $Oa;
$filename = "FIO.txt";
$File = fopen($filename, "r");
$fileend = fread($File, filesize($filename));
$fileendwork = mb_strtolower($fileend);
$array = explode(',', $fileendwork);
$x = count($array);
$x = $x - 2;
$c = 0; 
if (condition) {
	// code...
}
while ($c <= $x) {
	sscanf($array[$c], "%s %s %s %u %u", $Fam, $Nam, $Oam, $vi, $pl);
	$Full2 = $Fam . ' ' . $Nam . ' ' . $Oam;
    $c++;
   if ($Full2 === $Full) {
    $Full3 = $Full2 . ' ' . $vi . ' ' . $pl;
    $_SESSION[Full3] = $Full3;
    header('Location: site2.php');
    break;
        }
}
if (!$Full3) {
	$_SESSION['message'] = 'Вы ввели неверные данные';
	header('Location: site.php');
}
?>