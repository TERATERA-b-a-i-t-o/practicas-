<h1>Lab 3</h1>

<table border=1>
<?php

/**
 * @author prueba7
 * @copyright 2008
 */


	for ($i=1; $i<=20; $i++)
{
if ($i%2==0)
{
	echo "<tr bgcolor='white'>";		
}
else
{
	echo "<tr bgcolor='yellow'>";		
}
	for ($x=1; $x<=15; $x++)
{
echo "<td>1</td>";
}
echo "</tr>";
}

?>
</table>