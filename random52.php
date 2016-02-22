<html>
<head>
<meta charset="utf-8">
<title>Random Number</title>
</head>
<body>
  <table width="800" align="center" border="1">
<?php
//แก้ไขครั้งที่1 ผลลัพธ์ยังไม่ได้ต้องเปลี่ยนหลักการใหม่
  $check = 1;
  for($i=0;$i<52;$i++){
    $array[$i] = $i + 1;
  }
  do{
    $random = rand(1,52);
    $temp;
    for($i=0;$i<52;$i++)
    {
      if($random == $array[$i])
      {
        $temp = $random;
        $array[$x] = 0;
        break;
      }
      elseif ($random != $array[$i])
      {
      }
    }

    for($r=0; $r<13; )
    {
      for($c=0; $c<4; )
      {
        $sum[$r][$c] = $temp;
        if($c==3)
        {
          $c=0;
        }
        $c++;
        break;
      }
      $r++;
      $check = 1;
    }
    /*for($r=0; $r<13; $r++)
    {
      echo "<tr>";
      for($c=0; $c<4; $c++)
      {
        echo "<td><center>$sum[$r][$c]</center></td>";
      }
      echo "</tr>";
    }*/
  }while($check == 0);
 ?>
</table>
</body>
</html>
