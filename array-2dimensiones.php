<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$carros=array(
array("Volvo",22,18),
array("BMW",123,53),
array("Chev",5,2),
array("Ford",12,50),
);
//El primer valor dentro de los corchetes, equivale al renglon y en segundo a la columna//
echo $carros [0][0].": En stock:".$carros [0][1].", vendidos:".$carros[0][2]."<br>";
echo $carros [1][0].": En stock:".$carros [1][1].", vendidos:".$carros[1][2]."<br>";
echo $carros [2][0].": En stock:".$carros [2][1].", vendidos:".$carros[2][2]."<br>";
echo $carros [3][0].": En stock:".$carros [3][1].", vendidos:".$carros[3][2]."<br>";
?>

<?php
//Imprimir matriz utilizando FOR//
$alumnos=array(
array("<b>Nombre: </b>De la Fuente","<b>Edad:</b> 20","<b>Numero de la suerte: </b>5"),
array("<b>Nombre: </b>Pozos","<b>Edad:</b> 19","<b>Numero de la suerte: </b>10"),
array("<b>Nombre: </b>Castillo","<b>Edad:</b> 21","<b>Numero de la suerte: </b>9"),
array("<b>Nombre: </b>Rodriguez","<b>Edad:</b> 23","<b>Numero de la suerte: </b>5"),
);

//Imprimir en lista desordenada//ul (Lista desordenada)//li (Lista ordenada)//
for ($row=0; $row<4; $row++) { 
	echo "<p><b> No. renglon $row </b></p>";
	echo "<ul>";
	for ($col=0; $col<3 ; $col++) { 
		echo "<li>".$alumnos[$row][$col]."</li>"; //Modificar//
	}
	echo "</ul>";
}
?>
//El nombre es: //Edad es: //Numero de la suerte://
</body>
</html>