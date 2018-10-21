
<?php
include "Header.php";
include "./Clases/Motor.php";

 if(isset($_GET['id'])){
// llamada de la libreria para convertir pdf a texto en html
$parser = new \Smalot\PdfParser\Parser();
//$pdf    = $parser->parseFile('./Repositorio/16102018_320556_2017-Scrum-Guide-Spanish-SouthAmerican.pdf');
$pdf    = $parser->parseFile($_GET['id']);
 
$text = $pdf->getText();

echo $_GET['id'];
echo $_GET['con'];
echo "<h3>".$text."</h3>";
 }
?>

<?php
include "Footer.php"
?>