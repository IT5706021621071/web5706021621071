<html>
  <head>
    <meta charset="utf-8">
    <title>Random Array</title>
  </head>
  <body>
    <table width="800" align="center" border="1">
  <?php
  $x=1;
  for ($r=0; $r<13 ; $r++)
  {
    for ($c=0; $c<4 ; $c++)
    {
      $num[$r][$c] = $x;
      $x++;
    }
  }

  for ($r=0; $r <13 ; $r++)
  {
    for ($c=0; $c <4 ; $c++)
    {
      $ran1=rand(0,12);
      $ran2=rand(0,3);
      $swap=$num[$r][$c];
      $num[$r][$c] = $num[$ran1][$ran2];
      $num[$ran1][$ran2] = $swap;
    }
  }

  for ($r=0; $r<13 ; $r++)
  {
    echo "<tr>";
    for ($c=0; $c<4 ; $c++)
    {
      echo  "<td><center>".$num[$r][$c]."</center></td>";
    }
    echo "</tr>";
  }
  /*$x=0;
    while($x<13){
      $i=1;
      for ($r=0; $r<13 ; $r++)
      {
        for ($c=0; $c<4 ; $c++)
        {
          $num[$r][$c] = $i;
          $i++;
        }
      }
      $temp;
      $r = 0;
      $c = 0;
      ////////////////////////////////////////////////////////
      $ran1=rand(0,12);
      $ran2=rand(0,3);
      ///////////////////////////////////////////////////////
      $swap=$num[$r][$c];
      $num[$r][$c] = $num[$ran1][$ran2];
      $num[$ran1][$ran2] = $swap;

      echo $num[$r][$c]."<br/>";

      if($r<13)
      {
        if($c==4)
        {
          $c = 0;
          $r = $r+1;
        }
        else
        {
          $c = $c+1;
        }
        $x++;
      }
      else
      {
        for($r=0; $r <13 ; $r++)
        {
          echo "<tr>";
          for ($c=0; $c <4 ; $c++)
            {
              echo "<td>".$num[$r][$c]."</td>";
            }
          echo "</tr>";
        }
      }
    }*/
    /////////////////////////////////////////////////////////
   ?>
  </table>
  </body>
</html>
