<?php

$table='';
for ($rows=0; $rows<10; $rows++)
	{
    $table .= "<tr>";
    for ($cols=0; $cols<10; $cols++) 
	{
        $colors = Color();
        $table .= "<td style='background-color:#$colors'>$colors<br><span class='text'>$colors</span></td>";
    }
    $table .= '</tr>';
	}
		
function Color() 
{	
	$b = rand(0,255);
    $r = rand(0,255);
    $g = rand(0,255);
    
    return sprintf('%02X%02X%02X', $r, $g, $b);
}
?>

<!doctype html>

<html lang="en">
<head>
<meta charset="UTF-8">
	<style type='text/css'>
	table {
		border-collapse: separate;
	
		  }
	td {
		width: 100;
		height: 100;
		font-family: Calibri;
		font-size: 12pt;
		text-align: center;
		}
	.text {
		color: white;
	}

	</style>
<title>Random Grid</title>
</head>
<body>
	<table align="left">
		<?=$table?>
	</table>
</body>
</html>