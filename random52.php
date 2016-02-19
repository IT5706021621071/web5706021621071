<html>
<head>
<meta charset="utf-8">
<title>Random Number</title>
</head>
<body>
  <table width="800" align="center" border="1">
<?php
for ($r=1 ; $r <= 13 ;$r++){
  echo "<tr>";
  for ($c=1 ; $c <= 4 ;$c++){
   $v[$c] = rand(1,52);
   echo "<td><center> $v[$c] </center></td>" ;
 }
 echo " </tr> " ;
 }
 ?>
</table>
</body>
</html>
